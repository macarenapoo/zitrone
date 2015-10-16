<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="main homepage">
	<section class="main_banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>)">
		<div class="banner  unloaded">
			<div class="grid">
				<div class="grid__col--6 centered">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>

	<?php if( have_rows('services') ): ?>

		<section id="home_services" class="bg-dark">
			<div class="grid">
				<h1><?php the_field('title_services'); ?></h1>
				<?php get_template_part('templates/home/content', 'services_tabs'); ?>
			</div><!-- grid -->
		</section>

	<?php endif; ?>

	<?php
		$args = array(
			'post_type' => 'client',
			'posts_per_page' => -1
		);
		$query = new WP_Query( $args );

		if( $query->have_posts() ) : ?>

			<section id="home_clients">
				<div class="grid">
					<div class="grid__col--16">
						<div class="clients-slider" id="homepage-clients-slider-js">
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<div><a href="<?php the_field('link'); ?>" target="_blank"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"/></a></div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</section>
			<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<?php get_testimonials( 'home_testimonials' ); ?>

	<?php if( get_field('display_contact') ): ?>

		<section id="home_contact" class="bg-dark">
			<div class="grid">
				<div class="grid__col--10 centered">
					<h1><?php the_field('title_contact'); ?></h1>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( get_field('ninja_form_id') ); } ?>
				</div>
			</div>
		</section>

	<?php endif; ?>


</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
