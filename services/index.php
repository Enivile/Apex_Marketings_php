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
         include_once('../include/header_services.php')
         ?>
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                  <h1>Our Services</h1>
                  <h2>Unlock your brand's potential with our comprehensive digital marketing solutions</h2>
                  <div class="d-flex justify-content-center justify-content-lg-start">
                     <a href="../contact-us" class="btn-get-started">Get Started</a>
                  </div>
               </div>
               <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/services.png" class="img-fluid animated" alt="">
               </div>
            </div>
         </div>
      </section>
      <!-- End Hero -->
      <!-- Services Start -->
      <div class="container py-5">
<div class="container py-5">
   <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="zoom-in">
         <h1  class="mb-4">Website Development</h1>
         <p class="mb-4 text-justify ">At Apex Marketings, we craft responsive, user-friendly websites that represent your brand's digital face to the world. Our web development encompasses intuitive design, seamless navigation, and conversion-optimized layouts to ensure a standout online presence.
         </p>
         <div class="row g-3">
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Responsive Design</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Custom Development</h6>
            </div>
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>User Experience</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Conversion Optimization</h6>
            </div>
         </div>
         <div class="d-flex align-items-center mt-4" data-aos="zoom-in" >
            <a class="btn btn-primary rounded-pill px-4 me-3" href="../contact-us">Read More</a>
         </div>
      </div>
      <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn order-0 order-lg-2 mb-sm-0" data-wow-delay="0.5s" data-aos="zoom-in">
         <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/webdev.png" alt="">
      </div>
   </div>
   <br>
   <div class="row g-5 align-items-center">
   <div class="col-lg-6 align-self-end text-center text-md-end wow " data-wow-delay="0.5s" data-aos="zoom-in">
         <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/content.png" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="zoom-in">
         <h1  class="mb-4">Content Marketing</h1>
         <p class="mb-4">Our content marketing services at Apex Marketings are designed to engage your audience with compelling storytelling and valuable information. We create and distribute relevant articles, blogs, and multimedia content to establish your brand authority and nurture leads.
         </p>
         <div class="row g-3">
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Engaging Content</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Strategic Distribution</h6>
            </div>
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Brand Storytelling</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Lead Generation</h6>
            </div>
         </div>
         <div class="d-flex align-items-center mt-4" data-aos="zoom-in" >
            <a class="btn btn-primary rounded-pill px-4 me-3" href="../contact-us">Read More</a>
         </div>
      </div>

   </div>
   <br>
   <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="zoom-in">
         <h1  class="mb-4">Social Media Marketing</h1>
         <p class="mb-4 text-justify ">Leverage Apex Marketings' social media expertise to connect and converse with your target audience across platforms. We curate and manage your social presence, from strategy to posting, to foster community growth and enhance customer engagement.
         </p>
         <div class="row g-3">
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Trend Analysis</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Targeted Audience</h6>
            </div>
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>A/B Testing</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Pixel Tracking</h6>
            </div>
         </div>
         <div class="d-flex align-items-center mt-4" data-aos="zoom-in" >
            <a class="btn btn-primary rounded-pill px-4 me-3" href="../contact-us">Read More</a>
         </div>
      </div>
      <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn order-0 order-lg-2 mb-sm-0" data-wow-delay="0.5s" data-aos="zoom-in">
         <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/smm.png" alt="">
      </div>
   </div>
   <br>
   <div class="row g-5 align-items-center">
   <div class="col-lg-6 align-self-end text-center text-md-end wow " data-wow-delay="0.5s" data-aos="zoom-in">
         <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/seo.png" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="zoom-in">
         <h1  class="mb-4">Search Engine Optimization</h1>
         <p class="mb-4">Apex Marketings boosts your online visibility through tailored SEO strategies, ensuring your website ranks high on search engines. We focus on keyword research, on-page optimization, and quality link-building to drive organic traffic and elevate your digital footprint.
         </p>
         <div class="row g-3">
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Keyword Optimization</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Backlink Building</h6>
            </div>
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>On-Page SEO</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>SERP Domination</h6>
            </div>
         </div>
         <div class="d-flex align-items-center mt-4" data-aos="zoom-in" >
            <a class="btn btn-primary rounded-pill px-4 me-3" href="../contact-us">Read More</a>
         </div>
      </div>

   </div>
   <br>
   <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="zoom-in">
         <h1  class="mb-4">Video Production</h1>
         <p class="mb-4 text-justify ">Our video production services at Apex Marketings bring your brand's story to life through stunning visuals and compelling narratives. From concept to editing, we produce high-quality videos that captivate your audience and enhance your marketing campaigns.
         </p>
         <div class="row g-3">
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Creative Storytelling</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Visual Engagement</h6>
            </div>
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Brand Showcasing</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Multimedia Editing</h6>
            </div>
         </div>
         <div class="d-flex align-items-center mt-4" data-aos="zoom-in" >
            <a class="btn btn-primary rounded-pill px-4 me-3" href="../contact-us">Read More</a>
         </div>
      </div>
      <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn order-0 order-lg-2 mb-sm-0" data-wow-delay="0.5s" data-aos="zoom-in">
         <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/video.png" alt="">
      </div>
   </div>
   <br>
   <div class="row g-5 align-items-center">
   <div class="col-lg-6 align-self-end text-center text-md-end wow " data-wow-delay="0.5s" data-aos="zoom-in">
         <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/brandings.png" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="zoom-in">
         <h1  class="mb-4">Branding</h1>
         <p class="mb-4">Apex Marketings shapes your brand identity with a cohesive branding strategy that resonates with your audience. We cover everything from logo design to brand voice development, ensuring consistency and recognition across all marketing channels.
         </p>
         <div class="row g-3">
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Identity Crafting</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Customer Loyality</h6>
            </div>
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Visual Identity</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Brand Positioning</h6>
            </div>
         </div>
         <div class="d-flex align-items-center mt-4" data-aos="zoom-in" >
            <a class="btn btn-primary rounded-pill px-4 me-3" href="../contact-us">Read More</a>
         </div>
      </div>

   </div>
   <br>
   <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="zoom-in">
         <h1  class="mb-4">Analytical Remarketing</h1>
         <p class="mb-4 text-justify ">We harness the power of data with analytical remarketing, targeting previous visitors with personalized ads to increase conversions. Apex Marketings uses strategic insights to reconnect with your audience and boost your ROI.
         </p>
         <div class="row g-3">
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Data-Driven</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Conversion Retargeting</h6>
            </div>
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Audience Analytics</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Ad Personalization</h6>
            </div>
         </div>
         <div class="d-flex align-items-center mt-4" data-aos="zoom-in" >
            <a class="btn btn-primary rounded-pill px-4 me-3" href="../contact-us">Read More</a>
         </div>
      </div>
      <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn order-0 order-lg-2 mb-sm-0" data-wow-delay="0.5s" data-aos="zoom-in">
         <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/analytic.png" alt="">
      </div>
   </div>
   <br>
   <div class="row g-5 align-items-center">
   <div class="col-lg-6 align-self-end text-center text-md-end wow " data-wow-delay="0.5s" data-aos="zoom-in">
         <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/graphic.png" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="zoom-in">
         <h1  class="mb-4">Graphic Designing</h1>
         <p class="mb-4">Our graphic design services at Apex Marketings combine creativity with strategy to create visually appealing designs that communicate your message effectively. From brochures to digital banners, we ensure every design elevates your brand's aesthetic appeal.
         </p>
         <div class="row g-3">
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Creative Graphics</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Visual Communication</h6>
            </div>
            <div class="col-sm-6">
               <h6 class="mb-3"><i class="fa fa-check-circle text-primary me-2"></i>Design Innovation</h6>
               <h6 class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Branding Elements</h6>
            </div>
         </div>
         <div class="d-flex align-items-center mt-4" data-aos="zoom-in" >
            <a class="btn btn-primary rounded-pill px-4 me-3" href="../contact-us">Read More</a>
         </div>
      </div>

   </div>
   <br>

   </div>
</div>

      <!-- Srvices end -->
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
                     <a class="schedule-your-consultation-btn "  href="../contact-us">Schedule Your Consultation</a>
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