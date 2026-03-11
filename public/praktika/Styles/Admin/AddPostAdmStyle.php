<style>
    :root {
        --sidebar-bg: #2e3750;
        --main-bg: #f4f7f6;
        --primary: #4e73df;
        --text: #334155;
        --border: #edf2f9;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body {
        background: var(--main-bg);
        display: flex;
    }

    .sidebar {
        width: 260px;
        background: var(--sidebar-bg);
        height: 100vh;
        position: fixed;
        padding: 20px;
        color: white;
    }

    .sidebar-brand {
        font-size: 22px;
        font-weight: bold;
        color: var(--primary);
        margin-bottom: 40px;
        text-align: center;
    }

    .sidebar a {
        display: block;
        color: #aeb1be;
        text-decoration: none;
        padding: 12px;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .sidebar a.active {
        background: rgba(78, 115, 223, 0.2);
        color: white;
    }

    .main-content {
        margin-left: 260px;
        width: 100%;
        padding: 40px;
    }

    .admin-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid var(--border);
        padding-bottom: 20px;
        margin-bottom: 30px;
    }

    .btn-back {
        font-size: 13px;
        color: #64748b;
        text-decoration: none;
        background: #f1f5f9;
        padding: 8px 15px;
        border-radius: 6px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #475569;
        margin-bottom: 8px;
    }

    .form-input {
        width: 100%;
        padding: 12px;
        border: 1px solid var(--border);
        border-radius: 10px;
        background: #f8fafc;
        outline: none;
    }

    .dashed-upload {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        min-height: 180px;
        border: 2px dashed var(--primary);
        border-radius: 15px;
        background: #f8faff;
        cursor: pointer;
        padding: 20px;
        color: var(--primary);
    }

    .dashed-upload i {
        font-size: 35px;
        margin-bottom: 10px;
    }

    .dashed-upload span {
        font-size: 14px;
        font-weight: 500;
    }

    .card-footer {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid var(--border);
    }

    .btn-submit {
        background: var(--primary);
        color: white;
        border: none;
        padding: 12px 40px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
    }
</style>
