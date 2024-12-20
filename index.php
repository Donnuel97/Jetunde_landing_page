<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HighFledge</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/hf.PNG" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top" style="z-index: 10;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0 position-absolute w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="index.html" class="navbar-brand">
                <h1 class="text-white m-0">High<span class="text-golden">Fledge</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#team" class="nav-link">Team</a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu bg-light">
                            <li><a href="feature.html" class="dropdown-item">Features</a></li>
                            <li><a href="team.html" class="dropdown-item">Our Team</a></li>
                            <li><a href="faq.html" class="dropdown-item">FAQs</a></li>
                            <li><a href="testimonial.html" class="dropdown-item">Testimonial</a></li>
                            <li><a href="404.html" class="dropdown-item">404 Page</a></li>
                        </ul>
                    </li>-->
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        
    </div>
</div>
<!-- Navbar End -->

<!-- Hero Start -->
<div class="container-fluid p-0 hero-header mb-5 position-relative" id="home">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-overlay"></div>
                <img src="img/7.jpg" class="d-block w-100 scale-img" alt="First Slide">
                <div class="carousel-caption">
                    <div class="glassmorphic p-5 rounded-4 shadow-lg custom-caption-left">
                        <h1 class="display-4 mb-4 animated fadeInLeft">
                            <span style="color: #F5F5DC;">Transform Your</span> <span style="color: orange;">Customer</span> <span style="color: #F5F5DC;">Experience</span>
                        </h1>
                        <p class="text-light mb-4 animated fadeInLeft">
                            Empowering Businesses with Innovative CX and Digital Transformation Solutions
                        </p>
                        <a href="" class="btn btn-light py-3 px-5 rounded-pill animated fadeInLeft" style="background-color: orange;">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-overlay"></div>
                <img src="img/8.jpg" class="d-block w-100 scale-img" alt="Second Slide">
                <div class="carousel-caption ">
                    <div class="glassmorphic p-5 rounded-4 shadow-lg custom-caption-left">
                        <h1 class="display-4 mb-4 animated fadeInRight">
                            <span style="color: #F5F5DC;">We Specialize in</span> <span style="color: orange;">CX</span><span style="color: #F5F5DC;">, Fintech Consulting</span>
                        </h1>
                        <p class="text-light mb-4 animated fadeInRight">
                            Helping companies enhance their digital transformation journey.
                        </p>
                        <a href="" class="btn btn-light py-3 px-5 rounded-pill animated fadeInRight" style="background-color: orange;">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-overlay"></div>
                <img src="img/4.jpg" class="d-block w-100 scale-img" alt="Third Slide">
                <div class="carousel-caption ">
                    <div class="glassmorphic p-5 rounded-4 shadow-lg custom-caption-left">
                        <h1 class="display-4 mb-4 animated zoomIn">
                            <span style="color: #F5F5DC;">Optimize Your Business</span> <span style="color: orange;">Processes</span>
                        </h1>
                        <p class="text-light mb-4 animated zoomIn" style="color: #161414;">
                            Experience the benefits of innovative digital solutions tailored for your needs.
                        </p>
                        <a href="" class="btn btn-light py-3 px-5 rounded-pill animated zoomIn" style="background-color: orange;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Hero End -->



<script>

    window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.sticky-top');
    navbar.classList.toggle('scrolled', window.scrollY > 50);
});
document.querySelector('.about-overlay').addEventListener('click', function () {
    alert('Play Video Feature Coming Soon!');
});

</script>


