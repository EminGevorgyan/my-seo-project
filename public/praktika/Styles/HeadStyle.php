<style>
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10%; 
    position: fixed;
    top: 0;
    left: 0; /* Ավելացրու սա */
    right: 0; /* Ավելացրու սա */
    width: 100%;
    height: 60px;
    background: #fff;
    border-bottom: 1px solid #dbdbdb;
    z-index: 1000;
    box-sizing: border-box; /* ՍԱ ԱՄԵՆԱԿԱՐԵՎՈՐ ՏՈՂՆ Է */
}

    /* Լոգոյի ոճը */
    .logo {
        font-size: 24px;
        font-weight: 800;
        color: var(--primary);
        /* #4e73df */
        text-decoration: none;
    }

    /* Հղումների կոնտեյները */
    .nav-links {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    /* Առանձին հղումները */
    .nav-links a {
        color: #262626;
        font-size: 20px;
        text-decoration: none;
        position: relative;
        transition: color 0.2s;
    }

    /* Ծանուցումների կարմիր կլորակը (Badge) */
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

    /* Օգտատիրոջ փոքր նկարը Header-ում */
    .user-mini,
    .user-profile-mini {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--primary);
    }

    /* Որոնման սրբապատկերի (Search icon) հովեր էֆեկտը */
    .nav-links a i.fa-search:hover {
        color: var(--primary);
        /* Կամ քո նշած --primary-blue */
    }
</style>