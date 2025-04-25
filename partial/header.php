<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php
        // Function to get page info
        function getPageInfo() {
            $currentPage = basename($_SERVER['PHP_SELF']);
            $pageInfo = [
                'index.php' => [
                    'title' => 'Best Elevator Company | BLC Elevator',
                    'description' => 'Leading elevator and escalator solutions in Bangalore. We provide installation, maintenance, and repair services.'
                ],
                'spareparts.php' => [
                    'title' => 'Elevator Spare Parts | BLC Elevator',
                    'description' => 'Quality elevator spare parts and components. Find all your elevator maintenance needs.'
                ],
                'maintainence.php' => [
                    'title' => 'Elevator Maintenance Services | BLC Elevator',
                    'description' => 'Professional elevator maintenance services. Keep your elevators running safely and efficiently.'
                ],
                'annualM.php' => [
                    'title' => 'Annual Maintenance Contract | BLC Elevator',
                    'description' => 'Comprehensive annual maintenance contracts for elevators. Ensure year-round safety and performance.'
                ]
            ];
            
            return isset($pageInfo[$currentPage]) ? $pageInfo[$currentPage] : [
                'title' => 'BLC Elevator | Elevator Solutions',
                'description' => 'Professional elevator services in Bangalore'
            ];
        }

        $pageInfo = getPageInfo();
        ?>
        
        <title><?php echo htmlspecialchars($pageInfo['title']); ?></title>
        <meta name="description" content="<?php echo htmlspecialchars($pageInfo['description']); ?>">
        
        <!-- Open Graph / Social Media Meta Tags -->
        <meta property="og:title" content="<?php echo htmlspecialchars($pageInfo['title']); ?>">
        <meta property="og:description" content="<?php echo htmlspecialchars($pageInfo['description']); ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo htmlspecialchars('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
        <meta property="og:image" content="assets/logo.png">
        
        <!-- Existing CSS and other head elements -->
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
    </head>

    <div class="top-bar bg-dark text-white w-100 py-2">
        <div class="container d-flex justify-content-end gap-4">
            <div class="d-flex align-items-center">
                <i class="bi bi-geo-alt-fill text-primary me-1"></i>
                <!-- <span>Bangalore</span> -->
                <span style="color: white;">Bangalore</span>
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-telephone-fill text-success me-1"></i>
                <span style="color: white;">+91 9743322229</span>
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-envelope-fill text-danger me-1"></i>
                <span style="color: white;">info@blcelevator.com</span>
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
                <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="productsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        <li><a class="dropdown-item" href="spareparts.php">Spare Parts</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="servicesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="maintenance.php">Maintenance</a></li>
                        <li><a class="dropdown-item" href="annualM.php">Annual Maintenance</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item"><a class="nav-link text-white" href="career.html">Careers</a></li> -->
                <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="">Gallery</a></li>
                <!-- <li class="nav-item"><a class="nav-link text-white" href="">Demo</a></li> -->
            </ul>
        </div>

    </header>

    <section class="section__header" id="slide"></section>
    <!-- <header class="header"> -->
    <?php
    include("partial/slide.php");
    ?>
    <!-- </header> -->
    </section>

    </div>
</html>