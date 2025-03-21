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
#gallery {
    background: linear-gradient(135deg, #FDC830, #F37335); /* Yellow to Orange */
}

#amenities {
    background: linear-gradient(135deg, #89F7FE, #66A6FF); /* Cyan to Blue */
}

#connectivity {
    background: linear-gradient(135deg, #FF9A9E, #FAD0C4); /* Light Pink to Peach */
}

#sitemap {
    background: linear-gradient(135deg, #84FAB0, #8FD3F4); /* Mint Green to Sky Blue */
}

#benefits {
    background: linear-gradient(135deg, #FF6A88, #FF99AC); /* Coral Red to Pink */
}

#location {
      background: linear-gradient(180deg, #CBD7A3, #9FB483) !important; /* Light Green Gradient */
      padding: 60px 0; /* Extra Padding */
    }


/* Ensure each section has padding for better spacing */
section {
    padding: 80px 20px; /* Consistent padding for all sections */
    color: #fff; /* White text for better contrast */
    border-radius: 12px; /* Smooth rounded corners for modern look */
}
        html {
            scroll-behavior: smooth; /* Smooth scrolling effect */
        }

        section {
            min-height: 100vh; /* Ensure full section height */
            padding: 100px 0; /* Add space above and below */
            position: relative; /* Ensure no overlap */
            z-index: 1;
        }

        #overview {
           color: #000; /* Black text for better contrast */
        }

        .full-screen-img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure image fits */
        }

        /* Amenities Section Styling */
        .amenities-section {
            padding: 80px 0;
        }

        .amenities-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .amenity-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
        }

        .amenity-item i {
            font-size: 28px;
            color: #2c3e50; /* Icon color */
        }

