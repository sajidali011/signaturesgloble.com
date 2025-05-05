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
        <img src="images/extra/ze5cwrzsljwwbvw7dksh.jpeg" alt="Image" 
             style="width: 100%; height: auto; max-height: 600px; object-fit: contain;">
    </div>
</div>

    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: rgb(225, 225, 222) !important;" >
    <div class="container" >
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>SS Kiavasa Sector 83 Gurgaon</h2>
<p><strong>New Launch Apartments in SS Kiavasa Sector 83 Gurgaon</strong> offer a stunning blend of comfort and elegance in one of Gurgaon's most desirable locations.</p>
<p><strong>Strategic Connectivity:</strong> Located in Sector 83, the project provides seamless access to major roads and transport hubs, ensuring hassle-free commutes to every part of the city.</p>
<p><strong>Modern Design & Amenities:</strong> With contemporary architecture, landscaped gardens, 24/7 security, a fully equipped gym, and dedicated leisure zones, SS Kiavasa is a haven of luxury living.</p>
<p><strong>Spacious & Sophisticated:</strong> The well-designed apartments deliver optimal comfort with a touch of sophistication, ideal for those seeking a high-end lifestyle.</p>
<p><strong>Tranquil & Convenient:</strong> Nestled in a peaceful yet well-connected sector, the residences offer a balanced lifestyle surrounded by greenery and urban conveniences.</p>
<p><strong>Luxury Living Redefined:</strong> SS Kiavasa is not just a home—it's a lifestyle destination that integrates modern living with serene surroundings.</p>
<p><strong>Perfect Choice for the Elite:</strong> If you're looking for a residence that merges luxury, convenience, and quality, SS Kiavasa Sector 83 Gurgaon is the ultimate address.</p>
    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/vr24ezdggrm9vp8kwmhl.jpeg" alt="Overview Image" class="img-fluid" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
                <img src="images/extra/kiavasa-elevation-170615529.jpeg" alt="Project Features" 
                    style="width: 100%; height: auto; min-height: 350px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
            </div>
            <!-- Right Side - Content -->
            <div style="flex: 1; max-width: 550px; text-align: left;">
            <h2 style="color: #1c355e; font-weight: bold; margin-bottom: 20px; font-size: 28px;">Project Features</h2>
