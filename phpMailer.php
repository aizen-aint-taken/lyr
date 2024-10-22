<?php

include 'admin/admin.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to Composer's autoload.php

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com'; // SMTP username
    $mail->Password = 'your-password'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption; `PHPMailer::ENCRYPTION_STARTTLS` also accepted
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('your-email@gmail.com', 'Mailer');
    $mail->addAddress('user@example.com', 'Joe User'); // Add a recipient

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the OTP';
    $mail->Body    = 'Your OTP code is: ' . $otp;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

