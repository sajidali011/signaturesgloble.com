<?php
require 'vendor/autoload.php'; // Ensure this path is correct

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'skriassociate57@gmail.com'; // Apna Gmail ID
        $mail->Password = 'paya fqew fkaq cyrw';       // App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and Recipient
        $mail->setFrom('skriassociate57@gmail.com', 'Siyom Tvasta');
        $mail->addAddress('skriassociate57@gmail.com'); // Jaha mail bhejni hai

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry Received';
        $mail->Body = "
            <h2>New Enquiry</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mobile:</strong> $mobile</p>
            <p><strong>Message:</strong> $message</p>
        ";

        // Send Email
        $mail->send();
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "✅ Enquiry sent successfully!",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "index.php";
                });
            });
        </script>';

    } catch (Exception $e) {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "error",
                    title: "❌ Email sending failed!",
                    text: "'. $mail->ErrorInfo .'",
                    confirmButtonText: "Try Again"
                }).then(() => {
                    window.history.back();
                });
            });
        </script>';
    }
}
?>