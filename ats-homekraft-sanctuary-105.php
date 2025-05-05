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
        <img src="images/extra/img515.jpg" alt="Image" 
             style="width: 100%; height: auto; max-height: 600px; object-fit: contain;">
    </div>
</div>





    <!-- Sections -->
    <section id="overview" class="bg-light" style="background: rgb(225, 225, 222) !important;" >
    <div class="container" >
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
            <h2>ATS Homekraft Sanctuary 105 , Gurgaon</h2>
<p><strong>Building Dreams, Creating Homes:</strong> Nestled in the heart of Sector 69, Gurgaon, <strong>Smart World Sky Arc</strong> is not just a residential project — it's a lifestyle revolution. Offering an exquisite blend of serenity, modern infrastructure, and world-class amenities, this development redefines luxury living.</p>
<p><strong>Sprawling Integrated Township:</strong> Spanning a meticulously planned community, Smart World Sky Arc brings together comfort, convenience, and connectivity in a seamless living experience.</p>
<p><strong>Spacious & Modern Apartments:</strong> Thoughtfully designed homes featuring high-quality interiors, abundant natural lighting, and sleek, contemporary finishes for an elevated lifestyle.</p>
<p><strong>World-Class Amenities:</strong> From a rooftop infinity pool and a state-of-the-art fitness center to lush landscaped gardens and dedicated relaxation zones, every detail is crafted for ultimate luxury.</p>
<p><strong>Prime Location & Seamless Connectivity:</strong> Strategically positioned near the Southern Peripheral Road, ensuring easy access to key business districts, top-tier educational institutions, and premium healthcare facilities.</p>
<p><strong>Unmatched Lifestyle & Investment Opportunity:</strong> With proximity to major landmarks, a vibrant clubhouse, and a community-centric environment, Smart World Sky Arc is a perfect investment for those seeking luxury, comfort, and growth.</p>
    <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
</div>
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
                <img src="images/extra/img8-1.jpg " alt="Overview Image" class="img-fluid" data-bs-toggle="modal" data-bs-target="#contactModal" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
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
                <img src="images/extra/img28-scaled.jpg" alt="Project Features" 
                    style="width: 100%; height: auto; min-height: 350px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.3); object-fit: cover;">
            </div>
            <!-- Right Side - Content -->
            <div style="flex: 1; max-width: 550px; text-align: left;">
            <h3 style="font-style: italic; color: #1c355e;">ATS Homekraft Sanctuary 105</h3>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 8px; font-size: 15px;">🏢 <strong>State-of-the-Art Clubhouse:</strong> Designed with modern amenities for an elite lifestyle.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🦋 <strong>Butterfly Garden:</strong> A vibrant space filled with colorful butterflies and lush greenery.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🎉 <strong>Party Lawn:</strong> A spacious and elegant venue for outdoor celebrations.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🎠 <strong>Kids Play Area:</strong> Safe and fun-filled spaces for children.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🌳 <strong>Miyawaki Forest:</strong> A dense urban forest for fresh air and natural beauty.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🍽 <strong>Modular Kitchen:</strong> Stylish and functional kitchen spaces.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🧘 <strong>Zen Garden:</strong> A tranquil space for meditation and relaxation.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🌲 <strong>Dense Forest:</strong> Green surroundings for a fresh and serene environment.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">💪 <strong>Fitness Court:</strong> Equipped with top-notch exercise facilities for a healthy lifestyle.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🏊 <strong>Pool Deck:</strong> A luxurious poolside area for relaxation and leisure.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🏢 <strong>2 to a Core:</strong> Exclusive living spaces with optimal privacy.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🏏 <strong>Cricket Pitch:</strong> A well-maintained pitch for sports enthusiasts.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🪑 <strong>Senior Citizen’s Seating:</strong> Comfortable spaces designed for elderly relaxation.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">⛸ <strong>Skating Rink:</strong> A dedicated area for skating lovers.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🏋 <strong>Fitness Court:</strong> High-quality fitness equipment for an active lifestyle.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🏗 <strong>3 Lifts per Tower:</strong> Ensuring quick and easy access across floors.</li>
    <li style="margin-bottom: 8px; font-size: 15px;">🏠 <strong>Home Automation:</strong> Smart home features for a futuristic living experience.</li>
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
                    <img src="images/extra/g1.jpg" class="img-fluid rounded shadow" alt="Gallery Image 1" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/g2.jpg" class="img-fluid rounded shadow" alt="Gallery Image 2" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/g3.jpg" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                    loading="lazy"  style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/g4.jpg" class="img-fluid rounded shadow" alt="Gallery Image 4" loading="lazy" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/g5.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/g6.jpg" class="img-fluid rounded shadow" alt="Gallery Image 6" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/g7.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5"
                    loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
