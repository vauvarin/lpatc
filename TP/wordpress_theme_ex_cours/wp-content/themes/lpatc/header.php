<?php
/**
 * Header template file: header.php
 *
 *
 * @package WordPress
 * @subpackage lpatc
 * @since lpatc 1.0
 */
?>
<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8" />
        <title> Mon premier thème WordPress </title>

        <?php wp_head(); ?>
        
    </head>

    <body>

    	<header>
            <?php bloginfo( 'name' ); ?>
            <br>
            <?php bloginfo( 'description' ); ?>
    	</header>


            <?php 
            $args_nav_menu = array(
                'theme_location'  => 'menu_principal', // Designe l'emplacement du menu
                'menu'            => '', // Designe le menu que l'on souhaite afficher (id, slug, nom dans le back-end). Prend la main sur 'theme_location'
                'container'       => 'nav', // Defaut '<div>', mettre 'false' pour aucun, accepte <div> ou <nav>
                'container_class' => 'menu-principal', // Defaut: menu-{menu slug}-container 
                'container_id'    => 'menu-principal', // Defaut: none
                'menu_class'      => 'toto', // Classe(s) de la balise <ul>, defaut: menu
                'menu_id'         => 'toto', // Id de la balise <ul>, defaut: menu-{menu slug} ou menu-{menu slug}-n si dupliqué
                'echo'            => true, // true = affiche, false = renvoie, defaut: true
                'fallback_cb'     => 'wp_page_menu', // Fonction à utiliser si wp_nav_menu non utilisé. Defaut: wp_page_menu 
                'before'          => '', // Afficher du texte avant la balise <a>, defaut: none
                'after'           => '', // Afficher du texte après la balise <a>, defaut: none
                'link_before'     => '', // Afficher du texte avant le texte du lien, defaut: none
                'link_after'      => '', // Afficher du texte après le texte du lien, defaut: none
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Default: <ul id="%1$s" class="%2$s">%3$s</ul> %1$s reprend 'menu_id', %2$s reprend 'menu_class', %3$s affiche la liste des items
                'depth'           => 0, // Profondeur des sous-menus, defaut: 0 (pas de limite)
                'walker'          => '' // Objet pour une customisation plus poussée du menu
            );

            wp_nav_menu( $args_nav_menu ); 
            ?>


        <div id="main" class="wrapper">