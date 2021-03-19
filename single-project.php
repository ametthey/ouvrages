<?php get_header( 'single' ); ?>

<div class="single-grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php // get_template_part( 'template-parts/content' , 'single-project' ); ?>

    <?php endwhile; endif; ?>

    <?php
        $args = array(
            'orderby' => 'date',
            'post_type'      => 'project',
            'posts_per_page' => 1
        );
        $projects = new WP_Query( $args );
        if ( $projects->have_posts() ) : while ( $projects->have_posts() ) : $projects->the_post();
    ?>
        <?php get_template_part( 'template-parts/content' , 'single-project' ); ?>

    <?php endwhile; endif; wp_reset_postdata(); ?> <!-- WP_Query for CPT project -->


</div>


<?php get_footer(); ?>
