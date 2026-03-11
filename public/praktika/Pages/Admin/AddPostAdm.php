<?php 
require_once("../../Styles/Admin/AddPostAdmStyle.php");
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <title>Ավելացնել Պոստ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <aside class="sidebar">
        <div class="sidebar-brand">AdminPanel</div>
        <nav>
            <a href="./Home.php"><i class="fas fa-th-large"></i> Գլխավոր</a>
            <a href="./Admin.php"><i class="fas fa-users"></i> Օգտատերեր</a>
            <a href="./AdminPosts.php" class="active"><i class="fas fa-images"></i> Պոստեր</a>
        </nav>
    </aside>

    <main class="main-content">
        <div class="admin-card">
            <div class="card-header">
                <h2>Ստեղծել նոր հրապարակում</h2>
                <a href="AdminPosts.php" class="btn-back">Հետ դեպի ցանկ</a>
            </div>

            <form action="../../Actions/Admin/AddPostAdm.php" method="POST" enctype="multipart/form-data">
                <div class="grid-container">
                    <div class="form-section">
                        <div class="form-group">
                            <label>Պոստի վերնագիր</label>
                            <input type="text" name="title" class="form-input" placeholder="Մուտքագրեք տեքստը...">
                        </div>

                        <div class="form-group">
                            <label>Կարգավիճակ</label>
                            <select name="status" class="form-input">
                                <option value="0">Ակտիվ</option>
                                <option value="1">Թաքցված</option>
                            </select>
                        </div>
                    </div>

                    <div class="upload-section">
                        <label>Լուսանկարներ</label>
                        <label for="file-upload" class="dashed-upload">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Ավելացնել նոր լուսանկարներ</span>
                            <input type="file" id="file-upload" name="images[]" multiple hidden>
                        </label>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" name="Add" class="btn-submit">Հրապարակել</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>