<?php
/*
loop-template.php : Utilisation de la fonction "get_template_part()" voir fichier "template-lpatc.php"
*/
?>

	<h2>Utilisation de "get_template_part()"</h2>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
        <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
        <div>
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>