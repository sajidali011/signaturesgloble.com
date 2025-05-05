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
            <a href="orchid-island-sector-51-gurgaon.php">
              <img src="images\ready-to-move-projects\Orchid-Island-Gurgaon.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="orchid-island-sector-51-gurgaon.php" class="text-decoration-none text-dark">
                Orchid Island
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 51, Gurugram, Haryana 122003, India</p>
              <p class="card-text mb-1">Rs.80 Lakh Onwards</p>
              <h6 class="text-primary">Beds: 2/3/4Baths: 2/3/4sqft: 958</h6>
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

  <!-- Card 2 -->
  <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-st-andrews-golf-residences.php">
              <img src="images\ready-to-move-projects\M3M-St.Andrews-Golf-Residences.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-st-andrews-golf-residences.php" class="text-decoration-none text-dark">
                Sector 65, Gurugram, Haryana 122102, India
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 51, Gurugram, Haryana 122003, India</p>
              <p class="card-text mb-1">Rs.9.10 Crore Onwards</p>
              <h6 class="text-primary">Beds: 4/5Baths: 4/5sqft: 6365</h6>
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

      <!-- Card 3 -->
  <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-escala-sector-70A-in-gurgaon.php">
              <img src="images\ready-to-move-projects\M3M-Escala.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-escala-sector-70A-in-gurgaon.php" class="text-decoration-none text-dark">
                Sector 65, Gurugram, Haryana 122102, India
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 70A, Gurugram, Haryana 122101, India</p>
              <p class="card-text mb-1">Rs.95 Lakh Onwards</p>
              <h6 class="text-primary">Beds: 2/3/4Baths: 2/3/4sqft: 1475</h6>
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

        <!-- Card 4 -->
  <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="supertech-araville.php">
              <img src="images\ready-to-move-projects\Supertech-Araville-Gurgaon.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="supertech-araville.php" class="text-decoration-none text-dark">
                Supertech Araville
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 79, Gurugram, Haryana, India</p>
              <p class="card-text mb-1">Rs.74.46 Lakh Onwards</p>
              <h6 class="text-primary">Beds: 2/3/4Baths: 2/3/4sqft: 1295</h6>
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
            <a href="central-park-resorts-ii-the-room.php">
              <img src="images\ready-to-move-projects\Central-Park-Resorts-II-The-Room-Gurgaon.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="central-park-resorts-ii-the-room.php" class="text-decoration-none text-dark">
                Central Park Resorts The Room
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 48, Gurugram, Haryana, India</p>
              <p class="card-text mb-1">Rs.1.16 Crore Onwards</p>
              <h6 class="text-primary">Bed: 1Bath: 1sqft: 834</h6>
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

       <!-- Card 6 -->
  <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="emaar-mgf-palm-gardens.php">
              <img src="images\ready-to-move-projects\Emaar-MGF-Palm-Gardens.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="emaar-mgf-palm-gardens.php" class="text-decoration-none text-dark">
                Central Park Resorts II Belgravia
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 83, Gurugram, Haryana 122004, India</p>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Rs.1 Crore Onwards</p>
              <h6 class="text-primary">Beds: 3/5Baths: Emaar-MGF-Palm-Gardens-Gurgaonsqft: 1720</h6>
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

 <!-- Card 7 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="godrej-oasis-sector-88a-gurgaon.php">
              <img src="images\ready-to-move-projects\Godrej-Oasis-Gurgaon.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="godrej-oasis-sector-88a-gurgaon.php" class="text-decoration-none text-dark">
                Godrej Oasis
                  <span class="badge bg-warning text-dark float-end">Ready To Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 88A, Gurugram, Haryana 122505, India</p>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Rs.78 Lakh Onwards</p>
              <h6 class="text-primary">Beds: 2/3Baths: 2/3sqft: 1307</h6>
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
