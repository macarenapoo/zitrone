<?php $rows = get_field('slides');  shuffle( $rows );?>
<?php foreach( $rows as $row ):?>

  <div class="slide">
    <div class="main_banner" style="background-image: url(<?php echo $row['image']; ?>)">
      <div class="caption-container">
        <div class="grid">
          <div class="grid__col--16">
            <div class="caption">
              <div class="logo" style="background-image:url(<?php $company = $row['company']; echo wp_get_attachment_url( get_post_thumbnail_id( $company[0] ) ); ?>)"></div>
              <div class="description"><?php echo $row['description']; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endforeach; ?>
