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
                    <li class="nav-item"><a class="nav-link" href="#aboutus">About Us</a></li>
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
        <img src="images/extra/banner.webp" alt=" Image" style="width: 1250px; height: 600px;">
    </div>
</div>



    <!-- Sections -->
    <section id="aboutus" class="bg-light" style="background: #bab777;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
                <h2>About Trinity Sky Palazzos</h2>
                <br><br>
                <p>Sky Palazzos by Trinity, in Sector 88B, Dwarka Expressway, Gurgaon is a luxurious residential project offering 3 & 4 BHK apartments. Each apartment is designed for modern living with contemporary finishes, energy efficient systems and thoughtful layouts to maximize natural light and air. Trinity Sky Palazzos is a perfect choice for individuals and families looking for quality homes.</p>
                <p>Span over 11 Acers this projects has a 1.5 lacs Sq. Ft.(approx) clubhouse, Skywalk Rock, Climbing Wall, Amphitheatre with Shade Canopy, Senior Citizen Wellness Garden, Barbeque/Seating Area, Infinity Pool with Cascading Waterfall and many more, for a balanced living. Sky Palazzos is located near major transportation hubs, shopping areas and educational institutions, the project offers convenience to its residents. With emphasis on sustainability and modern design Trinity Sky Palazzos is a great place to live in Sector 88B Gurgaon’s most sought after location.</p>
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/highlights.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
        <h2 class="text-center mb-4" style="font-style: italic; color: #1c355e;">Trinity Sky Palazzos Images</h2>
        <div class="row g-3">
            <!-- Image 1 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/trinity-sky-palazzos-gallery.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/trinity-sky-palazzos-image.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/highlights.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/trinity-sky-palazzos-photo.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/trinity-sky-palazzos-photos.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/trinity-sky-palazzos-pic.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 7 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/trinity-sky-palazzos-picture.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/trinity-sky-palazzos-pictures.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>

        </div>
    </div>
</section>


<section id="floorplan" style="padding: 50px 0; background-color:#bab777; text-align: center;">
<div class="container">
    <h2 style="font-style: italic; color: #1c355e;">Floor Plans</h2>

    <div style="display: flex; align-items: center; justify-content: space-between; gap: 30px; margin-top: 20px; flex-wrap: wrap;">
        <!-- Left Section (Text Content) -->
        <div style="flex: 1; min-width: 300px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Sizes & Floor Plan</h2>

<table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
    <thead>
        <tr style="background: none; color: white; border-bottom: 2px solid #c89746;">
            <th style="padding: 12px; border: 2px solid #c89746;background-color:black;">Type</th>
            <th style="padding: 12px; border: 2px solid #c89746;background-color:black;">Sizes</th>
            <th style="padding: 12px; border: 2px solid #c89746;background-color:black;">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 12px; border: 2px solid #c89746;">3 BHK (S)</td>
            <td style="padding: 12px; border: 2px solid #c89746;">3200 Sq. Ft.*</td>
            <td style="padding: 12px; border: 2px solid #c89746;">5.5 Cr. Onwards</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 2px solid #c89746;">3 BHK (L)</td>
            <td style="padding: 12px; border: 2px solid #c89746;">3400 Sq. Ft.*</td>
            <td style="padding: 12px; border: 2px solid #c89746;">On Request</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 2px solid #c89746;">4 BHK (S)</td>
            <td style="padding: 12px; border: 2px solid #c89746;">4200 Sq. Ft.*</td>
            <td style="padding: 12px; border: 2px solid #c89746;">On Request</td>
        </tr>
        <tr>
            <td style="padding: 12px; border: 2px solid #c89746;">4 BHK (L)</td>
            <td style="padding: 12px; border: 2px solid #c89746;">4400 Sq. Ft.*</td>
            <td style="padding: 12px; border: 2px solid #c89746;">On Request</td>
        </tr>
    </tbody>
</table>

<button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>

        <!-- Right Section (Single Image) -->
        <div style="flex: 1; min-width: 300px; display: flex; align-items: center; justify-content: center;">
            <img src="images/extra/trinity-sky-palazzos-floor-plan.webp" style="width: 100%; height: auto; object-fit: contain; max-width: 500px;">
        </div>
    </div>
</div>

</section>



