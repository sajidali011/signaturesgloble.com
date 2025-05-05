<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include "navbar.php" ?>
<!-- Hero Section with Local Video Background -->
<div class="hero position-relative" style="height: 100vh; overflow: hidden;">
  <video autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover;">
    <source src="images/InShot_20250505_144326900.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

 <!-- Welcome Text -->
<div class="position-absolute top-30 start-50 translate-middle-x text-center px-3 z-2 welcome-position">
  <h2 class="fs-4 fw-semibold bg-dark bg-opacity-50 text-white p-3 rounded-4 shadow-lg hover-text">
    Welcome to <span class="text-warning">Signatures Globle</span> – Your Gateway to Premium Living in Gurugram
  </h2>
</div>

  <!-- Search Box -->
  <div class="position-absolute top-50 start-50 translate-middle w-75 w-md-50">
    <div class="input-group mb-3">
      <input type="text" id="searchInput" class="form-control rounded-pill" placeholder="Search here...">
      <button id="clearIcon" class="btn btn-link text-muted" style="display: none;" type="button">
        <i class="bi bi-x-circle-fill"></i>
      </button>
    </div>
    <div id="suggestionsBox" class="list-group position-absolute w-50" style="top: 100%; max-height: 200px; overflow-y: auto;"></div>
  </div>
</div>

  <!-- Hover CSS -->
  <style>
    .hover-text:hover {
      color: #ffc107 !important;
      background-color: rgba(0, 0, 0, 0.75) !important;
      box-shadow: 0 0 25px rgba(255, 193, 7, 0.5) !important;
      transition: all 0.4s ease-in-out;
    }

    .top-30 {
      top: 30%;
    }

    /* Responsive adjustments for smaller screens */
    @media (max-width: 767.98px) {
      .top-30 {
        top: 20% !important; /* Adjust welcome text higher */
      }

      .search-position {
        top: 55% !important; /* Push search box a bit down */
        width: 90% !important;
      }

      #suggestionsBox {
        width: 100% !important;
      }

      .hover-text {
        font-size: 1rem !important; /* Smaller font for mobile */
        padding: 1rem !important;
      }
    }
  </style>


<script>
  $(document).ready(function () {
    $('#searchInput').on('input', function () {
      let keyword = $(this).val().trim();

      if (keyword.length > 0) {
        $('#clearIcon').show();
      } else {
        $('#clearIcon').hide();
        $('#suggestionsBox').hide();
      }

      if (keyword.length >= 2) {
        $.get('search.php', { term: keyword }, function (data) {
          let results = JSON.parse(data);
          let suggestions = '';

          if (results.length > 0) {
            results = results.slice(0, 6); // Optional: Limit results
            results.forEach(item => {
              suggestions += `<a href="${item.link}" class="list-group-item list-group-item-action">${item.name}</a>`;
            });
          } else {
            suggestions = '<div class="list-group-item disabled text-center text-muted">No results found</div>';
          }

          $('#suggestionsBox').html(suggestions).show();
        });
      } else {
        $('#suggestionsBox').hide();
      }
    });

    $(document).click(function (e) {
      if (!$(e.target).closest('#searchInput, #suggestionsBox, #clearIcon').length) {
        $('#suggestionsBox').hide();
      }
    });

    $('#clearIcon').on('click', function () {
      $('#searchInput').val('');
      $('#clearIcon').hide();
      $('#suggestionsBox').hide();
    });
  });
</script>



