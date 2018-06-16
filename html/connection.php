<?php
    session_start();

    if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
}
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
</head>

<body>
    <div class="wrapper_content">
        <div class="main_content">
            <!-- Шапка -->
            <header class="header">
                <div class="cont_big">
                    <a class="logo" href=" ">
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
            <!-- Сайд-бар с блоком контента -->
            <div class="container cf">
                <!-- Левые блоки -->
                <aside class="sidebar">
                    <!-- Навигация -->
                    <nav class="navigation">
                        <ul class="navigation_list">
                            <li class="navigation_item">
                                <a class="navigation_link" href="../index.php"> Обо мне </a>
                            </li>
                            <li class="navigation_item">
                                <a class="navigation_link" href="#"> Мои работы	</a>
                            </li>
                            <li class="navigation_item active">
                                <a class="navigation_link" href="#"> Связаться со мной </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Навигатция -->
                    <!-- Контакты -->
                    <address class="contacts">
                        <ul class="contacts_list">
                            <li class="contact_item">Контакты</li>
                            <li class="mail">
                                <a class="icon_mail contact_link" href="mailto:callobock.baralginovich@gmail.com">
                                    <span class="contact_text">Почта Gmail.com</span>
                                    <span class="mail_sub">callobock.baralginovich@gmail.com</span>
                                </a>
                            </li>
                            <li class="phone">
                                <a class="icon_phone contact_link" href="tel:+79177169424">
                                    <span class="contact_text number">+79177169424</span>
                                </a>
                            </li>
                            <li class="skype">
                                <a  class="icon_skype contact_link" href="skype:mr_crabs2011">
                                    <span class="contact_text">mr_crabs2011</span>
                                </a>                                
                            </li>
                        </ul>
                    </address>
                    <!-- /Контакты -->
                </aside>
                <!-- /Левые блоки -->
                <!-- Изменяемый контент -->

                <div class="information">

                    <section class="section_connection">
                        <div class="about_body">
                            <div class="wrapper_title">
                                <h1 class="title">У вас интересный проект? Напишите мне!</h1>
                            </div>
                        </div>
                        <!-- Форма -->
                        <div class="form_connection">
                            <form action="" method="get">
                                <fieldset class="blank cf">
                                    <ul class="blank_list cf">
                                        <li class="blank_item first">
                                            <label for="name" class="blank_text">Имя</label>
                                            <input type="text" class="input_data" name="name" placeholder="Как к вам обращаться">
                                        </li>
                                        <li class="blank_item second">
                                            <label for="email" class="blank_text">Email</label>
                                            <input type="text" class="input_data" name="email" placeholder="Как с  вами связаться">     
                                        </li> 
                                        <li class="blank_item textarea">
                                            <label for="input_textarea" class="blank_text">Сообщение</label>
                                            <textarea class="input_textarea" placeholder="Краткое описание проблемы"></textarea>
                                        </li>                                                                     
                                    </ul>
                                    <span class="blank_text_reCaptcha">Введите код, указанный на картинкe</span>
                                    <div class="blank_reCaptcha cf">
                                        <div class="img">Картинка</div>
                                        <input type="text" class="input_reCaptcha"> 
                                    </div>
                                    <input type="submit" value="Отправить" class="submit">
                                    <input type="reset" value="Очистить" class="clear">
                                    <!-- <div class="wrapper_reCaptcha cf">
                                            <div class="img">Картинка</div>
                                            <
                                        </div> -->
                                </fieldset>
                            </form>
                        </div>
                        <!-- /Форма -->
                    </section>

                </div>
            </div>
        </div>
    </div>       
        <footer class="footer">
            <div class="gradient"></div>
            <div class="wrapp_footer">
                <a href="authorization.php" class="sprite sprite-icon-lock"><div class="hide_text">Авторизация</div></a>
                <span class="copyright"> &#169; 2018. Это мой сайт. Не копируейте его пожалуйста)</span>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>