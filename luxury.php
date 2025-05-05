<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commercial Properties</title>
     <!-- jQuery Required -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php  include "navbar.php"; ?>
<div style="margin-top: 120px;"></div>

  <!-- Search Box -->
<div class="p-3" style="z-index: 1050; position: absolute; top: 100px; right: 40px;">
  <div class="search-container bg-white bg-opacity-75 backdrop-blur rounded-pill px-3 py-2 d-flex align-items-center"
       style="width: 280px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);">
    <input type="text" id="searchInput" class="form-control border-0 bg-transparent text-dark"
           placeholder="Search..." style="box-shadow: none; outline: none;">
    <button id="clearIcon" class="btn btn-link text-danger p-0 ms-2" style="display: none;" type="button">
      <i class="bi bi-x-circle-fill fs-5"></i>
    </button>
  </div>
  <div id="suggestionsBox"
       class="list-group position-absolute mt-2"
       style="width: 280px; max-height: 220px; overflow-y: auto; right: 12px; display: none; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);">
  </div>
</div>

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
&nbsp;  

    <!-- Latest Commercial Properties -->
    <section class="container">
        <h2 class="text-center text-primary mb-4">Luxuary Projects</h2>
        
        <div class="row">
          

                      <!-- Property 1 -->
                      <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                <a href="adani-samsara-ivana.php">
      <img src="images/extra/Aproach road02.webp" class="card-img-top img-fluid" alt="ROF Insignia Park" style="height: 300px; object-fit: cover;" /></a>
                    <div class="card-body" >
                        <h5 class="card-title text-primary">Adani Ivana Gurgaon</h5>
                        <a href="adani-samsara-ivana.php">  <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails1">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ashiana-amarah-phase-5.php">
                        <img src="images/extra/ashiana-amarah-luxurious-3-4-BHK-apartments-in-gurgaon-img1012s.jpg" class="card-img-top img-fluid" alt="Signature Global City of Colours - Industrial Plots" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ashiana Amarah Sector 93</h5>
                        <a href="ashiana-amarah-phase-5.php"> <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails2">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ats-homekraft-sanctuary-105.php">
                        <img src="images/extra/img515.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">ATS Homekraft Sanctuary 105 </h5>
                        <a href="ats-homekraft-sanctuary-105.php"> <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails3">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


 <!-- Property 4 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="birla-arika.php">
                        <img src="images/extra/Arika-Aditya-Birla-Real-Estate-Sector-31.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Birla Arika  Sector 31</h5>
                        <a href="birla-arika.php">  <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails4">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 5 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="bptp-amstoria-verti-greens.php">
                        <img src="images/extra/bptp_the_amaario-sector_37d-gurgaon-bptp_limited.avif" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">BPTP Amstoria Verti Greens</h5>
                        <a href="bptp-amstoria-verti-greens.php"> <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails5">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


    <!-- Property 6 -->
    <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="conscient-elaira-residence.php">
                        <img src="images/extra/conscient-elaira-residences-project-project-large-image1-1430.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Conscient Elaira Residences</h5>
                        <a href="conscient-elaira-residence.php"> <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails6">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 7 -->
    <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="elan-the-emperor.php">
                        <img src="images/extra/1734154358265-front.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Elan The Emperor</h5>
                        <a href="elan-the-emperor.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails7">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 8 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="eldeco-fairway-reserve.php">
                        <img src="images/extra/17291692131121729604.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Eldeco Fairway Reserve, Sec. 80</h5>
                        <a href="eldeco-fairway-reserve.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails8">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 9 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="Emaar Urban Ascent.php">
                        <img src="images/extra/20722Whiteland-The-Aspen-Gurgaon-sector76.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Emaar Urban Ascent Sector 112</h5>
                        <a href="Emaar Urban Ascent.php">  <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails9">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 10 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="emaar-amaris.php">
                        <img src="images/extra/banner1.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Emaar Amaris, Sector 62</h5>
                        <a href="emaar-amaris.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails10">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            
            
