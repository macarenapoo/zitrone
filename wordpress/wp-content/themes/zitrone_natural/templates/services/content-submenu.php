<nav class="submenu" >
	<ul>
		<?php if( get_field('display_dining-hall') ): ?>
			<li><a href="#dining_hall_sub"><?php the_field('title_dining-hall'); ?></a></li>
		<?php endif; ?>
		<?php if( get_field('display_food-carts') ): ?>
			<li><a href="#food_carts_sub"><?php the_field('title_food-carts'); ?></a></li>
		<?php endif; ?>
		<?php if( get_field('display_food-courts') ): ?>
			<li><a href="#food_courts_sub"><?php the_field('title_food-courts'); ?></a></li>
		<?php endif; ?>
		<?php if( get_field('display_zitrone-cafe') ): ?>
			<li><a href="#zitrone_cafe_sub"><?php the_field('title_zitrone-cafe'); ?></a></li>
		<?php endif; ?>
		<?php if( get_field('display_catering') ): ?>
			<li><a href="#catering_sub"><?php the_field('title_catering'); ?></a></li>
		<?php endif; ?>
	</ul>
</nav>
