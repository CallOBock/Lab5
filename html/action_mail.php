<?php
session_start();
require_once 'data.php';
require_once 'function.php';

	$letter = clear_input_data($_POST['input_textarea']);
	$name = clear_input_data($_POST['name']);
	$email = clear_input_data($_POST['email']);
	$captcha = $_POST['g-recaptcha-response'];
	$ip = $_SERVER['REMOTE_ADDR'];

	if(empty($name) || empty($email) || empty($letter)){
		$_SESSION['message'] = "Пожалуйста,заполните все поля";
		header('Location: connection.php');
	} elseif (!check_captcha($secret_key, $captcha, $ip)) {
		$_SESSION['message'] = "Вы не прошли капчу";
		header('Location: connection.php');
	} else {
		if (SendMessage($name, $email, $letter)){
			$_SESSION['message'] = "Письмо успешно отправлено";
			header('Location: connection.php');
		}else{
			$_SESSION['message'] = "Возникла ошибка при отправке";
			header('Location: connection.php');
		}	
	}