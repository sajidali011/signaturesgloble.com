<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DLF Corporate Greens Gurgaon | Office & IT Spaces</title>
  <meta name="description" content="DLF Corporate Greens offers premium commercial office & IT spaces in Sector 74A Gurgaon. Explore price list, brochure, floor plans, location map & more."/>
  <meta name="keywords" content="DLF Corporate Greens, DLF Corporate Greens Gurgaon, DLF office space, IT space Gurgaon, commercial space sector 74A, DLF commercial project"/>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
    }
    .tab-btn.active {
      background-color: #3f8776 !important;
      color: white !important;
    }
    .content-container {
      flex-grow: 1;
      min-height: 100vh;
    }
  </style>
</head>
<body>

<?php 
  $navbarPath = "navbar.php";
  if (file_exists($navbarPath)) {
    include $navbarPath;
  } else {
    echo '<div class="alert alert-danger text-center">Navbar file not found!</div>';
  }
?>

<!-- Banner Image -->
<section class="bg-light">
  <div class="position-relative">
    <img src="images/commercial/banner.webp" class="w-100" style="height: 100vh; object-fit: cover;" alt="DLF Corporate Greens Gurgaon">
  </div>
</section>

<!-- Overview -->
<section id="overview" class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-7 mb-4">
        <h2 class="text-uppercase">
          <span class="d-block text-muted">DLF Corporate Greens</span>
          <strong class="d-block text-warning">Offices Summary</strong>
        </h2>
        <ul class="list-unstyled">
          <li><strong>Property Type:</strong> Office/IT Spaces</li>
          <li><strong>Developer:</strong> DLF Universal Limited</li>
          <li><strong>Built-up Area:</strong> 3.7 Million SQFT</li>
          <li><strong>Area:</strong> 25 Acres</li>
          <li><strong>Price:</strong> Starting from ₹1.25 Cr</li>
          <li><strong>Parking:</strong> Covered Parking</li>
          <li><strong>Ownership:</strong> Freehold</li>
          <li><strong>Status:</strong> Ready to Move</li>
          <li><strong>Landmark:</strong> Clover-Leaf Flyover</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Description -->
<section class="py-5 bg-secondary text-white">
  <div class="container">
    <h3 class="text-uppercase">
      <span class="d-block">DLF Corporate Greens</span>
      <strong class="d-block text-warning">Commercial & IT Spaces in Gurgaon</strong>
    </h3>
    <p>DLF Corporate Greens Sector 74A offers cutting-edge commercial office spaces with high-speed elevators, air-conditioning, and ample car parking. With proximity to NH-8 and DLF Alameda, this premium workspace ensures business productivity with leisure and connectivity. Download DLF Corporate Greens Brochure for more insights.</p>
  </div>
</section>

<!-- Price List -->
<section id="price" class="py-5 bg-light">
  <div class="container">
    <h3 class="text-uppercase">
      <span class="d-block text-muted">DLF Commercial</span>
      <strong class="d-block text-warning">Price List & Area</strong>
    </h3>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <thead class="table-dark">
          <tr>
            <th>Tower</th>
            <th>Area</th>
            <th>Price</th>
            <th>Booking Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>CG T-1</td>
            <td>1634 - 3500 SQFT</td>
            <td>On Request</td>
            <td>₹5 Lac</td>
          </tr>
          <tr>
            <td>CG T-2</td>
            <td>1634 - 3500 SQFT</td>
            <td>On Request</td>
            <td>₹5 Lac</td>
          </tr>
          <tr>
            <td>CG T-4</td>
            <td>1642 - 3400 SQFT</td>
            <td>On Request</td>
            <td>₹5 Lac</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Features -->
<section id="feature" class="py-5 bg-secondary text-white">
  <div class="container-fluid">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="images/commercial/features.jpg" alt="DLF Corporate Greens Salient Features" class="img-fluid w-100">
      </div>
      <div class="col-md-8">
        <div class="p-4">
          <h3 class="text-uppercase text-warning">Salient Features</h3>
          <ul class="list-unstyled">
            <li>✔ Superb connectivity with NH-8</li>
            <li>✔ Close to DLF Alameda Township</li>
            <li>✔ Central Air Conditioning</li>
            <li>✔ Spread across 25 acres in Gurgaon</li>
            <li>✔ Smart Design and Amenities</li>
            <li>✔ High-Speed Elevators</li>
            <li>✔ Ample Car Parking</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Location Map -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4">DLF Corporate Greens Location Map</h2>
    <img src="images/commercial/location-map.jpg" alt="DLF Corporate Greens Location Map" class="img-fluid rounded shadow">
  </div>
</section>

<!-- Brochure Section -->
<section id="brochure" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="images/commercial/brochure.webp" alt="DLF Corporate Greens Brochure" class="img-fluid w-100">
      </div>
      <div class="col-md-6">
        <div class="px-3 px-md-5">
          <h3 class="text-uppercase mb-3">
            <span class="d-block text-muted">Brochure & Floor Plans</span>
            <strong class="d-block text-warning">Download E-Brochure</strong>
          </h3>
          <p>Need expert advice on choosing the best unit? Get the DLF Corporate Greens Brochure and floor plan now.</p>
          <button class="btn btn-warning text-uppercase" data-bs-toggle="modal" data-bs-target="#enquiryModal">Request Brochure</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4" style="max-width: 320px; margin: auto;">
      <div class="modal-header bg-primary text-white py-2 rounded-top-4">
        <h6 class="modal-title w-100 text-center">Quick Enquiry</h6>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-3 py-2">
        <form action="index.php" method="POST">
          <div class="form-floating mb-2">
            <input type="text" name="name" class="form-control form-control-sm" placeholder="Name" required>
            <label>Name</label>
          </div>
          <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
            <label>Email</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" name="mobile" class="form-control form-control-sm" placeholder="Mobile" required>
            <label>Mobile</label>
          </div>
          <div class="form-floating mb-3">
            <textarea name="message" class="form-control form-control-sm" placeholder="Message" style="height: 70px;" required></textarea>
            <label>Message</label>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-sm btn-success rounded-pill">Send Enquiry</button>
            <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>