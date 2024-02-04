<?php 
/*
Template Name: Home
*/
get_header(); ?>

<section class="hero">
  <div class="container">
    <?php if (get_field('hero_title')) { ?><h1 class="hero__title"><?php the_field('hero_title'); ?></h1><?php } ?>
    <?php if ( have_rows('hero_benefits') ): ?>
      <div class="hero__benefits">
        <?php while ( have_rows('hero_benefits') ) : the_row(); ?>
          <div class="hero-benefit">
            <h2>
              <?php if (get_sub_field('hero_benefits_value')) { ?><span><?php the_sub_field('hero_benefits_value'); ?></span><?php } ?>
              <?php if (get_sub_field('hero_benefits_subtitle')) { the_sub_field('hero_benefits_subtitle'); } ?>
            </h2>
            <?php if (get_sub_field('hero_benefits_text')) { ?><p><?php the_sub_field('hero_benefits_text'); ?></p><?php } ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else : endif; ?>
  </div>
</section>

<div class="hero__search">
  <h3 class="section-title">Поиск</h3>
  <p>на данный момент <strong>2 459</strong> уникальных предложений</p>
  <form action="#">
    <div class="form-group">
      <select id="select-marka" class="js-select2">
        <option></option>
        <option value="marka1">Марка 1</option>
        <option value="marka2">Марка 2</option>
        <option value="marka3">Марка 3</option>
        <option value="marka4">Марка 4</option>
        <option value="marka5">Марка 5</option>
        <option value="marka6">Марка 6</option>
        <option value="marka7">Марка 7</option>
        <option value="marka8">Марка 8</option>
        <option value="marka9">Марка 9</option>
        <option value="marka10">Марка 10</option>
        <option value="marka11">Марка 11</option>
        <option value="marka12">Марка 12</option>
        <option value="marka13">Марка 13</option>
      </select>
    </div>
    <div class="form-group">
      <select id="select-model" class="js-select2">
        <option></option>
        <option value="model1">Модель 1</option>
        <option value="model2">Модель 2</option>
        <option value="model3">Модель 3</option>
        <option value="model4">Модель 4</option>
        <option value="model5">Модель 5</option>
      </select>
    </div>
    <div class="form-group form-group--split">
      <input type="number" name="km_age-from" id="km_age-from" placeholder="Пробег от, км">
      <input type="number" name="km_age-to" id="km_age-to" placeholder="до">
    </div>
    <div class="form-group form-group--split">
      <input type="number" name="price-from" id="price-from" placeholder="Цена от, ₽">
      <input type="number" name="price-to" id="price-to" placeholder="до">
    </div>
    <div class="form-group form-group--split">
      <input type="number" name="year-from" id="year-from" placeholder="Год от">
      <input type="number" name="year-to" id="year-to" placeholder="до">
    </div>
    <button type="submit"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M9.16618 1.66663C7.96816 1.66676 6.7876 1.95388 5.72333 2.50395C4.65906 3.05403 3.74205 3.85106 3.04907 4.82831C2.35608 5.80556 90729 6.93461 1.74025 8.12093C1.57321 9.30724 1.6928 10.5163 2.08899 11.6469C2.48519 12.7775 3.14646 13.7968 4.01746 14.6194C4.888415.4419 5.94383 16.0439 7.09524 16.3748C8.24664 16.7057 9.46058 16.756 10.6354 16.5215C11.8102 16.2869 12.9118 15.7743 13.8478 10266L16.9103 18.0891C17.0675 18.2409 17.278 18.3249 17.4965 18.323C17.715 18.3211 17.924 18.2335 18.0785 18.079C18.233 17.9245 13207 17.7155 18.3226 17.497C18.3245 17.2785 18.2405 17.068 18.0887 16.9108L15.0262 13.8483C15.9078 12.7448 16.46 11.4149 16.6191 10114C16.7782 8.60801 16.5378 7.18818 15.9255 5.91537C15.3132 4.64257 14.3539 3.56852 13.1581 2.81687C11.9623 2.06522 10.5786 1.6669.16618 1.66663ZM4.16618 9.16663C4.16618 8.51002 4.29551 7.85984 4.54678 7.25321C4.79806 6.64658 5.16635 6.09539 5.63065 5.63109C09494 5.1668 6.64614 4.7985 7.25276 4.54723C7.85939 4.29596 8.50957 4.16663 9.16618 4.16663C9.82279 4.16663 10.473 4.29596 11.0796 54723C11.6862 4.7985 12.2374 5.1668 12.7017 5.63109C13.166 6.09539 13.5343 6.64658 13.7856 7.25321C14.0369 7.85984 14.1662 8.510014.1662 9.16663C14.1662 10.4927 13.6394 11.7645 12.7017 12.7022C11.764 13.6398 10.4923 14.1666 9.16618 14.1666C7.8401 14.1666 56833 13.6398 5.63065 12.7022C4.69297 11.7645 4.16618 10.4927 4.16618 9.16663Z"
          fill="currentColor" />
      </svg><span>Поиск</span></button>
  </form>
</div>

<section class="latesta">
  <div class="container">
    <div class="heading">
      <h2 class="section-title">Последние поступления</h2>
    </div>
    <div class="latesta__cards">
      <div class="acard">
        <!-- Swiper -->
        <div class="swiper acardSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.jpg" alt=""></div>
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
</section>

<?php echo get_template_part('template-section/seo-section'); ?>

<?php get_footer(); ?>