<!-- Latest Ongoing/Signatures Globals Properties -->
<div class="section py-5">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-primary heading">ON GOING PROJECTS</h2>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
                <a href="Ongoing_projects.php" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a>
            </div>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="m3m-mansion.php">
                            <img src="images/extra/M3M-Mansion-Gurgaon-image-2-.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">M3M Mansion Sector 113 Gurgaon</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="smart-world-one-dxp.php">
                            <img src="images/on_going_project/Smart-World-One-DXP-.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Smart World One DXP</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="Emaar Urban Ascent.php">
                            <img src="images/extra/20722Whiteland-The-Aspen-Gurgaon-sector76.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Emaar Urban Ascent Sector 112</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="elan-the-emperor.php">
                            <img src="images/extra/1734154358265-front.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Elan The Presidential</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="shapoorji-pallonji-joyville-sector-102-gurgaon.php">
                            <img src="images/on_going_project/47811deb4d20.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Shapoorji Pallonji Joyville</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="experion-thetrillion-luxury.php">
                            <img src="images/extra/1-1.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Experion The Trillion</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end on going projects -->


<!-- LUXURY PROJECTS -->
<div class="section py-5">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-primary heading">LUXURY PROJECTS</h2>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
                <p>
                    <a href="luxury.php" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a>
                </p>
            </div>
        </div>

        <div class="swiper luxurySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="adani-samsara-ivana.php">
                                <img class="img-fluid w-100" src="images/extra/luxuary1.webp" alt="Adani Ivana" style="height:270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="adani-samsara-ivana.php">Adani Ivana Gurgaon</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="ashiana-amarah-phase-5.php">
                                <img class="img-fluid w-100" src="images/extra/luxuary2.jpg" alt="Ashiana Amarah" style="height:270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="ashiana-amarah-phase-5.php">Ashiana Amarah Sector 93</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="ats-homekraft-sanctuary-105.php">
                                <img class="img-fluid w-100" src="images/extra/luxuary3.jpg" alt="ATS Homekraft" style="height:270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="ats-homekraft-sanctuary-105.php">ATS Homekraft Sanctuary 105</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="jms-premier-floors.php">
                                <img src="images/extra/file-8326516616.jpg" class="img-fluid w-100" alt="JMS Premier Floors" style="height: 270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="jms-premier-floors.php">JMS Premier Floors</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="navraj-the-kingstown-heights.php">
                                <img src="images/extra/Navraj The Kingstown Heights 37D.jpg" class="img-fluid w-100" alt="Navraj The Kingstown Heights" style="height: 270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="navraj-the-kingstown-heights.php">Navraj The Kingstown Heights</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="adani-lushlands-gwal-pahari.php">
                                <img src="images/extra/1920x1080-1.webp" class="img-fluid w-100" alt="Adani Lushlands" style="height: 270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="adani-lushlands-gwal-pahari.php">Adani Lushlands</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End LUXURY PROJECTS -->

<!-- Commercial Projects -->
<div class="section py-5">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-primary heading">
                    COMMERCIAL PROJECTS
                </h2>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
                <p>
                    <a href="commercial.php" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a>
                </p>
            </div>
        </div>

        <div class="swiper commercialSwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="twin-square-retail.php">
                            <img src="images/commercial/twin-square.webp" class="card-img-top img-fluid" alt="ROF Insignia Park" style="height: 300px; object-fit: cover;" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Signature Global Twin Square</h5><br>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="city-of-colours-industrial-hub.php">
                            <img src="images/commercial/coc-industrial-hub.webp" class="card-img-top img-fluid" alt="Signature Global Daxin Gurugram" style="height: 300px; object-fit: cover;" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Signature Global City of Colours - Industrial Plots</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="deluxe-dxp-commercial.php">
                            <img src="images/commercial/projects_dxp_luxury-min.webp" class="card-img-top img-fluid" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">DELUXE DXP (Commercial of Deluxe DXP )</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="signum-plaza-92.php">
                            <img src="images/commercial/signum-plaza-92-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Signum Plaza 92 – Commercial @ SG City 92</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="signature-global-sco2-88a.php">
                            <img src="images/commercial/SCO-88A-II-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Signature Global SCO II 88A</h5><br>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card shadow-sm border-0">
                        <a href="signum-plaza-37d2.php">
                            <img src="images/commercial/front-view.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Signum Plaza 37D II </h5><br>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Commercial Projects -->

