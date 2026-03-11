<?php
require_once("../../Actions/Check.php");

$sql = "SELECT p.*, u.name, u.surName, u.avatar 
        FROM is_saved s
        JOIN Posts p ON s.post_id = p.Id 
        JOIN Users u ON p.user_id = u.Id
        WHERE s.user_id = $Id";
$result = mysqli_query($db, $sql);


$postId = isset($_GET['postId']) ? intval($_GET['postId']) : null;
$header = "../../Pages/User/SavedPosts.php";
if ($postId) {
    $postId = intval($postId);
    $display = "flex";
    $all = "none";
    $checkCommentSql = "SELECT * FROM comment_user WHERE post_id=$postId";
    if (mysqli_num_rows(mysqli_query($db, $checkCommentSql)) == 0) {
        mysqli_query($db, "INSERT INTO comment_user (post_id) VALUES ($postId)");
    }
} else {
    $display = "none";
    $all = "block";
}
require_once("../../Styles/User/SavedPostsStyle.php");
require_once("../../Styles/HeadStyle.php");
require_once("../../Styles/PostStyle.php");
require_once("../../Styles/CommentStyle.php");
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <title>Պահպանվածներ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>


<body>
    <div style="display: <?= $all ?>;">
        <?php require_once("../Head.php"); ?>

        <div class="container">
            <div class="saved-header">
                <i class="fas fa-bookmark"></i>
                <h1>Պահպանված հրապարակումներ</h1>
                <p>Միայն դուք կարող եք տեսնել ձեր պահպանած պոստերը</p>
            </div>
            <div class="posts-grid">
                <?php require_once("../Posts.php"); ?>
            </div>
        </div>
    </div>

    <?php
    require_once("../Comment.php");
    ?>
</body>

</html>