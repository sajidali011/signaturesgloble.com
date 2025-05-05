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
        <img src="images/commercial/front-view.jpg" 
     alt="Home Image" 
     class="img-fluid" 
     style="width: 100vw; height: 110vh; object-fit: fill;">

     <div class="container text-center mt-5 bg-dark text-white p-5">
    <h5 class="fw-bold text-white">WELCOME TO</h5>
    <h1 class="fw-bold text-white">Signum Plaza 37D II (Commercial of Signature Global City 37D II )</h1>
    
    
    <p class="mt-3">
    Welcome to a whole new world of retail, where shopping meets luxury like never before! ✨  
    <br><br>
    <strong>Signature Global Signum Plaza 37D(II)</strong> isn’t just another shopping destination—it’s a vibrant hub designed to elevate your retail experience. Whether you’re looking for daily essentials or indulging in premium brands, this high-street retail space in <strong>Gurugram</strong> has everything you need.  
    
    Strategically located with <strong>seamless connectivity</strong>, Signum Plaza 37D(II) sits right on a <strong>60-meter-wide road</strong>, offering easy access and convenience. With <strong>Dwarka Expressway</strong> just around the corner and major roads like <strong>NH-8, Hero Honda Chowk, and Pataudi Road</strong> within close reach, getting here is effortless.  
    
    Designed by <strong>Padma Bhushan awardee Hafeez Contractor</strong>, this thoughtfully planned commercial hub is more than just a shopping center—it’s a community landmark. Surrounded by a thriving residential neighborhood, it naturally attracts a steady flow of shoppers who rely on it for their everyday needs.  
    
    Whether you’re a shopper or a business owner, <strong>Signum Plaza 37D(II) is where convenience meets elegance, making every visit a delightful experience.</strong> 🛍️
</p>

    <p class="fw-bold">HIGH STREET RETAIL SHOPS IN SECTOR 37D,GURUGRAM</p>
</div>


<body class="bg-light text-dark">

    <div class="container text-center mt-5">
        <p class="text-uppercase text-secondary fw-bold">3D Walkthrough</p>
        <h2 class="fw-bold">Step into the world of luxury</h2>

        <div class="d-flex justify-content-center mt-4">
        <iframe width="800" height="500" src="https://www.youtube.com/embed/8wRwE2HOffY?si=oH1Qz9ISCSx8pUrd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>




<div class="container mt-5">
    <div class="row g-3 align-items-stretch">
        <!-- Left Side Image -->
        <div class="col-md-6 d-flex">
            <img src="images/commercial/Location-Map.jpg" class="img-fluid w-100 rounded h-100" alt="Location Map" style="object-fit: cover;height: 500px; min-height: 500px;">
        </div>
        <div class="col-md-6 p-4 rounded d-flex flex-column h-100 text-white" style="background-color: #6daba0; height: 500px; min-height: 500px;">
            <h2 class="text-center flex-shrink-0">Location Advantages</h2>
            <!-- Tabs -->
            <div class="d-flex flex-wrap gap-2 justify-content-center mt-3 flex-shrink-0">
                <button class="btn btn-light text-dark tab-btn active" onclick="showContent('connectivity', this)">Connectivity</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('education', this)">Education</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('hospitals', this)">Hospitals</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('temples', this)">Temples</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('sports', this)">Sports</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('metro', this)">Metro Rail</button>
            </div>
            <!-- Content Sections -->
            <div class="content-container flex-grow-1 overflow-auto">
                <div id="connectivity" class="tab-content mt-3">
                    <h4 class="text-center">🚗 CONNECTIVITY</h4>
                    <ul>
                        <li>Dwarka Expressway is 2.5 KM</li>
                        <li>Pataudi Road is 2.6 KM</li>
                        <li>Huda Metro Station is 13.5 KM</li>
                        <li>Hero Honda chowk on NH-8 is 6 KM</li>
                        <li>Western Peripheral Expressway is 15 KM</li>
                    </ul>
                </div>
                <div id="education" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🏫 EDUCATION</h4>
                    <ul>
                        <li>Euro International School is 800 MTR</li>
                        <li>Suncity School is 800 MTR</li>
                        <li>Green Field School is 1 KM</li>
                        <li>Narayana E Techno is 1 KM</li>
                        <li>Alpine Convent School is 1.5 KM</li>
                    </ul>
                </div>
                <div id="hospitals" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🏥 HOSPITALS</h4>
                    <ul>
                        <li>The Signature Advanced Super Speciality Hospital (300 Beds)</li>
                        <li>Medanta-The Medicity 9 KM</li>
                        <li>Park Hospital 800 MTR</li>
                        <li>SGT Hospital 1 KM</li>
                    </ul>
                </div>
                <div id="temples" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🛕 TEMPLES</h4>
                    <ul>
                        <li>Sheetla Mata Mandir is 8 KM</li>
                    </ul>
                </div>
                <div id="sports" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🎾 SPORTS</h4>
                    <ul>
                        <li>Tau Devi Dayal Stadium is 8 KM</li>
                        <li>Proposed Stadium in 600 MTR</li>
                    </ul>
                </div>
                <div id="metro" class="tab-content mt-3 d-none">
                    <h4 class="text-center">🚆 METRO RAIL</h4>
                    <ul>
                        <li>Proposed Metro Rail in close proximity</li>
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
            <img src="images/commercial/side-view.jpg" class="d-block w-100" alt="Gallery Image 1">
        </div>
        <div class="carousel-item">
            <img src="images/commercial/commercial-shop.jpg" class="d-block w-100" alt="Gallery Image 2">
        </div>
        <div class="carousel-item">
            <img src="images/commercial/rooftop.jpg" class="d-block w-100" alt="Gallery Image 3">
        </div> 
        <div class="carousel-item">
            <img src="images/commercial/front-view.jpg" class="d-block w-100" alt="Gallery Image 4">
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

<div class="container-fluid mt-5">
        <div class="p-4" style="background-color: #739191; color: #ffffff;">
            <p class="text-uppercase fw-bold small">ROSE BUILDING SOLUTIONS PRIVATE LIMITED | CIN NO.: U70109DL2013PTC257303</p>
            <p class="fw-bold">Disclaimer</p>
            <p class="small">
                Promoter urges every applicant to inspect the project site and shall not merely rely upon any architectural impression, plan or sales brochure and, therefore, requests to make personal judgment prior to submitting an application for allotment. Unless otherwise stated, all the images, visuals, materials and information contained herein are purely creative/artistic and may not be actual representations of the product and/or any amenities. Further, the actual design may vary in the fit and finished form, from the one displayed above. Journey time shown, if any, is based upon Google Maps which may vary as per the traffic at a relevant point of time. *Rate mentioned above does not include GST and other statutory charges, if applicable. T & C Apply. 1 sq. mt. = 10.7639 sq. ft.
            </p>
        </div>
    </div>



<script>
    function showContent(tabId, btn) {
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('d-none');
        });
        document.getElementById(tabId).classList.remove('d-none');
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.classList.remove('active');
        });
        btn.classList.add('active');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>