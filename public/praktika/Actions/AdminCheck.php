<?php
session_start();
require_once("../../db.php");
require_once("../../Path.php");
if (isset($_COOKIE['UserId'])) {
    $Id = $_COOKIE['UserId'];
    $sql = "SELECT * FROM Users WHERE Id=$Id";
    $user = mysqli_fetch_assoc(mysqli_query($db, $sql));
    $role = $user['role'];
    $status = $user['status'];
    $admin_avatar = $user['avatar'];
    if (!$user) {
        setcookie("UserId", "", time() - 3600, "/");
        header('Location: ../../Log.php');
    }
    if ($role != "admin") {
        setcookie("UserId", "", time() - 3600, "/");
        header('Location: ../../Log.php');
    }
    if ($status != "1") {
        setcookie("UserId", "", time() - 3600, "/");
        header('Location: ../../Log.php');
    }
}
else{
    header('Location: ../../Log.php');
    exit();
}
