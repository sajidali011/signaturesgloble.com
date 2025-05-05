<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Delivered Projects</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style for Video Background -->
    <style>
        body {
            background-color: black;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -2;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>
 <div style="margin-top: 100px;"></div>

    <video autoplay muted loop>
        <source src="images/delivered/75351-555531961.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="container py-5 text-white">
        <h2 class="mb-4 text-white">🏢 Commercial Projects</h2>
        <div class="row g-4">
            <?php
            $commercial_projects = [
                ["Signum 37D (Commercial of The Millennia )", "https://www.signatureglobal.in/signum-37d.php", "images/delivered/signum37d-min.webp"],
                ["Signum 36 (Commercial of The Serenas )", "https://www.signatureglobal.in/signum-sector36-south-retail-project.php", "images/delivered/signum-36-min.webp"],
                ["Signum 95A (Commercial of The Roselia )", "https://www.signatureglobal.in/signum-sector95a.php", "images/delivered/signum-95-a-min.webp"],
                ["Signum 93 (Commercial of Orchard Avenue )", "https://www.signatureglobal.in/signum-93-gurugram.php", "images/delivered/signum-93-min.webp"],
                ["Signum 103 (Commercial of Grand IVA )", "https://www.signatureglobal.in/signum-103.php", "images/delivered/signum-103-min.webp"],
                ["Signum 71 (Commercial of Andour Heights )", "https://example.com/eco-living", "images/delivered/signum-71-min.webp"],
                ["Signum 81 (Commercial of Synera )", "https://www.signatureglobal.in/signum-81.php", "images/delivered/signum-81-min.webp"],
                ["Signum 107 (Commercial of Solera )", "http://signatureglobal.in/signum-107.php", "images/delivered/signum-107-min.webp"],
                ["Signature Global Mall", "http://signatureglobal.in/signature-global-mall.php", "images/delivered/website-mall.webp"]
            ];

            foreach ($commercial_projects as $project) {
                echo "<div class='col-sm-6 col-md-4 col-lg-3'>
                        <a href='{$project[1]}' target='_blank' class='text-decoration-none'>
                            <div class='card h-100 border-0 shadow-lg'>
                                <img src='{$project[2]}' class='card-img-top' alt='{$project[0]}' style='height: 160px; object-fit: cover;'>
                                <div class='card-body bg-light'>
                                    <h6 class='card-title text-dark'>{$project[0]}</h6>
                                </div>
                            </div>
                        </a>
                      </div>";
            }
            ?>
        </div>

        <h2 class="mt-5 mb-4 text-white">🏡 Residential Projects</h2>
        <div class="row g-4">
            <?php
            $residential_projects = [
                ["The Millennia", "https://www.signatureglobal.in/the-millennia.php", "images/delivered/the-millennia-min.webp"],
                ["Solera 2", "https://www.signatureglobal.in/solera2.php", "images/delivered/solera-2-min.webp"],
                ["The Serenas", "https://www.signatureglobal.in/sector-36-south-gurugram.php", "images/delivered/the-serenas-min.webp"],
                ["The Roselia 2", "https://www.signatureglobal.in/roselia-2.php", "images/delivered/the-roselia-2-min.webp"],
                ["The Roselia", "https://www.signatureglobal.in/roselia.php", "images/delivered/the-roselia-min.webp"],
                ["Orchard Avenue", "https://www.signatureglobal.in/orchard-avenue.php", "images/delivered/orchard-avenue-min.webp"],
                ["Grand IVA", "https://www.signatureglobal.in/grand-iva-sector-103-gurugram.php", "images/delivered/grand-iva-min.webp"],
                ["Synera", "https://www.signatureglobal.in/synera.php", "images/delivered/synera-min.webp"],
                ["Solera", "https://www.signatureglobal.in/solera.php", "images/delivered/solera-min.webp"]
            ];

            foreach ($residential_projects as $project) {
                echo "<div class='col-sm-6 col-md-4 col-lg-3'>
                        <a href='{$project[1]}' target='_blank' class='text-decoration-none'>
                            <div class='card h-100 border-0 shadow-lg'>
                                <img src='{$project[2]}' class='card-img-top' alt='{$project[0]}' style='height: 160px; object-fit: cover;'>
                                <div class='card-body bg-light'>
                                    <h6 class='card-title text-dark'>{$project[0]}</h6>
                                </div>
                            </div>
                        </a>
                      </div>";
            }
            ?>
        </div>

        <div class="text-center mt-5">
            <a href="index.php" class="btn btn-danger px-4 py-2">Back to Home</a>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
