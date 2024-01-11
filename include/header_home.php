<header id="header" class="fixed-top animate__animated animate__slideInLeft">
        <div class="container d-flex align-items-center">


            <!-- <img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/icon.png" alt="Apex Marketing Icon"/> -->
            <h1 class="logo me-auto"><a href="../home"><img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/logo-apex.png" alt="Apex Marketing Icon" /> </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="https://apex-assets-2114.s3.ap-south-1.amazonaws.com/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="">Home</a></li>
                    <!--<li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>-->
                    <li><a class="nav-link scrollto" href="./about-us">About</a></li>
                    <!--     <li class="dropdown">
                        <a href="../services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../services/#webdev">Web Development</a></li>
                            <li class="dropdown">
                                <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li> 
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Social Media Marketing</a></li>
                            <li><a href="#">View More</a></li>
                        </ul>
                    </li> -->
                    <li><a class="nav-link scrollto" href="./services">Services</a></li>
                    <li><a class="nav-link scrollto" href="./portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="./reviews">Reviews</a></li>
                    <li><a class="nav-link scrollto" href="./contact-us">Contact</a></li>
                
                    <li><a class="getstarted scrollto" href="./contact-us">Get Started</a></li>
                </ul>
<div id="mobile-navbar">
    <div class="menu-toggle" onclick="toggleMobileMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul class="mobile-menu" style="padding: 78px 27px;">
        <li><a href="#">Home</a></li>
        <li><a href="./about-us">About</a></li>
        <li><a href="./services">Services</a></li>
        <li><a href="./portfolio">Portfolio</a></li>
        <li><a href="./reviews">Reviews</a></li>
        <li><a href="./contact-us">Contact</a></li>
        <li><a href="./contact-us">Get Started</a></li>
    </ul>
</div>
<style>
    /* Mobile Navbar Styles */
#mobile-navbar {

}

.menu-toggle {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 25px;
    height: 18px;
    cursor: pointer;
    position: fixed;  /* Make it fixed so it's always on top */
    top: 40px;           /* Position it right at the top */
    right: 30px;         /* Position it on the right side */
    z-index: 1000;    /* Ensure it's on top of other elements */
}

.menu-toggle span {
    display: block;
    height: 3px;
    background: #fff;
}

.mobile-menu {
    position: absolute;
    width: 100vw;
    height: 100vh;
    right: -422px;
    box-shadow: 0 0 10px #85888C;
    margin: -50px 0 0 -50px;
    padding: 50px;
    
    background-color: #303750eb;
    -webkit-font-smoothing: antialiased;
    transform-origin: 0% 0%;
    transform: translate(-100%, 0);
    transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

.mobile-menu li a {
    display: block;
    padding: 10px 20px;
    color: #fff;
    text-decoration: none;
}

.mobile-menu li a:hover {
    background: #47b2e4;
}

/* Display mobile navbar only on small devices */
@media (min-width: 992px) {
    #mobile-navbar {
        display: none;
    }
}

#mobile-navbar {
    position: fixed;
     /* Adjust this value to move the navbar left or right */
}


</style>
            </nav><!-- .navbar -->

<script>
    function toggleMobileMenu() {
    const menu = document.querySelector('.mobile-menu');
    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }
}


</script>

        </div>
    </header><!-- End Header -->

    <div class="scrollbar-container">
        <div class="scrollbar"></div>
    </div>
