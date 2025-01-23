<?php //

/**
 * Template Name: liste produits 
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
                    $args = array(
                        'taxonomy'   => "product_cat",
                    );
                    $product_categories = get_terms($args);
                    
                        foreach($product_categories as $category) {
                            $catName = $category->name;
                            $category_id = $category->term_id;
                            $category_slug = $category->slug;
                            ?>
                            <h2><?php echo $catName; ?></h2>
                                
                                <?php
                                    $args = array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => 24,
                                        'orderby'          => 'rand',
                                        'product_cat' => $category_slug
                                    );
                                    $loop = new WP_Query( $args );
                                    ?>
                                    <div class="col-lg-12 mb-5 d-flex justify-content-center">
                                        <div class=" owl-product-list owl-carousel owl-theme">
                                        <?php 
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                        global $product;
                                            ?> 
                                            <div class="item link-product">
                                                <img class="img-fluid"  src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="" />
                                                <a class="" href="<?php echo get_permalink(); ?>" >
                                                    <?php echo get_the_title(); ?>
                                                </a>
                                                    
                                            </div>
                                            
                                        <?php 
                                        endwhile;
                                        wp_reset_query();?>
                                            </div>
                                        </div>
                                
                <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>


