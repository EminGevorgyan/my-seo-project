<?php
require_once("../Check.php");
$postId = $_GET['postId'];
if (isset($_POST['send'])) {
    $text = $_POST['text'];
    $text = trim($text);
    $text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $header = $_POST['header'];
    $comment_id = $_POST['comment_id'];
    $sql = "INSERT INTO comments(sender_id,comment_id,text) VALUES($Id,$comment_id,'$text')";
    mysqli_query($db, $sql);
    $userId = $_GET['userId'];
    echo $header;
    if ($header == "../../Pages/User/Home.php") {
        header("location:../../Pages/User/Home.php?postId=$postId");
    } elseif ($header == "../../Pages/User/Profile.php") {
        header("location:../Profile.php?postId=$postId");
    } elseif ($header == "../../Pages/User/SavedPosts.php") {
        header("location:../../Pages/User/SavedPosts.php?postId=$postId" );
    } elseif ($header == "../../Pages/User/UserProfile.php?userId=$userId") {
        header("location:../../Pages/User/UserProfile.php?userId=$userId&postId=$postId");
    }
}
