<?php
require_once("../../Actions/Check.php");
require_once("../../Styles/User/searchUserStyle.php");
require_once("../../Styles/HeadStyle.php");
$sql = "SELECT * FROM Users";
$result = mysqli_query($db, $sql);
if (isset($_POST['search'])) {
    $inp = trim($_POST['inp']);
    if ($inp != '') {
        $sql = "SELECT * FROM Users WHERE name LIKE '%$inp%' OR surName LIKE '%$inp%'";
        $result = mysqli_query($db, $sql);
    } else {
        $sql = "SELECT * FROM Users";
        $result = mysqli_query($db, $sql);
    }
}
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <title>Որոնում</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>


<body>

    <?php require_once("../Head.php"); ?>

    <div class="search-container">

        <div class="search-header">
            <form action="./searchUsers.php" method="POST" class="search-form">
                <div class="search-box-wrapper">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" name="inp" placeholder="Որոնել օգտատերերի..." autofocus>
                    <button type="submit" name="search" class="search-submit-btn">Փնտրել</button>
                </div>
            </form>
        </div>

        <div class="results-list">
            <?php foreach ($result as $user) {
                $userId = $user['Id'];
                $name = $user['name'];
                $surName = $user['surName'];
                $avatar = $user['avatar'];
            ?>
                <a href="./UserProfile.php?userId=<?= $userId ?>" class="user-item">
                    <img src="<?= $path_avatar . $avatar?>" class="user-avatar">
                    <div class="user-info">
                        <h4><?= $name . " " . $surName?></h4>
                        <p>Դիտել պրոֆիլը</p>
                    </div>
                </a>
            <?php } ?>

        </div>

    </div>

</body>

</html>