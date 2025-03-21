<?php
require 'vendor/autoload.php'; // Ensure this path is correct

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPDebug = 2; // Debugging ke liye
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'skriassociate57@gmail.com';
    $mail->Password = 'paya fqew fkaq cyrw'; // App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('skriassociate57@gmail.com', 'Siyom Tvasta');
    $mail->addAddress('sajid2003khan@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body = '<h2>Hello, this is a test email from Siyom Tvasta!</h2>';

    $mail->send();
    echo '✅ Email Sent Successfully!';
} catch (Exception $e) {
    echo "❌ Email failed: {$mail->ErrorInfo}";
}
