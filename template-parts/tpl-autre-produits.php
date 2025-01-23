<?php //

/**
 * Template Name: autre-produits
 */
get_header(); ?>
    <div id="principal" class="w-100 mb-5">
        <div class="owl-accueil owl-carousel owl-theme">
            <?php 
                foreach(get_field('gallery') as $element): ?>
            <div class="item">
                <img alt="" class="img-fluid" src="<?php echo $element["url"]; ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>

<div id="list-product" style="background: url(<?php echo get_field('background_produit', 'option')['url']; ?>) no-repeat fixed;background-size: cover;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-1  col-md-12 avant_produit">
            </div>
            <div class="col-lg-10 col-md-12 ps-4 pt-5">
                <div class="row mb-3 title_mouv">
                    <h1><?php the_title(); ?></h1>
                </div>
                
                <div class="row mb-3">
                    <?php echo get_field('description'); ?>
                </div>
                
                
                <div class="row mb-3">
                    
                    <?php 
                    $circle = ["circle-a", "circle-b", "circle-c"];
                    $i = 0;
                        foreach(get_field('pourcentage') as $element): ?>
                        <div class="col-lg-3 col-md-12 text-center">
                            <div class="circle" id="<?php echo $circle[$i]; ?>">
                                <strong>100%</strong>
                            </div>
                            <span><?php echo $element["texte"]; ?></span>
                        </div>
                    <?php 
                    $i++;
                    endforeach; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>


