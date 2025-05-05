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
    <div style="display: inline-block; max-width: 100%; overflow: hidden;">
        <img src="images/extra/1734154358265-front.jpg" alt="Image" style="width: 100%; height: auto; max-width: 1250px;">
    </div>
</div>




    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: #bab777;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>Elan The Emperor</h2>

            <p><strong>Elan The Emperor: A Landmark of Luxury Living in Sector 106, Gurgaon</strong></p>
<p>Nestled along the <strong>Dwarka Expressway</strong>, <strong>Elan The Emperor</strong> is a premium residential development in <strong>Sector 106, Gurgaon</strong>. This luxurious project offers <strong>spacious 4 and 5 BHK apartments</strong>, housed within <strong>three architecturally stunning towers soaring up to 38 stories</strong>. Spread across <strong>30 acres</strong>, it is designed to accommodate <strong>1,800 families</strong>, ensuring a perfect blend of <strong>sophistication, comfort, and exclusivity</strong>.</p>
<p>The development features <strong>meticulously designed floor plans</strong>, reflecting a <strong>modern and luxurious aesthetic</strong>. Residents can indulge in world-class amenities, including a <strong>podium-level clubhouse, state-of-the-art gymnasium, swimming pool, and children's play area</strong>. Strategically located, it offers <strong>seamless connectivity to major business hubs and Delhi Airport</strong>, making it a prime residential choice.</p>
<p>With a commitment to <strong>quality and innovation</strong>, <strong>Elan Group</strong>, established in <strong>2013</strong>, aims to redefine luxury living in Gurgaon, delivering <strong>exceptional residential experiences</strong> tailored for modern lifestyles.</p>



                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/50.jpg" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
        </div>
    </div>
</section>



    <!-- Features Section -->
<section id="Features" class="py-5" style="background-color:#bab777;">
    <div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px;">

        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 30px; text-align: center;">KEY FEATURES</h2>

        <div style="display: flex; flex-wrap: wrap; align-items: stretch; justify-content: center; gap: 30px;">

            <!-- Left Side - Image -->
            <div style="width: 100%; max-width: 400px; flex: 1; text-align: center; display: flex; align-items: center;">
                <img src="images/extra/birla-arika-apartments.webp" alt="Birla Arika"
                    style="width: 100%; height: 100%; max-height: 500px; object-fit: cover; border-radius: 10px; 
                    box-shadow: 5px 5px 15px rgba(0,0,0,0.3);">
            </div>

            <!-- Right Side - Content -->
            <div style="width: 100%; max-width: 600px; flex: 2; text-align: left;">
                <ul style="list-style: none; padding: 0;">
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-home" style="color: #000000; margin-right: 10px;"></i> Luxury Residences with Premium Features
                    </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-building" style="color: #000000; margin-right: 10px;"></i> Exclusive Podium-Level Clubhouse
                    </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-utensils" style="color: #000000; margin-right: 10px;"></i> Modular Kitchen with Concealed Piping
                    </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-wind" style="color: #000000; margin-right: 10px;"></i> VRV/VRF Air Conditioning in All Key Areas
                    </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-water" style="color: #000000; margin-right: 10px;"></i> Floating Sauna with Scenic Pool Views
                    </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-gem" style="color: #000000; margin-right: 10px;"></i> Imported Marble Flooring with Anti-Skid Finish
                    </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-eye" style="color: #000000; margin-right: 10px;"></i> Spacious Balcony with Stunning Views
                    </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-tree" style="color: #000000; margin-right: 10px;"></i> Landscaped Green Spaces for Relaxation
                    </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-plane" style="color: #000000; margin-right: 10px;"></i> Conveniently Located 15–20 Minutes from Delhi Airport
                    </li>
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
                    <img src="images/extra/1734154358265-front.jpg" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/elan-the-emperor-living-room.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/37.jpg" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/elan-the-emperor-sector-106-gurgaon.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/27.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/elan-the-emperor-inside-pool.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/elan-the-emperor-hall.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/47.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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

        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 20px;">

            <!-- Left Side - Table & Button -->
            <div style="width: 100%; max-width: 500px; text-align: center;">
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr style="background-color: transparent; color: white;">
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left; color: black;">Type</th>
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left; color: black;">Floor Plan</th>
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left; color: black;">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4 BHK (Wing)</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4223 Sq. Ft.* Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">₹ 10 Cr* Onwards</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4 BHK (Nose)</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4640 Sq. Ft.* Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">5 BHK (Wing)</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">5434 Sq. Ft.* Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">5 BHK (Nose)</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">5891 Sq. Ft.* Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4 BHK Penthouse (Wing)</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">7225 Sq. Ft.* Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4 BHK Penthouse (Nose)</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">8053 Sq. Ft.* Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">5 BHK Penthouse (Wing)</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">9470 Sq. Ft.* Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">On Request</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">5 BHK Penthouse (Nose)</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">10347 Sq. Ft.* Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">On Request</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" style="padding: 10px 15px; font-size: 16px;">
                    Download Floor Plan
                </button>
            </div>

            <!-- Right Side - Floor Plan Image -->
            <div style="width: 100%; max-width: 500px; text-align: center;">
                <img src="images/extra/elan-the-emperor-floor-plan.webp" alt="Floor Plan" data-bs-toggle="modal" data-bs-target="#contactModal"
                     style="width: 100%; max-width: 450px; height: auto; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); transition: filter 0.3s;"
                     onmouseover="this.style.filter='none'" onmouseout="this.style.filter='blur(2px)'">
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
    <img src="images/extra/highlights.jpg" alt="Overview Image" class="img-fluid" 
         style="max-width: 100%; height: 500px; object-fit: cover; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
