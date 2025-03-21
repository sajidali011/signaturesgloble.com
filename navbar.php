<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Signatures Globals: Your Top Choice for Real Estate Development in Gurugram (Delhi-NCR)</title>
</head>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<style>
  .menu-bg-wrap {
    background-color: rgba(0, 0, 0, 0.4) !important;
    padding: 10px 0;
  }

  .site-navigation {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .logo-container {
    text-align: left;
    margin-left: 36px;
  }

  .logo-container img {
    display: block;
    margin: 0 auto;
    height: 70px;
    max-width: 100%;
  }

  .site-menu {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .site-menu li {
    margin: 0 10px;
  }

  .site-menu li a {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 500;
    color: white !important;
  }

  .site-menu li a:hover {
    color: #39ff14 !important;
  }

  .burger {
    display: none;
    cursor: pointer;
  }

  @media (max-width: 991px) {
    .site-menu {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 70px;
      left: 0;
      width: 100%;
      background-color: white;
      padding: 10px;
      z-index: 1000;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .site-menu.active {
      display: flex;
    }

    .burger {
      display: block;
    }
  }
</style>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="logo-container">
                    <a href="index.php">
                        <img src="images/Signature-Global-Logow.webp" alt="Logo">
                    </a>
                </div>
                <ul class="js-clone-nav site-menu d-none d-lg-flex">
                    <li class="active"><a href="index.php">Home</a></li>
                    <!-- <li><a href="services.php">Services</a></li> -->
                    <li><a href="enquire_now.php">Enquire Now</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <a href="#" class="burger site-menu-toggle js-menu-toggle d-lg-none">
                    <span>&#9776;</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".js-menu-toggle");
    const menu = document.querySelector(".site-menu");

    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      menu.classList.toggle("active");
    });
  });
</script>
