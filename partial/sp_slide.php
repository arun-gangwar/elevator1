<?php include 'header.php'; ?>


<!-- Slider Section -->
<section class="section__container" id="slider">
    <h2 class="section__header">Our Products</h2>
    <p class="section__subheader">Explore our range of high-quality elevators designed for various applications.</p>
    <div class="slider__content">
        <p>We offer a wide range of elevators, including capsule elevators, car elevators, goods elevators, home
            elevators, and hospital elevators. Our products are designed to meet the highest standards of safety,
            reliability, and performance.</p>
<div class="slider-container">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="circle-img-wrapper">
                    <img src="../assets/design.jpeg" alt="Capsule Elevator">
                </div>
                <h4>AE-CAPSULE ELEVATORS</h4>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="circle-img-wrapper">
                    <img src="../assets/design2.jpeg" alt="Car Elevator">
                </div>
                <h4>AE-CAR ELEVATORS</h4>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="circle-img-wrapper">
                    <img src="../assets/design3.jpeg" alt="Goods Elevator">
                </div>
                <h4>AE-GOODS ELEVATORS</h4>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <div class="circle-img-wrapper">
                    <img src="../assets/design4.jpeg" alt="Home Elevator">
                </div>
                <h4>AE-HOME ELEVATORS</h4>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide">
                <div class="circle-img-wrapper">
                    <img src="../assets/design5.jpeg" alt="Hospital Elevator">
                </div>
                <h4>AE-HOSPITAL ELEVATORS</h4>
            </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
</div>
</section>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        slidesPerView: 3,  /* 3 slides visible at once */
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 4 }
        }
    });
</script>

<!-- Style -->
<style>
.slider-container {
    padding: 50px 0;
    background: #f9f9f9;
    text-align: center;
}

.circle-img-wrapper {
    width: 200px;
    height: 200px;
    margin: 0 auto 20px;
    overflow: hidden;
    border-radius: 50%;
    border: 5px solid #eee;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
}

.circle-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.swiper-slide h4 {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

.swiper-button-next,
.swiper-button-prev {
    color: #007bff;
}

.swiper-pagination-bullet {
    background: #007bff;
}
</style>
<?php include 'footer.php'; ?>