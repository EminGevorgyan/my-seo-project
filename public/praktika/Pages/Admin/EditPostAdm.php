<?php
require_once("../../Actions/AdminCheck.php");
$postId = $_GET['postId'];
$sql = "SELECT * FROM Posts WHERE Id=$postId";
$post = mysqli_fetch_assoc(mysqli_query($db, $sql));
$is_archive = $post['is_archive'];
$sql = "SELECT * FROM post_images WHERE post_id=$postId";
$images = mysqli_query($db, $sql);
$posts = mysqli_fetch_assoc($images);
$text = $posts['text'];
require_once("../../Styles/Admin/EditPostAdmStyle.php");

?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Խմբագրել Պոստը</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <aside class="sidebar">
        <div class="sidebar-brand">AdminPanel</div>
        <a href="Home.php"><i class="fas fa-th-large"></i> Գլխավոր</a>
        <a href="Admin.php"><i class="fas fa-users"></i> Օգտատերեր</a>
        <a href="AdminPosts.php" class="active"><i class="fas fa-images"></i> Պոստեր</a>
    </aside>
    <main class="main-content">
        <div class="admin-card">
            <div class="card-header">
                <h2><i class="fas fa-edit"></i> Խմբագրել Պոստը</h2>
                <a href="AdminPosts.php" style="text-decoration:none; color:#64748b; font-size:13px;">Հետ դեպի ցանկ</a>
            </div>

            <form action="../../Actions/Admin/EditPostAdm.php?postId=<?= $postId ?>" method="POST" enctype="multipart/form-data">
                <div class="edit-grid">
                    <div class="edit-left">
                        <div class="form-group">
                            <label>Պոստի վերնագիր</label>
                            <input type="text" class="form-control" value="<?= $text ?>" name="text">
                        </div>
                        <div class="form-group">
                            <label>Կարգավիճակ</label>
                            <select class="form-control" name="archive">
                                <option value="0" <?php if ($is_archive == 0) {
                                                        echo "selected";
                                                    } ?>>Ակտիվ</option>
                                <option value="1"
                                    <?php if ($is_archive == 1) {
                                        echo "selected";
                                    } ?>>Արգելափակված</option>
                            </select>
                        </div>
                    </div>

                    <div class="edit-right">
                        <label style="display:block; font-size:14px; font-weight:600; margin-bottom:10px;">Նկարներ</label>
                        <div class="image-gallery">
                            <?php foreach ($images as $image) {
                            ?>
                                <div class="img-container">
                                    <img src="<?= $path_post . $image['url'] ?>" alt="">
                                    <input type="hidden" name="imgId" value="<?= $image['Id'] ?>">
                                    <button class="btn-delete-img" name="Del">X</button>
                                </div>
                            <?php } ?>
                        </div>

                        <label for="new_images" class="upload-area">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Ավելացնել նոր լուսանկարներ</span>
                            <input type="file" id="new_images" name="images[]" multiple hidden>
                        </label>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn-save" name="Save">Պահպանել</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>