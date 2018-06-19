<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require_once '../lib/src/PHPMailer.php';
	require_once '../lib/src/SMTP.php';
	require_once '../lib/src/Exception.php';

function clear_input_data($data){
	return htmlentities(strip_tags(trim($data)));
}

function check_captcha($key,$captcha, $ip){
	$url_to_send = 'https://www.google.com/recaptcha/api/siteverify?secret='.$key.'&response='.$captcha.'&ip'.$ip;
	$data_require = file_get_contents($url_to_send);
	$data = json_decode($data_require, true);

	if(isset($data['success']) && $data['success'] == 1){
		return true;
	}else{
		return false;
	}

}

function SendMessage($namesender, $mailsender, $letter)
{
	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->Host 		= 'smtp.gmail.com';
	$mail->SMTPAuth	 	= true;
	$mail->Username 	= 'callobock.baralginovich';
	$mail->Password 	= 'Winnerzc333j';
	$mail->SMTPSecure 	= 'ssl';
	$mail->Port 		= 465;

	$mail->SetFrom( $mailsender, $namesender);
	$mail->AddAddress('callobock.baralginovich@gmail.com', 'Асланов Антон');

	// $mail->FromName = $namesender;
	// $mail->From = $mailsender;

	$htmlBody = '
	<head>
	<title> My HTML Email</title>
	 <link rel="stylesheet" type="text/css" href="http://mywp1/style/connectionStyle.css">
	 <style>

	 	.body {
            width: 100% !important;
            min-width: 60%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            Margin: 0;
            padding: 0;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: #fbfcfd;
        }

        a {
		    text-decoration: none;
		}

		.section_connection{
			background-color:  #eff3f7;
		    border-radius: 5px;
		    margin-bottom: 26px;
			height: auto;
			width: 500px;
			margin: 0 auto;
			overflow: hidden;
		}
		.wrapper_title {
			height: 50px;
			border-bottom: 10px solid #9ee8f8;
			position: relative;
			background-color: #51daf8;
			margin-bottom: 20px;
			text-align: center;
		}
		.title {
			color: #fbfcfd;
			font-size: 24px;
			font-weight: normal;
			position: absolute;
			margin: auto;
			top: 0;right: 0;bottom: 0;left: 0;
			height: 24px;
			text-align: center;

		}
		.form_connection{
			width: 430px;
			margin: 0 auto;
			height: auto;
		}
		.blank_list {
		    list-style-type: none;
		    padding: 0px;
		    margin: 0px;
			margin-bottom: 40px;
		}

		.span_text{
			font-weight: 600;
		}

		.item_blank{
			display:block;
			width: 100%;
			margin-bottom: 15px;
			float:left;
		}
		.item_blank>span {
			display: inline-block;
		}
	 </style>
	 </head>
	 <body>
					<section class="section_connection">
                        <div class="about_body">
                            <div class="wrapper_title">
                                <span class="title">Заявка с сайта</span>
                            </div>
                        </div>
                        <div class="form_connection">
                            <ul class="blank_list">
                               <li class="item_blank">
                            		<span class="span_text">Имя отправителя:</span>
                            		<span>'.$namesender.'</span>
                               </li>
                               <li class="item_blank">
									<span class="span_text">Email отправителя:</span>
									<span>'.$mailsender.'</span>
                               </li> 
                               <li>
									<div class="span_text"> Сообщение </div>
									<div> '.$letter.' </div>
                               </li>                                                                                           
                            </ul>
                        </div>
                        <!-- /Форма -->
                    </section>

	';

	$mail->isHTML(true);
	$mail->Subject 		= 'Заявка с сайта';
	$mail->Body 		= $htmlBody;
	$mail->AltBody		= $letter.". Email отправителя:".$mailsender;
	$mail->CharSet 		= "UTF-8";

	return $mail->send();
	
}