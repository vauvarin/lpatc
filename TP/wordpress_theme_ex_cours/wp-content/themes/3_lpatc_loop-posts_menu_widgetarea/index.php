
    
        <?php get_header() ?>
        

        <div class="main">

        	<h3>Page Index.php</h3>

        	<p>Ici mon bloc central ...</p>

        	<p>Boucle sur les articles:</p>

        	<?php

        	// WP_Query arguments
			$args = array(
				// custom your query
				'post_type'              => array( 'post' ),
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

			?>


        </div>


        <?php get_footer() ?>




