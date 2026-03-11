<?php
require_once("../../Actions/AdminCheck.php");
require_once("../../Styles/Admin/AddUserStyle.php");
$err = $_SESSION['AdmReg']['Error'] ?? '';
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ավելացնել Օգտատեր - Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <nav class="admin-nav">
        <div class="nav-content">
            <a href="./Admin.php" class="admin-logo">
                <i class="fas fa-user-shield"></i> Admin Panel
            </a>
            <div class="admin-profile">
                <span>Ադմինիստրատոր</span>
                <img src="<?= $path_avatar . $admin_avatar ?>" alt="Admin">
            </div>
        </div>
    </nav>

    <div class="admin-container">
        <div class="form-card">
            <div class="form-header">
                <h2><i class="fas fa-user-plus"></i> Ավելացնել նոր օգտատեր</h2>
                <p>Մուտքագրեք անձնական տվյալները համակարգում գրանցելու համար:</p>
            </div>

            <form action="./Actions/AddUser.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid">

                    <div class="input-group">
                        <label><i class="fas fa-user"></i> Անուն</label>
                        <input type="text" name="first_name" placeholder="Օրինակ՝ Արամ" required>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-users"></i> Ազգանուն</label>
                        <input type="text" name="last_name" placeholder="Օրինակ՝ Սարգսյան" required>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-envelope"></i> Էլ. հասցե</label>
                        <input type="email" name="email" placeholder="example@mail.com" required>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-phone"></i> Հեռախոսահամար</label>
                        <input type="tel" name="phone" placeholder="+374 00 000000" required>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-key"></i> Գաղտնաբառ</label>
                        <input type="password" name="password" placeholder="********" required>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-venus-mars"></i> Սեռ</label>
                        <select name="gender" required>
                            <option value="" disabled selected>Ընտրեք սեռը</option>
                            <option value="male">Արական</option>
                            <option value="female">Իգական</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-user-tag"></i> Կարգավիճակ</label>
                        <select name="role">
                            <option value="user">Սովորական օգտատեր</option>
                            <option value="admin">Ադմինիստրատոր</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-camera"></i> Պրոֆիլի նկար</label>
                        <div class="file-upload">
                            <input type="file" name="avatar" id="avatar-input" accept="image/*">
                            <label for="avatar-input">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Սեղմեք նկարը բեռնելու համար</span>
                            </label>
                        </div>
                    </div>

                </div>
                <?= $err ?>
                <div class="form-actions">
                    <button type="submit" class="save-btn" name="Reg">
                        <i class="fas fa-user-check"></i> Հաստատել և ստեղծել
                    </button>
                    <a href="./Admin.php" class="cancel-btn">Չեղարկել</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>