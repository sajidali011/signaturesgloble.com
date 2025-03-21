<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>city-of-colours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .carousel-inner img {
            width: 100%;
            height: 500px; /* Fixed height for carousel images */
            object-fit: cover;
        }

        .image-container img {
            width: 100%; /* Make images responsive */
            height: 200px; /* Fixed height for gallery images */
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 10px; /* Optional: for rounded corners */
            transition: transform 0.3s ease-in-out; /* Optional: for hover effect */
        }

        .image-container img:hover {
            transform: scale(1.05); /* Optional: for hover effect */
        }

        .info-box {
            text-align: center;
            position: relative;
        }
        .info-box .circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            color: white;
            font-weight: bold;
            font-size: 14px;
        }
        .info-box .line {
            width: 2px;
            height: 30px;
            background-color: currentColor;
            margin: 0 auto;
        }

      
        .card-img-top {
    width: 100%;
    height: 200px; /* Fixed height */
    object-fit: cover; /* Ensures images are properly fitted */
    border-radius: 10px; /* Optional: for smooth rounded corners */
}

/* <!-- Amenities Section --> */

        .circle-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
        }
        .amenity-item {
            text-align: center;
            margin-bottom: 20px;
        }
        .hidden {
            display: none;
        }
        .view-toggle {
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-bottom: 2px solid black;
        }
        .circular-box {
            width: 300px;
            height: 300px;
            top: -90px;
            left: -50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* header section */
        .custom-header {
            position: relative;
            background: #fdf6ef;
            padding: 60px 0 20px;
            text-align: center;
        }
        .custom-header h1 {
            font-weight: bold;
        }
        .yellow-shape {
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 150px;
            background: #f4cf75;
            border-bottom-left-radius: 50%;
        }
        .btn-download {
            position: absolute;
            top: 20px;
            right: 20px;
            background: black;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: bold;
            text-decoration: none;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
            width: 100%;
        }
        .carousel-caption {
    background: rgba(0, 0, 0, 0.5); /* Darker background for better readability */
    color: white;
    padding: 15px;
    border-radius: 8px;
    bottom: 20px;
}
.carousel-caption h5 {
    color: white !important; /* Force white text */
   
}

/* <!-- Location Walkthrough Section -- */
.video-container iframe {
    width: 100%;
    height: 315px;
    border-radius: 10px;
}

.heading {
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    padding-bottom: 10px;
    border-bottom: 3px solid #000;
}

.map-container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}

.map-container img {
    width: 300px;
    border-radius: 50%;
    cursor: pointer;
}


.plus-icon {
    position: absolute;
    top: 20%;  /* Image ke center me lane ke liye */
    left: 60%;
    transform: translate(-50%, -50%); /* Bilkul center align karega */
    background: red;
    color: white;
   
    width: 60px;
    height: 50px;
    text-align: center;
    line-height: 40px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}
</style>
</head>
<body>
<?php include "navbar.php"; ?>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<div class="container text-center mt-5">


    <div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\on_going_project\desk-pink-min.webp" class="d-block w-100" alt="M3M Antalya Hills">
            </div>
            <div class="carousel-item">
                <img src="images\on_going_project\desk-sunflower-min.webp" class="d-block w-100" class="d-block w-100" alt="M3M Antalya Hills">
            </div>
            <div class="carousel-item">
                <img src="images\on_going_project\desk-blue-min.webp" class="d-block w-100" class="d-block w-100" alt="M3M Antalya Hills">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
            <div class="info-box">
                <div class="circle bg-danger"></div>
                <div class="line" style="background-color: red;"></div>
                <p><strong>TOWNSHIP WITH 360 DEGREE APPROACH</strong></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="info-box">
                <div class="circle bg-warning"></div>
                <div class="line" style="background-color: yellow;"></div>
                <p><strong>CLUB HOUSE SPREAD ACROSS 2 ACRES</strong><br><small>(Approx. 8093.71* SQ. MTR.)</small></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="info-box">
                <div class="circle bg-success"></div>
                <div class="line" style="background-color: green;"></div>
                <p><strong>52 ACRES</strong><br><small>(210437* SQ. MTR.)</small><br>OF OPEN & GREEN AREA</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="info-box">
                <div class="circle bg-info"></div>
                <div class="line" style="background-color: blue;"></div>
                <p><strong>STRATEGICALLY LOCATED ON NH-8</strong></p>
            </div>
        </div>
    </div>
