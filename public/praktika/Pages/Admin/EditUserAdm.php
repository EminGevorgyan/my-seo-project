<?php
require_once("../../Actions/AdminCheck.php");
require_once("../../Styles/Admin/EditUserAdmStyle.php");
$err=$_SESSION['Change']['Error'] ?? "";
$userId = $_GET['userId'];
$sql = "SELECT * FROM Users WHERE Id=$userId";
$user = mysqli_fetch_assoc(mysqli_query($db, $sql));
$name = $user['name'];
$surName = $user['surName'];
$email = $user['email'];
$phoneNumber = $user['phoneNumber'];
$role = $user['role'];
$status = $user['status'];
$avatar = $user['avatar'];
?>
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Խմբագրել Օգտատիրոջը - Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>

<body>

    <div class="sidebar">
        <h2>AdminPanel</h2>
        <a href="Home.php"><i class="fas fa-home"></i> <span>Գլխավոր</span></a>
        <a href="Admin.php" class="active"><i class="fas fa-users"></i> <span>Օգտատերեր</span></a>
        <a href="AdminPosts.php"><i class="fas fa-images"></i> <span>Պոստեր</span></a>
    </div>

    <div class="main-content">
        <div class="header-flex">
            <h1>Խմբագրել Պրոֆիլը</h1>
            <a href="Admin.php" class="btn-back"><i class="fas fa-arrow-left"></i> Հետ դեպի ցանկ</a>
        </div>

        <div class="edit-card">
            <form action="../../Actions/Admin/EditUserAdm.php" method="POST" enctype="multipart/form-data">

                <div class="profile-upload">
                    <img src="<?= $path_avatar . $avatar ?>" alt="Avatar" id="preview">
                    <br>
                    <label for="avatar" class="file-input-label">
                        <i class="fas fa-camera"></i> Փոխել նկարը
                    </label>
                    <input type="file" id="avatar" name="avatar" hidden >
                </div>

                <div class="grid-inputs">
                    <input type="hidden" name="userId" value="<?= $userId ?>">
                    <div class="form-group">
                        <label>Անուն</label>
                        <input type="text" name="name" class="form-control" value="<?= $name ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Ազգանուն</label>
                        <input type="text" name="surName" class="form-control" value="<?= $surName ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Էլ. հասցե</label>
                        <input type="email" name="email" class="form-control" value="<?= $email ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Հեռախոսահամար</label>
                        <input type="text" name="phoneNumber" class="form-control" value="<?= $phoneNumber ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Դեր (Role)</label>
                        <select name="role" class="form-control">
                            <option value="user"
                                <?php if ($role == 'user') {
                                            echo " selected";
                                        } ?>>Օգտատեր</option>
                            <option value="admin" <?php if ($role == 'admin') {
                                            echo " selected";
                                        } ?>>Ադմին</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Կարգավիճակ</label>
                        <select name="status" class="form-control">
                            <option value="1" <?php if ($status == '1') {
                                                    echo " selected";
                                                } ?>>Ակտիվ</option>
                            <option value="0" <?php if ($status == '0') {
                                                    echo " selected";
                                                } ?>>Արգելափակված</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <button type="submit" name="SaveUser" class="btn-save-user">
                            <i class="fas fa-save"></i> Պահպանել Փոփոխությունները
                        </button>
                        <?= $err ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>