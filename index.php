<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
         include_once('./include/head.php')
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
         include_once('./include/header_home.php')
         ?>
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1>Best Digital Solutions For Your Business</h1>
                  <h2>The Performance Marketing Agency that Launches Brands, People, and Purposes</h2>
                  <div class="d-flex justify-content-center justify-content-lg-start">
                     <a href="../contact-us" class="btn-get-started">Get Started</a>
                     <a href="https://www.youtube.com/watch?v=97zchJVDXOc" target="_blank" class="btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                  </div>
               </div>
               <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/home.png" class="img-fluid animated" alt="">
               </div>
            </div>
         </div>
      </section>
      <!-- End Hero -->
      
<section>
      <div class="container ">
   <div class="row  align-items-center">
      <div class="col-lg wow fadeIn" data-aos="slide-left">
      <div id="clientSlider">
            <div id=" clients" class="clients section-bg">
               <div class="container">
                  <div class="row" data-aos="zoom-in">
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/Seeds_of_Success.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/save4u.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/EduPak.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/Altr-Group.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/Regal.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/ebuyer.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/edments.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/flybees.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/szk.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/fatima.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/MartZilla.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/PetHouse.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/ARTransports.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/MZ.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/clients/AcroFitness.png" class="img-fluid" alt="">
                     </div>
                  </div>
                  <button class="slick-prev">Previous</button>
                  <button class="slick-next">Next</button>
               </div>
         </div>
         </div>
   </div>
</div>
</div>
</section>
         <!-- ======= Clients Section ======= -->
         
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
         <script>
            $(document).ready(function(){
            $('#clientSlider .row').slick({
               dots: false, // Remove the dots
               infinite: true,
               slidesToShow: 6,
               slidesToScroll: 1,
               autoplay: true,
               autoplaySpeed: 1500,
               prevArrow: $('.slick-prev'), // Set the previous arrow button
               nextArrow: $('.slick-next'), // Set the next arrow button
               responsive: [
               {
                  breakpoint: 1200,
                  settings: {
                  slidesToShow: 4
                  }
               },
               {
                  breakpoint: 992,
                  settings: {
                  slidesToShow: 3
                  }
               },
               {
                  breakpoint: 768,
                  settings: {
                  slidesToShow: 2
                  }
               },
               {
                  breakpoint: 576,
                  settings: {
                  slidesToShow: 1
                  }
               }
               ]
            });
            });
         </script>
         <!-- End Cliens Section -->
         
         <!-- About Start -->
<section>
   <div class="container py-5">
      <div class="row g-5 align-items-center">
         <div class="col-lg-6 col-12">
            <div class="about-img text-center">
               <img class="img-fluid" src="./img/Aboutus1.png" alt="About Us">
            </div>
         </div>
         <div class="col-lg-6 col-12 order-1" data-aos="fade-left">
            <h1 class="mb-4">Apex Marketings - Best Digital Marketing Agency</h1>
            <p class="mb-4 text-justify">Discover Apex Marketings, your trusted digital marketing agency in Islamabad, Lahore, Karachi, and Rawalpindi. 
               With over seven years of experience, we specialize in SEO, Web Development, Social Media markeing. 
               Our team is known for delivering top-notch results, making us a favorite not just in Pakistan but globally.
               Choose Apex Marketings for strategies that make your brand stand out. 
               We're the local experts with a worldwide impact. 
               Let's take your business to the next level together.</p>
            <div class="row g-3">
               <div class="col-6">
                  <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Proven Expertise</h6>
                  <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Global Reach</h6>
               </div>
               <div class="col-6">
                  <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                  <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Result-Driven</h6>
               </div>
            </div>
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
   .btn-square{
   border-radius: 50%;
}
</style>
</section>
         <!-- About End -->
         <!-- Feature Start -->
<div class="container py-5">
   <div class="container py-5">
      <div class="row g-5 align-items-center">
      </div>
   </div>
