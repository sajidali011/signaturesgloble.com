<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Projects</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .tab-btn.active {
            background-color: #3f8776 !important;
            color: white !important;
        }

        .content-container {
            flex-grow: 1;
            min-height: 100vh;
        }
    </style>
</head>
<body>

<?php 
    $navbarPath = "navbar.php";
    if (file_exists($navbarPath)) {
        include $navbarPath;
    } else {
        echo '<div class="alert alert-danger text-center">Navbar file not found!</div>';
    }
?>

<!-- Banner Image Section -->
<section id="home" class="bg-light">
    <div class="position-relative">
        <img src="images/commercial/SIGNUM PLAZA-min.webp" class="w-100" style="height: 100vh; object-fit: cover;" alt="Signature Global City">

        <!-- Logo -->
        <div class="position-absolute bottom-0 start-0 mb-3 ms-3">
            <img src="images/commercial/signum-plaza-logo.svg" width="150" alt="SG Logo">
        </div>
    </div> 

    <!-- RERA Registration -->
    <div class="text-white text-center py-2" style="background-color: #6d8c8c; font-size: 12px;">
        HRERA Number : RC/REP/HARERA/GGM/349/81/2019/43 & RC/REP/HARERA/GGM/494/226/2021/62
    </div>

    <!-- Welcome Section -->
    <div class="container-fluid text-center bg-dark text-white p-5">
        <h5 class="fw-bold text-white">WELCOME TO</h5>
        <h2 class="fw-bold  text-white">Signum Plaza</h2>
        <p class="mt-3">Located at <strong>Signature Global Park, Sector 36, Sohna</strong>, Signum Plaza is a <strong>high-street retail hub</strong>.</p>
        <p class="fw-bold">COMMERCIAL SHOPS IN SECTOR 36, SOHNA AT SIGNATURE GLOBAL PARK</p>
    </div>
</section>

<div class="container text-center py-5 bg-light">
    <h2 class="fw-bold">Step Into The World Of Luxury</h2>
    <div class="ratio ratio-16x9 mt-3">
    <iframe width="215%" height="50" src="https://www.youtube.com/embed/iTfpeAEqlWQ?si=znld4PSHdY6hvn26" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<!-- Bootstrap Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" class="img-fluid rounded" alt="Preview">
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row g-3 align-items-stretch">
        <!-- Left Side Image -->
        <div class="col-md-6 d-flex">
            <img src="images/commercial/location-map7.jpg" class="img-fluid w-100 rounded" alt="Location Map" 
                style="cursor: pointer;"
                onclick="openModal('images/commercial/location-map7.jpg')">
        </div>

        <!-- Right Side Content -->
        <div class="col-md-6 p-4 rounded text-white" style="background-color: #6daba0;">
            <h2 class="text-center">Location Advantages</h2>
            <ul class="mt-3">
                <li>More than 6 reputed schools within 15 km.</li>
                <li>Sohna Elevated Road (under construction).</li>
                <li>Hotels in 15 km radius.</li>
                <li>Near Golf Course Extension Road.</li>
                <li>On 8-lane highway, near Aravalli Mountains.</li>
            </ul>
        </div>
    </div>
</div>

<section class="container-fluid p-0">
    <div class="text-center py-3 bg-light">
        <h2 class="fw-bold">Take A Tour Of Our Commercial Haven</h2>
    </div>

    <!-- Bootstrap Carousel -->
    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/commercial/5.jpg" class="d-block w-100" style="height: 500px; object-fit: contain;" alt="Gallery Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/commercial/6.jpg" class="d-block w-100" style="height: 500px; object-fit: contain;" alt="Gallery Image 2">
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>
<p>&nbsp;</p>

<!-- Disclaimer Section -->
<div class="text-white py-3" style="background-color: #6b8c8a;">
    <div class="container">
        <p class="fw-bold">Signatureglobal Homes Pvt. Ltd | CIN - U70100DL2008PTC176641</p>
        <p style="font-size: 14px;">Promoter urges every applicant to inspect the project site.</p>
    </div>
</div>

<!-- JavaScript -->
<script>
    function openModal(imageSrc) {
        document.getElementById("modalImage").src = imageSrc;
        let myModal = new bootstrap.Modal(document.getElementById("imageModal"));
        myModal.show();
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
