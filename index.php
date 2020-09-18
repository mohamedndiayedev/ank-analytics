<?php
session_start();
include('database/dbconfig.php');
include('includes/header.php');
?>


<!-- The #page-top ID is part of the scrolling feature -
the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target="#st-nav">

<!-- Navigation Menu
================================================== -->
<header>
    <div id="st-logo">
        <a href="#0">
            <img src="assets/images/logo-normales.png" alt="Logo">
        </a>
    </div>
</header>

<div id="st-nav">
    <a href="#0" class="st-nav-trigger">
        Menu<span></span>
    </a>
    <style>
        li {
            font-size: 20px;
        }
    </style>

    <nav id="st-main-nav">
        <ul>
            <li>
                <a class="page-scroll hvr-underline-from-center" href="#page-top">Home</a>
            </li>
            <li>
                <a class="page-scroll hvr-underline-from-center" href="#our-work">Our Job</a>
            </li>
            <li>
                <a class="page-scroll hvr-underline-from-center" href="#about">About Us</a>
            </li>
            <li>
                <a class="page-scroll hvr-underline-from-center" href="#services">Services</a>
            </li>
            <li>
                <a class="page-scroll hvr-underline-from-center" href="#skills">Our Skills</a>
            </li>
            <li>
                <a class="page-scroll hvr-underline-from-center" href="#contact">Contact Us</a>
            </li>
        </ul>
    </nav>
</div>
<!-- /#st-nav -->

<!-- Hero Section
================================================== -->
<section id="hero" class="hero-section-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div id="particles-js"></div>

                <div class="headlines-wrapper">
                    <span class="skilltechtypetext">
                        <span class="typed-cursor">|</span>
                    </span>
                </div>
                <!-- /.headlines-wrapper -->
                <h3 class="first-headline">What we can do for you?</h3>
                <h3 class="second-headline">Feel <span class="primary">FREE</span> to submit us your project, Our <span class="primary">MISSION</span> is your total satisfaction.</h3>
            </div>
        </div>
    </div>
</section>
<style>
    span {
        font-weight: bold;

    }
</style>
<!-- /.hero-section-2 -->

<!-- Image Section
================================================== -->
<section id="big-image" class="image-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="wow fadeInLeft animated"><span>Ready</span> for your next awesome web based or Mobile Application?</h3>
                <h4 class="wow fadeInLeft animated"><span class="primary">ANK ANALYTICS</span> provides you all the consultancy you need to grow up your business online!</h4>
                <button class="btn btn-default btn-lg wow fadeInRight hvr-sweep-to-right primary-2-back animated">Submit us your project now!</button>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.image section -->

<!-- Our Work Section
================================================== -->
<section id="our-work" class="our-work-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 see-work">
                <h2 class="wow fadeInLeft animated">Apllications we develop for your needs</h2>
            </div>
            <div class="col-md-12 new-style">
                <p class="wow fadeInLeft animated"><a class="secondary">Here is a summary of what we do</a></p>
            </div>
            <div class="col-md-12 portfolio-images">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="portfolio-img first">
                        <img class="img-responsive" src="assets/images/dash.png"
                             alt="porftofilio thumbnail">
                        <div class="sweep-left image-gradient"></div>
                        <div class="sweep-from-center">
                            <div class="sweep-layer">
                                <div class="sweep-content">
                                    <div class="sweep-icon">
                                        <a href="portfolio-item-dark.php">
                                            <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <h3><a href="portfolio-item-dark.php">Metrics & Performance Dashboard</a></h3>
                                    <p>We develop any type of monitoring dashboard you might need to remote control your online business activities. Just as CRMs (Customer relationship management) Systems,
                                        we will guide you to choose efficiently all functionnalities you need according to your business platform.
                                
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sweep-right image-gradient"></div>
                    </div>
                    <!-- /.portfolio-img -->
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="portfolio-img second">
                        <img class="img-responsive" src="assets/images/portfolio-thumbnail-02-darks.png"
                             alt="porftofilio thumbnail">
                        <div class="sweep-left image-gradient"></div>
                        <div class="sweep-from-center">
                            <div class="sweep-layer">
                                <div class="sweep-content">
                                    <div class="sweep-icon">
                                        <a href="portfolio-item-dark.php">
                                            <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <h3><a href="portfolio-item-dark.php">Scalable Web Apllication</a></h3>
                                    <p>We help organisations reach new customers and let them know about the organization and the services provided by it. Web applications can play a crucial role in the branding process. 
                                        With ANK ANALYTICS, we help you to maintain a proper communication channel between potential customers and your business organization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sweep-right image-gradient"></div>
                    </div>
                    <!-- /.portfolio-img -->
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="portfolio-img third">
                        <img class="img-responsive" src="assets/images/portfolio-thumbnail-03-darka.png"
                             alt="porftofilio thumbnail">
                        <div class="sweep-left image-gradient"></div>
                        <div class="sweep-from-center">
                            <div class="sweep-layer">
                                <div class="sweep-content">
                                    <div class="sweep-icon">
                                        <a href="portfolio-item-dark.php">
                                            <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <h3><a href="portfolio-item-dark.php">Get connected to a Mobile App</a></h3>
                                    <p>If you’re a publisher or online business owner and want to be relevant in today’s smartphone-driven world, then you probably need to turn your website into an app.

