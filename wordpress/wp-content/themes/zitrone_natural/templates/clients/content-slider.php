<?php if( have_rows('slides') ): ?>

<section class="main_banner clients_slider unloaded" id="clients-slider-js">

<?php if( get_field('randomize') ):

      get_template_part('templates/clients/loop', 'random-slide');

    else:

      get_template_part('templates/clients/loop', 'slide');

    endif; ?>

</section>

<?php endif; ?>
