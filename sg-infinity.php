<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Global Infinity Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
       html {
    scroll-behavior: smooth;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.6) !important; /* Transparent black */
    z-index: 1000;
}

.navbar a {
    color: white;
}

section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 80px; /* Navbar ki height ke barabar */
}

.carousel-item {
    height: 100vh;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container, .row {
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
}



        .navbar a {
            color: white;
        }
        .carousel-caption {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: none; /* Background ko fully transparent kiya */
    padding: 20px;
    border-radius: 10px;
    color: white; /* Text ka color white rakha for visibility */
}

.carousel-caption {
    position: absolute;
    bottom: 20px; /* Position captions at the bottom */
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    padding: 10px; /* Add padding for better visibility */
}

@media (max-width: 768px) {
    .carousel-caption {
        font-size: 0.8rem; /* Smaller font size for mobile */
        padding: 5px; /* Less padding for mobile */
    }
}
        
        #brands {
        background: #f8f9fa;
        overflow: hidden;
        padding-bottom: 20px;
    }

    .marquee-wrapper {
        position: relative;
        width: 800px; /* 5 images visible */
        overflow: hidden;
        margin: auto;
    }

    .marquee {
        display: flex;
        width: fit-content;
        gap: 20px;
        animation: marquee 27s linear infinite; /* Smooth continuous loop */
    }

    .marquee-content {
        display: flex;
        gap: 20px;
    }

    .marquee img {
        width: 150px;
        height: auto;
        padding: 10px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease-in-out;
    }

    /* Hover Effect */
    .marquee img:hover {
        transform: scale(1.2);
    }

    /* Continuous Loop Animation */
    @keyframes marquee {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
    }

    .full-screen-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    
     /* Inline styles for mobile responsiveness */
     @media (max-width: 768px) {
        .full-screen-section {
            height: auto; /* Allow height to adjust based on content */
        }

        .col-md-6 {
            flex: 0 0 100%; /* Make columns stack on smaller screens */
            max-width: 100%;
        }

        .text-dark {
            padding: 20px; /* Add padding for mobile */
        }
    }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
    <div class="container">
        <!-- Logo on the Left -->
        <a class="navbar-brand" href="#">
            <img src="images/commercial/Infinity-mall.png" alt="Signature Global Logo" height="50">
        </a>
        
        <!-- Navbar Toggler for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#shopping-zone">Shopping Zone</a></li>
                <li class="nav-item"><a class="nav-link" href="#entertainment">Entertainment</a></li>
                <li class="nav-item"><a class="nav-link" href="#play-zone">Play Zone</a></li>
                <li class="nav-item"><a class="nav-link" href="#foodZoneCarousel">Food Zone</a></li>
                <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
                <li class="nav-item"><a class="nav-link" href="#brands">Brands</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Shopping Zone Section -->
<div id="shopping-zone" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/commercial/pexels-tuurt-2954405.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption">
                <h2 style="text-align: center;">The Pursuit Of Perfection TO BRING YOU THE BEST.</h2>
                <p style="text-align: center;">Park yourself to the ultimate shopping experience. We have designed spacious</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/commercial/pexels-rdne-6785034.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption">
                <h2 style="text-align: center;">The Pursuit Of Perfection TO BRING YOU THE BEST.</h2>
                <p style="text-align: center;">Park yourself to the ultimate shopping experience. We have designed spacious</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/commercial/pexels-cottonbro-6069089.jpg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption">
                <h2 style="text-align: center;">The Pursuit Of Perfection TO BRING YOU THE BEST.</h2>
                <p style="text-align: center;">Park yourself to the ultimate shopping experience. We have designed spacious</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#shopping-zone" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#shopping-zone" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Entertainment Section -->
<div id="entertainment" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/commercial/pexels-pavel-danilyuk-7234308.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption">
                <h4>Walk On The Fourth Heaven Of</h4>
                <h2>ENTERTAINMENT</h2>
                <h6 style="text-align: center;">Multiplexes and restaurants on the fourth floor. For a blockbuster blend of movies and refreshments</h6>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/commercial/pexels-cottonbro-5780769.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption">
                <h4>Walk On The Fourth Heaven Of</h4>
                <h2>ENTERTAINMENT</h2>
                <h6 style="text-align: center;">Multiplexes and restaurants on the fourth floor. For a blockbuster blend of movies and refreshments</h6>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#entertainment" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#entertainment" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Play Zone Section -->
