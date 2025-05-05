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
        <img src="images/extra/Arika-Aditya-Birla-Real-Estate-Sector-31.webp" alt=" Image" style="width: 1250px; height: 600px;">
    </div>
</div>



    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: #bab777;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
                <h2>About Birla Arika</h2>
                <p>Birla Arika is nestled in Sector 31, Gurgaon, providing 4 BHK luxury apartments. The project Arika by Birla is fulfilling the aim of providing a lavish lifestyle to its residents as it has world class amenities to offer.</p>
<p>The developer Birla Group has come up with the homes that have spacious living areas, master bedrooms, private outdoor space and spectacular interior design. The project Arika by Birla is close to metro stations, hospitals, shopping malls and international schools. Birla Arika clubhouse is designed with focus on offering the residents fun activities, social gatherings and lifestyle.</p>
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/birla-arika-flat.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
        </div>
    </div>
</section>



    <!-- Features Section -->
<section id="Features" class="py-5" style="background-color:#bab777;">
    <div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px;">
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;">

            <!-- Left Side - Image -->
            <div style="width: 100%; max-width: 400px; flex: 1; text-align: center; margin-bottom: 20px;">
                <img src="images/extra/birla-arika-apartments.webp" alt="Pricing Image"
                    style="width: 100%; max-width: 350px; height: auto; border-radius: 10px; 
                    box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
            </div>

            <!-- Right Side - Content -->
            <div style="width: 100%; max-width: 650px; flex: 2; text-align: left;">
                <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px; font-size: 28px;">Birla Arika Features</h2><br>

                <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    
                    <!-- Column 1 -->
                    <div style="width: 100%; max-width: 48%; margin-bottom: 20px;">
                        <h3 style="font-size: 20px; font-weight: bold; color: #1c355e;">SPACIOUS LIVING</h3>
                        <p style="font-size: 16px; color: #333; line-height: 1.6;">
                            Birla Arika offers expansive homes with thoughtful layouts and natural light.
                        </p>
                    </div>

                    <!-- Column 2 -->
                    <div style="width: 100%; max-width: 48%; margin-bottom: 20px;">
                        <h3 style="font-size: 20px; font-weight: bold; color: #1c355e;">WHOLESOME LIFESTYLE</h3>
                        <p style="font-size: 16px; color: #333; line-height: 1.6;">
                            Experience a balanced lifestyle with fitness and recreational amenities at Birla Arika.
                        </p>
                    </div>

                    <!-- Column 3 -->
                    <div style="width: 100%; max-width: 48%; margin-bottom: 20px;">
                        <h3 style="font-size: 20px; font-weight: bold; color: #1c355e;">WORLD-CLASS ARCHITECTURE</h3>
                        <p style="font-size: 16px; color: #333; line-height: 1.6;">
                            Birla Arika features modern design and architectural excellence for luxurious living.
                        </p>
                    </div>

                    <!-- Column 4 -->
                    <div style="width: 100%; max-width: 48%; margin-bottom: 20px;">
                        <h3 style="font-size: 20px; font-weight: bold; color: #1c355e;">EXCEPTIONAL AMENITIES</h3>
                        <p style="font-size: 16px; color: #333; line-height: 1.6;">
                            Enjoy top-notch facilities, including a clubhouse, pool, and sports areas, at Birla Arika.
                        </p>
                    </div>

                </div>

                <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal"
                    style="margin-top: 15px; padding: 10px 15px; font-size: 16px;">Get Details →</button>
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
                    <img src="images/extra/birla-arika-apartment.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/birla-arika-apartments.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/birla-arika-flat.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/birla-arika-flats.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/birla-arika-photo.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/birla-arika-photos.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/birla-arika-picture.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/birla-arika-pictures.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
                        <tr style="background-color: transparent; color: white;">
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Type</th>
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Area</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">2349 Sq. Ft. Onwards</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" style="padding: 10px 15px; font-size: 16px;">Download Floor Plan</button>
            </div>

            <!-- Right Side - Floor Plan Image -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: center;">
                <img src="images/extra/birla-arika-floor-plan.webp" alt="Floor Plan" data-bs-toggle="modal" data-bs-target="#contactModal"style="width: 100%; max-width: 450px; height: auto; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
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
            <img src="images/extra/birla-arika-flats.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
        </div>

        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2 style="font-style: italic; color: #1c355e;">Birla Arika Highlights</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">🌿 <strong>75% Open Space:</strong> Surrounded by lush greenery.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏡 <strong>Four Unique Clubhouses:</strong> Designed for exclusive experiences.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">📏 <strong>Spacious Living:</strong> Spread across 13.3 acres of land.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🛏 <strong>Private Balconies:</strong> Rooms with balconies for added luxury.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌅 <strong>Expansive Homes:</strong> Featuring large decks for comfort.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">👗 <strong>Master Bedrooms:</strong> Elegant walk-in dressers for convenience.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌞 <strong>Maximized Natural Light:</strong> Thoughtfully designed for better ventilation.</li>
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
<ul style="list-style: none; padding-left: 0; font-size: 18px;">
    <li>🚗 <strong>Excellent Connectivity:</strong> Close to NH-48, NH-8, Dwarka Expressway, and Golf Course Road.</li>
    <li>✈ <strong>Easy Access to IGI Airport:</strong> Indira Gandhi International Airport - 25 Mins.</li>
    <li>🏢 <strong>Business Hubs Nearby:</strong> Near Cyber City, Udyog Vihar, and Sohna Road.</li>
    <li>🚇 <strong>Metro Access:</strong> Huda City Centre Metro Station - 10 Mins.</li>
    <li>🏥 <strong>Quality Healthcare:</strong> Medanta Hospital - 8 Mins. | Artemis Hospital - 12 Mins.</li>
    <li>🛍 <strong>Shopping & Dining:</strong>  
        - MGF Metropolitan Mall - 12 Mins.  
        - DLF City Centre Mall - 15 Mins.  
        - DLF Cyber Hub - 12 Mins.  
    </li>
    <li>🎭 <strong>Nearby Attractions:</strong> Kingdom of Dreams - 8 Mins.</li>
    <li>🏢 <strong>Commercial Towers:</strong> Signature Towers - 12 Mins. | DLF Cyber City - 15 Mins.</li>
</ul>

            <!-- Button -->
           <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal" 
           >Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="max-width: 45%;">
            <img src="images/extra/LocationMap.jpg" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
