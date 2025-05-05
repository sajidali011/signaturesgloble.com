<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commercial Properties</title>
     <!-- jQuery Required -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
     
      .search-container:focus-within {
    box-shadow: 0 0 0 3px rgba(0,123,255,0.25);
    transition: all 0.2s ease-in-out;
  }
  #suggestionsBox a:hover {
    background-color: #f8f9fa;
    transition: background-color 0.2s ease;
  }
  
    </style>
  </head>
<body>
<?php  include "navbar.php"; ?>
<div style="margin-top: 140px;">
   
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


<div style="margin-top: 120px;"><br>
<div class="container mt-5">
        <div class="row">

            <!-- Property 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="city-of-colours.php">
                        <img src="images/township-desktop-min.png" class="card-img-top" alt="Signature Global City of Colours" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City of Colours</h5>
                        <a href="city-of-colours.php">  <button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
            
                    </div>
                </div>
            </div>

            <!-- Property 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="daxin-gurugram-x-factor.php">
                        <img src="images/on_going_project/sg-daxin-min.webp" class="card-img-top" alt="Signature Global Daxin" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global DAXIN</h5>
                        <a href="daxin-gurugram-x-factor.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="titanium-spr.php">
                        <img src="images/on_going_project/SG-Titanium-SPR-800X600-min.webp" class="card-img-top img-fluid" alt="Signature Global Titanium SPR" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global Titanium SPR</h5>
                        <a href="titanium-spr.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 4 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="twin-tower-dxp.php">
                        <img src="images/on_going_project/sg-twin-towerdxp-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global Twin Tower DXP</h5>
                        <a href="twin-tower-dxp.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>  


  <!-- Property 5 -->
  <!-- <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="orchard-avenue3.php">
                        <img src="images/on_going_project/Orchard-avenue-3-banner-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Orchard Avenue 3</h5>
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails5" aria-expanded="false" aria-controls="propertyDetails4">
                            View Details
                        </button>
                        <div class="collapse mt-2" id="propertyDetails5">
                            <div class="card card-body">
                                <p>Being developed in conjunction with the government of Haryana, this residential complex gives new meaning to the term value based housing.</p>
                                <p><strong>Typology:</strong> 2 bhk</p>
                                <p><strong>Status:</strong> On-Going</p>
                                <p><strong>Category:</strong> Affordable Flats/Apartments</p>
                                <a href="orchard-avenue3.php" class="btn btn-outline-primary btn-sm">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


             <!-- Property 6 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="signatureglobal-deluxe.php">
                        <img src="images/on_going_project/sggdeluxeimage-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">DE-LUXE DXP</h5><br>
                        <a href="signatureglobal-deluxe.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>



             <!-- Property 7 -->
             <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-79b.php">
                        <img src="images/on_going_project/SG-City-79b-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 79B </h5><br>
                        <a href="sg-city-79b.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


              <!-- Property 8 -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-93.php">
                        <img src="images/on_going_project/SG-City-93-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 93
                        </h5>
                        <a href="sg-city-93.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 9 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-92-2.php">
                        <img src="images/on_going_project/signatureglobal92-2-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 92 - 2
                        </h5>
                        <a href="sg-city-92-2.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            
 <!-- Property 10 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-63a.php">
                        <img src="images/on_going_project/63A-Box-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 63A
                        </h5>
                        <a href="sg-city-63a.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 11 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-37d2.php">
                        <img src="images/on_going_project/sg-city-37d2-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 37D II
                        </h5>
                        <a href="sg-city-37d2.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

    

 <!-- Property 13 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-92.php">
                        <img src="images/on_going_project/sg-city-92-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 92
                        </h5>
                        <a href="sg-city-92.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 14 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city81.php">
                        <img src="images/on_going_project/sg-city-81-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 81
                        </h5>
                        <a href="sg-city81.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

      <!-- Property 15 -->
      <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sg-city-37d.php">
                        <img src="images/on_going_project/sg-city-37d-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City 37D
                        </h5>
                        <a href="sg-city-37d.php"> <button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

  <!-- Property 16 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="global-park4and5.php">
                        <img src="images/on_going_project/sg-park-4&5-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global Park IV & V

                        </h5>
                        <a href="global-park4and5.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

  <!-- Property 17 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="global-park.php">
                        <img src="images/on_going_project/sg-park-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global Park</h5>
                        <a href="global-park.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                        
                    </div>
                </div>
            </div>


             <!-- Property 18 -->
  <!-- <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="signature-global-city.php">
                        <img src="images/on_going_project/SG Global City-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City Karnal</h5>
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails18" aria-expanded="false" aria-controls="propertyDetails4">
                            View Details
                        </button>
                        <div class="collapse mt-2" id="propertyDetails18">
                            <div class="card card-body">
                                <p>Classically styled homes with luxurious amenities for an unparalleled experience, offering cosmopolitan and convenient environment.</p>
                                <p><strong>Typology:</strong> 	
                                2 BHK & 3 BHK</p>
                                <p><strong>Status:</strong> On-Going</p>
                                <p><strong>Category:</strong>Residential Plots</p>
                                <a href="signature-global-city.php" class="btn btn-outline-primary btn-sm">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

             <!-- Property 19 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="signature-global-city.php">
                        <img src="images/on_going_project/SG Global City-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global City Karnal</h5>
                        <a href="signature-global-city.php"><button class="btn btn-primary btn-sm" type="button">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 20 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sunrise-the-premium-floors.php">
                        <img src="images/on_going_project/the-sunrise-karnal-min (1).webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Sunrise The Premium Floors</h5>
                        <a href="sunrise-the-premium-floors.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>    
                    </div>
                </div>
            </div>

            <!-- Property 21 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="true-habitat-luxe-residency-112.php">
                        <img src="images/on_going_project/True-Habitat-Bodh-112-Gurugram.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">True Habitat Luxe Residency</h5>
                        <a href="true-habitat-luxe-residency-112.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 22 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="lid-green-valley-sector-35-sohna.php">
                        <img src="images/on_going_project/cf60e2b57f50a18.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Lion Infra Green Valley</h5>
                        <a href="lid-green-valley-sector-35-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 23 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="conscient-parq-sector-80-gurgaon.php">
                        <img src="images/on_going_project/Conscient-Parq-Image-1.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Conscient Parq</h5>
                        <a href="conscient-parq-sector-80-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 24 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="signature-global-park-4-5-sector-36-gurgaon.php">
                        <img src="images/on_going_project/Elevations_0003_View-08.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global Park 4 & 5</h5>
                        <a href="signature-global-park-4-5-sector-36-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 25 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-crown.php">
                        <img src="images/on_going_project/m3m-altitude.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Crown</h5><br>
                        <a href="m3m-crown.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 26 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="trehan-valley-sector-35-sohna.php">
                        <img src="images/on_going_project/BLF-Nature-Valley.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Trehan Valley
                        </h5><br>
                        <a href="trehan-valley-sector-35-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 27 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="adore-the-select-premia.php">
                        <img src="images/on_going_project/Adore-The-Select-Premia-Sector-77-Gurgaon-1.avif" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Adore The Select Premia, Sector 77
                        </h5>
                        <a href="adore-the-select-premia.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 28 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="raheja-india-rashtra.php">
                        <img src="images/on_going_project/txevsyriiwjignolojnh.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Raheja India Rashtra</h5>
                        <a href="raheja-india-rashtra.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 29 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="birla-navya-avik-phase-1.php">
                        <img src="images/on_going_project/1698217208Gallery1.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Birla Navya Avik Phase 1</h5>
                        <a href="birla-navya-avik-phase-1.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 30 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="smart-world-one-dxp.php">
                        <img src="images/on_going_project/Smart-World-One-DXP-.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Smart World One DXP
                        </h5>
                        <a href="smart-world-one-dxp.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 31 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-capital.php">
                        <img src="images/on_going_project/m3m-capital-banner-32686.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Capital
                        </h5>
                        <a href="m3m-capital.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 32 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="puri-the-aravallis.php">
                        <img src="images/on_going_project/puri-the-araval-main-1734591564.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Puri The Aravallis
                        </h5>
                        <a href="puri-the-aravallis.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 33 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-connaught-one.php">
                        <img src="images/on_going_project/yjsyapux9c9fbabyo2rx.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Connaught One
                        </h5>
                        <a href="godrej-connaught-one.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 34 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="tarc-tripundra.php">
                        <img src="images/on_going_project/Zen_Garden.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Tarc Tripundra
                        </h5>
                        <a href="tarc-tripundra.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 35 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="birla-estates-navya-sector-63a-gurgaon.php">
                        <img src="images/on_going_project/unnamed.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Birla Estates Navya</h5>
                        <a href="birla-estates-navya-sector-63a-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 36 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="tulip-monsella.php">
                        <img src="images/on_going_project/Tulip-Monsella-Image-1-1024x683.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Tulip Monsella</h5>
                        <a href="tulip-monsella.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 37 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="bptp-green-oaks.php">
                        <img src="images/on_going_project/JLL_Gurgaon_BPTP Green Oaks_7736_EXT_1.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">BPTP Green Oaks, Sec.70A</h5>
                        <a href="bptp-green-oaks.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 38 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-soulitude-city-of-dreams-sector-89-gurgaon.php">
                        <img src="images/on_going_project/61d7f0dd00171.png" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Soulitude Floors</h5>
                        <a href="m3m-soulitude-city-of-dreams-sector-89-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 39 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="4s-developers-aradhya-homes.php">
                        <img src="images/on_going_project/1687766164418-4S-Aradhya-Homes-banner-image.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">4S Developers Aradhya Homes</h5>
                        <a href="4s-developers-aradhya-homes.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 40 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="bptp-102-eden-estate-sector-102-gurgaon.php">
                        <img src="images/on_going_project/BPTP-102-Eden-Estate.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">BPTP 102 Eden Estate Plots</h5>
                        <a href="bptp-102-eden-estate-sector-102-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 41 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="dlf-alameda-floors.php">
                        <img src="images/on_going_project/dlf-alameda-floors-banner-70825.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">DLF Alameda Floors</h5>
                        <a href="dlf-alameda-floors.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 42 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-sky-city-sector-65-gurgaon.php">
                        <img src="images/on_going_project/skycity_highlights.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Sky City</h5>
                        <a href="m3m-sky-city-sector-65-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 43 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-serenity-sector-33-sohna.php">
                        <img src="images/on_going_project/image5456.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Gоdrej Serenity</h5>
                        <a href="godrej-serenity-sector-33-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 44 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ss-linden-floors.php">
                        <img src="images/on_going_project/5157d.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">SS Linden Floors</h5>
                        <a href="ss-linden-floors.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 45 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ashiana-anmol-sector-33-sohna.php">
                        <img src="images/on_going_project/JLL_Gurgaon_Ashiana.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ashiana Anmol</h5>
                        <a href="ashiana-anmol-sector-33-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 46 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-habitat-sector-3-gurgaon.php">
                        <img src="images/on_going_project/cf5c9070faa42f5.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Habitat</h5>
                        <a href="godrej-habitat-sector-3-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 47 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-meridien-sector-106.php">
                        <img src="images/on_going_project/home-page-banner.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Meridien</h5>
                        <a href="godrej-meridien-sector-106.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 48 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-south-estate-okhla-delhi.php">
                        <img src="images/on_going_project/godrej-south-estate-banner.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej South Estate</h5>
                        <a href="godrej-south-estate-okhla-delhi.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 49 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-nature-plus-sector-33-south-of-gurgaon.php">
                        <img src="images/on_going_project/6.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Nature Plus</h5>
                        <a href="godrej-nature-plus-sector-33-south-of-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 50 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="emaar-emerald-nuevo-sector-65-gurgaon.php">
                        <img src="images/on_going_project/banner.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Emaar Emerald Nuevo</h5>
                        <a href="emaar-emerald-nuevo-sector-65-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 51 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="central-park-bellavista-towers-sector-48-gurgaon.php">
                        <img src="images/on_going_project/central-park-bellavista-banner.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Central Park Bellavista Towers</h5>
                        <a href="central-park-bellavista-towers-sector-48-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 52 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="conscient-hines-elevate-sector-59-gurgaon.php">
                        <img src="images/on_going_project/conscient-hines-elevate-sector-59-gurgaon-4.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Conscient Hines Elevate</h5>
                        <a href="conscient-hines-elevate-sector-59-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 21 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="true-habitat-luxe-residency-112.php">
                        <img src="images/on_going_project/True-Habitat-Bodh-112-Gurugram.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">True Habitat Luxe Residency</h5>
                        <a href="true-habitat-luxe-residency-112.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 22 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="lid-green-valley-sector-35-sohna.php">
                        <img src="images/on_going_project/cf60e2b57f50a18.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Lion Infra Green Valley</h5>
                        <a href="lid-green-valley-sector-35-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 23 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="conscient-parq-sector-80-gurgaon.php">
                        <img src="images/on_going_project/Conscient-Parq-Image-1.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Conscient Parq</h5>
                        <a href="conscient-parq-sector-80-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 24 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="signature-global-park-4-5-sector-36-gurgaon.php">
                        <img src="images/on_going_project/Elevations_0003_View-08.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Signature Global Park 4 & 5</h5>
                        <a href="signature-global-park-4-5-sector-36-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 25 -->
  <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-crown.php">
                        <img src="images/on_going_project/m3m-altitude.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Crown</h5><br>
                        <a href="m3m-crown.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 26 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="trehan-valley-sector-35-sohna.php">
                        <img src="images/on_going_project/BLF-Nature-Valley.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Trehan Valley
                        </h5><br>
                        <a href="trehan-valley-sector-35-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 27 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="adore-the-select-premia.php">
                        <img src="images/on_going_project/Adore-The-Select-Premia-Sector-77-Gurgaon-1.avif" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Adore The Select Premia, Sector 77
                        </h5>
                        <a href="adore-the-select-premia.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 28 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="raheja-india-rashtra.php">
                        <img src="images/on_going_project/txevsyriiwjignolojnh.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Raheja India Rashtra</h5>
                        <a href="raheja-india-rashtra.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 29 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="birla-navya-avik-phase-1.php">
                        <img src="images/on_going_project/1698217208Gallery1.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Birla Navya Avik Phase 1</h5>
                        <a href="birla-navya-avik-phase-1.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 30 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="smart-world-one-dxp.php">
                        <img src="images/on_going_project/Smart-World-One-DXP-.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Smart World One DXP
                        </h5>
                        <a href="smart-world-one-dxp.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 31 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-capital.php">
                        <img src="images/on_going_project/m3m-capital-banner-32686.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Capital
                        </h5>
                        <a href="m3m-capital.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 32 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="puri-the-aravallis.php">
                        <img src="images/on_going_project/puri-the-araval-main-1734591564.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Puri The Aravallis
                        </h5>
                        <a href="puri-the-aravallis.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 33 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-connaught-one.php">
                        <img src="images/on_going_project/yjsyapux9c9fbabyo2rx.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Connaught One
                        </h5>
                        <a href="godrej-connaught-one.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 34 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="tarc-tripundra.php">
                        <img src="images/on_going_project/Zen_Garden.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Tarc Tripundra
                        </h5>
                        <a href="tarc-tripundra.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 35 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="birla-estates-navya-sector-63a-gurgaon.php">
                        <img src="images/on_going_project/unnamed.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Birla Estates Navya</h5>
                        <a href="birla-estates-navya-sector-63a-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 36 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="tulip-monsella.php">
                        <img src="images/on_going_project/Tulip-Monsella-Image-1-1024x683.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Tulip Monsella</h5>
                        <a href="tulip-monsella.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 37 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="bptp-green-oaks.php">
                        <img src="images/on_going_project/JLL_Gurgaon_BPTP Green Oaks_7736_EXT_1.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">BPTP Green Oaks, Sec.70A</h5>
                        <a href="bptp-green-oaks.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 38 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-soulitude-city-of-dreams-sector-89-gurgaon.php">
                        <img src="images/on_going_project/61d7f0dd00171.png" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Soulitude Floors</h5>
                        <a href="m3m-soulitude-city-of-dreams-sector-89-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 39 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="4s-developers-aradhya-homes.php">
                        <img src="images/on_going_project/1687766164418-4S-Aradhya-Homes-banner-image.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">4S Developers Aradhya Homes</h5>
                        <a href="4s-developers-aradhya-homes.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 40 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="bptp-102-eden-estate-sector-102-gurgaon.php">
                        <img src="images/on_going_project/BPTP-102-Eden-Estate.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">BPTP 102 Eden Estate Plots</h5>
                        <a href="bptp-102-eden-estate-sector-102-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 41 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="dlf-alameda-floors.php">
                        <img src="images/on_going_project/dlf-alameda-floors-banner-70825.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">DLF Alameda Floors</h5>
                        <a href="dlf-alameda-floors.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 42 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-sky-city-sector-65-gurgaon.php">
                        <img src="images/on_going_project/skycity_highlights.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Sky City</h5>
                        <a href="m3m-sky-city-sector-65-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 43 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-serenity-sector-33-sohna.php">
                        <img src="images/on_going_project/image5456.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Gоdrej Serenity</h5>
                        <a href="godrej-serenity-sector-33-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 44 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ss-linden-floors.php">
                        <img src="images/on_going_project/5157d.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">SS Linden Floors</h5>
                        <a href="ss-linden-floors.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 45 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ashiana-anmol-sector-33-sohna.php">
                        <img src="images/on_going_project/JLL_Ggn_Ashiana_.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ashiana Anmol</h5>
                        <a href="ashiana-anmol-sector-33-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 46 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-habitat-sector-3-gurgaon.php">
                        <img src="images/on_going_project/cf5c9070faa42f5.jpeg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Habitat</h5>
                        <a href="godrej-habitat-sector-3-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 47 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-meridien-sector-106.php">
                        <img src="images/on_going_project/home-page-banner.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Meridien</h5>
                        <a href="godrej-meridien-sector-106.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 48 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-south-estate-okhla-delhi.php">
                        <img src="images/on_going_project/godrej-south-estate-banner.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej South Estate</h5>
                        <a href="godrej-south-estate-okhla-delhi.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 49 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-nature-plus-sector-33-south-of-gurgaon.php">
                        <img src="images/on_going_project/6.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Nature Plus</h5>
                        <a href="godrej-nature-plus-sector-33-south-of-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 50 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="emaar-emerald-nuevo-sector-65-gurgaon.php">
                        <img src="images/on_going_project/banner.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Emaar Emerald Nuevo</h5>
                        <a href="emaar-emerald-nuevo-sector-65-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 51 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="central-park-bellavista-towers-sector-48-gurgaon.php">
                        <img src="images/on_going_project/central-park-bellavista-banner.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Central Park Bellavista Towers</h5>
                        <a href="central-park-bellavista-towers-sector-48-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 52 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="conscient-hines-elevate-sector-59-gurgaon.php">
                        <img src="images/on_going_project/conscient-hines-elevate-sector-59-gurgaon-4.jpeg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Conscient Hines Elevate</h5>
                        <a href="conscient-hines-elevate-sector-59-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 53 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-trump-towers-sector-65.php">
                        <img src="images/on_going_project/Trump-Towers-Delhi-NCR-highlights.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Trump Towers Gurgaon</h5>
                        <a href="m3m-trump-towers-sector-65.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 54 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-air-sector-85-new-gurgaon.php">
                        <img src="images/on_going_project/d3c.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Air</h5>
                        <a href="godrej-air-sector-85-new-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 55 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-duo-high-luxury-sector-65.php">
                        <img src="images/on_going_project/m3m-duo.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Duo High</h5>
                        <a href="m3m-duo-high-luxury-sector-65.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 56 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="dlf-independent-luxury-floors.php">
                        <img src="images/on_going_project/banner.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">DLF Independent Luxury Floors</h5>
                        <a href="dlf-independent-luxury-floors.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 57 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="ats-grandstand-sector-99a-gurgaon.php">
                        <img src="images/on_going_project/ATS-Grandstand-MRE-img-2.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">ATS Grandstand</h5>
                        <a href="ats-grandstand-sector-99a-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 58 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="sobha-city-gurgaon-sector-108.php">
                        <img src="images/on_going_project/IN_.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Sobha City Gurgaon</h5>
                        <a href="sobha-city-gurgaon-sector-108.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 59 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="suncity-platinum-towers.php">
                        <img src="images/on_going_project/x0pwvsxsvro55uwetfb9.jpeg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Suncity Platinum Towers</h5>
                        <a href="suncity-platinum-towers.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 60 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="central-park-flower-valley.php">
                        <img src="images/on_going_project/1928050009.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Central Park Flower Valley Clover Floors</h5>
                        <a href="central-park-flower-valley.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 61 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-viola-towers-sector-68.php">
                        <img src="images/on_going_project/unnamed1.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Viola Towers</h5>
                        <a href="supertech-viola-towers-sector-68.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 62 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="chd-y-suites-sector-34-sohna.php">
                        <img src="images/on_going_project/y-suites-images-for-elevation-of-chd-y-suites-30271268.jpeg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">CHD Y Suites</h5>
                        <a href="chd-y-suites-sector-34-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 63 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-hill-estate.php">
                        <img src="images/on_going_project/Supertech-Hill-Estate-sohna.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Hill Estate</h5>
                        <a href="supertech-hill-estate.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 64 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="shapoorji-pallonji-joyville-sector-102-gurgaon.php">
                        <img src="images/on_going_project/47811deb4d20.jpeg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Shapoorji Pallonji Joyville</h5>
                        <a href="shapoorji-pallonji-joyville-sector-102-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 65 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-montana-view-residences-sector-2.php">
                        <img src="images/on_going_project/supertech_azalia-sector_68_gurgaon-gurgaon-supertech_limited.avif"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Montana View Residences</h5>
                        <a href="supertech-montana-view-residences-sector-2.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 66 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-hues-sector-68-in-Gurgaon.php">
                        <img src="images/on_going_project/HUES-01.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Hues</h5><br>
                        <a href="supertech-hues-sector-68-in-Gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 67 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-azalia-sector-68-in-gurgaon.php">
                        <img src="images/on_going_project/5balarge.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Azalia Gurgaon</h5><br>
                        <a href="supertech-azalia-sector-68-in-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 68 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-scarlet-suites-sector-68-sohna-road-in-gurgaon.php">
                        <img src="images/on_going_project/Project-Photo-10-Scarlet-Suit.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Scarlet Corporate Suites</h5>
                        <a href="supertech-scarlet-suites-sector-68-sohna-road-in-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

 <!-- Property 69 -->
 <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="dlf-floors-phase-2.php">
                        <img src="images/on_going_project/dlf-independent-floors.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">DLF Floors Phase 2</h5>
                        <a href="dlf-floors-phase-2.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 70 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="chintels-serenity-sector-109-gurgaon.php">
                        <img src="images/on_going_project/file-968249670.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Chintels Serenity</h5>
                        <a href="chintels-serenity-sector-109-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 71 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="dlf-garden-city-floors-sector-91-92-gurgaon.php">
                        <img src="images/on_going_project/dlf-floors.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Dlf Garden City Floors</h5>
                        <a href="dlf-garden-city-floors-sector-91-92-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 72 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="pareena-micasa-sector-68-in-gurgaon.php">
                        <img src="images/on_going_project/micasa-Sec-68-Gurgaon.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pareena Micasa</h5>
                        <a href="pareena-micasa-sector-68-in-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 73 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="emaar-gurgaon-greens-sector-102-gurgaon.php">
                        <img src="images/on_going_project/gurgaon-greeens-banner.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Emaar Gurgaon Greens</h5>
                        <a href="emaar-gurgaon-greens-sector-102-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 74 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="godrej-prive-sector-106-gurgaon.php">
                        <img src="images/on_going_project/large.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Godrej Prive</h5>
                        <a href="godrej-prive-sector-106-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 75 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-officers-enclave-sector-2-sohna-road-sohna.php">
                        <img src="images/on_going_project/officers-enclave.jpeg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Officer’s Enclave</h5>
                        <a href="supertech-officers-enclave-sector-2-sohna-road-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 76 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="aipl-zen-residences-sector-70a-gurgaon.php">
                        <img src="images/on_going_project/AIPL-Zen-Residences-image-3.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">AIPL Zen Residences</h5>
                        <a href="aipl-zen-residences-sector-70a-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 77 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-hill-crest-floors-Sector-2.php">
                        <img src="images/on_going_project/gei8ja.jpeg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Hill Crest Floors</h5>
                        <a href="supertech-hill-crest-floors-Sector-2.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 78 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-hill-view-residence-sector-2.php">
                        <img src="images/on_going_project/cf5a8513d0e4447.jpeg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Hill View Residences</h5>
                        <a href="supertech-hill-view-residence-sector-2.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 79 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-hill-town-plots-sector-2-sohna.php">
                        <img src="images/on_going_project/banner11.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Hill Town</h5>
                        <a href="supertech-hill-town-plots-sector-2-sohna.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 80 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-latitude-sector-65-in-gurgaon.php">
                        <img src="images/on_going_project/34bc445e74b.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Latitude</h5>
                        <a href="m3m-latitude-sector-65-in-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 81 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="cosmos-cascade-gardens-sector-99-in-gurgaon.php">
                        <img src="images/on_going_project/1-1.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Cosmos Cascade Gardens</h5>
                        <a href="cosmos-cascade-gardens-sector-99-in-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 82 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="pareena-coban-residences-sector-99A.php">
                        <img src="images/on_going_project/Pareena-Coban-phase3-pond-3.png"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pareena Coban Residences</h5>
                        <a href="pareena-coban-residences-sector-99A.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 83 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="abw-verona-hills-sector-76-in-gurgaon.php">
                        <img src="images/on_going_project/ABW-Verona-Hills-Image-01.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">ABW Verona Hills</h5>
                        <a href="abw-verona-hills-sector-76-in-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 84 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="m3m-royal-regalia-sector-67-in-gurgaon.php">
                        <img src="images/on_going_project/m3m-royal-regalia-67.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">M3M Royal Regalia</h5>
                        <a href="m3m-royal-regalia-sector-67-in-gurgaon.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 85 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-48-canvas-sector-79.php">
                        <img src="images/on_going_project/563a51534407d.png"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech 48 Canvas</h5>
                        <a href="supertech-48-canvas-sector-79.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>


            <!-- Property 86 -->
