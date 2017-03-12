<?php
/**
 * page.php
 *
 *
 * @package WordPress
 * @subpackage lpatc
 * @since lpatc 1.0
 */

get_header(); 

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