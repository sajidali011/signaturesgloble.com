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
    <div style="display: inline-block;">
        <img src="images/extra/Navraj The Kingstown Heights 37D.jpg" alt=" Image" style="width: 1250px; height: 600px;">
    </div>
</div>



    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: #bab777;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>Navraj The Kingstown Heights</h2>

<p>Navraj The Kingstown Heights, located in Sector 37D, Gurgaon, is an ultra-luxury residential project designed for those who seek elegance, comfort, and exclusivity. Its thoughtfully crafted homes offer spacious interiors, modern designs, and large windows that invite natural light and scenic views.This prime location provides seamless connectivity to business hubs, premium shopping centers, and renowned educational institutions, making it an ideal choice for families and working professionals.The project boasts world-class amenities, including landscaped gardens, a clubhouse, swimming pools, fitness centers, and curated spaces for relaxation and entertainment. Every corner reflects meticulous architectural finesse, ensuring a luxurious living experience.For investors, Navraj The Kingstown Heights represents not just a home, but a legacy. With Gurgaon’s luxury real estate market thriving, this project offers both prestige and promising returns.Choosing Navraj The Kingstown Heights means embracing an extraordinary lifestyle where innovation meets sophistication, making your dream of ultra-luxury living a reality.</p>

                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/Navraj-The-Kingstown-Heights-Sector-37D-Gurgaon-Redefining-Luxury-Living-in-the-Heart-of-the-City.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
        </div>
    </div>
</section>



    <!-- Features Section -->
    <section id="Features" class="py-5" style="background-color:#bab777;">
    <div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px;">
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 50px;">

            <!-- Left Side - Image -->
            <div style="width: 100%; max-width: 400px; flex: 1; text-align: center; margin-bottom: 20px;">
                <img src="images/extra/birla-arika-apartments.webp" alt="Birla Arika"
                    style="width: 100%; max-width: 400px; height: 500px; object-fit: cover; border-radius: 10px; 
                    box-shadow: 5px 5px 15px rgba(0,0,0,0.3);">
            </div>

            <!-- Right Side - Content -->
            <div style="width: 100%; max-width: 650px; flex: 2; text-align: left;">
                <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px; font-size: 28px;">KEY FEATURES</h2>
                <ul style="list-style: none; padding: 0;">
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-building" style="color: #000000; margin-right: 10px;"></i> Ultra-Luxury 3 BHK</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-elevator" style="color: #000000; margin-right: 10px;"></i> Private Lift Lobby Within Each Apartment </li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-map" style="color: #000000; margin-right: 10px;"></i> 8.5 Acres Project Area</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-home" style="color: #000000; margin-right: 10px;"></i> Only 125 Units</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-layer-group" style="color: #000000; margin-right: 10px;"></i> 2 Units Per Floor</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-pencil-ruler" style="color: #000000; margin-right: 10px;"></i> Architect – UHA London</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-expand-arrows-alt" style="color: #000000; margin-right: 10px;"></i> Running Balcony with Big Deck Area</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-bed" style="color: #000000; margin-right: 10px;"></i> Spacious Rooms (12*18)</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-arrows-alt-v" style="color: #000000; margin-right: 10px;"></i> Apartment Ceiling - 12.5 Ft</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-landmark" style="color: #000000; margin-right: 10px;"></i> Club & Amenities - 2 Lac sqft</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-users" style="color: #000000; margin-right: 10px;"></i> 5 Different Clubs for Amenities</li>
                    <li style="font-size: 18px; color: #333; margin-bottom: 12px;">
                        <i class="fas fa-swimming-pool" style="color: #000000; margin-right: 10px;"></i> 3 Swimming Pools including All Weather Pool</li>
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
                    <img src="images/extra/Navraj-The-Kingstown-Heights-image-1-r27gee1d24on8x6otgvaepqx7c7hw5zeo96lpnqcdk.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Navraj-The-Kingstown-Heights-image-3-r27gejoe74wd6kyhwjb1tobornfp6clsp13ilbhzc8.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Navraj-The-Kingstown-Heights-image-1-r27gee1d24on8x6otgvaepqx7c7hw5zeo96.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Navraj-The-Kingstown-Heights-image-2-r27geguvmmsi7r2ld036471azhtlj9alon525hm5uw.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/navraj-kings-banner-34260.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Navraj-The-Kingstown-Heights-image-2.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/banner.png" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/Navraj-The-Kingstown-Heights-Sector-37D-Gurgaon-Redefining-Luxury-Living-in-the-Heart-of-the-City.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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

        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;">

            <!-- Left Side - Table & Button -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: left;">
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr style="background-color: transparent; color: white;">
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Type</th>
                            <th style="border: 2px solid #c79c3d; padding: 10px; text-align: left;">Area</th>
                        </tr>
                    </thead>
                    <tbody style="filter: blur(3px);">
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">3 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">1850 sqft Onwards</td>
                        </tr>
                    </tbody>
                    <tbody style="filter: blur(3px);">
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">3 BHK +S</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">2250 sqft Onwards</td>
                        </tr>
                    </tbody>
                    <tbody style="filter: blur(3px);">
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">4 BHK +S</td>
                            <td style="border: 2px solid #c79c3d; padding: 10px;">2250 sqft Onwards</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" style="padding: 10px 15px; font-size: 16px;">Download Floor Plan</button>
            </div>

            <!-- Right Side - Floor Plan Image -->
            <div style="width: 100%; max-width: 500px; flex: 1; text-align: center;">
                <img src="images/extra/birla-arika-floor-plan.webp" alt="Floor Plan" data-bs-toggle="modal" data-bs-target="#contactModal"style="width: 100%; max-width: 450px; height: auto; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
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
            <img src="images/extra/g-8.jpg" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
        </div>

        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2 style="font-style: italic; color: #1c355e;">Navraj Antalyas Highlights</h2>
        <ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">🏢 <strong>1 Lac sq. ft. Club Space:</strong> Top-notch facilities for luxury living.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🎨 <strong>Exquisite Design:</strong> 5 Different Clubs, 3 Swimming Pools, Triple Height Lobby.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏠 <strong>Spacious Interiors:</strong> Living spaces with 12.5 Ft. ceilings.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">❄ <strong>Premium Specifications:</strong> VRV Air Conditioning, Fresh Air Provision, Ultra Luxury Features.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🚧 <strong>Upcoming Construction:</strong> First phase of the project to begin this year.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🛠 <strong>Quality Construction:</strong> A+ Grade Construction Partner ensuring impeccable craftsmanship.</li>
