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
   $mail->Username = "AKIAIED2AT4K2VXCQGBQ";
   $mail->Password = "AmTUMGZq6B2eJ3fKy3783BOqe6zpYMnxBzKLrmaM1ttg";

   $mail->From     = "invitasjon@ingridogjoakim.no";
   $mail->FromName = "Avbud@Bryllupsweb";
   $mail->AddAddress("invitasjon@ingridogjoakim.no", "Ingrid og Joakim");
   $mail->AddReplyTo("invitasjon@ingridogjoakim.no", "Ingrid og Joakim");



   $email = $_POST['e_mail'];
   $bodytext = "";

   if( isset($_POST['gjest_1']) ){
     $guest1 = $_POST['gjest_1'];
     $bodytext = "<p>Følgende har meldt avbud:</p><p>$guest1.</p>";
   }

   if( isset($_POST['gjest_2']) ){
     $guest2 = $_POST['gjest_2'];
     $bodytext =  $bodytext . "<p>$guest2</p>";
   }

   if( isset($_POST['gjest_3']) ){
     $guest3 = $_POST['gjest_3'];
     $bodytext =  $bodytext . "<p>$guest3 </p>";
   }

   if( isset($_POST['gjest_4']) ){
     $guest4 = $_POST['gjest_4'];
     $bodytext =  $bodytext . "<p>$guest4</p>";
   }

   if( isset($_POST['gjest_5']) ){
     $guest5 = $_POST['gjest_5'];
     $bodytext =  $bodytext . "<p>$guest5</p>";
   }

   if( isset($_POST['gjest_6']) ){
     $guest6 = $_POST['gjest_6'];
     $bodytext =  $bodytext . "<p>$guest6</p>";
   }

   if( isset($_POST['kommentar']) ){
      $comments = $_POST['kommentar'];
      $bodytext =  $bodytext . "<p>Kommentarer: $comments</p>";
   }




   $mail->Subject  = "Noen har meldt avbud!";
   $mail->Body     = "<p>$guest1 sin epost er $email. </p>" . $bodytext;
   $mail->WordWrap = 50;

   if(!$mail->Send()) {
		header('Location: ../failure.html');
		exit;
   } else {
      header('Location: ../successno.html');
      exit;
   }
?>
Ste