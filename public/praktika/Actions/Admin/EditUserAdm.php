<?php
require_once("../AdminCheck.php");
if (isset($_POST['SaveUser'])) {
    $name = $_POST['name'];
    $surName = $_POST['surName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $userId = $_POST['userId'];
    $avatar = $_FILES['avatar'];
    $error = 0;
    $sql="SELECT * FROM Users WHERE Id=$userId";
    $user=mysqli_fetch_assoc(mysqli_query($db,$sql));
    $sql = "SELECT * FROM Users WHERE email='$email' AND Id!=$userId OR phoneNumber='$phoneNumber' AND Id!=$userId";
    $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if ($result) {
        $error = 1;
        $_SESSION['Change']['Error'] = "User already exists";
    } else {
        $error = 0;
        unset($_SESSION['Change']['Error']);
        $img = $avatar['name'];
        if (!empty($img)) {
            $name_without_path = time() . $img;
            $full_path = "../Avatars/" . $name_without_path;
            move_uploaded_file($avatar['tmp_name'], $full_path);
        } else {
            $name_without_path = $user['avatar'];
        }
        $sql = "UPDATE Users SET name='$name',surName='$surName',phoneNumber='$phoneNumber',email='$email', avatar='$name_without_path', role='$role', status='$status' WHERE Id=$userId";
        $result = mysqli_query($db, $sql);
        $sql = "SELECT * FROM Users WHERE Id=$Id";
        $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
        $_SESSION['User'] = $result;
        header("location:../../Pages/Admin/Admin.php");
    }
    if ($error) {
        header("location:../../Pages/Admin/EditUserAdm.php?userId=" . $userId);
    }
}
