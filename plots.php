<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commercial Properties</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "navbar.php"; ?>
    <!-- Spacing -->
    <div class="my-5"></div>

    <!-- Latest Commercial Properties -->
    <section class="container">
        <!-- <h2 class="text-center text-primary mb-4">Residential Projects</h2> -->
        <div class="row">
   
             <!-- Property 1 -->
    <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="the-millennia-iv.php">
                        <img src="images/on_going_project/the-millennia-4-min.webp" class="card-img-top" alt="Signature Global Twin Tower DXP" style="height: 300px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">The Millennia IV
                        </h5>
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#propertyDetails12" aria-expanded="false" aria-controls="propertyDetails4">
                            View Details
                        </button>
                        <div class="collapse mt-2" id="propertyDetails12">
                            <div class="card card-body">
                                <p>Experience a modern lifestyle providing the best of peace and tranquillity for rejoicing and revitalizing yourself with the most exquisite amenities.</p>
                                <p><strong>Typology:</strong> 2 BHK </p>
                                <p><strong>Status:</strong> On-Going</p>
                                <p><strong>Category:</strong> 	
                                Affordable Flats/Apartments</p>
                                <a href="the-millennia-iv.php" class="btn btn-outline-primary btn-sm">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

       <!--footer section  -->
<?php include "footer.php" ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