“But wait,” you might protest, “I already have a responsive website!” Great! However, mobile apps are growing at an astounding rate, and not having one is a surefire way to fall behind the competition. ANK ANALYTICS walk through the understanding 
                                    of theses challenges and helps you out to take the right decision for your organization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sweep-right image-gradient"></div>
                    </div>
                    <!-- /.portfolio-img -->
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="portfolio-img fourth">
                        <img class="img-responsive" src="assets/images/iot.jpeg"
                             alt="porftofilio thumbnail">
                        <div class="sweep-left image-gradient"></div>
                        <div class="sweep-from-center">
                            <div class="sweep-layer">
                                <div class="sweep-content">
                                    <div class="sweep-icon">
                                        <a href="portfolio-item-dark.php">
                                            <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <h3><a href="portfolio-item-dark.php">We provides IoT Solutions</a></h3>
                                    <p>We identify for our client the new opportunities offered by connected objects, which can generate new sources of income and optimize their activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sweep-right image-gradient"></div>
                    </div>
                    <!-- /.portfolio-img -->
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.our-work-section -->

<!-- About Us Section
================================================== -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-text">
                    <h2 class="wow fadeIn animated"><span>About</span> ANK Analytics Company</h2>
                    <p class="wow fadeIn animated">We support prestigious groups, from identifying the opportunities offered by the Internet to the industrialization of digital solutions, 
                        including the definition of roadmaps, the validation of concept and the implementation of a strategy to support change and scalable online business.

                    </p>
                    <ul class="about-icons list-inline">
                        <li class="wow fadeIn animated">
                            <div class="icon"><i class="material-icons primary">beenhere</i></div>
                            <div class="text">Rapid Development & Reliable Products</div>
                        </li>
                        <li class="wow fadeIn animated">
                            <div class="icon"><i class="material-icons primary">comment</i></div>
                            <div class="text">24 Hour Support for any question</div>
                        </li>
                        <li class="wow fadeIn animated">
                            <div class="icon"><i class="material-icons primary">insert_chart</i></div>
                            <div class="text">We Get the Results based on your requirements</div>
                        </li>
                    </ul>
                    <!-- /.about-icons -->

                </div>
                <div class="about-images">
                    <div class="mockup image-left">
                        <img class="wow fadeInLeft animated" src="assets/images/momo.png" alt="">
                    </div>
                    <!-- /.image-left -->

                    <div class="mockup image-center">
                        <img class="wow slideInUp animated" src="assets/images/ank.png" alt="ipad">
                    </div>
                    <!-- /.image-center -->

                    <div class="mockup image-right">
                        <img class="wow fadeInRight animated" src="assets/images/jaiteh.png" alt="ipad">
                    </div>
                    <!-- /.image-right -->
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<!-- /.quote-section -->

