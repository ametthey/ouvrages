<div id="container-intro">
    <div class="intro--texts">
        <h1 class="intro--logo">ouvrage</h1>

        <span class="intro--separator"></span>

        <!-- ANIMATION OF ALL PROJECTS TITLES -->
        <div class="intro--animations">
            <div class="animations-container">
            <!-- <h1>paris</h1> -->
            <?php
                $args = array(
                    'orderby' => 'date',
                    'post_type'      => 'project',
                    'posts_per_page' => -1
                );
                $projects = new WP_Query( $args );
                if ( $projects->have_posts() ) : while ( $projects->have_posts() ) : $projects->the_post();
            ?>
            <h1><?php the_title(); ?></h1>

            <?php endwhile; endif; wp_reset_postdata(); ?> <!-- WP_Query for CPT project -->
            </div>
        </div>
    </div>
</div>
