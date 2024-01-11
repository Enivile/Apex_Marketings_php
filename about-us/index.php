<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include_once('../include/head.php')
?>
<style>
    .icon-box {
        position: relative;
        perspective: 1000px;
        cursor: pointer;
        width: 250px; /* Adjust the width as needed */
        height: 350px; /* Adjust the height as needed */
    }

    .flip-card-inner {
        width: 100%;
        height: 100%;
        transition: transform 0.5s;
        transform-style: preserve-3d;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .icon-box:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        width: 100%;
        height: 100%;
        position: absolute;
        backface-visibility: hidden;
    }

    .flip-card-front {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
    }

    .flip-card-back {
        background-color: #ffffff;
        padding: 20px;
        transform: rotateY(180deg);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow-y: auto; /* Enable vertical scrolling if content exceeds the card's height */
        max-height: 100%; /* Limit the maximum height of the card's content */
    }
</style>

</head>


<body>

    <?php
        //include_once('./include/preloader.php')
    ?>


    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54H6RTF"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- ======= Header ======= -->
    <?php
        include_once('../include/header_about_us.php')
    ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                    <h1>About Us</h1>
                    <h2>At Apex Marketings, we specialize in elevating your digital presence to achieve your business goals</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="../contact-us" class="btn-get-started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/about.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    
<section>
<div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-6 col-12">
            <div class="about-img text-center">
                <img class="img-fluid" src="../img/aboutus1st.png" alt="About Us">
            </div>
        </div>
        <div class="col-lg-6 col-12 order-1" data-aos="fade-left">
            <h1 class="mb-4">Navigating your Business</h1>
            <p class="mb-4 text-justify">Apex Marketings is a digital marketing agency that helps businesses of all sizes grow their online presence. We have a team of experienced marketing professionals who are experts in SEO, PPC, social media, web design, and other aspects of digital marketing.
                                        With over 7 years of experience in the industry. Since then, we have helped a number of businesses grow their online presence and achieve their marketing goals.
                                        <br>
                                        <br>
                                        We are committed to providing our clients with the highest quality marketing services. We use a data-driven approach to marketing and we are always looking for new and innovative ways to help our clients succeed.</p>
            <div class="d-flex flex-wrap align-items-center mt-4">
            <a href="../contact-us" class="services-home-btn">Contact Us</a>
               <p>&nbsp &nbsp</p>                
                <a class="btn-square btn btn-outline-primary me-1" href="https://www.facebook.com/people/Apex-Marketings/100093508323539/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn-square btn btn-outline-primary me-1" href="https://www.instagram.com/apexmarketings/"><i class="fab fa-instagram"></i></a>
                <a class="btn-square btn btn-outline-primary me-1" href="https://www.linkedin.com/company/apex-marketings/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn-square btn btn-outline-primary me-1" href="https://www.youtube.com/@apexmarketings"><i class="fab fa-youtube"></i></a>
                <a class="btn-square btn btn-outline-primary me-1" href="https://twitter.com/apex_marketings"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>
<style>
.btn-square
{
  border-radius: 50px;
}
</style>
</section>
    
    <!-- About End -->


    
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg container-fluid ">
            <div class="container-fluid container " data-aos="fade-right">

                <div class="row ">

                    <div class="col-lg-6 align-self-end d-flex flex-column justify-content-center  order-2 order-lg-1">

    
                    <h2 class="mb-4">How Apex Marketings does it for You</h2>
                            


                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>  Proven Track Record of Success: <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            At Apex Marketings, Intent-based customers are potential customers who are already searching for what you have to offer. We do our research to find the right customers searching for services or products in your industry.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Tailored Strategies for Your Business: <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                        Once we’ve determined the proper intent-based customers for your business, we then place your business right in front of those customers searching for what you have to offer.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Comprehensive Digital Marketing Services: <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Apex Marketings Customers searching for what you can offer call your business or fill out a contact form on your website, resulting in higher-quality leads, higher closing rates, and more revenue.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-6 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/homewhyus.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section --> 
    <!-- Team Start -->

    
