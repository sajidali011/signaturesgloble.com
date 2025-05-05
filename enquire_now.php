<?php
// enquire_now.php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'skriassociate57@gmail.com';
        $mail->Password = 'paya fqew fkaq cyrw';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('skriassociate57@gmail.com', 'Siyom Tvasta');
        $mail->addAddress('skriassociate57@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry Received';
        $mail->Body = "<h2>New Enquiry</h2><p><strong>Name:</strong> $name</p><p><strong>Email:</strong> $email</p><p><strong>Mobile:</strong> $mobile</p><p><strong>Message:</strong> $message</p>";

        $mail->send();
        echo json_encode(["status" => "success"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => $mail->ErrorInfo]);
    }
}
?>
