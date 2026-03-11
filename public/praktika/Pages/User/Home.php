<?php
require_once("../../Actions/Check.php");
require_once("../../Path.php");
require_once("../../Styles/User/HomeStyle.php");
require_once("../../Styles/PostStyle.php");
require_once("../../Styles/CommentStyle.php");
require_once("../../Styles/HeadStyle.php");
$postId = isset($_GET['postId']) ? intval($_GET['postId']) : null;
if (isset($_GET['postId'])) {
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
$sql = "SELECT p.*, u.name, u.surName, u.avatar 
        FROM Posts p 
        JOIN Users u ON p.user_id = u.Id 
        WHERE u.status = 1 
        ORDER BY p.time DESC";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Գլխավոր - MyApp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div style="display: <?= $all ?>;">

        <?php require_once("../Head.php"); ?>
        <div class="container">

            <div class="upload-card">
                <h3 style="font-size: 16px; margin-bottom: 10px;">Ի՞նչ կա նորություն:</h3>
                <form action="../../Actions/Posts/addPost.php" method="POST" enctype="multipart/form-data" class="upload-form">
                    <input type="text" name="caption" maxlength="500" required placeholder="Գրիր ինչ-որ բան...">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <label for="post-img" style="cursor: pointer; color: var(--primary); font-weight: 600; font-size: 14px;">
                            <i class="fas fa-image"></i> Ավելացնել նկարներ
                        </label>
                        <input type="file" name="post_image[]" id="post-img" style="display:none" multiple>
                        <button type="submit" class="btn-post" name="post" style="background: var(--primary); color: white; border: none; padding: 8px 25px; border-radius: 8px; font-weight: 600; cursor: pointer;">Հրապարակել</button>
                    </div>
                </form>
            </div>
            <?php require_once("../Posts.php"); ?>
        </div>
    </div>

    <?php
    $header = "../../Pages/User/Home.php";
    require_once("../Comment.php");
    ?>
</body>

</html>