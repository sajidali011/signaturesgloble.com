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
            <a href="ganga-valley.php">
              <img src="images\plots\3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="ganga-valley.php" class="text-decoration-none text-dark">
                Ganga Valley
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-78, Gurgaon</p>
              <p class="card-text mb-1">Plots, Residential Plots</p>
              <p class="card-text"><small class="text-muted">3 weeks ago</small></p>
              <h6 class="text-primary">3.25 Cr*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>1269-1512</small>
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
            <a href="shree-vardhman-city.php">
              <img src="images\plots\3-5-1-1-1.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="shree-vardhman-city.php" class="text-decoration-none text-dark">
                Shree Vardhman City
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-2, Sohna</p>
              <p class="card-text mb-1">Plots, Residential Plots</p>
              <p class="card-text"><small class="text-muted">1 year ago</small></p>
              <h6 class="text-primary">1.10 Lakh*/ Sq Yd</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>1107-1296</small>
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
            <a href="lid-green-valley.php">
              <img src="images\plots\Untitled-design.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="lid-green-valley.php" class="text-decoration-none text-dark">
                LID Green Valley
                  <span class="badge bg-warning text-dark float-end">Ready to Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-35, Sohna</p>
              <p class="card-text mb-1">Plots, Residential Plots</p>
              <p class="card-text"><small class="text-muted">1 year ago</small></p>
              <h6 class="text-primary">1.10 Lakh*/Sq Yd</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>1323-1521</small>
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
            <a href="gls-arawali-city.php">
              <img src="images\plots\Untitled-design-8-1.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="gls-arawali-city.php" class="text-decoration-none text-dark">
                
GLS Arawali City
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-4, South of Gurgaon</p>
              <p class="card-text mb-1">Plots, Residential Plots</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">70,000/Sq.Yd.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>1224-1620</small>
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
            <a href="true-habitat-luxe-residency.php">
              <img src="images\plots\True-Habitat-Bodh-112-Gurugram.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="true-habitat-luxe-residency.php" class="text-decoration-none text-dark">
                
                True Habitat Luxe Residency 112
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-112, Gurgaon</p>
              <p class="card-text mb-1">Plots, Residential Plots</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">1.60 Lakh*/ Sq Yd</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>1080-1611</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card  6-->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="golden-park-plots-sector-4-sohna.php">
              <img src="images\plots\meffier-plots-sohna.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="golden-park-plots-sector-4-sohna.php" class="text-decoration-none text-dark">
Golden Park Plots
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 4, Sohna</p>
              <p class="card-text mb-1">Plots, Residential Plots</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">75,000/ Sq. Yd.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>1125-1575</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Card  7 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="rof-normanton-park.php">
              <img src="images\plots\gallery-1.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="rof-normanton-park.php" class="text-decoration-none text-dark">
                ROF Normanton Park
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 36, Sohna</p>
              <p class="card-text mb-1">Plots, Residential Plots</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">85000/Sq.Yd</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>1152-1593
                </small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Card  8 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="rof-insignia-plots-sector-93-gurgaon.php">
              <img src="images\plots\ROF-Insignia-Park-2.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="rof-insignia-plots-sector-93-gurgaon.php" class="text-decoration-none text-dark">
                ROF Insignia Plots
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 93,Gurgaon</p>
              <p class="card-text mb-1">Plots, Residential Plots</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">1,10000/Sq.Yd.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>130-144
                </small>
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