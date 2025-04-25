<div class="slider-container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-content">
                       <!-- <h1><span>STYLE</span> PERFORMANCE<br>INNOVATION <span>DURABILITY</span></h1>
                        <p>Elevating designs that blend in the most awesome buildings</p> -->
                        <a class="btn" href="#">Know More</a> 
                    </div>
                    <div class="circle-img-wrapper">
                        <img src="assets/SP1.jpg" alt="Slide 1" />
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-content">
                        <!-- <h1><span>PREMIUM</span> LOOKS<br>RELIABILITY <span>VALUE</span></h1>
                        <p>Modern elevator solutions made just for you</p> -->
                        <!-- <a class="btn" href="#">Know More</a> -->
                    </div>
                    <div class="circle-img-wrapper">
                        <img src="assets/SP2.jpg" alt="Slide 2" />
                    </div>
                </div>

                </div>

            <svg class="svg-bg" viewBox="0 0 2880 320" preserveAspectRatio="none">
                <path fill="#f34f1a" fill-opacity="0.2" d="M0,192L1440,64L2880,192L2880,320L0,320Z"></path></path>
            </svg>

            <svg class="circle-svg" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <circle cx="300" cy="300" r="250" fill="#00aaff" opacity="0.1">
                    <animate attributeName="r" from="250" to="280" dur="4s" repeatCount="indefinite" />
                    <animate attributeName="opacity" from="0.1" to="0.3" dur="4s" repeatCount="indefinite" />
                </circle>
                <circle cx="400" cy="200" r="30" fill="#007bff" opacity="0.6">
                    <animate attributeName="cx" from="400" to="420" dur="3s" repeatCount="indefinite" />
                    <animate attributeName="cy" from="200" to="180" dur="3s" repeatCount="indefinite" />
                </circle>
                <circle cx="200" cy="400" r="50" fill="#00aaff" opacity="0.3">
                    <animate attributeName="r" from="50" to="60" dur="3.5s" repeatCount="indefinite" />
                    <animate attributeName="opacity" from="0.3" to="0.5" dur="3.5s" repeatCount="indefinite" />
                </circle>
                <circle cx="350" cy="500" r="20" fill="#007bff" opacity="0.7">
                    <animate attributeName="cy" from="500" to="520" dur="2.5s" repeatCount="indefinite" />
                </circle>
                <path d="M200 100 Q300 50 400 100 T500 200" stroke="#007bff" stroke-width="4" fill="transparent">
                    <animate attributeName="d" values="M200 100 Q300 50 400 100 T500 200; M210 90 Q310 40 410 90 T510 190; M200 100 Q300 50 400 100 T500 200" dur="5s" repeatCount="indefinite" />
                </path>
            </svg>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'slide',
            speed: 700,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
        });
    </script>