</div>


<div class="container my-5 text-center">
    <h2 class="fw-bold">A TOWNSHIP BUILT FOR EVERY PURPOSE</h2>
    <div class="position-relative d-inline-block">
        <img src="images/on_going_project/township-desktop-min.png" class="img-fluid rounded" alt="Township">
        
        <!-- Circular Box -->
        <div class="position-absolute bg-success text-white rounded-circle d-flex flex-column align-items-center justify-content-center text-center p-4"
            style="width: 250px; height: 250px; bottom: -30px; right: -30px; max-width: 100%;">
            <strong>129 ACRES</strong><br>
            (522044 sq. mtr.)<br>
            Gated Township<br>
            with Tranquil Greenery &<br>
            Exclusive Clubhouse
        </div>
    </div>
</div>

    
    <h3 style="margin-left:20px;">IT'S A FASCINATING WORLD IN ITSELF WITH</h3>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card">
                <img src="images\on_going_project\ResidentialPlots.webp" class="card-img-top" alt="Residential">
                <div class="card-body text-center">
                    <strong>Residential Plots</strong>
                    <p>Ranging from 125 sq. yd to 180 sq. yd</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images\on_going_project\indestrialarea.jpg" class="card-img-top" alt="Industrial">
                <div class="card-body text-center">
                    <strong>Industrial Plots</strong>
                    <p>Ranging from 400 sq.m to 2100 sq.m</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images\on_going_project\Signum-plaza-93-min.webp" class="card-img-top" alt="Commercial">
                <div class="card-body text-center">
                    <strong>Commercial Plots</strong>
                    <p>Spread across 10 acres (Approx. 7493 sq.m)</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-5 text-center">
    <!-- Stylish Heading Outside Circle -->
    <h2 class="fw-bold position-relative d-inline-block" style="z-index: 2; background: white; padding: 10px 20px; border-radius: 10px;">
        A HUB FOR RELAXATION
    </h2>
    
    <h3 class="fw-bold">AND TOGETHERNESS</h3>
    <p>Unwind, socialize and enjoy the enhanced lifestyle</p>

    <div class="position-relative d-inline-block mt-3">
        <img src="images/on_going_project/club-min.jpg" class="img-fluid rounded" alt="Township">

        <!-- Circular Box (Top-Left) -->
        <div class="position-absolute bg-success text-white rounded-circle d-flex flex-column align-items-center justify-content-center text-center p-4"
            style="width: 300px; height: 300px; top: -90px; left: -50px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
            <strong>A HUB FOR RELAXATION</strong><br>
            AND TOGETHERNESS<br>
            Unwind, socialize and enjoy the enhanced lifestyle 
        </div>
    </div>
</div>

<!-- Amenities Section -->
<div class="container text-center py-5">
    <div class="row justify-content-center">
        <div class="col-md-2 col-4 amenity-item">
            <img src="images\on_going_project\badminton-court-min.png" alt="Badminton Court" class="circle-img">
            <p>Badminton Court</p>
        </div>
        <div class="col-md-2 col-4 amenity-item">
            <img src="images\on_going_project\Mini-Theatre-min.png" alt="Mini Theatre" class="circle-img">
            <p>Mini Theatre</p>
        </div>
        <div class="col-md-2 col-4 amenity-item">
            <img src="images\on_going_project\Miyawaki-forest-min.png" alt="Miyawaki Forest" class="circle-img">
            <p>Miyawaki Forest</p>
        </div>
        <div class="col-md-2 col-4 amenity-item">
            <img src="images\on_going_project\outdoor-gym-min.png" alt="Outdoor Gym" class="circle-img">
            <p>Outdoor Gym</p>
        </div>
        <div class="col-md-2 col-4 amenity-item">
            <img src="images\on_going_project\pet-park-min.png" alt="Pet Park" class="circle-img">
            <p>Pet Park</p>
        </div>
  
    <div class="col-md-2 col-4 amenity-item">
            <img src="images\on_going_project\residential-community-park-min.png" alt="Pet Park" class="circle-img">
            <p>Residents Community Park</p>
        </div>
    </div>
    </div>


    <!-- Header Section -->
