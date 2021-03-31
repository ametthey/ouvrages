<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="profile" href="https://gmpg.org/xfn/11" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?> >

        <!-- HEADER -->
        <header id="masthead" class="site-header site-header-single" role="banner">
            <!-- NAVIGATION -->
            <div class="header-navigation">

                <!-- NAVIGATION ITEMS -->
                <span class="navigation--projects">
                    <a href="<?php echo get_post_type_archive_link( 'project' ); ?>">Projets</a>

                    <!-- CATEGORY MOBILE -->
                    <?php
                        $categories = get_terms( array(
                            'taxonomy'  => 'categorie',
                            'hide_empty'=> false

                            )
                        );

                        foreach( $categories as $category ) {
                    ?>
                            <span class="category-item category-<?php echo esc_html( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?></span>
                    <?php } ?>
                        <span id="all-projects">Tout voir</span>

                </span>

                <span id="office-mobile" class="navigation--office">
                    <!-- OFFICE MOBILE COLLAPSE -->
                    <?php get_template_part( 'template-parts/header', 'office-mobile' ); ?>

                    <!-- BUREAU FOR DESKTOP  -->
                    <p>Bureau</p>
                </span>
                <button class="navigation--hamburger hamburger"></button>


                <!-- LOGO -->
                <?php get_template_part( 'template-parts/header', 'logo-single' ); ?>

                <!-- OFFICE COLLAPSE -->
                <?php get_template_part( 'template-parts/header', 'office-desktop' ); ?>

                <!-- CATEGORIE -->
                <div class="header-category">
                    <a href="">Résidentiel</a>
                    <a href="">Commercial</a>
                    <a href="">Hospitalité</a>
                    <a href="">Bureaux</a>
                    <a href="">Tout voir</a>
                </div>
            </div>

        </header>

        <div id="page">

