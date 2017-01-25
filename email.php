<?php
   error_reporting(E_ALL);
   ini_set('display_errors', 'On');
   require("php/PHPMailerAutoload.php"); // path to the PHPMailerAutoload.php file.

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

   $mail->From     = "invitasjon@ingridogjoakim.no";
   $mail->FromName = "Svar på invitasjon";
   $mail->AddAddress("invitasjon@ingridogjoakim.no", "Ingrid og Joakim");
   $mail->AddReplyTo("invitasjon@ingridogjoakim.no", "Ingrid og Joakim");

   $guest1 = $_POST['gjest_1'];
   $email = $_POST['e_mail'];
   $sleepover1 = $_POST['gjest_1_overnatting'];
   $bodytext = "<p>Uten følge</p>";

   if( isset($_POST['gjest_2']) ){
     $guest2 = $_POST['gjest_2'];
     $sleepover2 = $_POST['gjest_2_overnatting'];
     $bodytext = "<p>Gjest 2: $guest2. Overnatting? $sleepover2</p>";
   }

   if( isset($_POST['gjest_3']) ){
     $guest3 = $_POST['gjest_3'];
     $sleepover3 = $_POST['gjest_3_overnatting'];
     $bodytext =  $bodytext . "<p>Gjest 3: $guest3. Overnatting? $sleepover3</p>";
   }

   if( isset($_POST['gjest_4']) ){
     $guest4 = $_POST['gjest_4'];
     $sleepover4 = $_POST['gjest_4_overnatting'];
     $bodytext =  $bodytext . "<p>Gjest 4: $guest4. Overnatting? $sleepover4</p>";
   }

   if( isset($_POST['gjest_5']) ){
     $guest5 = $_POST['gjest_5'];
     $sleepover5 = $_POST['gjest_5_overnatting'];
     $bodytext =  $bodytext . "<p>Gjest 5: $guest5. Overnatting? $sleepover5</p>";
   }

   if( isset($_POST['gjest_6']) ){
     $guest6 = $_POST['gjest_6'];
     $sleepover6 = $_POST['gjest_6_overnatting'];
     $bodytext =  $bodytext . "<p>Gjest 6: $guest6. Overnatting? $sleepover6</p>";
   }

   if( isset($_POST['kommentar']) ){
      $comments = $_POST['kommentar'];
      $bodytext =  $bodytext . "<p>Kommentarer: $comments</p>";
   }

   


   $mail->Subject  = "$guest1 har svart på invitasjonen!";
   $mail->Body     = "<p>$guest1 sin epost er $email. Overnatting? $sleepover1</p>" . $bodytext;
   $mail->WordWrap = 50;

   if(!$mail->Send()) {
		header('Location: failure.html');
		exit;
   } else {
      header('Location: success.html');
      exit;
   }
?>
Ste