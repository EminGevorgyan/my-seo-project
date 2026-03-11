<?php
session_start();
require_once("../Path.php");
require_once("../db.php");
$Id = $_COOKIE['UserId'];
$user2Id = $_POST['user2Id'];
if (isset($_COOKIE['UserId'])) {
    $Id = $_COOKIE['UserId'];
    $sql = "SELECT * FROM Users WHERE Id=$Id";
    $user = mysqli_fetch_assoc(mysqli_query($db, $sql));
    $status = $user['status'];
    $role=$user['role'];
    $admin_avatar=$user['avatar'];
    if (!$user) {
        setcookie("UserId", "", time() - 3600, "/");
        header('Location: ../Log.php');
    }
    if ($status != "1") {
        setcookie("UserId", "", time() - 3600, "/");
        header('Location: ../Log.php');
    }
}else {
    header('Location: ../Log.php');
    exit();
}
if (isset($_POST['Send'])) {
    $text = $_POST['text'];
    $text=htmlspecialchars(trim($text), ENT_QUOTES, 'UTF-8');
    $sql = "SELECT * FROM Chat WHERE user1_id=$Id AND user2_id=$user2Id OR user1_id=$user2Id AND user2_id=$Id";
    $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
    $chatId = $result['Id'] ?? '';
    if(!$chatId){
        $sql = "INSERT INTO Chat(user1_id,user2_id) VALUES($Id,$user2Id)";
        mysqli_query($db, $sql);
    }
    $sql = "INSERT INTO Chat_message(chat_id,sender_id,text) VALUES($chatId,$Id,'$text')";
    mysqli_query($db, $sql);
    header("location:../Pages/User/Chat.php?userId=" . $user2Id);
}
