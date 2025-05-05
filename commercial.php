<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commercial Properties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
&nbsp;  

    <!-- Latest Commercial Properties -->
    <section class="container">
        <h2 class="text-center text-primary mb-4">Latest Commercial Properties</h2>
        
        <div class="row">
          <!-- Property 1 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="twin-square-retail.php">
            <img src="images/commercial/twin-square.webp" class="card-img-top img-fluid" alt="Signature Global Twin Square" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signature Global Twin Square</h5><br>
            <a href="twin-square-retail.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 2 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="city-of-colours-industrial-hub.php">
            <img src="images/commercial/coc-industrial-hub.webp" class="card-img-top img-fluid" alt="Signature Global City of Colours - Industrial Plots" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signature Global City of Colours - Industrial Plots</h5>
            <a href="city-of-colours-industrial-hub.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 3 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="deluxe-dxp-commercial.php">
            <img src="images/commercial/projects_dxp_luxury-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">DELUXE DXP (Commercial of Deluxe DXP)</h5>
            <a href="deluxe-dxp-commercial.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 4 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signature-global-sco2-88a.php">
            <img src="images/commercial/SCO-88A-II-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signature Global SCO II 88A</h5>
            <a href="signature-global-sco2-88a.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 5 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signature-global-sco-88a.php">
            <img src="images/commercial/SCO-88A-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signature Global SCO 88A</h5>
            <a href="signature-global-sco-88a.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 6 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signum-plaza-93.php">
            <img src="images/commercial/Signum-plaza-93-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 93</h5>
            <a href="signum-plaza-93.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 7 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signum-plaza79b.php">
            <img src="images/commercial/Signum-plaza-79b-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 79B (Commercial of Signature Global City 79B )</h5>
            <a href="signum-plaza79b.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 8 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signum-plaza-63a.php">
            <img src="images/commercial/Signum-Plaza-63A-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 63A (Commercial of Signature Global City 63A )</h5>
            <a href="signum-plaza-63a.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 9 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signum-plaza-37d2.php">
            <img src="images/commercial/front-view.jpg" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 37D II</h5><br>
            <a href="signum-plaza-37d2.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 10 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signature-global-sco36.php">
            <img src="images/commercial/sco-36-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">SCO 36</h5>
            <a href="signature-global-sco36.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 11 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="sg-sco37d.php">
            <img src="images/commercial/sco-37-d-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">SCO 37D</h5>
            <a href="sg-sco37d.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 12 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="sg-infinity.php">
            <img src="images/commercial/infinity-mall-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Infinity Mall</h5>
            <a href="sg-infinity.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 13 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signum-plaza-92.php">
            <img src="images/commercial/signum-plaza-92-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 92 (Commercial of Signature Global City 92 )</h5>
            <a href="signum-plaza-92.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 14 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signum-plaza-81.php">
            <img src="images/commercial/Signum Plaza 81-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 81 (Commercial of Signature Global City 81 )</h5>
            <a href="signum-plaza-81.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 15 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signum-plaza37d.php">
            <img src="images/commercial/37d-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 37D (Commercial of Signature Global City 37D )</h5>
            <a href="signum-plaza37d.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 16 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0">
        <a href="signum-plaza-5.php">
            <img src="images/commercial/SIGNUM PLAZA 5-min.webp" class="card-img-top img-fluid" alt="DELUXE DXP Commercial" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 5 (Commercial of Signature Global Park 4&5 )</h5>
            <a href="signum-plaza-5.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

    <!-- Property 17 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0 h-100">
        <a href="signum-plaza-4.php">
            <img src="images/commercial/SIGNUM PLAZA 4-min.webp" class="card-img-top img-fluid" alt="Signum Plaza 4" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza 4 (Commercial of Signature Global Park 4&5)</h5>
            <a href="signum-plaza-4.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
</div>

<!-- Property 18 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="card shadow-sm border-0 h-100">
        <a href="signum-plaza.php">
            <img src="images/commercial/SIGNUM PLAZA-min.webp" class="card-img-top img-fluid" alt="Signum Plaza" style="height: 300px; object-fit: cover;">
        </a>
        <div class="card-body">
            <h5 class="card-title text-primary">Signum Plaza (Signature Global Park)</h5>
            <a href="signum-plaza.php" class="btn btn-outline-primary btn-sm">Know More</a>
        </div>
    </div>
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
