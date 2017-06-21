<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Molnium
 */

?>

<?php 

	get_template_part( 'template-parts/landing/content', 'banner' );

	get_template_part( 'template-parts/landing/content', 'problems' );

	get_template_part( 'template-parts/landing/content', 'solutions' );

	get_template_part( 'template-parts/landing/content', 'interessmore' );

	get_template_part( 'template-parts/landing/content', 'clients' );

	get_template_part( 'template-parts/landing/content', 'technics' );

	get_template_part( 'template-parts/landing/content', 'crisis' );

	get_template_part( 'template-parts/landing/content', 'utp' );

	get_template_part( 'template-parts/landing/content', 'audit' );

	get_template_part( 'template-parts/landing/content', 'marketing' );

	get_template_part( 'template-parts/landing/content', 'results' );

	get_template_part( 'template-parts/landing/content', 'howwork' );

	get_template_part( 'template-parts/landing/content', 'live' );

?>

<?php the_content(); ?>

	
