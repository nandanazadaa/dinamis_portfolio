<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/title.png" title="Favicon" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/styles.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/namari-color.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status" class="la-ball-triangle-path">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--End of Preloader-->

    <div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
        <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
        <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
        <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
        <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
    </div>

    <div id="wrapper">

        <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
            <div id="header" class="nav-collapse">
                <div class="row clearfix">
                    <div class="col-1">

                        <!--Logo-->
                        <div id="logo">

                            <!--Logo that is shown on the banner-->
                            <a href="<?= base_url('Home')?>"><img src="<?= base_url('assets/') ?>images/logo-4.png" id="banner-logo" alt="Landing Page" /></a>
                            <!--End of Banner Logo-->

                            <!--The Logo that is shown on the sticky Navigation Bar-->
                            <a href="<?= base_url('Home')?>"><img src="<?= base_url('assets/') ?>images/logo-4.png" id="navigation-logo" alt="Landing Page" /></a>
                            <!--End of Navigation Logo-->

                        </div>
                        <!--End of Logo-->

                        <aside>

                            <!--Social Icons in Header-->
                            <ul class="social-icons">
                                <li>
                                    <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                                        <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="YouTube" href="https://www.youtube.com/channel/UCnusy8Vn7gJdqGxUjFSg7JA">
                                        <i class="fa fa-youtube fa-1x"></i><span>YouTube</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Instagram" href="https://www.instagram.com/ez.zada/">
                                        <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                    </a>
                                </li>
                            </ul>
                            <!--End of Social Icons in Header-->

                        </aside>

                        <!--Main Navigation-->
                        <nav id="nav-main">
                            <ul>
                                <li>
                                    <a href="#banner">Home</a>
                                </li>
                                <li>
                                    <a href="#about">Skills</a>
                                </li>
                                <li>
                                    <a href="#gallery">My Project</a>
                                </li>
                                <li>
                                    <a href="#services">About Me</a>
                                </li>
                                <li>
                                    <a href="#testimonials">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!--End of Main Navigation-->

                        <div id="nav-trigger"><span></span></div>
                        <nav id="nav-mobile"></nav>

                    </div>
                </div>
            </div><!--End of Header-->

            <!--Banner Content-->
            <div id="banner-content" class="row clearfix">

                <div class="col-38">

                    <div class="section-heading">
                        <h1><?= $update_text_title['text_nama']?></h1>
                        <h2><?= $update_text_title['text_profesi']?></h2>
                    </div>

                    <!--Call to Action-->
                    <a href="#" class="button">START CREATING TODAY</a>
                    <!--End Call to Action-->

                </div>

            </div><!--End of Row-->
        </header>

        <!--Main Content Area-->
        <main id="content">

            <!--Introduction-->
            <section id="about" class="introduction scrollto">

                <div class="row clearfix">

                    <div class="col-3">
                        <div class="section-heading">
                            <h3><?= $text_skill['subtitle']?></h3>
                            <h2 class="section-title"><?= $text_skill['title']?></h2>
                            <p class="section-subtitle"><?= $text_skill['deskripsi']?> </p>
                        </div>

                    </div>
                    <div class="skill">
                        <div class="col-2-3">
                            <!--Icon Block-->
                            <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
                                <!--Icon-->
                                <div class="icon">
                                    <i class="fab fa-html5 fa-lg"></i>
                                </div>
                                <!--Icon Block Description-->
                                <li>
                                    <h3>Html</h3>
                                    <span class="bar"><span class="html"></span></span>
                                </li>
                            </div>
                            <!--End of Icon Block-->
                            <!--Icon Block-->
                            <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
                                <!--Icon-->
                                <div class="icon">
                                    <i class="fab fa-css3 fa-lg"></i>
                                </div>
                                <!--Icon Block Description-->
                                <li>
                                    <h3>Css</h3>
                                    <span class="bar"><span class="css"></span></span>
                                </li>
                            </div>
                            <!--End of Icon Block-->
                            <!--Icon Block-->
                            <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                                <!--Icon-->
                                <div class="icon">
                                    <i class="fab fa-php fa-lg"></i>
                                </div>
                                <!--Icon Block Description-->
                                <li>
                                    <h3>PHP</h3>
                                    <span class="bar"><span class="php"></span></span>
                                </li>
                            </div>
                            <!--End of Icon Block-->
                            <!--Icon Block-->
                            <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                                <!--Icon-->
                                <div class="icon">
                                    <i class="fab fa-js fa-lg"></i>
                                </div>
                                <!--Icon Block Description-->
                                <li>
                                    <h3>Javascript</h3>
                                    <span class="bar"><span class="javascript"></span></span>
                                </li>
                            </div>
                            <!--End of Icon Block-->

                        </div>
                    </div>

                </div>


            </section>
            <!--End of Introduction-->


            <!--Gallery-->

            <aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery data-featherlight-filter="a">

                <div class="section-heading">
                    <h3>My</h3>
                    <h2 class="section-title">Our Work</h2>
                </div>

                <a href="<?= base_url('assets/') ?>images/gallery-images/g1.png" data-featherlight="image" class="col-3 wow fadeIn" data-wow-delay="0.1s"><img src="<?= base_url('assets/') ?>images/gallery-images/g1.png" alt="Landing Page" /></a>
                <a href="<?= base_url('assets/') ?>images/gallery-images/g2.png" data-featherlight="image" class="col-3 wow fadeIn" data-wow-delay="0.3s"><img src="<?= base_url('assets/') ?>images/gallery-images/g2.png" alt="Landing Page" /></a>
                <a href="<?= base_url('assets/') ?>images/gallery-images/g3.png" data-featherlight="image" class="col-3 wow fadeIn" data-wow-delay="0.5s"><img src="<?= base_url('assets/') ?>images/gallery-images/g3.png" alt="Landing Page" /></a>

            </aside>
            <!--End of Gallery-->


            <!--Content Section-->
            <div id="services" class="scrollto clearfix">

                <div class="row no-padding-bottom clearfix">


                    <!--Content Left Side-->
                    <div class="col-3">
                        <!--User Testimonial-->
                        <blockquote class="testimonial text-right bigtest">
                            <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua</q>
                            <footer>— John Doe, Happy Customer</footer>
                        </blockquote>
                        <!-- End of Testimonial-->

                    </div>
                    <!--End Content Left Side-->

                    <!--Content of the Right Side-->
                    <div class="col-3">
                        <div class="section-heading">
                            <h3>BELIEVING</h3>
                            <h2 class="section-title">Focusing On What Matters Most</h2>
                            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.
                        </p>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet!
                        </p>
                        <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
                        <a href="#" data-videoid="UYJ5IjBRlW8" data-videosite="youtube" class="button video link-lightbox">
                            WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!--End Content Right Side-->

                    <div class="col-3">
                        <img src="<?= base_url('assets/') ?>images/dancer.jpg" alt="Dancer" />
                    </div>

                </div>


            </div>
            <!--End of Content Section-->

            <!--Clients-->
            <section id="clients" class="scrollto clearfix">
                <div class="row clearfix">

                    <div class="col-3">

                        <div class="section-heading">
                            <h3>TRUST</h3>
                            <h2 class="section-title">Companies who use our services</h2>
                            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
                        </div>

                    </div>

                    <div class="col-2-3">

                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo1.png" alt="Company" />
                            <div class="client-overlay"><span>Tree</span></div>
                        </a>
                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo2.png" alt="Company" />
                            <div class="client-overlay"><span>Fingerprint</span></div>
                        </a>
                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo3.png" alt="Company" />
                            <div class="client-overlay"><span>The Man</span></div>
                        </a>
                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo4.png" alt="Company" />
                            <div class="client-overlay"><span>Mustache</span></div>
                        </a>
                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo5.png" alt="Company" />
                            <div class="client-overlay"><span>Goat</span></div>
                        </a>
                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo6.png" alt="Company" />
                            <div class="client-overlay"><span>Justice</span></div>
                        </a>
                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo7.png" alt="Company" />
                            <div class="client-overlay"><span>Ball</span></div>
                        </a>
                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo8.png" alt="Company" />
                            <div class="client-overlay"><span>Cold</span></div>
                        </a>

                        <a href="#" class="col-3">
                            <img src="<?= base_url('assets/') ?>images/company-images/company-logo9.png" alt="Company" />
                            <div class="client-overlay"><span>Cold</span></div>
                        </a>

                    </div>

                </div>
            </section>
            <!--End of Clients-->

        </main>
        <!--End Main Content Area-->


        <!--Footer-->
        <footer id="landing-footer" class="clearfix">
            <div class="row clearfix">
                <p id="copyright" class="col-2">Copyright by <a href="https://www.instagram.com/ez.zada/">Nandana Zada Abiproya</a></p>

                <!--Social Icons in Footer-->
                <!-- <ul class="col-2 social-icons">
                    <li>
                        <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                            <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Google+" href="http://google.com/+username">
                            <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Twitter" href="http://www.twitter.com/username">
                            <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Instagram" href="http://www.instagram.com/username">
                            <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="behance" href="http://www.behance.net">
                            <i class="fa fa-behance fa-1x"></i><span>Behance</span>
                        </a>
                    </li>
                </ul> -->
            </div>
        </footer>
        <!--End of Footer-->

    </div>

    <!-- Include JavaScript resources -->
    <script src="<?= base_url('assets/') ?>js/jquery.1.8.3.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/wow.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/featherlight.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/featherlight.gallery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.enllax.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.stickyNavbar.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/images-loaded.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/lightbox.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/site.js"></script>


</body>

</html>