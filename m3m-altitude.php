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
                <img src="images/SKA1.webp" alt="Logo" height="40">Shri Krishna Associate
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

    <div style="text-align: center; overflow: hidden;background-color:#bab777;">
    <div style="display: inline-block; width: 100%; max-width: 1250px;">
        <img src="images/extra/m3m-altitude.jpg" alt="Image"
             style="width: 100%; height: auto; max-height: 600px; object-fit: contain;">
    </div> 
</div>

    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: rgb(225, 225, 222) !important;" >
    <div class="container" >
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>About M3M Altitude</h2>
<p><strong>M3M Altitude</strong> is a newly launched ultra-luxury residential project located in Sector 65, Gurgaon, on the prestigious Golf Course Road Extension. Spread across <strong>5 acres</strong> of lush green landscape, the development features <strong>3 high-rise towers</strong> offering meticulously crafted <strong>4 BHK residences and penthouses</strong>.</p>
<p>This RERA-approved project (RERA No. 48 of 2024) brings together world-class specifications with only <strong>4 units per core</strong>, ensuring the highest level of privacy and exclusivity. Apartment sizes range from <strong>3755 to 4270 sq ft</strong>, with spacious layouts and premium interiors that redefine luxury living.</p>
<p>Designed by the globally acclaimed <strong>UHA London</strong>, M3M Altitude offers a range of lifestyle amenities that bring modern comfort and elegance to your doorstep. From thoughtfully planned living spaces to high-end facilities, this project embodies sophistication and excellence in every detail.</p>
<p>Whether you're looking for your next home or a premium investment opportunity in Gurgaon, <strong>M3M Altitude</strong> stands as a benchmark in luxury real estate on Golf Course Road Extension.</p>


    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/jtveoh1dzgwgeai05s8n.jpeg" alt="Overview Image" class="img-fluid" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
        </div>
    </div>
</section>
    <!-- Features Section -->
    <section id="Features" class="py-4" style="background-color:#bab777; display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 50px 0;">
    <div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px;">
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 30px;">
            <!-- Left Side - Image -->
            <div style="flex: 1; max-width: 500px; display: flex; align-items: center; justify-content: center;">
                <img src="images/extra/18.webp" alt="Project Features" 
                    style="width: 100%; height: auto; min-height: 300px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
            </div>
            <!-- Right Side - Content -->
            <div style="flex: 1; max-width: 550px; text-align: left;">
            <h2 style="color: #1c355e; font-weight: bold; margin-bottom: 20px; font-size: 28px;">Project Features</h2>
<ul style="list-style: none; padding-left: 0; font-size: 15px;">
    <li>🏌️ <strong>Part of the Golf Estate</strong></li>
    <li>🏝️ <strong>Lagoon Theme on Terrace</strong></li>
    <li>🏗️ <strong>Design by UHA London</strong></li>
    <li>🔄 <strong>4 Apartments to a Core</strong></li>
    <li>🛗 <strong>4 Lifts in Each Tower</strong></li>
    <li>🏊 <strong>Clubhouse with 75-foot Lap Pool (1.5 Lacs/sq ft)</strong></li>
    <li>💳 <strong>CLP Payment Plan Available</strong></li>
    <li>🎯 <strong>Sports Area Spread Over 1.9 Acres</strong></li>
    <li>🛡️ <strong>Multi-tier Security System</strong></li>
    <li>📐 <strong>Spacious Layouts (3755–4270 sq ft)</strong></li>
    <li>🏙️ <strong>3 High-rise Towers</strong></li>
</ul>







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

<section id="gallery" class="bg-light py-5" style="background: rgb(225, 225, 222) !important;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-style: italic; color: #1c355e;">Gallery</h2>
        <div class="row g-3">
            <!-- Image 1 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/highlight3.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/43.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/53.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/61.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Overview.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/m3m-altitude-5.jpg" class="img-fluid rounded shadow" alt="Gallery Image 6" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/m3m-altitude.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5"
                    loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/f51c6a206a291379210ed15b95a23248.jpeg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
        </div>
    </div>
</section>  

