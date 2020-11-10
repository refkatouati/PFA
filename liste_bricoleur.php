<?php
session_start();
require_once("function.php");
$liste=null;
if(isset($_GET["id"])){
    $liste=getAllBricoleursByService($_GET["id"]);
}elseif(isset($_GET["place"])){
    $liste=Recherche($_GET["place"]);

}else{
    $liste=getAllBricoleurs();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Builder Construction Multi</title>
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
    <?php
    include_once("header.php");

    ?>


    <section class="blog_categorie_area">
        <div class="container">
            <div class="blog_right_sidebar">
                <div class="row">
                    <div class="col-md-3">

                        <form target="_blank"  method="GET">
                            <aside class=" single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" name="place" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i
                                                class="lnr lnr-magnifier"></i></button>
                                    </span>

                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                        </form>

                    </div>
                   
                    <div class="col-md-9">
                        <aside class="single-sidebar-widget tag_cloud_widget">

                            <ul class="list">
                                <li>
                                    <a href="liste_bricoleur.php">Tout les specialites</a>
                                </li>
                                <?php  
                             $liste1=getAllBricoleurs();
                             foreach($liste1 as $value){
                                echo "<li>";
                              echo "<a href='liste_bricoleur.php?id={$value["specialite"]}'>{$value["specialite"]}</a>";
                              echo "</li>";
                              }
                              ?>

                            </ul>
                        </aside>
                    </div>
                </div>
            </div>

            <div class="row">


                <?php
             foreach ($liste as $value)
             {
                ?>

                <div class="col-lg-4">
                    <h5><img src="https://img.icons8.com/ios/50/000000/worker-male.png" /><?=$value["specialite"]?>
                    </h5>
                    <div class="categories_post">
                        <?php 
                        
                        if  (($value["disponible"])=="1"){
                       echo '<img src="img/icon/vert.png" alt="post">';
                        }else{
                            echo'<img src="img/icon/rouge.png" alt="post">';
                        }
                        ?>
                        <img src="img/blog/cat-post/<?=$value["image"]?>.jpg" class="img-circle" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5><i class="lnr lnr-user"></i> <?=$value["nom"]?> <?=$value["prenom"]?></h5>
                                </a>
                                <div class="border_line"></div>
                                <h3><img src="https://img.icons8.com/color/30/000000/age.png" /> Age:
                                    <?=$value["age"]?>
                                </h3>
                                <div class="border_line"></div>
                                <h3><img src="img/icon/sharing.png" />Experience: <?=$value["experience"]?></h3>
                                <div class="border_line"></div>
                                <h5><img src="img/icon/map.png" /> <?=$value["country"]?> <?=$value["city"]?>
                            </div>

                        </div>

                    </div>
                    <div class="button-group-area mt-40">
                        <a href="#" class="genric-btn info radius">RESERVER</a>
                        <a href="#" class="genric-btn warning radius">CONTACTER</a>
                    </div>

                </div>

                <?php
          }
          ?>
            </div>
        </div>
    </section>


    <footer class="footer-area p_10">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget ab_wd">
                        <h6 class="footer_title">About Us</h6>

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
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>