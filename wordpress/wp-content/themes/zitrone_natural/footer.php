<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zitrone_Natural
 */

?>

	</div><!-- #content -->
	<footer class="main-footer">
		<div class="grid">
			<div class="grid__col--10">
				<div class="footer-info">
					® <?php echo date('Y'); ?>. <?php echo bloginfo('name'); ?>. Call us at <a href="tel:<?php  the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a> or email us at <a href="mailto:<?php  the_field('email', 'options'); ?>"><?php  the_field('email', 'options'); ?></a>
				</div>
			</diV>
			<div class="grid__col--6">
				<div class="social-media">
					<label>Connect with us:</label>
					<ul>
						<?php if( get_field('twitter', 'options') ): ?>
							<li class="social-media-icon twitter">
								<a href="https://twitter.com/<?php the_field('twitter', 'options'); ?>" target="_blank">Twitter</a>
							</li>
						<?php endif; ?>
						<?php if( get_field('facebook', 'options') ): ?>
							<li class="social-media-icon facebook">
								<a href="https://facebook.com/<?php  the_field('facebook', 'options'); ?>" target="_blank">Facebook</a>
							</li>
						<?php endif; ?>
						<?php if( get_field('instagram', 'options') ): ?>
							<li class="social-media-icon instagram">
								<a href="http://instagram.com/<?php  the_field('instagram', 'options'); ?>" target="_blank">Instagram</a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
