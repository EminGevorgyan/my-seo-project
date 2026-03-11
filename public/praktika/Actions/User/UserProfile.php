<?php
require_once("../action.php");
$userId = $_GET['userId'];
if (isset($_POST['follow'])) {
    $sql = "SELECT * FROM Friends WHERE sender_id=$userId AND receiver_id=$Id";
    $check = mysqli_fetch_assoc(mysqli_query($db, $sql));
    $sql = "SELECT * FROM Friends WHERE sender_id=$Id AND receiver_id=$userId";
    $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if (!$result) {
        if ($check) {
            $sql = "INSERT INTO Friends(sender_id,receiver_id,status) VALUES($Id,$userId,1)";
            mysqli_query($db, $sql);
            $sql = "UPDATE Friends SET status=1 WHERE sender_id=$userId AND receiver_id=$Id";
            mysqli_query($db, $sql);
        } else {
            $sql = "INSERT INTO Friends(sender_id,receiver_id) VALUES($Id,$userId)";
            mysqli_query($db, $sql);
        }
    }
}
if (isset($_POST['unfollow'])) {
    $sql = "DELETE FROM Friends WHERE sender_id=$Id AND receiver_id=$userId";
    mysqli_query($db, $sql);
    $sql = "UPDATE Friends SET status=0 WHERE sender_id=$userId AND receiver_id=$Id OR sender_id=$Id AND receiver_id=$userId";
    mysqli_query($db, $sql);
}
header("location:../../Pages/User/UserProfile.php?userId=" . $userId);
if(isset($_POST['chat'])){
    header("location:../../Pages/User/Chat.php?userId=" . $userId);
}
