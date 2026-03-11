<nav>
    <a href="./Home.php" class="logo">MySocial</a>

    <div class="nav-links">
        <?php if ($role == 'admin') { ?>
            <a href="../Admin/Admin.php"><i class="fas fa-cog"></i></a>
        <?php } ?>
        <a href="./searchUsers.php"><i class="fas fa-search"></i></a>
        <a href="./Notifications.php" class="nav-icon-wrapper">
            <i class="fas fa-bell"></i>
        </a>
        <a href="./ChatUsers.php"><i class="fas fa-comment-dots"></i></a>

        <a href="./SavedPosts.php"><i class="fas fa-bookmark"></i></a>

        <a href="./Profile.php"><img src="<?= $path_avatar . htmlspecialchars($admin_avatar, ENT_QUOTES, 'UTF-8') ?>" class="user-mini"></a>
        <form action="../../Actions/logout.php" method="post">

            <button name="logOut" style="background: none; border: none; cursor: pointer; color: #333; font-size: 24px; padding: 10px; transition: 0.3s;">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form>
    </div>
</nav>