<div id="play-zone" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/commercial/pexels-cottonbro-5767684.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption">
                <h2 style="text-align: center;">SHOP. PLAY. RELAX. SOCIALIZE. REPEAT.</h2>
                <p style="text-align: center;">Here, there is something for everyone. Get elevated to a smashingly sporting zone at the third floor with an enticing food court.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/commercial/pexels-tuan-vy-903011268-29409117.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption">
                <h2 style="text-align: center;">SHOP. PLAY. RELAX. SOCIALIZE. REPEAT.</h2>
                <p style="text-align: center;">Here, there is something for everyone. Get elevated to a smashingly sporting zone at the third floor with an enticing food court.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#play-zone" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#play-zone" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Food Zone Section -->
<div id="foodZoneCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/commercial/pexels-chanwalrus-958545.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption">
                <h2 style="text-align: center; color:white; font-weight: 700;">Court the GOURMAND IN YOU.</h2>
                <p style="text-align: center; color:white;font-weight: 700;">With the best restaurants and food joints serving delicacies from assorted cuisines; this is where the connoisseur in you is royally indulged.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/commercial/pexels-jack-baghel-2199968-20408456.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption">
                <h2 style="text-align: center; color:white; font-weight: 700;">Court the GOURMAND IN YOU.</h2>
                <p style="text-align: center; color:white; font-weight: 700;">With the best restaurants and food joints serving delicacies from assorted cuisines; this is where the connoisseur in you is royally indulged.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#foodZoneCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#foodZoneCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Location Section (Full Screen) -->
<section id="location" class="full-screen-section" style="margin-top: -80px;">
    <div class="container-fluid">
        <div class="row g-0" style="height: auto;"> <!-- Allow height to adjust based on content -->
            <!-- Left Side Image -->
            <div class="col-md-6 p-0 d-flex align-items-stretch">
                <img src="images/commercial/map2.jpg" class="img-fluid w-100 rounded" 
                     alt="Location Map" style="height: 100vh; object-fit: cover; cursor: pointer;" 
                     data-bs-toggle="modal" data-bs-target="#imageModal">
            </div>
            
            <!-- Right Side Content -->
            <div class="col-md-6 p-4 text-dark d-flex flex-column justify-content-center align-items-start" 
                 style="background-color: #6daba0; height: auto;"> <!-- Remove fixed height -->
                <h4 class="fw-bold">A Global Hub</h4>
                <h5>AT A HAPPENING LOCAL SPOT</h5>
                <p>
                    Just where Mumbai-Delhi Expressway starts, Infinity stands as a tall landmark in South of Gurugram. 
                    “It’s a class by itself” when measured on Livability Index, including connectivity, advanced infrastructure 
                    and facilities. There is nothing like it in the neighbourhood, catering to more than 5 lakh affluent 
                    families and skilled professionals working here; providing them with upscale retail and entertainment 
                    experiences. Adding feathers to the Infinity cap are the following infrastructure supports to Infinity, 
                    making it truly a shoppers’ paradise:
                </p>
                <ul class="ps-3">
                    <li>📌 Located on Sohna Road, which will soon be a part of an upcoming 5-km long, six-lane elevated road from Rajiv Chowk on NH8 to Badshahpur.</li>
                    <li>📌 The neighbourhood is the fastest growing space of the city region surrounded by various residential projects (including those by Signature Global), schools, universities, hotels, and hospitals.</li>
                    <li>📌 Situated on the Golden Spine of Indian Infrastructure, with Delhi-Mumbai Freight Corridor’s first phase to be operational by March 2022.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal for Image -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Signature Global SCO 37D</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/commercial/map2.jpg" class="img-fluid" alt="Location Map">
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Modal for Image -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Signature Global SCO 37D</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/commercial/map2.jpg" class="img-fluid" alt="Location Map">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Explore Section (Full Screen) -->
<section id="explore" class="full-screen-section bg-dark text-white">
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <h2 class="display-4 mb-4">Explore Our Location</h2>
        <p class="mb-5">Take a virtual tour and discover our shopping mall.</p>

       

        <!-- YouTube Videos Row -->
        <div class="row w-100">
            <div class="col-md-6 d-flex justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ntkphKb35Ag?si=QwzlxoHQvUEuqHKz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CAkngkyH084?si=ynk0Lpk4vp66dlIx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>


