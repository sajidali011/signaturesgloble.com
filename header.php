<header class="site-navbar site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-3">
                <div class="site-logo">
                    <a href="index.php" class="text-white">
                        <span style="font-family: 'Playfair Display', serif; font-size: 28px; font-weight: 700;">luxury</span>
                    </a>
                </div>
            </div>
            <div class="col-9 text-right">
                <span class="d-inline-block d-lg-none">
                    <a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white">
                        <span class="icon-menu h3 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </span>
                    </a>
                </span>
                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto">

                        <li class="position-relative">
                            <a href="upcoming_projects.php" class="d-block">
                                <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExa3F4d3JnYXQ2d21jNWphenNuNHZkMG45dTM5eHNkZnZwaXVleXpybCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/1zGwAyZg7zuJLrJcyf/giphy.gif" 
                                     alt="Upcoming Projects" 
                                     class="img-fluid auto-zoom"
                                     style="width: 100px; height: auto; margin-left: 10px;">
                            </a>
                        </li>

                        <style>
                            @keyframes zoomInOut {
                                0% { transform: scale(1); }
                                50% { transform: scale(1.2); } /* Zoom In */
                                100% { transform: scale(1); } /* Zoom Out */
                            }

                            .auto-zoom {
                                animation: zoomInOut 2s infinite ease-in-out;
                            }
                        </style>

                        <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="position-relative">
                            <a href="Ongoing_projects.php" class="nav-link">Residential</a>
                            <div class="dropdown-menu-custom">
                                <div class="row">
                                    <div class="col-md-6 dropdown-content">
                                        <h4 class="dropdown-title">Residential Spaces</h4>
                                        <p><a href="Ongoing_projects.php" class="dropdown-link">Affordable Housing</a></p>
                                        <p><a href="Ongoing_projects.php" class="dropdown-link">Independent Floors</a></p>
                                        <p><a href="Ongoing_projects.php" class="dropdown-link">Residential Plots</a></p>
                                        <p><a href="Ongoing_projects.php" class="dropdown-link">High Rise Apartments</a></p>
                                        <p class="mt-3"><a href="ongoing_projects.php" class="btn btn-primary btn-sm">View Projects →</a></p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/Cam-8.jpg" alt="Residential" class="img-fluid rounded shadow-lg">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="position-relative">
                            <a href="Commercial.php" class="nav-link">Commercial</a>
                            <div class="dropdown-menu-custom" style="width: 800px; margin-right: 20px;">
                                <div class="row">
                                    <div class="col-md-6 dropdown-content">
                                        <h4 class="dropdown-title">Commercial Ventures</h4>
                                        <p><a href="Commercial.php" class="dropdown-link">Society Shops</a></p>
                                        <p><a href="Commercial.php" class="dropdown-link">Mall</a></p>
                                        <p><a href="Commercial.php" class="dropdown-link">SCO</a></p>
                                        <p class="mt-3"><a href="ongoing_projects.php" class="btn btn-primary btn-sm">View Projects →</a></p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/Day-Aerial.jpg" alt="Commercial" class="img-fluid rounded shadow-lg">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="about.php" class="nav-link">About</a></li>
                        <li><a href="contact.php" class="nav-link">Contact</a></li>
                        <li><a href="tel:+918920666807" class="text-warning fw-bold" style="font-size: 1.3rem; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); text-decoration: none; color: yellow !important;">8920666807</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;600&display=swap');

    .site-navbar {
        background: rgb(71, 118, 21);
        padding: 15px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .site-logo a {
        color: white;
        text-decoration: none;
    }

    .site-menu .nav-link {
        color: white;
        padding: 10px 15px;
        transition: background-color 0.3s ease; /* Added transition */
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
    }

    .site-menu .nav-link:hover, .site-menu .active .nav-link {
        background-color: rgba(255, 255, 255, 0.1); /* Added background on hover */
        color: #66ccff;
    }

    .dropdown-menu-custom {
        display: none;
        position: absolute;
        left: 50%;
        top: 100%;
        transform: translateX(-50%);
        width: 900px; /* Default width */
        background: rgba(0, 0, 0, 0.9);
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.6);
        border-radius: 12px;
        padding: 40px;
        z-index: 1000;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .site-menu li:hover > .dropdown-menu-custom {
        display: flex;
    }

    .dropdown-content {
        text-align: left;
    }

    .dropdown-title {
        color: #66ccff;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .dropdown-link {
        font-size: 16px;
        font-weight: 600;
        color: #e0e0e0;
        display: block;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .dropdown-link:hover {
        color: #66ccff;
    }

    .dropdown-menu-custom img {
        border-radius: 8px;
    }

    .btn-primary {
        font-size: 14px;
        font-weight: 600;
        padding: 8px 16px;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        opacity: 0.9;
    }
</style>