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
</style>
</head>
<body>
    <!-- Banner Image Section -->
    <section id="home" class="bg-light">
        <img src="images/commercial/ele_dx_04.jpg" 
     alt="Home Image" 
     class="img-fluid" 
     style="width: 100vw; height: 110vh; object-fit: fill;">

     <div class="container text-center mt-5 bg-dark text-white p-5">
    <h5 class="fw-bold text-white">WELCOME TO</h5>
    <h1 class="fw-bold text-white">HIGH-END RETAIL ARCADE</h1>
    <h2 class="fst-italic text-white">(Commercial of Deluxe DXP)</h2>
    <h4 class="mt-3 text-white">DISCOVER A WHOLE NEW WORLD FOR SHOPPING</h4>
    <p class="mt-3">
        Nestled along the coveted Dwarka Expressway, Signatureglobal DELUXE DXP emerges as a premier destination for high-end shopping experience. 
        Conceptualized by renowned architects, this commercial arcade redefines sophistication with its meticulously crafted design. 
        Boasting a curated mix of daily necessities and luxury brands, it caters to the diverse needs of both everyday shoppers and discerning connoisseurs, 
        promising an unparalleled shopping experience.
    </p>
    <p>
        Surrounded by upscale residential neighborhoods, Signatureglobal DELUXE DXP enjoys a prime location within Gurugram’s dynamic landscape. 
        Its strategic positioning ensures convenient access to key landmarks, including esteemed educational institutions, healthcare facilities, 
        bustling IT hubs, and thriving business districts. With its proximity to NH-8 and the Southern Peripheral Road, 
        this arcade becomes a magnet for residents seeking convenience and luxury, elevating its desirability among discerning clientele.
    </p>
    <p class="fw-bold">BANG ON DWARKA EXPRESSWAY SECTOR 37D, GURUGRAM</p>
</div>

<div class="container mt-5">
    <div class="row g-3 align-items-stretch"> <!-- 'align-items-stretch' ensures equal height -->
        <!-- Left Side Image -->
        <div class="col-md-6 d-flex">
            <img src="images/commercial/Location-Map-Desktop-dxp.jpg" class="img-fluid w-100 rounded h-100" alt="Location Map" style="object-fit: cover;height: 500px; min-height: 500px;">
        </div>
        <!-- Right Side Content -->
        <div class="col-md-6 p-4 rounded d-flex flex-column h-100 text-white" style="background-color: #6daba0; display: flex;height: 500px; min-height: 500px;">
            <h2 class="text-center flex-shrink-0">Location Advantages</h2>
            <!-- Tabs -->
            <div class="d-flex flex-wrap gap-2 justify-content-center mt-3 flex-shrink-0">
                <button class="btn btn-light text-dark tab-btn active" onclick="showContent('schools', this)">Schools</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('hospitals', this)">Hospitals</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('connectivity', this)">Connectivity</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('hotels', this)">Hotels</button>
                <button class="btn btn-light text-dark tab-btn" onclick="showContent('sports', this)">Sports</button>
            </div>
            <!-- Content Sections -->
            <div class="content-container flex-grow-1 overflow-auto"> <!-- Fixed height & scrolling if needed -->
                <div id="schools" class="tab-content mt-3">
                    <h4 class="mt-3 text-center">🏫 SCHOOLS</h4>
                    <ul>
                        <li>Suncity School</li>
                        <li>Delhi Public School</li>
                        <li>Euro International School</li>
                        <li>GD Goenka School</li>
                    </ul>
                </div>
                <div id="hospitals" class="tab-content mt-3 d-none">
                    <h4 class="mt-3 text-center">🏥 HOSPITALS</h4>
                    <ul>
                        <li>The Signature Advanced Super Speciality Hospital</li>
                        <li>Aarvy Hospital</li>
                        <li>Medanta – The Medicity</li>
                        <li>Fortis Hospital</li>
                    </ul>
                </div>
                <div id="connectivity" class="tab-content mt-3 d-none">
                    <h4 class="mt-3 text-center">🚗 CONNECTIVITY</h4>
                    <ul>
                        <li>Dwarka Expressway</li>
                        <li>Pataudi Road</li>
                        <li>Railway Station</li>
                        <li>Hero Honda Chowk on NH-8</li>
                        <li>Western Peripheral Expressway</li>
                        <li>Millennium City Centre Metro</li>
                        <li>Cyber Hub</li>
                        <li>✈️ Airport</li>
                    </ul>
                </div>
                <div id="hotels" class="tab-content mt-3 d-none">
                    <h4 class="mt-3 text-center">🏨 HOTELS</h4>
                    <ul>
                        <li>Holiday Inn</li>
                        <li>Hyatt Regency</li>
                        <li>Karma Lakelands</li>
                        <li>ITC Grand Bharat</li>
                    </ul>
                </div>
                <div id="sports" class="tab-content mt-3 d-none">
                    <h4 class="mt-3 text-center">🎾 SPORTS</h4>
                    <ul>
                        <li>Heritage Badminton Academy</li>
                        <li>Nehru Stadium</li>
                        <li>Rezang La Shooting Sports Academy</li>
                        <li>Tau Devi Lal Sports Complex</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center my-5 bg-light">
        <h2 class="fw-bold">Unit Plans</h2>

        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <img src="images/commercial/DX_s1.jpg" class="card-img-top" alt="Ground Floor Plan">
                    <div class="card-body">
                        <p class="fw-semibold">GROUND FLOOR PLAN</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <img src="images/commercial/DX_s2.jpg" class="card-img-top" alt="First Floor Plan">
                    <div class="card-body">
                        <p class="fw-semibold">FIRST FLOOR PLAN</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <img src="images/commercial/DX_s3.jpg" class="card-img-top" alt="Second Floor Plan">
                    <div class="card-body">
                        <p class="fw-semibold">SECOND FLOOR PLAN</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center my-5 bg-light">
        <h2 class="fw-bold">Site Plan</h2>
        
        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <img src="images/commercial/Site-Plan_dx.jpg" class="img-fluid rounded shadow" alt="Site Plan">
            </div>
        </div>
    </div>

