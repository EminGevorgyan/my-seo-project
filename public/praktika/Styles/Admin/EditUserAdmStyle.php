<style>
        :root {
            --primary: #4e73df;
            --success: #1cc88a;
            --bg: #f8f9fc;
            --white: #ffffff;
            --dark: #2e3750;
            --border: #e3e6f0;
            --text: #4e73df;
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

        .btn-back {
            background: var(--primary);
            color: white;
            padding: 8px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
        }

        .edit-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            max-width: 800px;
            margin: 0 auto;
        }

        .profile-upload {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .profile-upload img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--border);
        }

        .file-input-label {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 5px;
            cursor: pointer;
            font-size: 13px;
            color: var(--dark);
        }

        .grid-inputs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #858796;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.1);
        }

        .full-width {
            grid-column: span 2;
        }

        .btn-save-user {
            width: 100%;
            background: var(--success);
            color: white;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-save-user:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

    </style>