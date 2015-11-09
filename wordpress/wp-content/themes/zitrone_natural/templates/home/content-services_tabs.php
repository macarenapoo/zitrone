<div class="tabs-panel">
  <nav>
    <ul class="js-tabs-panel-nav">
      <?php $i = -1; ?>
      <?php while( have_rows('services') ): the_row(); $i++; ?>
        <li <?php if($i == 0){ echo 'class="active mobile-active"'; }?>>
          <a><span class="icon_services" style="background-image:url('<?php the_sub_field("icon"); ?>')"></span><?php the_sub_field('name'); ?></a>
          <div class="content-mobile">
            <img src="<?php the_sub_field('image'); ?>">
            <div class="caption">
                <p><?php the_sub_field('description'); ?></p>
            </div>
          </div>
        </li>
    <?php endwhile; ?>
    </ul>
  </nav>
  <div class="content js-tabs-panel-content">
    <?php $i = -1; ?>
      <?php while( have_rows('services') ): the_row(); $i++; ?>
        <section <?php if($i == 0){ echo "class='current'"; } ?> style="background-image:url('<?php the_sub_field("image"); ?>')">
          <div class="caption">
            <div>
              <p><?php the_sub_field('description'); ?></p>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
  </div>
</div><!-- tabs-panel -->
