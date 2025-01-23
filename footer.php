<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>
    <footer class="overlay-wrap mt-5" style="background: url(<?php echo get_field('background_footer', 'option')['url']; ?>);background-repeat: no-repeat; background-size: cover; background-position: center;">
        <!--<div class="overlay"> </div>-->
        <div class="container mt-5">
            <div class="row pt-5 mb-3">
<!--                <div class="col-md-push-3 text-center">
                    <div class="footer-logo ">
                        <a href="/"> 
                            <img alt="" src="<?php bloginfo("stylesheet_directory");  ?>/assets/img/logo.webp" class="img-fluid">
                        </a>
                        
                        <div class="clear"> </div>
                    </div>
                </div>-->
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="footer-widget footer-contact">
                        <?php echo get_field('contacts', 'option'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="footer-widget footer-reseau">
                        <?php echo get_field('reseaux', 'option'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-6 mb-3">
                    <div class="footer-widget footer-contact footer-reseau">
                        <?php echo get_field('siege', 'option'); ?>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--<a class="back-to-top" href=".top-bar"> <i aria-hidden="true" class="fa fa-chevron-up"></i></a>-->
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/new/jquery-circle-progress/dist/circle-progress.js"></script>
    <script>
        
        $(document).ready(function() {
            
            $('.owl-accueil').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                dots:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
            $('.owl-product').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                dots:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
            $('.owl-reference').owlCarousel({
                loop:true,
                margin:70,
                nav:false,
                dots:false,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:6
                    },
                    1000:{
                        items:6
                    }
                }
            });
            
            $('.owl-choix').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                dots:false,
                autoplay:true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:2
                    }
                }
            });
            
            $('.owl-product-list').owlCarousel({
                loop:false,
                margin:0,
                nav:false,
                dots:false,
                autoplay:true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
            $('#circle-a').circleProgress({
                value: 1,
                size: 150,
                thickness: 3,
                fill: {
                  gradient: ["red", "orange"]
                }
              });
            $('#circle-b').circleProgress({
                value: 1,
                size: 150,
                thickness: 3,
                fill: {
                  gradient: ["red", "black"]
                }
              });
              
            $('#circle-c').circleProgress({
                value: 1,
                size: 150,
                thickness: 3,
                fill: {
                  gradient: ["black", "red"]
                }
              });
            
        });
    </script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/new/js/main.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P93CCGK5RZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P93CCGK5RZ');
</script>
</body>
</html>
