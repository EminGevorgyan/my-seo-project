<style>
        :root {
            --primary: #4e73df;
            --bg: #f8f9fc;
            --white: #ffffff;
            --gray: #858796;
            --dark: #2e3750;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg);
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; 
        }

        .auth-card {
            background: var(--white);
            width: 100%;
            max-width: 420px;
            padding: 25px 35px; 
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 15px;
        }

        .auth-header h2 {
            color: var(--dark);
            font-size: 22px;
            font-weight: 700;
        }

        .avatar-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 15px;
        }

        .avatar-circle {
            width: 65px; 
            height: 65px;
            background: #eaecf4;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: #d1d3e2;
            border: 2px dashed #b7b9cc;
            margin-bottom: 5px;
        }

        .file-label {
            font-size: 11px;
            color: var(--primary);
            cursor: pointer;
            font-weight: 600;
        }

        #avatar-upload { display: none; }

        .input-row {
            display: flex;
            gap: 10px; 
        }

        .input-group {
            margin-bottom: 12px;
            position: relative;
            width: 100%;
        }

        .input-group i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            font-size: 13px;
            z-index: 5;
        }

        .input-group input, .input-group select {
            width: 100%;
            padding: 10px 10px 10px 38px; 
            border: 1px solid #d1d3e2;
            border-radius: 8px;
            outline: none;
            font-size: 13px;
            transition: 0.3s;
            background-color: white;
        }

        .select-group { appearance: none; }
        .input-group.select-wrapper::after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            pointer-events: none;
        }

        .input-group input:focus, .input-group select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(78, 115, 223, 0.1);
        }

        .btn-auth {
            width: 100%;
            padding: 11px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 5px;
        }

        .btn-auth:hover {
            background: #2e59d9;
        }

        .auth-footer {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: var(--gray);
        }

        .auth-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
        }
    </style>