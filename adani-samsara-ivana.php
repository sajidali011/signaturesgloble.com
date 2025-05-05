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
    <div style="display: inline-block; width: 100%; max-width: 1250px;">
        <img src="images/extra/Aproach road02.webp" alt="Image" loading="lazy"
             style="width: 100%; height: auto; max-height: 600px; object-fit: cover;">
    </div>
</div>




    <!-- Sections -->
    <section id="overview" class="bg-light" >
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
    <h2>Adani Ivana Gurgaon</h2>
    <p><strong>Adani Samsara Ivana</strong> is a premium residential project by the renowned Adani Group, located in Sector 63, Golf Course Extension Road, Gurgaon.</p>
    <p><strong>Luxury 4 BHK Low Rise Floors:</strong> Designed with modern luxury features to offer an uncompromising living experience.</p>
    <p><strong>Prime Location:</strong> Situated on the prestigious Golden Mile, ensuring seamless connectivity to key business hubs and major roadways.</p>
    <p><strong>Spacious & Thoughtful Design:</strong> The project features well-ventilated spaces with ample natural light, ensuring a peaceful and refreshing environment.</p>
    <p><strong>Green & Serene Living:</strong> Surrounded by lush greenery, the project offers an oxygen-rich atmosphere with breathtaking views.</p>
    <p><strong>Grand Master Bedroom:</strong> Crafted for ultimate comfort, making you feel like royalty in your own home.</p>

    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>

            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/Senior Citizen Park view.webp" alt="Overview Image" class="img-fluid"loading="lazy" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
                <img src="images/extra/features.webp" alt="Birla Arika" loading="lazy"
                    style="width: 100%; height: auto; min-height: 350px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
            </div>

            <!-- Right Side - Content -->
            <div style="flex: 1; max-width: 550px; text-align: left;">
                <h2 style="color: #1c355e; font-weight: bold; margin-bottom: 20px; font-size: 28px;">Adani Samsara Ivana Features</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                    <div style="border-left: 3px solid #1c355e; padding-left: 10px;">
                        <h4 style="font-weight: bold; color: #333;">LUXURIOUS INTERIOR</h4>
                        <p style="color: #555;">Every inch of Ivana gives the reflection of a bespoke timepiece where you and your loved ones can feel at home together with private access-controlled lifts for each resident.</p>
                    </div>
                    <div style="border-left: 3px solid #1c355e; padding-left: 10px;">
                        <h4 style="font-weight: bold; color: #333;">BEST OF SAFETY</h4>
                        <p style="color: #555;">With the best multi-layer security system and dedicated security personnel, your safety is ensured all year long.</p>
                    </div>
                    <div style="border-left: 3px solid #1c355e; padding-left: 10px;">
                        <h4 style="font-weight: bold; color: #333;">PRIVATE TERRACE</h4>
                        <p style="color: #555;">Take your living to the next level with a private terrace. Perfect for relaxation or entertaining, giving you a piece of nature at your doorstep.</p>
                    </div>
                    <div style="border-left: 3px solid #1c355e; padding-left: 10px;">
                        <h4 style="font-weight: bold; color: #333;">WORLD-CLASS RECREATION</h4>
                        <p style="color: #555;">Designed to keep you connected, the clubhouse welcomes you with rejuvenating spaces, along with sports facilities for entertainment.</p>
                    </div>
                </div>
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
                    <img src="images/extra/Aproach road02.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Senior Citizen Park view.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/kids-area.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Untitled-design-28.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/badminton.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Adani-Samsara-Ivana-qyspje42uup3pg0oafbmmkawz5g8zypqf1w2f13v18.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/gallery4.webp" class="img-fluid rounded shadow" alt="Gallery Image 5"
                    loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/gallery5.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
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

        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 30px;">

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
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4 BHK + Utility + Terrace/Basement</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">2008 Sq. Ft. Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">Call For Price</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" style="padding: 10px 15px; font-size: 16px;">Download Floor Plan</button>
            </div>

            <!-- Right Side - Single Floor Plan Image -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: center;">
                <img src="images/extra/floor-plan.webp" alt="Floor Plan" 
                     style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); object-fit: cover; max-height: 500px;">
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
    <img src="images/extra/kids-area.webp" alt="Overview Image" class="img-fluid" 
         style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
</div>
        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2 style="font-style: italic; color: #1c355e;">HIGHLIGHTS - Adani Samsara Ivana</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">🌍 <strong>Expansive Development:</strong> Spread across 70 acres of integrated township.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏡 <strong>Luxury Low-Density Living:</strong> Only 260 floors ensuring exclusivity.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🚗 <strong>Parking:</strong> Dedicated 2 car parks per floor with EV charging feature.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌳 <strong>Green Spaces:</strong> Adjacent to a 1.18-acre lush green park.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏗 <strong>Spacious Layout:</strong> 4BHK configurations with Basement + Stilt + Fourth Floor.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">✨ <strong>Fully Loaded Floors:</strong> Equipped with high-end features and finishes.</li>
    

            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
    </div>
</div>
    </section>

    <section id="location" class="bg-light" style="padding: 50px 0; background: #bab777;">
    <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; max-width: 1100px; margin: auto; gap: 20px;">
        <!-- Left Content -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Location Advantages</h2>
            <h3 style="color: #1c355e; font-size: 20px; margin-bottom: 15px;">Smart Living's Location Benefits</h3>
            <ul style="list-style: none; padding-left: 0; font-size: 18px;">
                <li>🛍 <strong>Retail/Shopping Convenience:</strong> Just 2 mins away.</li>
                <li>🚆 <strong>Sector 63, Golf Course Extension Road / Rapid Metro:</strong> 5 mins away.</li>
                <li>🏨 <strong>Grand Hyatt Hotel:</strong> Located just 5 mins away.</li>
                <li>🛣 <strong>Sohna Road:</strong> Accessible within 5 mins.</li>
                <li>🚇 <strong>Huda City Centre Metro:</strong> Just 15 mins away.</li>
                <li>🏥 <strong>Fortis Hospital:</strong> 15 mins drive.</li>
                <li>🏥 <strong>Artemis Hospital:</strong> 15 mins drive.</li>
                <li>🏥 <strong>Paras Hospital:</strong> 15 mins drive.</li>
                <li>🏥 <strong>Max Hospital:</strong> 15 mins drive.</li>
                <li>✈ <strong>IGI Airport:</strong> 30 mins away.</li>
            </ul>
            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/Adani-Samsara-Ivana-Location-Map.webp" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
