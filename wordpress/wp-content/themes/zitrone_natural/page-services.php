<?php
/**
 * Template Name: Services
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('templates/services/content', 'submenu'); ?>

<div class="main services">

	<?php if( get_field('display_dining-hall') ): ?>
		<?php get_template_part('templates/services/content', 'dininghall'); ?>

	<?php endif; ?>

	<?php if( get_field('display_food-carts') ): ?>

		<?php get_template_part('templates/services/content', 'foodcarts'); ?>

	<?php endif; ?>

	<?php if( get_field('display_food-courts') ): ?>

		<?php get_template_part('templates/services/content', 'foodcourts'); ?>

	<?php endif; ?>

	<?php if( get_field('display_zitrone-cafe') ): ?>

		<?php get_template_part('templates/services/content', 'zitronecafe'); ?>

	<?php endif; ?>

	<?php if( get_field('display_catering') ): ?>

		<?php get_template_part('templates/services/content', 'catering'); ?>

	<?php endif; ?>


</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
