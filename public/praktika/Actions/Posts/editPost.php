<?php
require_once("../Check.php");
$postId=$_GET['id'];
if(isset($_POST['delPost'])){
    $sql="DELETE FROM Posts WHERE Id=$postId";
    mysqli_query($db,$sql);
    $sql="DELETE FROM post_images WHERE post_id=$postId";
    mysqli_query($db,$sql);
    header("location:../Profile.php");
}
if(isset($_POST['del'])){
    $id=$_POST['imgId'];
    $sql="DELETE FROM post_images WHERE Id=$id";
    mysqli_query($db,$sql);
    header("location:../editPost.php?id=".$postId);
}
if (isset($_POST['Save'])) {
    $text = $_POST['text'];
    $archive = $_POST['archive'];
    $images = $_FILES['new_images']['name'];
    foreach ($images as $index =>  $image) {
        $name = $image;
        if (!empty($name)) {
            $name_without_path = time() . $name;
            $full_path = "../posts/" . $name_without_path;
            move_uploaded_file($_FILES['new_images']['tmp_name'][$index], $full_path);
            $sql = "INSERT INTO post_images (post_id, url) VALUES ('$postId', '$name_without_path')";
            mysqli_query($db, $sql);
        }
    }
    $sql = "UPDATE Posts SET  is_archive='$archive' WHERE Id=$postId";
    mysqli_query($db, $sql);
    $sql = "UPDATE Posts SET  text='$text' WHERE Id=$postId";
    mysqli_query($db, $sql);
    header("location:../../Pages/User/Profile.php");
}