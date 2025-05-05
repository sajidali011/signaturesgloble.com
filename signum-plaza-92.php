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
        <img src="images/commercial/signum-plaza-92-min.webp" class="w-100 vh-100" alt="Signature Global City">

        <!-- Logo (Left Side Thoda Niche) -->
        <div class="position-absolute bottom-0 start-0 mb-3 ms-3">
            <img src="images/commercial/SIGNUM---PLAZA-92.png" width="150" alt="SG Logo">
        </div>
    </div>

    <!-- RERA Registration (Full Width Without Padding Issues) -->
    <div style="background-color: #6d8c8c; color: white; font-size: 12px; font-family: Arial, sans-serif; text-align: center; padding: 5px; width: 100vw; margin: 0; position: relative; left: 0;">
    HRERA Number - RC/REP/HARERA/GGM/471/203/2021/39    </div>

    <!-- Welcome Section -->
    <div class="container-fluid text-center mt-0 bg-dark text-white p-5">
        <h5 class="fw-bold text-white">WELCOME TO</h5>
        <h1 class="fw-bold text-white">Signum Plaza 92 (Commercial of Signature Global City 92)</h1>
        <p class="mt-3">
    <strong>Signature Global Signum Plaza 92</strong> is a newly designed commercial space located in 
    <strong>Signature Global City 92</strong>, Sector 92, Gurugram. It serves a large number of potential customers from the surrounding residential area.  
    This commercial project has a <strong>strategic location</strong> and <strong>modern design</strong>, making it an ideal shopping destination for everyone—from those buying daily essentials to those looking for entertainment. 
    With <strong>top-class facilities and features</strong>, it is one of the best options for commercial shops in Gurugram. If you're looking for a new commercial space, <strong>Signum Plaza 92</strong> is a great choice.
</p>

        <p class="fw-bold">COMMERCIAL PROPERTY AT SECTOR 92, GURUGRAM</p>
    </div>
</section>
<!-- Luxury Video Section -->
<div style="background-color:#f5efe4; padding: 50px 0; text-align: center;">
    <h2 style="color: #000; font-weight: bold; margin-bottom: 20px;">Step Into The World Of Luxury</h2>
    
    <<!-- Centered Responsive YouTube Video -->
<div style="display: flex; justify-content: center; align-items: center;">
    <div style="position: relative; width: 80%; max-width: 800px; padding-bottom: 45%; height: 0; overflow: hidden; background: #000;">
        <iframe 
            src="https://www.youtube.com/embed/glODv75RrmQ?si=ux5Ho3EfUry_EKbz" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen 
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        </iframe>
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
            <img src="images/commercial/Location-Map0.jpg" class="img-fluid w-100 rounded h-100" alt="Location Map" 
                style="object-fit: cover;height: 500px; min-height: 500px; cursor: pointer;"
                onclick="openModal('images/commercial/Location-Map0.jpg')">
        </div>

        <div class="col-md-6 p-4 rounded d-flex flex-column h-100 text-white" style="background-color: #6daba0; height: 500px; min-height: 500px;">
            <h2 class="text-center flex-shrink-0">Location Advantages</h2>

            <!-- Tabs -->
            <div class="d-flex flex-wrap gap-2 justify-content-center mt-3 flex-shrink-0">
                <button class="btn btn-light text-dark tab-btn active" data-target="location_advantages">Location Advantages</button>
                <button class="btn btn-light text-dark tab-btn" data-target="location_advantages1">More Advantages</button>
            </div>

            <!-- Content Sections -->
            <div class="content-container flex-grow-1 overflow-auto">
                <div id="location_advantages" class="tab-content mt-3">
                    <h4 class="text-center">🚗 Location Advantages</h4>
                    <ul>
                        <li>Sector 92 enjoys its proximity to key employment hubs of the Cyber City, Udyog Vihar, Golf Course Extension Road, Sohna, Manesar, etc.</li>
                        <li>Major industrial employment centre of Manesar is in close proximity.</li>
                        <li>Kadipur industrial area is in close vicinity.</li>
                        <li>Moreover, there is easy connectivity to the city's employment hubs through Pataudi Road, NH8, Dwarka Expressway, Western Peripheral Expressway, and Southern Peripheral Road.</li>
                        <li>The sector has witnessed development of several residential projects in the vicinity.</li>
                    </ul>
                </div>
                <div id="location_advantages1" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🚗 More Advantages</h4>
                    <ul>
                        <li>Residential projects in these places are ideal for those who choose to surround themselves with abundant greenery with the soothing sound of nature.</li>
                        <li>Well-established network of schools like Ipsaa: Pre-school, Pranavananda International School, Rao Bharat Singh Intl School, and hospitals like Genesis Hospital, Medeor Hospital, Manesar, ESIC Hospital, Manesar, Medanta Medicity, Shopping Malls, Retail Markets, and Five Star Hotels.</li>
                        <li>The sector has witnessed good returns in terms of rent because it has an ideal location for people who are always on the move and work in the private and retail sectors.</li>
                        <li>Easy access to the International airport via NH-8 and Dwarka Expressway.</li>
                    </ul>
                </div>
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
                <img src="images/commercial/signum-plaza-92-min.webp" class="d-block w-100" 
                     style="height: 500px; max-height: 90vh; object-fit: cover;" 
                     alt="Gallery Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/commercial/22.jpg" class="d-block w-100" 
                     style="height: 500px; max-height: 90vh; object-fit: cover;" 
                     alt="Gallery Image 2">
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
<div style="background-color: #6b8c8a; color: white; padding: 20px;">
    <div class="container">
        <p style="font-weight: bold; margin-bottom: 5px;">Signature Infrabuild Pvt. Ltd | CIN: U70100DL2013PTC247676</p>
        <p style="font-weight: bold;">Disclaimer</p>
        <p style="font-size: 14px; line-height: 1.6;">
        Promoter urges every applicant to inspect the project site and shall not merely rely upon any architectural impression, plan or sales brochure and, therefore, requests to make personal judgment prior to submitting an application for allotment. Unless otherwise stated, all the images, visuals, materials and information contained herein are purely creative/artistic and may not be actual representations of the product and/or any amenities. Further, the actual design may vary in the fit and finished form, from the one displayed above . Journey time shown, if any, is based upon Google Maps which may vary as per the traffic at a relevant point of time.. *Rate mentioned above does not include GST and other statutory charges, if applicable. T & C Apply. 1 sq. mt. = 10.7639 sq. ft.
        </p>
    </div>
</div>

<div style="margin-bottom: -50px;">
    <?php include 'footer.php'; ?>
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