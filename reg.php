
<html>
    <head>
    <title>NoodleCup</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>



<body>





<div id="auth_cont">

    <div id="row">
        <p id="auth_text">Регистрация</p>
        <div class="col">
            
        <form action="validation-form/check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
             <button class="btn btn-success">Зарегистрировать</button>
            </form>
            <form action="auth.php" target="_blank">
                <button>Авторизация</button>
                </form>
        </div>

    </div>


</div>








</body>



</html>