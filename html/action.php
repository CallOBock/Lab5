<?php
session_start();
$login = htmlentities(strip_tags(trim($_POST['login'])), ENT_QUOTES);
$password = md5($_POST['password']);
$ip = $_SERVER['REMOTE_ADDR'];

require_once "data.php";

if(empty($login) || empty($password)){

	$_SESSION['message'] = "Заполните все поля";
	header('Location: authorization.php');

}elseif (($login != $login_auth) || ($password != $pass_auth)){

	$_SESSION['message'] = "Неверное имя пользователя или пароль";
	header('Location: authorization.php');

}else{

	$_SESSION['message'] = 'Вы успешно залогинены';
	$_SESSION['auth'] = true;
	header('Location: ../index.php');
}
?>