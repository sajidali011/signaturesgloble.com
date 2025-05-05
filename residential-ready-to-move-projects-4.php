<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Property Listing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include "navbar.php" ?>
<div style="margin-top: 100px;">
  
<div class="container py-5">
  <div class="row">
    <!-- Left Side: Enquiry Form + Featured Property -->
    <div class="col-lg-4 mb-4">
      <div class="card shadow-sm p-4">
        <h5 class="mb-3">Enquire Now</h5>
        <form action="enquire_now.php" method="POST">
          <div class="mb-2">
            <input type="text" name="name" class="form-control rounded-pill shadow-sm" placeholder="Name" required>
          </div>
          <div class="mb-2">
            <input type="email" name="email" class="form-control rounded-pill shadow-sm" placeholder="Email" required>
          </div>
          <div class="mb-2">
            <input type="text" name="mobile" class="form-control rounded-pill shadow-sm" placeholder="Mobile No" required>
          </div>
          <div class="mb-3">
            <textarea name="message" class="form-control rounded-3 shadow-sm" placeholder="Message" rows="3" required></textarea>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-info rounded-pill text-white fw-bold">Submit Enquiry</button>
          </div>
        </form>

        <!-- Featured Property Section -->
        <div class="mt-4">
          <h5 class="fw-bold mb-3">Featured Property</h5>
          <div class="d-flex align-items-start">
            <img src="images/residential_affordable/Gallery-Image-1.jpg" width="80" height="60" class="me-3 rounded shadow-sm" alt="Wal Verde 92">
            <div>
              <a href="#" class="fw-bold text-decoration-none text-dark">Wal Verde 92</a><br>
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
            <a href="central-park-3-flower-valley-flamingo.php">
              <img src="images\ready-to-move-projects\Central-Park-Flower-Valley-Flamingo-Floors-Sohna.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="central-park-3-flower-valley-flamingo.php" class="text-decoration-none text-dark">
                Central Park Flower Valley Flamingo Floors
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sohna Road, Sector 33, Sohna, Haryana 122102, India</p>
              <p class="card-text mb-1">Rs.87.60 Lakh Onwards</p>
              <h6 class="text-primary">Beds: 2/3Baths: 2/3sqft: 1093</h6>
              <div class="d-flex justify-content-between mt-3">
                <p>Floors, Residential, Residential Ready to Move Projects</p>
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
            <a href="m3m-woodshire-sector-107.php">
              <img src="images\ready-to-move-projects\M3M-Woodshire-Gurgaon.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-woodshire-sector-107.php" class="text-decoration-none text-dark">
                M3M Woodshire
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 107, Gurugram, Haryana, India</p>
              <p class="card-text mb-1">Rs.86. 62 Lakh Onwards</p>
              <h6 class="text-primary">Beds: 2/3Baths: 2/3sqft: 1386</h6>
              <div class="d-flex justify-content-between mt-3">
                <p>Apartment, Residential, Residential Ready to Move Projects</p>
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
            <a href="emaar-imperial-gardens.php">
              <img src="images\ready-to-move-projects\Emaar-Imperial-Gardens-1.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="emaar-imperial-gardens.php" class="text-decoration-none text-dark">
                Emaar Imperial Gardens
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 102, Gurugram, Haryana 122006, India</p>
              <p class="card-text mb-1">Rs.1.27 Crore Onwards</p>
              <h6 class="text-primary">Beds: 3Baths: 3sqft: 2000</h6>
              <div class="d-flex justify-content-between mt-3">
                <p>Apartment, Residential, Residential Ready to Move Projects</p>
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
            <a href="central-park-resorts-ii-beau.php">
              <img src="images\ready-to-move-projects\Central-Park-Resorts-Beau-Villas-Gurgaon.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="central-park-resorts-ii-beau.php" class="text-decoration-none text-dark">
                Central Park Resorts Beau Villas
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sohna Rd, Sector 48, Gurugram, Haryana, India</p>
              <p class="card-text mb-1">Rs.2.29 Crore Onwards</p>
              <h6 class="text-primary">Rs.2.29 Crore Onwards</h6>
              <div class="d-flex justify-content-between mt-3">
                <p>Apartment, Residential, Residential Completed Projects, Residential Ready to Move Projects</p>
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
            <a href="satya-element-one-service-apartments.php">
              <img src="images\ready-to-move-projects\Satya-Element-One-Gurgaon.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="satya-element-one-service-apartments.php" class="text-decoration-none text-dark">
                Satya Element One
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 47 and 49, Malibu Town, Sector 47, </p>
              <p class="card-text mb-1">Rs.15,750 Per Sq.Ft.</p>
              <h6 class="text-primary">sqft: 400</h6>
              <div class="d-flex justify-content-between mt-3">
                <p>Commercial, Residential Completed Projects, Residential Ready to Move Projects</p>
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
            <a href="orris-aster-court.php">
              <img src="images\ready-to-move-projects\Orris-Aster-Court.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="orris-aster-court.php" class="text-decoration-none text-dark">
                Satya Element One
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 85, Gurugram, Haryana 122004, India</p>
              <p class="card-text mb-1">Rs.78 Lakh Onwards*</p>
              <h6 class="text-primary">Beds: 2/3/4Baths: 2/3/4sqft: 1712</h6>
              <div class="d-flex justify-content-between mt-3">
                <p>Residential, Residential Ready to Move Projects</p>
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
            <a href="central-park-resorts-ii-belgravia.php">
              <img src="images\ready-to-move-projects\Central-Park-Resorts-Belgravia-Gurgaon.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="central-park-resorts-ii-belgravia.php" class="text-decoration-none text-dark">
                Central Park Resorts Belgravia
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 48, Gurugram, Haryana, India</p>
              <p class="card-text mb-1">Rs.1.82 Crore Onwards</p>
              <h6 class="text-primary">Beds: 2/3/4Baths: 2/3/4sqft: 1418</h6>
              <div class="d-flex justify-content-between mt-3">
                <p>Apartment, Residential, Residential Completed Projects, Residential Ready to Move Projects</p>
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
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="border-radius: 12px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
      <div class="modal-header bg-info text-white py-2">
        <h6 class="modal-title mx-auto">Enquiry Form</h6>
        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-2">
        <form action="enquire_now.php" method="POST">
          <div class="mb-2">
            <input type="text" name="name" class="form-control rounded-pill shadow-sm" placeholder="Name" required>
          </div>
          <div class="mb-2">
            <input type="email" name="email" class="form-control rounded-pill shadow-sm" placeholder="Email" required>
          </div>
          <div class="mb-2">
            <input type="text" name="mobile" class="form-control rounded-pill shadow-sm" placeholder="Mobile No" required>
          </div>
          <div class="mb-2">
            <textarea name="message" class="form-control rounded-3 shadow-sm" placeholder="Message" rows="2" required></textarea>
          </div>
          <div class="d-grid gap-1">
            <button type="submit" class="btn btn-info rounded-pill btn-sm">Submit</button>
            <button type="button" class="btn btn-outline-danger rounded-pill btn-sm" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
