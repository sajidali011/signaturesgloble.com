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
            <a href="the-omaxe-state.php">
              <img src="images\commercial\1-7.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="the-omaxe-state.php" class="text-decoration-none text-dark">
                The Omaxe State 
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Dwarka, Delhi</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">1 weeks ago</small></p>
              <h6 class="text-primary">37.5 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>50-8000</small>
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
            <a href="ss-whitewater.php">
              <img src="images\commercial\1-3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="ss-whitewater.php" class="text-decoration-none text-dark">
                SS Whitewater
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-90, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">10 months ago</small></p>
              <h6 class="text-primary">75 Lakhs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>465-3500/small>
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
            <a href="raheja-the-delhi-mall.php">
              <img src="images\commercial\1-7.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="raheja-the-delhi-mall.php" class="text-decoration-none text-dark">
                Raheja The Delhi Mall
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Delhi</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">1 years ago</small></p>
              <h6 class="text-primary">62.50 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>50-500</small>
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
            <a href="aipl-joy-central.php">
              <img src="images\commercial\Untitled-design-_45_.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="aipl-joy-central.php" class="text-decoration-none text-dark">
                AIPL Joy Central
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-65, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">62.50 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>250-1400</small>
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
            <a href="omaxe-chandni-chowk.php">
              <img src="images\commercial\Untitled-design-53.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="omaxe-chandni-chowk.php" class="text-decoration-none text-dark">
                Omaxe Chandni Chowk
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Chandni Chowk, Delhi</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">60 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>244-1116</small>
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
            <a href="elan-the-mark-sector-106.php">
              <img src="images\commercial\Untitled-design-2023-06-10T165116.012-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="elan-the-mark-sector-106.php" class="text-decoration-none text-dark">
                Elan The Mark
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-106, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">1.00 Cr*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>800-2200</small>
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
            <a href="smart-world-one-dxp-street.php">
              <img src="images\commercial\Untitled-design-40-2.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="smart-world-one-dxp-street.php" class="text-decoration-none text-dark">
                Smart World One DXP Street
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-113, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">15,250/Sq.Ft</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>250</small>
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
            <a href="m3m-jewel.php">
              <img src="images\commercial\M3M-Jewel-Website-Image.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-jewel.php" class="text-decoration-none text-dark">
                M3M Jewel 25
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-25, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">35,000 / Sq. Ft.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>300-1500</small>
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
            <a href="ms-crosswalk-sector-93-commercial.php">
              <img src="images\commercial\Featured-Image-JMS-Crosswalk-_1_-_1_-_1_-_1_.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="ms-crosswalk-sector-93-commercial.php" class="text-decoration-none text-dark">
                JMS Crosswalk Sector 93
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 93, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">Rs 9,999 - Rs 19,000/ Sq.Ft.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>150</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>


        <!-- Card 10 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-capital-walk.php">
              <img src="images\commercial\M3M-Capital-Walk1.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-capital-walk.php" class="text-decoration-none text-dark">
                M3M Capital Walk 113
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 113, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">30,000/Sq.Ft.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>373-3201</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

 <!-- Card 11-->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-route-65.php">
              <img src="images\commercial\M3M-Route-65-Gallery-Image-1-1-1-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-route-65.php" class="text-decoration-none text-dark">
                M3M Route 65
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-65, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">70 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>294 - 2500</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 12-->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-ifc-commercial.php">
              <img src="images\commercial\ifc-min.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-ifc-commercial.php" class="text-decoration-none text-dark">
                M3M IFC
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 66, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">17,500- 42,500 / sq.ft.</h6>
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

      <!-- Card 13-->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="m3m-broadway-sector-71.php">
              <img src="images\commercial\5-1-min.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-broadway-sector-71.php" class="text-decoration-none text-dark">
                M3M Broadway
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 71, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">9,900-27,900 / sq.ft</h6>
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
