
<div class="acard <?= ( $args['increment'] > 12 ) ? 'acard_type_hidden' : ''; ?>"> 
  <!-- Swiper -->
  <?php 
  $a_gallery = get_field('a_gallery');
  // Characteristics
  $a_status = get_field('a_status');
  $a_model_year = get_field('a_model_year');
  $a_mileage = get_field('a_mileage');
  $a_country = get_field('a_country');
  $a_color = get_field('a_color');
  $a_engine = get_field('a_engine');
  $a_unit = get_field('a_unit');
  $a_state = get_field('a_state');
  $a_equipment = get_field('a_equipment');
  $a_transmission = get_field('a_transmission');
  if ( $a_gallery ): ?>
  <div class="acard__thumb">
    <?php foreach( array_slice($a_gallery, 0, 5) as $image ): ?>
      <img src="<?php echo $image['url']; ?>" alt="image">
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <a href="<?php the_permalink(); ?>" class="acard__content">
    <h2 class="acard__title"><?php the_title(); ?></h2>
    <div class="acard__price">
      <?php if (get_field('a_old_price')) { ?><div class="old">$<?php the_field('a_old_price'); ?></div><?php } ?>
      <?php if (get_field('a_new_price')) { ?><div class="new">$<?php the_field('a_new_price'); ?></div><?php } ?>
    </div>
    <div class="acard__chars">
      <?php if ($a_mileage) { ?><p><?php echo $a_mileage; ?></p><?php } ?>
      <?php if ($a_transmission) { ?><p><?php echo $a_transmission; ?></p><?php } ?>
      <?php if ($a_engine) { ?><p><?php echo $a_engine; ?></p><?php } ?>
      <?php if ($a_unit) { ?><p><?php echo $a_unit; ?></p><?php } ?>
    </div>
  </a>
</div>
