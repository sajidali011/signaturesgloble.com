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
    
     /* Slideshow Container */
  .slideshow-container {
    width: 100%;
    max-width: 600px;  /* 🔥 Image Size Increase */
    aspect-ratio: 16 / 10;  /* 🔥 Image Height Bhi Badi Ho Jayegi */
    position: relative;
    overflow: hidden;
    border-radius: 12px;
 
  }

  /* Images */
  .slideshow-img {
    width: 100%;
    height: 100%;
    object-fit: contain;  /* 🔥 Image Crop Nahi Hogi */
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }

  /* Active Image */
  .slideshow-img.active {
    opacity: 1;
    z-index: 1;
  }

  /* Responsive Fixes */
  @media (max-width: 768px) {
    .slideshow-container {
      max-width: 100%;
      aspect-ratio: 4 / 3;  /* 🔥 Mobile Pe Adjust */
    }
    
    /* Table Text Size Adjust */
    table {
      font-size: 14px;
    }

    /* Button Responsive */
    button {
      font-size: 16px;
      padding: 10px 15px;
    }
  }
   /* Mobile Responsive */
   @media (max-width: 768px) {
        .container {
            flex-direction: column;
            text-align: center;
        }
        ul {
            font-size: 16px;
        }
        button {
            font-size: 16px;
            padding: 10px 15px;
            margin-top: 10px;
        }
        /* Mobile Image Size */
        div[style*="height: 400px"] {
            height: 280px; /* Mobile pe thoda chhota */
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
    <div style="display: inline-block; width: 100%; max-width: 1250px;">
        <img src="images/extra/20722Whiteland-The-Aspen-Gurgaon-sector76.webp" alt="Image" 
             style="width: 100%; height: auto; max-height: 600px; object-fit: cover;">
    </div>
</div>




    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: #bab777;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>Emaar Urban Ascent Sector 112 Gurgaon</h2>
<p><strong>Emaar Urban Ascent</strong> in Sector 112 Gurgaon is a prestigious residential project designed to offer a blend of luxury, modern living, and natural surroundings.</p>
<p><strong>Sprawling 9-Acre Development:</strong> A testament to Emaar's commitment to world-class living spaces that cater to the evolving aspirations of urban dwellers.</p>
<p><strong>Prime Location:</strong> Situated in one of Gurgaon's most sought-after locations, providing excellent connectivity to major business hubs, NH-48, and Delhi.</p>
<p><strong>Luxury & Green Living:</strong> Thoughtfully designed with open green spaces, contemporary architecture, and a serene environment for an elevated lifestyle.</p>
<p><strong>Premium Amenities:</strong> Equipped with state-of-the-art facilities including a clubhouse, fully-equipped gym, spa, multipurpose halls, and community social spaces.</p>
<p><strong>Ideal for Homebuyers & Investors:</strong> A perfect blend of exclusivity and convenience, offering high investment potential and modern urban living.</p>

                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/highlight2.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
                <img src="images/extra/9vtzx5n_1738232247_565516299_optOrig.jpg"" alt="Birla Arika"
                    style="width: 100%; height: auto; min-height: 350px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
            </div>

            <!-- Right Side - Feature List -->
            <div style="flex: 1; max-width: 550px;">
                <br><br>
                <h2 style="color: #1c355e; font-weight: bold; margin-bottom: 20px; font-size: 28px;">Emaar Urban Ascent 112</h2>
                <ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 16px;">🏠 <strong>Only 4 Apartments Per Floor</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🔒 <strong>Multi-tier Security System</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌿 <strong>Resort Style Central Greens</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">⚡ <strong>Top-notch Specifications</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚪 <strong>Grand Entry Experience</strong></li>
    <li style="margin-bottom:10px;font-size: 16px;">🍽️ <strong>Modular Kitchen with Latest Appliances</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏡 <strong>Fully Loaded Apartments</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏢 <strong>World-Class Clubhouse</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏋️‍♂️ <strong>Well-Equipped Gymnasium</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🛋️ <strong>Fully Loaded Homes</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏊‍♂️ <strong>Infinity Edge Swimming Pool</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌳 <strong>80% Open Space</strong></li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏞️ <strong>3 Acres Central Green</strong></li>
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



<section id="gallery" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4" style="font-style: italic; color: #1c355e;">Gallery</h2>
        <div class="row g-3">
            <!-- Image 1 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/tcuujur_1738232171_565516295_optOrig.jpg" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/9vtzx5n_1738232247_565516299_optOrig.jpg" class="img-fluid rounded shadow" alt="Gallery Image 2" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/qcrppeq_1738232247_565516301_optOrig.jpg" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/bwgeusx_1738232249_565516313_optOrig.jpg" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/uhn0w48_1738232172_565516305_optOrig.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/xboex14_1738232249_565516309_optOrig.jpg" class="img-fluid rounded shadow" alt="Gallery Image 6" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/o5iesds_1738232249_565516311_optOrig.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/yx50bmh_1738232249_565516317_optOrig.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
        
        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 30px;">Sizes & Floor Plan</h2>

        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 40px;">

            <!-- Left Side - Table & Button -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: left;">
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr style="background-color: transparent; color: black;">
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Type</th>
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Carpet Area</th>
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">3.5 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">2165 sq.ft</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4.5 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">2810 sq.ft</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4.5 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">3150 sq.ft</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">Call For Price</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" style="padding: 12px 20px; font-size: 18px;">Download Floor Plan</button>
            </div>

            <!-- Right Side - Slideshow -->
            <div class="slideshow-container" data-bs-toggle="modal" data-bs-target="#contactModal">
                <img src="images/extra/1737624620935-f9.webp" alt="Floor Plan 1" class="slideshow-img active">
                <img src="images/extra/1734865013812-f2.webp" alt="Floor Plan 2" class="slideshow-img">
                <img src="images/extra/1734865013816-f3.webp" alt="Floor Plan 3" class="slideshow-img">
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
    <img src="images/extra/uhn0w48_1738232172_565516305_optOrig.jpg" alt="Overview Image" class="img-fluid" 
    data-bs-toggle="modal" data-bs-target="#contactModal"   style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
</div>
        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2 style="font-style: italic; color: #1c355e;">HIGHLIGHTS </h2>
        <h3>Exceptional Properties. Exceptional Clients</h3>
        <ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">🌳 <strong>Expansive 80% Open Spaces</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏢 <strong>Grand Clubhouse:</strong> 50+ Premium Amenities</li>
    <li style="margin-bottom: 10px; font-size: 18px;">📍 <strong>Prime Location:</strong> Located in a sought-after neighborhood</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🎓 <strong>Nearby Facilities:</strong> Close to Top Schools, IT Hubs, and Shopping Malls</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏡 <strong>Luxury Homes:</strong> Premium 3 & 4 BHK Residences in Gurgaon's Sector 112</li>
    <li style="margin-bottom: 10px; font-size: 18px;">✨ <strong>Refined Lifestyle:</strong> Exceptional amenities and connectivity</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏗 <strong>Renowned Developer:</strong> Developed by Emaar, a trusted real estate brand</li>
    <li style="margin-bottom: 10px; font-size: 18px;">💰 <strong>Ideal Investment:</strong> Perfect for homebuyers & investors in Gurgaon</li>
    <li style="margin-bottom: 10px; font-size: 18px;">📈 <strong>High ROI:</strong> Excellent investment potential with property value appreciation</li>
</ul>



            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
    </div>
</div>
    </section>

    <section id="location" class="bg-light" style="padding: 50px 0; background:rgb(225, 225, 222);">
    <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; max-width: 1100px; margin: auto; gap: 30px;">

        <!-- Left Content -->
        <div style="flex: 1; min-width: 300px; max-width: 550px; text-align: left;">
            <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Location Advantages</h2>
            <h3 style="color: #1c355e; font-size: 20px; margin-bottom: 15px;">Smart Living's Location Benefits</h3>

            <ul style="list-style: none; padding-left: 0; font-size: 18px;">
                <li>🛣 <strong>Bang on Dwarka Expressway</strong></li>
                <li>🏥 <strong>Nearby Hospitals:</strong> Park Hospital, Medanta The Medicity, Columbia Asia, and Manipal Hospital.</li>
                <li>🏫 <strong>Reputed Schools Nearby:</strong> Orchids the International, Delhi Public School, Shikshiyan School, etc.</li>
                <li>🏨 <strong>Luxury Hotels:</strong> Vivanta Dwarka, Lemon Tree, Hau Monde, Radisson, The Westin, etc.</li>
                <li>🏢 <strong>Top Corporates in the Vicinity:</strong> Emaar Business Park, VSR 114, One Indiabulls, Chintels Corporate Park.</li>
                <li>🚆 <strong>Well-connected to:</strong> DLF Cyber City, IGI Airport, and Udyog Vihar.</li>
                <li>🛍 <strong>Nearby Commercial & Retail Projects:</strong> Arcade 114, EBD 114, Grand Central, Conscient One.</li>
                <li>🏛 <strong>Approx. 7 km to Yashobhoomi Convention Centre</strong></li>
                <li>📍 <strong>Major Landmarks Nearby:</strong> Diplomatic Enclave 2, Bharat Vandana Park.</li>
            </ul>

            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>

        <!-- Right Side - Image -->
        <div style="flex: 1; min-width: 300px; max-width: 500px; text-align: center;">
            <div style="width: 100%; height: 400px; background:rgb(16, 16, 16); display: flex; align-items: center; justify-content: center; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
                <img src="images/extra/lgm4zp4_1738232246_565516291_O.jpg" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"
                    style="max-width: 100%; max-height: 100%; object-fit: contain;">
            </div>
        </div>

    </div>
</section>

<style>
    /* Mobile Responsive */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            text-align: center;
        }
        ul {
            font-size: 16px;
        }
        button {
            font-size: 16px;
            padding: 10px 15px;
            margin-top: 10px;
        }
        /* Mobile Image Size */
        div[style*="height: 400px"] {
            height: 280px; /* Mobile pe thoda chhota */
        }
    }
</style>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  // JavaScript for Slideshow
  document.addEventListener("DOMContentLoaded", function () {
      let index = 0;
      const images = document.querySelectorAll('.slideshow-img');

      function showNextImage() {
          images.forEach((img, i) => {
              img.classList.remove('active');
              if (i === index) {
                  img.classList.add('active');
              }
          });

          index = (index + 1) % images.length;
      }

      setInterval(showNextImage, 2000); // Change image every 2 seconds
  });
</script>


</body>
</html>
