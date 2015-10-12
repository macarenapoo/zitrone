<?php if( have_rows('media') ): ?>

<section  class="bg-dark" id="news_sub">
  <div class="grid">
    <div class="grid__col--16">
      <h1><?php the_field('title_news_and_media'); ?></h1>
      <ul class="news">

        <?php while( have_rows('media') ): the_row(); ?>

          <?php get_template_part('templates/about/loop', 'media'); ?>

        <?php endwhile; ?>

      </ul>
    </div>
  </div>
</section>

<?php endif; ?>
