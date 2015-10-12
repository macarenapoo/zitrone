<?php
/**
 * Template Name: Clients
 */

get_header(); ?>

<div class="main clients">

	<?php get_template_part( 'templates/clients/content', 'slider' ); ?>

	<?php get_template_part( 'templates/clients/content', 'client-logos'); ?>

	<?php get_testimonials( 'clients_testimonials' ); ?>

</div>

<?php get_footer(); ?>
