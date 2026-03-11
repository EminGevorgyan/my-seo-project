<style>
    .post {
        background: var(--white);
        border-radius: 15px;
        padding: 0;
        margin-bottom: 25px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.03);
        overflow: hidden;
    }

    .post-header {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px;
    }

    .post-header img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }

    .post-content {
        padding: 0 15px 15px;
        font-size: 15px;
        line-height: 1.5;
    }

    .post-image {
        width: 100%;
        height: 450px;
        object-fit: cover;
        display: block;
    }

    .post-actions {
        padding: 15px;
        border-top: 1px solid var(--border);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .post-actions button {
        background: transparent;
        border: none;
        font-size: 14px;
        color: var(--gray);
        cursor: pointer;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: 0.3s;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .post-actions button:hover {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .like {
        color: var(--gray) !important;
    }

    .disLike,
    .disLike i {
        color: #e74c3c !important;
    }

    .unsave {
        color: #2d3436 !important;
    }

    .unsave i {
        font-weight: 900;
    }

    .carousel-view {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        background: #000;
    }

    .carousel-item {
        flex: 0 0 100%;
        scroll-snap-align: start;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #000;
    }

    .like >i {
        color: #858796;
    }

    .disLike {
        color: #e74c3c !important;
    }

    .unsave {
        color: #2d3436 !important;
    }

    .unsave i {
        font-weight: 900;
    }



    .post-actions {
        padding: 15px;
        border-top: 1px solid var(--border);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .left-actions {
        display: flex;
        gap: 20px;
    }

    .left-actions>a {
        color: #858796;
    }

    .right-actions {
        display: flex;
    }

    .post-actions button {
        background: transparent;
        border: none;
        font-size: 14px;
        color: var(--gray);
        cursor: pointer;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: 0.3s;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .post-actions button i {
        font-size: 16px;
    }

    .disLike>i {
        color: red;
    }

    .disLike {
        color: red;
    }
</style>