<?php

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."asdfghj12345");

require "blocks/connect.php";


$result = $mysql->query("SELECT * FROM `users` WHERE 
`login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
    echo"Такой пользователь не найден";
    exit();
}
    session_start();
    $_SESSION['user'] = 1;
$mysql->close();

header('Location: /');

?>