<ul style="list-style: none; padding-left: 0; font-size: 15px;">
    <li>❄ <strong>VRV Air-Conditioning:</strong> Advanced climate control for all-season comfort.</li>
    <li>🍽 <strong>Fully Loaded Modular Kitchen:</strong> Equipped with modern appliances and sleek finishes.</li>
    <li>🏢 <strong>3 Side Open Apartments:</strong> Maximum ventilation and natural light in every home.</li>
    <li>🛗 <strong>3 High-Speed Lifts:</strong> Seamless vertical mobility for residents and guests.</li>
    <li>🌳 <strong>80% Open and Green Area:</strong> Lush landscaped surroundings promoting wellness.</li>
    <li>🧱 <strong>Italian Marble Flooring:</strong> Premium flooring in living and dining spaces for luxury appeal.</li>
    <li>🚪 <strong>Grand Entrance Lobby:</strong> Welcoming, double-height lobby with stylish finishes.</li>
    <li>☕ <strong>Cafeteria & Entrance Lounge:</strong> Relaxing social spaces for casual gatherings.</li>
    <li>🎯 <strong>Recreational Area:</strong> Designed for leisure and community engagement.</li>
    <li>🏖 <strong>Landscape Pool Deck:</strong> Beautifully designed lounging area around the pool.</li>
    <li>🏊 <strong>Two Swimming Pools:</strong> Refreshing zones for adults and kids alike.</li>
    <li>🎉 <strong>Poolside Party Areas:</strong> Ideal setting for celebrations by the water.</li>
    <li>💪 <strong>Fully Loaded Gymnasium:</strong> State-of-the-art fitness center for your health needs.</li>
    <li>🌿 <strong>Landscape Open Terrace:</strong> Scenic rooftop garden for relaxation and events.</li>
    <li>🏸 <strong>2 Badminton Courts:</strong> Dedicated sports facility for energetic play.</li>
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
                    <img src="images/extra/ze5cwrzsljwwbvw7dksh.jpeg" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/SS-Kiavasa-768x437.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/SS-Kiavasa-in-Gurgaon-Copy-768x392.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/SS-Kiavasa-highlights.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/SS-Kiavasa-features.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/SS-Kiavasa-brochure.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/SS-Kiavasa-sector-83.webp" class="img-fluid rounded shadow" alt="Gallery Image 5"
                    loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/SS-Kiavasa-image-8-qu4qbh0smor23fl227ik52920dj632ssprfajfl5wo.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
                            <td style="border: 2px solid #c79c3d; padding: 12px;">1450 SQ.FT</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3 BHK + S</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">1850 SQ.FT</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">On Request</td>
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
                <img src="images/extra/Screenshot 2025-04-08 160715.jpg" alt="Floor Plan" 
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
                <img src="images/extra/kiavasa-elevation-170615529.jpeg" alt="Overview Image" class="img-fluid" 
                     style="max-width: 100%; height: 500px; object-fit: cover; border-radius: 10px; 
                            box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
            <!-- Right Column: Content -->
            <div class="col-md-6">
            <h2 style="font-style: italic; color: #1c355e;">SS Kiavasa Highlights</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🏛 <strong>Grand Reception Lobbies:</strong> Elegant entrances designed to impress.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚪 <strong>Private Lobbies:</strong> Exclusive private lobby for each apartment.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏢 <strong>Clubhouse Access:</strong> Clubhouse connected via dedicated high-speed lifts.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌇 <strong>Wrap-around Balconies:</strong> Offering stunning panoramic views.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🛡 <strong>5-Tier Security:</strong> Multi-layered security for complete peace of mind.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🅿️ <strong>5-Level Parking:</strong> Ample parking space spread across five levels.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏘 <strong>172 Units:</strong> Available in multiple spacious configurations.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">💆‍♀️ <strong>Luxury Amenities:</strong> Including salon, swimming pool, and more.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏊 <strong>40,000 sq. ft. Clubhouse:</strong> A grand, expansive space for leisure and recreation.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌳 <strong>10 Acres of Green Space:</strong> Lush landscaped areas for peace and serenity.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏟 <strong>Large Pre-function Lobby:</strong> Includes a multipurpose hall for gatherings and events.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">👶 <strong>Swimming Pool & Kids Pool:</strong> Separate spaces for adults and children.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚴 <strong>Jogging & Cycling Track:</strong> Dedicated tracks for fitness and outdoor fun.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏗 <strong>Stilt + 4 Structure:</strong> Approved and allowed construction format.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">📄 <strong>Separate Floor Registry:</strong> Option for individual floor registration.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">💰 <strong>0% Home Loan on Plots:</strong> Flexible financing with zero percent interest.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏡 <strong>100% Home Loan on Construction:</strong> Full financing support for home building.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🔐 <strong>Gated Society:</strong> Includes park, market, and a community center for residents.</li>
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
<h3 style="color: #1c355e; font-size: 20px; margin-bottom: 15px;">Smart Living's Location Benefits</h3>
<ul style="list-style: none; padding-left: 0; font-size: 18px;">
    <li>🏙 <strong>DLF Cyber City:</strong> Just 15 minutes away.</li>
    <li>🏢 <strong>DLF Horizon Center:</strong> Only 5 minutes drive.</li>
    <li>🛍 <strong>South Point Mall:</strong> Reachable in just 4 minutes.</li>
    <li>✈ <strong>IGI Airport:</strong> Within a 25-minute drive.</li>
    <li>🏬 <strong>One Horizon Center:</strong> Located 5 minutes away.</li>
    <li>🛣 <strong>CPR (Central Peripheral Road):</strong> Just 10 minutes away.</li>
    <li>🌇 <strong>DLF Camellias:</strong> Only 5 minutes away.</li>
    <li>🚇 <strong>Sector 56 Metro Station:</strong> Just 2 minutes away.</li>
    <li>✈ <strong>IGI Airport:</strong> 30 minutes away.</li>
    <li>🧭 <strong>Rajiv Chowk:</strong> 18 minutes from the site.</li>
    <li>🌉 <strong>Clover Leaf Kherki Daula:</strong> Just 10 minutes away.</li>
    <li>🏭 <strong>IMT Manesar Industrial Area:</strong> 12 minutes from the location.</li>
    <li>🏥 <strong>Aarvy Healthcare Hospital:</strong> Accessible in 10 minutes.</li>
    <li>🏞 <strong>Karma Lakelands Resort:</strong> Just 12-minute drive.</li>
    <li>🛒 <strong>Elan Miracle Mall:</strong> Only 8 minutes away.</li>
    <li>🌐 <strong>Upcoming World Global City:</strong> Approximately 20 minutes away.</li>
    <li>🏫 <strong>RPS School:</strong> 15 minutes away.</li>
    <li>🎓 <strong>Amity University:</strong> Around 18 minutes from the location.</li>
</ul>


            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/cj8vqxi3ktp0dsqbdfay.jpeg" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
