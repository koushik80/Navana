<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

date_default_timezone_set('Etc/UTC');
      
    //Create a new PHPMailer instance
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
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "unsatisfiedsoul@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "XXXXXXX";
    //Set who the message is to be sent from
    $mail->setFrom('unsatisfiedsoul@gmail.com', 'Navana Trading');
    //Set an alternative reply-to address
    $mail->addReplyTo('raj_on@hotmail.com', 'Rajon');
    //Set who the message is to be sent to
    $mail->addAddress('unsatisfiedsoul@gmail.com', 'Koushik Dey');
    //Set the subject line
    $mail->Subject = 'Welcome!';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Navana Trading. Contact successful!';
    $mail->Body    = 'Welcome! <br> Thank you for contacting us.';
    //Replace the plain text body with one created manually
    $mail->AltBody = 'Hello! Thank you for contacting us!';
    
    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }

?>
