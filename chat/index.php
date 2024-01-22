<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4chat
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }
        body {
            background: #eee;
        }
        .login__forms {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }
        .login__box {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 4px;
            padding: 0.875rem;
            margin-bottom: 1rem;
            width: 450px;
        }
        .login__box input {
            border: none;
            outline: none;
            padding: 0.45rem 0.875rem;
            font-family: 'Poppins', sans-serif;
            width: 100%;
        }
        .btn-login {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #3a3a3a;
            color: #fff;
            padding: 0.875rem;
            width: 12rem;
            box-shadow: 4px 4px #2a2a2a;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: 300ms;
        }
        .btn-login:hover {
            transform: translateY(7px);
            transition: 300ms;
        }
        .btn-login span {
            padding-left: 10px;
        }
        .fs-20 {
            font-size: 24px;
        }

        .body div h1 {
            
        }
        .body div {
            color:blue;

        }
        .container h1 {
    font-family: 'Preview Font', sans-serif;
    text-align: center;
   }

    </style>

</head>
<body>
   <div class='container'>
    <h1>
        CAN YOU ENTER USERNAME?
    </h1>
   </div>

    <div class="login__forms">
        <div class="login__box">
            <ion-icon class="fs-20" name="person-outline"></ion-icon>
            <input type="text" name="username" placeholder="Username" autocomplete="off">
        </div>
        
        <button class="btn-login" onclick="redirectToLoginPage()">
    <ion-icon name="log-in-outline"></ion-icon>
    <span>Log In</span>
</button>
</div>


<h1><?php echo = 'nanay';   ?></h1>

    


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>