<div class="custom-header">
    <h1>A FEW GLIMPSES OF LANDSCAPED DESIGNS</h1>
    <p>Embrace Serenity In The Glimpses</p>
    <div class="yellow-shape"></div>
    <a href="https://www.signatureglobal.in/micrositeassets/coc/COC-Sidhrawali-Brochure.pdf" class="btn-download">DOWNLOAD BROCHURE</a>
</div>

<!-- Bootstrap Carousel -->
<div id="imageCarousel" class="carousel slide container mt-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/on_going_project/Kids-Play-Area.jpg" class="d-block w-100" alt="Kids Play Area">
            <div class="carousel-caption">
                <h5>Kids Play Area</h5>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/on_going_project/Library.jpg" class="d-block w-100" alt="Library">
            <div class="carousel-caption">
                <h5>Library</h5>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/on_going_project/Multipurpose-Hall.jpg" class="d-block w-100" alt="Multipurpose Hall">
            <div class="carousel-caption">
                <h5>Multipurpose Hall</h5>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/on_going_project/city-of-colours-daytime-ariel-view.jpg" class="d-block w-100" alt="City of Colours">
            <div class="carousel-caption">
                <h5>City of Colours - Day View</h5>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/on_going_project/city-of-colours-nighttime-ariel-view.jpg" class="d-block w-100" alt="City of Colours Night View">
            <div class="carousel-caption">
                <h5>City of Colours - Night View</h5>
            </div>
        </div>
    </div>

    <!-- Previous & Next Buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

     <!-- Township & Location Walkthrough Section -->
<div class="container mt-4">
    <div class="row text-center">
        <!-- Township Walkthrough -->
        <div class="col-md-6">
            <h2 class="heading">TOWNSHIP WALKTHROUGH</h2>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/TUvP15tLFBc?si=g6CH1gF3q0iRPe99" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Location Walkthrough -->
        <div class="col-md-6">
            <h2 class="heading">LOCATION WALKTHROUGH</h2>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/B5EycjI6BVs?si=uAk8EDhC6nW8cXlK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="container text-center mt-4">
    <h2 class="heading">SITE PLAN</h2>
    <div class="map-container">
        <img src="images/on_going_project/site-plan-HD.jpg" alt="Site Map" data-bs-toggle="modal" data-bs-target="#mapModal">
        <div class="plus-icon" data-bs-toggle="modal" data-bs-target="#mapModal">+</div>
    </div>
</div>

<!-- Modal for Map -->
<div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Full Map View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="images/on_going_project/site-plan-HD.jpg" alt="Full Map" class="img-fluid">
            </div>
        </div>
    </div>
</div>




