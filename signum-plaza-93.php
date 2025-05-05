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
    .tab-btn.active {
        background-color: #3f8776 !important;
        color: white !important;
    }

    /* Ensures equal height */
    .content-container {
        flex-grow: 1;
        min-height: 100%;
    }
    
        .tab-btn.active { background-color: #fff; color: #000; }
    
</style>
</head>
<body>
    <!-- Banner Image Section -->
    <section id="home" class="bg-light">
    <div style="width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center; overflow: hidden;">
        <img src="images/commercial/1.jpg" 
             alt="Home Image" 
             class="img-fluid"
             style="width: 100%; height: 100%; object-fit: cover;">
    </div>
</section>



<div style="background-color: #6d8c8c; color: white; font-size: 12px; font-family: Arial, sans-serif; text-align: center; padding: 5px; margin-bottom: 0; width: 100%;">
RERA REGISTRATION NO.: RC/REP/HARERA/GGM/682/414/2023/26 & RC/REP/HARERA/GGM/681/413/2023/25

</div>

<div class="container text-center bg-dark text-white p-5" style="margin-top: 0; max-width: 100%;">
    <h5 class="fw-bold text-white">WELCOME TO</h5>
    <h1 class="fw-bold text-white">Signum Plaza 93 (Commercial of Signature Global City 93)</h1>
    
    <p class="mt-3">
    The masterplan development showcases a stylish five-story commercial high-street hub, blending retail, leisure, and entertainment. Designed as a vibrant lifestyle destination, it offers a one-stop solution for residents and the surrounding community. With a diverse range of essential services—including restaurants, cafes, grocery stores, and an inviting rooftop garden terrace for al fresco dining—residents can enjoy convenience and a dynamic social experience right at their doorstep.

    </p>
</div>

            <div class="container mt-5">
    <div class="row g-3 align-items-stretch">
        <!-- Left Side Image -->
        <div class="col-md-6 d-flex">
            <img src="images/commercial/Location-Map 2.jpg" class="img-fluid w-100 rounded h-100" alt="Location Map" style="object-fit: cover;height: 500px; min-height: 500px;">
        </div>
        <div class="col-md-6 p-4 rounded d-flex flex-column h-100 text-white" style="background-color: #6daba0; height: 500px; min-height: 500px;">
            <h2 class="text-center flex-shrink-0">Location Advantages</h2>
            <!-- Tabs -->
            <div class="d-flex flex-wrap gap-2 justify-content-center mt-3 flex-shrink-0">
                <button class="btn btn-light text-dark tab-btn active" onclick="showContent('connectivity', this)">Connectivity</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('education', this)">Education</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('hospitals', this)">Hospitals</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('Recreational Hubs', this)">Recreational Hubs</button>
                
            </div>
            <!-- Content Sections -->
            <div class="content-container flex-grow-1 overflow-auto">
                <div id="connectivity" class="tab-content mt-3">
                    <h4 class="text-center">🚗 CONNECTIVITY</h4>
                    <ul>
        <li>Kherki Daula (NH-8) is at 8.6 km</li>
        <li>Hero Honda Chowk is at 12 km</li>
        <li>Dwarka Expressway is at 6 km</li>
        <li>Indira Gandhi International Airport is at 30 km</li>
        <li>IMT Manesar is at 6 km</li>
        <li>Railway Station is at 16 km</li>
        <li>Bus Terminal is at 16 km</li>
        <li>Proposed Metro is in Close Proximity</li>
        <li>Southern Peripheral Road is at 9 km</li>
    </ul>

                </div>
                <div id="education" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🏫 EDUCATION</h4>
                    <ul>
        <li>RPS International School is at 4 km</li>
        <li>Yaduvanshi Shiksha Niketan is at 1.6 km</li>
        <li>Pranavanda International School is at 1 km</li>
    </ul>
                </div>
                <div id="hospitals" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🏥 HOSPITALS</h4>
                    <ul>
        <li>Aary Hospital is at 3.9 km</li>
        <li>Krishna Hospital is at 2.8 km</li>
        <li>Global Hospital & Trauma Centre is at 7.2 km</li>
        <li>Arc Multi Specialty Hospital is at 3.6 km</li>
    </ul>
                </div>
                <div id="Recreational Hubs" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🏫 Recreational Hubs</h4>
                    <ul>
        <li>Holiday Inn is at 2.3 km</li>
        <li>Hyatt Regency is at 8.6 km</li>
        <li>Heritage Village Spa & Resort is at 6.4 km</li>
        <li>ITC Grand Bharat is at 16.5 km</li>
        <li>Karma Lake Lands is at 9.6 km</li>
    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


&nbsp;
<section class="container-fluid p-0">
    <div class="text-center py-3" style="background-color: #f5efe4;">
        <h2 class="fw-bold">Take A Tour Of Our Commercial Haven</h2>
        
       
    </div>
    <!-- Bootstrap Carousel -->
<div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">  <!-- Add "active" class -->
            <img src="images/commercial/2.jpg" class="d-block w-100" alt="Gallery Image 1">
        </div>
        <div class="carousel-item">
            <img src="images/commercial/1.jpg" class="d-block w-100" alt="Gallery Image 2">
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







<!-- Disclaimer Section -->

<div class="container-fluid p-3 text-white" style="background-color: #6daba0;">
    <p class="mb-1">Signature Builders Private Limited | CIN NO.: U70101DL2011PTC220275</p>
    <h6 class="fw-bold">Disclaimer</h6>
    <p>
    Promoter urges every applicant to inspect the project site and shall not merely rely upon any architectural impression, plan or sales brochure and, therefore, requests to make personal judgment prior to submitting an application for allotment. Unless otherwise stated, all the images, visuals, materials and information contained herein are purely creative/artistic and may not be actual representations of the product and/or any amenities. Further, the actual design may vary in the fit and finished form, from the one displayed above . Journey time shown, if any, is based upon Google Maps which may vary as per the traffic at a relevant point of time.. *Rate mentioned above does not include GST and other statutory charges, if applicable. T & C Apply. 1 sq. mt. = 10.7639 sq. ft.
    </p>
</div>



    <script>
        function showContent(id, btn) {
            // Hide all content divs
            document.querySelectorAll('.tab-content').forEach(div => div.classList.add('d-none'));
            
            // Remove active class from all buttons
            document.querySelectorAll('.tab-btn').forEach(button => button.classList.remove('active'));
            
            // Show the selected content
            document.getElementById(id).classList.remove('d-none');
            
            // Mark the clicked button as active
            btn.classList.add('active');
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>