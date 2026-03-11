<?php
session_start();
require_once("./Styles/RegStyle.php");
$error = $_SESSION['Reg']['Error'] ?? "";
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Գրանցում - Իդեալական Նախագիծ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <div class="auth-card">
        <div class="auth-header">
            <h2>Գրանցում</h2>
            <?php if ($error){ ?>
                <p style="color: #ff4d4d; background: #ffe6e6; padding: 10px; border-radius: 5px; font-size: 14px;">
                    <i class="fas fa-exclamation-circle"></i> <?= $error ?>
                </p>
            <?php } ?>
        </div>

        <form action="./Actions/Reg.php" method="POST" enctype="multipart/form-data">

            <div class="avatar-section">
                <div class="avatar-circle">
                    <i class="fas fa-user"></i>
                </div>
                <label for="avatar-upload" class="file-label">
                    <i class="fas fa-camera"></i> Ընտրել նկար
                </label>
                <input type="file" name="avatar" id="avatar-upload">
            </div>

            <div class="input-row">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="first_name" placeholder="Անուն" 
                           pattern="[A-Za-zԱ-Ֆա-ֆ]{2,20}" 
                           title="Անունը պետք է լինի հայերեն կամ անգլերեն (2-20 տառ)" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="last_name" placeholder="Ազգանուն" 
                           pattern="[A-Za-zԱ-Ֆա-ֆ]{2,20}" 
                           title="Ազգանունը պետք է լինի հայերեն կամ անգլերեն (2-20 տառ)" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group select-wrapper">
                    <i class="fas fa-venus-mars"></i>
                    <select name="gender" class="select-group" required>
                        <option value="" disabled selected>Սեռը</option>
                        <option value="male">Արական</option>
                        <option value="female">Իգական</option>
                    </select>
                </div>
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="phone" placeholder="Հեռախոս" 
                           pattern="[0-9]{9}" 
                           title="Հեռախոսահամարը պետք է լինի 9 նիշ (միայն թվեր)" required>
                </div>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Էլ. հասցե" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Գաղտնաբառ" minlength="6" required>
            </div>

            <div class="input-group">
                <i class="fas fa-shield-alt"></i>
                <input type="password" name="confirm_password" placeholder="Կրկնել գաղտնաբառը" minlength="6" required>
            </div>

            <button type="submit" name="Reg" class="btn-auth">Ստեղծել հաշիվ</button>
        </form>

        <div class="auth-footer">
            Արդեն ունե՞ք հաշիվ: <a href="./Log.php">Մուտք գործել</a>
        </div>
    </div>

</body>
</html>