<?php
require_once("../Check.php");

if(isset($_POST['post'])){
    $text=$_POST['caption'];
    $caption = htmlspecialchars(trim($text), ENT_QUOTES, 'UTF-8');
    $images=$_FILES['post_image']['name'];
    $sql="INSERT INTO Posts(user_id,is_archive,text) VALUES($Id,0,'$caption')";
    $result=mysqli_query($db,$sql);
    $sql="SELECT * FROM Posts WHERE user_id=$Id ORDER BY Id DESC LIMIT 1";
    $res=mysqli_fetch_assoc(mysqli_query($db,$sql));
    $postId=$res['Id'];
    foreach($images as $index => $image){
        $path=time() . $image;
        $fullPath="../../posts/" . $path;
        move_uploaded_file($_FILES['post_image']['tmp_name'][$index],$fullPath);
        $sql="INSERT INTO post_images(post_id,url) VALUES($postId,'$path')";
        mysqli_query($db,$sql);
    }
    header("location:../../Pages/User/Home.php");
    

}
?>
