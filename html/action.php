<?php
session_start();
$login = htmlentities(strip_tags(trim($_POST['login'])), ENT_QUOTES);
$password = md5($_POST['password']);
$ip = $_SERVER['REMOTE_ADDR'];

require_once "data.php";

if(empty($login) || empty($password)){

	$_SESSION['massage'] = "Заполните все поля";
	header('Location: authorization.php');

}elseif (($login != $login_auth) || ($password != $pass_auth)){

	$_SESSION['massage'] = "Неверное имя пользователя или пароль";
	header('Location: authorization.php');

}else{

	$_SESSION['massage'] = 'Вы успешно залогинены';
	$_SESSION['auth'] = true;
	header('Location: ../index.php');
}
?>