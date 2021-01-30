<?php get_header( 'single' ); ?>

<div class="single-grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content' , 'single-project' ); ?>

    <?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>