<!-- Services Section
================================================== -->
<section id="services" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 service-headline">
                <h2 class="wow fadeIn animated">What We do, We do <span class="primary">Best!</span></h2>
                <p class="wow fadeIn animated"><stroong><span class="primary">ANK ANALYTICS</span></strong> covers a wide range of business sectors. Our achievements combine the expertise of its consultants with the wealth of applications made possible by different technologies
                    of the Internet.</p>
            </div>
            <div class="col-md-12 service-content">
                <div class="left">
                    <div class="service wow fadeIn animated">
                        <div class="text">
                            <a href="service-item-dark.php" class="primary-hover">Graphic Design</a>
                            <p>We take care of your visual communication & make sure you reach the right customer base.</p>
                        </div>
                        <div class="icons">
                            <i class="material-icons primary">create</i>
                        </div>
                    </div>
                    <div class="service wow fadeIn animated">
                        <div class="text">
                            <a href="service-item-dark.php" class="primary-hover">Web Design</a>
                            <p>We encompasse many different skills and disciplines in the production and maintenance of websites.</p>
                        </div>
                        <div class="icons">
                            <i class="material-icons primary">screen_share</i>
                        </div>
                    </div>
                    <div class="service wow fadeIn animated">
                        <div class="text">
                            <a href="service-item-dark.php" class="primary-hover">Social Media</a>
                            <p>We help you to talk directly to customers and build relationships over time, rather than asking for a sale upfront. 
                            More than 40% of digital consumers use social networks to research new brands or products.</p>
                        </div>
                        <div class="icons">
                            <i class="material-icons primary">devices</i>
                        </div>
                    </div>
                </div>
                <div class="service-image">
                    <img src="assets/images/iphone-services.png" alt="iphone">
                </div>
                <div class="right">
                    <div class="service-2 wow fadeIn animated">
                        <div class="icons">
                            <i class="material-icons primary">devices</i>
                        </div>
                        <div class="text">
                            <a href="service-item-dark.php" class="primary-hover">Enterprise Resource Planning</a>
                            <p>We help your organization to use a system of integrated applications to manage the business and automate many back office functions related to technology, services and human resources.</p>
                        </div>
                    </div>
                    <div class="service-2 wow fadeIn animated">
                        <div class="icons">
                            <i class="material-icons primary">mic</i>
                        </div>
                        <div class="text">
                            <a href="service-item-dark.php" class="primary-hover">Marketing</a>
                            <p>We create, communicate, deliver, and exchange offerings that have value to your customers.</p>
                        </div>
                    </div>
                    <div class="service-2 wow fadeIn animated">
                        <div class="icons">
                            <i class="material-icons primary">play_circle_filled</i>
                        </div>
                        <div class="text">
                            <a href="service-item-dark.php" class="primary-hover">Video Production</a>
                            <p>We showcase all the value proposition of your business to your customer base.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /.service-section -->

<!-- Call To Action Section
================================================== -->
<!-- /.call-to-section -->

<!-- Skills Section
================================================== -->
<section id="skills" class="skills-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="skills-headline">
                    <h4 class="wow fadeIn animated">Let <span class="primary">Our Skills</span> speak for Us</h4>
                    <p class="wow fadeIn animated">ANK ANALYTICS - We provides IT Soltions that suit your needs.</p>
                </div>
            </div>
            <div class="col-md-12 progress-bar-wrapper">
                <div class="progress-bars">
                    <div class="bar-wrapper">
                        <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">Adobe creative cloud</div>
                        <div class="col-md-8 col-sm-8 col-xs-7">
                            <div class="progressBar skill-bar-gradient wow animated first-bar"></div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <span class="counter">75</span><span>%</span>
                        </div>
                    </div>
                    <div class="bar-wrapper">
                        <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">WORDPRESS</div>
                        <div class="col-md-8 col-sm-8 col-xs-7">
                            <div class="progressBar skill-bar-gradient wow animated second-bar"></div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <span class="counter">85</span><span>%</span>
                        </div>
                    </div>
                    <div class="bar-wrapper">
                        <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">GRAPHIC DESIGN</div>
                        <div class="col-md-8 col-sm-8 col-xs-7">
                            <div class="progressBar skill-bar-gradient wow animated second-bar"></div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <span class="counter">85</span><span>%</span>
                        </div>
                    </div>
                    <div class="bar-wrapper">
                        <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">Laravel</div>
                        <div class="col-md-8 col-sm-8 col-xs-7">
                            <div class="progressBar skill-bar-gradient wow animated second-bar"></div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <span class="counter">85</span><span>%</span>
                        </div>
                    </div>

                    <div class="bar-wrapper">
                        <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">MEAN STACK</div>
                        <div class="col-md-8 col-sm-8 col-xs-7">
                            <div class="progressBar skill-bar-gradient wow animated second-bar"></div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <span class="counter">85</span><span>%</span>
                        </div>
                    </div>
                    <div class="bar-wrapper">
                        <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">MERN STACK</div>
                        <div class="col-md-8 col-sm-8 col-xs-7">
                            <div class="progressBar skill-bar-gradient wow animated second-bar"></div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <span class="counter">85</span><span>%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.skills-section -->

