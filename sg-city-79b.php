<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Signature Global City 79B | Low Rise Independent Luxury Floors in Gurugram</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body>

  
    <div class="w-100 vw-100">
        <img src="images/on_going_project/SG-City-79b-min.webp" class="img-fluid w-100" alt="Real Estate Image">
    </div>
        <!-- Information Section -->
        <div class="row text-center mt-4">
            <!-- Type -->
            <div class="col-md-3">
                <i class="fa-solid fa-building fa-2x mb-2"></i>
                <h5>TYPE</h5>
                <p>Low Rise Luxury Floors</p>
            </div>

            <!-- Location -->
            <div class="col-md-3">
                <i class="fa-solid fa-location-dot fa-2x mb-2"></i>
                <h5>LOCATION</h5>
                <p>Sector 79B Gurugram</p>
            </div>

            <!-- Bedrooms -->
            <div class="col-md-3">
                <i class="fa-solid fa-bed fa-2x mb-2"></i>
                <h5>BEDROOMS</h5>
                <p>3BHK & 3BHK + Study</p>
            </div>

            <!-- Extra Spaces -->
            <div class="col-md-3">
                <i class="fa-solid fa-chair fa-2x mb-2"></i>
                <h5>EXTRA SPACES</h5>
                <p>AC Home Office/Terrace Rights</p>
            </div>
        </div>
    </div>

    <div class="w-100 vw-100">
        <img src="images/on_going_project/dhfuh.png" class="img-fluid w-100" alt="Real Estate Image">
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Map Image Section -->
            <div class="col-md-6 p-0">
                <img src="images/on_going_project/Location-Map.jpg" alt="Map" class="img-fluid w-100">
            </div>

            <!-- Location Advantages Section with Background Image -->
            <div class="col-md-6 p-5 text-white" style="background: url('images/on_going_project/photo-1448375240586-882707db888b.avif') center/cover;">
                <h2 class="fw-bold">Location <br> Advantages</h2>

                <h4 class="mt-4">CONNECTIVITY</h4>
                <p>
                    Well connected to NH-8, Dwarka Expressway, Golf Course Road and Badshapur via Southern Peripheral Road
                </p>
                <ul>
                    <li>30 KM drive from Indira Gandhi International Airport</li>
                    <li>25 KM drive from Delhi</li>
                    <li>20 KM drive from HUDA City Centre metro station</li>
                    <li>10 KM drive to IMT Manesar</li>
                </ul>

                <h4 class="mt-4">RECREATIONAL</h4>
                <ul>
                    <li>Hyatt Regency is 6.8 km</li>
                    <li>ITC Grand Bharat is 8.7 km</li>
                    <li>Holiday Inn is 8.9 km</li>
                    <li>Aapno Ghar is 7.2 km</li>
                </ul>
            </div>
        </div>
    </div>

    <body style="background-color: #f8f6f1;">

<div class="container py-5">
    <h2 class="text-dark mb-4">Site Plan</h2>

    <div class="row align-items-center">
        <!-- Site Plan Image -->
        <div class="col-lg-8">
            <img src="images/on_going_project/Site-plan.jpg" alt="Site Plan" class="img-fluid">
        </div>

       
