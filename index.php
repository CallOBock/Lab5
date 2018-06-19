<?php
    session_start();
    $login_auth = 'Antosha';
    require_once "html/data.php";
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
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="images/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="style/normalize.css">
    <link rel="stylesheet" type="text/css" href="font/stylesheet.css">
  	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
    <div class="wrapper_content">
        <div class="main_content">
            <!-- Шапка -->
            <header class="header">
                <div class="cont_big">
                    <a class="logo" href=" ">
                        <img src="images/logo.png" alt="LoftSchool">
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
            <div class="container clearfix">
                <!-- Левые блоки -->
                <aside class="sidebar">
                    <!-- Навигация -->
                    <nav class="navigation">
                        <ul class="navigation_list">
                            <li class="navigation_item active">
                                <a class="navigation_link" href="#"> Обо мне </a>
                            </li>
                            <li class="navigation_item">
                                <a class="navigation_link" href="#"> Мои работы	</a>
                            </li>
                            <li class="navigation_item">
                                <a class="navigation_link" href="html/connection.php"> Связаться со мной </a>
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

                    <section class="section_about">
                        <div class="about_body clearfix">
                            <div class="wrapper">
                                <div class="headerInf">
                                    Основная информация
                                    <div class="blueLine"></div>
                                </div>
                            </div>
                            <div class="image_wrap">
                                <div class="avatar_box">
                                    <img src="images/Homer.png" class="avatar" alt="photo">
                                </div> 
                            </div>
                            <div class="infAboutMe">
                                <ul>
                                    <li>
                                        <div class="hIAM">Меня зовут:</div>
                                        <div class="content_li">Асланов Антон Сергеевич</div>
                                    </li>
                                    <li>
                                        <div class="hIAM">Мой возраст:</div>
                                        <div class="content_li">22 года</div>
                                    </li>
                                    <li>
                                        <div class="hIAM">Мой город:</div>
                                        <div class="content_li">Йошкар-Ола, Россия</div>
                                    </li>
                                    <li>
                                        <div class="hIAM">Моя специализация:</div>
                                        <div class="content_li">FRONTEND разработчик</div>
                                    </li>
                                    <li>
                                        <div class="hIAM">Ключевые навыки:</div>
                                        <div class="cf">
                                            <a href="#" class="button">html</a>
                                            <a href="#" class="button">css</a>
                                            <a href="#" class="button">javascript</a>
                                            <a href="#" class="button">git</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section class="section_about">
                        <div class="wrapper">
                            <div class="headerInf">
                                Опыт работы
                                <div class="blueLine"></div>
                            </div>
                        </div>
                        <div class="work_ul cf">
                            <ul class="workList cf">
                                <li class="item_work icon_portfolio">
                                    <div class="where">"ИП Боровицкий" - Продавец дисков</div>
                                    <div class="when">Сентябрь 2005 - Август 2008</div>
                                </li>
                                <li class="item_work icon_portfolio">
                                    <div class="where">"ООО Системы безопасности" - Системный администратор</div>
                                    <div class="when">Июнь 2008 - Июль 2010</div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <?php if ($_SESSION['auth']) {
                        echo $message;
                    }
                    ?>
                    <section class="section_about">
                        <div class="wrapper">
                            <div class="headerInf">
                                Образование
                                <div class="blueLine"></div>
                            </div>
                        </div>
                        <!-- Вариант 1 -->
        <!--                 <ul class="workList">
                            <li>
                                <div class="sprite sprite-icon-cap"></div>
                                <div>
                                    <ul>
                                        <li class="hIAM item_work">Незаконченное высшее. ПГТУ</li>
                                        <li class="work_date">Сентябрь 2013 по настоящее время</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="sprite sprite-icon-doc"></div>
                                <div>
                                    <ul>
                                        <li class="hIAM item_work">Курсы LoftSchool</li>
                                        <li class="work_date">Июнь 2018 по настоящее время</li>
                                    </ul>
                                </div>
                            </li>
                        </ul> -->
                        <div class="about_education">
                            <ul class="listitem_education">
                                <li class="item_education icon_univ">
                                    <span class="where">Незаконченное высшее. ПГТУ</span>
                                    <span class="when">Сентябрь 2013 по настоящее время</span>
                                </li>
                                <li class="item_education icon_course">
                                    <span class="where">Курсы LoftSchool</span> 
                                    <span class="when">Июнь 2018 по настоящее время</span>
                                </li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>     
    <footer class="footer">
        <div class="gradient"></div>
        <div class="wrap_footer">
            <div class="lock">
                <a href="html/authorization.php" class="lock_inner">
                    <div class="hide_text">Авторизация</div>
                </a>
            </div>
            <div class="copyright">&#169; 2018. Это мой сайт. Не копируейте его пожалуйсто.</div>
        </div>
    </footer>
</body>
</html>