<li>
  <span class="icon_news <?php the_sub_field('type'); ?>"></span>
  <?php

    switch( get_sub_field('type') ) {
        default:
            ?>
              <a href="<?php the_sub_field('link'); ?>" class="wplightbox" target="_blank">
            <?php
          break;
    }

  ?>

    <div class="title"><?php the_sub_field('title'); ?></div>
    <div class="source"><?php the_sub_field('source'); ?></div>
  </a>
</li>
