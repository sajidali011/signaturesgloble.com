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

<section id="summary" class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-7 mb-4">
        <div class="border p-4 bg-white shadow-sm">
          <h2 class="text-uppercase text-primary mb-3">DLF Star Tower - <span class="text-danger">Office Summary</span></h2>
          <ul class="list-unstyled">
            <li><strong>Property Type:</strong> Premium Office/IT Spaces</li>
            <li><strong>Developer:</strong> DLF Limited</li>
            <li><strong>Built-up Area:</strong> 2 Million Sq. Ft.</li>
            <li><strong>Project Area:</strong> 2.5 Acres</li>
            <li><strong>Price:</strong> ₹85 Lac Onwards</li>
            <li><strong>Parking:</strong> Covered Parking</li>
            <li><strong>Ownership:</strong> Freehold</li>
            <li><strong>Status:</strong> Ready to Move</li>
            <li><strong>Location:</strong> Opp. 32nd Milestone, NH-8</li>
          </ul>
        </div>
      </div>
      <div class="col-md-5">
        <div class="bg-danger text-white p-4 rounded">
          <h4 class="text-center text-uppercase">Interested in DLF Offices?<br><small class="text-light">Get Instant Callback</small></h4>
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
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="overview" class="py-5 bg-secondary-subtle">
  <div class="container">
    <h3 class="text-uppercase text-primary mb-3">DLF Star Tower - <span class="text-danger">Commercial & IT Spaces</span></h3>
    <p class="text-justify">Strategically positioned on NH-8 near 32nd Milestone, DLF Star Tower is a landmark project in Gurgaon’s business hub. Featuring proximity to SEZs, retail malls like DLF Star Mall, and upscale residential neighborhoods, the project offers unmatched connectivity just 5 minutes from the Delhi-Gurgaon Toll. With 24/7 power backup, high security, and efficient design maximizing natural light, these ready-to-move premium office spaces are ideal for businesses looking for prominence and convenience.</p>
  </div>
</section>

<section id="gallery" class="py-5 bg-light">
  <div class="container">
    <h3 class="text-uppercase text-primary mb-4">DLF Star Tower <span class="text-danger">Gallery</span></h3>
    <div class="row g-3">
      <!-- Gallery Loop -->
      <!-- Use your gallery images below -->
      <!-- Example Image -->
      <div class="col-6 col-md-4">
        <a data-fancybox="gallery" href="images/gallery/1.jpg">
          <img src="images/commercial/1 (1).jpg" alt="DLF Star Tower Gallery" class="img-fluid rounded">
          
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a data-fancybox="gallery" href="images/gallery/1.jpg">
          <img src="images/commercial/2 (1).jpg" alt="DLF Star Tower Gallery" class="img-fluid rounded">
          
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a data-fancybox="gallery" href="images/gallery/1.jpg">
          <img src="images/commercial/3 (1).jpg" alt="DLF Star Tower Gallery" class="img-fluid rounded">
          
        </a>
      </div>
    
    </div>
  </div>
</section>

<section id="intro" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-3">
        <h3 class="text-uppercase text-danger mb-3">Highlights</h3>
        <p>DLF Star Tower<br> Premium Office Spaces</p>
      </div>
      <div class="col-md-5">
        <img src="images/commercial/features (1).jpg" alt="DLF Star Tower" class="img-fluid rounded">
      </div>
      <div class="col-md-4">
        <ul class="list-unstyled">
          <li>Fully Operational Premises</li>
          <li>Completion Certificate Received</li>
          <li>Multiple Offices Already Functional</li>
          <li>Seamless NH-8 Access</li>
          <li>Outdoor Sit-Out Zones</li>
          <li>24x7 High-Level Security</li>
          <li>Ample Parking Availability</li>
          <li>Full Power Backup</li>
          <li>Professionally Maintained Complex</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="brochure" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="images/commercial/brochure (1).webp" alt="DLF Brochure" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h3 class="text-uppercase text-primary mb-3">Download <span class="text-danger">E-Brochure</span></h3>
        <p class="text-justify">Want to choose a high-return commercial space in Gurgaon? Download the brochure and discover why certain units offer better ROI. Get insights into layout, pricing, and availability now!</p>
        <button class="btn btn-warning text-uppercase" data-bs-toggle="modal" data-bs-target="#enquiryModal">Request Brochure</button>
      </div>
    </div>
  </div>
</section>

<section id="about" class="py-5">
  <div class="container">
    <h3 class="text-uppercase text-center mb-3">
      <a href="https://www.dlf.in/" target="_blank" class="text-dark">DLF Projects Limited</a>
      <br><small class="text-muted">Building India Since 1946</small>
    </h3>
    <p class="text-justify">DLF is India's leading real estate developer with over 74 years of legacy in shaping skylines and building landmark communities. Known for delivering quality and excellence, DLF has established benchmark developments across residential, commercial, and retail sectors in India.</p>
  </div>
</section>

<section id="commitment" class="py-5 bg-dark text-white">
  <div class="container">
    <h3 class="text-uppercase text-center mb-4">Our Commitment</h3>
    <div class="row text-center">
      <div class="col-md-2">
        <p><i class="bi bi-clock-history"></i><br>Timely Delivery</p>
      </div>
      <div class="col-md-2">
        <p><i class="bi bi-star"></i><br>World-Class Quality</p>
      </div>
      <div class="col-md-2">
        <p><i class="bi bi-building"></i><br>Contemporary Designs</p>
      </div>
      <div class="col-md-2">
        <p><i class="bi bi-people"></i><br>Top-Class Partners</p>
      </div>
      <div class="col-md-2">
        <p><i class="bi bi-headset"></i><br>24/7 Customer Support</p>
      </div>
      <div class="col-md-2">
        <p><i class="bi bi-gem"></i><br>Value Creation</p>
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