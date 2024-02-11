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
$a_old_price = get_field('a_old_price');
$a_new_price = get_field('a_new_price');
// Text info
$a_info = get_field('a_info');
// We recomend
$a_recomend = get_field('a_recomend');
$a_recomend_post = get_sub_field('a_recomend_post')
?>

<div class="product">
  <div class="container">
    <div class="product__container">
      <div class="product__slider">
        <!-- Swiper -->
        <div class="swiper productMainSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="productSecondSwiper__wrapper">
          <div thumbsSlider="" class="swiper productSecondSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <div class="product__content">
        <h1 class="product__title"><?php the_title(); ?></h1>
        <div class="product__chars">
          <?php if ($a_status) { ?><p class="char"><span><?php echo __('Status', 'freshauto'); ?></span> <?php echo $a_status; ?></p><?php } ?>
          <?php if ($a_unit) { ?><p class="char"><span><?php echo __('Drive unit', 'freshauto'); ?></span> <?php echo $a_unit; ?></p><?php } ?>
          <?php if ($a_model_year) { ?><p class="char"><span><?php echo __('Model year', 'freshauto'); ?></span> <?php echo $a_model_year; ?></p><?php } ?>
          <?php if ($a_state) { ?><p class="char"><span><?php echo __('State', 'freshauto'); ?></span> <?php echo $a_state; ?></p><?php } ?>
          <?php if ($a_mileage) { ?><p class="char"><span><?php echo __('Mileage', 'freshauto'); ?></span> <?php echo $a_mileage; ?></p><?php } ?>
          <?php if ($a_equipment) { ?><p class="char"><span><?php echo __('Equipment', 'freshauto'); ?></span> <?php echo $a_equipment; ?></p><?php } ?>
          <?php if ($a_country) { ?><p class="char"><span><?php echo __('Country of export', 'freshauto'); ?></span> <?php echo $a_country; ?></p><?php } ?>
          <?php if ($a_color) { ?><p class="char"><span><?php echo __('Color', 'freshauto'); ?></span> <?php echo $a_color; ?></p><?php } ?>
          <?php if ($a_engine) { ?><p class="char"><span><?php echo __('Engine', 'freshauto') ?></span> <?php echo $a_engine; ?></p><?php } ?>
        </div>
        <div class="product__price">
          <?php if ($a_old_price) { ?><div class="old"><?php echo $a_old_price; ?></div><?php } ?>
          <?php if ($a_new_price) { ?><div class="new"><?php echo $a_new_price; ?></div><?php } ?>
        </div>
        <div class="product__nav">
          <a href="#" class="button-primary">Заказать</a>
          <a href="#" class="button-third">Проверить</a>
        </div>
      </div>
    </div>
    <?php if ($a_info) { ?><div class="product__about"><?php echo $a_info; ?></div><?php } ?>
    <div class="product__recom">
      <div class="heading">
        <h2 class="section-title"><?php echo __('We recomend', 'freshauto'); ?></h2>
      </div>
      <div class="latesta__cards">
        <div class="acard">
          <!-- Swiper -->
          <div class="swiper acardSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <a href="single.html" class="acard__content">
            <h2 class="acard__title">Ford Bronco Sport</h2>
            <div class="acard__price">
              <div class="old">$160 000</div>
              <div class="new">$130 000</div>
            </div>
            <div class="acard__chars">
              <p>157 129 км</p>
              <p>Автомат</p>
              <p>1.6/128 л.с.</p>
              <p>Передний привод</p>
            </div>
          </a>
        </div>
        <div class="acard">
          <!-- Swiper -->
          <div class="swiper acardSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <a href="single.html" class="acard__content">
            <h2 class="acard__title">Ford Bronco Sport</h2>
            <div class="acard__price">
              <div class="old">$160 000</div>
              <div class="new">$130 000</div>
            </div>
            <div class="acard__chars">
              <p>157 129 км</p>
              <p>Автомат</p>
              <p>1.6/128 л.с.</p>
              <p>Передний привод</p>
            </div>
          </a>
        </div>
        <div class="acard">
          <!-- Swiper -->
          <div class="swiper acardSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/img/auto.jpg" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <a href="single.html" class="acard__content">
            <h2 class="acard__title">Ford Bronco Sport</h2>
            <div class="acard__price">
              <div class="old">$160 000</div>
              <div class="new">$130 000</div>
            </div>
            <div class="acard__chars">
              <p>157 129 км</p>
              <p>Автомат</p>
              <p>1.6/128 л.с.</p>
              <p>Передний привод</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>