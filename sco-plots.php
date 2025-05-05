<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>commercial affordable-society-shops</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include "navbar.php" ?>
<div style="margin-top: 100px;"></div>

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
            <a href="reach-the-bazaria.php  ">
              <img src="images\plots\Reach-The-Bazaria-Sector-68.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="reach-the-bazaria.php" class="text-decoration-none text-dark">
                Reach The Bazaria
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-68, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">2 weeks ago</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>927-2754</small>
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
            <a href="pyramid-grand-vista.php">
              <img src="images\plots\1-13.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="pyramid-grand-vista.php" class="text-decoration-none text-dark">
                Pyramid Grand Vista
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-73, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">3 months ago</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>1080-1314</small>
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
            <a href="reach-buzz-114.php">
              <img src="images\plots\2-2.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="reach-buzz-114.php" class="text-decoration-none text-dark">
                Reach Buzz 114  
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-114, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">8 months ago</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>945-2745</small>
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
            <a href="m3m-114-market.php">
              <img src="images\plots\Untitled-design-2023-04-15T155543.467.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-114-market.php" class="text-decoration-none text-dark">
                M3M 114 Market 
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-114, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">1 year ago</small></p>
              <h6 class="text-primary">4.25 Lakh*/ Sq. Yd</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>765-1125</small>
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
            <a href="aarize-south-drive.php">
              <img src="images\plots\Untitled-design-2024-03-28T103613.807.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="aarize-south-drive.php" class="text-decoration-none text-dark">
                Aarize South Drive 69
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-69, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">1 year ago</small></p>
              <h6 class="text-primary">4.99 lacs*/ Sq. Yd.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>711-1035</small>
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
            <a href="emaar-ebd-114.php">
              <img src="images\plots\Untitled-design-2024-03-27T120715.435.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="emaar-ebd-114.php" class="text-decoration-none text-dark">
                Emaar EBD 65
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-65, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">1 year ago</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>791-2034</small>
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
            <a href="emaar-ebd-114.php">
              <img src="images\plots\1-19.webp" class="img-fluid rounded-start" alt="Emaar EBD 114">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="emaar-ebd-114.php" class="text-decoration-none text-dark">
                Emaar EBD 114
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-114, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">1 year ago</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>963-1980</small>
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
            <a href="emaar-ebd-83.php">
              <img src="images\plots\Untitled-design-2024-03-21T125156.231.webp" class="img-fluid rounded-start" alt="Emaar EBD 114">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="emaar-ebd-83.php" class="text-decoration-none text-dark">
                Emaar EBD 83 
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-83, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">1 year ago</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>900-1323</small>
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
            <a href="adani-downtown-avenue.php">
              <img src="images\plots\Untitled-design-_58_.webp" class="img-fluid rounded-start" alt="Emaar EBD 114">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="adani-downtown-avenue.php" class="text-decoration-none text-dark">
                Adani Downtown Avenue
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-62, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">12 Cr*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>900-1323</small>
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
            <a href="gls-courtyard-sector-95-gurgaon.php">
              <img src="images\plots\GLS-courtyard-min.jpg" class="img-fluid rounded-start" alt="Emaar EBD 114">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="gls-courtyard-sector-95-gurgaon.php" class="text-decoration-none text-dark">
                GLS Courtyard
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-95, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">2.45 Lacs*/Sq Yd</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>792-2754</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Card 11 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="grand-central-114.php">
              <img src="images\plots\1-min-2.jpg" class="img-fluid rounded-start" alt="Emaar EBD 114">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="grand-central-114.php" class="text-decoration-none text-dark">
                Grand Central 114 
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-114, Gurgaon</p>
              <p class="card-text mb-1">Plots, SCO Plots</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">3.99 Lacs*/sq yd</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>585-1134</small>
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

<?php include "footer.php" ?>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
