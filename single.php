<?php get_header(); ?>

<!-- vars -->
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
// Price
$a_old_price_before = get_field('a_old_price_before');
$a_old_price = get_field('a_old_price');
$a_new_price_before = get_field('a_new_price_before');
$a_new_price = get_field('a_new_price');
// Text info
$a_info = get_field('a_info');
// We recomend
$a_recomend_posts = get_field('a_recomend_posts')
?>

<script>
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
  var a_new_price = <?php echo $a_new_price; ?>;
  var formatted_a_new_price = formatNumber(a_new_price);
  var a_mileage = <?php echo $a_mileage; ?>;
  var formatted_a_mileage = formatNumber(a_mileage);
</script>


<div class="product">
  <div class="container">
    <div class="product__container">
      <div class="product__slider">
        <!-- Swiper -->
        <?php if ( $a_gallery ): ?>
        <div class="swiper productMainSwiper">
          <div class="swiper-wrapper">
            <?php foreach( $a_gallery as $image ): ?>
              <div class="swiper-slide">
                <a href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                  <img src="<?php echo $image['url']; ?>" alt="image"/>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>
        <?php if ( $a_gallery ): ?>
        <div class="productSecondSwiper__wrapper">
          <div thumbsSlider="" class="swiper productSecondSwiper">
            <div class="swiper-wrapper">
              <?php foreach( $a_gallery as $image ): ?>
                <div class="swiper-slide">
                  <img src="<?php echo $image['url']; ?>" alt="image">
                </div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <div class="product__content">
        <h1 class="product__title"><?php the_title(); ?></h1>
        <div class="product__chars">
          <?php if ($a_status) { ?><p class="char"><span><?php echo __('Status', 'freshauto'); ?></span> <?php echo $a_status; ?></p><?php } ?>
          <?php if ($a_unit) { ?><p class="char"><span><?php echo __('Drive unit', 'freshauto'); ?></span> <?php echo $a_unit; ?></p><?php } ?>
          <?php if ($a_model_year) { ?><p class="char"><span><?php echo __('Model year', 'freshauto'); ?></span> <?php echo $a_model_year; ?></p><?php } ?>
          <?php if ($a_state) { ?><p class="char"><span><?php echo __('State', 'freshauto'); ?></span> <?php echo $a_state; ?></p><?php } ?>
          <?php if ($a_mileage) { ?><p class="char"><span><?php echo __('Mileage', 'freshauto'); ?></span> <span id="single-mileage"></span> <?php echo __('km', 'freshauto'); ?></p><?php } ?>
          <?php if ($a_equipment) { ?><p class="char"><span><?php echo __('Equipment', 'freshauto'); ?></span> <?php echo $a_equipment; ?></p><?php } ?>
          <?php if ($a_country) { ?><p class="char"><span><?php echo __('Country of export', 'freshauto'); ?></span> <?php echo $a_country; ?></p><?php } ?>
          <?php if ($a_color) { ?><p class="char"><span><?php echo __('Color', 'freshauto'); ?></span> <?php echo $a_color; ?></p><?php } ?>
          <?php if ($a_engine) { ?><p class="char"><span><?php echo __('Engine', 'freshauto') ?></span> <?php echo $a_engine; ?></p><?php } ?>
        </div>
        <div class="product__price">
          <?php if ($a_old_price) { ?>
            <div class="old">
              <?php if ($a_old_price_before) { ?>
                <span><?php echo $a_old_price_before; ?></span>
              <?php } ?> $<span id="single-old-price"></span>
            </div>
          <?php } ?>
          <?php if ($a_new_price) { ?>
            <div class="new">
              <?php if ($a_new_price_before) { ?>
                <span><?php echo $a_new_price_before; ?></span>
              <?php } ?> $<span id="single-new-price"></span>
            </div>
          <?php } ?>
        </div>
        <div class="product__nav">
          <a href="#" class="button-primary to-state" data-state="order"><?php echo __('Order', 'freshauto'); ?></a>
        </div>
      </div>
    </div>
    <?php if ($a_info) { ?><div class="product__about"><?php echo $a_info; ?></div><?php } ?>
    <?php if ($a_recomend_posts) { ?>
    <div class="product__recom">
      <div class="heading">
        <h2 class="section-title"><?php echo __('We recomend', 'freshauto'); ?></h2>
      </div>
      <div class="latesta__cards">
        <?php foreach( $a_recomend_posts as $post ): ?>
          <?php get_template_part('template-parts/acard'); ?>
        <?php endforeach; ?>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var productTitle = document.querySelector('.product__title');
    var orderNameField = document.getElementById('order-name');
    if (productTitle && orderNameField) {
      orderNameField.value = productTitle.innerText;
    }
    
    document.getElementById('single-old-price').textContent = formatted_a_old_price;
    document.getElementById('single-new-price').textContent = formatted_a_new_price;
    document.getElementById('single-mileage').textContent = formatted_a_mileage;
  });
</script>

<div class="state" data-state="order">
	<div class="state-box">
		<div class="close">
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1L17 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      <path d="M17 1L1 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
    </svg>
    </div>
    <div class="modal-heading">
      <?php if (get_field('orderform_title', 'options')) { ?><h2><?php the_field('orderform_title', 'options'); ?></h2><?php } ?>
      <?php if (get_field('orderform_text', 'options')) { ?><p><?php the_field('orderform_text', 'options'); ?></p><?php } ?>
    </div>
    <?php
    if (defined('ICL_LANGUAGE_CODE')) {
        $current_language = ICL_LANGUAGE_CODE;
        
        if ($current_language == 'en') {
            echo do_shortcode('[contact-form-7 id="cf82f33" title="Order form"]');
        } elseif ($current_language == 'ru') {
            echo do_shortcode('[contact-form-7 id="2603b65" title="Форма заказа"]');
        }
    } else {
        // Если плагин WPML не активирован, выводим форму по умолчанию
        echo do_shortcode('[contact-form-7 id="cf82f33" title="Order form"]');
    }
    ?>
	</div>
</div>

<?php get_footer(); ?>