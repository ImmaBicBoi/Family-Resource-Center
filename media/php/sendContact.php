<?php
	//set email settings
	$smtpServer = "smtp.gmail.com";
	$smtpPort = "587";
	$smtpUsername = "BWFRC203@gmail.com";
	$smtpPassword = "FamilyResourceCenter1";
	$fromEmail = $smtpUsername;
	$fromName = "Family Resource Center at Barnum/Waltersville";
	$replyToEmail = $_POST['email'];
	$replyToName = $_POST['name'];
	$toAddress = "BWFRC203@gmail.com";
	$toName = "B/W FRC";
	$subject = "Contact from Website Form";
	
	//set time zone
	date_default_timezone_set('America/New_York');

	//load php mail files
	require 'PHPMailer/PHPMailerAutoload.php';

	//Create a new PHPMailer instance with smtp
	$mail = new PHPMailer;
	$mail->isSMTP();
	
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	
	//set stmp settings
	$mail->Host = $smtpServer;				//Set the hostname of the mail server
	$mail->Port = $smtpPort;				//Set the SMTP port number
	$mail->SMTPAuth = true;					//Whether to use SMTP authentication
	$mail->SMTPSecure = 'tls';				//Whether to use SMTP authentication
	$mail->Username = $smtpUsername;		//Username to use for SMTP authentication
	$mail->Password = $smtpPassword;		//Password to use for SMTP authentication
	$mail->setFrom($fromEmail, $fromName);	//Set who the message is to be sent from

	//email settings
	$mail->addAddress($toAddress, $toName);			//Set who the message is to be sent to
	$mail->addReplyTo($replyToEmail, $replyToName);	//Set an alternative reply-to address
	$mail->Subject = $subject;						//Set the subject line
	
	//construct message body
	$sourceTags = array('{name}', '{email}', '{phone}', '{message}');
	$replaceTags = array($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message']);
	$message = file_get_contents('contactTemplate.php');
	$message = str_replace($sourceTags, $replaceTags, $message);
	
	//add message body
	$mail->msgHTML($message);	

	//send the message and check for errors
	if (!$mail->send())
	{
	    echo "There was an error sending your message. Please call us at (203) 275-2371 to ask your question.\n\n";
	    echo "Mailer Error Details:\n" . $mail->ErrorInfo;
	}
	else
	{
	    echo "<script type='text/javascript'>alert('Your message has been sent successfully!');</script>";
		echo "<script type='text/javascript'>window.location.replace('../../contact.html#top');</script>";
		
	}
?>