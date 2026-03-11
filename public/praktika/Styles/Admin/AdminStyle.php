 <style>
        :root {
            --primary: #4e73df;
            --success: #1cc88a;
            --danger: #e74a3b;
            --bg: #f8f9fc;
            --white: #ffffff;
            --dark: #2e3750;
            --border: #e3e6f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--dark);
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: var(--dark);
            color: white;
            padding: 20px;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 30px;
            text-align: center;
            color: var(--primary);
        }

        .sidebar a {
            display: block;
            color: #aeb1be;
            text-decoration: none;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .main-content {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 40px;
        }

        .header-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .btn-add {
            background: var(--success);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-add:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .table-container {
            background: var(--white);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 15px;
            border-bottom: 2px solid var(--border);
            color: #858796;
            font-size: 13px;
            text-transform: uppercase;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-info span {
            font-weight: 600;
        }

        .action-btns {
            display: flex;
            gap: 10px;
        }

        .btn-icon {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-edit {
            background: var(--primary);
        }

        .btn-delete {
            background: var(--danger);
        }

        .btn-icon:hover {
            opacity: 0.8;
            transform: scale(1.1);
        }

        .admin-select {
            padding: 6px 10px;
            border: 1px solid #e3e6f0;
            border-radius: 6px;
            background-color: #f8fafc;
            color: #4e73df;
            font-size: 13px;
            font-weight: 600;
            outline: none;
            cursor: pointer;
            transition: all 0.3s ease;
            appearance: none;
        }

        .admin-select:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.1);
        }

        .status-color {
            min-width: 120px;
            text-align: center;
        }

        .admin-select option[value="1"] {
            color: #1cc88a;
            background: #fff;
        }

        .admin-select option[value="0"] {
            color: #e74a3b;
            background: #fff;
        }

        select.status-color[value="1"] {
            background-color: #dcfce7;
            color: #15803d;
            border-color: #bbf7d0;
        }

        select.status-color[value="0"] {
            background-color: #fee2e2;
            color: #dc2626;
            border-color: #fecaca;
        }

        .btn-save {
            background-color: #2ecc71;
            border: none;
            cursor: pointer;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35px;
            height: 35px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .btn-save:hover {
            background-color: #27ae60;
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(46, 204, 113, 0.3);
        }

        .btn-save:focus {
            outline: none;
        }
    </style>