<style>
     :root {
        --primary: #4e73df;
        --bg: #f0f2f5;
        --white: #ffffff;
        --text-dark: #2e3750;
        --border: #e3e6f0;
        --gray: #858796;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    body {
        background-color: var(--bg);
        color: var(--text);
        padding-top: 80px;
    }

    .navbar {
        background: #fff;
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 15%;
        position: fixed;
        top: 0;
        width: 100%;
        border-bottom: 1px solid var(--border);
        z-index: 1000;
    }

    .logo {
        font-size: 22px;
        font-weight: bold;
        color: var(--text);
        text-decoration: none;
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 22px;
    }

    .nav-links i {
        font-size: 22px;
        color: var(--text);
    }

    .nav-avatar {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .profile-header {
        display: flex;
        align-items: center;
        margin-bottom: 44px;
        gap: 40px;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        border: 1px solid var(--border);
    }

    .profile-image img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid var(--border);
        padding: 3px;
    }

    .profile-details {
        flex: 1;
    }

    .profile-username-row {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .profile-username-row h2 {
        font-weight: 300;
        font-size: 24px;
    }

    .btn-follow {
        background:#efefef ;
        color: var(--text);
        border: none;
        padding: 6px 16px;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
    }

    .btn-message {
        background: #efefef;
        color: var(--text);
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
    }

    .profile-stats {
        display: flex;
        gap: 20px;
        font-size: 14px;
    }

    .profile-stats b {
        color: var(--text);
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

    .comments-body {
        max-height: 470px;
        flex: 1;
        padding: 20px;
        overflow-y: auto;
        background: #fff;
        display: flex;
        flex-direction: column;
        gap: 12px;
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
</style>