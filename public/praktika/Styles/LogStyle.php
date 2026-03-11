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
        }

        .auth-card {
            background: var(--white);
            width: 100%;
            max-width: 400px;
            padding: 45px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .auth-logo {
            width: 70px;
            height: 70px;
            background: rgba(78, 115, 223, 0.1);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            margin: 0 auto 15px;
        }

        .auth-header h2 {
            color: var(--dark);
            font-size: 26px;
            font-weight: 700;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 15px 14px 45px;
            border: 1px solid #d1d3e2;
            border-radius: 12px;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.1);
        }

        .btn-auth {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-auth:hover {
            background: #2e59d9;
            transform: translateY(-1px);
        }

        .auth-footer {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            color: var(--gray);
        }

        .auth-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
        }
        
        .forgot-pass {
            display: block;
            text-align: right;
            margin-top: -10px;
            margin-bottom: 20px;
            font-size: 12px;
            color: var(--gray);
            text-decoration: none;
        }
        
        .forgot-pass:hover {
            color: var(--primary);
        }
    </style>