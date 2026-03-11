<style>
        :root {
            --sidebar-bg: #2e3750;
            --main-bg: #f4f7f6;
            --primary: #4e73df;
            --danger: #e74a3b;
            --text-dark: #334155;
            --border: #edf2f9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--main-bg);
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background: var(--sidebar-bg);
            color: white;
            position: fixed;
            height: 100%;
            padding: 20px;
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
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .sidebar a.active {
            background: rgba(78, 115, 223, 0.2);
            color: white;
        }

        .main-content {
            margin-left: 260px;
            width: calc(100% - 260px);
            padding: 40px;
        }

        .admin-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border);
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .card-header h2 {
            font-size: 20px;
            color: var(--text-dark);
        }

        .edit-grid {
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
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: #f8fafc;
            outline: none;
        }

        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .img-container {
            position: relative;
            aspect-ratio: 1/1;
        }

        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
            border: 1px solid var(--border);
        }

        .btn-delete-img {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--danger);
            color: white;
            border: none;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            cursor: pointer;
        }

        .upload-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: 140px;
            border: 2px dashed #4e73df;
            border-radius: 15px;
            background-color: #f8faff;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            padding: 20px;
        }

        .upload-area:hover {
            background-color: #edf2ff;
            border-color: #224abe;
        }

        .upload-area i {
            font-size: 32px;
            color: #4e73df;
            margin-bottom: 10px;
        }

        .upload-area span {
            font-size: 14px;
            color: #4e73df;
            font-weight: 500;
        }

        .form-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
        }

        .btn-save {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
        }
    </style>