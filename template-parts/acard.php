<?php 
$a_old_price = get_field('a_old_price');
$a_new_price = get_field('a_new_price');
$a_mileage = get_field('a_mileage');
?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    function formatNumber(number) {
      var str = String(number).replace(/\s/g, '');
      var formattedStr = '';
      for (var i = str.length - 1; i >= 0; i--) {
        formattedStr = str[i] + formattedStr;
        if ((str.length - i) % 3 === 0 && i !== 0) {
          formattedStr = ' ' + formattedStr;
        }
      }
      return formattedStr;
    }
    var a_old_price = <?php echo $a_old_price; ?>;
    var formatted_a_old_price = formatNumber(a_old_price);
    console.log(formatted_a_old_price);
    var a_new_price = <?php echo $a_new_price; ?>;
    var formatted_a_new_price = formatNumber(a_new_price);
    console.log(formatted_a_new_price);
    var a_mileage = <?php echo $a_mileage; ?>;
    var formatted_a_mileage = formatNumber(a_mileage);
    console.log(formatted_a_mileage);

    document.querySelector('.old-price<?php echo $my_args['my_count']; ?>').textContent = formatted_a_old_price;
    document.querySelector('.new-price<?php echo $my_args['my_count']; ?>').textContent = formatted_a_new_price;
    document.querySelector('.mileage<?php echo $my_args['my_count']; ?>').textContent = formatted_a_mileage;
  });
</script>
<div class="acard <?= ( $args['increment'] > 12 ) ? 'acard_type_hidden' : ''; ?>"> 
  <!-- Swiper -->
  <?php 
  $a_gallery = get_field('a_gallery');
  // Characteristics
  $a_status = get_field('a_status');
  $a_model_year = get_field('a_model_year');
  $a_country = get_field('a_country');
  $a_color = get_field('a_color');
  $a_engine = get_field('a_engine');
  $a_unit = get_field('a_unit');
  $a_state = get_field('a_state');
  $a_equipment = get_field('a_equipment');
  $a_transmission = get_field('a_transmission');
  if ( $a_gallery ): ?>
  <div class="acard__thumb acard-desktop">
    <?php foreach( array_slice($a_gallery, 0, 5) as $image ): ?>
      <img src="<?php echo $image['url']; ?>" alt="image">
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php if ( $a_gallery ): ?>
  <div class="swiper acardSwiper">
    <div class="swiper-wrapper">
      <?php foreach( array_slice($a_gallery, 0, 5) as $image ): ?>
        <div class="swiper-slide">
          <img src="<?php echo $image['url']; ?>" alt="image">
        </div>
      <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <?php endif; ?>
  <a href="<?php the_permalink(); ?>" class="acard__content">
    <h2 class="acard__title"><?php the_title(); ?></h2>
    <div class="acard__price">
      <?php if ($a_old_price) { ?><div class="old">$<span class="old-price<?php echo $my_args['my_count']; ?>"></span></div><?php } ?>
      <?php if ($a_new_price) { ?><div class="new">$<span class="new-price<?php echo $my_args['my_count']; ?>"></span></div><?php } ?>
    </div>
    <div class="acard__chars">
      <?php if ($a_mileage) { ?><p class="mileage<?php echo $my_args['my_count']; ?>"></p><?php } ?>
      <?php if ($a_transmission) { ?><p><?php echo $a_transmission; ?></p><?php } ?>
      <?php if ($a_engine) { ?><p><?php echo $a_engine; ?></p><?php } ?>
      <?php if ($a_unit) { ?><p><?php echo $a_unit; ?></p><?php } ?>
    </div>
  </a>
</div>