<!-- Floor Plans Section -->
<section id="floor-plans" class="py-5 text-center bg-dark text-white">
    <div class="container">
        <h2 class="display-4 mb-4">Floor Plans</h2>
        
        <!-- Carousel Container -->
        <div id="floorPlansCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Slide (2 Images) -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <img src="images/commercial/s3.jpg" class="d-block w-100 img-fluid rounded"
                                style="max-width: 80%; max-height: 280px; margin: auto; cursor: pointer;"
                                alt="First Floor" data-bs-toggle="modal" data-bs-target="#imageModal"
                                onclick="changeModalImage('images/commercial/s3.jpg')">
                            <p class="mt-4 fs-4">First Floor</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/commercial/s4.jpg" class="d-block w-100 img-fluid rounded"
                                style="max-width: 80%; max-height: 280px; margin: auto; cursor: pointer;"
                                alt="Second Floor" data-bs-toggle="modal" data-bs-target="#imageModal"
                                onclick="changeModalImage('images/commercial/s4.jpg')">
                            <p class="mt-4 fs-4">Second Floor</p>
                        </div>
                    </div>
                </div>

                <!-- Second Slide (2 Images) -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <img src="images/commercial/s5.jpg" class="d-block w-100 img-fluid rounded"
                                style="max-width: 80%; max-height: 280px; margin: auto; cursor: pointer;"
                                alt="Third Floor" data-bs-toggle="modal" data-bs-target="#imageModal"
                                onclick="changeModalImage('images/commercial/s5.jpg')">
                            <p class="mt-4 fs-4">Third Floor</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/commercial/s7.jpg" class="d-block w-100 img-fluid rounded"
                                style="max-width: 80%; max-height: 280px; margin: auto; cursor: pointer;"
                                alt="Fourth Floor" data-bs-toggle="modal" data-bs-target="#imageModal"
                                onclick="changeModalImage('images/commercial/s7.jpg')">
                            <p class="mt-4 fs-4">Fourth Floor</p>
                        </div>
                    </div>
                </div>

                <!-- Third Slide (2 Images) -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <img src="images/commercial/s1.jpg" class="d-block w-100 img-fluid rounded"
                                style="max-width: 80%; max-height: 280px; margin: auto; cursor: pointer;"
                                alt="Fifth Floor" data-bs-toggle="modal" data-bs-target="#imageModal"
                                onclick="changeModalImage('images/commercial/s1.jpg')">
                            <p class="mt-4 fs-4">Lower Ground Floor</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/commercial/s2.jpg" class="d-block w-100 img-fluid rounded"
                                style="max-width: 80%; max-height: 280px; margin: auto; cursor: pointer;"
                                alt="Sixth Floor" data-bs-toggle="modal" data-bs-target="#imageModal"
                                onclick="changeModalImage('images/commercial/s2.jpg')">
                            <p class="mt-4 fs-4">Upper Ground Floor</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#floorPlansCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#floorPlansCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>




