<section class="bg-blue banner" id="dining_hall_sub">
  <div class="services_banner unloaded" style="background-image: url(<?php the_field('image_dining-hall'); ?>)">
  </div>
  <div class="grid">
    <div class="grid__col--7">
      <h1><?php the_field('title_dining-hall'); ?></h1>
      <?php the_field('description_dining-hall'); ?>
    </div>
    <div class="grid__col--8">
      <ul class="bullets">
        <?php the_field('benefits'); ?>
      </ul>
    </div>
  </div>
</section>
