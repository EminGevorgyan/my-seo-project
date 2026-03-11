<style>
    :root {
        --primary-blue: #0095f6;
        --bg: #fafafa;
        --border: #dbdbdb;
        --text: #262626;
        --text-light: #8e8e8e;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    body {
        background-color: var(--bg);
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
        text-decoration: none;
        color: var(--text);
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 22px;
    }

    .nav-links i {
        font-size: 20px;
        color: var(--text);
    }

    .nav-links i.active {
        color: var(--primary-blue);
    }

    .nav-avatar {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        object-fit: cover;
    }

    .search-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .search-header {
        background: #fff;
        padding: 15px;
        border-radius: 12px;
        border: 1px solid var(--border);
        margin-bottom: 20px;
    }

    .search-box-wrapper {
        display: flex;
        align-items: center;
        background: #efefef;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        border: 1px solid transparent;
        transition: all 0.2s ease;
    }

    .search-box-wrapper:focus-within {
        background: #fff;
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 2px rgba(0, 149, 246, 0.1);
    }

    .search-icon {
        padding-left: 15px;
        color: var(--text-light);
        font-size: 14px;
    }

    .search-box-wrapper input {
        flex: 1;
        background: transparent;
        border: none;
        outline: none;
        padding: 12px 10px;
        font-size: 16px;
        color: var(--text);
    }

    .search-submit-btn {
        background: var(--primary-blue);
        color: white;
        border: none;
        padding: 8px 16px;
        margin-right: 5px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 13px;
        cursor: pointer;
        transition: background 0.2s;
    }

    .search-submit-btn:hover {
        background: #1877f2;
    }

    .search-submit-btn:active {
        transform: scale(0.96);
    }

    .results-list {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 12px;
        overflow: hidden;
    }

    .user-item {
        display: flex;
        align-items: center;
        padding: 12px 20px;
        text-decoration: none;
        color: var(--text);
        border-bottom: 1px solid #f0f0f0;
        transition: background 0.2s;
    }

    .user-item:hover {
        background: #fafafa;
    }

    .user-item:last-child {
        border-bottom: none;
    }

    .user-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 15px;
    }

    .user-info {
        flex: 1;
    }

    .user-info h4 {
        font-size: 14px;
        font-weight: 600;
    }

    .user-info p {
        font-size: 13px;
        color: var(--text-light);
    }

    .view-btn {
        background: var(--primary-blue);
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
    }
</style>