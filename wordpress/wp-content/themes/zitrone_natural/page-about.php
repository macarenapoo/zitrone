<?php
/**
 * Template Name: About Us
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('templates/about/content', 'submenu'); ?>

	<div class="main about">
		<section class="main_banner unloaded" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>)">
		</section>
		<section class="bg-blue" id="about_sub">
			<div class="grid">
				<div class="grid__col--14 centered">
					<h1><?php the_title(); ?></h1>
					<div class="columns-2">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-dark-blue">
			<div class="grid">
				<div class="grid__col--8 centered">
					<div id="gender-stats">
						<div class="stat female"><span class="odometer" data-value="<?php the_field('women'); ?>">0</span>%</div>
						<div class="stat male"><span class="odometer" data-value="<?php the_field('men'); ?>">0</span>%</div>
					</div>
				</div>
				<div class="grid">
					<div class="grid__col--10 centered">
						<hr class="small"/>
						<div class="legend"><?php the_field('description'); ?></i>
					</div>
				</div>
			</div>
		</section>

		<?php get_template_part('templates/about/content','benefits'); ?>

		<?php get_template_part('templates/about/content','news'); ?>

	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
