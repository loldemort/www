<?php
   error_reporting(E_ALL);
   ini_set('display_errors', 'On');
   require("php/PHPMailerAutoload.php"); // path to the PHPMailerAutoload.php file.

   $mail = new PHPMailer();
   $mail->IsSMTP();
   $mail->Mailer = "smtp";
   $mail->Host = "email-smtp.us-east-1.amazonaws.com";
   $mail->SMTPSecure = 'tls';
   $mail->Port = "587"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
   $mail->SMTPAuth = true;
   $mail->SMTPDebug = 1;
   $mail->IsHTML(true);
   $mail->Username = "AKIAI6QIWAF6XJQT2FEQ";
   $mail->Password = "AgI86lg6cpg/qntNj+NwShyjl+fxmdnA1Yc+nwXNIjpU";

   $mail->From     = "oysteinbhauan@gmail.com";
   $mail->FromName = "Svar på invitasjon";
   $mail->AddAddress("invitasjon@ingridogjoakim.no", "Ingrid og Joakim");
   $mail->AddReplyTo("invitasjon@ingridogjoakim.no", "Ingrid og Joakim");

   $guest1 = $_POST['gjest_1'];
   $email = $_POST['e_mail'];
   $sleepover1 = $_POST['gjest_1_overnatting'];

   if( isset($_POST['gjest_2']) ){
     $guest2 = $_POST['gjest_2'];
     $sleepover2 = $_POST['gjest_2_overnatting'];
   }

   if( isset($_POST['gjest_3']) ){
     $guest2 = $_POST['gjest_3'];
     $sleepover2 = $_POST['gjest_3_overnatting'];
   }

   if( isset($_POST['gjest_4']) ){
     $guest2 = $_POST['gjest_4'];
     $sleepover2 = $_POST['gjest_4_overnatting'];
   }

   if( isset($_POST['gjest_5']) ){
     $guest2 = $_POST['gjest_5'];
     $sleepover2 = $_POST['gjest_5_overnatting'];
   }

   if( isset($_POST['gjest_6']) ){
     $guest2 = $_POST['gjest_6'];
     $sleepover2 = $_POST['gjest_6_overnatting'];
   }

   


   $mail->Subject  = "$guest1 har svart på invitasjonen!";
   $mail->Body     = "$guest1 sin epost er $email";
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