<section class="second-team bg-primary feature " style="margin-top: 7rem;" data-aos="fade-up">
  <h1 class="heading" style="margin-top: -1.5rem;" id="second-team">OUR TEAM</h1>
  <p style="color: #cccccc" >Our team is made up of experienced marketing professionals who are passionate about helping businesses grow their online presence.</p>
  <div class="row single">
      <div class="card" data-wow-delay="0.5s" data-aos="zoom-in" >
          <div class="image">
              <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/hamza.png" alt="Team member 1">
          </div>
          <div class="info">
              <h2>Hamza Khan</h2>
              <span>Chief Executive Officer</span>
              <p>
              A highly talented and forward-minded person with direct approach to everything. Can make clear decisions in critical situations.
              </p>
              <div class="icons">
                  <a href="https://www.facebook.com/hamzakhanalpha" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/apex_marketings" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/hamzakhan.alpha/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/in/hamza-khan-7a393b211/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  </div>
  <div class="row double">
      <div class="card" data-wow-delay="0.5s" data-aos="fade-right">
          <div class="image">
              <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/usman.png" alt="Team member 1">
          </div>
          <div class="info">
              <h3>Usman Ahsan</h3>
              <span>Marketing Head</span>
              <p>
              Marketing expert orchestrating impactful campaigns and fostering client relationships for maximum brand exposure.
              </p>
              <div class="icons">
                  <a href="https://www.facebook.com/UsmanAhsanOfficial/" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/apex_marketings" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/USMANAHSANOFFICIAL/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/in/usmanahsanpervez/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  
      <div class="card" data-wow-delay="0.5s" data-aos="fade-left">
          <div class="image">
              <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/sohaib.png" alt="Team member 1">
          </div>
          <div class="info">
              <h3>Sohaib Aftab</h3>
              <span>Technical Head</span>
              <p>
              Technology innovator optimizing digital solutions for enhanced campaign performance and technical excellence.              </p>
              <div class="icons">
                  <a href="https://www.facebook.com/sohaib.aftab.35" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/apex_marketings" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/sohaib2114/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/in/sohaib-aftab-86aa5bb7/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  </div>
  <div class="row double">
      <div class="card" data-wow-delay="0.5s" data-aos="fade-right">
          <div class="image">
              <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/salman.png" alt="Team member 1">
          </div>
          <div class="info">
              <h3>Salman Saeed</h3>
              <span>Creative Director</span>
              <p>
              Crafting captivating campaigns and inspiring brand narratives that resonate deeply with audiences.
              </p>
              <div class="icons">
                  <a href="https://www.facebook.com/profile.php?id=100009736571474" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/apex_marketings" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/_.salmansaeed/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/in/salman-saeed-6956a01a3/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  
      <div class="card" data-wow-delay="0.5s" data-aos="fade-left">
          <div class="image">
              <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/ahmed.png" alt="Team member 1">
          </div>
          <div class="info">
              <h3>Ahmed Ehtesam Zafar</h3>
              <span>Operational Director</span>
              <p>
              Operational maestro streamlining processes and ensuring efficient project delivery for seamless agency operations.              </p>
              <div class="icons">
                  <a href="https://www.facebook.com/ahmed.ehtesam.9" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/apex_marketings" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/aez_ehtesam/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/company/apex-marketings/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  </div>
  
</section>
<!-- Team End -->


    <!-- Newsletter Start -->
    <div class="container-fluid why-choose newsletter py-5">
         <div class="container">
            <div class="row g-5 align-items-center">
               <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s" data-aos="fade-right">
                  <img class="img-fluid d-none d-md-block" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/newsletter.png" alt="">
               </div>
               <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                  <h1 class="text-white mb-4">Become Apex of your Business Today!</h1>
                  <h5 class="text-white mb-4">Schedule your free consultation and begin your journey to increased revenue.</h5>
                  <div class="d-flex justify-content-center justify-content-lg-start" data-aos="zoom-in">
                     <a class=".schedule-your-consultation-btn" href="../contact-us">Schedule Your Consultation</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <style>
.why-choose {
  background-color: #032e8d !important;
  background-image: url('../img/bg-hero.png') !important;
  background-repeat: no-repeat !important;
  background-position: top center !important;
  background-size: cover !important;
  color: #fff !important;
}
.schedule-your-consultation-btn {
  background: #ffffff;
  border-radius: 11px;
  color: #000000;
  font-size: 15px;
  padding: 8px 35px 8px 35px;
  transition: transform 0.3s;
}

.schedule-your-consultation-btn:hover {
  background: #ebebeb;
  color: #000000;
  transform: scale(1.1); /* Enlarges the button to 110% of its size */
}
</style>
    <!-- Newsletter End -->
         <section>
            <!--WhatsApp Button-->
            <a class="whatsapp-button" href="https://wa.me/+923095273505" target="_blank">
                <i class="bx bxl-whatsapp"></i>
            </a>
        </section>



    <?php
        include_once('../include/footer.php')
    ?>
                   <a href="#" class="back-to-top d-flex align-items-center justify-content-center mb-3"><i class="bi bi-arrow-up-short"></i></a>

<style>
    .back-to-top {
    bottom: 55px; /* adjust this value as needed */
    right:  25px;
}

</style>
    <!-- Vendor JS Files -->
    <script src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/vendor/aos/aos.js"></script>
    <script src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/wow/wow.min.js"></script>
    <script src="./lib/easing/easing.min.js"></script>
    <script src="./lib/waypoints/waypoints.min.js"></script>
    <script src="./lib/counterup/counterup.min.js"></script>
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>

    <script>
        // JavaScript code to open links when clicking on the card
        const cardLinks = document.querySelectorAll('.icon-box a');
        
        cardLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.stopPropagation(); // Prevent card flip when clicking the link
            });
        });
    </script>    

    <!-- Template Main JS File -->
    <script src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/js/main.js"></script>

    

</body>

</html>