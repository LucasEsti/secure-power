<?php //

/**
 * Template Name: Accueil 
 */
get_header(); ?>
<?php if( have_rows('carrousel') ): 
     while( have_rows('carrousel') ): the_row(); ?>
    <div id="principal" class="w-100 mb-5">
        <div class="owl-accueil owl-carousel owl-theme">
            <?php 
                foreach(get_sub_field('contenu') as $element): ?>
            <div class="item">
                <img alt="" class="img-fluid" src="<?php echo $element["url"]; ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php endwhile; endif; ?>



<?php
        $loop = new WP_Query(array('post_type' => 'product', 'orderby' => 'rand', 'posts_per_page' => '12')); 
        if( $loop->have_posts() ) : ?>
    <div style="background: url(<?php echo get_field('background_produit', 'option')['url']; ?>) no-repeat fixed;background-size: cover;">
        <div class="container-fluid text-center mb-5 pb-5 pt-5">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center mb-5">
                    <h3 class="choix_onduleur" >
                        <?php echo get_field('nos_produits', 'option'); ?>
                    </h3>
                </div>
                
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class=" owl-choix owl-carousel owl-theme">
                        
                        <?php while ( $loop->have_posts() ) : $loop->the_post();
                            global $product;

                            ?>
                        <a href="<?php echo get_permalink(); ?>" >
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                        </a>
                        <?php 
                        endwhile;
                        wp_reset_query();?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php endif; ?>


<?php if( have_rows('histoire') ): 
     while( have_rows('histoire') ): the_row(); ?>
    <div class="home-about  mb-5" style="background: url(<?php echo get_sub_field('image')["url"]; ?>) no-repeat center;background-size: cover;">
        <div class="container pb-5 pt-5">
            <div class="row mb-5">
                <div class="col-lg-1  col-md-12 avant_produit">
                </div>
                <div class="col-lg-10 col-md-12 ps-4 pt-5">
                    <div class="row title_mouv_2">
                        <h1><?php echo get_sub_field('titre'); ?></h1>
                    </div>
                    <div class="row mb-3">
                        <div><?php echo get_sub_field('description'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
 

 <?php if( have_rows('services') ): 
     while( have_rows('services') ): the_row(); ?>
 <div class="services pt-5 pb-5" style="background: url(<?php echo get_sub_field('image')["url"]; ?>) no-repeat center;background-size: cover;">
        <div class="container">
            <div class="row text-center mb-4">
                <?php echo get_sub_field('description'); ?>
            </div>
        <?php foreach(get_sub_field('autres') as $element): ?>
            <div class="row d-flex justify-content-center mb-5">
                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column mb-3" > 
                        <div class="d-flex justify-content-center">
                            <img alt="" class="img-fluid col-3" src="<?php echo $element['icone']['url']; ?>" /> 
                        </div>
                        <b class="text-center mb-3">
                            <?php if($element['link']): ?>
                                <a href="<?php echo $element['link']["url"];  ?>"><?php echo $element['titre']; ?></a>
                                <?php else: ?>
                                <?php echo $element['titre']; ?>
                            <?php endif; ?>
                            
                        </b>
                            
                        <?php if($element['link']): ?><a class="text-center" href="<?php echo $element['link']["url"];  ?>">
                            <span>Plus de détails</span>
                        </a><?php endif; ?>
                            
                        
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center" > 
                        <img alt="" class="img-fluid" src="<?php echo $element['image']['url']; ?>" /> 
                    </div>
            </div>
        <?php endforeach; ?>
            
        </div>
    </div>
<?php endwhile; endif; ?>

    

<?php if( have_rows('reference') ): 
     while( have_rows('reference') ): the_row(); ?>

    <div class="clients-tete pt-5 mb-5" style="background: url(<?php echo get_sub_field('background_reference')['url']; ?>);background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
            <div class="content-head text-center text-uppercase">
                <h4><?php echo get_sub_field('titre'); ?></h4>
            </div>
        </div>
        
    </div>
    <div class="clients mb-5">
        <div class="container mb-4">
            <div id="clients2" class="owl-reference owl-carousel owl-theme">
                <?php foreach(get_sub_field('liste') as $element): ?>
                    <div class="item"> <img alt="" class="img-fluid" src="<?php echo $element['url']; ?>" /> </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>