<div class="container mt-5 text-center">
    <h2 class="fw-bold">Well-connected to opportunity and a promising future</h2>
    <h4 class="text-secondary">Perfectly Situated For Growth And Opportunity</h4>

    <div class="row mt-4">
        <!-- 8 Cards with Icons -->
        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="border bg-light p-3 rounded">
                <i class="bi bi-book fs-1 text-primary"></i>
                <p class="fw-bold text-dark">Schools & Colleges Nearby</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="border bg-light p-3 rounded">
                <i class="bi bi-hospital fs-1 text-danger"></i>
                <p class="fw-bold text-dark">Hospitals & Healthcare</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="border bg-light p-3 rounded">
                <i class="bi bi-bag fs-1 text-success"></i>
                <p class="fw-bold text-dark">Shopping & Malls</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="border bg-light p-3 rounded">
                <i class="bi bi-tree fs-1 text-warning"></i>
                <p class="fw-bold text-dark">Parks & Recreation</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="border bg-light p-3 rounded">
                <i class="bi bi-bus-front fs-1 text-info"></i>
                <p class="fw-bold text-dark">Public Transport</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="border bg-light p-3 rounded">
                <i class="bi bi-cup fs-1 text-secondary"></i>
                <p class="fw-bold text-dark">Restaurants & Cafes</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="border bg-light p-3 rounded">
                <i class="bi bi-briefcase fs-1 text-dark"></i>
                <p class="fw-bold text-dark">Business Hubs</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="border bg-light p-3 rounded">
                <i class="bi bi-music-note-beamed fs-1 text-primary"></i>
                <p class="fw-bold text-dark">Entertainment Centers</p>
            </div>
        </div>
    </div>
</div>


<div class="container text-center py-5">
    <h2 class="fw-bold">THE PROXIMITY OF</h2>
    <h2 class="fw-bold">PERPETUAL PROGRESS</h2>

    <div class="mt-4">
        <img src="images\on_going_project/location-map.png" class="img-fluid" alt="Proximity of Perpetual Progress">
    </div>
</div>


<div class="container text-center py-5">
    <h2 class="fw-bold">MEET THE TEAM OF</h2>
    <h2 class="fw-bold">ACCLAIMED VETERANS WHO HAVE</h2>
    <h2 class="fw-bold">ENVISIONED THIS MAGNUM OPUS</h2>

    <div class="row mt-5 justify-content-center">
        <!-- Company 1 -->
        <div class="col-md-2 col-sm-6 text-center">
            <img src="images\on_going_project/aedas.png" class="img-fluid mb-2" alt="Aedas Logo">
            <p class="fw-bold">Master Planning by <br> AEDAS Singapore</p>
        </div>

        <!-- Separator -->
        <div class="col-md-1 d-none d-md-block">
            <div class="vr" style="height: 100%; width: 2px; background-color: black;"></div>
        </div>

        <!-- Company 2 -->
        <div class="col-md-2 col-sm-6 text-center">
            <img src="images\on_going_project/sanelac.png" class="img-fluid mb-2" alt="Sanelac Logo">
            <p class="fw-bold">SANELAC - <br> MEP Consultant</p>
        </div>

        <!-- Separator -->
        <div class="col-md-1 d-none d-md-block">
            <div class="vr" style="height: 100%; width: 2px; background-color: black;"></div>
        </div>

        <!-- Company 3 -->
        <div class="col-md-2 col-sm-6 text-center">
            <img src="images\on_going_project/gian-p-mathur.png" class="img-fluid mb-2" alt="GPM Logo">
            <p class="fw-bold">Gain P. Mathur - <br> Resident Architect</p>
        </div>

        <!-- Separator -->
        <div class="col-md-1 d-none d-md-block">
            <div class="vr" style="height: 100%; width: 2px; background-color: black;"></div>
        </div>

        <!-- Company 4 -->
        <div class="col-md-2 col-sm-6 text-center">
            <img src="images\on_going_project/nmp-design.png" class="img-fluid mb-2" alt="NMP Design Logo">
            <p class="fw-bold">NMP Designs - <br> Resident Landscape Architect</p>
        </div>

        <!-- Separator -->
        <div class="col-md-1 d-none d-md-block">
            <div class="vr" style="height: 100%; width: 2px; background-color: black;"></div>
        </div>

        <!-- Company 5 -->
        <div class="col-md-2 col-sm-6 text-center">
            <img src="cooperhills.jpg" class="img-fluid mb-2" alt="Coopers Hill Logo">
            <p class="fw-bold">Landscape Consultant - <br> COOPERHILLS from Singapore</p>
        </div>
    </div>
</div>
<p>&nbsp;</p>
<?php include 'footer.php'; ?>
</body>
</html>