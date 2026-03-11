<style>
        :root {
            --primary: #4e73df;
            --bg: #fafafa;
            --white: #ffffff;
            --text-dark: #262626;
            --border: #dbdbdb;
            --gray: #8e8e8e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text-dark);
            padding-top: 60px;
        }

        nav {
            background: var(--white);
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15%;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            border-bottom: 1px solid var(--border);
        }

        .logo {
            font-size: 22px;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-container {
            max-width: 935px;
            margin: 30px auto 0;
            padding: 0 20px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 50px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--border);
            margin-bottom: 30px;
        }

        .profile-image-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid var(--border);
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .post {
            position: relative;
            aspect-ratio: 1 / 1;
            overflow: hidden;
            background: #000;
            border-radius: 4px;
        }

        .post-header,
        .post-content,
        .post-actions {
            display: none;
        }

        .carousel-view {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            width: 100%;
            height: 100%;
            padding-bottom: 5px;
        }

        .carousel-view::-webkit-scrollbar {
            height: 4px;
            display: block;
        }

        .carousel-view::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }

        .carousel-view::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }

        .carousel-item {
            flex: 0 0 100%;
            height: 100%;
            scroll-snap-align: start;
        }

        .post-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;

        }


        .post-header,
        .post-content,
        .post-actions {
            display: none;
        }

        .post-actions {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            opacity: 0;
            transition: 0.3s;
        }

        .post:hover .post-actions {
            opacity: 1;
        }

        .post-actions button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .disLike>i {
            color: red;
        }

        .disLike {
            color: red;
        }

        .edit-post-icon {
            color: white;
            text-decoration: none;
            font-size: 14px;
            margin-right: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .edit-post-icon:hover {
            color: var(--primary);
            transform: scale(1.2);
        }

        .right-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .post-actions {
            padding: 12px 15px;
            font-size: 13px;
        }

        .comments-window {
            max-width: 500px;
            margin: 20px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            height: 600px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .comments-header {
            padding: 15px 20px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 15px;
            font-weight: 600;
            font-size: 18px;
            color: #333;
        }

        .left-actions>a {
            color: white;
        }

        .comments-body {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: #fff;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .message-wrapper {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .msg-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            background: #eee;
        }

        .message-content {
            display: flex;
            flex-direction: column;
            max-width: 80%;
        }

        .message-bubble {
            background: #f1f0f0;
            padding: 12px 16px;
            border-radius: 18px;
            border-top-left-radius: 4px;
            color: #262626;
            font-size: 14px;
            line-height: 1.5;
        }

        .message-time {
            font-size: 11px;
            color: #999;
            margin-top: 5px;
            padding-left: 5px;
        }

        .comments-input-area {
            padding: 15px 20px;
            border-top: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .msg-avatar-mini {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
        }

        .input-wrapper {
            flex: 1;
            background: #f1f0f0;
            border-radius: 25px;
            padding: 5px 15px;
            display: flex;
            align-items: center;
        }

        .input-wrapper input {
            flex: 1;
            border: none;
            background: transparent;
            padding: 8px 5px;
            outline: none;
            font-size: 14px;
        }

        .send-btn {
            background: none;
            border: none;
            color: #0084ff;
            font-size: 18px;
            cursor: pointer;
            padding: 5px;
            transition: 0.2s;
        }

        .send-btn:hover {
            transform: scale(1.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15%;
            position: fixed;
            top: 0;
            width: 100%;
            background: #fff;
            border-bottom: 1px solid #dbdbdb;
            z-index: 1000;
            height: 60px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links a {
            color: #262626;
            font-size: 20px;
            text-decoration: none;
            position: relative;
        }

        .notification-badge {
            position: absolute;
            top: -8px;
            right: -10px;
            background-color: #ed4956;
            color: white;
            font-size: 10px;
            font-weight: 600;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid white;
        }

        .user-mini {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>