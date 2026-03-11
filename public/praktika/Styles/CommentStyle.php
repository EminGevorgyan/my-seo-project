<style>
.comments-window {
    max-width: 500px;
    margin: 20px auto;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
   display: flex !important;
    flex-direction: column !important;
    height: 600px !important; /* Կամ 80vh */
    overflow: hidden !important;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.comments-body {
   flex: 1 1 auto !important; /* Սա ստիպում է ձգվել */
    overflow-y: auto !important;
    min-height: 0 !important;
    padding: 20px;
    background: #fff;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.comments-input-area {
    margin-top: auto; 
    padding: 15px 20px;
    border-top: 1px solid #f0f0f0;
    display: flex;
    align-items: center;
    gap: 10px;
    background: #fff;
    flex-shrink: 0; 
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
.comments-footer {
   flex-shrink: 0 !important; /* Արգելում է փոքրանալ */
    margin-top: auto !important; 
}
</style>