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
// Create a new PHPMailer instance
$mail = new PHPMailer(true);


    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $experience = $_POST['experience'];
    $trainingExperience = $_POST['trainingExperience'];

    // File upload handling
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $fileTmpPath = $_FILES['resume']['tmp_name'];
        $fileName = $_FILES['resume']['name'];
        $fileType = $_FILES['resume']['type'];
        $fileSize = $_FILES['resume']['size'];

        // Allow only PDF, DOC, DOCX files
        $allowedMimeTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!in_array($fileType, $allowedMimeTypes)) {
            die("Error: Only PDF, DOC, DOCX files are allowed.");
        }
    } else {
        die("Error: File upload failed.");
    }

try {
   // Server settings
   $mail->isSMTP(); // Send using SMTP
   $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
   $mail->SMTPAuth = true; // Enable SMTP authentication
   $mail->Username = 'madanmohan.a@techsters.in'; // SMTP username
   $mail->Password = 'noyt vkbz dmmt yzzp'; // SMTP password
   // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
   $mail->SMTPSecure = 'ssl'; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
   $mail->Port = 465; // TCP port to connect to

   // Recipients
   $mail->setFrom('madanmohan.a@techsters.in', 'website');
   $mail->addAddress('info@techsolitacademy.com', 'Admin'); // Add a recipient
   $mail->addAddress('madanmohan.a@techsters.in', 'Madan'); // Add a recipient
  
   
   $mail->addReplyTo($email, $firstName);

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New Job Application Received from  Website';
    $mail->Body =  "Name:  $name<br>
                   Email: $email<br>
                   Phone Number: $phone<br>
                   Subject: $subject <br>
                  Experience: $experience <br>
                  Training Experience: $trainingExperience";
 
    
    // Attach the uploaded resume file
    $mail->addAttachment($fileTmpPath, $fileName);

    $mail->send();

    header('location:http://techsolitacademy.com/thank-you.php');

    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}