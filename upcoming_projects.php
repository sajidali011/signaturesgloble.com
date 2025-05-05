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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Global Clone</title> <meta name="description" content="Signature Global Deen Dayal Plots in Farukhnagar - Premium Residential and Commercial Plots with top-notch amenities.">
    <meta name="keywords" content="Signature Global, Deen Dayal Plots, Farukhnagar, Residential, Commercial, NH-48">
    <meta name="author" content="Sajid">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .navbar { background: linear-gradient(135deg, #2b573e, #1e3d2f); }
        .navbar-brand { font-size: 24px; font-weight: bold; color: #ffcc00; }
        .nav-item a { font-weight: 600; color: #fff; }
        .nav-item a:hover { color: #ffcc00; }
        .hero {
            background: url('images/extra/farukhnagar.jpg') no-repeat center;
            background-size: cover;
            height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }
        .hero .overlay {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        .info-box {
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            color: white;
            transition: 0.3s ease-in-out;
        }
        .info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .call-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #ff9800;
            color: #ff9800;
            padding: 18px;
            border-radius: 50%;
            font-size: 22px;
            cursor: pointer;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        .location-section {
            padding: 40px 20px;
            background-color: #f8f9fa;
        }
        .info-list li {
            margin-bottom: 10px;
        }
        .price-table {
            margin-top: 20px;
        }

            .custom-btn {
            background-color: #004d25;
            color: white;}

            .accordion-button {
            font-weight: bold;
            color: #215732;
        }

        .nav-link:hover {
        color: #ffc107 !important;
    }
    .nav-link:hover span {
        width: 100%;
    }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg sticky-top shadow p-3" style="background: linear-gradient(to right, #1f3d26, #3a5a40); font-family: 'Montserrat', sans-serif;">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="index.php" style="position: relative; transition: color 0.3s ease;">
                        Home
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="Signature-Global-Deen.php" style="position: relative; transition: color 0.3s ease;">
                        Rohtak
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="gurugram-deen.php" style="position: relative; transition: color 0.3s ease;">
                        Gurugram
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white px-3" href="upcoming_projects.php" style="position: relative; transition: color 0.3s ease;">
                Faridabad
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="sohna-deen.php" style="position: relative; transition: color 0.3s ease;">
                        Sohna
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="Jhajjar-deen.php" style="position: relative; transition: color 0.3s ease;">
                        Jhajjar
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="upcoming_projects_residential.php" style="position: relative; transition: color 0.3s ease;">
                        Residential
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link text-white px-3" href="upcoming_projects_commercial.php" style="position: relative; transition: color 0.3s ease;">
                        Commercial
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-white px-3" href="Launching-soon.php" style="position: relative; transition: color 0.3s ease;">
                    Launching Soon
                        <span style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 0; height: 3px; background-color: #ffc107; transition: width 0.3s ease;"></span>
                    </a>
                </li> -->
            </ul>
        </div>
<a href="tel:+919211293111" class="text-warning fw-bold" style="font-size: 1.3rem; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); text-decoration: none;">
    9211293111
</a>
</nav>

    <section class="hero">
        <div class="overlay">
            <h1>Signature Global Deen Dayal Plots Farukhnagar</h1>
        </div>
    </section>

    <section class="container my-5">
        <div class="row g-4">
            <div class="col-md-4"><div class="info-box bg-danger">BUILDER – Signature Global</div></div>
            <div class="col-md-4"><div class="info-box bg-primary">PROJECT – DDJAY Plots</div></div>
            <div class="col-md-4"><div class="info-box bg-success">LOCATION – Farukhnagar</div></div>
            <div class="col-md-4"><div class="info-box bg-warning">CONFIGURATIONS – Plots</div></div>
            <div class="col-md-4"><div class="info-box bg-info ">NEARBY ROAD – NH-48</div></div>
            <div class="col-md-4"><div class="info-box bg-dark">Size – 150 Sq Yd to 180 Sq Yd</div></div>
        </div>
    </section>

    <div class="text-center my-5">
        <button class="btn btn-warning btn-lg px-5 py-3 fw-bold shadow open-enquiry-modal">REGISTRATION FOR BOOKING</button>
    </div>

 

<section class="location-section text-center">
        <div class="container">
            <h2 class="fw-bold">Location: Signature Global Deen Dayal Plots Farukhnagar</h2>
            <div class="row mt-4 align-items-center">
                <div class="col-lg-6">
                    <iframe class="w-100" height="300" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d449152.90296068985!2d76.842162!3d28.419044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d6b2a7fbac13d%3A0x4489b1fac0fefc86!2sFarukh%20Nagar%2C%20Haryana%20122506%2C%20India!5e0!3m2!1sen!2sus!4v1743579081526!5m2!1sen!2sus" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class="col-lg-6 text-start">
                    <ul class="list-unstyled info-list">
                        <li>📍 IMT Manesar is easily accessible from Signature Global Farukhnagar.</li>
                        <li>⏳ 15 minutes from Sultanpur National Park.</li>
                        <li>🚗 Close to NH-8 and KMP Expressway.</li>
                        <li>🏙 Well-connected to Delhi, Gurgaon, and Manesar.</li>
                        <li>🛣 Close to the Delhi-Jaipur Highway.</li>
                        <li>🏗 Fast-growing infrastructure and development.</li>
                        <li>🏥 Nearby schools, hospitals, and markets.</li>
                    </ul>
                </div>
            </div>
            <div class="price-table mt-5">
                <h3 class="fw-bold">Signature Global Plots Farukhnagar: PRICE LIST</h3>
                <table class="table table-bordered mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>Plot Sizes</th>
                            <th>Area (Sq. Yds.)</th>
                            <th>Price (In ₹)</th>
                            <th>Offer Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>150 Sq. Yds.</td>
                            <td><button class="btn btn-success open-enquiry-modal">View</button></td>
                            <td><button class="btn btn-success open-enquiry-modal">View</button></td>
                            <td><button class="btn btn-primary open-enquiry-modal">Price</button></td>

                        </tr>
                        <tr>
                            <td>180 Sq. Yds.</td>
                            <td><button class="btn btn-success open-enquiry-modal">View</button></td>
                            <td><button class="btn btn-primary open-enquiry-modal">Price</button></td>
                            <td><button class="btn btn-success open-enquiry-modal">View</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="container my-5">
    <h3 class="text-center fw-bold">Flexible Payment Plans for Signature Global Farukhnagar Plots</h3>
    <p class="text-center">Explore various payment options for Signature Global DDJAY Plots and choose the one that suits you best.</p>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Payment Plan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Construction Linked Plan (CLP)</td><td><button class="btn custom-btn open-enquiry-modal">Check Eligibility</button></td></tr>
                <tr><td>40:60 Payment Plan</td><td><button class="btn custom-btn open-enquiry-modal">Check Details</button></td></tr>
                <tr><td>30:40:30 Payment Scheme</td><td><button class="btn custom-btn open-enquiry-modal">View Plan</button></td></tr>
                <tr><td>50:50 Payment Scheme</td><td><button class="btn custom-btn open-enquiry-modal">Learn More</button></td></tr>
                <tr><td>Down Payment Option</td><td><button class="btn custom-btn open-enquiry-modal">Apply Now</button></td></tr>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <button class="btn custom-btn open-enquiry-modal">Request a Customized Plan</button>
    </div>
</div>

<div class="container my-5 text-center">
    <h4 class="fw-bold">Signature Global DDJAY Plots Gallery</h4>
    <p>Discover the beauty of Signature Global Plots in Farukhnagar through our exclusive image gallery.</p>
    <button class="btn custom-btn my-3 open-enquiry-modal">Download High-Resolution Images</button>
</div>

<div class="container my-5">
    <h4 class="fw-bold text-center">Key Features of Signature Global Plots in Farukhnagar</h4>
    <ul class="list-unstyled">
        <li>✅ Affordable housing options under Deen Dayal Jan Awas Yojana (DDJAY).</li>
        <li>✅ Eco-friendly environment with lush green surroundings.</li>
        <li>✅ Well-planned infrastructure with roads, electricity, and water supply.</li>
        <li>✅ Ideal for both residential living and investment purposes.</li>
        <li>✅ Multiple plot sizes available to suit different requirements.</li>
        <li>✅ Secure gated community with 24/7 security surveillance.</li>
        <li>✅ Excellent connectivity to major highways and business hubs.</li>
    </ul>
</div>

<div class="container my-5">
    <h2 class="text-center fw-bold">Modern Amenities & Facilities at Signature Global DDJAY Plots</h2>
    <div class="row g-3 mt-3">
        <div class="col-md-3"><img src="images\extra\Signature-Global-visitors-parking.webp" class="img-fluid rounded" alt="Visitor Parking Facility"></div>
        <div class="col-md-3"><img src="images\extra\Signature-Global-security.webp" class="img-fluid rounded" alt="24/7 Security Guards"></div>
        <div class="col-md-3"><img src="images\extra\Signature-Global-natural-light.webp" class="img-fluid rounded" alt="Scenic Sunset View"></div>
        <div class="col-md-3"><img src="images\extra\Signature-Global-power-backup.webp" class="img-fluid rounded" alt="Power Backup Generator"></div>
        <div class="col-md-3"><img src="images\extra\Signature-Global-entry-driveway.webp" class="img-fluid rounded" alt="Landscaped Gardens"></div>
        <div class="col-md-3"><img src="images\extra\Signature-Global-car-parking.webp" class="img-fluid rounded" alt="Secure Parking Area"></div>
        <div class="col-md-3"><img src="images\extra\Signature-Global-cctv-servillence.webp" class="img-fluid rounded" alt="CCTV Surveillance"></div>
        <div class="col-md-3"><img src="images\extra\Signature-Global-vaastu-compliant-designs.webp" class="img-fluid rounded" alt="Vastu-Compliant Spaces"></div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center fw-bold">Why Invest in Signature Global Plots Farukhnagar?</h2>
    <p class="mt-3">Signature Global Plots Farukhnagar offer a lucrative opportunity for homebuyers and investors. Located under the Deen Dayal Jan Awas Yojana (DDJAY), these plots provide an affordable option in a rapidly developing region with modern infrastructure and a serene environment.</p>
    <p>With seamless connectivity via the Delhi-Jaipur Highway and close proximity to IGI Airport, commuting is hassle-free. Public transport accessibility and nearby amenities such as schools, hospitals, and business hubs make it an ideal choice for professionals and families alike.</p>
    <p>The area is witnessing rapid development, ensuring a promising appreciation in property value. Secure your future investment with Signature Global DDJAY Plots and experience premium living in a well-connected, safe, and sustainable environment.</p>
</div>

<div class="container my-5">
    <h2 class="text-center fw-bold">FAQ's: About Signature Global Deen Dayal Plots Farukhnagar</h2>
    <div class="accordion mt-4" id="faqAccordion">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    What is Signature Global Farukhnagar DDJAY Plots?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    A plotted residential project under <strong>Deen Dayal Jan Awas Yojana (DDJAY)</strong> in Farukhnagar, Haryana.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Where is Signature Global Farukhnagar Plots located?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Signature Global Plots are located in <strong>Farukhnagar, Haryana</strong>, offering seamless connectivity to major roads and highways.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    What sizes are available at Signature Global Plots in Farukhnagar?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    The plots are available in various sizes ranging from <strong>100 sq. yards to 180 sq. yards</strong>, catering to different needs.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    What amenities do Farukhnagar DDJAY Plots offer?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Amenities include <strong>24/7 security, gated community, wide roads, green spaces, water supply, and electricity</strong>.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                    Are Signature Global plots in Farukhnagar a good investment?
                </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, due to <strong>rapid infrastructure growth, excellent connectivity, and increasing property demand</strong>, it's a great investment opportunity.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                    What is the payment plan for Signature Global plots in Farukhnagar?
                </button>
            </h2>
            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Signature Global offers multiple flexible payment plans including <strong>CLP, 40:60, 30:40:30, and 50:50</strong> options.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center py-4" style="background-color: #004A99; color: white;">
    <div class="container">
        <h5 class="fw-bold">DISCLAIMER</h5>
        <p style="font-size: 14px;">
            The information provided on this website is for general informational purposes only and does not constitute an offer or commitment for any property or service. This is not the official website of the builder, developer, or property owner. All trademarks, images, and logos are the exclusive property of their respective owners.
            <br><br>
            Prices, availability, and property details are subject to change without prior notice. Images used on the website are for **illustrative and representational purposes only** and may not accurately depict the actual property specifications, amenities, or infrastructure. The final approvals and changes depend on respective regulatory authorities.
            <br><br>
            We do not claim any legal compliance verification, including **RERA registration status**. Interested buyers are encouraged to conduct due diligence regarding project approvals, builder credibility, and legal clearances before making any decisions.
            <br><br>
            By using this website, you acknowledge and accept the terms of this disclaimer. This website is meant for **informational purposes only** and does not represent an official real estate entity.
        </p>
        <p class="mt-3" style="font-size: 13px;">© 2025 All Rights Reserved. This website is maintained for informational purposes only.</p>
    </div>
</div>

<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 350px;">
        <div class="modal-content shadow-lg" style="border-radius: 12px;">
            <div class="modal-header bg-primary text-white py-2">
                <h6 class="modal-title mx-auto">📧 Enquiry Form</h6>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">

                <form id="enquiryForm">
                    <div class="mb-2">
                        <input type="text" id="name" name="name" class="form-control form-control-sm" placeholder="Enter Your Name" required>
                    </div>

                    <div class="mb-2">
                        <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="Enter Your Email" required>
                    </div>

                    <div class="mb-2">
                        <input type="text" id="mobile" name="mobile" class="form-control form-control-sm" placeholder="Enter Your Mobile" required>
                    </div>

                    <div class="mb-2">
                        <textarea id="message" name="message" class="form-control form-control-sm" rows="2" placeholder="Enter Your Message" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm rounded-pill px-3">Submit</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.open-enquiry-modal').click(function() {
            $('#enquiryModal').modal('show');
        });

        $('#enquiryForm').on('submit', function (e) {
            e.preventDefault(); // Prevent Page Reload

            var formData = $(this).serialize();

            $.ajax({
                url: 'enquire_now.php', // Backend File
                type: 'POST',
                data: formData,
                dataType: 'json',
                beforeSend: function () {
                    Swal.fire({
                        title: 'Processing...',
                        text: 'Sending your enquiry, please wait...',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function (response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: '✅ Enquiry Sent Successfully!',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            $('#enquiryModal').modal('hide');
                        });
                        $('#enquiryForm')[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: '❌ Email Sending Failed!',
                            text: response.message,
                            confirmButtonText: 'Try Again'
                        });
                    }
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: '❌ Something Went Wrong!',
                        text: 'Please try again later.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>

   <!-- Phone Call Button -->
   <a href="tel:+919211293111" class="call-btn position-fixed bottom-3 end-3" title="Call Now" >
    <span style="font-size: 24px; color: white;">📞</span>
</a>
   <!-- WhatsApp Icon (Mid-Right Side) -->
   <a href="https://wa.me/919540515454" target="_blank" class="position-fixed top-50 translate-middle-y end-0 me-3" title="Chat on WhatsApp" style="width: 45px; height: 45px; background-color: #25D366; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2); z-index: 1050;">
    <i class="bi bi-whatsapp" style="font-size: 28px; color: white;"></i>
</a>
</body>
</html>