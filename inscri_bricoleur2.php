<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Real State Multi</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--================Header Menu Area =================-->
    <?php
    include_once("header.php");

    ?>

    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <div class="container">

        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <h1 class="typo-list">INFORMATIONS PERSONNELLES</h1>

                    <form action="ajouter.php" method="GET">
                        <h3 class="mb-20 title_color">Specialité</h3>
                        
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
                                <select name="specialite">

                                    <option value="1">Aménagement intérieur et petits travaux</option>
                                    <option value="2">Peinture, murs et sols</option>
                                    <option value="3">Plomberie</option>
                                    <option value="4">Electricité</option>
                                    <option value="5">Manutention et nettoyage</option>
                                    <option value="6">Jardins et extérieurs</option>
                                </select>
                            </div>
                        </div>
                        
                        
                        <h3 class="mb-20 title_color">Experience</h3>
                      
                        <div class="mt-10">
                            <textarea class="single-textarea" placeholder="experience" name="experience"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'experience'"
                                required></textarea>
                        </div>
                        <div class="button-group-area mt-40">

                            <button type="submit" class="genric-btn info circle arrow">Valider Votre Inscri<span
                                    class="lnr lnr-arrow-right"></span></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- End Align Area -->

    <!--================ start footer Area  =================-->
    <footer class="footer-area p_30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget ab_wd">
                        <h6 class="footer_title">About Us</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget contact_wd">
                        <h6 class="footer_title">Contact Us</h6>
                        <p>56/8, Santa Monica bullevard, Los angeles, california, United states of america</p>
                        <a href="tel:01265325689746">012-6532-568-9746</a>
                        <a href="tel:01265325689746">012-6532-568-9746</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 offset-lg-1">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Newsletter</h6>
                        <p>You can trust us. we only send promo offers, not a single spam.</p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
                    made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>