<!-- About Section Start -->
<div class="container-fluid py-5 about-section position-relative" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Image Section -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img position-relative">
                    <img class="img-fluid rounded-4 shadow" src="img/about-img.jpg" alt="About Us Image">
                    <div class="about-overlay rounded-4"></div>
                </div>
            </div>

            <!-- Carousel Section for Text Content -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <!-- Carousel Inner -->
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <h2 class="mb-3"style="color: orange;">About Us</h2>
                            <h1 class="mb-4" style="color: #36454F;">
                                We Make <span style="color: orange;">Growth</span> Your New Standard
                            </h1>
                            <p class="text-dark mb-4">
                                At our core, we empower businesses to unlock their potential through innovative digital 
                                solutions and transformative strategies. Specializing in customer experience (CX), 
                                fintech consulting, and business process optimization, we help companies enhance 
                                their digital transformation journey and drive sustainable growth.
                                Our vision is to be a trusted global partner in business transformation, inspiring growth, 
                                sustainability, and customer satisfaction. Guided by a mission to empower businesses with 
                                cutting-edge solutions, we prioritize unlocking value and building long-term success.
                            </p>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            
                            
                        
                            <div class="text-dark mb-4">
                                <h4 class="fw-bold" style="color: orange;">Our Vision</h4>
                                <p>
                                    To be the go-to global partner for business transformation and innovative solutions, 
                                    driving growth, sustainability, and exceptional customer satisfaction.
                                </p>
                        
                                <h4 class="fw-bold mt-4" style="color: orange;">Our Mission</h4>
                                <p>
                                    To empower businesses to unlock value and achieve their full potential through 
                                    bold, transformative innovation.
                                </p>
                                <h4 class="fw-bold mt-4" style="color: orange;">Our Approach</h4>
                                <p> 
                                    We seamlessly integrate technology, data, and human-centered design to create 
                                    tailored solutions that boost efficiency, elevate customer satisfaction, and accelerate 
                                    business outcomes.
                                </p>
                        
                               
                                
                            </div>
                        </div>

                     
                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <h2 class="mb-3" style="color: orange;">Our Values</h2>
                            <h1 class="mb-4" style="color: #36454F;">
                                Blending <span style="color: orange;">Technology</span> and Strategy to Drive Results
                            </h1>

                            <ul class="list-unstyled values-list">
                                <li><span class="custom-bullet"></span><strong style='color: orange;'>Client first, always:</strong> Our clients are at the heart of everything we do.</li>
                                <li><span class="custom-bullet"></span><strong style='color: orange;'>Innovate with purpose:</strong> We prioritize creativity and meaningful innovation.</li>
                                <li><span class="custom-bullet"></span><strong style='color: orange;'>Do the right thing right:</strong> Integrity and transparency guide us.</li>
                                <li><span class="custom-bullet"></span><strong style='color: orange;'>Quality, not volume:</strong> We prioritize quality in everything we do.</li>
                                <li><span class="custom-bullet"></span><strong style='color: orange;'>Reputation over Fame:</strong> We value character over short-lived recognition.</li>
                                <li><span class="custom-bullet"></span><strong style='color: orange;'>Respect for All:</strong> We treat every client, partner, and team member with respect.</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Buttons and Social Media Icons -->
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="#">Read More</a>
                    <div class="social-icons d-flex">
                        <a class="btn btn-facebook btn-square me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-twitter btn-square me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-instagram btn-square me-2" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-linkedin btn-square me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        
                    </div>
                </div>

                <!-- Carousel Controls - Below Social Media Links -->
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <button class="carousel-control-prev-modern" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button class="carousel-control-next-modern ms-3" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->







