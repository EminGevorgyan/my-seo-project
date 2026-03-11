<?php
require_once("../../Actions/AdminCheck.php");
$sql = "SELECT p.*, u.name, u.surName 
        FROM Posts p 
        LEFT JOIN Users u ON p.user_id = u.Id 
        ORDER BY p.Id DESC";
$posts = mysqli_query($db, $sql);
if (isset($_POST['Edit'])) {
    $postId = $_POST['postId'];
    header("location:./EditPostAdm.php?postId=" . $postId);
}
if (isset($_POST['Delete'])) {
    $postId = intval($_POST['postId']);
    $stmt1 = $db->prepare("DELETE FROM Posts WHERE Id = ?");
    $stmt1->bind_param("i", $postId);
    $stmt1->execute();

    $stmt2 = $db->prepare("DELETE FROM post_images WHERE post_id = ?");
    $stmt2->bind_param("i", $postId);
    $stmt2->execute();
    header("location:./AdminPosts.php");
}
require_once("../../Styles/Admin/AdminPostsStyle.php");
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Պոստերի Կառավարում</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

    <aside class="sidebar">
        <h2>AdminPanel</h2>
        <a href="../User/Home.php"><i class="fas fa-th-large"></i> <span>Գլխավոր</span></a>
        <a href="./Admin.php"><i class="fas fa-users"></i> <span>Օգտատերեր</span></a>
        <a href="./AdminPosts.php" class="active"><i class="fas fa-images"></i> <span>Պոստեր</span></a>
    </aside>

    <main class="main-content">
        <div class="admin-card">
            <div class="card-header">
                <h2 class="card-title">Հրապարակումների ցանկ</h2>
                <a href="./AddPostAdm.php" class="btn-add"><i class="fas fa-plus"></i> Նոր Պոստ</a>
            </div>

            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th style="width: 70px;">ID</th>
                            <th style="width: 100px;">Նկար</th>
                            <th>Պոստի տվյալներ</th>
                            <th>Հեղինակ</th>
                            <th>Ամսաթիվ</th>
                            <th>Կարգավիճակ</th>
                            <th style="text-align: right;">Գործողություն</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) {
                            $postId = $post['Id'];
                            $name = $post['name'] . " " . $post['surName'];
                            $time = $post['time'];
                            $text = $post['text'];
                            $sql = "SELECT * FROM post_images WHERE post_id=$postId ORDER BY Id DESC";
                            $img = mysqli_query($db, $sql);
                            $postImages = mysqli_fetch_assoc($img);
                            $countImg = mysqli_num_rows($img);
                            $url = $postImages['url'];
                            $is_archive = $post['is_archive'];
                            if ($is_archive == 1) {
                                $arch = "Արգելափակված";
                            } else {
                                $arch = "Ակտիվ";
                            }

                        ?>
                            <tr>
                                <td><?= $postId ?></td>
                                <td>
                                    <div class="post-img-wrapper">
                                        <img src="<?= $path_post . ($url ?? 'default.jpg') ?>" alt="Post">
                                        <span class="img-badge"><i class="fas fa-images"></i> <?= $countImg ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="post-info">
                                        <b><?= htmlspecialchars($text ?? '') ?></b>
                                    </div>
                                </td>
                                <td><span class="author-tag"><?= $name ?></span></td>
                                <td><?= $time ?></td>
                                <td><span class="status-tag active" style="background-color: <?php if ($is_archive == 1) {
                                                                                                    echo 'red';
                                                                                                } else {
                                                                                                    echo 'green';
                                                                                                } ?>"><?= $arch ?></span></td>
                                <td>
                                    <form action="./AdminPosts.php" method="POST">
                                        <input type="hidden" name="postId" value="<?= $postId ?>">
                                        <div class="action-btns">
                                            <button name="Edit" type="submit" class="act-btn edit" title="Խմբագրել"><i class="fas fa-pen"></i></button>
                                            <button name="Delete" type="submit" class="act-btn delete" title="Ջնջել" onclick="return confirm('Վստա՞հ եք:')"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>

</html>