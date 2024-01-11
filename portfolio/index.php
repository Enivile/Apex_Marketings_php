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
      <link rel="stylesheet" href="style.css">
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
         include_once('../include/header_portfolio.php')
      ?>
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                  <h1>Our Portfolio</h1>
                  <h2>Browse our portfolio to see the success stories we've crafted across the digital realm</h2>
                  <div class="d-flex justify-content-center justify-content-lg-start">
                     <a href="../contact-us" class="btn-get-started">Get Started</a>
                  </div>
               </div>
               <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/img/projects.png" class="img-fluid animated" alt="">
               </div>
            </div>
         </div>
      </section>
      <!-- End Hero -->
         <br>
         <br>
         <!------------------------------ Marketing ------------------------------->


<section>
   <div class="container py-5">
      <div class="row g-5 align-items-center">
         <div class="col-lg-6">
            <div class="row marketing-image">
               <img src="../assets/img/portfolio/Marketing/1.png" class="marketing-image">
            </div>
            <div class="row">
               <div class="col-6">
                  <img src="../assets/img/portfolio/Marketing/1.png" class="marketing-image">
               </div>
               <div class="col-6">
                  <img src="../assets/img/portfolio/Marketing/1.png" class="marketing-image">
               </div>
            </div>
            <div class="row">
               
            </div>
         </div>
         <div class="col-lg-6 col-12 order-1" data-aos="fade-left">
            <h1 class="mb-4">Custom Marketing Strategies</h1>
            <p class="mb-4 text-justify">At <strong>Apex Marketings</strong>, our approach to digital marketing is based on the 
               belief that each business is one of a kind. Our <strong>custom marketing</strong> strategies are crafted 
               to align with the specific needs and goals of your brand.Through comprehensive business analysis, 
               strategic goal setting, and audience profiling, we ensure that our approach integrates 
               flawlessly, driving results that are tailored to your unique needs. We prioritize data-driven decision-making, 
               enabling us to adapt and optimize in real-time, ultimately delivering increased ROI, heightened brand 
               visibility, and measurable success.</p>
            
               <h1 class="mb-4">Proven Results Through Social Media Marketing</h1>
               <p class="mb-4 text-justify">Our commitment to customized marketing extends to our proven success in social 
                  media marketing. As part of our portfolio, we proudly present tangible results through compelling 
                  case studies and screenshots showcasing the sales generated directly from our social media campaigns. 
                  These real-world examples demonstrate not just the theoretical effectiveness of our strategies but the 
                  tangible impact on your bottom line. Partner with [Your Agency Name] for personalized marketing that not 
                  only stands out in the digital landscape but also consistently translates into concrete business success.</p>
            
            <div class="d-flex flex-wrap align-items-center mt-4">
            <div id="counter" data-aos="count1"></div>
            
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
         

         <!-- <div class="marketing container-fluid">
            <h2 class="mx-auto text-center">Our Marketing Success across Indusrties</h2>
            <br>
            <br>
            <div class="row">
               <div class="col-md-4">
                  <div class="card" href="apexmarketings.com">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/Marketing/2.png" alt="Image" class="card-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">UAE Transportation / WORDPRESS / B2C</p>
                     <h2 class="card-title">AR Transports</h2>
                     <hr class="card-divider">
                     <a href="https://artransports.com/" class="card-link">Read More</a>  
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/Marketing/3.png" alt="Image" class="card-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">Altr Group</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/Marketing/1.png" alt="Image" class="card-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">EDU Pak Consultant</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
            </div>
         </div>-->


         <!------------------------------ SEO -------------------------------> 
         <div class="SEO container-fluid">
            <h2 class="mx-auto text-center">Our Marketing Success across Indusrties</h2>
            <br>
            <br>
            <div class="row">
               <div class="col-md-4">
                  <div class="card" href="apexmarketings.com">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/SEO/1.png" alt="Image" class="card-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">UAE Transportation / WORDPRESS / B2C</p>
                     <h2 class="card-title">AR Transports</h2>
                     <hr class="card-divider">
                     <a href="https://artransports.com/" class="card-link">Read More</a>  
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/SEO/2.png" alt="Image" class="card-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">Altr Group</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/SEO/3.png" alt="Image" class="card-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">EDU Pak Consultant</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
            </div>
         </div>

         
         <!------------------------------ Websites ------------------------------->    
         <div class="websites container-fluid">
            <h2 class="mx-auto text-center">Our Website Success across Indusrties</h2>
            <br>
            <br>
            <div class="row">
               <div class="col-md-4">
                  <div class="card" href="apexmarketings.com">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/ARTransportsCover.png" alt="Image" class="card-image">
                        <img src="../assets/img/portfolio/ARTransports.png" alt="Website" class="card-website-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">UAE Transportation / WORDPRESS / B2C</p>
                     <h2 class="card-title">AR Transports</h2>
                     <hr class="card-divider">
                     <a href="https://artransports.com/" class="card-link">Read More</a>  
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/AltrGroupCover.png" alt="Image" class="card-image">
                        <img src="../assets/img/portfolio/AltrGroup.png" alt="Website" class="card-website-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">Altr Group</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/EDUCover.png" alt="Image" class="card-image">
                        <img src="../assets/img/portfolio/EDU.png" alt="Website" class="card-website-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">EDU Pak Consultant</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="card" href="apexmarketings.com">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/SZKCover.png" alt="Image" class="card-image">
                        <img src="../assets/img/portfolio/SZK.png" alt="Website" class="card-website-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">Clothing Manufacturing / WORDPRESS / B2B</p>
                     <h2 class="card-title">Altr Group</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/get_started_today.jpg" alt="Image" class="card-image">
                        <img src="../assets/img/portfolio/WebsiteSS.png" alt="Website" class="card-website-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">Digital Remedy</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/get_started_today.jpg" alt="Image" class="card-image">
                        <img src="../assets/img/portfolio/WebsiteSS.png" alt="Website" class="card-website-image">
                     </div>
                     <div class="card-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">Digital Remedy</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
            </div>
         </div>
         <!------------------------------ Designing ------------------------------->
         <div class="designing container-fluid">
            <h2 class="mx-auto text-center">Our Designing Success across Indusrties</h2>
            <br>
            <br>
            <div class="row">
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/Design/ADAM.png" alt="Image" class="card-image">
                     </div>
                     <div class="dcard-label">2023</div>
                     <br>
                     <p class="card-category">UAE Transportation / WORDPRESS / B2C</p>
                     <h2 class="card-title">AR Transports</h2>
                     <hr class="card-divider">
                     <a href="https://artransports.com/" class="card-link">Read More</a>  
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio//Design/ALTR.png" alt="Image" class="card-image">
                     </div>
                     <div class="dcard-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">Altr Group</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio//Design/EDU.png" alt="Image" class="card-image">
                     </div>
                     <div class="dcard-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">EDU Pak Consultant</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/Design/MEZBAAN.png" alt="Image" class="card-image">
                     </div>
                     <div class="dcard-label">2023</div>
                     <br>
                     <p class="card-category">Clothing Manufacturing / WORDPRESS / B2B</p>
                     <h2 class="card-title">Altr Group</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/Design/SALON.png" alt="Image" class="card-image">
                     </div>
                     <div class="dcard-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">Digital Remedy</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-image-wrapper">
                        <img src="../assets/img/portfolio/Design/SZK.jpg" alt="Image" class="card-image">
                     </div>
                     <div class="dcard-label">2023</div>
                     <br>
                     <p class="card-category">MARKETING & ADVERTISING / WORDPRESS / B2B</p>
                     <h2 class="card-title">Digital Remedy</h2>
                     <hr class="card-divider">
                     <a href="#" class="card-link">Read More</a>
                  </div>
               </div>
            </div>
         </div>


