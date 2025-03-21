<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DAXIN VISTAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome v6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f5f0e8;
            font-family: 'Poppins', sans-serif;
        }
        .luxury-section {
           
            padding: 50px 0;
        }
       
        .feature-box {
            text-align: center;
            flex: 1;
            min-width: 200px;
        }
        .divider {
            border-left: 1px solid gray;
            height: 50px;
            margin: auto;
        }

        /* ABOUT SECTION CSS */
        .twin-tower-section {
            background: url('images/on_going_project/photo-1610296669228-602fa827fc1f.avif') no-repeat center center/cover;
            color: #d4af37; /* Gold Text */
            min-height: 100vh; /* Changed to min-height */
            display: flex;
            align-items: center;
            position: relative;
            padding: 50px;
        }
        
        .twin-tower-section .content {
            max-width: 600px;
        }

        .twin-tower-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .twin-tower-section ul {
            list-style-type: none;
            padding: 0;
        }

        .twin-tower-section ul li {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .twin-tower-image {
            position: absolute;
            right: 10%;
            bottom: 0;
            max-height: 90%;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .twin-tower-section h1 {
                font-size: 2rem; /* Smaller font size for smaller screens */
            }
            .twin-tower-image {
                position: relative; /* Change position for smaller screens */
                max-height: 50%; /* Adjust image height */
                margin-top: 20px; /* Add margin for spacing */
            }
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Siyom Tvasta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about_us">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">GALLERY</a></li>
                    <li class="nav-item"><a class="nav-link" href="#amenities">AMENITIES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#floor_plans">FLOOR PLANS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#site_plans">SITE PLANS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#connectivity">CONNECTIVITY</a></li>
                </ul>
            </div>
        </div>
    </nav>

   <!-- Home Section -->
<section id="home" class="bg-light">
    <img src="images/on_going_project/desktop-10oct24-2.webp" alt="Home Image" class="img-fluid w-100" style="max-height: 80vh; object-fit: cover;">

    <div class="container luxury-section">
    <div class="text-center text-dark">  <!-- Text black -->
        <img src="images/on_going_project/40-story-icon.png" alt="Building" width="60"> 
        <h2 class="fw-bold">ULTRA LUXURIOUS RESIDENCES</h2>
        <p>45 Storeys High Rise Structure</p>
    </div>

    <div class="row text-center luxury-features text-dark">  
        <div class="col-md-3 feature-box">
            <h4 class="fw-bold">TRIPLE HEIGHT</h4>
            <p>Entrance Lobby</p>
        </div>
        <div class="col-md-1 d-none d-md-block">
            <div class="divider"></div>
        </div>
        <div class="col-md-3 feature-box">
            <h4 class="fw-bold">70 X 6 FEET</h4>
            <p>(Approx 21.3* X 1.8* Meter)<br>Expansive Balconies</p>
        </div>
        <div class="col-md-1 d-none d-md-block">
            <div class="divider"></div>
        </div>
        <div class="col-md-2 feature-box">
            <h4 class="fw-bold">4</h4>
            <p>Swimming Pools</p>
        </div>
        <div class="col-md-1 d-none d-md-block">
            <div class="divider"></div>
        </div>
        <div class="col-md-2 feature-box">
            <h4 class="fw-bold">12 FEET</h4>
            <p>(Approx 3.6* Meter)<br>Floor-to-floor Height</p>
        </div>
    </div>
</div>
</section>

    <!-- ABOUT SECTION -->
    <section id="about_us" class="twin-tower-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Text -->
                <div class="col-md-6">
                    <div class="content">
                        <h1>Signature Global<br> Twin Tower DXP</h1>
                        <ul>
                            <li><strong>Dedicated elevators</strong> for all apartments</li>
                            <li>Designed by internationally renowned architect <strong>BENOY</strong></li>
                            <li><strong>The Gem Clubhouse</strong> for leisure & exclusive experiences</li>
                            <li><strong>Amenities</strong> at multiple podium levels</li>
                            <li><strong>Panoramic view</strong> of the millennium city</li>
                            <li><strong>Biophilic architectural design</strong> with lush greenery</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side Image -->
                <div class="col-md-6 text-center">
                    <img src="images/on_going_project/about-ttdxp-building-min.png" alt="Twin Tower" class="twin-tower-image img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery" class="bg-light py-5">
        <div class="container text-center">
            <h2>GALLERY</h2>
            <p>Experience architectural brilliance and opulent spaces designed to redefine luxury living.</p>
        </div>
        <div class="container-fluid p-0">
            <img src="images/on_going_project/gallery4.webp" class="img-fluid w-100" alt="Gallery Image">
        </div>
    </section>

    <section id="amenities" class="bg-light py-5">
    <div class="container text-center">
        <h2>AMENITIES</h2>
        <div id="amenitiesCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/flowering-and-sensory-garden.jpg" class="img-fluid rounded shadow-sm" alt="Flowering and Sensory Garden">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/indoor-sports-facility.jpg" class="img-fluid rounded shadow-sm" alt="Indoor Sports Facility">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/kids-outdoor-play-area.jpg" class="img-fluid rounded shadow-sm" alt="Kids Outdoor Play Area">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/miyawaki-forest.jpg" class="img-fluid rounded shadow-sm" alt="Miyawaki Forest">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/Conference--Room.webp" class="img-fluid rounded shadow-sm" alt="Conference Room">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/Co-working-Space.webp" class="img-fluid rounded shadow-sm" alt="Co-working Space">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/spa-and-salon.webp" class="img-fluid rounded shadow-sm" alt="Spa and Salon">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/swimming-pool.webp" class="img-fluid rounded shadow-sm" alt="Swimming Pool">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/Yoga-Deck.webp" class="img-fluid rounded shadow-sm" alt="Yoga Deck">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <img src="images/on_going_project/e-library.jpg" class="img-fluid rounded shadow-sm" alt="E-Library">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#amenitiesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#amenitiesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <div class="container mt-4">
    <!-- Heading -->
    <div class="text-center fw-bold fs-4 border-bottom pb-2">PROJECT WALKTHROUGH</div>
    
    <!-- Video Section -->
    <div class="border p-3 bg-white mt-3">
        <div class="ratio ratio-16x9 bg-black">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Eol4yO2DL5M?si=-fnuTApJ8CK0ux3K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>
</section>

<!-- floor_plans sections -->
<body class="bg-dark text-white">

<section id="floor_plans" class="py-5">
    <div class="container text-center py-5">
        <h2 class="fw-bold text-uppercase mb-4">Floor Plans</h2>

        <div class="row justify-content-center g-4">
            <div class="col-md-5">
                <img src="images/on_going_project/3bhk-floor-plan.webp" class="img-fluid rounded shadow-lg border border-light border-2 p-2" 
                     data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openImage('images/on_going_project/3bhk-floor-plan.webp')">
                <p class="mt-2 fs-5 fw-medium">3 BHK</p>
            </div>
            <div class="col-md-5">
                <img src="images/on_going_project/3.5-bhk-floor-plan.png" class="img-fluid rounded shadow-lg border border-light border-2 p-2" 
                     data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openImage('images/on_going_project/3.5-bhk-floor-plan.png')">
                <p class="mt-2 fs-5 fw-medium">3.5 BHK</p>
            </div>
            <div class="col-md-5">
                <img src="images/on_going_project/4.5-bhk-floor-plan.png" class="img-fluid rounded shadow-lg border border-light border-2 p-2" 
                     data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openImage('images/on_going_project/4.5-bhk-floor-plan.png')">
                <p class="mt-2 fs-5 fw-medium">4.5 BHK</p>
            </div>
        </div>

        <button class="btn btn-warning text-white fw-bold px-4 py-2 rounded-pill shadow mt-4"
        onclick="window.location.href='images/on_going_project/SG-TTDXPDXP-Brochure.pdf'" download>
    Download Brochure →
</button>

</section>

<!-- Modal for Fullscreen Image Preview -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark text-white border-0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>

<script>
    function openImage(src) {
        document.getElementById("modalImage").src = src;
    }
</script>

<!-- site plans sections -->
<section id="site_plans" class="py-5 bg-light">
    <div class="container text-center">
        <!-- Title -->
        <h2 class="fw-bold text-uppercase text-dark">Site Plans</h2>

        <!-- Site Plan Images -->
        <div class="d-flex justify-content-center gap-3 mt-3">
            <img src="images/on_going_project/Podium-1-thumb.jpg" class="img-fluid shadow border border-dark p-1" alt="Site Plan 1" style="width: 200px;">
            <img src="images/on_going_project/Podium-2-thumb.png" class="img-fluid shadow border border-dark p-1" alt="Site Plan 2" style="width: 200px;">
        </div>

        <!-- Subtitle -->
        <h4 class="fw-bold text-uppercase mt-4 text-dark">Twin Square: The Retail Hub of Dwarka Expressway</h4>

        <!-- Image & Text Section -->
        <div class="row align-items-center mt-4">
            <div class="col-md-6">
                <img src="images/on_going_project/retails-desktop-min.jpg" class="img-fluid rounded shadow-lg border border-dark p-2" alt="Twin Square">
            </div>
            <div class="col-md-6">
                <p class="text-dark text-start">
                    Discover Twin Square, a premium hub that redefines sophistication by combining luxury shopping, 
                    fine dining, and elite retail spaces. Strategically located in Sector 84, Gurugram, along the 
                    bustling Dwarka Expressway, it boasts a two-side open shopping arcade on a 135-meter-wide corridor 
                    and seamless connectivity to NH8, CPR, SPR, and Golf Course Extension Road. Featuring a standalone 
                    commercial arcade perfect for fine dining, modern trade, grocery, and multi-brand stores, Twin Square 
                    offers front-facing shops on a prime 24-meter road linking directly to the Dwarka expressway—setting 
                    a new standard for convenience and grandeur.
                </p>
            </div>
        </div>
    </div>
</section>

<!--  connectivity sections-->
<section class="position-relative text-white text-center py-5" style="background: url('images/connectivity-bg.jpg') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <div class="container position-relative">
        <h2 class="fw-bold">LOCATION CONNECTIVITY</h2>
        <button class="btn btn-warning mt-3 px-4 py-2">ENQUIRE NOW →</button>
        <p id="info-text" class="mt-4">Dwarka Expressway <br>Providing strategic connectivity to New Delhi & Gurugram</p>

        <div class="row justify-content-center mt-4">
            <div class="col-2 time-circle" data-info="Expressway<br>Providing strategic connectivity to New Delhi & Gurugram">
                <div class="d-flex flex-column justify-content-center align-items-center rounded-circle bg-light text-dark fw-bold" style="width: 80px; height: 80px;">
                    <h4 class="mb-0">0</h4>
                    <p class="mb-0">Mins</p>
                </div>
            </div>
            <div class="col-2 time-circle" data-info="Everything you need<br>Top schools, hospitals, shopping malls, high street arcades and IT hubs">
                <div class="d-flex flex-column justify-content-center align-items-center rounded-circle bg-light text-dark fw-bold" style="width: 80px; height: 80px;">
                    <h4 class="mb-0">5</h4>
                    <p class="mb-0">Mins</p>
                </div>
            </div>
            <div class="col-2 time-circle" data-info="Cloverleaf & SPR<br>Convenient access to key hubs in Gurugram<br>Corporate Hubs<br>Easy access to Udyog Vihar">
                <div class="d-flex flex-column justify-content-center align-items-center rounded-circle bg-light text-dark fw-bold" style="width: 80px; height: 80px;">
                    <h4 class="mb-0">10</h4>
                    <p class="mb-0">Mins</p>
                </div>
            </div>
            <div class="col-2 time-circle" data-info="Cloverleaf & SPR<br>Convenient access to key hubs in Gurugram<br>Corporate Hubs<br>Easy access to Udyog Vihar, proposed Rapid Metro, and RRTS">
                <div class="d-flex flex-column justify-content-center align-items-center rounded-circle bg-light text-dark fw-bold" style="width: 80px; height: 80px;">
                    <h4 class="mb-0">15</h4>
                    <p class="mb-0">Mins</p>
                </div>
            </div>
            <div class="col-2 time-circle" data-info="Corporate Hubs<br>Easy access to Udyog Vihar, proposed Rapid Metro, and RRTS<br>Airport<br>Excellent connectivity to NH-8 and the airport via Dwarka Expressway">
                <div class="d-flex flex-column justify-content-center align-items-center rounded-circle bg-light text-dark fw-bold" style="width: 80px; height: 80px;">
                    <h4 class="mb-0">20</h4>
                    <p class="mb-0">Mins</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $(".time-circle").hover(function(){
            var newText = $(this).data("info");
            $("#info-text").html(newText);
        }, function(){
            $("#info-text").html("Dwarka Expressway <br>Providing strategic connectivity to New Delhi & Gurugram");
        });
    });
</script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>