<!-- RESIDENTIAL PROJECTS -->
<div class="section py-5">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-primary heading">RESIDENTIAL PROJECTS</h2>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
                <p>
                    <a href="Latest_Residential_Properties.php" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a>
                </p>
            </div>
        </div>

        <div class="swiper residentialSwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="sg-city-92.php"><img class="img-fluid w-100" src="images/on_going_project/sg-city-92-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="sg-city-92.php">Signature Global City 92</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="sg-city-93.php"><img class="img-fluid w-100" src="images/on_going_project/SG-City-93-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="sg-city-93.php">Signature Global City 93</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="sg-city81.php"><img class="img-fluid w-100" src="images/on_going_project/sg-city-81-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="sg-city81.php">Signature Global City 81</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="sg-city-37d.php">
                                <img src="images/on_going_project/sg-city-37d-min.webp" class="img-fluid w-100" alt="Signature Global City 37D" style="height: 270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="sg-city-37d.php">Signature Global City 37D</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="global-park4and5.php">
                                <img src="images/on_going_project/sg-park-4&5-min.webp" class="img-fluid w-100" alt="Signature Global Park IV & V" style="height: 270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="global-park4and5.php">Signature Global Park IV & V</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="global-park.php">
                                <img src="images/on_going_project/sg-park-min.webp" class="img-fluid w-100" alt="Signature Global Park" style="height: 270px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="global-park.php">Signature Global Park</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- RESIDENTIAL PROJECTS -->

<!--Our Delivered Projects-->
<div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 10px; background: transparent; text-align: center;">
    <h2>Our Delivered Projects</h2><br>

    <!-- Swiper Slider -->
    <div class="swiper-container" style="width: 100%; padding: 20px 0; overflow: hidden !important;">
        <div class="swiper-wrapper">
            <?php
            $projects = [
                ["The Serenas", "https://www.signatureglobal.in/sector-36-south-gurugram.php", "images/delivered/the-serenas-min.webp"],
                ["Signature Global Mall", "http://signatureglobal.in/signature-global-mall.php", "images/delivered/website-mall.webp"],
                ["Grand IVA", "https://www.signatureglobal.in/grand-iva-sector-103-gurugram.php", "images/delivered/grand-iva-min.webp"],
                ["The Millennia", "https://www.signatureglobal.in/the-millennia.php", "images/delivered/the-millennia-min.webp"],
                ["Solera 2", "https://www.signatureglobal.in/solera2.php", "images/delivered/solera-2-min.webp"],
            ];

            foreach ($projects as $project) {
                echo "<div class='swiper-slide' style='display: flex; justify-content: center;'>
                        <a href='{$project[1]}' target='_blank' style='display: flex; width: 90%; max-width: 400px; color: black; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); background: transparent; cursor: pointer; text-decoration: none;'>
                            <img src='{$project[2]}' alt='{$project[0]}' style='width: 50%; height: 150px; object-fit: cover;'>
                            <div style='width: 50%; padding: 15px; display: flex; flex-direction: column; justify-content: center;'>
                                <h3>{$project[0]}</h3>
                            </div>
                        </a>
                      </div>";
            }
            ?>
        </div>
    </div>

    <a href="delivered_projects.php" style="display: block; width: fit-content; margin: 20px auto; padding: 12px 20px; background:rgb(26, 55, 15); color: white; border-radius: 5px; text-decoration: none; font-size: 18px; font-weight: bold; text-align: center;">View More Projects</a>
</div>

<!--Our Delivered Projects End-->


    
<!-- customer says -->
   <?php include "customer_Says.php" ?> 
<!-- end customer says -->

  
    <?php include "botpress_chatbot.php"?>
    

