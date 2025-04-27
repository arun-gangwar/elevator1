<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Image Gallery</title>

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
<body>

<h2>Responsive Image Gallery</h2>

<div class="gallery-container">
  <div class="swiper myGallery">
    <div class="swiper-wrapper">
      <!-- List of images -->
      <div class="swiper-slide"><img src="..\assets\E1.jpg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src="..\assets\1.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src="..\assets\2.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src="..\assets\4.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src="..\assets\5.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src="..\assets\8.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src="..\assets\9.jpeg" alt="Gallery Image"></div>
      <div class="swiper-slide"><img src="..\assets\10.jpeg" alt="Gallery Image"></div>
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
</html>