<section id="floorplan" style="padding: 60px 0; background-color:#bab777; text-align: center;">
    <div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px;"><br>
        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 30px;">Sizes & Floor Plan</h2>
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <!-- Left Side - Table & Button -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: center;">
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr style="background-color: transparent; color: black;">
                            <th style="border: 2px solid #c79c3d; padding: 12px;">Type</th>
                            <th style="border: 2px solid #c79c3d; padding: 12px;">Carpet Area</th>
                            <th style="border: 2px solid #c79c3d; padding: 12px;">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3 BHK + SR </td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3755 SQ.FT</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">4 BHK + SR </td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">4270  SQ.FT</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">On Request</td>
                        </tr>
                        </tbody>
                        
                </table>
                <button style="padding: 10px 25px; background-color: #c79c3d; border: none; color: white; font-size: 16px; cursor: pointer; border-radius: 5px;" data-bs-toggle="modal" data-bs-target="#contactModal" > Load More</button>
                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" 
                        style="padding: 12px 18px; font-size: 18px; border-radius: 8px;">
                    Download Floor Plan
                </button>
            </div>
            <!-- Right Side - Single Floor Plan Image -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: center;">
                <img src="images/extra/floorplan11.webp" alt="Floor Plan"data-bs-toggle="modal" data-bs-target="#contactModal"  
                     style="width: 100%; height: auto; border-radius: 10px; 
                            box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: contain; max-height: 500px;">
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

<section id="highlights" style="background-color:#bab777; padding: 50px 0;">
    <div class="container">
        <div class="row align-items-center justify-content-center"> 
            <!-- Left Column: Image (Now First) -->
            <div class="col-md-6 text-center">
                <img src="images/extra/dbla5rbmnnqmqpa9jjsv.jpeg" alt="Overview Image" class="img-fluid" 
                     style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; 
                            box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
            <!-- Right Column: Content -->
            <div class="col-md-6">
            <h3 style="font-style: italic; color: #1c355e;">Highlights</h3>
<h2>M3M Altitude</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 16px;">🌐 <strong>A Perfect Ecosystem for Every Desire – Live, Work, Leisure & More</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌇 <strong>Rooftop Observatory Deck Spread Over 41st, 42nd Floors & Rooftop</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏗️ <strong>Modern Contemporary Architecture by UHA London</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">📐 <strong>Master Plan Architect: GPM Architects & Planners</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌿 <strong>Landscape Design by Oracles Landscapes</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">❄️ <strong>Energy Efficient VRV/VRF ACs in Bedrooms and Living Room</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🍽️ <strong>Modular Kitchen with European Styled Cabinetry</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌅 <strong>Every Room – Living or Bedroom – Opens to a Balcony</strong></li>
</ul>

                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">
                    Get Details →
                </button>
            </div>
        </div>
    </div>
</section>

    <section id="location" class="bg-light" style="padding: 50px 0; background: rgb(225, 225, 222) !important;">
    <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; max-width: 1100px; margin: auto; gap: 20px;">
        <!-- Left Content -->
        <div style="flex: 1 1 400px; max-width: 500px;">
        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Location Advantages</h2>
<ul style="list-style: none; padding-left: 0; font-size: 15px;">
    <li style="margin-bottom: 10px;">📍 <strong>Located in Gurgaon’s Most Promising Location</strong></li>
    <li style="margin-bottom: 10px;">🏫 <strong>Close Proximity to Educational Institutes, Malls & Restaurants</strong></li>
    <li style="margin-bottom: 10px;">🏢 <strong>Nearby Headquarters of MNCs like Toyota, Dell, British Airways & Huawei</strong></li>
    <li style="margin-bottom: 10px;">🛣️ <strong>5 Minutes from Golf Course Road</strong></li>
    <li style="margin-bottom: 10px;">🚇 <strong>8 Minutes’ Drive from Rapid Metro Station (Sectors 55–56)</strong></li>
    <li style="margin-bottom: 10px;">🛤️ <strong>12 Minutes’ Drive to NH-48</strong></li>
    <li style="margin-bottom: 10px;">✈️ <strong>30 Minutes’ Drive from IGI Airport</strong></li>
    <li style="margin-bottom: 10px;">🌐 <strong>Well-Connected to SPR Road & Dwarka Expressway</strong></li>
    <li style="margin-bottom: 10px;">🏙️ <strong>Surrounded by Premium Residences & IT/ITeS Hubs</strong></li>
    <li style="margin-bottom: 10px;">🚗 <strong>Minutes Away from DLF Cyber Hub, Huda City Metro Station, MG Road & IFFCO Chowk</strong></li>
</ul>

            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/LOCATION3.webp" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>

<!-- m3m-related-project -->
<?php include "m3m-related-project.php" ?>

</body>
</html>
