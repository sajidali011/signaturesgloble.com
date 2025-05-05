<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Projects</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (Optional) -->
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

    /* Ensures equal height */
    .content-container {
        flex-grow: 1;
        min-height: 100%;
    }
</style>
</head>
<body>
<?php include "navbar.php"; ?>

    <!-- Banner Image Section -->
<section id="home" class="bg-light">
    <div class="position-relative">
        <!-- Main Image -->
        <img src="images/commercial/front-elevation.jpg" class="w-100 vh-100" alt="Signature Global City">

        <!-- Logo (Left Side Thoda Niche)-->
        <div class="position-absolute bottom-0 start-0 mb-3 ms-3">
            <img src="images/commercial/Signum-Plaza4-Logo.svg" width="150" alt="SG Logo">
        </div>
    </div> 

    <!-- RERA Registration (Full Width Without Padding Issues) -->
    <div style="background-color: #6d8c8c; color: white; font-size: 12px; font-family: Arial, sans-serif; text-align: center; padding: 5px; width: 100vw; margin: 0; position: relative; left: 0;">
    HRERA NO.: RC/REP/HARERA/GGM/413/145/2020/29 & RC/REP/HARERA/GGM/402/134/2020/18(frozen plots) & [RC/REP/HARERA/GGM/414/146/2020/30(RESIDENTIAL PLOTS)]
    </div>

    <!-- Welcome Section -->
    <div class="container-fluid text-center mt-0 bg-dark text-white p-5">
        <h5 class="fw-bold text-white">WELCOME TO</h5>
        <h2 class="fw-bold text-white text-center">Signum Plaza 5 (Commercial of Signature Global Park 4&5 )</h2>
        <p class="mt-3">  
        Signature Global Signum Plaza-5 shops are perfect blend of unique design and location in Signature Global Park 4&5 residential project 36 Sohna south of Gurugram, this retail hub is catering a huge pool of consumers and has best retail shops in Sohna, strategically located at Delhi-Mumbai corridor. The high-quality, low-maintenance shops provide an excellent investment opportunity and one of the most demanding commercial property in Sohna, the location advantage and the consumer demographics indicates that the hub would generate excellent business at Signum Plaza 4 & 5.  
</p>

        <p class="fw-bold">RETAIL HUB AT SIGNATURE GLOBAL PARK 4&5, SOHNA, GURUGRAM

</p>
    </div>
</section>
<!-- Luxury Video Section -->
<div style="background-color:#f5efe4; padding: 50px 0; text-align: center;">
    <h2 style="color: #000; font-weight: bold; margin-bottom: 20px;">Step Into The World Of Luxury</h2>
    
   <!-- Centered Responsive YouTube Video -->
<div style="display: flex; justify-content: center; align-items: center;">
    <div style="position: relative; width: 80%; max-width: 800px; padding-bottom: 45%; height: 0; overflow: hidden;">
    <iframe width="800" height="550" src="https://www.youtube.com/embed/FgVXOELOUX4?si=7bf3sVzsii5rraSP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>


<!-- Bootstrap Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" class="img-fluid rounded" alt="Preview">
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" class="img-fluid rounded" alt="Preview">
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row g-3 align-items-stretch">
        <!-- Left Side Image with Clickable Modal -->
        <div class="col-md-6 d-flex">
            <img src="images/commercial/location-map3.jpg" class="img-fluid w-100 rounded h-100" alt="Location Map" 
                style="object-fit: cover; height: 500px; min-height: 500px; cursor: pointer;"
                onclick="openModal('images/commercial/location-map3.jpg')">
        </div>

        <!-- Right Side Content Box -->
        <div class="col-md-6 p-4 rounded d-flex flex-column h-100 text-white" 
             style="background-color: #6daba0; height: 500px; min-height: 500px;">
            <h2 class="text-center flex-shrink-0">Location Advantages</h2>

            <!-- Content Section (Only One) -->
            <div class="content-container flex-grow-1 overflow-auto mt-3">
                <h4 class="text-center">🚗 Location Advantages</h4>
                <ul>
                    <li>Sector 81 enjoys its proximity to key employment hubs of the city like Cyber City, Udyog Vihar, Golf Course Extension Road, Sohna, and Manesar.</li>
                    <li>Major industrial employment centers of Manesar is in close vicinity.</li>
                    <li>The city's employment hubs are well-connected through NH8, Dwarka Expressway, and Southern Peripheral Road.</li>
                    <li>Another key feature of this sector that makes it an ideal residential destination is strong social infrastructure in the neighborhood.</li>
                    <li>The sector has witnessed development of several residential projects in the vicinity.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="container-fluid p-0">
    <div class="text-center py-3" style="background-color: #f5efe4;">
        <h2 class="fw-bold">Take A Tour Of Our Commercial Haven</h2>
    </div>

    <!-- Bootstrap Carousel -->
    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/commercial/10.jpg" class="d-block w-100" 
                     style="height: 500px; max-height: 90vh; object-fit: contain; background-color: black;" 
                     alt="Gallery Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/commercial/SIGNUM PLAZA 4-min.webp" class="d-block w-100" 
                     style="height: 500px; max-height: 90vh; object-fit: contain; background-color: black;" 
                     alt="Gallery Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/commercial/30.jpg" class="d-block w-100" 
                     style="height: 500px; max-height: 90vh; object-fit: contain; background-color: black;" 
                     alt="Gallery Image 3">
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>



<!-- Disclaimer Section -->
<div style="background-color: #6b8c8a; color: white; padding: 20px;margin-bottom: -50px;">
    <div class="container">
        <p style="font-weight: bold; margin-bottom: 5px;">Signatureglobal Homes Pvt. Ltd | CIN - U70100DL2008PTC176641 | Licence No. 117 OF 2019

        </p>
        <p style="font-weight: bold;">Disclaimer</p>
        <p style="font-size: 14px; line-height: 1.6;">
        Promoter urges every applicant to inspect the project site and shall not merely rely upon any architectural impression, plan or sales brochure and, therefore, requests to make personal judgment prior to submitting an application for allotment. Unless otherwise stated, all the images, visuals, materials and information contained herein are purely creative/artistic and may not be actual representations of the product and/or any amenities. Further, the actual design may vary in the fit and finished form, from the one displayed above . Journey time shown, if any, is based upon Google Maps which may vary as per the traffic at a relevant point of time.. *Rate mentioned above does not include GST and other statutory charges, if applicable. T & C Apply. 1 sq. mt. = 10.7639 sq. ft.
        </p>
    </div>
</div>



<!-- JavaScript to Handle Bootstrap Modal & Tabs -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Add event listeners to tab buttons
        document.querySelectorAll(".tab-btn").forEach(button => {
            button.addEventListener("click", function () {
                let targetId = this.getAttribute("data-target");

                // Hide all content sections
                document.querySelectorAll(".tab-content").forEach(tab => {
                    tab.classList.add("d-none");
                });

                // Show the selected content section
                document.getElementById(targetId).classList.remove("d-none");

                // Remove active class from all buttons
                document.querySelectorAll(".tab-btn").forEach(btn => {
                    btn.classList.remove("active");
                });

                // Add active class to clicked button
                this.classList.add("active");
            });
        });

        // Ensure first tab is visible by default
        document.querySelector(".tab-btn.active").click();
    });

    function openModal(imageSrc) {
        let modalImg = document.getElementById("modalImage");
        modalImg.src = imageSrc; // ✅ Set the image source dynamically
        let myModal = new bootstrap.Modal(document.getElementById("imageModal"));
        myModal.show(); // ✅ Open the Bootstrap modal
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>