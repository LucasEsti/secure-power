<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <!--<title><?php echo get_the_title(); ?></title>-->
    <?php // wp_head(); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.webp">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/flaticon/css/flaticon.css" media="screen" rel="stylesheet" type="text/css"> 
   <!-- Main CSS -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/new/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <nav class="header-2 navbar fixed-top navbar-expand-lg navbar-light p-2">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="#">
                <img id="logo_scb" alt="logo secure power" 
                     src="<?php bloginfo("stylesheet_directory");  ?>/assets/img/logo.webp" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav mx-auto">
                <?php 
                                $menu_name = 'menu-principal';
                                
                                $menus = wp_get_nav_menu_items( $menu_name, array() );
                                $taille = count($menus);
                                
                                ?>
                                <?php 
                                for ($i = 0; $i < $taille; $i++) { 
                                    if ($menus[$i]->{'title'} == 'image'):
                                        ?>
                                        <a class="img-head navbar-brand d-none d-lg-block" href="/">
                                            <img id="logo_scb" alt="logo secure power" 
                                                src="<?php bloginfo("stylesheet_directory");  ?>/assets/img/logo.webp" >
                                        </a>
                                <?php 
                                    else:
                                    
                                    $autre_actif = false;
                                    if($menus[$i]->{'menu_item_parent'} == "0"): 
                                        if($menus[$i]->{'object'} == "page"): ?>

                                            <li class="nav-item "> 
                                                <a class="nav-link <?php if ($menus[$i]->{'object_id'} == get_queried_object_id()): $autre_actif = true;?>active<?php endif; ?>" href="<?php echo $menus[$i]->{'url'}; ?>">
                                                    <?php echo $menus[$i]->{'title'}; ?>
                                                </a>
                                            </li>
                                        <?php elseif ($menus[$i]->{'object'} == "custom"): 
                                            $idParent = $menus[$i]->{'object_id'};
                                            ?>
                                            <li class="nav-item dropdown 
                                               <?php for ($j = $i + 1; $j < $taille; $j++) { if($menus[$j]->{'menu_item_parent'} == $idParent): if ($menus[$j]->{'object_id'} == get_queried_object_id()): ?>active<?php break; endif; endif; } ?>
                                                "> 
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <?php echo $menus[$i]->{'title'}; ?><span class="x-caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <?php for ($j = $i + 1; $j < $taille; $j++) { ?>
                                                        <?php if($menus[$j]->{'menu_item_parent'} == $idParent): ?>
                                                        <li class="">
                                                            <a class="dropdown-item mb-2 <?php if ($menus[$j]->{'object_id'} == get_queried_object_id()): ?>active<?php endif; ?>" href="<?php echo $menus[$j]->{'url'}; ?>">
                                                                <?php echo $menus[$j]->{'title'}; ?>
                                                            </a>
                                                        </li>
                                                        <?php else: break;?>
                                                        
                                                        <?php endif; ?>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                        <?php endif;endif;
                                        
                                        endif;
                                    } ?>
              </ul>
            </div>
        </div>
   </nav>