<!-- Property 11 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="experion-thetrillion-luxury.php">
                        <img src="images/extra/1-1.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Experion The Trillion</h5>
                        <a href="experion-thetrillion-luxury.php"> <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails11">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 12 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-astra.php">
                        <img src="images/extra/3aca8d27-aa85-4863-9f9d-eca72557359e.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Astra Sector 54 </h5>
                        <a href="godrej-astra.php"> <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails12">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 13 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="hero-homes-the-palatial.php">
                        <img src="images/extra/hero-homes-palatial-project-project-large-image1-5731.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary"> Hero Homes Palatial </h5>
                        <a href="hero-homes-the-palatial.php">  <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails13">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


             <!-- Property 14 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="indiabulls-estate-club-1.php">
                        <img src="images/extra/About-indiabulls-sector-104.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Indiabulls Estate Club 1 Sec.104</h5>
                        <a href="indiabulls-estate-club-1.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails14">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 15 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="jms-premier-floors.php">
                        <img src="images/extra/file-8326516616.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">JMS Premier Floors</h5>
                        <a href="jms-premier-floors.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails15">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 16 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="navraj-the-kingstown-heights.php">
                        <img src="images/extra/Navraj The Kingstown Heights 37D.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Navraj The Kingstown Heights</h5>
                        <a href="navraj-the-kingstown-heights.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails16">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

     <!-- Property 17 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="smart-world-sky-arc.php">
                        <img src="images/extra/smartworld sector 69 gurgaon  main banner 2.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Smart World Sky Arc Sec.69</h5>
                        <a href="smart-world-sky-arc.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails17">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


             <!-- Property 18 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="trinity-sky-palazzos-sector-88b-gurgaon.php">
                        <img src="images/extra/banner.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Trinity Sky Palazzos</h5>
                        <a href="trinity-sky-palazzos-sector-88b-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails18">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


     <!-- Property 19 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ss-camasa-sector-90-gurgaon.php">
                        <img src="images/extra/SS-Sector-90-Residential-Project-Gurgaon.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">SS Camasa Sector 90</h5>
                        <a href="ss-camasa-sector-90-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails19">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 20 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="whiteland-westin-residences.php">
                        <img src="images/extra/Whiteland-Westin-Residences-Gurgoan.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Whiteland The Westin Residences</h5>
                        <a href="whiteland-westin-residences.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails20">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 21 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="4s-the-aurrum.php">
                        <img src="images/extra/4S-The-Aurrum-Sector-59-Gurgaon-1.avif" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">4S The Aurrum</h5>
                        <a href="4s-the-aurrum.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails21">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 22 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="adani-lushlands-gwal-pahari.php">
                        <img src="images/extra/1920x1080-1.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Adani Lushlands</h5>
                        <a href="adani-lushlands-gwal-pahari.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails22">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 23 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="amara-floors.php">
                        <img src="images/extra/17.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Amara Floors</h5>
                        <a href="amara-floors.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails23">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 24 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="anant-raj-the-estate-residences.php">
                        <img src="images/extra/Anant-Raj-The-Estate-Residences-Gurgaon-qtwyc7rfrr0asw9nue745j0a3kwp96uia2j9i07b54.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Anant Raj The Estate Residences</h5>
                        <a href="anant-raj-the-estate-residences.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails24">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 25 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ashiana-amarah-phase-3.php">
                        <img src="images/extra/ashiana-amarah-luxurious-3-4-BHK-apartments-in-gurgaon-img1012s.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ashiana Amarah Phase  3</h5>
                        <a href="ashiana-amarah-phase-3.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails25">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 26 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ashiana-amarah-phase-4.php">
                        <img src="images/extra/ashiana-amarah-luxurious-3-4-BHK-apartments-in-gurgaon-img1012s.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ashiana Amarah Phase 4</h5>
                        <a href="ashiana-amarah-phase-4.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails26">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 27 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ashiana-mulberry-blossom.php">
                        <img src="images/extra/Ashiana-Mulberry-Blossom-Sector-2-Sohna.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ashiana Mulberry Blossom</h5>
                        <a href="ashiana-mulberry-blossom.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails27">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 28 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="bptp-the-amaario.php">
                        <img src="images/extra/2024-10-22_11-42-34_bptptheamaariobanner.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">BPTP The Amaario</h5>
                        <a href="bptp-the-amaario.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails28">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 29 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="cbs-luxury-floors.php">
                        <img src="images/extra/CBS-Luxury-Floors-63A-image-7-.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">CBS Luxury Floors 63A</h5>
                        <a href="cbs-luxury-floors.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails29">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 30 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="conscient-parq.php">
                        <img src="images/extra/x8txt3mhpk4uv7c0gxkq.jpeg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Conscient Parq</h5>
                        <a href="conscient-parq.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails30">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 31 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="dlf-privana-south.php">
                        <img src="images/extra/Project-Photo-63-DLF-.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">DLF Privana South</h5>
                        <a href="dlf-privana-south.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails31">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 32 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="dlf-privana-west.php">
                        <img src="images/extra/Project-Photo-63-DLF-.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">DLF Privana North</h5>
                        <a href="dlf-privana-west.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails32">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 33 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="emaar-digi-homes.php">
                        <img src="images/extra/banner1.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Emaar Amaris, Sector 62, Gurgaon</h5>
                        <a href="emaar-digi-homes.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails33">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 34 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="emaar-the-88.php">
                        <img src="images/extra/emaar-the-88-project-project-large-image1-1461.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Emaar The 88</h5><br>
                        <a href="emaar-the-88.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails34">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 35 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="emaar-urban-oasis.php">
                        <img src="images/extra/urban-oasis-phase-4-main.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Emaar Urban Oasis, Sector 62, Gurgaon</h5>
                        <a href="emaar-urban-oasis.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails35">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 36 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="experion-windchants.php">
                        <img src="images/extra/567experion-windchants-amenities-features15_742x392.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Experion Windchants, Sector 112, Gurgaon</h5>
                        <a href="experion-windchants.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails36">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 37 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ganga-anantam.php">
                        <img src="images/extra/qdd9da5rqdy9pz3fhhkm.jpeg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ganga Anantam 85</h5>
                        <a href="ganga-anantam.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails37">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 38 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ganga-realty-nandaka.php">
                        <img src="images/extra/ganga-sector-84-gurgaon.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ganga Realty Group</h5>
                        <a href="ganga-realty-nandaka.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails38">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 39 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-arista-sector-79.php">
                        <img src="images/extra/rjt9s45tocfdqro3ylok.jpeg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Arista 79</h5>
                        <a href="godrej-arista-sector-79.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails39">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 40 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-aristocrat-sector-49.php">
                        <img src="images/extra/Godrej-Aristcrat-Ncr-Gallery03.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Aristocrat Sector 49 Gurgaon</h5>
                        <a href="godrej-aristocrat-sector-49.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails40">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 41 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-zenith.php">
                        <img src="images/extra/uknnbitqaedwzcfffjn5.jpeg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Zenith Sector 89 Gurgaon</h5>
                        <a href="godrej-zenith.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails41">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 42 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ild-grand-37c.php">
                        <img src="images/extra/11.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">ILD Grand 37C</h5>
                        <a href="ild-grand-37c.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails42">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 43 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="krisumi-waterside-residences.php">
                        <img src="images/extra/banner6.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary"> Krisumi Waterside Residences Sector 36A</h5>
                        <a href="krisumi-waterside-residences.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails43">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 44 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="laburnum-victory-floors.php">
                        <img src="images/extra/banner-1.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Laburnum Victory Floors</h5><br>
                        <a href="laburnum-victory-floors.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails44">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 45 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-altitude.php">
                        <img src="images/extra/m3m-altitude.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Altitude</h5><br>
                        <a href="m3m-altitude.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails45">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 46 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-golf-hills.php">
                        <img src="images/extra/gh-1.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Golf Hills Sector-79</h5>
                        <a href="m3m-golf-hills.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails46">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 47 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-heights.php">
                        <img src="images/extra/cover_1590315833.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Heights Gurgaon</h5>
                        <a href="m3m-heights.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails47">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 48 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-mansion.php">
                        <img src="images/extra/M3M-Mansion-Gurgaon-image-2-.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Mansion Sector 113 Gurgaon</h5>
                        <a href="m3m-mansion.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails48">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 49 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="max-estate-360.php">
                        <img src="images/extra/rc5ecd2zuylwq6zlk6qe.jpeg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Max Estate 360</h5>
                        <a href="max-estate-360.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails49">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 50 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="paras-the-manor.php">
                        <img src="images/extra/Paras-The-Manor.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Paras Manor</h5>
                        <a href="paras-the-manor.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails50">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 51 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="puri-diplomatic-residences.PHP">
                        <img src="images/extra/banner01.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Puri Diplomatic Residences Sector 111</h5>
                        <a href="puri-diplomatic-residences.PHP"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails51">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 52 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="signature-global-daxin-vistas.php">
                        <img src="images/extra/gallery50.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary"> Global Daxin Vistas Sector 35 Sohna, Gurugram</h5>
                        <a href="signature-global-daxin-vistas.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails52">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 53 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="silverglades-the-legacy.php">
                        <img src="images/extra/render.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Silverglades Legacy Gurgaon</h5><br>
                        <a href="silverglades-the-legacy.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails53">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 54 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="smart-world-the-edition.php">
                        <img src="images/extra/banner0.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Smart World The Edition Sector 66 Gurgaon</h5>
                        <a href="smart-world-the-edition.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails54">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

               <!-- Property 55 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sobha-altus.php">
                        <img src="images/extra/89.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Sobha Altus</h5>
                        <a href="sobha-altus.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails55">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 56 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sobha-aranya.php">
                        <img src="images/extra/sobha-aranya-main-banner-1.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Sobha Aranya</h5>
                        <a href="sobha-aranya.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails56">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 57 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ss-kiavasa.php">
                        <img src="images/extra/ze5cwrzsljwwbvw7dksh.jpeg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">SS Kiavasa Sector 83 Gurgaon</h5>
                        <a href="ss-kiavasa.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails57">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 58 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="tarc-ishva.php">
                        <img src="images/extra/sector-63a-gurugram-night-view.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="tarc-ishva.php">Tarc Ishva</h5>
                        <a href="smart-world-the-edition.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails58">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

               <!-- Property 59 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="titanium-spr.php">
                        <img src="images/extra/desktop-banner-titanium-160125.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Titanium Spr</h5>
                        <a href="titanium-spr.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails59">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 60 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="trehan-luxury-floors-sector-63a.php">
                        <img src="images/extra/file-8647328849.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Trehan Luxury Floors 63A</h5>
                        <a href="trehan-luxury-floors-sector-63a.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails60">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 61 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="trehan-luxury-floors-sector-71.php">
                        <img src="images/extra/file-5827328850.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Trehan Sector 71 Gurgaon</h5>
                        <a href="trehan-luxury-floors-sector-71.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 62 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="trevoc-royal-residences.php">
                        <img src="images/extra/q49dy9od7ygss5onqayf.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Trevoc Royal Residences</h5>
                        <a href="trevoc-royal-residences.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails62">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 63 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="tulip-crimson.php">
                        <img src="images/extra/Tulip-crimson-sector-70-gurgaon-1.avif" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Tulip Crimson, Sector 70 Gurgaon</h5>
                        <a href="tulip-crimson.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails63">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 64 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="whiteland-urban-resort.php">
                        <img src="images/extra/Whiteland-Westin-Residences.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Whiteland The Westin Residences Gurugram</h5>
                        <a href="whiteland-urban-resort.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails64">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 65 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ss-cendana-residences.php">
                        <img src="images/extra/39092442337962154403.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">SS Cendana Residence, Sector 83, Gurgaon</h5>
                        <a href="ss-cendana-residences.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails65">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 66 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="adore-the-select-premia.php">
                        <img src="images/extra/Adore-The-Select-Premia-Sector-77-Gurgaon-1.avif" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Adore The Select Premia, Sector 77, Gurgaon</h5>
                        <a href="adore-the-select-premia.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails66">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 67 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="mapsko-the-icon-sector-79-gurgaon.php">
                        <img src="images/extra/936.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Mapsko The ICON 79, Sector 79, Gurgaon</h5>
                        <a href="mapsko-the-icon-sector-79-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails67">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 68 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="mrg-crown-sector-106-gurgaon.php">
                        <img src="images/extra/overview-.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">MRG Crown, Sector 106, Gurgaon</h5><br>
                        <a href="mrg-crown-sector-106-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails68">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 69 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="chintamanis-sector-103.php">
                        <img src="images/extra/JLL_Gurgaon_Oxirich Chintamani_8783_EXT_2.png" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Oxirich Chintamanis - Sector 103</h5><br>
                        <a href="chintamanis-sector-103.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails69">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 70 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-93.php">
                        <img src="images/extra/STREET-VIEW.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">SIGNATURE GLOBAL CITY 93</h5>
                        <a href="sg-city-93.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails70">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 71 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-79b.php">
                        <img src="images/extra/SG-City-79b-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 79 - B</h5>
                        <a href="sg-city-79b.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails71">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 72 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="dlf-the-arbour-sector-63-gurgaon.php">
                        <img src="images/extra/dlf-new-launch-sec-63-1.jpeg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">DLF THE Arbour</h5>
                        <a href="v.php"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails72">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!--footer section  -->
<?php include "footer.php" ?>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>