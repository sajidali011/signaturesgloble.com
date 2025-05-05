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


    <div style="text-align: center; overflow: hidden;background-color:#bab777;">
    <div style="display: inline-block; width: 100%; max-width: 1250px;">
        <img src="images/extra/banner1.webp" alt="Image" 
             style="width: 100%; height: auto; max-height: 600px; object-fit: contain;">
    </div>
</div>





    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: rgb(225, 225, 222) !important;" >
    <div class="container" >
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>Emaar Amaris, Sector 62, Gurgaon</h2>
<p><strong>Emaar Amaris</strong> is a premium residential development in Sector 62, Gurgaon, designed for modern luxury living. This iconic project by Emaar Group offers seamless connectivity to commercial hubs, top educational institutions, and world-class healthcare facilities.</p>
<p><strong>Exclusive & Elegant Residences:</strong> Featuring meticulously designed homes with spacious layouts, premium finishes, and state-of-the-art amenities.</p>
<p><strong>World-Class Amenities:</strong> Includes modern health clubs, swimming pools, landscaped gardens, and dedicated entertainment spaces.</p>
<p><strong>Luxury & Convenience:</strong> The entire project is crafted to offer a sophisticated living experience, combining comfort, privacy, and convenience.</p>
<p><strong>Prime Investment Opportunity:</strong> Whether for a primary home, investment, or second home, Emaar Amaris is a prestigious address that delivers unmatched value and exclusivity.</p>
    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/lplhmbt1xgwqcxnyq82p.jpeg" alt="Overview Image" class="img-fluid" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
                <img src="images/extra/emaar-amaris-indoor-amenities.webp" alt="Project Features" 
                    style="width: 100%; height: auto; min-height: 350px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
            </div>
            <!-- Right Side - Content -->
            <div style="flex: 1; max-width: 550px; text-align: left;">
            <h2 style="color: #1c355e; font-weight: bold; margin-bottom: 20px; font-size: 28px;">Project Features</h2>
            <h3 style="font-style: italic; color: #1c355e;">SMART LIVING & SUSTAINABILITY</h3>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🏠 <strong>Smart Home Automation:</strong> Experience next-level convenience & control.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌿 <strong>GRIHA Pre-Certified Building:</strong> Eco-friendly & energy-efficient living.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏛 <strong>State-of-the-Art Clubhouse:</strong> Designed for leisure & social gatherings.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">✨ <strong>Grand Lobby:</strong> An elegant and welcoming entrance.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌳 <strong>400+ Trees:</strong> Planted along the periphery for a lush green ambiance.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">⚽ <strong>Multiple Sports Amenities:</strong> Encouraging an active and healthy lifestyle.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🍃 <strong>Green Cover:</strong> Helps reduce pollution & enhances air quality.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚗 <strong>Ample Car Parking:</strong> Hassle-free parking spaces for residents & guests.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🔒 <strong>Secured Gated Community:</strong> 24/7 security for complete peace of mind.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">❄ <strong>VRV Air-Conditioning:</strong> Superior cooling with energy efficiency.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">💨 <strong>Outdoor Air Purifier:</strong> Enhancing the air quality within the premises.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏋 <strong>State-of-the-Art Gymnasium:</strong> Equipped with modern fitness equipment.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌬 <strong>Air Purifiers in Towers:</strong> Ensuring fresh & healthy indoor air.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">💧 <strong>Rainwater Harvesting System:</strong> Sustainable water conservation.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">⚡ <strong>EV Charging Point:</strong> One dedicated point per apartment.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚘 <strong>EV Buggy Per Tower:</strong> Enhancing intra-community mobility.</li>
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
                    <img src="images/extra/d8yiw69s9kkdembiksnb.jpeg" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/1734346032379-g2.jpg" class="img-fluid rounded shadow" alt="Gallery Image 2" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/gallery-31.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/lplhmbt1xgwqcxnyq82p.jpeg" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/emaar-amaris-indoor-amenities.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/emaar-amaris-outdoor-amenities.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/emaar-amaris-gallery-image-3.webp" class="img-fluid rounded shadow" alt="Gallery Image 5"
                    loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/emaar-amaris-gallery-image-5.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">2150 SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;"> 4 BHK - Small</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">2750 SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">4 BHK- Large</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3100 SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal"data-bs-target="#contactModal" 
                        style="padding: 12px 18px; font-size: 18px; border-radius: 8px;">
                    Download Floor Plan
                </button>
            </div>
            <!-- Right Side - Single Floor Plan Image -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: center;">
                <img src="images/extra/hzcfgzojpnqg7i8ufekj.jpeg" alt="Floor Plan"data-bs-toggle="modal"data-bs-target="#contactModal" 
                     style="width: 100%; height: auto; border-radius: 10px;object-fit: contain; max-height: 500px;">
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
                <img src="images/extra/highlight.jpg" alt="Overview Image" class="img-fluid" 
                     style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; 
                            box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
            <!-- Right Column: Content -->
            <div class="col-md-6">
            <h2 style="font-style: italic; color: #1c355e;">HIGHLIGHTS - Emaar Amaris</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 16px;">🏛 <strong>Modern 3-Level Clubhouse:</strong> Featuring state-of-the-art amenities for luxury living.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏗 <strong>Future-Ready Homes:</strong> Designed by Morphogenesis, a leading Asian design firm.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌿 <strong>Exceptional Air Quality:</strong> Experience fresh air every day in a pollution-free environment.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏙 <strong>Fully Developed Infrastructure:</strong> Integrated with a strong socio-civil-economic ecosystem.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌳 <strong>Scenic Landscaping:</strong> Designed by Oracle, a renowned architectural consultant.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🗣 <strong>Smart Voice Control:</strong> Control your home with voice-enabled commands.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🔒 <strong>Advanced Security:</strong> Includes biometric monitoring, laser beams & 24x7 surveillance.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🎨 <strong>Customizable Interiors:</strong> Bareshell units allow you to design your dream space.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">💡 <strong>Smart Home Automation:</strong> Voice-enabled lighting & automated curtains for modern living.</li>
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
        <h3 style="font-style: italic; color: #1c355e;">LEADING CONNECTIVITY</h3>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 16px;">📍 <strong>Prime Location:</strong> Situated in the heart of Sector 62, Gurgaon.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🛍 <strong>Shopping & Entertainment:</strong> Just 20 minutes from MG Road & major malls.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏙 <strong>Business Hubs:</strong> Cyber Hub & Galleria Market within a 25-minute drive.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">✈ <strong>International Travel:</strong> 45 minutes to Indira Gandhi International Airport (T3).</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏥 <strong>Essential Facilities:</strong> Easy access to top schools, hospitals & daily conveniences.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚇 <strong>Metro Connectivity:</strong> Only 15 minutes from Sector 55-56 Rapid Metro.</li>
</ul>



            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/location-map.webp" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