<section class="container-fluid p-0">
    <div class="text-center py-3" style="background-color: #f5efe4;">
        <h2 class="fw-bold">GALLERY</h2>
        <p>Experience architectural brilliance and opulent spaces designed to elevate your business and redefine luxury in commercial ownership.</p>
    </div>

    <!-- Bootstrap Carousel -->
    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/commercial/ele_dx_02.jpg" class="d-block w-100" alt="Gallery Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/commercial/ele_dx_01.jpg" class="d-block w-100" alt="Gallery Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/commercial/ele_dx_04.jpg" class="d-block w-100" alt="Gallery Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/commercial/ele_dx_03.jpg" class="d-block w-100" alt="Gallery Image 4">
            </div>
            <div class="carousel-item">
                <img src="images/commercial/ele_dx_05.jpg" class="d-block w-100" alt="Gallery Image 5">
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

<footer class="text-white py-3" style="background-color: #6daba0;">
        <div class="container text-center">
            <p class="mb-1 fw-bold">
                SIGNATUREGLOBAL BUSINESS PARK PRIVATE LIMITED | CIN: U70109DL2019PTC346184
            </p>
            <p class="small mb-0">
                <strong>Disclaimer:</strong> Promoter urges every applicant to inspect the project site and shall not merely rely upon any architectural impression, plan or sales brochure and, therefore, requests to make personal judgment prior to submitting an application for allotment. Unless otherwise stated, all the images, visuals, materials, and information contained herein are purely creative/artistic and may not be actual representations of the product and/or any amenities. Further, the actual design may vary in the fit and finished form, from the one displayed above. Journey time shown, if any, is based upon Google Maps which may vary as per the traffic at a relevant point of time. *Rate mentioned above does not include GST and other statutory charges, if applicable. T & C Apply. 1 sq. mt. = 10.7639 sq. ft.
            </p>
        </div>
    </footer>

<script>
    function showContent(tabId, btn) {
        // Hide all content sections
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('d-none');
        });

        // Show selected content
        document.getElementById(tabId).classList.remove('d-none');

        // Remove active class from all buttons
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.classList.remove('active');
        });

        // Add active class to clicked button
        btn.classList.add('active');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>