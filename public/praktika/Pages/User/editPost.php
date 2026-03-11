<?php
require_once("../../Actions/Check.php");
require_once("../../Styles/User/EditPostStyle.php");
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$stmt = $db->prepare("SELECT * FROM Posts WHERE Id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$post = $stmt->get_result()->fetch_assoc();
$stmtImg = $db->prepare("SELECT * FROM post_images WHERE post_id = ?");
$stmtImg->bind_param("i", $id);
$stmtImg->execute();
$images = $stmtImg->get_result();
$text = $post['text'];
$is_archive = $post['is_archive'];
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <title>Խմբագրել Հրապարակումը</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <nav class="navbar">
        <a href="./Profile.php" class="logo">MySocial</a>
        <div class="nav-links">
            <a href="./Profile.php" class="btn-back"><i class="fas fa-arrow-left"></i> Հետ դեպի պրոֆիլ</a>
        </div>
    </nav>

    <div class="edit-container">
        <div class="edit-card">
            <div class="edit-header">
                <h2>Խմբագրել հրապարակումը</h2>
            </div>

            <form action="../../Actions/Posts/editPost.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="form-left">
                        <div class="form-group">
                            <label>Հրապարակման տեքստ</label>
                            <input name="text" value="<?= htmlspecialchars($post['text'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                        </div>
                        <div class="form-group">
                            <label>Կարգավիճակ</label>
                            <select name="archive" class="form-select">
                                <option value="0" <?php if ($is_archive == 0) {
                                                        echo "selected";
                                                    } ?>>Ակտիվ (Երևում է բոլորին)</option>
                                <option value="1" <?php if ($is_archive == 1) {
                                                        echo "selected";
                                                    } ?>>Թաքցված</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-right">
                        <label>Առկա լուսանկարներ</label>
                        <div class="image-preview-grid">
                            <?php foreach ($images as $image) {
                                $url = $image['url'];
                            ?>
                                <div class="preview-item">
                                    <img src="<?= $path_post . $url ?>" alt="">
                                    <input type="hidden" name="imgId" value="<?= $image['Id'] ?>">
                                    <button type="submit" name="del" class="remove-img">X</button>
                                </div>
                            <?php } ?>

                        </div>

                        <label for="upload" class="upload-box">
                            <i class="fas fa-plus-circle"></i>
                            <span>Ավելացնել նոր նկարներ</span>
                            <input type="file" id="upload" name="new_images[]" multiple hidden>
                        </label>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn-save" name="Save">Պահպանել փոփոխությունները</button>
                    <button type="submit" class="btn-delete-post" name="delPost">Ջնջել պոստը</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>