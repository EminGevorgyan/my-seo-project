<?php
session_start();
// Նկատի ունեցիր, որ սա սովորաբար ավելի լավ է աշխատում, եթե վերջում session-ը մաքրես
$error = $_SESSION['Log']['Error'] ?? "";
require_once("./Styles/LogStyle.php");
?>
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Մուտք - Իդեալական Նախագիծ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="auth-card">
    <div class="auth-header">
        <div class="auth-logo">
            <i class="fas fa-unlock-alt"></i>
        </div>
        <h2>Մուտք</h2>
        <?php if ($error){ ?>
            <p style="color: #ff4d4d; background: #ffe6e6; padding: 10px; border-radius: 5px; font-size: 14px; margin-top: 10px;">
                <i class="fas fa-exclamation-circle"></i> <?= $error ?>
            </p>
        <?php } ?>
    </div>

    <form action="./Actions/Log.php" method="POST">
        
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="text" name="login" placeholder="Էլ. հասցե կամ հեռախոս" 
                   pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}|[0-9]{9}" 
                   title="Մուտքագրեք վավեր էլ. հասցե կամ 9-անիշ հեռախոսահամար" required>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Գաղտնաբառ" required>
        </div>

        <button type="submit" class="btn-auth" name="Log">Մուտք գործել</button>
    </form>

    <div class="auth-footer">
        Չունե՞ք հաշիվ: <a href="./index.php">Գրանցվել հիմա</a>
    </div>
</div>

</body>
</html>