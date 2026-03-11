<?php
require_once("../../Actions/Check.php");
require_once("../../Styles/User/ChatUserStyle.php");

$stmt = $db->prepare("
    SELECT c.Id, u.Id as userId, u.name, u.surName, u.avatar , c.time
    FROM Chat c
    JOIN Users u ON (
        (c.user1_id = ? AND u.Id = c.user2_id) OR 
        (c.user2_id = ? AND u.Id = c.user1_id)
    )
    WHERE c.user1_id = ? OR c.user2_id = ?
");

$stmt->bind_param("iiii", $Id, $Id, $Id, $Id);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Իմ չաթերը</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>

<body>

    <div class="chats-wrapper">
        <div class="chats-header">
            <a href="javascript:history.back()" style="color: black;"><i class="fas fa-arrow-left"></i></a>
            <h2>Չաթեր</h2>
            <i class="far fa-edit"></i>
        </div>

        <div class="users-list">
            <?php
            foreach ($result as $chat) {
                $name = $chat['name'];
                $surName = $chat['surName'];
                $avatar = $chat['avatar'];
            ?>
                <a href="Chat.php?userId=<?=  $chat['userId']?>" class="user-item">
                    <img src="<?= $path_avatar . $avatar?>" class="user-avatar" alt="User">
                    <div class="user-info">
                        <span class="user-name"><?= $name . " " . $surName?></span>
                    </div>
                    <div class="user-meta">
                        <span class="message-time"><?= $chat['time'] ?? '' ?></span>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>

</body>

</html>