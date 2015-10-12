<?php if( have_rows('benefits') ): ?>

  <section id="why_sub">
    <div class="grid">
      <div class="grid__col--16">
        <h1><?php the_field('title_why_zitrone'); ?></h1>
        <ul class="why">

          <?php while ( have_rows('benefits') ) : the_row();

            get_template_part('templates/about/loop', 'benefit');

          endwhile; ?>

        </ul>
      </div>
    </div>
  </section>

<?php endif; ?>