</div>
        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2 style="font-style: italic; color: #1c355e;">Elan The Emperor </h2>
        <ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">🏢 <strong>Luxury Residential Project:</strong> Experience unparalleled elegance and comfort.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏗 <strong>Total Towers:</strong> 3 beautifully designed towers.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏠 <strong>Total Units:</strong> 1,800 spacious and premium residences.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌍 <strong>Land Area:</strong> Sprawled across 30 acres of prime land.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌳 <strong>Green & Club-Facing:</strong> All units offer serene views of lush greenery and the clubhouse.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏛 <strong>Architect:</strong> Designed by world-renowned UHA LONDON.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🍽 <strong>Fully Loaded Kitchen:</strong> Equipped with premium appliances and modern fittings.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">❄ <strong>VRV Air Conditioning:</strong> Advanced climate control for year-round comfort.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🛏 <strong>Servant & Powder Room:</strong> Available in all units for added convenience.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏋 <strong>Podium-Level Clubhouse:</strong> Exclusive clubhouse with premium lifestyle amenities.</li>
</ul>
            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
    </div>
</div>
    </section>

    <section id="location" class="bg-light" style="padding: 50px 0; background: #bab777;">
    <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; max-width: 1100px; margin: auto;">
        <!-- Left Content -->
        <div style="width: 100%; max-width: 500px; text-align: center; margin-bottom: 20px;">
            <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Location Advantages</h2>
            <ul style="list-style: none; padding-left: 0; font-size: 18px; text-align: left; margin: auto; max-width: 400px;">
                <li>🛣 🚗 <strong>Conscient One:</strong> 650 Mtr</li>
                <li>🚆 🚉 <strong>Gurgaon Old Railway:</strong> 2.7 Km</li>
                <li>🏥 🚑 <strong>Rion's Hospital:</strong> 4.7 Km</li>
                <li>🛤 🚘 <strong>Dwarka Expressway:</strong> 4.9 Km</li>
                <li>🏨 🍽 <strong>Park Inn:</strong> 7.4 Km</li>
                <li>🏟 🏅 <strong>Tau Devi Lal Athletic Stadium:</strong> 9 Km</li>
                <li>🎡 💦 <strong>Fun N Food Water & Amusement Park:</strong> 11.9 Km</li>
                <li>✈ 🚖 <strong>Indira Gandhi International Airport:</strong> 17.3 Km</li>
            </ul>
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal" style="margin-top: 15px;">
                Get Details →
            </button>
        </div>
        <!-- Right Side - Image -->
        <div style="width: 100%; max-width: 500px; text-align: center;">
            <img src="images/extra/location.jpg" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
                 style="width: 100%; max-width: 400px; height: auto; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
        </div>
    </div>
</section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