</div>
         <div class=" py-5 why-choose feature ">
            <div class="container pt-5">
               <div class="row g-5 align-items-center">
               <div class="col-lg-6 wow fadeIn order-1 order-lg-1" data-wow-delay="0.5s" data-aos="fade-right">
                     <h1 class="text-white mb-4">Why Choose Apex Marketings</h1>
                     <p class="text-light mb-4 text-justify">At Apex Marketings, we specialize in scaling businesses with top-tier SEO, 
                        content marketing, and data-driven campaigns, having boosted both local and international clients to stellar growth. 
                        Trust us for impactful digital excellence that propels your brand to the forefront of success. To see the success of our clients <a href="../portfolio">Click here</a>
                     </p>
                     <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                           <i class="fa fa-check"></i>
                        </div>
                        <span>Strategic SEO boosts online visibility</span>
                     </div>
                     <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                           <i class="fa fa-check"></i>
                        </div>
                        <span>Effective Brand management builds trust</span>
                     </div>
                     <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                           <i class="fa fa-check"></i>
                        </div>
                        <span>Targeted Marketing ensures ROI</span>
                     </div>
                     <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                           <i class="fa fa-check"></i>
                        </div>
                        <span>Detailed analytics inform decision making</span>
                     </div>
                     <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                           <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                              <i class="fa fa-users fa-3x text-white"></i>
                              <div class="ms-3">
                                 <h2 class="text-white mb-0" data-toggle="counter-up">212</h2>
                                 <p class="text-white mb-0">Happy Clients</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                              <i class="fa fa-tasks fa-3x text-white"></i>
                              <div class="ms-3">
                                 <h2 class="text-white mb-0" data-toggle="counter-up">48</h2>
                                 <p class="text-white mb-0">Project Complete</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn order-0 order-lg-2 mb-sm-0" data-wow-delay="0.5s" data-aos="zoom-in">
                     <img class="img-fluid" src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/Aboutus5.png" alt="">
                  </div>
               </div>
            </div>
            <br>
         </div>



         <!-- Feature End -->
         <!-- Skills Section -->
      <div class="services-home-container align-items-center" data-aos="zoom-in" >
            <h1 class="text-blue mb-4 ">Our Services</h1>
            <p class="services-home-description">Apex Digital Marketing is a full-service agency, which means we provide everything you need to ignite growth for your business under one roof, keeping it simple for you.</p>
            <div class="services-home-items align-items-center">
               <div class="services-home-item" data-wow-delay="0.3s" >
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/homewebsite.png" alt="Website design">
                  <h2 class="services-home-subtitle">Website development</h2>
                  <p class="services-home-text">Custom built websites with modern designs and with full optimization.</p>
                  <a href="../services" class="services-home-btn">View Service</a>
               </div>
               <div class="services-home-item" data-wow-delay="0.3s">
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/homeseo.png" alt="Search Engine Optimization" >
                  <h2 class="services-home-subtitle">Search Engine Optimization</h2>
                  <p class="services-home-text">Increasing organic traffic by improving search engine performance.</p>
                  <a href="../services" class="services-home-btn">View Service</a>
               </div>
               <div class="services-home-item" data-wow-delay="0.3s" >
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/homesmm.png" alt="Google Advertising (PPC)">
                  <h2 class="services-home-subtitle">Social Media Marketing </h2>
                  <p class="services-home-text">Generate immediate traffic and revenue with highly-targeted advertisements.</p>
                  <a href="../services" class="services-home-btn">View Service</a>
               </div>
               <a href="../services" class="services-home-browse-btn">Browse All Services</a>
            </div>
         </div>
         <!-- End Services Section -->
         <!-- ======= Cta Section ======= -->
         <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
            <div class="container">
               <div class="row">
                  <div class="col-lg-9 text-center text-lg-start">
                     <br />
                     <h3>Book a Free Consultation </h3>
                     <!--<p>Get Started Today!</p>-->
                  </div>
                  <div class="col-lg-3 cta-btn-container text-center">>
                     <a class="cta-btn align-middle" href="../contact-us">Book Now</a>
                  </div>
               </div>
               </div>
            </div>
         </section>
         <!-- End Cta Section -->
         <!-- Apex Digital Marketing produces results -->
         <div class="services-home-container" data-aos="zoom-in" >
            <h1 class="services-home-title text-blue" >Apex Digital Marketing produces results </h1>
            <p class="services-home-description">Apex Marketing provides Expertise in Amplifying Success, Proven by Countless Satisfied Clients.</p>
            <div class="services-home-items">
               <div class="services-home-item" data-wow-delay="0.3s" >
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/Consult with an expert.png" alt="Website design">
                  <h2 class="services-home-subtitle">Consult with an expert</h2>
                  <p class="services-home-text text-justify">Get expert advice from Apex Marketings to meet your business goals. 
                     Our experienced team is ready to identify and unlock your brand's digital potential. 
                     Start a chat with us and let's fuel your business growth.</p>
               </div>
               <div class="services-home-item" data-wow-delay="0.3s">
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/Create_an_action_plan.png" alt="Search Engine Optimization">
                  <h2 class="services-home-subtitle">Create an action plan</h2>
                  <p class="services-home-text text-justify">Build a clear, focused business plan with Apex Marketing for your online marketing success. 
                     We’ll lay out simple steps after analyzing your business. 
                     Your journey to online success starts with a solid plan.</p>
               </div>
               <div class="services-home-item" data-wow-delay="0.3s" >
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/Apex growth.png" alt="Google Advertising (PPC)">
                  <h2 class="services-home-subtitle">Apex growth</h2>
                  <p class="services-home-text text-justify">Achieve remarkable growth with Apex Marketing’ smart digital strategies. 
                     Our targeted efforts will grow your visibility and customer base. 
                     Partner with us for growth that makes a real difference to your brand.</p>
               </div>
               <a href="../contact-us" class="services-home-browse-btn">Schedule Your Consultation</a>
            </div>
         </div>
         <!-- Apex Digital Marketing produces results -->
         <section>
            <!--WhatsApp Button-->
            <a class="whatsapp-button" href="https://wa.me/+923095273505" target="_blank">
            <i class="bx bxl-whatsapp"></i>
            </a>
         </section>
      <!-- End #main -->
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
      <?php
         include_once('./include/footer.php')
         ?>
               

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