<!-- Service Start -->
<div class="container-fluid bg-light mt-5 py-5 position-relative service-section" id="service">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Service Header -->
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                <h2 class=" mb-3" style="color: orange;">Our Services</h2>
                <h1 class="mb-4 text-white">Unlock Your Business Potential with Innovative Solutions</h1>
                <p class="mb-4 text-white">
                    We provide a range of transformative services, helping you stay ahead in an evolving digital world.
                </p>
                <a class="btn btn-primary rounded-pill px-4" href="#">Explore More</a>
            </div>

            <!-- Services List -->
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="service-item">
                            <h5 class="mb-3">Customer Experience (CX) Solutions</h5>
                            <p>Revolutionize your customer interactions with seamless CX strategies.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h5 class="mb-3">Digital Transformation</h5>
                            <p>Transform your business processes with future-ready digital solutions.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h5 class="mb-3">Fintech Consulting</h5>
                            <p>Accelerate financial innovations with expert fintech consulting.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h5 class="mb-3">Project Management</h5>
                            <p>Deliver your projects on time and within scope with our expert management services.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h5 class="mb-3">Software Development Tech, Clients & Managed Services</h5>
                            <p>Empower your operations with tailored software development and managed services.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h5 class="mb-3">ISO 9001:2015 Certification Consultancy</h5>
                            <p>At Highfledge Inc., we specialize in simplifying ISO 9001:2015 certification, 
                                helping businesses implement Quality Management Systems (QMS) 
                                that boost efficiency, enhance customer satisfaction, and support continuous improvement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5 position-relative overflow-hidden" id="features">
        <div class="container pt-5">
            <div class="row g-5">
                <!-- Left Content -->
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <h2 class="mb-3 " style="color:#FFFFF0;">Why Choose Us</h2>
                    <h1 class="text-dark mb-4">Proven Expertise in Fintech, CX Automation, and Innovation</h1>
                    <p class="text-light mb-4">
                        With years of hands-on experience, we combine strategic insight with seamless execution across fintech 
                        and customer experience (CX) automation. Our innovative solutions don’t just sound good—they deliver real, 
                        measurable results that drive your business forward.
                    </p>
                   
                    <!-- Stats Section with Animations
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="stat-box d-flex rounded p-3">
                                <i class="fa fa-users fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0 counter" data-count="100">100%</h2>
                                    <p class="text-white mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="stat-box d-flex rounded p-3">
                                <i class="fa fa-check fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0 counter" data-count="100">100%</h2>
                                    <p class="text-white mb-0">Projects Completed</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- Right Image Section -->
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeInRight" data-wow-delay="0.5s">
                    <img class="img-fluid feature-img" src="img/feature.png" alt="Fintech Solution">
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
<script>
    // Counter Animation on Scroll
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter');
    const speed = 100; // Adjust for faster or slower counting

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;

            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 30); // Adjust the interval for smooth animation
            } else {
                counter.innerText = target;
            }
        };

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.disconnect(); // Stop counting once done
                    }
                });
            }, 
            { threshold: 1 }
        );

        observer.observe(counter);
    });
});

</script>

<!--
    Case Start
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div>
                <h1 class="mb-4">Explore Our Recent AI Case Studies</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Robotic Automation</small>
                            <h5 class="lh-base text-dark mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Machine learning</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Case End -->


    <!-- FAQs Start
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
                <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How to build a website?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long will it take to get a new website?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you only create HTML websites?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Will my website be mobile-friendly?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    I’m on a strict budget. Do you have any low cost options?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    I’m on a strict budget. Do you have any low cost options?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    FAQs Start -->
    

    <!-- Team Start -->
    <div class="container-fluid py-5 position-relative" id="team" style="background-image: url('img/9.jpg'); background-attachment: fixed; background-size: cover; background-position: center;">
        
        <div class="overlay"></div>
        
        <div class="container py-5 position-relative">
            <div class="row g-5 align-items-center">
               
                <div class="col-lg-5 wow fadeIn glassmorphic-content" data-wow-delay="0.1s">
                    <h2 class="mb-3" style="color: orange;">Our Team</h2>
                    <h1 class="mb-4">Our Team Of Experienced Members</h1>
                    <p class="mb-4">Brings a wealth of expertise across technology, strategy, and design, united by a commitment to delivering transformative results...</p>
                </div>
                <div class="col-lg-7">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->




    <!-- Testimonial Start 
    <div class="container-xxl py-5" id="testimonial">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <h2 class=" mb-3 " style="color: rgb(142, 235, 3);">Testimonial</h2>
                    <h1 class="mb-4">What Say Our Clients!</h1>
                    <p class="mb-4">Discover how our clients have transformed their 
                        businesses with our innovative solutions. 
                        From enhanced efficiency to elevated customer experiences, 
                        hear directly from those who have partnered with us to achieve remarkable results!</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Testimonial End -->
   
