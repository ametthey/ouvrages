<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <p>Template: Home.php</p>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content' , 'posts' ); ?>

        <?php endwhile; endif;?>

        <?php echo paginate_links(); ?>


    </main>
</div>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