<!-- Contact Section
================================================== -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-headline">
                    <h3 class="wow fadeIn animated">Let's <span>Connect</span></h3>
                    <p class="wow fadeIn animated">Do you have any projects in mind? Just drop your us a clear description of it.</p>
                </div>

                <div class="contact-content">
                    <div class="contact-info">
                        <p class="contact-header">Our office <span>info</span></p>
                        <div class="info-line">
                            <div class="info-icon wow fadeIn animated">
                                <i class="fa fa-envelope-o primary" aria-hidden="true"></i>
                            </div>
                            <div class="info-text wow fadeIn animated">
                                <p>infos@ank-analytics.net</p>
                            </div>
                        </div>
                        <div class="info-line">
                            <div class="info-icon wow fadeIn animated">
                                <i class="fa fa-phone primary" aria-hidden="true"></i>
                            </div>
                            <div class="info-text wow fadeIn animated">
                                <p>+220 765 8022 - +220 723 6814</p>
                            </div>
                        </div>

                        <div class="info-line">
                            <div class="info-icon wow fadeIn animated">
                                <i class="fa fa-address-card-o primary" aria-hidden="true"></i>
                            </div>
                            <div class="info-text wow fadeIn animated">
                                <p>FIB Building, 52 Kairaba Avenue</p>
                            </div>
                        </div>

                        <div class="info-line">
                            <div class="info-icon wow fadeIn animated">
                                <i class="fa fa-map-marker primary" aria-hidden="true"></i>
                            </div>
                            <div class="info-text wow fadeIn animated">
                                <p>Banjul, Serrekunda</p>
                            </div>
                        </div>

                        <div class="bottom-info">
                            <h4 class="wow fadeIn animated"><span>Connect</span> with us</h4>

                            <ul class="list-inline social-icons wow fadeIn animated">
                                <li>
                                    <a href="#" class="primary-2-back primary-back-hover">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="primary-2-back primary-back-hover">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="primary-2-back primary-back-hover">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="primary-2-back primary-back-hover">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>

                            <p class="wow fadeIn animated">Follow us on our social medias.</p>
                        </div>
                    </div>

                    <div class="contact-form">
                        <h4 class="wow fadeIn animated">Send us a <span>Message</span></h4>

                        <form method="post" action="code-ank.php">
                            <div class="form-group wow fadeIn animated">
                                <label for="name">Full Name: </label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group wow fadeIn animated">
                                <label for="email">Email: </label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>

                            <div class="form-group wow fadeIn animated">
                                <label for="message">Message: </label>
                                <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                            </div>
                            <!-- /.form-group -->
                            <button class="btn btn-default wow fadeIn primary-back-hover primary-hover-border animated" type="submit" name="contact-us">Submit message</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.contact-section -->

<!-- Footer
================================================== -->
<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8613.045251752546!2d-16.68439236986496!3d13.45429040093723!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e9e2357b4530c09!2sFIB%20Building!5e0!3m2!1sen!2sgm!4v1600381405995!5m2!1sen!2sgm" width="2000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
<?php
include('includes/footer.php');
?>

<!-- Style Switcher -->
<div class="style-switcher" id="styler">
    <div class="color-chooser">
        <div class="style-heading">
            <p>Choose Your Colors</p>
        </div>
        <!-- /.style-heading -->

        <ul class="colors-list">
            <li>
                <div class="color-picker">
                    <p>Primary Color</p>
                    <div id="cp1" class="input-group colorpicker-component">
                        <input type="text" value="#9600f4" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <!-- /.color-picker -->
            </li>
            <li>
                <div class="color-picker">
                    <p>Primary color 2</p>
                    <div id="cp2" class="input-group colorpicker-component">
                        <input type="text" value="#7100B7" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <!-- /.color-picker -->
            </li>
            <li>
                <div class="color-picker">
                    <p>Primary Color 3</p>
                    <div id="cp3" class="input-group colorpicker-component">
                        <input type="text" value="#B649FF" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <!-- /.color-picker -->
            </li>
            <li>
                <div class="color-picker">
                    <p>Primary Color 4</p>
                    <div id="cp4" class="input-group colorpicker-component">
                        <input type="text" value="#D42BFF" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <!-- /.color-picker -->
            </li>
            <li>
                <div class="color-picker">
                    <p>Secondary color</p>
                    <div id="cp5" class="input-group colorpicker-component">
                        <input type="text" value="#00F2FF" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <!-- /.color-picker -->
            </li>
            <li>
                <div class="color-picker">
                    <p>Secondary color 2</p>
                    <div id="cp6" class="input-group colorpicker-component">
                        <input type="text" value="#00BBFF" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <!-- /.color-picker -->
            </li>
            <li>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#style-modal">
                    Get CSS
                </button>
                <a href="#" class="btn btn-default">Buy Now</a>
            </li>
        </ul>

    </div>
    <!-- /.styles -->
    <div class="gear">
        <i class="fa fa-cog fa-spin fa-fw slow-spin"></i>
    </div>
    <!-- /.gear -->
</div>
<!-- /.style-switcher -->



<!-- Modal -->
<div class="modal fade" id="style-modal" tabindex="-1" role="dialog" aria-labelledby="style-modal-label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="style-modal-label">Your Colors CSS</h4>
            </div>
            <div class="modal-body">
                <pre>
                    <code id="cssStyles">

                    </code>
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="downloadLink">Download CSS</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Scripts
================================================== -->
<!-- JavaScript Libraries -->
<?php
include('includes/scripts.php');
?>
</body>

<!-- Mirrored from www.skilltechwebdesign.com/phpthemes/particle/index_dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 04:54:22 GMT -->
</html>
