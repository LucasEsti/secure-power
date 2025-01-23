<?php

get_header();
?>
<div class="" style="background: url(<?php echo get_field('background_produit', 'option')['url']; ?>) no-repeat fixed;background-size: cover;">
  <!-- Banniere -->
  <section id="banniere" class="container">
        <?php
            $terms = get_the_terms( $post->ID , 'nos-produits');
            if (!isset($terms)) {
                if( $terms[0]->parent != 0 ) {
                    $terms = array_reverse($terms, false);
                }

                $lengthTerms = count($terms) - 1 ;
                $images = get_field( 'taxonomy_banniere', 'nos-produits_'.$terms[$lengthTerms]->parent);
                $imagesipad = get_field( 'taxonomy_banniere_ipad', 'nos-produits_'.$terms[$lengthTerms]->parent);
                $imagesmobile = get_field( 'taxonomy_banniere_mobile', 'nos-produits_'.$terms[$lengthTerms]->parent);

                echo '<img src="'. $images['url'] .'" class="img-fluid desktop">';
                echo '<img src="'. $imagesipad['url'] .'" class="img-fluid ipad">';
                echo '<img src="'. $imagesmobile['url'] .'" class="img-fluid mobile">';
            }
            
        ?>
        <div class="content">
            <div class="titres">

                <ul class="taxonomy">
                <li><?php echo $terms[$lengthTerms]->name; ?></li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" id="produitsText">Nos produits</a></li>
            <li class="breadcrumb-item">
                <ul class="taxonomy">
                    <?php 
                    if (!isset($terms)) {
                        foreach ( $terms as $term ) { ?>
                    <li><a href="<?php echo get_term_link($term->term_id); ?>">
                            <?php echo  $term->name ; ?>
                        </a>
                    </li>
                    <?php } } ?>
                </ul>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </nav>

    <!-- Contenu Page -->
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-1  col-md-12 avant_produit">
            </div>
            <div class="col-lg-10 col-md-12 ps-4 pt-5">
                <div class="row title_mouv">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <div class="extrait"><?php echo get_the_excerpt(); ?></div>
                        <div class="contenu-produit"><?php the_content(); ?></div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="owl-product owl-carousel owl-theme">
                            <?php 
                                foreach(get_field('gallerie') as $element): ?>
                            <div class="item">
                                <img alt="" class="img-fluid" src="<?php echo $element["url"]; ?>">
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div><?php the_field('description_long'); ?></div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <nav class="mb-3">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <?php 
                    $i = 0;
                    foreach( get_field('contenu') as $contenu ): ?>
                        <button class="nav-link <?php if($i == 0): ?>active<?php endif; ?> " id="nav-<?php echo $contenu["id"]; ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $contenu["id"]; ?>" type="button" role="tab" aria-controls="nav-<?php echo $contenu["id"]; ?>" aria-selected="true"><?php echo $contenu["titre"]; ?></button>
                    <?php 
                    $i++;
                    endforeach; ?>
                    
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <?php 
                    $i = 0;
                    foreach( get_field('contenu') as $contenu ): ?>
                    <div class="tab-pane fade <?php if($i == 0): ?>show active<?php endif; ?>" id="nav-<?php echo $contenu["id"]; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $contenu["id"]; ?>-tab"><?php echo $contenu["content"]; ?></div>
               
                <?php 
                    $i++;
                    endforeach; ?>
            </div>

        </div>
    </div>
    </div>
    

<?php get_footer(); ?>
