<?php
require_once("../../Actions/Check.php");
require_once("../../Styles/User/UpdateProfileStyle.php");

$name = $user['name'];
$surName = $user['surName'];
$email = $user['email'];
$phoneNumber = $user['phoneNumber'];

?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Խմբագրել Պրոֆիլը</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

    <div class="edit-card">
        <h2>Խմբագրել Պրոֆիլը</h2>

        <form action="../../Actions/User/UpdateProfile.php" method="POST" enctype="multipart/form-data">

            <div class="avatar-section">
                <div class="avatar-wrapper">
                    <img src="<?= $path_avatar . $admin_avatar ?>" id="output" alt="Avatar">
                    <label for="file" class="upload-icon">
                        <i class="fas fa-camera"></i>
                    </label>
                    <input type="file" name="avatar" id="file" hidden onchange="loadFile(event)">
                </div>
                <p style="font-size: 12px; color: #888;">Փոխել նկարը</p>
            </div>

            <div class="form-group">
                <label>Անուն</label>
                <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" maxlength="50" required>
            </div>
            <div class="form-group">
                <label>Ազգանուն</label>
                <input type="text" name="surName" value="<?= htmlspecialchars($surName) ?>" maxlength="50" required>
            </div>
            <div class="form-group">
                <label>Հեռախոսահամար</label>
                <input type="tel" name="phoneNumber" value="<?= htmlspecialchars($phoneNumber) ?>" pattern="[0-9]{9,12}">
            </div>
            <div class="form-group">
                <label>Էլեկտրոնային հասցե</label>
                <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
            </div>

            <a href="ChangePassword.php" class="pass-link">
                <i class="fas fa-lock"></i> Փոխել գաղտնաբառը
            </a>

            <button type="submit" name="Save" class="btn-save">Պահպանել</button>
            <a href="Profile.php" class="btn-cancel">Չեղարկել</a>

        </form>
    </div>
</body>

</html>