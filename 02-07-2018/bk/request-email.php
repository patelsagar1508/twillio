<?php     
//require("includes/phpmailer/class.phpmailer.php");
require("Mail/class.phpmailer.php");
// Do not edit this if you are not familiar with php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
//include 'contactsetting.php';
if($post)
	{
	function ValidateEmail($email)
	{

	$regex = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
		$eregi = preg_replace($regex,'', trim($email));
		return empty($eregi) ? true : false;
}
function isValidEmail($email){
	return @eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}
$name = stripslashes($_POST['fname']);
$companyname = stripslashes($_POST['company']);
$business = stripslashes($_POST['business']);
$country = stripslashes($_POST['country']);
$city = stripslashes($_POST['city']);
$email = stripslashes($_POST['email']);
$phone1 = stripslashes($_POST['pno']);

if($_REQUEST['chairs'] != '')
{
	$interest = $_REQUEST['chairs'];
}
if($_REQUEST['cushions'] != '')
{
	$interest .= ', '.$_REQUEST['cushions'];
}
if($_REQUEST['mp'] != '')
{
	$interest .= ', '.$_REQUEST['mp'];
}
if($_REQUEST['chairs_charts'] != '')
{
	$interest .= ', '.$_REQUEST['chairs_charts'];
}
if($_REQUEST['other'] != '')
{
    $interest .= ', '.$_REQUEST['other'];
}
$color = stripslashes($_POST['color']);
$quantity = stripslashes($_POST['quantity']);
$comments = stripslashes($_POST['comments']);
//$verificationanswer="4"; // plz  change edit your human answer
// $to=$toemail.','.$replyto; HARD CODED IN mail() function
$error = '';
$headers="";
$headers.="Reply-to:$email\n";
//$headers .= "From: $email\n";
$headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

// Checks Name Field

if(!$name)
{
$error .= 'Please enter your full name.<br />';
}
/*if(!$companyname)
{
$error .= 'Please enter your company name.<br />';
}*/
if(!$business)
{
$error .= 'Please enter your business.<br />';
}

if(!$country)
{
$error .= 'Please enter your country.<br />';
}
if(!$city)
{
$error .= 'Please enter your city.<br />';
}
if (!empty($phone1))
 {
  $phone = $phone1;
  $pattern = "/^[0-9\_\-\#\+\(\)\.\ ]{7,20}/";
  if (preg_match($pattern,$phone)){ $phone = $phone1;}
  else{ $error .= 'Your Phone number can only be numbers & more than 7 digits.<br />';}
  }
  else {$error .= 'Please enter your Phone Number.<br />';}
if(!$email)
{
$error .= 'Please enter an e-mail address.<br />';
}

if($email && !isValidEmail($email))
{
$error .= 'Please enter a valid e-mail address.<br />';
}


if($_REQUEST['chairs'] == '' && $_REQUEST['cushions'] == '' && $_REQUEST['mp'] == '' && $_REQUEST['chairs_charts'] == '')
{
	$error .= "Please select your interest.<br />";
}
if(!$quantity)
{
    $error .= "Please enter desired quantity.".'<br/>';
}


// Checks Subject Field


/*if( $answer <> $verificationanswer)
{
$error .= 'Please enter the Correct verification number.<br />';
}*/

// Checks Message (length)
if(!$comments || strlen($comments) < 5)
{
$error .= "Please enter your message. It should have at least 5 characters.<br />";
}




if(!$error)
	{
		
		$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "emilyvisionfurniture@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Default81";
//Set who the message is to be sent from
$messages="<strong>From</strong>: $email <br>";
$messages.="<strong>Full Name </strong>: $name <br>";
$messages.="<strong>Company (Empresa)</strong>: $companyname <br>";
$messages.="<strong>Type of Business</strong>: $business <br>";
$messages.="<strong>Country (Pais)</strong>: $country <br>";
$messages.="<strong>City (Ciudad)</strong>: $city <br>";
$messages.="<strong>Phone (Telefono)</strong>: $phone1 <br>";
$messages.="<strong>Email (Correo Electronico)</strong>: $email <br>";
$messages.="<strong>I am interested in</strong>: $interest <br>";
$messages.="<strong>Color Desired</strong>: $color <br>";
$messages.="<strong>Quantity Desired</strong>: $quantity <br>";
$messages.="<strong>Message</strong>: $comments <br>";
$to=$toemail;
/*if($usesmtp==="yes")
{
}
else{*/


$tos = 'emily@visionfurniture.com';
$bcc_email='sonya@visionfurniture.com';
$bcc_email2='anthony@visionfurniture.com';

$subject = "Quote Request: chiavarichairs.com"; 
//Set who the message is to be sent from
$mail->setFrom($email, $name);
//Set an alternative reply-to address
$mail->addReplyTo($email, $name);
//Set who the message is to be sent to
$mail->addAddress($tos, 'emily');
$mail->AddBCC($bcc_email2,'sonya');
$mail->AddCC($bcc_email, 'anthony');
//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($messages);

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo 'OK';
}


//$mail=(mail($tos, $subject, $messages, $headers,'-f'.$email) && mail($bcc_email, $subject, $messages, $headers,'-f'.$email) && mail($cc_email, $subject, $messages, $headers,'-f'.$email));

//$mail=mail('sonya@visionfurniture.com',$subject,$messages,"from: $email <$email>\nReply-To: $email \nContent-type: text/html");
//$mail=mail('anthony@visionfurniture.com',$subject,$messages,"from: $email <$email>\nReply-To: $email \nContent-type: text/html");
//}
// if($mail)
	// {
// echo 'OK';
/*            if($autorespond =="yes")
            {
	            include_once("autoresponde.php");
            }*/
	//}
    

	}
	else
	{
	echo '<div class="error">'.$error.'</div>';
	}

}
?>