/* Add-On Benefits Section */
        .wave-line {
            border-top: 2px dashed #333;
            position: absolute;
            width: 100%;
            top: 50%;
            left: 0;
        }

        .circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-weight: bold;
            margin: 20px auto;
            color: black !important;
        }

        .circle-primary { background-color: #eed8c5; }
        .circle-secondary { background-color: #f3f8ed; }

        .circle-container {
            position: relative;
            margin-top: 100px;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="80" tabindex="0">

    <!-- Navigation Bar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Siyom tvasta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#overview">OVERVIEW</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">GALLERY</a></li>
                    <li class="nav-item"><a class="nav-link" href="#amenities">AMENITIES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#connectivity">CONNECTIVITY</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sitemap">SITE MAP</a></li>
                    <li class="nav-item"><a class="nav-link" href="#benefits">ADD-ON BENEFITS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#location">LOCATION MAP</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="bg-light">
        <img src="images/on_going_project/daxin-web.jpg" alt="Home Image" class="full-screen-img">
    </section>
    <!-- Overview Section -->
    <section id="overview">
        <img src="images/on_going_project/overview.png" alt="Overview Image" class="full-screen-img">
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="bg-light">
        <div class="container py-5">
            <h2 class="text-center mb-3">GALLERY</h2>
            <p class="text-center mb-5">MULTIPLY OPPORTUNITIES TO INVEST</p>

            <div class="row align-items-center">
                <!-- Image Slider -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/on_going_project/gallery1-min.webp" class="d-block w-100 rounded" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/on_going_project/gallery2-min.webp" class="d-block w-100 rounded" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/on_going_project/gallery3-min.webp" class="d-block w-100 rounded" alt="Slide 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <!-- Static Image -->
                <div class="col-lg-6 text-center">
                    <img src="multiple-min.webp" class="img-fluid rounded" alt="Static Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Amenities Section -->
    <section id="amenities" class="amenities-section">
    <div class="container">
            <h2>AMENITIES</h2>
            <p class="text-center">DIVIDE TIME BETWEEN WORK & LEISURE</p>

            <div class="row align-items-center">
                <!-- Left Side: Amenities List -->
                <div class="col-lg-6">
                    <div class="amenities-list">
                        <div class="amenity-item"><i class="fas fa-building"></i> Luxe Club House</div>
                        <div class="amenity-item"><i class="fas fa-door-open"></i> Double Height Entrance Lobby</div>
                        <div class="amenity-item"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                        <div class="amenity-item"><i class="fas fa-dumbbell"></i> Gymnasium</div>
                        <div class="amenity-item"><i class="fas fa-spa"></i> Spa & Salon</div>
                        <div class="amenity-item"><i class="fas fa-chair"></i> Outdoor Seating</div>
                        <div class="amenity-item"><i class="fas fa-tree"></i> Recessed Park</div>
                        <div class="amenity-item"><i class="fas fa-theater-masks"></i> Mini Theatre</div>
                        <div class="amenity-item"><i class="fas fa-laptop-house"></i> Co-Working Space</div>
                        <div class="amenity-item"><i class="fas fa-users"></i> Conference Room</div>
                        <div class="amenity-item"><i class="fas fa-book"></i> E-Library</div>
                        <div class="amenity-item"><i class="fas fa-yin-yang"></i> Yoga Deck</div>
                        <div class="amenity-item"><i class="fas fa-seedling"></i> Reflexology Garden</div>
                        <div class="amenity-item"><i class="fas fa-gamepad"></i> Games Arena</div>
                        <div class="amenity-item"><i class="fas fa-tshirt"></i> Laundromat</div>
                        <div class="amenity-item"><i class="fas fa-user-md"></i> Doctor's Room</div>
                        <div class="amenity-item"><i class="fas fa-birthday-cake"></i> Kids Party Area</div>
                        <div class="amenity-item"><i class="fas fa-running"></i> Jogging Track</div>
                        <div class="amenity-item"><i class="fas fa-child"></i> Outdoor Kids Play Area</div>
                        <div class="amenity-item"><i class="fas fa-walking"></i> Walking Pathway</div>
                    </div>
                </div>

                <!-- Right Side: Image -->
                <div class="col-lg-6 text-center">
                    <img src="images/on_going_project/Divide-min.webp" alt="Amenities Image" class="img-fluid rounded">
                </div>
            </div>
        </div>  
    </section>

    <section id="connectivity" class="bg-light"> 
  
    <div class="container text-center">
    <h2 class="fw-bold mb-3">LOCATION CONNECTIVITY</h2>
    <p class="text-muted mb-5">SUBTRACT STRESS FROM YOUR LIFE</p>

    <div class="row justify-content-center align-items-center">
        <!-- Item 1 -->
        <div class="col-6 col-md-2 mb-4">
            <div class="rounded-circle bg-secondary text-white p-4 mx-auto" style="width: 100px; height: 100px;">
                <i class="fas fa-route fa-2x"></i>
            </div>
            <h5 class="mt-3">RIGHT ON</h5>
            <p>DELHI-MUMBAI INDUSTRIAL CORRIDOR</p>
        </div>

        <!-- Item 2 -->
        <div class="col-6 col-md-2 mb-4">
            <div class="rounded-circle bg-danger text-white p-4 mx-auto" style="width: 100px; height: 100px;">
                <i class="fas fa-car fa-2x"></i>
            </div>
            <h5 class="mt-3">HASSLE-FREE DRIVE</h5>
            <p>VIA GURUGRAM SOHNA ELEVATED ROAD</p>
        </div>

        <!-- Item 3 -->
        <div class="col-6 col-md-2 mb-4">
            <div class="rounded-circle bg-warning text-white p-4 mx-auto" style="width: 100px; height: 100px;">
                <i class="fas fa-golf-ball fa-2x"></i>
            </div>
            <h5 class="mt-3">8 KM</h5>
            <p>TO GOLF COURSE ROAD EXTN.</p>
        </div>

        <!-- Item 4 -->
        <div class="col-6 col-md-2 mb-4">
            <div class="rounded-circle bg-info text-white p-4 mx-auto" style="width: 100px; height: 100px;">
                <i class="fas fa-road fa-2x"></i>
            </div>
            <h5 class="mt-3">11 KM</h5>
            <p>TO SUBHASH CHOWK</p>
        </div>

        <!-- Item 6 -->
        <div class="col-6 col-md-2 mb-4">
            <div class="rounded-circle bg-success text-white p-4 mx-auto" style="width: 100px; height: 100px;">
                <i class="fas fa-building fa-2x"></i>
            </div>
            <h5 class="mt-3">13 KM</h5>
            <p>TO RAJIV CHOWK</p>
        </div>

        <!-- Item 7 -->
        <div class="col-6 col-md-2 mb-4">
            <div class="rounded-circle bg-dark text-white p-4 mx-auto" style="width: 100px; height: 100px;">
                <i class="fas fa-plane fa-2x"></i>
            </div>
            <h5 class="mt-3">30 KM</h5>
            <p>TO IGI AIRPORT</p>
        </div>
    </div>
</div>

</section>
<section id="sitemap"> 
<div class="container text-center my-5">
        <h2 class="mb-4">DAXIN SITE MAP</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="images\on_going_project/plotplanimg2-min.webp" alt="DAXIN Site Map" class="img-fluid rounded shadow">
            </div>
        </div>

        <div class="mt-4">
            <a href="images\on_going_project/SG-Daxin_Brochure.pdf" download class="btn btn-success">Download Brochure</a>
        </div>
    </div>

</section>
<section id="benefits" class="bg-light"> 
<div class="container text-center mt-5">
        <div class="position-relative circle-container">
            <div class="wave-line"></div>

            <div class="row">
                <div class="col-md-2 offset-md-1">
                    <div class="circle circle-primary">JOB CREATION</div>
                </div>
                <div class="col-md-2">
                    <div class="circle circle-secondary">ATTRACT INVESTMENTS</div>
                </div>
                <div class="col-md-2">
                    <div class="circle circle-secondary">IMPROVED PUBLIC SERVICES</div>
                </div>
                <div class="col-md-2">
                    <div class="circle circle-primary">DIVERSE COMMUNITY</div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-2 offset-md-2">
                    <div class="circle circle-secondary">LOCAL BUSINESS GROWTH</div>
                </div>
                <div class="col-md-2">
                    <div class="circle circle-primary">MODERN FACILITIES</div>
                </div>
                <div class="col-md-2">
                    <div class="circle circle-secondary">IMPROVED QUALITY OF LIFE</div>
                </div>
                <div class="col-md-2">
                    <div class="circle circle-secondary">INCREASED PROPERTY VALUE</div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="location" class="py-5">
    <div class="container text-center">

      <!-- Heading -->
      <h2 class="fw-bold mb-3" style="font-family: 'Playfair Display', serif; color: #000; font-size: 2.5rem;">
        ADD CONVENIENCE
      </h2>

      <!-- Paragraph -->
      <p class="mb-4" style="font-family: 'Poppins', sans-serif; color: #000; font-size: 1.1rem;">
        Nestled in a location that's embraced by landmarks, DaXin personifies the hallmark of connectivity.
        Commute hassle-free and spend time at home care free.
      </p>

      <!-- Map Image with Link -->
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <a href="images/on_going_project/map thumbnail-min.png" target="_blank">
            <img src="images/on_going_project/map thumbnail-min.png" alt="Daxin Map" class="img-fluid rounded-4" />
          </a>
        </div>
      </div>

    </div>
  </section>


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
