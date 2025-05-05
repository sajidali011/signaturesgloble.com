<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experion Elements</title>
    <!-- FontAwesome Icons (Include this in <head> of your HTML) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Navbar Styling */
        .navbar {
    position: sticky;
    top: 0;
    z-index: 1000;
    background: rgba(214, 213, 213, 0.8); /* White with 80% opacity */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px 0;
    backdrop-filter: blur(10px); 
}


        .navbar-nav .nav-link {
            font-size: 18px;
            font-weight: 600;
            color: #1c355e;
            padding: 10px 15px;
            transition: all 0.3s ease-in-out;
            border-radius: 5px;
        }

        /* Hover Effect */
        .navbar-nav .nav-link:hover {
            background: #f3d375;
            color: #1c355e;
        }

        /* Sections */
        section {
            padding: 80px 20px;
            min-height: 100vh;
        }
        
        .amenity-card {
        width: 200px;
        height: 200px;
        background: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        font-size: 18px;
        font-weight: bold;
        color: #1c355e;
        transition: all 0.3s ease-in-out;
        box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.1);
    }

    /* 🟡 Highlighted Cards */
    .highlighted {
        background: #e8c36a !important;
        color: #1c355e;
    }

    /* ✨ Hover Effect */
    .amenity-card:hover {
        transform: translateY(-5px);
        box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);
    }

    .amenity-card i {
        font-size: 50px;
        margin-bottom: 10px;
    }
    
    @media (max-width: 768px) {
        #floorplan div {
            flex-direction: column;
        }
        #floorplan table {
            font-size: 14px;
        }
        #floorplan img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
    }

    @media (max-width: 768px) {
        #Features div {
            flex-direction: column;
            text-align: center;
        }
        #Features img {
            max-height: 400px;
        }
        #Features ul {
            padding: 0 15px;
        }
        #Features li {
            font-size: 16px;
        }
    }
    

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="images/SKA1.webp" alt="Logo" height="40"> Shri Krishna Associate
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#overview">Overview</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#floorplan">Floor Plan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#amenities">Amenities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#highlights">Highlights</a></li>
                    <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div style="text-align: center; overflow: hidden;">
    <div style="display: inline-block;">
        <img src="images/extra/ashiana-amarah-luxurious-3-4-BHK-apartments-in-gurgaon-img1012s.jpg" alt=" Image" style="width: 1250px; height: 600px;">
    </div>
</div>



    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: #bab777;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
                <h2>Ashiana Amarah Overview</h2>
            <h4>We Are the Best Service Provider All Over the World</h4>

<p>Ashiana Amarah is a luxury residential project built on sprawling wide acres land in Sector 93. The configurations on offer are 3 BHK Luxury Apartments with panoramic views of the wonderful surroundings. The Ashiana Amarah 93 apartments welcome you to live a lovely life filled with smiles and aspirations. The ventilation and natural light flow in all rooms is simply astonishing, leaving you fascinated. With well-planned amenities, this residential development is designed for a luxurious lifestyle like no other. Pre-Launch Ashiana Amarah Sector 93, Gurugram is a residential project that meets all your requirements for a comfortable and elegant living experience for you and your family.</p>
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/sections-1723808282.jpg" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
        </div>
    </div>
</section>



    <!-- Features Section -->
    <section id="Features" class="py-5" style="background-color:#bab777;">
    <div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px;">
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 50px;">

            <!-- Left Side - Image -->
            <div style="width: 100%; max-width: 400px; flex: 1; text-align: center; margin-bottom: 20px;">
                <img src="images/extra/birla-arika-apartments.webp" alt="Birla Arika"
                    style="width: 100%; max-width: 400px; height: 500px; object-fit: cover; border-radius: 10px; 
                    box-shadow: 5px 5px 15px rgba(0,0,0,0.3);">
            </div>

            <!-- Right Side - Content -->
            <div style="width: 100%; max-width: 650px; flex: 2; text-align: left;">
            <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px; font-size: 28px;">KEY FEATURES</h2>
            <ul style="list-style: none; padding: 0;">
    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-child" style="color: #000000; margin-right: 10px;"></i> Kids Centric Projects</li>
    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-music" style="color: #000000; margin-right: 10px;"></i> Dance Room</li>
    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-basketball-ball" style="color: #000000; margin-right: 10px;"></i> Half Basketball Court</li>
    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-tree" style="color: #000000; margin-right: 10px;"></i> Treehouse</li>
    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-birthday-cake" style="color: #000000; margin-right: 10px;"></i> Party Hall</li>
    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-water" style="color: #000000; margin-right: 10px;"></i> Interactive Fountain/Water Play</li>
    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-umbrella-beach" style="color: #000000; margin-right: 10px;"></i> Canopy and Gazebo</li>
    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-table-tennis" style="color: #000000; margin-right: 10px;"></i> Sports Hall Billiards & TT</li>
       <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
        <i class="fas fa-skating" style="color: #000000; margin-right: 10px;"></i> Skating Rink</li>
