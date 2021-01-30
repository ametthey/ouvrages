<?php get_header( 'project' ); ?>


    <div class="projects-grid">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content' , 'project' ); ?>

            <?php endwhile; endif; ?>

    </div>
</header>



<?php get_footer(); ?>
