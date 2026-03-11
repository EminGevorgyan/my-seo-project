<?php
require_once("../action.php");
$back_url = $_SERVER['HTTP_REFERER'] ?? '../../Pages/User/Home.php';
header("Location: $back_url");
exit();
