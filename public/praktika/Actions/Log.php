<?php
session_start();
require_once("../db.php");
if (isset($_POST['Log'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM Users WHERE email='$login' OR phoneNumber='$login'";
    $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if (!$result) {
        $_SESSION['Log']['Error'] = "User not found";
        header("location:../Log.php");
    } else {
        if (password_verify($password, $result['password'])) {
            if ($result['status'] == 0) {
                $_SESSION['Log']['Error'] = "User is not active";
                header("location:../Log.php");
            } else {
                unset($_SESSION['Log']['Error']);
                $expiry = time() + (100000);
                setcookie("UserId", $result['Id'], $expiry, "/", "", false, true);
                if ($result['role'] == "user") {
                    header("location:../Pages/User/Home.php");
                } else if ($result['role'] == "admin") {
                    header("location:../Pages/Admin/Admin.php");
                }
            }
        } else {
            $_SESSION['Log']['Error'] = "Wrong password";
            header("location:../Log.php");
        }
    }
}
