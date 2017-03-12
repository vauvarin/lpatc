<?php
/*
archive-book.php : CPT "book"
*/

get_header(); ?>

<h1>Japan books</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <div class="post">
        <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
        <div>
        	<?php the_excerpt(); ?>
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
