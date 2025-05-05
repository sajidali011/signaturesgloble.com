<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enquiry Card with Auto Slider</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }

        .enquiry-card {
            display: none;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.3s ease-in-out;
            max-width: 600px; /* Aur kam kiya */
            width: 100%;
            height: 310px; /* Aur kam kiya */
            position: relative;
            display: flex; /* Ensure flexbox for layout control */
        }

        .enquiry-card.show {
            opacity: 1;
            transform: scale(1);
            display: flex;
        }

        .carousel, .carousel-inner, .carousel-item, .carousel-item img {
            height: 100%;
        }

        .carousel-item img {
            object-fit: cover;
        }

        .form-section {
            flex: 1;
            padding: 10px; /* Aur kam kiya */
            background: linear-gradient(135deg, #003c8f, #1976d2);
            color: white;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Keep space-between */
        }

        .form-section h2 {
            font-weight: bold;
            margin-bottom: 10px; /* Aur kam kiya */
            text-align: center;
            font-size: 1.5rem; /* Thoda chota kiya */
        }

        .form-control {
            margin-bottom: 8px; /* Aur kam kiya */
            border-radius: 5px;
            border: none;
            padding: 6px;
            font-size: 0.9rem; /* Thoda chota kiya */
        }

        .btn-submit {
            background-color: #e53935;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            font-size: 0.9rem; /* Thoda chota kiya */
            margin-top: 5px; /* Thoda margin top diya */
        }

        .btn-submit:hover {
            background-color: #c62828;
        }

        .close-btn {
            position: absolute;
            top: 5px; /* Aur adjust kiya */
            right: 8px; /* Aur adjust kiya */
            font-size: 18px; /* Aur chota kiya */
            font-weight: bold;
            color: white;
            background: rgba(0, 0, 0, 0.1); /* Aur halka kiya */
            border: none;
            border-radius: 50%;
            width: 22px; /* Aur chota kiya */
            height: 22px; /* Aur chota kiya */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: background 0.3s ease;
        }

        .close-btn:hover {
            background: rgba(0, 0, 0, 0.2); /* Aur halka kiya */
        }
    </style>
</head>
<body>

<div class="enquiry-card" id="enquiryCard">
    <div id="imageCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000" style="flex: 1;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="https://example.com/page1" target="_blank">
                    <img src="https://media.istockphoto.com/id/1141817312/photo/young-plants-of-unhealthy-plants-and-waiting-for-the-day-to-grow-into-beautiful-big-trees.jpg?s=612x612&w=0&k=20&c=9NCCEbTeDymokkHHwNC06Nn8LLrDJrIMHrzpCBdrFlE=" class="d-block w-100" alt="Slide 1">
                </a>
            </div>
            <div class="carousel-item">
                <a href="https://example.com/page2" target="_blank">
                    <img src="https://media.istockphoto.com/id/1911602365/photo/new-life-in-forest.jpg?s=2048x2048&w=is&k=20&c=SE54sxZqbXtITzcv2BIr81_tfWWiw2RZtZ9QriVgpnw=" class="d-block w-100" alt="Slide 2">
                </a>
            </div>
            <div class="carousel-item">
                <a href="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg" target="_blank">
                    <img src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg" class="d-block w-100" alt="Slide 3">
                </a>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="form-section">
        <button class="close-btn" onclick="hideCard()">×</button>
        <h2>ENQUIRE NOW</h2>
        <form action="index.php" method="POST">
            <input type="text" class="form-control" placeholder="Name*" name="name" required>
            <input type="text" class="form-control" placeholder="Phone No.*" name="mobile" required>
            <input type="email" class="form-control" placeholder="Email*" name="email" required>
            <textarea class="form-control" placeholder="Message*" name="message" rows="3" required></textarea>
            <button type="submit" class="btn btn-submit w-100 text-white">Submit</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    setTimeout(() => {
        document.getElementById('enquiryCard').classList.add('show');
    }, 2000);

    function hideCard() {
        document.getElementById('enquiryCard').classList.remove('show');
    }
</script>

</body>
</html>