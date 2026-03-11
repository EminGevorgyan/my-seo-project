<style>
        :root {
            --admin-primary: #2c3e50;
            --admin-accent: #3498db;
            --success: #27ae60;
            --bg: #f4f7f6;
            --text: #333;
            --white: #ffffff;
            --border: #dcdde1;
            --danger: #e74c3c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            padding-top: 80px;
        }

        .admin-nav {
            background: var(--admin-primary);
            color: var(--white);
            padding: 0 5%;
            height: 70px;
            display: flex;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-content {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-logo {
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            color: var(--white);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .admin-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid var(--admin-accent);
            object-fit: cover;
        }

        .admin-container {
            max-width: 900px;
            margin: 20px auto 40px;
            padding: 0 20px;
        }

        .form-card {
            background: var(--white);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border);
        }

        .form-header {
            margin-bottom: 35px;
            border-bottom: 2px solid var(--bg);
            padding-bottom: 20px;
        }

        .form-header h2 {
            font-size: 26px;
            color: var(--admin-primary);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .form-header p {
            color: #7f8c8d;
            font-size: 15px;
            margin-top: 8px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .input-group label {
            font-weight: 600;
            font-size: 14px;
            color: var(--admin-primary);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .input-group label i {
            color: var(--admin-accent);
            width: 18px;
            text-align: center;
        }

        .input-group input,
        .input-group select {
            padding: 12px 15px;
            border: 1px solid var(--border);
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            transition: all 0.3s ease;
            background-color: #fcfcfc;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: var(--admin-accent);
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .file-upload input {
            display: none;
        }

        .file-upload label {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 15px;
            background: #f8f9fa;
            border: 2px dashed var(--border);
            text-align: center;
            cursor: pointer;
            border-radius: 8px;
            transition: all 0.3s;
            color: #7f8c8d;
        }

        .file-upload label:hover {
            background: #ecf0f1;
            border-color: var(--admin-accent);
            color: var(--admin-accent);
        }

        .file-upload i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .form-actions {
            margin-top: 40px;
            display: flex;
            gap: 15px;
            padding-top: 20px;
            border-top: 1px solid var(--bg);
        }

        .save-btn {
            background: var(--success);
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: transform 0.2s, background 0.3s;
        }

        .save-btn:hover {
            background: #219150;
            transform: translateY(-2px);
        }

        .cancel-btn {
            background: #95a5a6;
            color: white;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            display: flex;
            align-items: center;
            transition: background 0.3s;
        }

        .cancel-btn:hover {
            background: #7f8c8d;
        }
    </style>