        

        <?php get_header() ?>

        <div class="container">

            <div class="left-main">

            	<h3>Page Index.php</h3>

            	<p>Ici mon bloc central ...</p>

                <p>Ici mes CPT book</p>

                <?php

                // WP_Query arguments
                $args = array(
                    // custom your query
                    'post_type'              => array( 'page' ),
                    'order'                  => 'DESC',
                    'orderby'                => 'date',
                );

                // The Query
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        // Display post title
                        the_title('<h3>', '</h3>');
                        // Display post content
                        the_content();

                    }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();



                // WP_Query arguments
                $args = array(
                    // custom your query
                    'post_type'              => array( 'Movie' ),
                    'order'                  => 'DESC',
                    'orderby'                => 'date',
                );

                // The Query
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        // Display post title
                        the_title('<h3>', '</h3>');
                        // Display post content
                        the_content();

                        ?>


                        <strong>Type: </strong><?php the_field('type'); ?>

                        <br><br>

                        <strong>Réalisateur: </strong><?php the_field('realisateur'); ?>

                        <br><br>

                        <?php

                    }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();

                ?>

            </div>


            <div class="right-sidebar">

                <h3>Right Sidebar</h3>

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("right-sidebar") ): ?>
                <?php endif;?>

            </div>

        </div>


        <?php get_footer() ?>