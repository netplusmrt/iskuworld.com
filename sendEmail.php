<?php

if (!isset($_POST['userName'])){exit;}

/* These are the variable that tell the subject of the email and where the email will be sent.*/
$thanksPage = 'ThankYou.php';
$emailSubject = 'Webmaster Query';
$mailto = 'iskukarate@gmail.com';
$sentFrom = 'webmaster@iskuworld.com';

/* These will gather what the user has typed into the fieled. */
$subject = "Query Mail";
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPhone = $_POST['userPhone'];
$userMsg = $_POST['userMsg'];

/* This takes the information and lines it up the way you want it to be sent in the email. */

$body = <<<EOD
<br/><hr/><br/>
Query From Website:
<br/><hr/><br/>
Name: $userName <br/>
Email: $userEmail <br/>
Mobile: $userPhone <br/>
Message: $userMsg <br/>
EOD;

$headers = "From: $sentFrom\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.

if ($success) 
{
	if (!empty($thanksPage)) {
		header("Location: $thanksPage");
		exit;
	}
}
	
?>