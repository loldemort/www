<?php
   require("php/PHPMailerAutoload.php"); // path to the PHPMailerAutoload.php file.

   $mail = new PHPMailer();
   $mail->IsSMTP();
   $mail->Mailer = "smtp";
   $mail->Host = "smtp.gmail.com";
   $mail->SMTPSecure = 'tls';
   $mail->Port = "587"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
   $mail->SMTPAuth = true;
   $mail->SMTPDebug = 1;
   $mail->IsHTML(true);
   $mail->Username = "ingridogjoakim@gmail.com";
   $mail->Password = "Flanders2";

   $mail->From     = "ingridogjoakim@gmail.com";
   $mail->FromName = "Bryllupsweb";
   $mail->AddAddress("invitasjon@ingridogjoakim.no", "Admin");
   $mail->AddReplyTo("ingridogjoakim@gmail.com", "Bernt");

   $mail->Subject  = "Hi!";
   $mail->Body     = "Hi! How are you?";
   $mail->WordWrap = 50;

   if(!$mail->Send()) {
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
		exit;
   } else {
		echo 'Message has been sent.';
   }
?>
Ste