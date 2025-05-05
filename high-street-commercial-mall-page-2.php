<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>commercial high-street-commercial-mall</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include "navbar.php" ?>
<div style="margin-top: 100px;">
  
<?php include "enquiry.php" ?>

<div class="container py-5">
  <div class="row">
    <!-- Left Side: Enquiry Form + Featured Property -->
    <div class="col-lg-4 mb-4">
      <div class="card shadow-sm p-4">
        <h5 class="mb-3">Enquire Now</h5>
        <form action="index.php" method="POST">

          <div class="form-floating mb-2">
            <input type="text" name="name" class="form-control form-control-sm rounded-3" id="nameInput" placeholder="Name" required>
            <label for="nameInput">Name</label>
          </div>

          <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control form-control-sm rounded-3" id="emailInput" placeholder="Email" required>
            <label for="emailInput">Email</label>
          </div>

          <div class="form-floating mb-2">
            <input type="text" name="mobile" class="form-control form-control-sm rounded-3" id="mobileInput" placeholder="Mobile" required>
            <label for="mobileInput">Mobile</label>
          </div>

          <div class="form-floating mb-3">
            <textarea name="message" class="form-control form-control-sm rounded-3" placeholder="Message" id="messageInput" style="height: 70px;" required></textarea>
            <label for="messageInput">Message</label>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-sm btn-success rounded-pill">Send Enquiry</button>
          </div>

        </form>
       <!-- Featured Property Section -->
<div class="mt-4">
  <h5 class="fw-bold mb-3">Featured Property</h5>
  <div class="d-flex align-items-start">
    <a href="wal-verde-92.php">
      <img src="images/residential_affordable/Gallery-Image-1.jpg" width="80" height="60" class="me-3 rounded shadow-sm" alt="Wal Verde 92">
    </a>
    <div>
      <a href="wal-verde-92.php" class="fw-bold text-decoration-none text-dark">Wal Verde 92</a><br>
      <span class="text-primary fw-semibold">28 Lacs*</span><br>
      <small class="text-muted">Sector-92, Gurgaon</small>
    </div>
  </div>
</div>
<!-- End Featured Property -->

      </div>
    </div>

    <!-- Right Side: Property Cards -->
    <div class="col-lg-8">
      
      <!-- Card 1 -->
      <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="aipl-joy-gallery.php">
              <img src="images\commercial\aipl-joy-gallery-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="aipl-joy-gallery.php" class="text-decoration-none text-dark">
                AIPL Joy Gallery
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-66, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">16,500/ Sq.Ft.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>500-5000 sqft</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

     <!-- Card 2 -->
     <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-prive-73-commercial-shop.php">
              <img src="images\commercial\m3m-prive-73-banner-73627.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-prive-73-commercial-shop.php" class="text-decoration-none text-dark">
                M3M Prive 73
                  <span class="badge bg-warning text-dark float-end">Ready to Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-73, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">₹ 15,290/sq.ft</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>200 Sq.Ft</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
     <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-atrium-57-commercial-shop.php">
              <img src="images\commercial\1685517219.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-atrium-57-commercial-shop.php" class="text-decoration-none text-dark">
                M3M Atrium 57
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 57, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">₹21,900 - ₹43,900/sq.ft</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>200 Sq.Ft</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!-- Card 4 -->
  <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-65th-avenue.php">
              <img src="images\commercial\8a9fc08387e5b4610187e608b5d63732_40533_82254_large.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-65th-avenue.php" class="text-decoration-none text-dark">
                M3M 65TH AVENUE
                  <span class="badge bg-warning text-dark float-end">Ready to Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-65, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">15,000 / sq.ft</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>500-1570</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

 <!-- Card 5 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-corner-walk.PHP">
              <img src="images\commercial\m3m-corner-walk-banner-20191.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-corner-walk.PHP" class="text-decoration-none text-dark">
                M3M Corner Walk
                  <span class="badge bg-warning text-dark float-end">Ready to Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-74,Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">13,500 / Sq Ft</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>550-1630</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- Card 6 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="elan-mercado.php">
              <img src="images\commercial\mercado-banner.jpeg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="elan-mercado.php" class="text-decoration-none text-dark">
                Elan Mercado
                  <span class="badge bg-warning text-dark float-end">Ready to Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>S Sector 80, Gurgaon </p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">45 Lac*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>150 Sq.Ft
                </small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- Card 7 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="elan-town-center-invest-in-shops-sector-67-gurgaon.php">
              <img src="images\commercial\mercado3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="elan-town-center-invest-in-shops-sector-67-gurgaon.php" class="text-decoration-none text-dark">
                Elan Town Center
                  <span class="badge bg-warning text-dark float-end">Ready to Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-67, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">45 Lac*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>150 Sq.Ft</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Card 8 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="elan-empire-1.php">
              <img src="images\commercial\Elan-Empire-scaled.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="elan-empire-1.php" class="text-decoration-none text-dark">
                Elan Empire
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-66, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">13750/Sq.Ft.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>350-999</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Card 9 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="orris-market-89-commercial-sector-89-gurgaon.php">
              <img src="images\commercial\giqitz7loeuv48vojmhv.jpeg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="orris-market-89-commercial-sector-89-gurgaon.php" class="text-decoration-none text-dark">
                Orris Market 89
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 89, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">19,950/sqft</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>280</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      
    </div>
  </div>
