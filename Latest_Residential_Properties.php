<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commercial Properties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<?php include "navbar.php"; ?>
<div style="margin-top: 140px;">
   
<!-- Search Box -->
<div class="p-3" style="z-index: 1050; position: absolute; top: 100px; right: 40px;">
  <div class="search-container bg-white bg-opacity-75 backdrop-blur rounded-pill px-3 py-2 d-flex align-items-center"
       style="width: 280px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);">
    <input type="text" id="searchInput" class="form-control border-0 bg-transparent text-dark"
           placeholder="Search..." style="box-shadow: none; outline: none;">
    <button id="clearIcon" class="btn btn-link text-danger p-0 ms-2" style="display: none;" type="button">
      <i class="bi bi-x-circle-fill fs-5"></i>
    </button>
  </div>
  <div id="suggestionsBox"
       class="list-group position-absolute mt-2"
       style="width: 280px; max-height: 220px; overflow-y: auto; right: 12px; display: none; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);">
  </div>
</div>

<script>
  $(document).ready(function () {
    $('#searchInput').on('input', function () {
      let keyword = $(this).val().trim();

      if (keyword.length > 0) {
        $('#clearIcon').show();
      } else {
        $('#clearIcon').hide();
        $('#suggestionsBox').hide();
      }

      if (keyword.length >= 2) {
        $.get('search.php', { term: keyword }, function (data) {
          let results = JSON.parse(data);
          let suggestions = '';

          if (results.length > 0) {
            results = results.slice(0, 6); // Optional: Limit results
            results.forEach(item => {
              suggestions += `<a href="${item.link}" class="list-group-item list-group-item-action">${item.name}</a>`;
            });
          } else {
            suggestions = '<div class="list-group-item disabled text-center text-muted">No results found</div>';
          }

          $('#suggestionsBox').html(suggestions).show();
        });
      } else {
        $('#suggestionsBox').hide();
      }
    });

    $(document).click(function (e) {
      if (!$(e.target).closest('#searchInput, #suggestionsBox, #clearIcon').length) {
        $('#suggestionsBox').hide();
      }
    });

    $('#clearIcon').on('click', function () {
      $('#searchInput').val('');
      $('#clearIcon').hide();
      $('#suggestionsBox').hide();
    });
  });
</script>
&nbsp;  

    <!-- Latest Commercial Properties -->
    <section class="container">
        <h2 class="text-center text-primary mb-4">Residential Projects</h2>
        <div class="row">

            <!-- Property Cards -->
            <?php
            $properties = [
                ["title" => "Signature Global City 92", "img" => "sg-city-92-min.webp", "link" => "sg-city-92.php"],
                ["title" => "Signature Global City 93", "img" => "SG-City-93-min.webp", "link" => "sg-city-93.php"],
                ["title" => "Signature Global City 81", "img" => "sg-city-81-min.webp", "link" => "sg-city81.php"],
                ["title" => "Signature Global City 37D", "img" => "sg-city-37d-min.webp", "link" => "sg-city-37d.php"],
                ["title" => "Signature Global Park IV & V", "img" => "sg-park-4&5-min.webp", "link" => "global-park4and5.php"],
                ["title" => "Signature Global Park", "img" => "sg-park-min.webp", "link" => "global-park.php"],
                ["title" => "Signature Global City Karnal", "img" => "SG Global City-min.webp", "link" => "signature-global-city.php"]
            ];

            foreach ($properties as $prop) {
                echo '
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <a href="' . $prop["link"] . '">
                            <img src="images/on_going_project/' . $prop["img"] . '" class="card-img-top" alt="' . $prop["title"] . '" style="height: 300px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">' . $prop["title"] . '</h5>
                            <a href="' . $prop["link"] . '" class="btn btn-outline-primary btn-sm">Know More</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
