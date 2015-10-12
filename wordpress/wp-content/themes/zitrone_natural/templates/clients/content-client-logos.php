<section class="clients_logos_section">
  <div class="grid">
    <div class="grid__col--16">
      <?php
        $args = array(
          'post_type' => 'client',
          'posts_per_page' => -1
        );
        $query = new WP_Query( $args );

        if( $query->have_posts() ) :
      ?>
          <ul class="clients_logos">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

              <li><a href="<?php the_field( 'link' ); ?>" target="_blank"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"/></a></li>

            <?php endwhile; ?>
          </ul>
      <?php
        endif;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
