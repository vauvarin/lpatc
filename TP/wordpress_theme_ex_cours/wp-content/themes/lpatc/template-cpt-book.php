<?php
/*
Template Name: template book
*/

get_header(); ?>

<h1>Japan books</h1>

<h2>Utilisation d'une page template</h2>

<?php
		$args = array(
			'post_type' => 'book',
		);
		$products = new WP_Query( $args );
		if( $products->have_posts() ) {
			while( $products->have_posts() ) {
				$products->the_post();
				?>
					<h2><?php the_title() ?></h2>
					<?php the_excerpt(); ?>
					<div class='content'>
						<?php the_content() ?>
					</div>
				<?php
			}
		}
?>

<?php get_footer(); ?>
