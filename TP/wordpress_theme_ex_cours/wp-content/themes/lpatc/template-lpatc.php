<?php
/*
Template Name: template lpatc
*/

get_header(); ?>

<div>

<h1>template-lpatc</h1>
<p>Ceci est une page à laquelle on a attribué le template personnalisé "template-lpatc"</p>

<?php get_template_part( 'loop' , 'template' ); ?>

<?php
$toto = "Hello, je m'appelle Toto !";
echo $toto . '<br>';

$toto = apply_filters( 'lpatc_toto' , $toto );
echo $toto;
?>
    
</div>

<?php get_footer(); ?>
