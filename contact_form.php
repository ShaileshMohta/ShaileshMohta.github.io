<?php

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'shaileshmohta.github.io';
	$email_subject = 'New Message from your Digital Portfolio';
	
	$email_body = "User Name: ".$name."\n".
					"User Email: ".$visitor_email."\n".
					"User Message: ".$message."\n";
			
	$to = "shaileshmohta95@gmail.com";
	
	$headers = "From: ".$email_from."\r\n";
	
	$headers .= "Reply-To: ".$visitor_email."\r\n";
	
	if(mail($to,$email_subject,$email_body,$headers)){
			echo "<h1>Sent Successfully! Thank You";
	}
	
	else{
		echo "Something went wrong!";
	}	
	//header("Location: index.html");
	
}	
?>
	