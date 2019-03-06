<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeStageN\'001
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'themestagen001' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>   <!-- Nom du site -->
            <?php
            endif;
            $themestagen001_description = get_bloginfo( 'description', 'display' );
            if ( $themestagen001_description || is_customize_preview() ) :
                ?>
                <p class="site-description"></p>
            <?php endif; ?>
        </div><!-- .site-branding -->
        <div class="Header2">
            <div id="row1" class="row" >
                <div class="col-2" id="btn-Actu">
                    <a href="http://stage-n001.local/actualite/">Actualité</a>
                </div>
                <!-- Bouton Actualité-->
                <div class="col-2" id="Produit">
                    <a href="http://stage-n001.local/produit-2/">Produit</a>
                </div>
                <!-- Liste déroulante Produit-->
                <div class="col-4" >
                    <a href="http://stage-n001.local/"/> <img class="btn-accueil-header" src="http://stage-n001.local/wp-content/uploads/2018/06/Photo-Accueil-decoup.jpg"> </a>
                </div>
                <!-- bouton dans photo -->

                <div class="col-2" id="LeVillageDuPain">
                    <a href="http://stage-n001.local/levillagedupain/">Le village du pain</a>
                </div>
                <!-- Liste déroulante Le Village du Pain-->
                <div class="col-2" id="btn-Contact">
                    <a href="http://stage-n001.local/contact/">Contact</a>
                </div>
            </div>
            <!-- Bouton Contact-->
            <?php
            get_sidebar();
            ?>
            <!-- Le recherche barre-->
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">