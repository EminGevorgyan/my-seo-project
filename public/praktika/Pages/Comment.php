 <?php
    require_once("../../Actions/Check.php");
    if ($postId) {
        $sql = "SELECT * FROM comment_user WHERE post_id=$postId";
        $result = mysqli_query($db, $sql);
        $comments_user = mysqli_fetch_assoc($result);
        if ($comments_user) {
            $commentsId = $comments_user['Id'];
        } else {
            $commentsId = 0;
        }
        $stmt = $db->prepare("SELECT c.*, u.name, u.surName, u.avatar 
                          FROM comments c 
                          JOIN Users u ON c.sender_id = u.Id 
                          WHERE c.comment_id = ? 
                          ORDER BY c.time ASC");
        $stmt->bind_param("i", $commentsId);
        $stmt->execute();
        $comments = $stmt->get_result();
        $user_id = $_GET['userId'] ?? '';
    ?>

     <div class="comments-window" style="display: <?= $display ?>;">
         <div class="comments-header">
             <a href="<?= $header ?>"> <i class="fas fa-arrow-left"></i></a>
             <span>Մեկնաբանություններ</span>
         </div>

         <div class="comments-body">
             <?php foreach ($comments as $comment) {
                    $user_id = $comment['sender_id'];
                    $text = $comment['text'];
                    $time = $comment['time'];
                    $user_avatar = $comment['avatar'] ?? 'default.png';
                    $name = ($comment['name'] ?? 'Անհայտ') . " " . ($comment['surName'] ?? '');
                ?>
                 <div class="message-wrapper">
                     <img src="<?= $path_avatar . $user_avatar ?>" class="msg-avatar">
                     <div class="message-content">
                         <div class="message-bubble">
                             <p><?= htmlspecialchars($comment['text']) ?></p>
                         </div>
                         <span class="message-time"><?= $time ?></span>
                     </div>
                 </div>
             <?php } ?>

         </div>
         <form action="../../Actions/Posts/comment.php?userId=<?= $user_id ?>&postId=<?= $postId ?>" method="POST">
             <input type="hidden" name="header" value="<?= htmlspecialchars($header) ?>">

             <div class="comments-input-area">
                 <img src="<?= $path_avatar . $admin_avatar ?>" class="msg-avatar-mini">
                 <input type="hidden" value="<?= $commentsId ?>" name="comment_id">
                 <div class="input-wrapper">
                     <input type="text" placeholder="Գրեք մեկնաբանություն..." name="text" maxlength="255" required>
                     <button class="send-btn" name="send"><i class="fas fa-paper-plane"></i></button>
                 </div>
             </div>
         </form>
     </div>
 <?php } ?>