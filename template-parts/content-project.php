<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

    <?php
        $terms = get_the_terms($post->ID, 'categorie');
        foreach ( $terms as $term ) {
    ?>
    <div class="grid-item home-grid--item <?php echo $term->slug ?>">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail( 'home-grid' ); ?>
    </div>
    <?php } ?>
