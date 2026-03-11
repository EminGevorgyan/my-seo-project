<?php
require_once("../../Actions/Check.php");
require_once("../../Styles/User/UserProfileStyle.php");
require_once("../../Styles/HeadStyle.php");
require_once("../../Styles/PostStyle.php");
$sql = "SELECT * FROM Friends WHERE receiver_id=$Id";
$followUp = mysqli_query($db, $sql);
$sql = "SELECT * FROM Friends WHERE sender_id=$Id";
$follower = mysqli_query($db, $sql);
$friends = mysqli_fetch_assoc($follower);
$followerCount = mysqli_num_rows($follower);
$followUpCount = mysqli_num_rows($followUp);

if ($friends) {
    if ($friends['status'] == 1) {
        $follow = "unfollow";
        $followText = "Ընկերներ";
    } elseif ($friends['status'] == 0) {
        $follow = "unfollow";
        $followText = "Դադարեցնել";
    }
} else {
    $follow = "follow";
    $followText = "Հետևել";
}

$userId = isset($_GET['userId']) ? intval($_GET['userId']) : 0;
$stmtUser = $db->prepare("SELECT name, surName, avatar FROM Users WHERE Id = ?");
$stmtUser->bind_param("i", $userId);
$stmtUser->execute();
$other = $stmtUser->get_result()->fetch_assoc();
$avatar = $other['avatar'];
$name = $other['name'];
$surName = $other['surName'];
$sql = "SELECT * FROM Posts WHERE user_id=$userId ";
$Posts = mysqli_query($db, $sql);
$postCount = mysqli_num_rows($Posts);
$postId = $_GET['postId'] ?? '';
if ($postId) {
    $display = "flex";
    $all = "none";
    $sql = "SELECT * FROM comment_user WHERE post_id='$postId'";
    $comments_user = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if (!$comments_user) {
        $sql = "INSERT INTO comment_user (post_id) VALUES ('$postId')";
        mysqli_query($db, $sql);
    }
} else {
    $display = "none";
    $all = "block";
}
$stmt = $db->prepare("
    SELECT p.*, u.name, u.surName, u.avatar 
    FROM Posts p 
    JOIN Users u ON p.user_id = u.Id 
    WHERE p.user_id = ? AND p.is_archive = 0 
    ORDER BY p.Id DESC
");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <title>Օգտատիրոջ Պրոֆիլը</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div style="display: <?= $all ?>;">
        <?php require_once("../Head.php"); ?>

        <div class="profile-container">
            <header class="profile-header">
                <div class="profile-image">
                    <img src="<?= $path_avatar . $avatar ?>" alt="User Avatar">
                </div>

                <section class="profile-details">
                    <form action="../../Actions/User/UserProfile.php?userId=<?= $userId ?>" method="POST">
                        <div class="profile-username-row">
                            <h2><?= $name ?></h2>
                            <?php if ($userId !== $Id) {  ?>
                                
                                <button  class="btn-follow" name="<?= $follow ?>"><?= $followText ?></button>
                                <?php if ($followText == "Ընկերներ") {
                                ?>
                                    <button class="btn-message" name="chat">Նամակ</button>

                            <?php }
                            } ?>
                        </div>
                    </form>

                    <div class="profile-stats">
                        <span><b><?= $postCount ?></b> հրապարակում</span>
                        <span><b><?= $followerCount ?></b> հետևորդ</span>
                        <span><b><?= $followUpCount ?></b> հետևվող</span>
                    </div>


                </section>
            </header>
            <?php require_once("../Posts.php"); ?>
        </div>
    </div>

    <?php
    $header = "../../Pages/User/UserProfile.php?userId=$userId";
    require_once("../Comment.php");
    ?>
    </div>
</body>

</html>