</ul>




            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
    </div>
</div>
    </section>

    <section id="location" class="bg-light" style="padding: 50px 0; background: #bab777; !important;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; max-width: 1100px; margin: auto;">
        <!-- Left Content -->
        <div style="max-width: 50%;">
        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Location Advantages</h2>
<h3 style="color: #1c355e; font-size: 20px; margin-bottom: 15px;">Sector 37D enjoys its proximity to key employment hubs of the city like Cyber City, Golf Course, Sohna, Manesar, etc. Major corporate hubs of the city are at a driving distance. Major industrial employment centre of Manesar is in close proximity.</h3>

<ul style="list-style: none; padding-left: 0; font-size: 18px;">
    <li>✈ <strong>Airport Access:</strong> 26 Km from Indira Gandhi International Airport.</li>
    <li>🏭 <strong>Industrial Hub:</strong> Major industrial employment centre of Manesar is in close proximity.</li>
    <li>🚗 <strong>Easy Connectivity:</strong> 10 Minutes away from Dwarka & Ansal Plaza.</li>
    <li>🚇 <strong>Expressway Nearby:</strong> Near to Dwarka Expressway, providing seamless connectivity.</li>
    <li>🛣 <strong>Delhi Access:</strong> Few minutes from Delhi through Dwarka Expressway.</li>
    <li>🚘 <strong>Hero Honda Chowk:</strong> Just 10 minutes drive to Hero Honda Chowk.</li>
    <li>⛳ <strong>Recreation:</strong> 20 Minutes away from DDA Golf Course.</li>
</ul>

            <!-- Button -->
           <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal" 
           >Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="max-width: 45%;">
            <img src="images/extra/Navraj-The-Kingstown-Heights-Location-Map-1.webp" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
