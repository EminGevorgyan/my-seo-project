<?php
require_once("../../Actions/Check.php");
require_once("../../Styles/User/NotificationsStyle.php");
require_once("../../Styles/HeadStyle.php");

if (isset($_POST['Follow'])) {
   $senderId = intval($_POST['senderId']);
    $stmt = $db->prepare("UPDATE Friends SET status = 1 WHERE sender_id = ? AND receiver_id = ?");
    $stmt->bind_param("ii", $senderId, $Id);
    $stmt->execute();
    header("location:./Notifications.php");
    exit();
}
$stmt = $db->prepare("
    SELECT f.sender_id, u.name, u.surName, u.avatar 
    FROM Friends f
    JOIN Users u ON f.sender_id = u.Id
    WHERE f.receiver_id = ? AND f.status = 0
");
$stmt->bind_param("i", $Id);
$stmt->execute();
$friends = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ծանուցումներ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <?php require_once("../Head.php"); ?>
        <div class="notifications-container">
            <div class="notif-header">
                <a href="javascript:history.back()" style="color: black;"><i class="fas fa-arrow-left"></i></a>
                <h2>Ծանուցումներ</h2>
            </div>

            <div class="notif-list">
                <?php foreach ($friends as $friend) {
                    $name = $friend['name'];
                    $surName = $friend['surName'];
                    $avatar = $friend['avatar'];
                ?>
                    <div class="notif-item">
                        <form action="./Notifications.php" method="POST">
                            <img src="<?= $path_avatar . ($avatar ?? 'default.png') ?>" class="notif-avatar" alt="User">
                            <div class="notif-content">
                                <b><?= htmlspecialchars($row['name'] . " " . $row['surName']) ?></b>-ը սկսեց հետևել քեզ:
                            </div>
                            <button name="Follow" class="btn-follow-notif">Հետևել</button>
                            <input type="hidden" value="<?= $senderId ?>" name="senderId">
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
</body>

</html>