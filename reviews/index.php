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
         include_once('../include/header_reviews.php')
         ?>
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                  <h1>Clients Reviews</h1>
                  <h2>Don't just take our word for it—read how we've helped businesses thrive online</h2>
                  <div class="d-flex justify-content-center justify-content-lg-start">
                     <a href="../contact-us" class="btn-get-started">Get Started</a>
                  </div>
               </div>
               <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/review.png" class="img-fluid animated" alt="">
               </div>
            </div>
         </div>
      </section>
      <!-- End Hero -->
      <!-- Reviews Start -->
      <div class="container-fluid py-5">
         <div class="container review-container" data-aos="zoom-in" >
            <h1 class="review-title" >Our Clients Reviews </h1>
            <p class="review-description">Apex Digital Marketing is a full-service agency, which means we provide everything you need to ignite growth for your business under one roof, keeping it simple for you.</p>
            <div class="container py-5">
               <div class="row g-5 align-items-center">
                  <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s" data-aos="zoom-in">
                     <div class="review-item">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/userreview.png" alt="Website design">
                        <br>
                        <h2 class="review-subtitle">Hussnain Bajwa</h2>
                        <p>
                           <i class="fa fa-quote-left "></i>
                           I didn't know much about SEO before. Apex Marketing made it easy to understand. Now, we're getting more customers.                           <i class="fa fa-quote-right "></i>
                        </p>
                        <!-- 5-star review -->
                        <div class="star-review">
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                        </div>
                        <br>
                        <a href="../portfolio" class="review-btn">View Project</a>
                     </div>
                  </div>
                  <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s" data-aos="zoom-in">
                     <div class="review-item">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/szkreview.png" alt="Website design">
                        <br>
                        <h2 class="review-subtitle">Muhammad Ajmal Abbas</h2>
                        <p>
                           <i class="fa fa-quote-left "></i>
                           They made our website look great. Now we're easy to find on Google. Super happy with the results!
                           <i class="fa fa-quote-right "></i>
                        </p>
                        <!-- 5-star review -->
                        <div class="star-review">
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                        </div>
                        <br>
                        <a href="../portfolio" class="review-btn">View Project</a>
                     </div>
                  </div>
                  <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s" data-aos="zoom-in">
                     <div class="review-item">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/FHDreview.png" alt="Website design">
                        <br>
                        <h2 class="review-subtitle">Mahmood Ilyas</h2>
                        <p>
                           <i class="fa fa-quote-left "></i>
                           Apex Marketing boosted our sales. They are good at what they do. Thank you for the help!                           <i class="fa fa-quote-right "></i>
                        </p>
                        <!-- 5-star review -->
                        <div class="star-review">
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                        </div>
                        <br>
                        <a href="../portfolio" class="review-btn">View Project</a>
                     </div>
                  </div>
                  <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s" data-aos="zoom-in">
                     <div class="review-item">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/userreviewfemale.png" alt="Website design">
                        <br>
                        <h2 class="review-subtitle">Mishaal Butt</h2>
                        <p>
                           <i class="fa fa-quote-left "></i>
                           Our social media is now amazing. More people see our posts. You guys did a great job!                           <i class="fa fa-quote-right "></i>
                        </p>
                        <!-- 5-star review -->
                        <div class="star-review">
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                        </div>
                        <br>
                        <a href="../portfolio" class="review-btn">View Project</a>
                     </div>
                  </div>
                  <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s" data-aos="zoom-in">
                     <div class="review-item">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/ARTreview.png" alt="Website design">
                        <br>
                        <h2 class="review-subtitle">Wajeeh ul Hassan</h2>
                        <p>
                           <i class="fa fa-quote-left "></i>
                           Making our brand look good was hard before. Apex Marketing made it easy. Really thankful for the team.
                           <i class="fa fa-quote-right "></i>
                        </p>
                        <!-- 5-star review -->
                        <div class="star-review">
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                        </div>
                        <br>
                        <a href="../portfolio" class="review-btn">View Project</a>
                     </div>
                  </div>
                  <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s" data-aos="zoom-in">
                     <div class="review-item">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/hassanreview.png" alt="Website design">
                        <br>
                        <h2 class="review-subtitle">Hassan Arif</h2>
                        <p>
                           <i class="fa fa-quote-left "></i>
                           Our online ads are working now. Getting more clicks and customers. Apex Marketing is to thank for this.                           <i class="fa fa-quote-right "></i>
                        </p>
                        <!-- 5-star review -->
                        <div class="star-review">
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                           <i class="fa fa-star text-primary"></i>
                        </div>
                        <br>
                        <a href="../portfolio" class="review-btn">View Project</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Reviews End --> 
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
                  <div class="d-flex justify-content-center " data-aos="zoom-in">
                     <a class="schedule-your-consultation-btn" href="../contact-us">Schedule Your Consultation</a>
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
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/counterup/counterup.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
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