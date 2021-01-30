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
        <header id="masthead" class="site-header" role="banner">
            <!-- NAVIGATION -->
            <div class="header-navigation">

                <!-- NAVIGATION ITEMS -->
                <span class="navigation--projects">
                    <a href="<?php echo get_post_type_archive_link( 'project' ); ?>">Projects</a>
                </span>
                <span class="navigation--office">Office</span>
                <button class="navigation--hamburger hamburger"></button>


                <!-- LOGO -->
                <div class="header-navigation--logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <h2>Ouvrage</h2>
                        <h2><?php the_title(); ?></h2>
                    </a>
                </div>

                <!-- OFFICE COLLAPSE -->
                <div class="header-navigation--office">
                    <p>A l’origine d’Ouvrage se trouve le plaisir partagé du travail bien fait. Au fil des projets menés conjointement, s’est crystalisée la valeur d’une association de compétences complémentaires. Chacun dans son domaine, dans sa discipline, a fait avancer les projets en intelligence, et en servant les intérêts partagés par tous, avant les intérêts personnels. Fort de plusieurs années de collaboration, cette association de circonstances se transforme aujourd’hui en un projet commun, et prend la forme d’Ouvrage.
                        <br>
                        <br>
                        25 Rue du Bac, F–75008 Paris
                        <br>
                        <br>
                        <a href="mailto:adress@gmail.com">Email us</a>
                    </p>
                </div>

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

