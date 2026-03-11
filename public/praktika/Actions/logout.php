<?php
session_start();
if(isset($_COOKIE['UserId'])){
    setcookie("UserId", "", time() - 3600, "/");
    header('Location: ../Log.php');
    exit();
}
?>
