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
        <img src="images/extra/sobha-aranya-main-banner-1.webp" alt="Image"
             style="width: 100%; height: auto; max-height: 600px; object-fit: contain;">
    </div> 
</div>

    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: rgb(225, 225, 222) !important;" >
    <div class="container" >
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>About Sobha Aranya</h2>
<p><strong>Sobha Aranya</strong> is an upcoming premium residential development located in <strong>Karma Lakelands, Sector 80, Gurgaon</strong>. Offering meticulously crafted <strong>3, 4 & 5 BHK luxury apartments</strong> ranging from <strong>2836 to 4285 sq. ft.</strong>, this project is set amidst a sprawling 32-acre land parcel, with <strong>Phase 1 covering 14.81 acres</strong>.</p>
<p>Set within the <strong>235-acre Karma Lakelands campus</strong> — a lush green paradise with meadows, lawns, and serene water bodies — Sobha Aranya redefines grandeur and offers residents a truly extraordinary lifestyle surrounded by nature.</p>
<p>Designed for a <strong>golf-centric lifestyle</strong>, the residences offer stunning <strong>golf course views</strong> and are complemented by modern amenities including a <strong>world-class pool</strong>, <strong>fully equipped gym</strong>, <strong>luxurious clubhouse</strong>, <strong>landscaped gardens</strong>, and <strong>dedicated kids' play areas</strong>. With <strong>24/7 surveillance</strong> and <strong>controlled access</strong>, residents can enjoy peace of mind and security.</p>
<p>Sustainability is at the core of Sobha Aranya’s design. The project integrates <strong>rainwater harvesting</strong>, <strong>solar power systems</strong>, and <strong>eco-friendly materials</strong> to minimize environmental impact, ensuring a <strong>future-ready and responsible lifestyle</strong>.</p>
<p>Strategically located in Sector 80, Gurgaon, Sobha Aranya offers excellent connectivity to <strong>major roads, Delhi Airport, and top leisure destinations</strong>. With Sobha’s hallmark of <strong>quality, innovation, and timely delivery</strong>, this project presents a rare blend of <strong>luxury, sustainability, and investment potential</strong>.</p>


    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/Sobha-Aranya-camping.webp" alt="Overview Image" class="img-fluid" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
    <img src="images/extra/Sobha-aranya-playarea.webp" alt="Project Features" 
        style="width: 100%; height: auto; max-height: 300px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
</div>

            <!-- Right Side - Content -->
            <div style="flex: 1; max-width: 550px; text-align: left;">
            <h2 style="color: #1c355e; font-weight: bold; margin-bottom: 20px; font-size: 28px;">Project Features</h2>
<ul style="list-style: none; padding-left: 0; font-size: 15px;">
    <li>🌍 <strong>Land Area: 32 Acres | Phase 1: 14.81 Acres</strong></li>
    <li>🏢 <strong>5 Iconic Residential Towers</strong></li>
    <li>🏗️ <strong>Tower Height: 3B + G + 43/46 Floors</strong></li>
    <li>🏬 <strong>2 to the Core & 3 to the Core Configurations</strong></li>
    <li>🌄 <strong>All Apartments with Aravalli-Facing Balconies</strong></li>
    <li>🌟 <strong>Ultra Luxury 5-Star 70,000 sq. ft. Clubhouse</strong></li>
    <li>🌳 <strong>80% Open Space Area</strong></li>
    <li>🛣️ <strong>Located at Intersection of NH-8 & Dwarka Expressway</strong></li>
    <li>🏞️ <strong>248 Acre Greenery within Karma Lakelands</strong></li>
    <li>🛡️ <strong>5-Tier Security System</strong></li>
    <li>📶 <strong>WiFi Enabled Smart Homes</strong></li>
    <li>🏛️ <strong>Double-Height Visitors Lounge</strong></li>
    <li>🌿 <strong>Green Terraces on Multiple Floors</strong></li>
    <li>♻️ <strong>Eco-Sustenance Features for Sustainable Living</strong></li>
    <li>🔒 <strong>Privacy-Focused Layout – No Facing Homes</strong></li>
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
                    <img src="images/extra/Sobha-Aranya-Elevation.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/img166-1229x1536.jpg.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/sobha-aranya-main-banner-4.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/sobha-aranya-main-banner-5.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/sobha-aranya-main-banner-2.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/sobha-aranya-main-banner-1.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/sobha-aranya-project-clubhouse-.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5"
                    loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/sobha-aranya-project-amenities-features13-2603.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3 BHK </td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">2836   SQ.FT</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">4 BHK </td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3691  SQ.FT</td>
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
                <img src="images/extra/7969_4-br.webp" alt="Floor Plan"data-bs-toggle="modal" data-bs-target="#contactModal"  
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
                <img src="images/extra/img166-1229x1536.jpg.webp" alt="Overview Image" class="img-fluid" 
                     style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; 
                            box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
            <!-- Right Column: Content -->
            <div class="col-md-6">
            <h3 style="font-style: italic; color: #1c355e;">Highlights</h3>
<h2>DLF Privana North</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 16px;">🏘️ <strong>Gated Community Spread over 25 Acres – Part of 115 Acres Township</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏢 <strong>Low-Density High-Rise Development</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌳 <strong>88% Lush Green Area within the Project</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏊 <strong>Clubhouse Equipped with Modern Amenities</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏙️ <strong>Each Tower with Ground + 50 Floors</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌄 <strong>Three-Side Open Apartments Offering 360° Aravalli Views</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚗 <strong>472 Meter Frontage on 60 Meter Wide Road</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏗️ <strong>Architectural Design by ARCOP Associates</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🎨 <strong>Interiors Curated by GA Group London</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏡 <strong>1100 Super Luxury Residences</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌿 <strong>Landscaped by MDP Landscape Consultants</strong></li>
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
    <li style="margin-bottom: 10px;">🛍️ <strong>Iris Broadway – 5.7 km</strong></li>
    <li style="margin-bottom: 10px;">🚉 <strong>Basai Dhankot Railway Station – 15.9 km</strong></li>
    <li style="margin-bottom: 10px;">✈️ <strong>IGI Airport – 30 km</strong></li>
    <li style="margin-bottom: 10px;">🚆 <strong>Garhi Harsaru Junction – 10 km</strong></li>
    <li style="margin-bottom: 10px;">🏥 <strong>Shri Balaji’s Multispeciality Hospital – 14 km</strong></li>
    <li style="margin-bottom: 10px;">🏨 <strong>Aarvy Hospital – 7.2 km</strong></li>
    <li style="margin-bottom: 10px;">🛒 <strong>Sapphire 83 – 5 km</strong></li>
    <li style="margin-bottom: 10px;">🎡 <strong>Entertainland Mall – 6 km</strong></li>
    <li style="margin-bottom: 10px;">🏫 <strong>Ompee International School – 6.5 km</strong></li>
    <li style="margin-bottom: 10px;">🏫 <strong>Bal Bharati Public School – IMT Manesar – 6.2 km</strong></li>
</ul>



            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/Sobha-Aranya-Location-Map.webp" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
