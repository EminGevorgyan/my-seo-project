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
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: var(--bg);
        color: var(--text-dark);
    }


    .user-profile-mini {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--primary);
    }

    .container {
        max-width: 600px;
        margin: 80px auto 40px;
        padding: 0 15px;
    }



    .upload-card {
        background: var(--white);
        padding: 20px;
        border-radius: 15px;
        margin-bottom: 25px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.03);
    }

    .upload-form input {
        width: 100%;
        padding: 12px;
        border: 1px solid var(--border);
        border-radius: 10px;
        resize: none;
        outline: none;
        background: #f8f9fc;
        margin-bottom: 15px;
    }
</style>