<?php
require_once("../../Actions/AdminCheck.php");
$sql = "SELECT * FROM Users WHERE Id!=$Id";
$users = mysqli_query($db, $sql);
if (isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    echo $status;
    $sql = "UPDATE Users SET role='$role', status='$status' WHERE Id=$id";
    mysqli_query($db, $sql);
    header("Refresh:0");
}
if (isset($_POST['Del'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM Users WHERE Id=$id";
    mysqli_query($db, $sql);
    header("Refresh:0");
}
require_once("../../Styles/Admin/AdminStyle.php");

?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Օգտատերերի Կառավարում</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <div class="sidebar">
        <h2>AdminPanel</h2>
        <a href="../User/Home.php"><i class="fas fa-home"></i> <span>Գլխավոր</span></a>
        <a href="Admin.php" class="active"><i class="fas fa-users"></i> <span>Օգտատերեր</span></a>
        <a href="./AdminPosts.php"><i class="fas fa-images"></i> <span>Պոստեր</span></a>
    </div>

    <div class="main-content">
        <div class="header-flex">
            <h1>Օգտատերերի ցուցակ</h1>
            <a href="./AddUser.php" class="btn-add"><i class="fas fa-plus"></i> Ավելացնել Օգտատեր</a>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Օգտատեր</th>
                        <th>Էլ. հասցե</th>
                        <th>Դեր</th>
                        <th>Կարգավիճակ</th>
                        <th>Գրանցման ամսաթիվ</th>
                        <th style="text-align: right;">Գործողություն</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) {
                        $name = $user['name'];
                        $surName = $user['surName'];
                        $email = $user['email'];
                        $avatar = $user['avatar'];
                        $Id = $user['Id'];
                    ?>
                        <tr>
                            <form action="./Admin.php" method="POST">
                                <td><?= $Id ?></td>
                                <td>
                                    <div class="user-info">
                                        <img src="<?= $path_avatar . $avatar ?>" alt="Avatar">
                                        <span><?= $name . ' ' . $surName ?></span>
                                    </div>
                                </td>
                                <td><?= $email ?></td>
                                <td>
                                    <select name="role" class="admin-select">
                                        <option value="user" <?php if ($user['role'] == 'user') {
                                                                    echo " selected";
                                                                } ?>>Օգտատեր</option>
                                        <option value="admin" <?php if ($user['role'] == 'admin') {
                                                                    echo " selected";
                                                                } ?>>Ադմին</option>
                                    </select>
                                </td>
                                <input type="hidden" name="id" value="<?= $Id ?>">
                                <td>
                                    <select name="status" class="admin-select status-color">
                                        <option value="1" <?php if ($user['status'] == '1') {
                                                                echo " selected";
                                                            } ?>>Ակտիվ</option>
                                        <option value="0" <?php if ($user['status'] == '0') {
                                                                echo " selected";
                                                            } ?>>Արգելափակված</option>
                                    </select>
                                </td>
                                <td>2024-05-12</td>
                                <td>
                                    <div class="action-btns">
                                        <button type="submit" name="update_user" class="btn-icon btn-save" title="Պահպանել"><i class="fas fa-check"></i></button>
                                        <a href="./EditUserAdm.php?userId=<?= $Id ?>" class="btn-icon btn-edit" title="Խմբագրել"><i class="fas fa-pen"></i></a>
                                        <button type="submit" name="Del" class="btn-icon btn-delete" title="Ջնջել" onclick="return confirm('Վստա՞հ եք:')"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>

                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>