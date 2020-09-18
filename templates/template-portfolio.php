<?php
/**
 * Template Name: Portfolio
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Customized-Port
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	get_template_part( 'template-parts/content-cover' );

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
