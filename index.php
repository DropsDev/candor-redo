<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" media="all" href="css/app.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
    <title>Candor Nigeria</title>
</head>

<body>
    <input type="checkbox" id="nav-toggle" class="hidden">
    <nav id="nav-drawer">
        <label class="ham" for="nav-toggle">
            <span></span>
            <span></span>
        </label>
        <div class="nav-drawer-container">
            <div>
                <a href="#">
                    <img src="http://www.candor.ng/img/logo.png" alt="Candor Logo"></a>
                <p>A hollistic business services company, offering Human Resource and Busness management service, to businesses great and small..</p>
            </div>
            <div class="nav-drawer-links">
                <ul id="menu-nav-drawer" class="">
                    <li class="parent">
                        <a href="#" data-name="Menu"><span>Menu</span></a>
                        <ul class="sub-menu">
                            <li><a href="#" data-name="Who We Are"><span>Who We Are</span></a></li>
                            <li><a href="#" data-name="Reports"><span>What We Do</span></a></li>
                            <li><a href="#" data-name="Careers"><span>Media</span></a></li>
                            <li><a href="#" data-name="Get in Touch"><span>Get in Touch</span></a></li>
                        </ul>
                    </li>
                </ul>
                <ul id="menu-nav-socials" class="">
                    <li class="parent"><a href="#" data-name="Socials"><span>Socials</span></a>
                        <ul class="sub-menu">
                            <li><a target="_blank" href="#" data-name="Facebook"><span>Facebook</span><i
                                        class="material-icons">facebook</i></a></li>
                            <li><a target="_blank" href="#" data-name="Twiiter"><span>Twitter</span><i
                                        class="material-icons">twiiter</i></a></li>
                            <li><a target="_blank" href="#" data-name="Instagram"><span>Instagram</span><i
                                        class="material-icons">instagram</i></a></li>
                            <li><a target="_blank" href="#" data-name="LinkedIn"><span>LinkedIn</span><i
                                        class="material-icons">linkedin</i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <p>&copy; 2019 Candor Nigeria.</p>
            </div>
        </div>
        <div class="nav-drawer-bg"></div>
    </nav>
    <header id="header-bar">
        <div>
            <label class="ham" for="nav-toggle">
                <span></span>
                <span></span>
            </label>
            <a class="logo" href="/">
                <img src="http://www.candor.ng/img/logo.png" alt="" />
            </a>
            <nav>
                <ul id="menu-nav-header" class="">
                    <li>
                        <a href="#" data-name="Who We Are"><span>Who We Are</span></a>
                    </li>
                    <li>
                        <a href="#" data-name="What We Do"><span>What We Do</span></a>
                    </li>
                    <li class="ml-auto px-2">
                        <a href="#" data-name="Media"><span>Media</span></a>
                    </li>
                    <li class="highlighted">
                        <a href="#" data-name="Careers"><span>Get In Touch</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="who-we-are" class="container-max">
            <div class="intro animate up-and-in">
                <h1>&nbsp;Achieve&nbsp;<em>Your</em><span>Business Goals</span></h1>
                <h5 class="m-0">With Candor Nigeria</h5>
            </div>
            <div class="hero">
                <div>
                    <img width="1800" height="844" src="https://candorng.herokuapp.com/content/img/2.jpg"
                        class="auto-size" alt="" srcset="https://candorng.herokuapp.com/content/img/2.jpg 1800w, https://candorng.herokuapp.com/content/img/2.jpg 300w, https://candorng.herokuapp.com/content/img/2.jpg 768w, 
                        https://candorng.herokuapp.com/content/img/2.jpg 1024w"
                        sizes="(max-width: 1800px) 100vw, 1800px" /> </div>
                <a href="#">
                    <span class="animate fade-in">
                        <h5>Our story</h5>
                        <i class="material-icons">arrow_forward</i>
                    </span>
                </a>
            </div>
        </section>
        <section id="what-we-do">
            <div class="container-fluid container-max">
                <div class="row row-service-intro text-center">
                    <div
                        class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 animate up-and-in">
                        <h2>Our Services</h2>
                        <div class="service-content">
                            <p>Candor is a hollistic business services company, offering Human Resource
                                and Busness management service, to businesses great and small.</p>
                        </div>
                    </div>
                </div>
                <ul class="row row-services list-unstyled">
                    <li class="col-xs-12 col-sm-6 col-service">
                        <div>
                            <a href="#">
                                <div class="service-img"><img width="880" height="860"
                                        src="img/2.jpg"
                                        class="auto-size" alt=""
                                        srcset="img/1.jpg 880w, img/2.jpg 300w,img/1.jpg 768w"
                                        sizes="(max-width: 880px) 100vw, 880px" /></div>
                                <div class="service-info">
                                    <h5>Organizational Improvement</h5>
                                    <i class="material-icons">arrow_forward</i>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-12 col-sm-6 col-service">
                        <div>
                            <a href="#">
                                <div class="service-img"><img width="880" height="860"
                                        src="img/1.jpg"
                                        class="auto-size" alt=""
                                        srcset="img/2.jpg 880w, img/1.jpg 300w, img/1.jpg 768w"
                                        sizes="(max-width: 880px) 100vw, 880px" /></div>
                                <div class="service-info">
                                    <h5>Service Process Improvement</h5>
                                    <i class="material-icons">arrow_forward</i>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="careers" class="section-content section-start container-fluid container-max">
            <div class="row">
                <div class="col-xs-12 col-start-img">
                    <div><img width="1920" height="900"
                            src="img/working.jpg" class="auto-size" alt=""
                            srcset="img/working.jpg 1920w, img/working.jpg 300w, img/working.jpg 768w, img/working.jpg 1024w"
                            sizes="(max-width: 1920px) 100vw, 1920px" /></div>
                </div>
                <div class="col-xs-12 col-md-10 col-md-push-2 col-lg-9 col-lg-push-3 col-right-side col-start-info">
                    <div class="animate up-and-in">
                        <h1>Working with Nigerian businesses </h1>
                        <h4>for over 20 years</h4>
                        <div>
                            <p>
                                Since its inception in 1994, Candor has been helping small and medium businesses achieve
                                growth by effective strategic planning.
                                All of our team members come from diverse cultural and business backgrounds and have
                                worked among many businesses in their time. Some are business owners themselves and have
                                built their stuff from the ground up.
                            </p>
                        </div> <a class="btn-link" href="#">Check out the opportunities</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="liner"><span class="animate line-grow" data-delay="0.5"></span></div>
    </main>
    <footer id="footer" class="footer-get-in-touch footer-no-img">
        <a href="#">
            <h2><span>
                    <p>Want more?</p>
                </span>Get in Touch</h2>
        </a>
    </footer>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
</body>

</html>