<section id="amenities" style="padding: 50px 0; background:rgb(225, 225, 222); text-align: center;">
<div class="container" style="display: flex; align-items: center; gap: 50px; flex-wrap: wrap;">
    <!-- Left Side - Image -->
    <div style="flex: 1;">
        <img src="images/extra/trinity-sky-palazzos-photo.webp" alt="Amenities" style="width: 100%; max-width: 500px; border-radius: 10px;">
    </div>

    <!-- Right Side - Content -->
    <div style="flex: 1;">
        <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Trinity Sky Palazzos Amenities</h2>
        <ul style="list-style: none; padding: 0;">
            <li><i class="fas fa-mountain"></i> Skywalk Rock Climbing</li>
            <li><i class="fas fa-theater-masks"></i> Wall Amphitheatre with Shade Canopy</li>
            <li><i class="fas fa-leaf"></i> Senior Citizen Wellness Garden</li>
            <li><i class="fas fa-utensils"></i> Barbeque/Seating Area</li>
            <li><i class="fas fa-swimming-pool"></i> Infinity Pool with Cascading Waterfall</li>
            <li><i class="fas fa-couch"></i> Sunken Seating Area with Feature Tree Island</li>
            <li><i class="fas fa-bowling-ball"></i> Bowling Alley</li>
            <li><i class="fas fa-table-tennis"></i> Double Heighted Squash Court</li>
            <li><i class="fas fa-gamepad"></i> Video Gaming Zone</li>
            <li><i class="fas fa-golf-ball"></i> Indoor Virtual Golf Putting & Virtual Cricket</li>
            <li><i class="fas fa-child"></i> Kids' Creche</li>
            <li><i class="fas fa-spa"></i> Turkish Hamam (Male & Female)</li>
            <li><i class="fas fa-swimming-pool"></i> 3 Outdoor Pools & 1 Indoor Pool</li>
            <li><i class="fas fa-utensils"></i> Continental Restaurant</li>
        </ul>
    </div>
</div>
</section>


    <section id="highlights" style=" background-color:#bab777;">
    <div class="container">
    <div class="row align-items-center"> 
        <!-- Right Column: Image (Now First) -->
        <div class="col-md-6 text-center">
            <img src="images/extra/trinity-sky-palazzos-gallery.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
        </div>

        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2>Highlights</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">🚗 <strong>99m & 75m Approach Road</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">☀ <strong>Sunwell in Every Home & Man-Made Beach</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏢 <strong>Private Lift Entrance</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌍 <strong>Four-Sided Open Residences</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">🚪 <strong>Tower Entrance with Quadruple Height</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏛 <strong>1.5 Lakh Sq. Ft. Modern Clubhouse</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌟 <strong>Planned Around Amenities for Easier Access</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌏 <strong>World-Class Amenities Spread Over 11 Acres</strong></li>
    <li style="margin-bottom: 10px; font-size: 18px;">🕉 <strong>Vastu-Compliant Homes</strong></li>
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
<ul style="list-style: none; padding-left: 0; font-size: 18px;">
    <li>📍 <strong>Prime Location:</strong> Opposite Sector 89, near DLF Cyber City 2.</li>
    <li>🚗 <strong>Seamless Connectivity:</strong> 1.5 km from Dwarka Expressway for smooth travel.</li>
    <li>🚉 <strong>Metro Accessibility:</strong> Just 500 meters from the proposed metro station.</li>
    <li>✈ <strong>Global Reach:</strong> 20 minutes to IGI Airport for international connectivity.</li>
    <li>🛣 <strong>Highway Access:</strong> 5 minutes from NH-8, close to major business hubs.</li>
    <li>🛤 <strong>Strategic Location:</strong> Only 0.4 km from Pataudi Road.</li>
    <li>🚌 <strong>Public Transport Hub:</strong> 15 minutes to Gurugram ISBT.</li>
    <li>🌏 <strong>High-Value Investment:</strong> Adjacent to India's first Global City.</li>
    <li>🏟 <strong>Nearby Landmark:</strong> 10.5 km to Arun Jaitley Stadium, Delhi.</li>
</ul>

            <!-- Button -->
           <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal" 
           >Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="max-width: 45%;">
            <img src="images/extra/Location-Plan-12-Sky-Palazzos-Gurgaon-5429521_892_1600_310_462.jpg.webp" alt="Location Map" style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
        </div>
    </div>
</section>


    
    
    <script>
    let images = ["images/extra/floor1.webp", "images/extra/floor2.webp"]; // Replace with actual image paths
    let currentIndex = 0;
    
    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        document.getElementById("floorImage").src = images[currentIndex];
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        document.getElementById("floorImage").src = images[currentIndex];
    }
</script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