<body style="background-color: #f8f6f1; margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div style="text-align: center;">

        <!-- Section Title -->
        <h2 style="color: #2d3c32; font-family: serif; font-size: 3rem; margin-bottom: 40px;">Amenities</h2>

        <!-- Slider Container -->
        <div id="slider" style="display: flex; overflow: hidden; width: 450px; height: 500px; border-radius: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: auto;">

            <!-- Slides -->
            <div class="slide">
                <img src="images/on_going_project/Cricket-pitch-aminity.jpg" alt="Swimming Pool" style="width: 100%; height: 80%; object-fit: cover; border-radius: 20px;">
                <p style="font-size: 1.8rem; margin-top: 10px; color: #2d3c32;">Swimming Pool</p>
            </div>

            <div class="slide">
                <img src="images/on_going_project/Forest-spine.jpg" alt="Cricket Net" style="width: 100%; height: 80%; object-fit: cover; border-radius: 20px;">
                <p style="font-size: 1.8rem; margin-top: 10px; color: #2d3c32;">Cricket Net</p>
            </div>

            <div class="slide">
                <img src="images/on_going_project/Free-wifi.jpg" alt="Cyber Lounge" style="width: 100%; height: 80%; object-fit: cover; border-radius: 20px;">
                <p style="font-size: 1.8rem; margin-top: 10px; color: #2d3c32;">Cyber Lounge</p>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <div style="margin-top: 40px;">
            <button onclick="prevSlide()" style="font-size: 2rem; margin: 0 20px; padding: 10px 20px; background-color: #2d3c32; color: white; border: none; border-radius: 50%; cursor: pointer;">&larr;</button>
            <button onclick="nextSlide()" style="font-size: 2rem; margin: 0 20px; padding: 10px 20px; background-color: #2d3c32; color: white; border: none; border-radius: 50%; cursor: pointer;">&rarr;</button>
        </div>

    </div>

    <!-- JavaScript for Slider -->
    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        // Show first slide initially
        showSlide(currentIndex);
    </script>


<body style="background-color: #f8f6f1; text-align: center; padding: 40px; font-family: serif;">

    <!-- Section Title -->
    <h2 style="color: #2d3c32; font-size: 2rem; text-align: center; margin-top: 50px;;">Our array of luxury accommodations</h2>

    <!-- Main Image Display -->
    <div style="display: flex; justify-content: center;">
        <img id="mainImage" src="images/on_going_project/Cricket-pitch.jpg" alt="Luxury Accommodation" style="width: 90%; max-width: 800px;">
    </div>

    <!-- Thumbnail Images -->
    <div style="margin-top: 20px; display: flex; justify-content: center; flex-wrap: wrap;">
        <img src="images/on_going_project/Outdoor-gym.jpg" alt="Image 1" onclick="changeImage('images/on_going_project/Outdoor-gym.jpg')" style="width: 120px; height: 80px; margin: 5px; cursor: pointer;">
        <img src="images/on_going_project/STREET-VIEW.jpg" alt="Image 2" onclick="changeImage('images/on_going_project/STREET-VIEW.jpg')" style="width: 120px; height: 80px; margin: 5px; cursor: pointer;">
        <img src="images/on_going_project/Amphi-closeups.jpg" alt="Image 3" onclick="changeImage('images/on_going_project/Amphi-closeups.jpg')" style="width: 120px; height: 80px; margin: 5px; cursor: pointer;">
        <img src="images/on_going_project/Forest-Spine (1).jpg" alt="Image 4" onclick="changeImage('images/on_going_project/Forest-Spine (1).jpg')" style="width: 120px; height: 80px; margin: 5px; cursor: pointer;">
        <img src="images/on_going_project/Ariel_Front_Cam.jpg" alt="Image 5" onclick="changeImage('images/on_going_project/Ariel_Front_Cam.jpg')" style="width: 120px; height: 80px; margin: 5px; cursor: pointer;">
    </div>

    <script>
        // Function to change the main image
        function changeImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }
    </script>


