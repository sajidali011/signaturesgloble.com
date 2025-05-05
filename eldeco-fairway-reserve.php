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
        <img src="images/extra/3_bhk_apartment-for-sale-sector_80_gurgaon-Gurgaon-others.avif" alt="Image" 
             style="width: 100%; height: auto; max-height: 600px; object-fit: contain;">
    </div>
</div>





    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: rgb(225, 225, 222) !important;" >
    <div class="container" >
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>Eldeco Fairway Reserve, Sector 80, Gurgaon</h2>
<p><strong>Eldeco Fairway Reserve</strong> is a premium residential project in Sector 80, Gurgaon, offering a perfect blend of luxury, comfort, and green living. Strategically located, it ensures seamless connectivity to NH-8, business districts, shopping hubs, and top educational institutions.</p>
<p><strong>Spacious & Modern Living:</strong> Designed with expansive villas and luxury apartments featuring open spaces, contemporary interiors, and high-end specifications.</p>
<p><strong>World-Class Amenities:</strong> Includes a clubhouse, swimming pool, fitness center, landscaped gardens, and recreational areas for an upscale lifestyle.</p>
<p><strong>Sustainable & Serene Environment:</strong> Surrounded by lush greenery, the project integrates eco-friendly practices for a healthier and more sustainable living experience.</p>
<p><strong>Ideal for Families & Professionals:</strong> A perfect investment for those seeking a high-end, well-connected, and peaceful residential space in Gurgaon.</p>
    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/17291692131121729604.jpg" alt="Overview Image" class="img-fluid" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
                <img src="images/extra/eldeco-fairway-reserve-banner-36551.jpg" alt="Project Features" 
                    style="width: 100%; height: auto; min-height: 350px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
            </div>
            <!-- Right Side - Content -->
            <div style="flex: 1; max-width: 550px; text-align: left;">
            <h2 style="color: #1c355e; font-weight: bold; margin-bottom: 20px; font-size: 28px;">Project Features</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">⛳ <strong>Manicured Golf Course:</strong> A premium lifestyle with lush green surroundings.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏡 <strong>Serene Aravalis & NSG Campus Views:</strong> Experience tranquility at its best.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌳 <strong>Planned Central Greens:</strong> 85% open spaces with 4.5 acres of contiguous greenery.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌲 <strong>Mini Urban Forest:</strong> Dedicated green spaces with diverse tree species.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚗 <strong>Minimal Vehicular Movement:</strong> A peaceful and pedestrian-friendly environment.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏋 <strong>Outdoor Fitness Court:</strong> Stay active in a natural setting.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏢 <strong>Exclusive Low-Density Living:</strong> Only 40 homes per acre with just 2 apartments per floor.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏞 <strong>Green-Facing Apartments:</strong> 2/3-side open homes with breathtaking views.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">📏 <strong>Grand Interiors:</strong> 11 ft. clear ceiling height for an expansive feel.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">❄ <strong>All-Weather VRV Air Conditioning:</strong> Smart cooling for year-round comfort.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🍽 <strong>Modern Modular Kitchen:</strong> Equipped with chimney & hob.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏡 <strong>Private L-Shaped Balconies:</strong> Perfect for relaxation with scenic views.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🛏 <strong>Spacious Bedrooms:</strong> Designed with ample storage solutions.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🔐 <strong>5-Tier Security System:</strong> Ensuring complete peace of mind.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚿 <strong>Luxury Bathrooms:</strong> 4BHK units feature dual vanity in the master toilet.</li>
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
                    <img src="images/extra/Eldeco-Fairway-Reserve-image-5-qwwtv2yzt02i06zrxojl8r2pzunmtcf1xtbhi761ig.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Eldeco-Fairway-Reserve-image-6-qwwtuwe4h5thqx9c03p79aqhu5k2bgoxkwr359fsq0.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Eldeco-Fairway-Reserve-image-7-qwwtum1wdzfc77ocoh8azvcfawz0ysjvvhkqv7v4mg.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Eldeco-Fairway-Reserve-image-8-qwwdujopw8u2uifzhyyhdqll2qbskqm0c86znc03zc.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Eldeco-Fairway-Reserve-Gurgaon-qwwtwgsfv7yp3izeus2tewi5h9u35awtsnw7xv46co.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Eldeco-Fairway-Reserve-Sector-80-Gurgaon-1-qwwtw7e1yvltvfd2do0jpyvjjf4f0bvifddd53i42w.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Eldeco-Sector-80-Gurgaon-qwwtvzvcg7bjajnzlkrj60rusc5har1nqc5havt9go.webp" class="img-fluid rounded shadow" alt="Gallery Image 5"
                    loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/1737005763469-61743849003.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
                            <td style="border: 2px solid #c79c3d; padding: 12px;">2200 SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;"> 4 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">2800 SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">4 BHK + Servant + Lounge</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3600 SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" 
                        style="padding: 12px 18px; font-size: 18px; border-radius: 8px;">
                    Download Floor Plan
                </button>
            </div>
            <!-- Right Side - Single Floor Plan Image -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: center;">
                <img src="images/extra/yrpsube_1742667188_579762783.jpg" alt="Floor Plan" 
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
                <img src="images/extra/Eldeco-Fairway-Reserve-Sector-80-Gurgaon-1-qwwtw7e1yvltvfd2do0jpyvjjf4f0bvifddd53i42w.webp" alt="Overview Image" class="img-fluid" 
                     style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; 
                            box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
            <!-- Right Column: Content -->
            <div class="col-md-6">
            <h2 style="font-style: italic; color: #1c355e;">HIGHLIGHTS - Eldeco Fairway Reserve</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 16px;">🏢 <strong>Exclusive Living:</strong> Just two units per floor for ultimate privacy.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏞 <strong>Breathtaking Views:</strong> Overlooks a stunning 270-acre golf course & lush greenery.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌿 <strong>Lowest Density Project:</strong> Ensuring a peaceful and uncrowded living experience.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌳 <strong>Massive Green Spaces:</strong> 4.5 acres of central greens for relaxation and recreation.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏗 <strong>Grand Ceiling Height:</strong> 11+ feet clear height for spacious and luxurious interiors.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚗 <strong>Vehicle-Free Surface:</strong> A peaceful and pedestrian-friendly environment.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏊 <strong>Half-Olympic Size Swimming Pool:</strong> Designed for fitness and leisure.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">❄ <strong>Advanced VRV Air Conditioning:</strong> Unparalleled comfort in all seasons.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🔥 <strong>Exclusive Pre-Launch Prices:</strong> A limited-time opportunity for early investors.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">💰 <strong>Flexible Payment Plans:</strong> Tailored to suit your investment needs.</li>
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
        <h3 style="font-style: italic; color: #1c355e;">SEAMLESS CONNECTIVITY</h3>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🛣 <strong>Well-Connected to Dwarka Expressway:</strong> Ensuring smooth & fast travel.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚗 <strong>Minutes Away from NH-8:</strong> Easy access to key business hubs.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏢 <strong>Close to IMT Manesar:</strong> Just 5-10 minutes drive.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">✈ <strong>Proximity to IGI Airport:</strong> Seamless connectivity for frequent travelers.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏙 <strong>25 Minutes to Cyber Hub & Ambience Mall:</strong> Experience premium shopping & entertainment.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">💼 <strong>Easy Access to IT & Business Hubs:</strong> Cyber City, Udyog Vihar & Golf Course Road.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏥 <strong>Near Top Healthcare Facilities:</strong> Medanta Medicity, Artemis & more.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌿 <strong>Serene Location:</strong> Nestled near the foothills of Aravallis.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚘 <strong>Direct Connectivity:</strong> SPR Road & Sohna Road within easy reach.</li>
</ul>



            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/screenshot-2024-11-02-at-3-45-24-pm--location.png" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
