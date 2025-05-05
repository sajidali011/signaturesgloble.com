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
        <img src="images/commercial/modified_image.png" 
     alt="Home Image" 
     class="img-fluid" 
     style="width: 100vw; height: 110vh; object-fit: fill;">

     <div class="container text-center mt-5 bg-dark text-white p-5">
    <h5 class="fw-bold text-white">WELCOME TO</h5>
    <h1 class="fw-bold text-white">Signum Plaza 79B (Commercial of Signature Global City 79B)</h1>
    
    
    <p class="mt-3">
    
        Signum Plaza 79B is a new high street premium retail shop located in Sector 79B, Gurugram. The project is being designed by 
        Padma Bhushan Architect Hafeez Contractor.
        The project is located in Sector 79B, Gurugram, which is a rapidly developing area with a high demand for retail space. 
        The retail shops at Signum Plaza 79B will cater to a diverse range of customers, with a focus on providing a high-quality 
        shopping experience. The shops will offer a wide range of products and services, including fashion, accessories, electronics, 
        groceries, and more.
        The project will also feature ample parking space for visitors and a landscaped area for relaxation and recreation. 
        Signum Plaza 79B is expected to become a popular destination for shoppers and a hub for business and commercial activity 
        in the area.
</p>
</div>




<div class="container mt-5">
    <div class="row g-3 align-items-stretch">
        <!-- Left Side Image -->
        <div class="col-md-6 d-flex">
            <img src="images/commercial/Location-Map-lg.jpg" class="img-fluid w-100 rounded h-100" alt="Location Map" style="object-fit: cover;height: 500px; min-height: 500px;">
        </div>
        <div class="col-md-6 p-4 rounded d-flex flex-column h-100 text-white" style="background-color: #6daba0; height: 500px; min-height: 500px;">
            <h2 class="text-center flex-shrink-0">Location Advantages</h2>

            <!-- Tabs -->
            <div class="d-flex flex-wrap gap-2 justify-content-center mt-3 flex-shrink-0">
                <button class="btn btn-light text-dark tab-btn active" onclick="showContent('connectivity', this)">Connectivity</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('education', this)">Education</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('hospitals', this)">Hospitals</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('recreational', this)">Recreational</button>
            </div>

            <!-- Content Sections -->
            <div class="content-container flex-grow-1 overflow-auto">
                <div id="connectivity" class="tab-content mt-3">
                    <h4 class="text-center">🚗 CONNECTIVITY</h4>
                    <ul>
                        <li>Well-connected to NH-8, Dwarka Expressway, Golf Course Road and Badshapur via Southern Peripheral Road</li>
                        <li>30 km drive from Indira Gandhi International Airport</li>
                        <li>26 km drive from Delhi</li>
                        <li>20 km drive from HUDA City Centre metro station</li>
                        <li>10 km drive to IMT Manesar</li>
                    </ul>
                </div>
                <div id="education" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🏫 EDUCATION</h4>
                    <ul>
                        <li>Mount Olympus Juniors School is at 1.9 km</li>
                        <li>MatriKiran High School is at 8.9 km</li>
                        <li>Kidzee Pre School is 5 km</li>
                        <li>Euro International School is 8.9 km</li>
                        <li>Amity University is 13 km</li>
                        <li>DPS is 8.6 km</li>
                        <li>DPG Degree College is 14 km</li>
                        <li>Gurugram University is 16 km</li>
                    </ul>
                </div>
                <div id="hospitals" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🏥 HOSPITALS</h4>
                    <ul>
                        <li>Apollo Cradle is at 6.1 km</li>
                        <li>Aarvy Healthcare Super Speciality Hospital is 8.6 km</li>
                        <li>Silver Streak Multi Speciality Hospital is 9.6 km</li>
                        <li>Medanta The Medicity is 16 km</li>
                        <li>Fortis Hospital is 19 km</li>
                    </ul>
                </div>
                <div id="recreational" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🎉 RECREATIONAL</h4>
                    <ul>
                        <li>Hyatt Regency is 6.8 km</li>
                        <li>ITC Grand Bharat is 8.7 km</li>
                        <li>Holiday Inn is 8.9 km</li>
                        <li>Aapno Ghar is 7.2 km</li>
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
            <img src="images/commercial/sg-79b1.jpg" class="d-block w-100" alt="Gallery Image 1">
        </div>
        <div class="carousel-item">
            <img src="images/commercial/sg-79b2.jpg" class="d-block w-100" alt="Gallery Image 2">
        </div>
        <div class="carousel-item">
            <img src="images/commercial/sg-79b3.jpg" class="d-block w-100" alt="Gallery Image 3">
        </div> 
        <div class="carousel-item">
            <img src="images/commercial/sg-79b4.jpg" class="d-block w-100" alt="Gallery Image 4">
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
    <p class="mb-1">JMK HOLDINGS PRIVATE LIMITED | CIN - U70109DL2013PTC255232</p>
    <h6 class="fw-bold">Disclaimer</h6>
    <p>
        Promoter urges every applicant to inspect the project site and shall not merely rely upon any architectural impression, plan or sales brochure and, therefore, requests to make personal judgment prior to submitting an application for allotment. 
        Unless otherwise stated, all the images, visuals, materials and information contained herein are purely creative/artistic and may not be actual representations of the product and/or any amenities. 
        Further, the actual design may vary in the fit and finished form, from the one displayed above. Journey time shown, if any, is based upon Google Maps which may vary as per the traffic at a relevant point of time. 
        *Rate mentioned above does not include GST and other statutory charges, if applicable. T & C Apply. 1 sq. mt. = 10.7639 sq. ft.
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