// Set current page based on filename
$currentPage = 1; // default page

$basename = basename($_SERVER['PHP_SELF'], '.php');

if (preg_match('/residential-ready-to-move-projects-(\d+)/', $basename, $matches)) {
    $currentPage = (int)$matches[1];
}

$totalPages = 5; // Updated totalPages to 6 
?>
<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center my-4">

    <li class="page-item <?= $currentPage <= 1 ? 'disabled' : '' ?>">
      <?php
        if ($currentPage == 2) {
          $prevLink = 'residential-ready-to-move-projects.php';
        } elseif ($currentPage > 2) {
          $prevLink = "residential-ready-to-move-projects-" . ($currentPage - 1) . ".php";
        } else {
          $prevLink = '#'; // for disabled
        }
      ?>
      <a class="page-link" href="<?= $prevLink ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo; Previous</span>
      </a>
    </li>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
      <?php
        $link = $i == 1 ? 'residential-ready-to-move-projects.php' : "residential-ready-to-move-projects-$i.php";
      ?>
      <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
        <a class="page-link" href="<?= $link ?>"><?= $i ?></a>
      </li>
    <?php endfor; ?>

    <li class="page-item <?= $currentPage >= $totalPages ? 'disabled' : '' ?>">
      <?php
        if ($currentPage == 1) {
          $nextLink = 'residential-ready-to-move-projects-2.php';
        } elseif ($currentPage < $totalPages) {
          $nextLink = "residential-ready-to-move-projects-" . ($currentPage + 1) . ".php";
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
<?php include "footer.php" ?>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
