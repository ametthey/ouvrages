<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

<div class="single-grid--container">
    <div class="single-grid--container-left">

        <!-- SWIPER CONTAINER LEFT -->
        <div class="swiper-container swiper-container-left">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php if ( have_rows( 'slider_de_gauche' ) ) : ?>
                    <?php while ( have_rows( 'slider_de_gauche' ) ) : the_row(); ?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <?php $image_home = get_sub_field( 'image' ); ?>
                            <?php $size = 'full'; ?>
                            <?php if ( $image_home ) : ?>
                                <?php echo wp_get_attachment_image( $image_home, $size , "", array( 'loading' => 'lazy' )); ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>

            </div>

        </div>


        <!-- FOOTER LEFT -->
        <div class="single-grid--footer-container-left">
            <a class="donnees-techniques-button" href="#">Données Techniques</a>

            <span class="next-post-mobile"><?php previous_post_link('%link', 'Project Suivant'); ?></span>

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/close.svg" alt="close button">

            <div class="single-grid--donnees-techniques">
                <!-- MISSION -->
                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Mission</p>
                    <p class="single-grid--information"><?php the_field('mission');?></p>
                </div>

                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Opération</p>
                    <p class="single-grid--information"><?php the_field('operation'); ?></p>
                </div>

                <div class="single-grid--donnes-techniques-container">
                    <p class="single-grid--title">Typologie</p>
                    <p class="single-grid--information"><?php the_field( 'typologie' ); ?></p>
                </div>

                <div class="single-grid--donnes-techniques-container">
                    <p class="single-grid--title">Architecte</p>
                    <p class="single-grid--information"><?php the_field( 'architecte' ); ?></p>
                </div>

                <div class="single-grid--donnes-techniques-container">
                    <p class="single-grid--title">Surface</p>
                    <p class="single-grid--information"><?php the_field( 'surface' ); ?></p>
                </div>

                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Décal. pré.</p>
                    <p class="single-grid--information"><?php the_field( 'decal' ); ?></p>
                </div>

                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Adresse</p>
                    <p class="single-grid--information"><?php the_field( 'adresse' ); ?></p>
                </div>

                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Bureaux d'études</p>
                    <p class="single-grid--information"><?php the_field( 'bureaux_detude' ); ?></p>
                </div>

                <div class="single-grid--donnes-techniques-container">
                    <p class="single-grid--title">Corps de Métiers</p>
                    <p class="single-grid--information"><?php the_field( 'corps_de_metiers' ); ?></p>
                </div>
            </div>
        </div>


        <div class="single-grid--footer-fake">
            <a class="donnees-techniques-button" href="#">Données Techniques</a>
            <span class="next-post-mobile"><?php previous_post_link('%link', 'Project Suivant'); ?></span>
        </div>
    </div>
    <div class="single-grid--container-right">
        <!-- Slider main container -->
        <div class="swiper-container swiper-container-right">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php if ( have_rows( 'slider_de_droite' ) ) : ?>
                    <?php while ( have_rows( 'slider_de_droite' ) ) : the_row(); ?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <?php $image_home = get_sub_field( 'image' ); ?>
                            <?php $size = 'full'; ?>
                            <?php if ( $image_home ) : ?>
                                <?php echo wp_get_attachment_image( $image_home, $size ); ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>
        </div>


        <div class="single-grid--footer-container-right">
            <span class="next-post"><?php previous_post_link('%link', 'Project  Suivant'); ?></span>
        </div>
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

