<?php
	session_start();
	$message = null;
	$auth = null; 
	
    if(isset($_SESSION['message'])){
      	$message = $_SESSION['message'];  
    }
    unset($_SESSION['message']);
	include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My portfolio</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../images/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../style/normalize.css">
    <link rel="stylesheet" type="text/css" href="../font/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../style/connectionStyle.css">
  	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script> 
    <script type="text/javascript" src="../js/main.js"></script>
</head>

<body>
    <div class="wrapper_content">
        <div class="main_content_login">
            <!-- Шапка -->
            <header class="header">
                <div class="cont_big">
                    <a class="logo" href="../index.php">
                        <img src="../images/logo.png" alt="LoftSchool">
                        <span class="hide_text">Сайт портфолио</span>
                    </a>
                    <ul class="social">
                        <li class="item_links">
                            <a href="https://vk.com/id_callobock" class="sprite sprite-icon-vk"><div class="hide_text">Вконтакте</div></a>
                        </li>
                        <li class="item_links">
                            <a href="" class="sprite sprite-icon-fb"><div class="hide_text">Facebook</div></a>
                        </li>
                        <li class="item_links">
                            <a href="https://twitter.com/Call_O_Bock_rus" class="sprite sprite-icon-tw"><div class="hide_text">Twitter</div></a>
                        </li>
                        <li class="item_links">
                            <a href="https://github.com/CallOBock/MyWP1" class="sprite sprite-icon-git"><div class="hide_text">GitHub</div></a>
                        </li>
                    </ul>
                </div>
                <div class="gradient"></div>
            </header>
            <!-- /Шапка -->
            	<?php echo $message; ?>
			<section class="login_window">

				<div class="header_login">
                    <h1 class="title_login">Авторизация</h1>
            	</div>
            	<div class="form_login">
                    <form action="action.php" method="post">
                        <fieldset class="blank cf">
                            <ul class="blank_list">
                                <li class="login_item">
                                    <label for="login" class="blank_text">Логин</label>
                                    <input type="text" class="input_data" name="login">
                                </li>
                                <li class="login_item">
                                    <label for="password" class="blank_text">Пароль</label>
                                    <input type="text" class="input_data" name="password">     
                                </li> 
                                	<input type="submit" value="Вход" class="submit loginsub">
                        </fieldset>
                    </form>
                 </div>
			</section>
        </div>
    </div>     
	<footer class="footer">
        <div class="gradient"></div>
        <div class="wrap_footer">
            <div class="copyright">&#169; 2018. Это мой сайт. Не копируейте его пожалуйсто.</div>
        </div>
    </footer>
</body>
</html>