</div>

<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" style="margin-top: 70px;">

    <div class="modal-content border-0 shadow-lg rounded-4" style="max-width: 320px; margin: auto;">

      <!-- Header -->
      <div class="modal-header bg-primary text-white py-2 rounded-top-4">
        <h6 class="modal-title w-100 text-center">Quick Enquiry</h6>
        <button type="button" class="btn-close btn-close-white btn-sm position-absolute end-0 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body px-3 py-2">
        <form action="index.php" method="POST">

          <div class="form-floating mb-2">
            <input type="text" name="name" class="form-control form-control-sm rounded-3" id="nameInput" placeholder="Name" required>
            <label for="nameInput">Name</label>
          </div>

          <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control form-control-sm rounded-3" id="emailInput" placeholder="Email" required>
            <label for="emailInput">Email</label>
          </div>

          <div class="form-floating mb-2">
            <input type="text" name="mobile" class="form-control form-control-sm rounded-3" id="mobileInput" placeholder="Mobile" required>
            <label for="mobileInput">Mobile</label>
          </div>

          <div class="form-floating mb-3">
            <textarea name="message" class="form-control form-control-sm rounded-3" placeholder="Message" id="messageInput" style="height: 70px;" required></textarea>
            <label for="messageInput">Message</label>
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

<!-- pagination -->
<?php
// Set current page based on filename
$currentPage = 1; // default page

$basename = basename($_SERVER['PHP_SELF'], '.php');

if (preg_match('/high-street-commercial-mall-page-(\d+)/', $basename, $matches)) {
    $currentPage = (int)$matches[1];
}

$totalPages = 2;
?>
<!-- Pagination Start -->
<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center my-4">

    <!-- Previous -->
    <li class="page-item <?= $currentPage <= 1 ? 'disabled' : '' ?>">
      <?php
        if ($currentPage == 2) {
          $prevLink = 'high-street-commercial-mall.php';
        } elseif ($currentPage > 2) {
          $prevLink = "high-street-commercial-mall-page-" . ($currentPage - 1) . ".php";
        } else {
          $prevLink = '#'; // for disabled
        }
      ?>
      <a class="page-link" href="<?= $prevLink ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo; Previous</span>
      </a>
    </li>

    <!-- Page Numbers -->
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
      <?php
        $link = $i == 1 ? 'high-street-commercial-mall.php' : "high-street-commercial-mall-page-$i.php";
      ?>
      <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
        <a class="page-link" href="<?= $link ?>"><?= $i ?></a>
      </li>
    <?php endfor; ?>

    <!-- Next -->
    <li class="page-item <?= $currentPage >= $totalPages ? 'disabled' : '' ?>">
      <?php
        if ($currentPage == 1) {
          $nextLink = 'high-street-commercial-mall-page-2.php';
        } elseif ($currentPage < $totalPages) {
          $nextLink = "high-street-commercial-mall-page-" . ($currentPage + 1) . ".php";
        } else {
          $nextLink = '#'; // for disabled
        }
      ?>
      <a class="page-link" href="<?= $nextLink ?>" aria-label="Next">
        <span aria-hidden="true">Next &raquo;</span>
      </a>
    </li>

  </ul>
</nav>
<!-- Pagination End -->


<?php include "footer.php" ?>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

