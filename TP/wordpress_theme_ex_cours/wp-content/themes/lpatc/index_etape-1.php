<?php
/**
 * The main template file: index.php
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage lpatc
 * @since lpatc 1.0
 */
?>

<html>
    <head>
    	<meta charset="utf-8" />
        <title> Mon premier thème WordPress </title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css" />
    </head>

    <body>

    	<header>
    	Ici le header ...
    	</header>

        <div id="main" class="wrapper">

        	<p>Ici mon bloc central ...</p>

        	<?php
        		echo '<p>Ici, affichage du texte avec une fonction php "echo"</p>';
        	?>

        </div>

        <footer>
        	Ici le footer ...
        </footer>

    </body>

</html>