<!-- Hero Section -->
<section class="text-light py-5" style="position: relative; overflow: hidden;">
    <video autoplay loop muted playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
        <source src="images/6310-190925747_large.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h6 class="text-uppercase">Welcome to Signatures Globals</h6>
                <h1 class="display-4 text-white">The epicenter of style and convenience</h1>
                <p>Through our exemplary efficiency and commitment to project delivery, we strive to set new benchmarks in the real estate and commercial sectors.</p>
                <a href="enquire_now.php" class="btn btn-lg btn-outline-light fw-bold px-5 py-3">Discover More →</a>
            </div>
            <div class="col-lg-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/nQ8LSFE-efM?si=X_orsgbP-tkst5Vn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Our Projects -->
<section class="py-5 bg-light">
    <div class="container">
        <h6 class="text-uppercase text-center">Our Projects</h6>
        <h2 class="text-center">An address that delivers excellence</h2>
        <p class="text-center">Signatures Globals projects are renowned for ideal locations, impeccable quality of construction, and reasonable pricing.</p>

        <div class="row g-4">
            <!-- Residential -->
            <div class="col-md-6 position-relative">
                <div class="overflow-hidden rounded-3 position-relative">
                    <a href="Ongoing_projects.php" class="stretched-link"></a>
                    <img src="images/SG-Residential-800x600-21 (1).webp" alt="Residential" class="img-fluid w-100" style="transition: transform 0.5s ease;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <a href="Ongoing_projects.php" class="btn btn-dark btn-lg rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">+</a>
                    </div>
                </div>
                <p class="mt-3 fw-bold">Residential</p>
            </div>

            <!-- Commercial -->
            <div class="col-md-6 position-relative">
                <div class="overflow-hidden rounded-3 position-relative">
                    <a href="commercial.php" class="stretched-link"></a>
                    <img src="images/SG-Commercial-800x600-21.webp" alt="Commercial" class="img-fluid w-100" style="transition: transform 0.5s ease;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <a href="commercial.php" class="btn btn-dark btn-lg rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">+</a>
                    </div>
                </div>
                <p class="mt-3 fw-bold">Commercial</p>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.overflow-hidden img').forEach(img => {
        img.addEventListener('mouseenter', () => img.style.transform = 'scale(1.1)');
        img.addEventListener('mouseleave', () => img.style.transform = 'scale(1)');
    });
</script>

<!-- Enquiry Card Start -->
<div class="enquiry-card" id="enquiryCard">
    <div id="imageCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000" style="flex: 1;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="titanium-spr.php" target="_blank">
                    <img src="images/SG-Titanium-Gallery-1.jpg" class="d-block w-100" alt="Slide 1">
                </a>
            </div>
            <div class="carousel-item">
                <a href="bptp-the-amaario.php" target="_blank">
                    <img src="images/extra/1720698271201.png" class="d-block w-100" alt="Slide 2">
                </a>
            </div>
            <div class="carousel-item">
                <a href="m3m-golf-hills.php" target="_blank">
                    <img src="images/extra/gh-1.webp" class="d-block w-100" alt="Slide 3">
                </a>
            </div>
        </div>
    </div>
    
    <div class="form-section">
        <button class="close-btn" onclick="toggleEnquiryCard()">×</button>
        <h2 style="color: white;">Quick Enquiry</h2>
        <form action="index.php" method="POST">
            <input type="text" class="form-control" placeholder="Name*" name="name" required>
            <input type="text" class="form-control" placeholder="Phone No.*" name="mobile" required>
            <input type="email" class="form-control" placeholder="Email*" name="email" required>
            <textarea class="form-control" placeholder="Message*" name="message" rows="3" required></textarea>
            <button type="submit" class="btn btn-submit w-100 text-white">Submit</button>
        </form>
    </div>
</div>
<!-- Enquiry Card End -->

<!-- CSS -->
<style>
  .enquiry-card {
    display: none;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    opacity: 0;
    transform: scale(0.9);
    transition: all 0.3s ease-in-out;
    max-width: 600px;
    width: 100%;
    max-height: 90vh;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.9);
    z-index: 9999;
    flex-direction: row;
}

