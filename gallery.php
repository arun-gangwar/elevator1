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

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> -->


        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <link rel="stylesheet" href="styles.css" />


     <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background: #f0f0f0;
  }

  .gallery-container {
    width: 90%;
    max-width: 800px;
    margin: 40px auto;
  }

  .swiper {
    padding: 20px 0;
  }

  .swiper-slide {
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .swiper-slide img:hover {
    transform: scale(1.1);
  }

  h2 {
    text-align: center;
    margin-top: 30px;
    color: #333;
  }
</style>
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
                <img src="assets\LOGO.jpg" alt="Blc Elevators" class="" loading="lazy"
                    width="150" height="100" />

            </div>

             <ul class="nav justify-content-center py-3">
             <ul class="nav__links" id="nav-links">
                <li class="nav-item"><a class="nav-link  active" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  active" href="#" id="productsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        <li><a class="dropdown-item" href="spareparts.php">Spare Parts</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  active" href="#" id="servicesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="maintenance.php">Maintenance Contract</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link  active" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link  active" href="gallery.php">Gallery</a></li>
            </ul>  

           
             
        </div>

    </header>
 
<body>

<h2>BLC Elevators Products Gallery</h2>

<div class="gallery-container header">
  <div class="swiper myGallery">
    <div class="swiper-wrapper">
      <!-- List of images -->
      <!-- <div class="swiper-slide"><img src=".\assets\2.jpeg" alt="Gallery Image"></div> -->
      <div class="swiper-slide"><img src=".\assets\5.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src=".\assets\8.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src=".\assets\9.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src=".\assets\10.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src=".\assets\design4.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src=".\assets\design5.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src=".\assets\design6.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src=".\assets\swingDoor.jpeg" alt="Gallery Image"></div>
    </div>

    <!-- Navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.myGallery', {
    slidesPerView: 3,
    grid: {
      rows: 2,
      fill: 'row',
    },
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
      // When window width is >= 1024px
      1024: {
        slidesPerView: 3,
        grid: { rows: 2 },
      },
      // When window width is between 768px and 1023px
      768: {
        slidesPerView: 2,
        grid: { rows: 2 },
      },
      // When window width is <= 767px
      0: {
        slidesPerView: 1,
        grid: { rows: 2 },
      }
    }
  });
</script>

</body>
<?php include 'partial/footer.php'; ?>