<!-- <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-76-canvas.php">
                    <img src="images/on_going_project/https://d36c9y7c8zyajq.cloudfront.net/listing_3c2aa1e06f5241b69c8400c537d173f4/1024x600/supertech-azalia-in-sector-68-elevation-photo-1jzo.jpg" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech 76 Canvas</h5>
                        <a href="supertech-76-canvas.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div> -->

            <!-- Property 87 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-aadri-plots-sector-79.php">
                        <img src="https://www.axiomlandbase.in/wp-content/uploads/2015/02/Supertech-Aadri-Plots-Gurgaon.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Aadri Plots</h5>
                        <a href="supertech-aadri-plots-sector-79.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 88 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="aipl-club-residences-sector-70.php">
                        <img src="images/on_going_project/ClubResidencesGallery1.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">AIPL Club Residences</h5>
                        <a href="aipl-club-residences-sector-70.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 89 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-belfair-sector-79.php">
                        <img src="images/on_going_project/11.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Belfair</h5>
                        <a href="supertech-belfair-sector-79.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 90 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="pareena-enorme-sector-99a.php">
                        <img src="images/on_going_project/Pareena-Coban-phase3-1.png"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pareena Enorme</h5>
                        <a href="pareena-enorme-sector-99a.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

             <!-- Property 91 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="pareena-the-elite-residences-sector-99.php">
                        <img src="images/on_going_project/banner-1.jpg"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pareena The Elite Residences</h5>
                        <a href="pareena-the-elite-residences-sector-99.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

<!-- Property 92 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="pareena-express-heights-in-sector-99.php">
                        <img src="images/on_going_project/Pareena-Express-Heights.webp"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pareena Express Heights</h5>
                        <a href="pareena-express-heights-in-sector-99.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Property 93 -->
<div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="supertech-neeladri-independent-floors-Sector-79.php">
                        <img src="images/on_going_project/supertech_aadri-sector_79-gurgaon-supertech_limited.avif"  class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Supertech Neeladri Floors</h5>
                        <a href="supertech-neeladri-independent-floors-Sector-79.php"><button class="btn btn-primary btn-sm" type="button" >
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
      <!--footer section  -->
<?php include "footer.php" ?>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