<!-- Image 8 -->
<div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/g8.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
                            <td style="border: 2px solid #c79c3d; padding: 12px;">3.5 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">1850 SQ.FT Onwards</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">Call For Price</td>
                        </tr>
                        <tr>
                            <td style="border: 2px solid #c79c3d; padding: 12px;"> 4.5 BHK</td>
                            <td style="border: 2px solid #c79c3d; padding: 12px;">2800 SQ.FT Onwards</td>
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
                <img src="images/extra/img384.jpg" alt="Floor Plan"data-bs-toggle="modal"data-bs-target="#contactModal" 
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
                <img src="images/extra/Tennis.jpg" alt="Overview Image" class="img-fluid" 
                     style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; 
                            box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
            </div>
            <!-- Right Column: Content -->
            <div class="col-md-6">
            <h3 style="font-style: italic; color: #1c355e;">PROJECT HIGHLIGHTS</h3>
            <ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🏢 <strong>G+34 Building:</strong> A towering masterpiece offering breathtaking city views.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏠 <strong>Two Apartments Per Floor:</strong> Ensuring privacy and exclusivity for residents.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">❄ <strong>All-Weather AC / VRV:</strong> Advanced climate control for ultimate comfort.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🍽 <strong>Modular Kitchen:</strong> Stylish and functional kitchen spaces for modern living.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🌟 <strong>Ultra Luxury Apartment Specifications:</strong> Designed with premium finishes and high-end amenities.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏛 <strong>Exclusive 50,000 Sq. Ft - 4 Level Ultra Luxurious Clubhouse:</strong> A grand space with world-class facilities.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏙 <strong>Low-Density Area – Only 750 Apartments:</strong> Offering open spaces, privacy, and an elite neighborhood.</li>
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
        <h3 style="font-style: italic; color: #1c355e;">Location Advantages</h3>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 15px;">🚗 <strong>1.25 Km from Dwarka Expressway:</strong> Seamless connectivity to major routes.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🚆 <strong>10 Min Drive to Gurgaon Railway Station:</strong> Easy access to intercity travel.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🛍 <strong>10 Min Drive to Leisure Points:</strong> Close to Neo Centre, Conscient One, and Ocus Medley.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏥 <strong>15 Min Drive to Manipal Hospital:</strong> Access to world-class healthcare facilities.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">🏛 <strong>15 Min Drive to Yashobhoomi Convention Centre:</strong> A premier destination for business and events.</li>
    <li style="margin-bottom: 10px; font-size: 15px;">✈ <strong>25 Min Drive to T3 IGI Airport:</strong> Quick connectivity to international and domestic flights.</li>
</ul>





            <!-- Button -->
            <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
        <!-- Right Side - Image -->
        <div style="flex: 1 1 400px; max-width: 500px;">
            <img src="images/extra/ats-homekraft-sanctuary-105-sector-105-gurugram-location-map.webp" alt="Location Map" data-bs-toggle="modal" data-bs-target="#contactModal"  
            style="width: 100%; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0,0,0,0.2); ">
        </div>
    </div>
</section>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
