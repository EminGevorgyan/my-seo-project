<?php
require_once("../AdminCheck.php");
if(isset($_POST['Add'])){
    $status=$_POST['status'];
    $sql="INSERT INTO Posts(is_archive,user_id) VALUES($status,$Id)";
    mysqli_query($db,$sql);
    $title=$_POST['title'];
    $images=$_FILES['images']['name'];
    foreach($images as $index => $image){
        $sql="SELECT * FROM Posts WHERE user_id=$Id ORDER BY Id DESC LIMIT 1";
        $post=mysqli_fetch_assoc(mysqli_query($db,$sql));
        $postId=$post['Id'];
        $name=$image;
        if(!empty($name)){
            $path=time() . $name;
            $fullPath=$path_post . $path;
            move_uploaded_file($_FILES['images']['tmp_name'][$index], $fullPath);
        }
        $sql="INSERT INTO post_images(post_id,text,url) VALUES($postId,'$title','$path')";
        mysqli_query($db,$sql);
    }    
    header("location:../../Pages/Admin/AdminPosts.php");
}
?>