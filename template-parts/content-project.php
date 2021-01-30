<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

<div class="home-grid--item">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail( 'thumbnail' ); ?>
</div>
