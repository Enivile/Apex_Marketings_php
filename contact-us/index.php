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
         include_once('../include/header_contact_us.php')
         ?>
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1>Contact Us</h1>
                  <h2>Get in touch with Apex Marketings—where your digital journey takes a leap forward</h2>
                  <div class="d-flex justify-content-center justify-content-lg-start">
                     <a href="#" class="btn-get-started">Get Started</a>
                  </div>
               </div>
               <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/contact.png" class="img-fluid animated" alt="">
               </div>
            </div>
         </div>
      </section>
      <!-- End Hero -->    
      <!-- Start Contact Us Section -->
      <?php
         include_once('../include/contactus.php')
         ?>
      <!-- End Contact Us Section -->
      <section>
         <!--WhatsApp Button-->
         <a class="whatsapp-button" href="https://wa.me/+923095273505" target="_blank">
         <i class="bx bxl-whatsapp"></i>
         </a>
      </section>
      <footer id="footer">
         <div class="footer-newsletter">
            <div class="container">
               <div class="row justify-content-center" data-aos="fade-up">
                  <div class="col-lg-6">
                     <h4>Join Our Newsletter</h4>
                     <p></p>
                     <form action="" method="post">
                        <input type="email" name="email" placeholder="Enter Your E-mail"><input style="background: linear-gradient(132deg, #0151ff, #032E8D)" type="submit" value="Subscribe">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
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