</ul>


                <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal"
                    style="margin-top: 15px; padding: 12px 20px; font-size: 18px; border-radius: 5px;">Get Details →</button>
            </div>
        </div>
    </div>
</section>





<!-- Contact Form Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="contactModalLabel"><strong>Contact Us</strong></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="👤 Your Name*" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="📧 Email*" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="📞 Your Phone*" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="📄 Your Subject">
                    </div>
                    <button type="submit" class="btn btn-warning w-100 text-white">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



<section id="gallery" class="bg-light py-5" style="background: #bab777;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-style: italic; color: #1c355e;">Gallery</h2>
        <div class="row g-3">
            <!-- Image 1 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/gallery-1723809202.jpg" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/gallery-1723809216.jpg" class="img-fluid rounded shadow" alt="Gallery Image 2" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/gallery-1723809227.jpg" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/gallery-1723809266.jpg" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/gallery-3.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/sports-club.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Ashiana-amarah-kid-centric-homes-Club-house-img4.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/ashiana-amarah-sector93-gurgaon-3.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="floorplan" style="padding: 50px 0; background-color:#bab777; text-align: center;">
    <div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px;">
        
        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Sizes & Floor Plan</h2>

        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;">

            <!-- Left Side - Table & Button -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: left;">
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <thead>
    <tr style="background-color: transparent; color: black;"> <!-- Text color black -->
        <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Type</th>
        <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Carpet Area</th>
        <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Balcony Area</th>
    </tr>
</thead>


    <tbody style="filter: blur(1px);">
        <tr>
            <td style="border: 2px solid #c79c3d; padding: 10px;">IRIS 4BHK + 4T</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">1408 Sq.ft</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">265.73 Sq.ft</td>
        </tr>
    </tbody>

    <tbody style="filter: blur(1px);">
        <tr>
            <td style="border: 2px solid #c79c3d; padding: 10px;">IRIS2 4BHK + 4T</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">1408 Sq.ft</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">250.45 Sq.ft</td>
        </tr>
    </tbody>

    <tbody style="filter: blur(1px);">
        <tr>
            <td style="border: 2px solid #c79c3d; padding: 10px;">TULIP 3BHK + 3T</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">1205 Sq.ft</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">216.23 Sq.ft</td>
        </tr>
    </tbody>

    <tbody style="filter: blur(1px);">
        <tr>
            <td style="border: 2px solid #c79c3d; padding: 10px;">TULIP2 3BHK + 3T</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">1205 Sq.ft</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">200.95 Sq.ft</td>
        </tr>
    </tbody>

    <tbody style="filter: blur(1px);">
        <tr>
            <td style="border: 2px solid #c79c3d; padding: 10px;">LAVENDER PREMIUM 3BHK + 2T</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">1000 Sq.ft</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">193.31 Sq.ft</td>
        </tr>
    </tbody>

    <tbody style="filter: blur(1px);">
        <tr>
            <td style="border: 2px solid #c79c3d; padding: 10px;">LAVENDER 2 PREMIUM 3BHK + 2T</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">1000 Sq.ft</td>
            <td style="border: 2px solid #c79c3d; padding: 10px;">173.40 Sq.ft</td>
        </tr>
    </tbody>
