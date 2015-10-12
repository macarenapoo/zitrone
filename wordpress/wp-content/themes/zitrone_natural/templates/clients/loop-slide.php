<?php while( have_rows('slides') ): the_row(); ?>

  <div class="slide">
    <div class="main_banner" style="background-image: url(<?php the_sub_field('image'); ?>)">
      <div class="caption-container">
        <div class="grid">
          <div class="grid__col--16">
            <div class="caption">
              <div class="logo" style="background-image:url(<?php $company = get_sub_field('company'); echo wp_get_attachment_url( get_post_thumbnail_id( $company[0] ) ); ?>)"></div>
              <div class="description"><?php the_sub_field('description'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
