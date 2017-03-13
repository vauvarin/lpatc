<!DOCTYPE html>
<html>

    <head>

    	<meta charset="utf-8" />
        <title> Mon premier thème WordPress </title>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css" />
        
    </head>

    <body>



    	<header>

            <h2>Header</h2>

            <strong>Name :</strong><?php bloginfo( 'name' ); ?>
            <br>
            <strong>Description :</strong><?php bloginfo( 'description' ); ?>

    	</header>

    	<nav>

            <?php

            // Menu
            wp_nav_menu();


            ?>

    	</nav>