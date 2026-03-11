<?php
require_once("../Check.php");
$postId=$_POST['postId'] ?? '';
if(isset($_POST['like'])){
        $sql="INSERT INTO is_liked(user_id,post_id) VALUES($Id,$postId)";
        mysqli_query($db,$sql);
}
if(isset($_POST['disLike'])){
        $sql="DELETE FROM is_liked WHERE user_id=$Id AND post_id=$postId";
        mysqli_query($db,$sql);
}
if(isset($_POST['save'])){
        $sql="INSERT INTO is_saved(user_id,post_id) VALUES($Id,$postId)";
        mysqli_query($db,$sql);
}
if(isset($_POST['unsave'])){
        $sql="DELETE FROM is_saved WHERE user_id=$Id AND post_id=$postId";
        mysqli_query($db,$sql);
}