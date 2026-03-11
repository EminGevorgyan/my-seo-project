<?php
require_once("../Check.php");
if (isset($_POST['Save'])) {
    $avatar = $_FILES['avatar'];
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $surName = htmlspecialchars(trim($_POST['surName']), ENT_QUOTES, 'UTF-8');
    $phoneNumber = $_POST['phoneNumber'];
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $error = 0;
    $sql = "SELECT * FROM Users WHERE (email='$email' OR phoneNumber='$phoneNumber') AND Id != $Id";
    $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if ($result) {
        $error = 1;
        $_SESSION['Change']['Error'] = "User already exists";
    } else {
        $error = 0;
        $img = $avatar['name'];
        if (!empty($img)) {
            $name_without_path = time() . $img;
            $full_path = $path_avatar . $name_without_path;
            move_uploaded_file($avatar['tmp_name'], $full_path);
        }
        else{
            $name_without_path = $admin_avatar;
        }
        $sql = "UPDATE Users SET name='$name',surName='$surName',phoneNumber='$phoneNumber',email='$email', avatar='$name_without_path' WHERE Id=$Id";
        $result = mysqli_query($db, $sql);
        $sql = "SELECT * FROM Users WHERE Id=$Id";
        $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
        $_SESSION['User'] = $result;
        header("location:../../Pages/User/Profile.php");
    }
    if ($error) {
        header("location:../../Pages/User/UpdateProfile.php");
    }
}
