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
        #location .container {
            flex-direction: column; /* Mobile pe ek ke niche ek hoga */
            text-align: center;
        }
        #location div {
            max-width: 100% !important; /* Full width on mobile */
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
        <img src="images/extra/3aca8d27-aa85-4863-9f9d-eca72557359e.jpg" alt=" Image" style="width: 1250px; height: 600px;">
    </div>
</div>



    <!-- Sections -->
    <section id="overview" class="bg-light" style="background-color:#bab777  !important;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
                <h2>About Godrej Astra</h2>
                <p>Godrej Astra is an upcoming residential project by Godrej Developers, located in Sector 54, Gurgaon. This mixed-use development offers luxurious 3 and 4 BHK apartments, designed to provide a premium living experience. The project is strategically positioned in one of Gurgaon's prime locations, ensuring excellent connectivity to key areas and upcoming infrastructure.
                Residents will enjoy a range of world-class amenities, including a fully equipped clubhouse, state-of-the-art gymnasium, terrace swimming pool with panoramic views, recreational rooms, outdoor sports courts, and a dedicated children's play area. The project also features lush landscaped gardens and thoughtfully designed open spaces, creating a serene and tranquil environment for residents to unwind. With meticulous planning and a focus on quality, designed to cater to the discerning tastes of urban dwellers, offering spacious interiors.</p>
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/gallery3.jpg" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
                    <img src="images/extra/godrej-astra-apartment.webp" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/godrej-astra-residences.webp" class="img-fluid rounded shadow" alt="Gallery Image 2" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/godrej-astra-aerial-view.webp" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/birla-arika-flats.webp" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/godrej-astra-dinning.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/godrej-astra-pool.webp" class="img-fluid rounded shadow" alt="Gallery Image 6" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/godrej-astra-indoor-pool.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/godrej-astra-modular-kitchen.webp" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
        
        <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 30px;">Sizes & Floor Plan</h2>

        <!-- Flexbox for Two Columns -->
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 30px;">

            <!-- Left Side - Floor Plan Table -->
            <div style="flex: 1; min-width: 300px; text-align: center;">
                <table style="width: 100%; max-width: 500px; margin: 0 auto; border-collapse: collapse; border: 2px solid #d4a048;">
                    <tr style="background-color: black; color: white;">
                        <th style="padding: 12px; border: 2px solid #d4a048; text-align: left;">Type</th>
                        <th style="padding: 12px; border: 2px solid #d4a048; text-align: left;">Sizes</th>
                        <th style="padding: 12px; border: 2px solid #d4a048; text-align: left;">Price</th>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border: 2px solid #d4a048;">3 BHK</td>
                        <td style="padding: 12px; border: 2px solid #d4a048;">3050 Sq. Ft.* Onwards</td>
                        <td style="padding: 12px; border: 2px solid #d4a048;">On Request</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border: 2px solid #d4a048;">4 BHK</td>
                        <td style="padding: 12px; border: 2px solid #d4a048;">4000 Sq. Ft.* Onwards</td>
                        <td style="padding: 12px; border: 2px solid #d4a048;">On Request</td>
                    </tr>
                </table>

                <!-- Download Button -->
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal" style="padding: 10px 15px; font-size: 16px; margin-top: 15px;">
                    Download Floor Plan
                </button>
            </div>

            <!-- Right Side - Floor Plan Image -->
            <div style="flex: 1; min-width: 300px; text-align: center;">
                <img src="images/extra/godrej-astra-floor-plan.webp" alt="Floor Plan"
                    style="width: 100%; max-width: 450px; height: auto; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
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
            <img src="images/extra/godrej-astra-residences.webp" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
        </div>

        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2 style="font-style: italic; color: #1c355e;">Godrej Astra Highlights</h2>
        <ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 18px;">🌿 <strong>Luxury & Greenery:</strong> Amalgamation of premium living and nature.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏗 <strong>Eco-Friendly & Robust Structure:</strong> Trial of amenities, eco-friendly zone, and durable design.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌟 <strong>Elite Community Living:</strong> Live among high net-worth individuals.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🏡 <strong>Global Standards:</strong> 3 & 4 BHK apartments designed for luxury.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">🌍 <strong>International Lifestyle:</strong> Perfect for families & professionals.</li>
    <li style="margin-bottom: 10px; font-size: 18px;">📈 <strong>Investor's Hub:</strong> Prime GCR location ensures a balanced life & high returns.</li>
</ul>




            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
    </div>
</div>
    </section>

    <section id="location" style="padding: 50px 0; background:rgb(225, 225, 222) !important;">
    <div class="container" style="max-width: 1100px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">

        <!-- Left Content -->
        <div style="width: 100%; max-width: 50%; padding: 10px;">
            <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px;">Location Advantages</h2>
            <ul style="list-style: none; padding-left: 0; font-size: 18px;">
                <li>🚇 <strong>Metro Access:</strong> Sector 54 Chowk Metro Station - 950m</li>
                <li>🛣 <strong>Prime Road Connectivity:</strong> Golf Course Extension Road - 2.5Km</li>
                <li>🛍 <strong>Shopping & Entertainment:</strong> Ardee Mall - 4.6Km</li>
                <li>🏫 <strong>Top Educational Institutions:</strong> Gurugram Public School - 4.6Km</li>
                <li>🏥 <strong>Quality Healthcare:</strong> Paras Hospital - 4.9Km</li>
                <li>🎢 <strong>Recreational Spot:</strong> Zooper India Trampoline Park - 5.1Km</li>
                <li>🏢 <strong>Corporate Hub:</strong> Ernst & Young - 5.9Km</li>
                <li>⛳ <strong>Luxury Leisure:</strong> DLF Golf and Country Club - 6.1Km</li>
                <li>🎓 <strong>Higher Education:</strong> BM College of Technology - 6.8Km</li>
                <li>🚉 <strong>Railway Access:</strong> Kheri Railway Station - 16.3Km</li>
                <li>✈ <strong>International Connectivity:</strong> IGI Airport - 17.6Km</li>
            </ul>

            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>

        <!-- Right Side - Google Map -->
        <div style="width: 100%; max-width: 45%; padding: 10px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.5589453475386!2d77.10348757549346!3d28.4325624757745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1fa274aea11f%3A0x6929c9fc99d0c866!2sGodrej%20Astra%20Gurugram!5e0!3m2!1sen!2sin!4v1743160603302!5m2!1sen!2sin" 
                width="100%" height="350" style="border:0; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</section>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
