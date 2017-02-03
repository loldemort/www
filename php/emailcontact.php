<?php
   error_reporting(E_ALL);
   ini_set('display_errors', 'On');
   require("PHPMailerAutoload.php"); // path to the PHPMailerAutoload.php file.

   $mail = new PHPMailer();
   $mail->CharSet = 'UTF-8';
   $mail->IsSMTP();
   $mail->Mailer = "smtp";
   $mail->Host = "email-smtp.us-east-1.amazonaws.com";
   $mail->SMTPSecure = 'tls';
   $mail->Port = "587"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
   $mail->SMTPAuth = true;
   $mail->IsHTML(true);
   $mail->Username = "AKIAI6QIWAF6XJQT2FEQ";
   $mail->Password = "AgI86lg6cpg/qntNj+NwShyjl+fxmdnA1Yc+nwXNIjpU";

   $mail->From     = "toastmaster@ingridogjoakim.no";
   $mail->FromName = "Bryllupsweb";
   $mail->AddAddress("toastmaster@ingridogjoakim.no", "Bryllupsweb");
   $mail->AddReplyTo("toastmaster@ingridogjoakim.no", "Bryllupsweb");

   $email = $_POST['e_mail'];
   $fname = $_POST['fname'];
   $bodytext = $_POST['inquiry'];





   $mail->Subject  = "$fname har kontaktet deg!";
   $mail->Body     = "<p>$fname sin epost er $email.</p><p>$bodytext </p>";
   $mail->WordWrap = 50;

   if(!$mail->Send()) {
		header('Location: ../failure.html');
		exit;
   } else {
      header('Location: ../successcontact.html');
      exit;
   }
?>
