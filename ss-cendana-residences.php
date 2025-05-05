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
        <img src="images/extra/39092442337962154403.webp" alt="Image" 
             style="width: 100%; height: auto; max-height: 600px; object-fit: contain;">
    </div>
</div>





    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: rgb(225, 225, 222) !important;" >
    <div class="container" >
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>SS Cendana Residence, Sector 83, Gurgaon</h2>
<p><strong>SS Cendana Residence</strong> is a unique, freshly launched residential project by SS Group located in Gurgaon. A place where you can live a refreshing lifestyle, breathe in the finest air quality, and enjoy a cool, modern living experience. This project offers a perfect balance between luxury and sustainability, providing you with the independence to breathe in the purest air.</p>
<p><strong>Thoughtfully Designed Living:</strong> SS Cendana Residence is meticulously planned to offer luxurious and comfortable living spaces. It’s an innovative project designed to fulfill the dream of residing in a pure, eco-friendly environment. The location itself is poised to become a major hub with many upcoming commercial and social developments, enhancing the value of the area. It's a destination for SMEs and entrepreneurs, offering superb infrastructure and great opportunities.</p>
<p><strong>Strategic Location:</strong> SS Cendana Residence is strategically situated in Sector 83, Gurgaon, with signal-free connectivity from NH-8 and four major expressways, including NH-48, Dwarka Expressway, and KMP Expressway. It is also easily accessible from the IGI Airport, making it an ideal location for both work and leisure.</p>78789072
<p><strong>Exclusive Living Experience:</strong> The project promises private, comfortable living with residential apartments designed to offer luxurious experiences. With the increasing pollution levels, SS Cendana Residence has incorporated several air-purifying elements like salt lamps and beeswax candles in common areas to ensure the air remains fresh and pure.</p>


    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/11847158861182913473ss-cendana.webp" alt="Overview Image" class="img-fluid" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
                <img src="images/extra/1559997672179256032109.webp" alt="Project Features" 
                    style="width: 100%; height: auto; min-height: 350px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
            </div>
            <!-- Right Side - Content -->
            <div style="flex: 1; max-width: 550px; text-align: left;">
            <h2 style="color: #1c355e; font-weight: bold; margin-bottom: 20px; font-size: 28px;">Project Features</h2>

<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🏊 <strong>Swimming Pool:</strong> Relax and unwind in a luxurious pool area.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">💪 <strong>Fully Loaded Gymnasium:</strong> State-of-the-art fitness center for all your wellness needs.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌳 <strong>85% Open Space:</strong> Expansive open areas to enjoy fresh air and greenery.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏸 <strong>Choice of Sports & Indoor Games:</strong> A variety of sports and indoor game options for everyone.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🎉 <strong>Lavish Multi-purpose Banquet Hall:</strong> Ideal venue for events, parties, and gatherings.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌱 <strong>Organic Garden:</strong> Grow your own organic vegetables and herbs.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏗️ <strong>Stilts & Hardscape Area:</strong> Thoughtfully designed spaces for additional convenience.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌺 <strong>Designer Landscaping:</strong> Beautifully crafted landscaping that enhances the project's aesthetic appeal.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚗 <strong>Multiple Visitors Car Park:</strong> Convenient parking spaces for your guests.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏛️ <strong>Elegant & Spacious Lobby:</strong> A grand entrance that sets the tone for the entire building.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚪 <strong>Separate Elevators for Residents & Services:</strong> Efficient and exclusive elevator access for both residents and services.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏢 <strong>Multipurpose Hall:</strong> A versatile space for various activities and events.</li>
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
                    <img src="images/extra/202908928770544854205.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/209546603167771225707.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/23644832723525520908.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/571842830124306861806.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/2108169006176269239501.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/968918846174753764002.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" loading="lazy"
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
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">1450 SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;"> 3 BHK+Study</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">1850  SQ.FT Onwards</td>
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
                <img src="images/extra/I11808128139SSCendanaBrochure_page-0018.jpg" alt="Floor Plan"data-bs-toggle="modal"data-bs-target="#contactModal" 
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
            <h2 style="font-style: italic; color: #1c355e;">HIGHLIGHTS - </h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🏛 <strong>Grand Club House:</strong> Spans approximately 40,000 sq. ft. with world-class amenities.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌳 <strong>10 Acres of Green Spaces:</strong> Beautifully landscaped surroundings for serene living.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">📐 <strong>Apartment Sizes:</strong> Ranging from 1450 to 1850 sq. ft. for spacious, luxurious living.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏊 <strong>Clubhouse with Swimming Pool:</strong> Relax and rejuvenate with a dip anytime you like.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏢 <strong>10 Residential Towers:</strong> A thoughtfully planned premium development.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🛋 <strong>Large Pre-function Lobby:</strong> Includes a stylish and multi-purpose hall for events.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌬 <strong>Clean Air Measures:</strong> Features like salt lamps and beeswax candles in common areas for fresh air quality.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚗 <strong>Spacious Car Parking:</strong> Adequate and well-planned parking facilities for all residents.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏠 <strong>Signature Living:</strong> SS Cendana Residences Sector 83 Gurgaon is a unique and exquisite residential property.</li>
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
    <li style="margin-bottom: 10px; font-size: 16px;">📍 <strong>Prime Location:</strong> Located in Sector 83, New Gurugram, SS Cendana Residence is within minutes of NH 48, Dwarka Expressway, and all the well-established social infrastructure of the buzzing millennium city.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚗 <strong>3 Mins From Dwarka Expressway:</strong> Effortless access to one of the key expressways in the region.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚘 <strong>5 Mins From NH-48 (NH-08):</strong> Easy connectivity to the national highway for smooth travel.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🚦 <strong>10 Mins From Rajiv Chowk:</strong> Quick commute to one of the most well-known junctions in the city.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">✈ <strong>25 Mins From IGI Airport:</strong> Hassle-free travel with quick access to the international airport.</li>
</ul>


            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/SS-Cendana-Residence-Location-Map-1536x1102.webp" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
