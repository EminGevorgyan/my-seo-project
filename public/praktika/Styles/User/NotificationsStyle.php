<style>
    :root {

        --bg: #fafafa;

        --border: #dbdbdb;

        --text-main: #262626;

        --text-light: #8e8e8e;

        --blue: #0095f6;

    }

body {
    margin: 0;
    /* Սա կստեղծի անհրաժեշտ հեռավորությունը navbar-ից */
    padding-top: 80px !important; 
    background-color: #fafafa;
}

.notifications-container {
    max-width: 600px;
    /* Կենտրոնացնում է կոնտեյները և ապահովում է, որ այն չբարձրանա վերև */
    margin: 20px auto !important; 
    background: #fff;
    border: 1px solid #dbdbdb;
    border-radius: 8px;
    position: relative;
    z-index: 1;
}
    .notif-header {
        padding: 15px 20px;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        gap: 15px;
    }



    .notif-header h2 {

        font-size: 18px;

        margin: 0;

    }



    .notif-list {

        display: flex;

        flex-direction: column;

    }



    .notif-item {

        display: flex;

        align-items: center;

        padding: 12px 20px;

        gap: 15px;

        border-bottom: 1px solid #fafafa;

        text-decoration: none;

        color: var(--text-main);

        transition: background 0.2s;

    }



    .notif-item:hover {

        background-color: #fcfcfc;

    }



    .notif-avatar {

        width: 44px;

        height: 44px;

        border-radius: 50%;

        object-fit: cover;

        border: 1px solid var(--border);

    }



    .notif-content {

        flex: 1;

        font-size: 14px;

        line-height: 1.4;

    }



    .notif-content b {

        font-weight: 600;

    }



    .notif-time {

        color: var(--text-light);

        font-size: 13px;

        margin-left: 5px;

    }



    .notif-post-preview {

        width: 40px;

        height: 40px;

        object-fit: cover;

        border-radius: 4px;

    }



    .btn-follow-notif {

        background: var(--blue);

        color: #fff;

        border: none;

        padding: 5px 12px;

        border-radius: 4px;

        font-weight: 600;

        font-size: 13px;

        cursor: pointer;

    }



    .unread {

        background-color: #f0f9ff;

    }



    .unread-dot {
        width: 8px;
        height: 8px;
        background-color: var(--blue);
        border-radius: 50%;
    }
</style>