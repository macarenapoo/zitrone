<?php

function get_testimonials( $id = '', $number = -1) {
  $args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => $number,
    'orderby' => 'rand'
  );
  $query = new WP_Query( $args );

  if( $query->have_posts() ) :
  ?>
      <section id="<?php echo $id; ?>" class="testimonials-container">
        <div class="grid">
          <div class="grid__col--14 centered">
            <ul class="testimonials">
              <?php
                while ( $query->have_posts() ) : $query->the_post();
                  get_template_part('loop', 'testimonial');
                endwhile;
              ?>
            </ul>
          </div>
        </div>
      </section>
  <?php
    wp_reset_postdata();
  endif;
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Zitrone Natural',
		'menu_title'	=> 'Zitrone Natural',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

?>
