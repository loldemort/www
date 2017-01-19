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

   $guest1 = " ";
   $email = " ";
   $sleepover1 = " ";
   $guest2 = " "; 
   $sleepover2 = " ";
    $guest3 = " "; 
   $sleepover3 = " "; 
   $guest4 = " "; 
   $sleepover4 = " "; 
   $guest5 = " ";
    $sleepover5 = " ";
   $guest6 = " "; 
   $sleepover6 = " ";

   foreach($_POST as $key => $value) {
     if($key == 'gjest_1'){
        $guest1 = $value;
     } elseif($key == 'e_mail'){
        $email = $value;
     } elseif ($key == 'gjest_2') {
         $guest2 = "Gjest 2: " . $value;
     } elseif ($key == 'gjest_3') {
         $guest3 = "Gjest 3: " . $value;
     } elseif ($key == 'gjest_4') {
         $guest4 = "Gjest 4: " . $value;
     } elseif ($key == 'gjest_5') {
         $guest5 = "Gjest 5: " . $value;
     } elseif ($key == 'gjest_6') {
         $guest6 = "Gjest 6: " . $value;
     } elseif ($key == 'gjest_1_overnatting') {
         $sleepover1 = $value;
     } elseif ($key == 'gjest_2_overnatting') {
         $sleepover2 = " Overnatting? " . $value;
     } elseif ($key == 'gjest_3_overnatting') {
         $sleepover3 = " Overnatting? " . $value;
     } elseif ($key == 'gjest_4_overnatting') {
         $sleepover4 = " Overnatting? " . $value;
     } elseif ($key == 'gjest_5_overnatting') {
         $sleepover5 = " Overnatting? " . $value;
     } elseif ($key == 'gjest_6_overnatting') {
         $sleepover6 = " Overnatting? " . $value;
     } 
   }

   $bodytext = "<p>Eposten til $guest1 er $email. Overnatting? $sleepover1</p>
   <p>$guest2 $sleepover2</p>
   <p>$guest3 $sleepover3</p>
   <p>$guest4 $sleepover4</p>
   <p>$guest5 $sleepover5</p>
   <p>$guest6 $sleepover6</p>";


   $mail->Subject  = "$guest1 har svart på invitasjonen!";
   $mail->Body     = "" . $bodytext;
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