<!-- Brands Section -->
<div class="container text-center py-5" id="brands">
    <h2 class="fw-bold">Brands with us</h2>
    <h5 class="text-muted">Country's leading brands are associated with Signature Global Infinity</h5>

    <!-- First Marquee -->
    <div class="marquee-wrapper">
        <div class="marquee">
            <div class="marquee-content">
                <img src="images/commercial/Chai-thela.png" alt="Brand 1">
                <img src="images/commercial/Dutyfree.png" alt="Brand 2">
                <img src="images/commercial/bbq.png" alt="Brand 3">
                <img src="images/commercial/Cineport.png" alt="Brand 4">
                <img src="images/commercial/Cosmiston.png" alt="Brand 5">
                <img src="images/commercial/Mastizone.png" alt="Brand 6">
                <img src="images/commercial/Bercos.png" alt="Brand 7">
                <img src="images/commercial/Hello-vr-park.png" alt="Brand 8">
                <img src="images/commercial/VFC.png" alt="Brand 9">
            </div>
            <div class="marquee-content">
                <img src="images/commercial/Chai-thela.png" alt="Brand 1">
                <img src="images/commercial/Dutyfree.png" alt="Brand 2">
                <img src="images/commercial/bbq.png" alt="Brand 3">
                <img src="images/commercial/Cineport.png" alt="Brand 4">
                <img src="images/commercial/Cosmiston.png" alt="Brand 5">
                <img src="images/commercial/Mastizone.png" alt="Brand 6">
                <img src="images/commercial/Bercos.png" alt="Brand 7">
                <img src="images/commercial/Hello-vr-park.png" alt="Brand 8">
                <img src="images/commercial/VFC.png" alt="Brand 9">
            </div>
        </div>
    </div>

    <!-- Space Between Two Marquees -->
    <div style="height: 30px;"></div>

    <!-- Second Marquee -->
    <div class="marquee-wrapper">
        <div class="marquee">
            <div class="marquee-content">
                <img src="images/commercial/Jockey.png" alt="Brand 1">
                <img src="images/commercial/Woodland.png" alt="Brand 2">
                <img src="images/commercial/Power.png" alt="Brand 3">
                <img src="images/commercial/Spykar.png" alt="Brand 4">
                <img src="images/commercial/Vitamin-kids.png" alt="Brand 5">
                <img src="images/commercial/Biba.png" alt="Brand 6">
                <img src="images/commercial/W.png" alt="Brand 7">
                <img src="images/commercial/Adidas.png" alt="Brand 8">
                <img src="images/commercial/Reebok.png" alt="Brand 9">
            </div>
            <div class="marquee-content">
                <img src="images/commercial/Jockey.png" alt="Brand 1">
                <img src="images/commercial/Woodland.png" alt="Brand 2">
                <img src="images/commercial/Power.png" alt="Brand 3">
                <img src="images/commercial/Spykar.png" alt="Brand 4">
                <img src="images/commercial/Vitamin-kids.png" alt="Brand 5">
                <img src="images/commercial/Biba.png" alt="Brand 6">
                <img src="images/commercial/W.png" alt="Brand 7">
                <img src="images/commercial/Adidas.png" alt="Brand 8">
                <img src="images/commercial/Reebok.png" alt="Brand 9">
            </div>
        </div>
    </div>
</div>

<!-- Disclaimer Section -->
<div style="background-color: #6b8c8a; color: white; padding: 20px;"> <!-- Added margin-bottom: 0; -->
    <div class="container">
        <p style="font-weight: bold;">Disclaimer</p>
        <p style="font-size: 14px; line-height: 1.6;">
        Promoter urges every applicant to inspect the project site and shall not merely rely upon any architectural impression, plan or sales brochure and, therefore, requests to make personal judgment prior to submitting an application for allotment. Unless otherwise stated, all the images, visuals, materials and information contained herein are purely creative/artistic and may not be actual representations of the product and/or any amenities. Further, the actual design may vary in the fit and finished form, from the one displayed above . Journey time shown, if any, is based upon Google Maps which may vary as per the traffic at a relevant point of time.. *Rate mentioned above does not include GST and other statutory charges, if applicable. T & C Apply. 1 sq. mt. = 10.7639 sq. ft.
        </p>
    </div>
</div>



<script>
   document.addEventListener("DOMContentLoaded", function () {
    let navbar = document.querySelector(".navbar");
    let firstSection = document.querySelector("section");

    if (navbar && firstSection) {
        let navbarHeight = navbar.offsetHeight;
        document.body.style.paddingTop = navbarHeight + "px"; // Body ke top pe padding dekar fix
    }
});



</script>


</body>
</html>
