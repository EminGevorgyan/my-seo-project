<style>
        :root {
            --bg: #fafafa;
            --border: #dbdbdb;
            --text: #262626;
            --text-light: #8e8e8e;
            --blue: #0095f6;
            --white: #ffffff;
        }

        body {
            background-color: var(--bg);
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: var(--text);
        }

        .chats-wrapper {
            max-width: 600px;
            margin: 20px auto;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
            height: 90vh;
            display: flex;
            flex-direction: column;
        }

        .chats-header {
            padding: 15px 20px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chats-header h2 {
            font-size: 20px;
            margin: 0;
        }

        .users-list {
            flex: 1;
            overflow-y: auto;
        }

        .user-item {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            text-decoration: none;
            color: var(--text);
            transition: background 0.2s;
            border-bottom: 1px solid #f9f9f9;
        }

        .user-item:hover {
            background-color: #f6f6f6;
        }

        .user-avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 1px solid var(--border);
        }

        .user-info {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .last-message {
            font-size: 13px;
            color: var(--text-light);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 250px;
        }

        .user-meta {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 5px;
        }

        .message-time {
            font-size: 12px;
            color: var(--text-light);
        }

        .unread-badge {
            width: 10px;
            height: 10px;
            background-color: var(--blue);
            border-radius: 50%;
        }

        .users-list::-webkit-scrollbar {
            width: 6px;
        }

        .users-list::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }
    </style>