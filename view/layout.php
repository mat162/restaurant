<!DOCTYPE html>
<html lang="en" class="no-js">


<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="public/img/fav.html">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title><?= Config::get("site_name") ?></title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="public/css/linearicons.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <link rel="stylesheet" href="public/css/jquery-ui.css">
    <link rel="stylesheet" href="public/css/nice-select.css">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>

<body>
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="logo">
                        <a href="index-2.html"><img src="public/img/logo.png" alt="" title="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-center d-flex">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index-2.html">Home</a></li>                        
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
    <section class="banner-area">		
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<h6 class="text-white">Wide Options of Choice</h6>
							<h1 class="text-white">Delicious Recipes</h1>
							<p class="text-white">
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women.
							</p>
							<a href="#" class="primary-btn text-uppercase">Check Our Menu</a>
						</div>
					</div>
				</div>					
			</section>
			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>About Our Story</h1>
							<p>
								Who are in extremely love with eco friendly system. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<a href="#" class="primary-btn">view full menu</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="public/img/about-img.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>



    <?= $data['content'] ?>



    <!-- start footer Area -->
    <footer class="footer-area">
        <div class="footer-widget-wrap">
            <div class="container">
                <div class="row section-gap">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Opening Hours</h4>
                            <ul class="hr-list">
                                <li class="d-flex justify-content-between">
                                    <span>Monday - Friday</span> <span>08.00 am - 10.00 pm</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Saturday</span> <span>08.00 am - 10.00 pm</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Sunday</span> <span>08.00 am - 10.00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Contact Us</h4>
                            <p>
                                56/8, los angeles, rochy beach, Santa monica, United states of america - 1205
                            </p>
                            <p class="number">
                                012-6532-568-9746 <br>
                                012-6532-569-9748
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Newsletter</h4>
                            <p>You can trust us. we only send promo offers, not a single spam.</p>
                            <div class="d-flex flex-row" id="mc_embed_signup">


                                <form class="navbar-form"
                                    action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get">
                                    <div class="input-group add-on align-items-center d-flex">
                                        <input class="form-control" name="EMAIL" placeholder="Your Email address"
                                            onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                                            onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Your Email address'"
                                            required="" type="email" data-cf-modified-e9d23b761e2d535597c1eb03-="">
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                                type="text">
                                        </div>
                                        <div class="input-group-btn">
                                            <button class="genric-btn"><span
                                                    class="lnr lnr-arrow-right"></span></button>
                                        </div>
                                    </div>
                                    <div class="info mt-20"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-wrap">
            <div class="container">
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script type="e9d23b761e2d535597c1eb03-text/javascript">
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="public/js/vendor/jquery-2.2.4.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/popper.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/vendor/bootstrap.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
        type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/jquery-ui.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/easing.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/hoverIntent.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/superfish.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/jquery.ajaxchimp.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/jquery.magnific-popup.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/jquery.nice-select.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/owl.carousel.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/isotope.pkgd.min.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/mail-script.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script src="public/js/main.js" type="e9d23b761e2d535597c1eb03-text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="e9d23b761e2d535597c1eb03-text/javascript"></script>
    <script type="e9d23b761e2d535597c1eb03-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="e9d23b761e2d535597c1eb03-|49" defer=""></script>
</body>

<!-- Mirrored from colorlib.com/preview/theme/marco/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 13:07:29 GMT -->

</html>