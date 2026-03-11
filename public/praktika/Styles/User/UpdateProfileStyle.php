<style>
        :root {
            --primary: #4e73df;
            --bg: #fafafa;
            --white: #ffffff;
            --border: #dbdbdb;
            --text: #262626;
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
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .edit-card {
            background: var(--white);
            width: 100%;
            max-width: 450px;
            padding: 30px;
            border: 1px solid var(--border);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .edit-card h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 22px;
            color: var(--text);
        }

        .avatar-section {
            text-align: center;
            margin-bottom: 25px;
        }

        .avatar-wrapper {
            position: relative;
            width: 110px;
            height: 110px;
            margin: 0 auto 10px;
        }

        .avatar-wrapper img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary);
        }

        .upload-icon {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background: var(--primary);
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            cursor: pointer;
            border: 2px solid white;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--border);
            border-radius: 6px;
            outline: none;
            font-size: 14px;
        }

        .form-group input:focus {
            border-color: var(--primary);
        }

        .pass-link {
            display: inline-block;
            margin: 10px 0 20px;
            color: var(--primary);
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-save {
            width: 100%;
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-cancel {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #888;
            font-size: 13px;
        }

        .btn-cancel:hover {
            color: #f44336;
        }
    </style>