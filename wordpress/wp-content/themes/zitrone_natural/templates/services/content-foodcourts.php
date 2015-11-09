<section class="banner" id="food_courts_sub">
  <div class="services_banner" style="background-image: url(<?php the_field('image_food-courts'); ?>)">
  </div>
  <div class="grid">
    <div class="grid__col--8 centered text-center">
      <h1><?php the_field('title_food-courts'); ?></h1>
      <?php the_field('description_food-courts'); ?>
      <?php if( have_rows('brands') ): ?>
        <p><strong><?php the_field('brands_label'); ?></strong></p>
      <?php endif; ?>
    </div>
  </div>
  <div class="grid">
    <?php if( have_rows('brands') ): ?>
      <ul class="food-court-brands">
        <?php while( have_rows('brands') ): the_row(); ?>

          <?php get_template_part('templates/services/loop', 'brand'); ?>

        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

  </div>
  <?php if( have_rows('zitrone_express')): 
    while ( have_rows('zitrone_express') ): the_row();
  ?>
  <div class="grid">
      <div class="grid__col--10 centered">
        <div class="zitrone-express">
          <div class="logo">
            <img src="<?php the_sub_field('logo'); ?>"/>
          </div>
          <div class="description">
            <?php the_sub_field('description'); ?>
          </div>
        </div>
      </div>
    </div>
  <?php 
    endwhile;
    
  endif; ?>
</section>
