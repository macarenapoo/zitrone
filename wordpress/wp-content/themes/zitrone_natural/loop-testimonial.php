<li class="testimonial">
  <blockquote>
    <?php the_content(); ?>
    <footer>
      <?php
        $company = get_field('company');
        if( $company ):
            echo	'<div class="logo" style="background-image:url('. wp_get_attachment_url( get_post_thumbnail_id( $company->ID ) ) .')"></div>';
        endif;
      ?>
      <div class="cite">
        <cite><?php the_field('name'); ?></cite>
        <p><?php the_field('position'); ?></p>
      </div>
    </footer>
  </blockquote>
</li>
