<?php
	$mail = new PHPMailer();
			
	$mail->PluginDir = "css/phpmailer/";
	$mail->Mailer = "smtp";
	$mail->Host = "";
	$mail->Port = 465;  
				
	$mail->SMTPKeepAlive = true;                    
	$mail->SMTPAuth = true;
	$mail->Username = "";
	$mail->Password = "";  
			
	$mail->SetLanguage("pl", "css/phpmailer/language/");            
	$mail->CharSet = "UTF-8";   
	$mail->ContentType = "text/html";    
?>               