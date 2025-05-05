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
        
        

    /* 🟡 Highlighted Cards */
    .highlighted {
        background: #e8c36a !important;
        color: #1c355e;
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
                    <li class="nav-item"><a class="nav-link" href="#highlights">Highlights</a></li>
                    <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div style="text-align: center; overflow: hidden;">
    <div style="display: inline-block;">
        <img src="images/extra/conscient-elaira-residences-project-project-large-image1-1430.jpg" alt=" Image" style="width: 1250px; height: 600px;">
    </div>
</div>



    <!-- Sections -->
    <section id="overview" class="bg-light" style="background #C0C0C0 !important;">
    <div class="container">
        <div class="row align-items-center"> 
            <!-- Left Column: Content -->
            <div class="col-md-6">
                <h2>Conscient Elaira Residences</h2>
                <p>The Conscient Elaira Residences community covers an area of about 6.5 acres . Within its boundaries, one can find four imposing towers, the interiors of which have been skillfully crafted as to ensure flow of air and creation of space. The development has been built keeping in mind the different configurations required by various families</p>
                <p>New Project in Dwarka Expressway. Fully eturnished apartments include abundant ventilated space. Additional offering is the efficient use of the apartment space.</p>
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6 text-center">
    <img src="images/extra/1.jpg" alt="Overview Image" class="img-fluid" 
        style="max-width: 100%; height: 400px; object-fit: cover; border-radius: 10px; 
        box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
</div>

        </div>
    </div>
</section>



   <!-- Pricing Section -->
<section id="pricing" class="py-5" style="background-color:#bab777;">
    <div class="container">
        <br>
        <h2 style="text-align: center;">PRICING</h2>
        <br>
        <div style="overflow-x: auto; width: 100%;">
            <table style="width: 100%; margin: auto; border-collapse: collapse; background: #fff; 
                border: 2px solid #c89746; font-size: 18px; min-width: 600px;">
                <tr style="background: black; color: white; border-bottom: 2px solid #c89746; height: 50px;">
                    <th style="padding: 15px; border: 2px solid #c89746;">RESIDENCE</th>
                    <th style="padding: 15px; border: 2px solid #c89746;">SIZE</th>
                    <th style="padding: 15px; border: 2px solid #c89746;">PRICE</th>
                    <th style="padding: 15px; border: 2px solid #c89746;"></th>
                </tr>
                <tr style="height: 60px;">
                    <td style="color: #4c6041; font-weight: bold; padding: 15px; border: 2px solid #c89746;">3 BHK</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">1945 Sq. Ft.</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">₹2.82 Cr*</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">
                        <button class="btn btn-warning text-white" style="font-size: 14px; padding: 8px 12px;" 
                            data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
                    </td>
                </tr>
                <tr style="height: 60px;">
                    <td style="color: #4c6041; font-weight: bold; padding: 15px; border: 2px solid #c89746;">3 BHK + UT</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">2355 Sq. Ft.</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">₹3.41 Cr*</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">
                        <button class="btn btn-warning text-white" style="font-size: 14px; padding: 8px 12px;" 
                            data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
                    </td>
                </tr>
                <tr style="height: 60px;">
                    <td style="color: #4c6041; font-weight: bold; padding: 15px; border: 2px solid #c89746;">4 BHK + UT</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">2825 Sq. Ft.</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">₹4.09 Cr*</td>
                    <td style="padding: 15px; border: 2px solid #c89746;">
                        <button class="btn btn-warning text-white" style="font-size: 14px; padding: 8px 12px;" 
                            data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
                    </td>
                </tr>
            </table>
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



<section id="gallery" class="bg-light py-5" style="background: #C0C0C0;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-style: italic; color: #1c355e;">Gallery</h2>
        <div class="row g-3">
            <!-- Image 1 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/1.jpg" class="img-fluid rounded shadow" alt="Gallery Image 1" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/conscient-elaira-residences-project-project-large-image1-1430.jpg" class="img-fluid rounded shadow" alt="Gallery Image 2" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/3.jpg" class="img-fluid rounded shadow" alt="Gallery Image 3" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/51.jpg" class="img-fluid rounded shadow" alt="Gallery Image 4" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/5.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/6.jpg" class="img-fluid rounded shadow" alt="Gallery Image 6" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
 <!-- Image 7 -->
 <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/7.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"
                        onmouseover="this.style.transform='scale(1.05)'" 
                        onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
             <!-- Image 8 -->
             <div class="col-md-3">
                <div style="overflow: hidden; border-radius: 10px; height: 250px;">
                    <img src="images/extra/8.jpg" class="img-fluid rounded shadow" alt="Gallery Image 5" 
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
        <td style="padding: 12px; border: 2px solid #c89746;">1945 Sq. Ft.*</td>
        <td style="padding: 12px; border: 2px solid #c89746;">₹2.82 cr*</td>
    </tr>
    <tr>
        <td style="padding: 12px; border: 2px solid #c89746;">3 BHK + UT</td>
        <td style="padding: 12px; border: 2px solid #c89746;">2355 Sq. Ft.*</td>
        <td style="padding: 12px; border: 2px solid #c89746;">₹3.41 crs*</td>
    </tr>
    <tr>
        <td style="padding: 12px; border: 2px solid #c89746;">4 BHK + UT</td>
        <td style="padding: 12px; border: 2px solid #c89746;">2825 Sq. Ft.*</td>
        <td style="padding: 12px; border: 2px solid #c89746;">₹4.09 cr*</td>
    </tr>
</tbody>
</table>

<button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
    </div>

    <!-- Right Section (Single Image) -->
    <div style="flex: 1; min-width: 300px; display: flex; align-items: center; justify-content: center;">
        <img src="images/extra/2.jpg" style="width: 100%; height: auto; object-fit: contain; max-width: 500px;">
    </div>
</div>

    </div>
</section>

    <section id="highlights" style=" background-color:#C0C0C0;">
    <div class="container">
    <div class="row align-items-center"> 
        <!-- Right Column: Image (Now First) -->
        <div class="col-md-6 text-center">
            <img src="images/extra/3.jpg" alt="Overview Image" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 3px 8px 10px rgba(0, 0, 0, 0.4);">
        </div>

        <!-- Left Column: Content (Now Second) -->
        <div class="col-md-6">
        <h2>Highlights</h2>
<ul style="list-style: none; padding-left: 0;">
    <li style="margin-bottom: 10px; font-size: 16px;">🏢 <strong>4 Impressive Towers:</strong> Elevate your lifestyle with modern high-rise living.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏗 <strong>Construction by Shapoorji Pallonji:</strong> Built with excellence and trust.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">💰 <strong>Payment Plan:</strong> Flexible 30:40:30 scheme for convenient investment.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🏡 <strong>Flexible Floor Plans:</strong> Thoughtfully designed for 3 & 4 bedroom residences.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🔇 <strong>Double Glazing:</strong> Energy-efficient windows for noise reduction and insulation.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">🌉 <strong>Sky Walk Experience:</strong> Exclusive access to breathtaking rooftop views.</li>
    <li style="margin-bottom: 10px; font-size: 16px;">✨ <strong>Contemporary Design:</strong> A perfect blend of aesthetics and functionality.</li>
</ul>



            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#contactModal">Get Details →</button>
        </div>
    </div>
</div>
    </section>

    <section id="location" style="padding: 50px 0; background: #bab777;">
    <div style="max-width: 1100px; margin: auto; padding: 0 20px;">
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center;">
            
            <!-- Left Content -->
            <div style="width: 100%; max-width: 500px; text-align: center; margin-top: 60px;">
            
                <h2 style="font-style: italic; color: #1c355e; margin-bottom: 20px; font-size: 24px;">Connectivity</h2>
                <ul style="list-style: none; padding-left: 0; font-size: 18px; text-align: left;">
                    <li style="margin-bottom: 10px;">🛣 <strong>Well Connected to:</strong> Dwarka Expressway, Gurugram.</li>
                    <li style="margin-bottom: 10px;">✈ <strong>Indira Gandhi International Airport:</strong> Just 20 km away.</li>
                    <li style="margin-bottom: 10px;">🚌 <strong>Gurugram ISBT:</strong> Approximately 15 km distance.</li>
                    <li style="margin-bottom: 10px;">🚗 <strong>Direct Connectivity to Delhi:</strong> Via fully functional 75m wide road.</li>
                </ul>
                <button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#contactModal"
                    style="margin-top: 15px; padding: 10px 15px; font-size: 16px;">Get Details →</button>
            </div>

            <!-- Right Side - Image -->
            <div style="width: 100%; max-width: 500px; text-align: center; margin-top: 60px;">
            
                <img src="images/extra/4.jpg" alt="Location Map"
                    style="width: 100%; max-width: 400px; height: auto; border-radius: 10px; 
                    box-shadow: 5px 5px 15px rgba(0,0,0,0.2);">
            </div>

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
