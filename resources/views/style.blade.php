<style>
    body{
        background-color: #475161;
        font-family: Arial,sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .sidebar{
        background-color: #1a202c;
        color: #a0aec0;
        width: 200px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        margin: 0;
        padding: 0;
    }
    #sidebar h1 {
        font-size: 24px;
        margin-bottom: 20px;
        margin-left: 10px;
        margin-top: 10px;

    }#sidebar .logo {
         text-decoration: none;
         color: #a0aec0;
         font-weight: bold;
     }

    #sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #sidebar .sidebar-item a {
        text-decoration: none;
        color: #a0aec0;
        font-size: 18px;
        display: block;
        padding: 10px;
        border-radius: 4px; /
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    #sidebar .sidebar-item a:hover {
        background-color: #a0aec0;
        color: #1a202c;
    }


    #nav{
        background-color: #1a202c;
        color: #a0aec0;
        height: 80px;
        top: 0;
        margin-left:200px;
        padding: 10px 20px;
    }
    .nav-item{
        font-size: 12px;
    }
    .nav-item:hover{
        color: #e2e8f0;
    }

    #nav .navbar-brand {
        color: #a0aec0;
        font-weight: bold;
        font-size: 24px;
        text-decoration: none;
    }

    #nav .navbar-nav {
        display: flex;
        align-items: center;
    }

    #nav .nav-link {
        color: #a0aec0;
        font-size: 18px;
        padding: 10px 15px;
        text-decoration: none;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    #nav .nav-link:hover {
        color: #fff;
        background-color: #a0aec0;
        border-radius: 4px;
    }

    #nav .form-inline {
        display: flex;
        align-items: center;
    }

    #nav .form-control {
        margin-right: 10px;
    }

    #nav .btn-outline-success {
        color: #a0aec0;
        border-color: #a0aec0;
        background-color: transparent;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    #nav .btn-outline-success:hover {
        color: #1a202c;
        background-color: #a0aec0;
        border-color: #a0aec0;
    }

    .footer{
        background-color: #1a202c ;
        color: #a0aec0;
        height: 70px;
        margin-left:200px;
        padding: 0;
        text-align: center;
    }

    .form-wrapper {
        background-color: #2d3748;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    .form-container {
        background-color: #ffffff;
        padding: 10px;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 100%;

        max-width: 1000px;
        margin: 10px;
    }

    .btn-btn-primary {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        color: #333;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin: 10px;
    }

    .btn-btn-primary:hover {
        background-color: #d0d0d0;
        border-color: #bbb;
    }

</style>
