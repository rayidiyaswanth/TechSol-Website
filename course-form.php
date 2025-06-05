<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader (if you installed via Composer)
// require 'vendor/autoload.php';

// If you downloaded the library, include these files:
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//  require 'PHPMailer/src/SMTP.php';

// Collect the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // $captcha = $_POST['g-recaptcha-response'];

    // if (is_null($captcha)) {
    //     echo "Invalid Captcha";
    //     return false;
    // } else {
    //     $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le3CfcpAAAAAIRWe9Ngq3W8hn7SvR_7nciv-nuR&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']));
    //     if ($res->success === false) {
    //         echo "Invalid Captcha";
    //         return false;
    //     }
    // }
    // Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'madanmohan.a@techsters.in';               // SMTP username
    $mail->Password   = 'noyt vkbz dmmt yzzp'; // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->SMTPSecure = 'ssl';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    // Recipients
    $mail->setFrom('madanmohan.a@techsters.in', 'Mailer');
    $mail->addAddress('info@techsolitacademy.com', 'Admin');     // Add a recipient
    $mail->addAddress('madanmohan.a@techsters.in', 'Madan');     // Add a recipient
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'New Lead Received';
    $mail->Body    = "Name: $name<br>Email: $email<br>Phone: $phone <br>Subject :$subject <br>Message : $message";
    // $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message";

    $mail->send();

    header('location:http://techsolitacademy.com/thank_you.php');

    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}