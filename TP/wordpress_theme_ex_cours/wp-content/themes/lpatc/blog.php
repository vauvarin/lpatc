<?php
/**
 * blog.php
 *
 *
 * @package WordPress
 * @subpackage lpatc
 * @since lpatc 1.0
 */

get_header(); 

// Modification de la requête principale sur la page blog
function lpatc_alter_query( $query ) {

      if ( $query->is_main_query() && ! is_admin() && is_page( 'blog' ) ) {       
        	$query->set( 'posts_per_page' , 2 );
        	echo 'YES';
      } else { 
      		echo 'NO';
      }

   }

add_action( 'pre_get_posts' , 'lpatc_alter_query' );

?>

<div>

    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
        <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
        <div>
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

</div>

<?php get_footer(); ?>