<?php 
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $number = $_POST['number'];
   $message = $_POST['message'];
   
    $email_from = 'Yassirbenssayde99@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name:  $name.\n";
	              "User Email: $visitor_email.\n";
				  "User Number:$number.\n";
				  "User Message:$message.\n";
    
	$to = "yassirbenssayde99@gmail.com";
	$headers = "Form: $email_from \r\n";
	$headers .= "Replay-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("Location: Formulaire.html");
	
?>