<body style="background-color: #f8f6f1; text-align: center; padding: 40px; font-family: serif;">

    <!-- Section Title -->
    <h2 style="color: #2d3c32; font-size: 3rem;  text-align: center;">Construction Update</h2>
    <hr style="width: 80%; margin: 20px auto; border: 1px solid #2d3c32;">

    <!-- Image Cards Container -->
    <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">

        <!-- Card 1 -->
        <div style="max-width: 320px; text-align: left;">
            <img src="images/on_going_project/SG-City-79B-12032025.webp" alt="Construction Image 1" style="width: 100%; height: auto; border-radius: 8px;">
            <h3 style="margin-top: 10px; font-size: 1.2rem; color: #2d3c32;">Project Update</h3>
            <p style="font-size: 1rem; color: #3a5a40;">1st March 2025</p>
        </div>

        <!-- Card 2 -->
        <div style="max-width: 320px; text-align: left;">
            <img src="images/on_going_project/SG-CITY-79B-121224.jpg" alt="Construction Image 2" style="width: 100%; height: auto; border-radius: 8px;">
            <h3 style="margin-top: 10px; font-size: 1.2rem; color: #2d3c32;">Project Update</h3>
            <p style="font-size: 1rem; color: #3a5a40;">1st Dec 2024</p>
        </div>

        <!-- Card 3 -->
        <div style="max-width: 320px; text-align: left;">
            <img src="images/on_going_project/SG-CITY-79B-0409.jpg" alt="Construction Image 3" style="width: 100%; height: auto; border-radius: 8px;">
            <h3 style="margin-top: 10px; font-size: 1.2rem; color: #2d3c32;">Project Update</h3>
            <p style="font-size: 1rem; color: #3a5a40;">1st September 2024</p>
        </div>



 <!-- Card 4 -->
 <div style="max-width: 320px; text-align: left;">
            <img src="images/on_going_project/SG-CITY-79B-a.jpg" alt="Construction Image 1" style="width: 100%; height: auto; border-radius: 8px;">
            <h3 style="margin-top: 10px; font-size: 1.2rem; color: #2d3c32;">Project Update</h3>
            <p style="font-size: 1rem; color: #3a5a40;">1st June 2024</p>
        </div>

        <!-- Card 5 -->
        <div style="max-width: 320px; text-align: left;">
            <img src="images/on_going_project/SG-CITY-79B-2024.jpg" alt="Construction Image 2" style="width: 100%; height: auto; border-radius: 8px;">
            <h3 style="margin-top: 10px; font-size: 1.2rem; color: #2d3c32;">Project Update</h3>
            <p style="font-size: 1rem; color: #3a5a40;">1st March 2024</p>
        </div>

        <!-- Card 6 -->
        <div style="max-width: 320px; text-align: left;">
            <img src="images/on_going_project/SG-GOLF-GREENS-79-12-23.jpg" alt="Construction Image 3" style="width: 100%; height: auto; border-radius: 8px;">
            <h3 style="margin-top: 10px; font-size: 1.2rem; color: #2d3c32;">Project Update</h3>
            <p style="font-size: 1rem; color: #3a5a40;">1st December 2023</p>
        </div>

         <!-- Card 3 -->
         <div style="max-width: 320px; text-align: left;">
            <img src="images/on_going_project/sg79bSep.jpg" alt="Construction Image 3" style="width: 100%; height: auto; border-radius: 8px;">
            <h3 style="margin-top: 10px; font-size: 1.2rem; color: #2d3c32;">Project Update</h3>
            <p style="font-size: 1rem; color: #3a5a40;">1st September 2023</p>
        </div>

    </div>

    <div class="w-100 text-white" style="background: linear-gradient(to right, #5b390e, #a07826);">
  <div class="p-4">
    <p class="mb-1">JMK Holdings Private Limited | CIN No.: U70109DL2013PTC255232</p>
    <h5 class="fw-bold">Disclaimer</h5>
    <p>
      Promoter urges every applicant to inspect the project site and shall not merely rely upon any architectural impression, plan or sales brochure and, therefore, requests to make personal judgment prior to submitting an application for allotment. The Project is being developed in phases, hence, certain facilities/amenities etc, may be used by allottee of other phases. Unless otherwise stated, all the images, visuals, materials and information contained herein are purely creative/artistic and may not be actual representations of the product and/or any amenities. Further, the actual design may vary in the fit and finished form, from the one displayed above. Journey time shown, if any, is based upon Google Maps which may vary as per the traffic at a relevant point of time. 
      *Rate mentioned above does not include GST and other statutory charges, if applicable. T & C Apply. 1 sq. mt. = 10.7639 sq. ft.
    </p>
  </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
