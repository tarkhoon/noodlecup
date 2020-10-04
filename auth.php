
<html>
    <head>
    <title>NoodleCup</title>    
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/css/fav.png" type="image/png">
</head>



<body>







<div id="auth_cont">

    <div class="row">
        <p id="auth_text">Авторизация</p>
        <div class="col">
            
                <form action="validation-form/login.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success">Авторизация</button>
                
                </form>
                <form action="reg.php" target="_blank">
                <button>Регистрация</button>
                </form>
        </div>

    </div>


</div>








</body>



</html>