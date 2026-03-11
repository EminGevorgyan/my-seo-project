<?php
require_once("../../Actions/Check.php");
require_once("../../Styles/User/ProfileStyle.php");
require_once("../../Styles/HeadStyle.php");
$avatar = $user['avatar'];
$name = $user['name'];
$surName = $user['surName'];
$stmt = $db->prepare("
    SELECT p.*, 
           (SELECT COUNT(*) FROM is_liked WHERE post_id = p.Id) as likeCount,
           EXISTS(SELECT 1 FROM is_liked WHERE post_id = p.Id AND user_id = ?) as isLiked,
           EXISTS(SELECT 1 FROM is_saved WHERE post_id = p.Id AND user_id = ?) as isSaved
    FROM Posts p 
    WHERE p.user_id = ? 
    ORDER BY p.Id DESC
");
$stmt->bind_param("iii", $Id, $Id, $Id);
$stmt->execute();
$Posts = $stmt->get_result();
$postCount = mysqli_num_rows($Posts);
$sql = "SELECT * FROM Friends WHERE receiver_id=$Id";
$followUp = mysqli_query($db, $sql);
$followCount = mysqli_num_rows($followUp);
$postId = isset($_GET['postId']) ? intval($_GET['postId']) : null;
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
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Պրոֆիլ - Շաբլոն</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div style="display: <?= $all ?>;">
        <?php require_once("../Head.php"); ?>

        <div class="profile-container">

            <header class="profile-header">
                <div class="profile-image-container">
                    <img src="<?= $path_avatar . $avatar ?>" alt="Profile">
                </div>

                <div class="profile-info">
                    <h2><?= $name . " " . $surName ?></h2>
                    <div class="profile-stats">
                        <span><b><?= $postCount ?></b> հրապարակում</span>
                        <span><b><?= $followCount ?></b> հետևորդ</span>
                    </div>
                    <a href="./UpdateProfile.php" class="edit-btn">Խմբագրել</a>
                </div>
            </header>
            <div class="posts-grid">
                <?php foreach ($Posts as $post) {
                    $posId = $post['Id'];
                    $sql = "SELECT * FROM post_images WHERE post_id=$posId ORDER BY id DESC";
                    $postImages = mysqli_query($db, $sql);
                    $like = ($post['isLiked'] == 1) ? "disLike" : "like";
                    $save = ($post['isSaved'] == 1) ? "unsave" : "save";
                ?>
                    <form action="../../Actions/User/Profile.php" method="post">
                        <div class="post">
                            <div class="post-header">
                                <img src="<?= $path_avatar . ($avatar ?? 'default.png') ?>" alt="Avatar">
                                <div class="post-info">
                                    <h4><?= htmlspecialchars($name . ' ' . $surName, ENT_QUOTES, 'UTF-8') ?></h4>
                                    <span><?= htmlspecialchars($post['time'] ?? '', ENT_QUOTES, 'UTF-8') ?></span>
                                </div>
                            </div>

                            

                            <div class="carousel-view">
                                <?php foreach ($postImages as $postImage) { ?>
                                    <div class="carousel-item">
                                        <img src="<?= $path_post .( $postImage['url'] ?? 'default.png') ?>" class="post-image" alt="Post">
                                    </div>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="postId" value="<?= $post['Id'] ?>">
                            <div class="post-actions">
                                <div class="left-actions">
                                    <button name="<?= $like ?>" class="<?= $like ?>"><i class="fa fa-heart" aria-hidden="true"></i> Հավանել <?= $post["likeCount"] ?></button>
                                    <a href="./Profile.php?postId=<?= $posId ?>" name="comment" style="display: block;"><i class="far fa-comment"></i> Մեկնաբանել</a>
                                </div>
                                <div class="right-actions">
                                    <a href="./editPost.php?id=<?= $posId ?>" class="edit-post-icon" title="Խմբագրել">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button class="save-btn" name="<?= $save ?>"><i class="<?php if ($save == "save") {
                                                                                                echo "far fa-bookmark";
                                                                                            } else {
                                                                                                echo "fas fa-bookmark";
                                                                                            }
                                                                                            ?>"></i> <?php if ($save == "save") {
                                                                                                            echo "Պահպանել";
                                                                                                        } else {
                                                                                                            echo "Պահպանված";
                                                                                                        } ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
    $header = "../../Pages/User/Profile.php";
    require_once("../Comment.php");
    ?>
</body>

</html>