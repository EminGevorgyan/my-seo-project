<?php foreach ($result as $post) {
    $posId = $post['Id'];
    if (empty($post['name'])) {
        continue; 
    }
    $user_id = $post['user_id'];
    $postImages = mysqli_query($db, "SELECT * FROM post_images WHERE post_id=$posId");
    $likeCount = mysqli_num_rows(mysqli_query($db, "SELECT Id FROM is_liked WHERE post_id=$posId"));
    $isLiked = mysqli_query($db, "SELECT Id FROM is_liked WHERE user_id=$Id AND post_id=$posId");
    $isSaved = mysqli_query($db, "SELECT Id FROM is_saved WHERE user_id=$Id AND post_id=$posId");

    $like = mysqli_num_rows($isLiked) ? "disLike" : "like";
    $save = mysqli_num_rows($isSaved) ? "unsave" : "save";
?>
    <div class="post">
        <div class="post-header">
            <a href="./UserProfile.php?userId=<?= $user_id ?>"><img src="<?= $path_avatar . ($post['avatar'] ?? "default.png") ?>" alt="Avatar"></a>
            <div class="post-info">
                <h4><?= ($post['name'] . " " . $post['surName']) ?? "Anonymous" ?></h4>
                <span><?= $post['time'] ?? "" ?></span>
            </div>
        </div>

        <div class="post-content">
            <?= htmlspecialchars($post['text']) ?>
        </div>

        <div class="carousel-view">
            <?php foreach ($postImages as $postImage) { ?>
                <div class="carousel-item">
                    <img src="<?= $path_post . ($postImage['url'] ?? "default.png") ?>" class="post-image" alt="Post">
                </div>
            <?php } ?>
        </div>

        <form action="../../Actions/Posts/Post.php" method="POST">
            <input type="hidden" name="postId" value="<?= $posId ?>">
            <div class="post-actions">
                <div class="left-actions">
                    <button name="<?= $like ?>" class="<?= $like ?>"><i class="fa fa-heart"></i> Հավանել <?= $likeCount ?></button>
                    <a href="?postId=<?= $posId ?>&userId=<?= $user_id ?>"><i class="far fa-comment"></i> Մեկնաբանել</a>
                </div>
                <div class="right-actions">
                    <button class="save-btn" name="<?= $save ?>">
                        <i class="<?= ($save == "save") ? "far fa-bookmark" : "fas fa-bookmark" ?>"></i> Պահպանել
                    </button>
                </div>
            </div>
        </form>
    </div>
<?php } ?>