.enquiry-card.show {
    display: flex;
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

.carousel-inner, .carousel-item, .carousel-item img {
    height: 100%;
}

.carousel-item img {
    object-fit: cover;
}

.form-section {
    flex: 1;
    padding: 10px;
    background: linear-gradient(135deg, #003c8f, #1976d2);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: auto;
}

.form-section form {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-control {
    border-radius: 5px;
    padding: 8px;
    font-size: 1rem;
}

.btn-submit {
    background-color: #e53935;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    padding: 10px;
    cursor: pointer;
    font-size: 1rem;
}

.btn-submit:hover {
    background-color: #c62828;
}

.close-btn {
    position: absolute;
    top: 8px;
    right: 10px;
    font-size: 20px;
    color: white;
    background: rgba(0, 0, 0, 0.2);
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.close-btn:hover {
    background: rgba(0, 0, 0, 0.2);
}
</style>

<!-- JS -->
<script>
  function toggleEnquiryCard() {
      const card = document.getElementById("enquiryCard");
      card.classList.toggle("show");
  }

  // Auto-popup after 2 seconds on page load
  window.addEventListener("load", function () {
      setTimeout(function () {
          toggleEnquiryCard();
      }, 2000); // 2000 ms = 2 seconds
  });
</script>


<!--our Delivered project js-->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        speed: 3000, // Speed of transition
        autoplay: {
            delay: 0, // No delay between transitions
            disableOnInteraction: false,
        },
        grabCursor: true,
        freeMode: true,
        freeModeMomentum: false,
        breakpoints: {
            640: { slidesPerView: 1, spaceBetween: 10 },
            768: { slidesPerView: 2, spaceBetween: 20 },
            1024: { slidesPerView: 3, spaceBetween: 30 },
        }
    });
</script>

<!--our Delivered project js end -->

<!-- WhatsApp Icon (Mid-Right Side) -->
<a href="https://wa.me/919540515454" target="_blank" title="Chat on WhatsApp"
   class="position-fixed end-0 me-3"
   style="top: 45%; width: 45px; height: 45px; background-color: #25D366; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2); z-index: 1050;">
    <i class="bi bi-whatsapp" style="font-size: 28px; color: white;"></i>
</a>

<!-- Phone Icon (Just Below WhatsApp Icon) -->
<a href="tel:919540515454" title="Call Us"
   class="position-fixed end-0 me-3"
   style="top: 55%; width: 45px; height: 45px; background-color: #25D366; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2); z-index: 1050;">
    <i class="bi bi-telephone-fill" style="font-size: 22px; color: white;"></i>
</a>

<!-- ON GOING PROJECTS js  -->
<script>
    var swiper = new Swiper(".mySwiper", {
slidesPerView: 1,
spaceBetween: 20,
loop: true,
autoplay: {
    delay: 2000,
    disableOnInteraction: false,
},
speed: 300, // Example: Transition speed ko 500 milliseconds karo
breakpoints: {
    768: {
        slidesPerView: 2,
    },
    992: {
        slidesPerView: 3,
    },
},
});
</script>
<!-- END ON GOING PROJECTS js  -->


<!-- Luxury PROJECTS js  -->
<script>
    // Initialize the new Swiper for the luxury projects section
    var luxurySwiper = new Swiper(".luxurySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        },
    });
</script>

<!-- END Luxury PROJECTS js  -->

<!-- Commercial Projects -->
<script>
    // Initialize the new Swiper for the commercial projects section
    var commercialSwiper = new Swiper(".commercialSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        },
    });
</script>
<!-- End Commercial Projects -->

<!-- RESIDENTIAL PROJECTS -->

<script>
    // Initialize the new Swiper for the residential projects section
    var residentialSwiper = new Swiper(".residentialSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        },
    });
</script>
<!-- End RESIDENTIAL PROJECTS -->

    <?php include "footer.php" ?>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
