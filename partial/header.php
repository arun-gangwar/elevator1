<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="stylesheet" href="styles.css" />
    <title>Best Elevator Company | Blcelevator</title>
</head>

<div class="top-bar bg-dark text-white w-100 py-2">
    <div class="container d-flex justify-content-end gap-4">
        <div class="d-flex align-items-center">
            <i class="bi bi-geo-alt-fill text-primary me-1"></i>
            <span>Bangalore</span>
        </div>
        <div class="d-flex align-items-center">
            <i class="bi bi-telephone-fill text-success me-1"></i>
            <span>+91 8884421146</span>
        </div>
        <div class="d-flex align-items-center">
            <i class="bi bi-envelope-fill text-danger me-1"></i>
            <span>info@samrudhyaelevators.com</span>
        </div>
    </div>
</div>

<!-- Header -->
<header class="bg-light border-bottom sticky-top py-2">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex align-items-center gap-3">
            <img src="assets/logo.png" alt="Blc Elevators" class="logo-im rounded-circle shadow" loading="lazy"
                width="150" height="100" />

        </div>

        <!-- <ul class="nav justify-content-center py-3"> -->
        <ul class="nav__links" id="nav-links">
            <li class="nav-item"><a class="nav-link text-white" href="home.html">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="productsDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                    <li><a class="dropdown-item" href="spare_parts.html">Spare Parts</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="servicesDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <li><a class="dropdown-item" href="maintenance.html">Maintenance</a></li>
                    <li><a class="dropdown-item" href="maintenance.html">Annual Maintenance</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link text-white" href="career.html">Careers</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="contact.html">Contact</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="">Demo</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="">Demo</a></li>
        </ul>
    </div>

</header>




<header class="header">
    <nav>
        <div class="nav__logo"><a href="#"><img src="assets/logo.png" alt="Logo"></a></div>
        <ul class="nav__links" id="nav-links">
            <li class="link"><a href="#home">Home</a></li>
            <li class="link"><a href="#services">Services</a></li>
            <li class="link"><a href="#about">About</a></li>
            <li class="link"><a href="#projects">Projects</a></li>
            <li class="link"><a href="#contact">Contact</a></li>
        </ul>
        <div class="nav__menu__btn" id="menu-btn">
            <span><i class="ri-menu-line"></i></span>
        </div>
        <div class="nav__actions">
            <a href="https://api.whatsapp.com/send?phone=+919740484037">
                <input type="submit" class="btn btn-primary" value="Direct Contact">
            </a>
        </div>
    </nav>

</header>

<!-- 


<header class="header">




    <nav>
        <div class="nav__logo"><a href="#"><img src="assets/logo.png" alt="Logo"></a></div>
        <ul class="nav__links" id="nav-links">
            <li class="link"><a href="#home">Home</a></li>
            <li class="link"><a href="#choose">About</a></li>
            <li class="link"><a href="#craft">Craft</a></li>
            <li class="link"><a href="#testimonial">Testimonials</a></li>
            <li class="link"><a href="#blog">Blog</a></li>
        </ul>
        <div class="nav__menu__btn" id="menu-btn">
            <span><i class="ri-menu-line"></i></span>
        </div>
        <div class="nav__actions">
            <a href="https://api.whatsapp.com/send?phone=+919740484037">
                <input type="submit" class="btn btn-primary" value="Direct Contact">
            </a>
            <span><i class="ri-search-fill"></i></span>
            <span><i class="ri-user-fill"></i></span>
        </div>
    </nav>


    <div class="section__container header__container" id="home">
        <h1>Make Your Interior More Minimalistic & Modern</h1>
        <p>
            Turn your room with panto into a lot more minimalistic and modern with
            ease and speed
        </p>

        <form action="/">
            <input type="text" placeholder="Search furniture" />
            <button><i class="ri-search-line"></i></button>
        </form>
        <a href="#choose"><i class="ri-arrow-down-double-line"></i></a>
    </div>

    </header> -->

    <header class="header">
    <?php
    include("partial/slide.php");
    ?>
    </header>

</div>