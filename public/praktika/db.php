<?php
$db=mysqli_connect("127.0.0.1","Emin","Emin_Gevorgyan_2006","Praktika");
// $db='asdf';

if (!$db) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

if (isset($_POST['Reg'])) {
    echo "Регистрация";
}
