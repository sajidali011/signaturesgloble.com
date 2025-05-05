<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Delivered Projects</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
            background-color: black; /* Set background to black for video overlay */
            position: relative; /* Needed for absolute positioning of video */
        }

        /* Video Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent black overlay for better text visibility */
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
            transform: translateX(-50%) translateY(-50%);
            object-fit: cover;
        }
        .container {
    max-width: 1200px; /* Increased width */
    margin: 20px auto; /* Added top-bottom margin and auto for centering */
    background: transparent; /* Fully transparent background */
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    padding: 20px; /* Added padding to give space inside */
}

        h2 {
            color:rgb(244, 246, 249);
            text-align: left;
        }
        .category {
            margin-bottom: 30px;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
        }
        .card {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
            text-decoration: none;7890
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card img {
            width: 40%;
            height: 120px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out; /* Smooth Zoom Effect */
        }
        .card:hover img {
            transform: scale(1.1); /* Slight Zoom on Hover */
        }
        .card-content {
            width: 60%;
            padding: 15px;
            text-align: left;
        }
        .card-content h4 {
            margin: 0 0 5px;
            color: #2c3e50;
        }
        .card-content a {
            text-decoration: none;
            color: #2980b9;
            font-weight: bold;
        }
        .card-content a:hover {
            color: #e74c3c;
        }
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
        }
        .back-btn:hover {
            background-color: #c0392b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card {
                flex-direction: column;
                text-align: center;
            }
            .card img {
                width: 100%;
                height: 150px;
            }
            .card-content {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<video autoplay muted loop>
        <source src="images/delivered/75351-555531961.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="container">
        <h2>🏢 Commercial Projects</h2>
        <div class="category card-grid">
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
                echo "<a href='{$project[1]}' target='_blank' class='card'>
                        <img src='{$project[2]}' alt='{$project[0]}'>
                        <div class='card-content'>
                            <h4>{$project[0]}</h4>
                        </div>
                      </a>";
            
            }
            ?>
        </div>

        <h2>🏡 Residential Projects</h2>
        <div class="category card-grid">
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
                ["Solera", "https://www.signatureglobal.in/solera.php", "images/delivered/solera-min.webp"],
            ];

            foreach ($residential_projects as $project) {
                echo "<a href='{$project[1]}' target='_blank' class='card'>
                        <img src='{$project[2]}' alt='{$project[0]}'>
                        <div class='card-content'>
                            <h4>{$project[0]}</h4>
                        </div>
                      </a>";
            }
            ?>
        </div>

        <a href="index.php" class="back-btn">Back to Home</a>
    </div>

</body>
</html>
