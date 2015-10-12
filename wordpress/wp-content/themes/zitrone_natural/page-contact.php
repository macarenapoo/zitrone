<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="main">
	<section class="main_banner unloaded" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>)">
	</section>
	<section id="contact_forms">
		<div class="grid">
			<div class="grid__col--7 bg-blue">
				<h2><?php the_title(); ?></h2>
				<div class="contact-us">
					<div class="col contact-us-info">
						<div class="zitrone"><label class="icon_form zitrone"></label><a href="<?php  echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo('name'); ?></a></div>
						<div class="phone"><label class="icon_form phone"></label><a href="tel:<?php  the_field('phone', 'options'); ?>"><?php  the_field('phone', 'options'); ?></a></div>
						<div class="email"><label class="icon_form email"></label><a href="mailto:<?php  the_field('email', 'options'); ?>"><?php  the_field('email', 'options'); ?></a></div>
					</div>
					<div class="col contact-us-social">
						<?php if( get_field('twitter', 'options') ): ?>
							<div class="twitter"><label class="icon_form twitter"></label><a href="https://twitter.com/<?php the_field('twitter', 'options'); ?>"><?php the_field('twitter', 'options'); ?></a></div>
						<?php endif; ?>
						<?php if( get_field('facebook', 'options') ): ?>
							<div class="facebook"><label class="icon_form facebook"></label><a href="https://facebook.com/<?php the_field('facebook', 'options'); ?>"><?php the_field('facebook', 'options');?></a></div>
						<?php endif; ?>
						<?php if( get_field('instagram', 'options') ): ?>
							<div class="instagram"><label class="icon_form instagram"></label><a href="http://instagram.com/<?php  the_field('instagram', 'options'); ?>" target="_blank">@<?php  the_field('instagram', 'options'); ?></a></div>
						<?php endif; ?>
					</div>
				</div>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( get_field('contact_form_id') ); } ?>

			</div>
			<div class="grid__col--7 bg-dark">
				<h2><?php the_field('title_join'); ?></h2>
				<?php the_field('content_join'); ?>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( get_field('join_form_id') ); } ?>
			</div>
		</div>
	</section>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