<!-- Contact Section Start -->
<div class="container-fluid contact-section position-relative py-5" id="contact">
    <div class="parallax-bg" style="background-image: url('img/6.jpg');"></div>
    <div class="overlay"></div>

    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white mb-5">
                <h2 class="text-golden">Get In Touch</h2>
                <h1 class="display-5 fw-bold mb-4">We'd Love To Hear From You!</h1>
                <p class="mb-4">
                    Have a question or want to collaborate? Fill out the form below, and we'll get back to you shortly. 
                    Your journey towards excellence starts with a simple hello.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Contact Form -->
                <form id="contactForm" class="p-5 rounded-4 shadow-lg transparent-form">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" name="name" placeholder="Your Name" required>
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control form-control-lg" name="email" placeholder="Your Email" required>
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control form-control-lg" name="subject" placeholder="Subject" required>
                        </div>

                        <div class="col-12">
                            <textarea class="form-control form-control-lg" name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <button class="btn btn-primary btn-lg rounded-pill px-5 mt-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
                
                <!-- Loading Spinner -->
                <div id="loadingSpinner" class="text-center my-3" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>

                <!-- Toast Notification -->
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="submitToast" class="toast align-items-center text-bg-success border-0"  style="background-color: green;" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body" id="toastMessage">
                                Message sent successfully!
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->

<!-- JavaScript for AJAX submission, loading spinner, and toast notification -->
<script>
    
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Show loading spinner
    document.getElementById('loadingSpinner').style.display = 'block';

    // Collect form data
    const formData = new FormData(this);

    // Send data to the server via AJAX
    fetch('submit_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(responseText => {
        // Hide loading spinner
        document.getElementById('loadingSpinner').style.display = 'none';

        // Set toast message based on responseText
        const toastMessage = document.getElementById('toastMessage');
        if (responseText.includes("Message sent successfully")) {
            toastMessage.innerText = "Message sent successfully!";
        } else if (responseText.includes("email failed to send")) {
            toastMessage.innerText = "Saved to database, but email failed to send.";
        } else {
            toastMessage.innerText = "Failed to save message. Please try again.";
        }

        // Show the toast
        const toast = new bootstrap.Toast(document.getElementById('submitToast'));
        toast.show();

        // Reset form fields if successful
        if (responseText.includes("Message sent successfully")) {
            document.getElementById('contactForm').reset();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('loadingSpinner').style.display = 'none';
        alert("An error occurred. Please try again.");
    });
});
</script>

    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">Be the first to know.</h1>
                    
                    <!-- Newsletter Signup Form -->
                    <form id="newsletterForm" action="submit_newsletter.php" method="POST">
                        <div class="position-relative w-100 mt-3 mb-2">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                name="newsletter_email" placeholder="Enter Your Email" required style="height: 48px;">
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                                <i class="fa fa-paper-plane text-primary fs-4"></i>
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

<script>
    document.getElementById('newsletterForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission from reloading the page

    const formData = new FormData(this);

    fetch('submit_newsletter.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(responseText => {
        alert(responseText); // Display response message
        this.reset(); // Clear form input
    })
    .catch(error => console.error('Error:', error));
});

</script>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-white m-0">High<span class="text-golden">Fledge</span></h1>
                    </a>
                    <p class="mb-0">At High<span class="text-golden">Fledge</span>, we empower businesses through innovative 
                        digital solutions, specializing in customer experience (CX), fintech consulting, 
                        and business process optimization. Our dedicated team combines strategic insight 
                        with cutting-edge technology 
                        to drive transformation, growth, and sustainability.</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>6438 Byrnepark Drive, Burnaby, British Columbia, Canada. </p>
                    <p><i class="fa fa-phone-alt me-3"></i>(778)706-8168</p>
                    <p><i class="fa fa-envelope me-3"></i> info@highfledge.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="#about">About Us</a>
                    <a class="btn btn-link" href="#contact">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="#team">Team</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="#service">Customer Experience (CX) Solutions</a>
                    <a class="btn btn-link" href="#service">Digital Transformation</a>
                    <a class="btn btn-link" href="#service">Fintech Consulting</a>
                    <a class="btn btn-link" href="#service">Project Management</a>
                    <a class="btn btn-link" href="#service">Software Development Tech, Clients & Managed Services</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>