<?php
session_start();
require_once("../db.php");
if (isset($_POST['Reg'])) {
    $avatar = $_FILES['avatar'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $error = 0;
    $sql = "SELECT * FROM Users WHERE email='$email' OR phoneNumber='$phone'";
    $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if ($result) {
        $error = 1;
        $_SESSION['Reg']['Error'] = "User already exists";
    } else if ($password != $confirm_password) {
        $error = 1;
        $_SESSION['Reg']['Error'] = "Passwords do not match";
    } else {
        unset($_SESSION['Reg']['Error']);
        $error = 0;
        $name = $avatar['name'];
        if (!empty($name)) {
            $name_without_path = time() . $name;
            $full_path = "../Avatars/" . $name_without_path;
            move_uploaded_file($avatar['tmp_name'], $full_path);
        }
        else{
            if($gender=="male"){
                $name_without_path= "male.jpeg";                
            }else{
                $name_without_path= "feMale.png";                
            }
        }
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO Users (name, surName, gender,avatar, phoneNumber, email, password) VALUES ('$first_name', '$last_name', '$gender','$name_without_path' ,'$phone', '$email', '$hash')";
        $result = mysqli_query($db, $sql);
        header("location:../Log.php");
    }
    if ($error) {
        header("location:../Reg.php");
    }
}
