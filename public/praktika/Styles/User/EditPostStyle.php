<style>
    :root {
        --primary: #4e73df;
        --bg: #fafafa;
        --border: #dbdbdb;
        --white: #ffffff;
        --danger: #ed4956;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: var(--bg);
        color: #262626;
        padding-top: 80px;
    }

    .navbar {
        background: var(--white);
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 15%;
        position: fixed;
        top: 0;
        width: 100%;
        border-bottom: 1px solid var(--border);
        z-index: 100;
    }

    .logo {
        font-size: 22px;
        font-weight: bold;
        color: var(--primary);
        text-decoration: none;
    }

    .btn-back {
        text-decoration: none;
        color: #8e8e8e;
        font-size: 14px;
    }

    .edit-container {
        max-width: 935px;
        margin: 0 auto;
        padding: 20px;
    }

    .edit-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 8px;
        padding: 30px;
    }

    .edit-header {
        margin-bottom: 25px;
        border-bottom: 1px solid var(--border);
        padding-bottom: 15px;
    }

    .edit-header h2 {
        font-size: 20px;
        font-weight: 500;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        gap: 40px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #8e8e8e;
    }

    textarea,
    .form-select {
        width: 100%;
        padding: 12px;
        border: 1px solid var(--border);
        border-radius: 5px;
        outline: none;
        font-size: 14px;
        background: #fcfcfc;
    }

    .image-preview-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
        gap: 10px;
        margin-bottom: 15px;
    }

    .preview-item {
        position: relative;
        aspect-ratio: 1/1;
    }

    .preview-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 4px;
        border: 1px solid var(--border);
    }

    .remove-img {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--danger);
        color: white;
        border: none;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        cursor: pointer;
        font-size: 12px;
    }

    .upload-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 2px dashed var(--primary);
        border-radius: 8px;
        padding: 20px;
        cursor: pointer;
        color: var(--primary);
        transition: 0.3s;
    }

    .upload-box:hover {
        background: rgba(78, 115, 223, 0.05);
    }

    .upload-box i {
        font-size: 24px;
        margin-bottom: 8px;
    }

    .form-footer {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid var(--border);
        display: flex;
        justify-content: space-between;
    }

    .btn-save {
        background: var(--primary);
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 5px;
        font-weight: 600;
        cursor: pointer;
    }

    .btn-delete-post {
        background: none;
        border: 1px solid var(--danger);
        color: var(--danger);
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
    }
</style>
