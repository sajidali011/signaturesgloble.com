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
        <img src="images/extra/567experion-windchants-amenities-features15_742x392.webp" alt="Image" 
             style="width: 100%; height: auto; max-height: 600px; object-fit: contain;">
    </div>
</div>





    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: rgb(225, 225, 222) !important;" >
    <div class="container" >
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>Experion Windchants, Sector 112, Gurgaon</h2>
<p><strong>Experion Windchants</strong> is one of the finest and most luxurious residential projects of Delhi-NCR. Sprawling landscape lawns, sparkling pools, open-air jacuzzi, designated zones for children, health & wellness facilities, and homes that give you the space you want. Windchants is now Yours to Experience.</p>
<p><strong>Prime Location:</strong> Experion Windchants is located in Sector 112, Bang on Dwarka Expressway, Gurgaon. Experience a luxurious living like never before. This is a ready-to-move luxury project with world-class amenities and robust connectivity to Gurgaon’s significant landmarks.</p>
<p><strong>Ultra Luxury Residences:</strong> This project offers ready-to-move 2BHK, 3BHK, 4BHK apartments, Villas and Duplexes. Experion Windchants Sector 112 offers Skywalk, Asia’s largest residential Skywalk. Also, it gives a majestic & exciting view.</p>
<p><strong>Recreational Space:</strong> Windchants Sector 112 Gurgaon offers open and indoor activity spaces spread across 250000 sq. ft. that ensure every experience is just a walk away. Enjoy a low-density living experience at Experion Windchants. This residential project is located in a location that lets you enjoy the luxury of space.</p>
<p><strong>Green Living:</strong> Choose from an exclusive range of apartments, villas, penthouses & duplexes, each lined with a unique variety of flora that gives them a distinct character. With the perfect blend of greenery and energy-efficient architecture, Windchants Gurgaon offers a sustainable community for its residents.</p>
    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/Experion-Windchants-Gurgaon.webp" alt="Overview Image" class="img-fluid" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
<h3 style="font-style: italic; color: #1c355e;">EXPERIENCE THE EXTRAORDINARY</h3>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🌉 <strong>Asia’s Largest Residential Skywalk:</strong> An architectural marvel offering elevated connectivity & leisure.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏞️ <strong>250000 sq. ft. Open and Indoor Activity Space:</strong> A space where recreation meets relaxation.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">📦 <strong>Utility Room & Storage Spaces:</strong> Thoughtfully designed for daily convenience.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌇 <strong>Personal Terrace Space:</strong> Enjoy private outdoor moments with scenic views.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏢 <strong>Double-Height Living Area:</strong> Enhances openness and grandeur of your home.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌿 <strong>Biodiversity Pond:</strong> A serene and eco-friendly ecosystem within the community.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🎬 <strong>Exclusive Mini Theatre:</strong> Enjoy private movie screenings with your loved ones.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🧘 <strong>Zen Garden:</strong> Tranquil space designed for peace, meditation and reflection.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚶 <strong>Elevated Pathway at the 7th Level:</strong> A unique walk experience above ground level.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🎉 <strong>Banquet Hall with Pre-Function Area:</strong> Host grand celebrations with elegance.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏊 <strong>Full Lap Swimming Pool:</strong> Designed for fitness, leisure, and relaxation.</li>
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
                    <img src="images/extra/21.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
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
                    <img src="images/extra/34experion-windchants-amenities-features151.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/ExperionWindchants-01-900x600.jpg" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
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
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3 Bhk+SQ</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3600  SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;"> 4 Bhk+SQ</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">4600  SQ.FT Onwards</td>
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
                <img src="images/extra/Experion-Windchants-3-BHK-Utility-Floor-Plan-2650-Sq.Ft_.-1024x1017.webp" alt="Floor Plan"data-bs-toggle="modal"data-bs-target="#contactModal" 
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
            <h2 style="font-style: italic; color: #1c355e;">HIGHLIGHTS - Experion Windchants</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🚇 <strong>Proposed Metro Line:</strong> To pass right in front of the site for unmatched connectivity.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🍳 <strong>Modular Kitchen:</strong> Equipped with premium chimney and hob for modern convenience.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">⚽ <strong>Sports Lifestyle Residences:</strong> Designed for active and wellness-focused living.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">⛳ <strong>Near Upcoming 18-Hole Golf Club:</strong> Located close to the grand golf destination in Dwarka.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🛣 <strong>Direct Access:</strong> Seamless entry from Dwarka Expressway.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🔐 <strong>Smart Security:</strong> CCTV, Smart Card Access, and Intercom system for complete safety.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">❄ <strong>Air-Conditioned Apartments:</strong> Enjoy all-season comfort with efficient climate control.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏛 <strong>Imported Marble Flooring:</strong> Elegant and luxurious finish in living and dining areas.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌳 <strong>90% Open Green Area:</strong> Lush landscapes offering fresh air and scenic views.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">💰 <strong>Low Maintenance Cost:</strong> Efficiently managed community with minimal overheads.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🔊 <strong>Smart-Card Access & Intercom:</strong> Seamless access control from the main gate to each apartment.</li>
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
    <li style="margin-bottom: 10px; font-size: 16px;">🚗 <strong>Dwarka Expressway:</strong> Just 3 minutes away for swift connectivity.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">✈ <strong>IGI Airport:</strong> Reach Terminal 3 in just 10 minutes.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🛣 <strong>60m Wide Road:</strong> Seamless access from Dwarka Expressway.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚇 <strong>Upcoming Metro:</strong> Metro connectivity in close proximity.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏢 <strong>Convention Centre:</strong> Only 5 minutes to Asia’s Largest Convention & Exhibition Centre.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌍 <strong>Diplomatic Enclave:</strong> Just 7 minutes away from the elite Diplomatic Enclave.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🛣 <strong>South Delhi:</strong> Reach within 25 minutes drive time.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚌 <strong>Transport Hub:</strong> Delhi’s Largest Transportation Hub just 10 minutes drive.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏟 <strong>International Sports Complex:</strong> Only 15–20 minutes away for global events and recreation.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚉 <strong>Gurgaon Railway Station:</strong> Just 12 minutes away for easy intercity access.</li>
</ul>




            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/63465b13d0232WhatsApp Image 2022-10-11 at 6.47.33 PM.jpeg" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
