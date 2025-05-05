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
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
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
        <img src="images/extra/1-1.jpg" alt=" Image" style="width: 1250px; height: 600px;">
    </div>
</div>



    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: #bab777;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
                <h2>Experion The Trillion</h2>
                <p>Experion The Trillion is a premium residential development located in the heart of Sohna Road, Sector 48, Gurgaon, offering luxurious 3 and 4 BHK apartments. This project is designed to provide an elevated lifestyle with world-class amenities and a focus on comfort and elegance.</p>
                <p>Developed by Experion Group, The Trillion features spacious living areas, master bedrooms, private outdoor spaces, and stunning interior designs. The project enjoys a prime location, with easy access to metro stations, hospitals, shopping malls, and international schools. The Trillion’s clubhouse is thoughtfully designed to offer residents a variety of recreational activities, social gatherings, and a vibrant lifestyle.</p>
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/1.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
        </div>
    </div>
</section>



    <!-- Pricing Section -->
<section id="pricing" class="py-5" style=" background-color:#bab777;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-style: italic; color: #1c355e;">Pricing</h2>
        <div class="row justify-content-center">
            <!-- Apartment Type I -->
            <div class="col-md-5 m-2">
                <div class="card shadow p-4">
                    <h3>Apartments <br> <strong>Type I</strong></h3>
                    <hr>
                    <p><strong>3 BHK</strong></p>
                    <p>3000 SQ.FT</p>
                    <hr>
                    <p><strong>Price</strong></p>
                    <p>₹ 7.5 Cr*</p>
                    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
                </div>
            </div>

            <!-- Apartment Type II -->
            <div class="col-md-5 m-2">
                <div class="card shadow p-4">
                    <h3>Apartments <br> <strong>Type II</strong></h3>
                    <hr>
                    <p><strong>4 BHK</strong></p>
                    <p>3600 SQ.FT</p>
                    <hr>
                    <p><strong>Price</strong></p>
                    <p>₹ 9 Cr*</p>
                    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
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



<section id="gallery" class="bg-light py-5" style="background: #bab777;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-style: italic; color: #1c355e;">Gallery</h2>
        <div class="row g-3">
            <!-- Image 1 -->
            <div class="col-md-4">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/2.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-4">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/1.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-4">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/3.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-4">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/4.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-4">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/5.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-4">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/6.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" 
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

        <div style="display: flex; align-items: center; justify-content: center; gap: 20px; margin-top: 20px;">
            <!-- Left Arrow -->
            <button onclick="prevSlide()" style="background: none; border: none; font-size: 24px; cursor: pointer;">&#10094;</button>

            <!-- Image Slider -->
            <div style="width: 500px; height: 300px; overflow: hidden; position: relative;">
                <img id="floorImage" src="images/extra/floor1.webp" style="width: 100%; height: 100%; object-fit: contain; transition: opacity 0.5s;">
            </div>
            <div style="width: 500px; height: 300px; overflow: hidden; position: relative;">
                <img id="floorImage" src="images/extra/floor2.webp" style="width: 100%; height: 100%; object-fit: contain; transition: opacity 0.5s;">
            </div>

            <!-- Right Arrow -->
            <button onclick="nextSlide()" style="background: none; border: none; font-size: 24px; cursor: pointer;">&#10095;</button>
        </div>
        <br><br>
        <!-- Get Details Button -->
        <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
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
            <img src="images/extra/highlight.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
        </div>

        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
            <h2>Highlights</h2>
            <ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">✅ <strong>Iconic Architecture:</strong> Spanning 6 acres with 3 grand towers.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏠 <strong>Smart Home Features:</strong> Advanced home automation for modern living.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">✨ <strong>Elegant Interiors:</strong> High-quality finishes with sophisticated design.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌱 <strong>Eco-Friendly Living:</strong> Sustainable construction with energy-efficient systems.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🛡 <strong>Exclusive Community:</strong> Low-density living ensures privacy and comfort.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🚀 <strong>Future-Ready Homes:</strong> Equipped with cutting-edge technology.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏗 <strong>Trusted Developer:</strong> A landmark project by the renowned Experion Group.</li>
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
            <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Location</h2>
            <ul style="list-style: none; padding-left: 0; font-size: 18px;">
                <li>📍 <strong>Close To IGI Airport:</strong> Just A 30-Minute Drive To Indira Gandhi International Airport.</li>
                <li>🛍 <strong>Shopping & Entertainment:</strong> Near Malls Like Sapphire 83, Omaxe, And HUDA Market.</li>
                <li>🏥 <strong>Healthcare Facilities:</strong> Top Hospitals Like Medanta And Fortis Are Easily Accessible.</li>
                <li>🎓 <strong>Nearby Educational Institutions:</strong> Renowned Schools And Universities Within A Short Drive.</li>
                <li>🏢 <strong>Proximity To Business Hubs:</strong> Close To Cyber City, Sohna Road, And Major IT Parks.</li>
                <li>🚗 <strong>Excellent Connectivity:</strong> Easy Access To NH-48 And Golf Course Extension Road.</li>
            </ul>
            <!-- Button -->
           <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal" 
           >Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="max-width: 45%;">
            <img src="images/extra/Location.webp" alt="Location Map" style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
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
