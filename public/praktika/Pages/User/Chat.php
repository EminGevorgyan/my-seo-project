<?php
require_once("../../Actions/Check.php");
require_once("../../Styles/User/ChatStyle.php");

$userId = isset($_GET['userId']) ? intval($_GET['userId']) : 0;
$stmt = $db->prepare("SELECT name, surName, avatar FROM Users WHERE Id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$other = $stmt->get_result()->fetch_assoc();
$avatar = $other['avatar'];
$name = $other['name'];
$surName = $other['surName'];
$stmtChat = $db->prepare("SELECT Id FROM Chat WHERE (user1_id = ? AND user2_id = ?) OR (user1_id = ? AND user2_id = ?)");
$stmtChat->bind_param("iiii", $Id, $userId, $userId, $Id);
$stmtChat->execute();
$result = $stmtChat->get_result()->fetch_assoc();
$chatId = $result['Id'] ?? 0;
if ($chatId>0) {
    $sql = "SELECT * FROM Chat_message WHERE chat_id=$chatId ORDER BY time ASC";
    $messages = mysqli_query($db, $sql);
} 

?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <div class="chat-window">
        <div class="chat-header">
            <a href="javascript:history.back()" style="color:#000;"><i class="fas fa-arrow-left"></i></a>
            <img src="<?= $path_avatar . $avatar ?>" alt="Avatar">
            <div class="user-info">
                <h4><?= $name . " " . $surName ?></h4>
            </div>
        </div>

        <div class="chat-body">
            <?php if ($messages) {

                foreach ($messages as $message) {
                    $senderId = $message['sender_id'];
                    $text = $message['text'];
                    if ($senderId == $Id) {
                        $isMe = "outgoing";
                    } else {
                        $isMe = "incoming";
                    }
            ?>
                    <div class="msg <?= $isMe ?>">
                        <div class="bubble"><?= $text ?></div>
                        <span class="msg-time"><?= $message['time'] ?? '' ?></span>
                    </div>
            <?php }
            } ?>

        </div>

        <form action="../../Actions/Chat.php" method="POST" class="chat-footer">
            <input type="hidden" name="user2Id" value="<?= $userId ?>" id="">
            <img src="<?= $path_avatar . $admin_avatar ?>" alt="">
            <div class="chat-input-wrapper">
                <input type="text" name="text" placeholder="Գրեք նամակ..." maxlength="255" required>
                <button class="send-btn" name="Send"><i class="fas fa-paper-plane"></i></button>
            </div>
        </form>
    </div>

</body>

</html>