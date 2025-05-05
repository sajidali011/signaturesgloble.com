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
<div style="margin-top: 100px;"></div>

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
            <a href="wal-verde-92.php">
              <img src="images/residential_affordable/Gallery-Image-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="wal-verde-92.php" class="text-decoration-none text-dark">
                  Wal Verde 92
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-92, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">2 weeks ago</small></p>
              <h6 class="text-primary">28 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 551-645</small>
                <small><strong>Bedroom:</strong> 2/3</small>
                <small><strong>Bathroom:</strong> 2</small>
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
            <a href="4s-aster-avenue-36-sohna.php">
              <img src="images/residential_affordable/Untitled-design-48.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="4s-aster-avenue-36-sohna.php" class="text-decoration-none text-dark">
                  4S Aster Avenue 36
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-36, Sohna</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">6 months ago</small></p>
              <h6 class="text-primary">30.18 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 644-645</small>
                <small><strong>Bedroom:</strong> 3</small>
                <small><strong>Bathroom:</strong> 2</small>
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
            <a href="adore-prosperity-homes.php">
              <img src="images/residential_affordable/Untitled-design-1.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="adore-prosperity-homes.php" class="text-decoration-none text-dark">
                 Adore Prosperity Homes
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-35, Sohna</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">7 months ago</small></p>
              <h6 class="text-primary">15.82 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 325-611</small>
                <small><strong>Bedroom:</strong> 1/2/3</small>
                <small><strong>Bathroom:</strong> 1/2</small>
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
            <a href="ninex-sriflex-city.php">
              <img src="images/residential_affordable/Untitled-design-2024-04-16T131444.810.webp" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="ninex-sriflex-city.php" class="text-decoration-none text-dark">
               Ninex Sriflex City
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-4, Sohna</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">12 months ago</small></p>
              <h6 class="text-primary">29.78 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 637-644 </small>
                <small><strong>Bedroom:</strong> 2</small>
                <small><strong>Bathroom:</strong>2</small>
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
            <a href="ganga-realty-tathastu-sector-35.php">
              <img src="images/residential_affordable/CONVERT-SQUARE-METER-TO-SQUARE-FEET.webp" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="ganga-realty-tathastu-sector-35.php" class="text-decoration-none text-dark">
              Ganga Realty Tathastu 35
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-35, South of Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">1 year ago</small></p>
              <h6 class="text-primary">30.43 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 645</small>
                <small><strong>Bedroom:</strong> 2</small>
                <small><strong>Bathroom:</strong>2</small>
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
            <a href="yashika-green-square.php">
              <img src="images/residential_affordable/Untitled-design-2024-03-15T133349.685.webp" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="yashika-green-square.php" class="text-decoration-none text-dark">
              Yashika Green Square
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-99A, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">33.47 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 645</small>
                <small><strong>Bedroom:</strong> 3</small>
                <small><strong>Bathroom:</strong>2</small>
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
            <a href="mrg-primark-sector-90-gurgaon.php">
              <img src="images/residential_affordable/Untitled-design-25-2.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="mrg-primark-sector-90-gurgaon.php" class="text-decoration-none text-dark">
              MRG Primark
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-90, New Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">31.97 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>622-645
                </small>
                <small><strong>Bedroom:</strong> 2</small>
                <small><strong>Bathroom:</strong>2</small>
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
            <a href="pareena-hanu-residency.php">
              <img src="images/residential_affordable/Untitled-design-_47_.webp" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="pareena-hanu-residency.php" class="text-decoration-none text-dark">
              Pareena Hanu Residency
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-68, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">17.58 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>371-645
                </small>
                <small><strong>Bedroom:</strong> 1/2</small>
                <small><strong>Bathroom:</strong> 1/2</small>
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
            <a href="gls-avenue-81-phase-2-gurgaon.php">
              <img src="images/residential_affordable/Untitled-design-2023-06-20T175246.374.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="gls-avenue-81-phase-2-gurgaon.php" class="text-decoration-none text-dark">
                GLS Avenue 81 Phase 2 
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 81, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">16.78 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>335-645
                </small>
                <small><strong>Bedroom:</strong> 1/2</small>
                <small><strong>Bathroom:</strong> 1/2</small>
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
            <a href="ganga-realty-tathastu-sector-5-sohna.php">
              <img src="images/residential_affordable/Untitled-design-5.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="ganga-realty-tathastu-sector-5-sohna.php" class="text-decoration-none text-dark">
                Ganga Realty Tathastu
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-5, Sohna, South Of Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">2 year ago</small></p>
              <h6 class="text-primary">Price On Call*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>645.73

                </small>
                <small><strong>Bedroom:</strong>2</small>
                <small><strong>Bathroom:</strong>2</small>
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
            <a href="zara-roma-sector-95b-gurgaon.php">
              <img src="images/residential_affordable/ZARA-Roma-featured-image1-min.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="zara-roma-sector-95b-gurgaon.php" class="text-decoration-none text-dark">
                Zara Roma 95B
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>sector 95B, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">28.92 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>559-645
                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!-- Card 12 -->
  <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="solitaire-70-affordable-housing.php">
              <img src="images/residential_affordable/1-min-4-1.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="solitaire-70-affordable-housing.php" class="text-decoration-none text-dark">
                Solitaire 70
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 70, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">28.26 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>542-641
                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 13 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="yashika-homes-affordable.php">
              <img src="images/residential_affordable/Untitled-design-2023-02-27T111805.522.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="yashika-homes-affordable.php" class="text-decoration-none text-dark">
                Yashika Homes 104
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-104, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">25.02 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>482-638
                </small>
                <small><strong>Bedroom:</strong>1/2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 14 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="breez-global-heights-89.php">
              <img src="images/residential_affordable/Untitled-design-43-2 (1).jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="breez-global-heights-89.php" class="text-decoration-none text-dark">
                Breez Global Heights 89
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-89, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">36 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>482-638
                </small>
                <small><strong>Bedroom:</strong>1/2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 15 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="signature-global-aspire.php">
              <img src="images/residential_affordable/aspire-featured-image-min.jpg" class="img-fluid rounded-start" alt="4S Aster Avenue 36">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="signature-global-aspire.php" class="text-decoration-none text-dark">
                Signature Global Aspire
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 95, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 year ago</small></p>
              <h6 class="text-primary">25 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>549
                </small>
                <small><strong>Bedroom:</strong>2</small>
                <small><strong>Bathroom:</strong>2</small>
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



<!-- Pagination Start -->
<?php include "pagination.php" ?>
<!-- Pagination End -->



<?php include "footer.php" ?>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