</table>


                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" style="padding: 10px 15px; font-size: 16px;">Download Floor Plan</button>
            </div>

            <!-- Right Side - Floor Plan Images in Grid -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: center;filter: blur(2px);">
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                    <img src="images/extra/1floor.jpg" alt="Floor Plan 1" style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
                    <img src="images/extra/4bhk.jpg" alt="Floor Plan 2" style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
                    <img src="images/extra/3bhk.jpg" alt="Floor Plan 3" style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
                    <img src="images/extra/3bhk+3t.jpg" alt="Floor Plan 4" style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
                    <img src="images/extra/3bhk+2t.jpg" alt="Floor Plan 5" style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
                    <img src="images/extra/3bhk+2t.jpg" alt="Floor Plan 6" style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
                </div>
            </div>

        </div>

    </div>
</section>




<section id="amenities" style="padding: 50px 0; background:rgb(225, 225, 222); text-align: center;">
    <div class="container">
        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 30px;">Amenities</h2>

        <!-- Row 1 -->
        <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; margin-bottom: 30px;">
            <div class="amenity-card highlighted">
                <i class="fas fa-dumbbell" style="color:black;"></i>
                <p>Equipped Gym</p>
            </div>

            <div class="amenity-card">
                <i class="fas fa-shield-alt"style="color:silver;"></i>
                <p>Gated Community</p>
            </div>

            <div class="amenity-card highlighted">
                <i class="fas fa-spa" style="color:#910686;"></i>
                <p>Luxury Club House</p>
            </div>

            <div class="amenity-card">
                <i class="fas fa-swimming-pool" style="color:#5094d9;"></i>
                <p>Swimming Pool</p>
            </div>
        </div>

        <!-- Row 2 -->
        <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
            <div class="amenity-card">
                <i class="fas fa-snowflake" style="color:#8ce0f5;"></i>
                <p>AC Lobbies</p>
            </div>

            <div class="amenity-card highlighted">
                <i class="fas fa-tree"  style="color:#16692b;"></i>
                <p>Parks</p>
            </div>

            <div class="amenity-card">
                <i class="fas fa-leaf" style="color:#88f7ab;"></i>
                <p>Landscaped Greens</p>
            </div>

            <div class="amenity-card highlighted">
                <i class="fas fa-child" style="color:#facafa;"></i>
                <p>Dedicated Kids Zone</p>
            </div>
        </div>
    </div>
</section>


    <section id="highlights" style=" background-color:#bab777;">
    <div class="container">
    <div class="row align-items-center"> 
        <!-- Right Column: Image (Now First) -->
        <div class="col-md-6 text-center">
    <img src="images/extra/sections-1723808309.jpg" alt="Overview Image" class="img-fluid" 
         style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
</div>
        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2 style="font-style: italic; color: #1c355e;">Discover the Finest Features and Finishes</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">🧒 <strong>Kid's Centric Homes:</strong> Designed for a fun and safe childhood.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">📐 <strong>Best Layout in Segment:</strong> Optimized space with modern architecture.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏀 <strong>Kids Play Street:</strong> 1.5-acre dedicated play area for children.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏆 <strong>International Standard Sports Amenities:</strong> World-class sports facilities.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">📚 <strong>Learning Hub:</strong> A 6000 sq. ft. clubhouse dedicated to kids’ education and activities.</li>
</ul>

            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
    </div>
</div>
    </section>

    <section id="location" class="bg-light" style="padding: 50px 0; background: #bab777; !important;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; max-width: 1100px; margin: auto;">
        <!-- Left Content -->
        <div style="max-width: 50%;">
        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Location Advantages</h2>
        <h3 style="color: #1c355e; font-size: 20px; margin-bottom: 15px;">Smart Living's Location Benefits</h3>

<ul style="list-style: none; padding-left: 0; font-size: 18px;">
    <li>📍 <strong>Prime Location:</strong> Located off IMT Road, near developed sectors.</li>
    <li>🛍 <strong>Convenience Hub:</strong> Offers malls, shopping complexes, and hospitals.</li>
    <li>🌳 <strong>Green Surroundings:</strong> Close to Central Park-2 and Cybercity.</li>
    <li>🏫 <strong>Essential Facilities:</strong> Developing area with schools and supermarkets.</li>
    <li>🚆 <strong>Seamless Connectivity:</strong> Borders Delhi’s southern boundary for better access.</li>
    <li>🛣 <strong>Transport Hub:</strong> 7 minutes from Delhi's largest transportation hub.</li>
</ul>


            <!-- Button -->
           <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal" 
           >Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="max-width: 45%;">
            <img src="images/extra/locations-1723808933.webp" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
