<?php
require 'vendor/autoload.php'; // Ensure PHPMailer is installed

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration (Gmail settings)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'skriassociate57@gmail.com'; // Apna Gmail ID
        $mail->Password = 'paya fqew fkaq cyrw';       // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Recipient
        $mail->setFrom('skriassociate57@gmail.com', 'Siyom Tvasta'); // Sender
        $mail->addAddress('skriassociate57@gmail.com');              // Recipient
        $mail->addReplyTo($email, $name);                            // Reply Option

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Enquiry: $subject";
        $mail->Body = "
            <h2>New Enquiry Received</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
        ";

        $mail->send();

        // AJAX Response
        echo json_encode(["status" => "success", "message" => "✅ Enquiry sent successfully!"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "❌ Email sending failed! Error: " . $mail->ErrorInfo]);
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Signatures Globals</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Navbar Include -->
    <?php include 'navbar.php'; ?>
    <!-- Hero Section -->
    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Contact Us</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="address mt-2">
                            <i class="fa-solid fa-location-dot"></i>
                            <h4 class="mb-2">Location:</h4>
                            <p>
                               Add.Signatures Globals office no. Satya The Hive sec. 102
                            </p>
                        </div>

                        <div class="open-hours mt-4">
                            <i class="fa-solid fa-clock"></i>
                            <h4 class="mb-2">Open Hours:</h4>
                            <p>Monday-Sunday:<br>10:00 AM - 7:00 PM</p>
                        </div>

                        <div class="email mt-4">
                            <i class="fa-solid fa-envelope"></i>
                            <h4 class="mb-2">Email:</h4>
                            <p><a href="mailto:infosignaturesglobals@gmail.com">infosignaturesglobals@gmail.com</a></p>
                        </div>

                        <div class="phone mt-4">
                            <i class="fa-solid fa-phone"></i>
                            <h4 class="mb-2">Call:</h4>
                            <p><a href="tel:+919717941119">+91 9355713111</a></p>
                        </div>
                    </div>
                </div>

   <!-- Contact Form -->
<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
    <form id="contactForm">
        <div class="row">
            <div class="col-6 mb-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-6 mb-3">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-12 mb-3">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-12 mb-3">
                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </div>
    </form>
</div>

<!-- SweetAlert and AJAX Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault(); // Page reload rokta hai

            // Form Data Collect
            let formData = $(this).serialize();

            // AJAX Call for Form Submission
            $.ajax({
                url: '',
                type: 'POST',
                data: formData,
                dataType: 'json',
                beforeSend: function() {
                    Swal.fire({
                        title: 'Processing...',
                        text: 'Please wait while we send your enquiry.',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(response) {
                    Swal.fire({
                        icon: response.status === 'success' ? 'success' : 'error',
                        title: response.message,
                        confirmButtonText: 'OK'
                    });

                    // Form Reset if Successful
                    if (response.status === 'success') {
                        $('#contactForm')[0].reset();
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again later.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>



    <!-- Google Map -->
    <div class="col-12 mt-4">
        <div class="container px-3">
            <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d28057.973872864288!2d76.9753088!3d28.472115199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e9!4m0!4m5!1s0x390d19b52a7c4b77%3A0xd0f05709e7e96940!2sSatya%20The%20Hive%2C%20Dwarka%20Expy%2C%20Sector%20102%2C%20Gurugram%2C%20Haryana%20122505!3m2!1d28.4707914!2d76.9626351!5e0!3m2!1sen!2sin!4v1741257687278!5m2!1sen!2sin" width="100%" height="450" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>
            </div>
        </div>
    </div>
<!-- Customer Care Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-lg-6 p-0">
            <div class="h-100" style="background: url('images/on_going_project/Decision-Making.jpg') no-repeat center center/cover; min-height: 400px; border-radius: 10px;"></div>
        </div>

        <!-- Text Section -->
        <div class="col-lg-6 p-5" style="background-color: #f8f9fa; border-radius: 10px;">
            <h2 class="mb-4" style="font-family: 'Georgia', serif; color: #2c3e50;">Customer Care</h2>

            <p style="font-size: 1.1rem; line-height: 1.8;">
                In case of any query, please feel free to write us at
                <a href="mailto:customercare@signatureglobal.in" style="color: #1a73e8; text-decoration: none;">infosignaturesglobals@gmail.com
                </a>
                and we ensure that we reply to you within 24 hours.
            </p>

            <p style="font-size: 1.1rem;">
                <strong>Missed call no.:</strong> <a href="tel:+91 9355713111" style="color: #1a73e8; text-decoration: none;">+91 9355713111</a>
            </p>

            <p style="font-size: 1.1rem;">
                <strong>Customer Care no.:</strong> <a href="tel:+919540515454" style="color: #1a73e8; text-decoration: none;">+919540515454</a>
            </p>
        </div>
    </div>
</div>

    <!-- Footer Include -->
    <?php include "footer.php"; ?>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
