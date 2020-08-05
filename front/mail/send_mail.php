<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];

   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587;
   $mail ->IsHTML(true);
   $mail ->Username = "sam.project.management.425@gmail.com";
   $mail ->Password = "Ss9420012551sS@425";
   $mail ->SetFrom("ssaurabh425@gmail.com",'saurabh');
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;

   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
   ?>
   <html>
   <head>
   <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	</html>





   

