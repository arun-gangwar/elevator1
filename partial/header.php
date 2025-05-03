<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
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
            'maintenance.php' => [
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
    
    <!-- Open Graph / Social Meta -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageInfo['title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageInfo['description']); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
    <meta property="og:image" content="assets/logo.png">
    
    <!-- CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

<!-- Top bar -->
<div class="top-bar bg-dark text-white w-100 py-2">
    <div class="container d-flex justify-content-end gap-4">
        <div class="d-flex align-items-center">
            <i class="bi bi-geo-alt-fill text-primary me-1"></i>
            <span style="color: white;">Bangalore</span>
        </div>
        <div class="d-flex align-items-center">
            <i class="bi bi-telephone-fill text-success me-1"></i>
            <span style="color: white;">+91 9743322229</span>
        </div>
        <div class="d-flex align-items-center">
            <i class="bi bi-envelope-fill text-danger me-1"></i>
            <span style="color: white;">blc.elevators@gmail.com</span>
        </div>
    </div>
</div>

<!-- Header -->
<header class="bg-light border-bottom sticky-top">
    <nav class="navbar navbar-expand-lg bg-light container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/LOGO.jpg" alt="Blc Elevators" loading="lazy" width="150" height="100" />
        </a>

        <!-- Hamburger button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible menu -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        <li><a class="dropdown-item" href="spareparts.php">Spare Parts</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="maintenance.php">Maintenance Contract</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<!-- Optional section header -->
<section class="section__header" id="slide"></section>

</body>
</html>
