<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Projects - Signatures Globals</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h1 class="text-center mb-5 display-3 fw-bold text-uppercase">Upcoming Projects</h1>

    <!-- Residential Projects Section -->
    <div class="card mb-5 shadow-lg border-0">
        <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
    <h2 class="card-title text-primary display-6">
        <a href="upcoming_projects_residential.php" class="text-primary text-decoration-none">Residential Projects</a>
    </h2>

    <h2 class="card-title text-primary display-6">
        <a href="upcoming_projects_commercial.php" class="text-primary text-decoration-none">Commercial Projects</a>
    </h2>
</div>
            <div id="projectList" class="list-group">
                <a href="https://www.magicbricks.com/propertyDetails/104-Sq-yrd-Residential-Plot-FOR-Sale-Sohna-Sector-4-in-Gurgaon&id=4d423731383034333431" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-4">
                    <span class="fs-5 fw-semibold">Sohna Ireo</span>
                    <button class="btn btn-primary btn-sm">View Details</button>
                </a>
                <a href="https://www.magicbricks.com/project-plots-central-park-flower-valley-for-sale-in-gurgaon-pppfs" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-4">
                    <span class="fs-5 fw-semibold">Central Park</span>
                    <button class="btn btn-primary btn-sm">View Details</button>
                </a>
                <a href="https://stellarinfraventures.com/property/signature-global-x-factor-sohna-sector-35/" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-4">
                    <span class="fs-5 fw-semibold">Signature 35 SpEcial Econemice Zone (SEZ)</span>
                    <button class="btn btn-primary btn-sm">View Details</button>
                </a>
                <a href="https://www.rofjbp.com/" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-4">
                    <span class="fs-5 fw-semibold">ROF JBP DDJAY PLOTS SOHNA</span>
                    <button class="btn btn-primary btn-sm">View Details</button>
                </a>
                <a href="https://www.99acres.com/godrej-nature-plus-sector-33-sohna-gurgaon-npxid-r297055" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-4">
                    <span class="fs-5 fw-semibold">GODREJ NATURE+, Sector 33</span>
                    <button class="btn btn-primary btn-sm">View Details</button>
                </a>
                <a href="https://www.magicbricks.com/group-silverglades-the-melia-sohna-sector-35-gurgaon-pdpid-4d4235303432313935   
                
                
                
                  " class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-4">
                    <span class="fs-5 fw-semibold">Group Silverglades The Melia Sector 35 Sohna, Gurgaon</span>
                    <button class="btn btn-primary btn-sm">View Details</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-4">
                    <span class="fs-5 fw-semibold">GLS 04</span>
                    <button class="btn btn-primary btn-sm">View Details</button>
                </a>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS for Toggle -->
<script>
    const toggleButton = document.getElementById('toggleButton');
    const moreProjects = document.getElementById('moreProjects');

    toggleButton.addEventListener('click', () => {
        if (moreProjects.style.display === 'none') {
            moreProjects.style.display = 'block';
            toggleButton.textContent = 'View Less';
        } else {
            moreProjects.style.display = 'none';
            toggleButton.textContent = 'View More';
        }
    });
</script>

</body>

</html>