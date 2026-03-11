<?php
require_once("../AdminCheck.php");
$postId = $_GET['postId'];
if (isset($_POST['Del'])) {
    $imgId = $_POST['imgId'];
    $sql = "DELETE FROM post_images WHERE Id=$imgId";
    mysqli_query($db, $sql);
    header("location:../../Pages/Admin/EditPostAdm.php?postId=" . $postId);
}
if (isset($_POST['Save'])) {
    $text = $_POST['text'];
    $archive = $_POST['archive'];
    $images = $_FILES['images']['name'];
    foreach ($images as $index =>  $image) {
        $name = $image;
        if (!empty($name)) {
            $name_without_path = time() . $name;
            $full_path = "../posts/" . $name_without_path;
            move_uploaded_file($_FILES['images']['tmp_name'][$index], $full_path);
            $sql = "INSERT INTO post_images (post_id, url) VALUES ('$postId', '$name_without_path')";
            mysqli_query($db, $sql);
        }
    }
    $sql = "UPDATE Posts SET  is_archive='$archive' WHERE Id=$postId";
    mysqli_query($db, $sql);
    $sql = "UPDATE post_images SET  text='$text' WHERE post_id=$postId";
    mysqli_query($db, $sql);
    header("location:../../Pages/Admin/AdminPosts.php");
}
