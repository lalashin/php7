<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */



// require '../vendor/autoload.php';
include "PHPMailer.php";
include "SMTP.php";

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = '***';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = ***;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = "ssl";

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'ppeanut';

//Password to use for SMTP authentication
$mail->Password = '***';

//Password to use for SMTP authentication
$mail->CharSet = 'UTF-8';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('mail', '신인숙');

//Set an alternative reply-to address
//This is a good place to put user-submitted addresses
$mail->addReplyTo('mail', '신인숙');

//Set who the message is to be sent to
$mail->addAddress('mail', '신인숙');

//Set the subject line
$mail->Subject = '메일test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
$mail->msgHTML("메일발송성공하다뉘~ 아직 갈길이 멀지만,,,,,ㅠ화이팅 ㅠㅠ");

//Replace the plain text body with one created manually
$mail->AltBody = '메일테스트테스트'; //작성하지 않아도 됨

//Attach an image file
$mail->addAttachment('a.jpg');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
