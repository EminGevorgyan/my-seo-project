 <style>
        :root {
            --primary: #4e73df;
            --bg: #f4f7f6;
            --white: #ffffff;
            --sidebar-dark: #2c3142;
            --text-main: #334155;
            --border: #edf2f9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg);
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background: var(--sidebar-dark);
            color: #aeb1be;
            padding: 25px 15px;
            position: fixed;
            height: 100%;
            z-index: 100;
        }

        .sidebar h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 40px;
            padding-left: 15px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #aeb1be;
            text-decoration: none;
            padding: 14px 20px;
            border-radius: 10px;
            margin-bottom: 8px;
            transition: 0.3s;
            font-size: 15px;
        }

        .sidebar a i {
            font-size: 18px;
            width: 25px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .sidebar a.active {
            background: rgba(78, 115, 223, 0.15);
            color: var(--primary);
            font-weight: 600;
        }

        .main-content {
            margin-left: 260px;
            width: calc(100% - 260px);
            padding: 30px;
        }

        .admin-card {
            background: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .card-header {
            padding: 25px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-main);
        }

        .btn-add {
            background: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
        }

        .btn-add:hover {
            background: #3756b5;
        }

        .table-responsive {
            padding: 10px;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
        }

        .admin-table thead th {
            background: #f8fafc;
            padding: 15px 20px;
            text-align: left;
            font-size: 12px;
            text-transform: uppercase;
            color: #64748b;
            font-weight: 700;
        }

        .admin-table tbody td {
            padding: 18px 20px;
            border-bottom: 1px solid var(--border);
            font-size: 14px;
            color: var(--text-main);
            vertical-align: middle;
        }

        .post-img-wrapper {
            position: relative;
            width: 55px;
            height: 55px;
        }

        .post-img-wrapper img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        .img-badge {
            position: absolute;
            top: -6px;
            right: -6px;
            background: var(--sidebar-dark);
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 8px;
            border: 2px solid white;
        }

        .post-info b {
            display: block;
            color: #1e293b;
            margin-bottom: 2px;
        }

        .post-info span {
            font-size: 12px;
            color: #94a3b8;
        }

        .author-tag {
            background: #f1f5f9;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-tag {
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
        }

        .status-tag.active {
            color: white
        }

        .action-btns {
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }

        .act-btn {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: 0.2s;
            cursor: pointer;
        }

        .act-btn.edit {
            background: #eff6ff;
            color: #2563eb;
            border: 1px solid #dbeafe;
        }

        .act-btn.delete {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid #fee2e2;
        }

        .act-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>