<style>
   .portfolio-middle-text {
      color: white; /* Assuming you want the text to be white */
      background-color: rgba(0, 0, 0, 0.5); /* This is a semi-transparent black background */
      border-radius: 10px; /* This will give the background rounded corners */
      padding: 10px; /* Add padding to ensure the background extends around the text */
      display: inline-block; /* This will make the div only as wide as its content */
   }
</style>
<!-- Projects End -->
      <!-- FAQs Start -->
      <div class="container-fluid" >
         <div class="container py-5"  data-aos="zoom-in" >
            <div class="mx-auto text-center" data-wow-delay="0.1s" style="max-width: 500px;">
               <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
               <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>


         <div class="row">
            <div class="col-md-6">
               <div class="accordion w-100" id="basicAccordion">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" id="faq1" onClick="faqclass('faqcontent1')">
                        How to build a website?
                        </button>
                     </h2>
                     <div id="faqcontent1" class="collapse">
                        <div class="accordion-body custom-faqbody" style="padding: 4px 35px;">
                        Building a website involves choosing a domain, selecting a hosting platform, designing the layout, and creating content that reflects your brand.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" onClick="faqclass('faqcontent2')">
                        How long will it take to get a new website?
                        </button>
                     </h2>
                     <div id="faqcontent2" class="accordion-collapse collapse">
                        <div class="accordion-body" style="padding: 4px 35px;">
                        The time to develop a new website can vary, typically ranging from a few weeks to a few months, depending on complexity and design specifics.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" onClick="faqclass('faqcontent3')">
                        Do you only create HTML websites?
                        </button>
                     </h2>
                     <div id="faqcontent3" class="accordion-collapse collapse">
                        <div class="accordion-body" style="padding: 4px 35px;">
                        No, we create websites using a variety of platforms and technologies, including HTML, WordPress, and other content management systems to meet diverse needs.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" onClick="faqclass('faqcontent4')">
                        Will my website be mobile-friendly?
                        </button>
                     </h2>
                     <div id="faqcontent4" class="accordion-collapse collapse">
                        <div class="accordion-body" style="padding: 4px 35px;">
                        Yes, all our websites are designed with a responsive framework to ensure they look great and function well on both mobile devices and desktops.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-6">
               <div class="accordion w-100" id="basicAccordion">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" onClick="faqclass('faqcontent5')">
                        Will you maintain my site for me?
                        </button>
                     </h2>
                     <div id="faqcontent5" class="collapse">
                        <div class="accordion-body custom-faqbody" style="padding: 4px 35px;">
                        We offer website maintenance services as an additional support to keep your site updated, secure, and functioning smoothly after launch.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" onClick="faqclass('faqcontent6')">
                        I’m on a strict budget. Do you have any low cost options?
                        </button>
                     </h2>
                     <div id="faqcontent6" class="accordion-collapse collapse">
                        <div class="accordion-body" style="padding: 4px 35px;">
                        We provide a range of solutions and can tailor our services to fit your budget, ensuring you get a quality website without overspending.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" onClick="faqclass('faqcontent7')">
                        Can Apex Marketings help improve my website's search engine ranking?
                        </button>
                     </h2>
                     <div id="faqcontent7" class="accordion-collapse collapse">
                        <div class="accordion-body" style="padding: 4px 35px;">
                        Absolutely, our SEO experts specialize in optimizing your website's content and structure to improve visibility and ranking on search engines like Google.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" onClick="faqclass('faqcontent8')">
                        Is social media management part of your digital marketing services?
                        </button>
                     </h2>
                     <div id="faqcontent8" class="accordion-collapse collapse">
                        <div class="accordion-body" style="padding: 4px 35px;">
                        Yes, Apex Marketings offers comprehensive social media management to enhance your brand's online presence and engage with your audience effectively.
                        </div>
                     </div>
                  </div>
               </div>
            </div>


         </div>





         












            </div>
         </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <!-- FAQs Start -->
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
      <script src="../lib/wow/wow.min.js"></script>
      <script src="../lib/easing/easing.min.js"></script>
      <script src="../lib/waypoints/waypoints.min.js"></script>
      <script src="../lib/counterup/counterup.min.js"></script>
      <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
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
      <script src="script.js"></script>
   </body>
</html>