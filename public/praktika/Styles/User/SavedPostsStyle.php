<style>
    :root {
        --primary: #4e73df;
        --bg: #f0f2f5;
        --white: #ffffff;
        --text-dark: #2e3750;
        --border: #e3e6f0;
        --gray: #858796;
    }

    .disLike>i {
        color: red;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body {
        background-color: var(--bg);
        padding-top: 80px;
        color: #262626;
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
        color: var(--primary);
        text-decoration: none;
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .nav-links a {
        color: #262626;
        font-size: 20px;
        text-decoration: none;
    }

    .nav-links a.active {
        color: var(--primary);
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .saved-header {
        text-align: center;
        padding: 40px 0;
        border-bottom: 1px solid var(--border);
        margin-bottom: 30px;
    }

    .saved-header i {
        font-size: 30px;
        border: 2px solid #262626;
        padding: 15px;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .saved-header h1 {
        font-size: 24px;
        font-weight: 300;
        margin-bottom: 5px;
    }

    .saved-header p {
        color: var(--text-gray);
        font-size: 14px;
    }



   

  

 

   


       
 
     

    

  
    
</style>