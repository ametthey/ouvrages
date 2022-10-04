<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="profile" href="https://gmpg.org/xfn/11" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?> >

        <!-- INTRO -->
        <?php get_template_part( 'template-parts/home-introduction' ); ?>

        <!-- HEADER -->
        <header id="masthead" class="site-header site-header-home" role="banner">
            <!-- NAVIGATION -->
            <div class="header-navigation">

                <?php get_template_part( 'template-parts/header-background' ); ?>

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

                <!-- HAMBURGER MENU -->
                <button class="navigation--hamburger hamburger"></button>

                <!-- LOGO -->
                <?php get_template_part( 'template-parts/header', 'logo' ); ?>

                <!-- OFFICE DESKTOP COLLAPSE -->
                <?php get_template_part( 'template-parts/header', 'office-desktop' ); ?>

            </div>
            <!-- CATEGORIE -->
            <div class="header-category">

                <?php
                    $categories = get_terms( array(
                        'taxonomy'  => 'categorie',
                        'hide_empty'=> false

                        )
                    );

                    foreach( $categories as $category ) {
                ?>
                        <span class="category-item category-<?php echo esc_html( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?></span>
                <?php
                    }
                ?>

                <span id="all-projects">Tout voir</span>

            </div>



            <!-- PROJECTS GRID -->
            <div class="projects-grid">

                    <?php
                        $args = array(
                            'post_type'      => 'project',
                            'posts_per_page' => -1,
                            'tax_query'      => (
                                array(
                                    'taxonomy' => 'categorie'
                                )
                            )
                        );
                        $home_projects = new WP_Query( $args );
                        if ( $home_projects->have_posts() ) : while ( $home_projects->have_posts() ) : $home_projects->the_post();
                    ?>

                    <?php get_template_part( 'template-parts/content' , 'project' ); ?>

                    <?php endwhile; endif; wp_reset_postdata(); ?> <!-- WP_Query for CPT project -->
            </div>
        </header>


