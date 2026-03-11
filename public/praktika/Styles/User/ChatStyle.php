<style>
        :root {
            --bg-color: #f0f2f5;
            --border-color: #efefef;
            --text-dark: #262626;
            --blue: #0084ff;
            --my-bubble: #0084ff;
            --other-bubble: #f1f0f0;
        }

        body {
            background-color: var(--bg-color);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: sans-serif;
        }

        .chat-window {
            width: 100%;
            max-width: 500px;
            height: 85vh;
            background: #fff;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .chat-header {
            padding: 15px 20px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .chat-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .chat-header .user-info h4 {
            margin: 0;
            font-size: 15px;
        }

        .chat-body {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 12px;
            background: #fff;
        }

        .msg {
            display: flex;
            max-width: 80%;
            flex-direction: column;
        }

        .msg.incoming {
            align-self: flex-start;
        }

        .msg.incoming .bubble {
            background: var(--other-bubble);
            color: var(--text-dark);
            border-radius: 18px;
            border-top-left-radius: 4px;
            padding: 10px 15px;
            font-size: 14px;
        }

        .msg.outgoing {
            align-self: flex-end;
        }

        .msg.outgoing .bubble {
            background: var(--my-bubble);
            color: #fff;
            border-radius: 18px;
            border-top-right-radius: 4px;
            padding: 10px 15px;
            font-size: 14px;
        }

        .msg-time {
            font-size: 10px;
            color: #999;
            margin-top: 4px;
            padding: 0 5px;
        }

        .msg.outgoing .msg-time {
            text-align: right;
        }

        .chat-footer {
            padding: 15px;
            border-top: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .chat-input-wrapper {
            flex: 1;
            background: #f1f0f0;
            border-radius: 25px;
            padding: 5px 15px;
            display: flex;
            align-items: center;
        }

        .chat-input-wrapper input {
            flex: 1;
            border: none;
            background: transparent;
            padding: 8px;
            outline: none;
            font-size: 14px;
        }

        .chat-footer img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid #dbdbdb;
            flex-shrink: 0;
        }

        .chat-footer {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 15px;
            background: #fff;
        }

        .send-btn {
            background: none;
            border: none;
            color: var(--blue);
            font-size: 20px;
            cursor: pointer;
            transition: 0.2s;
        }

        .send-btn:hover {
            transform: scale(1.1);
        }
    </style>