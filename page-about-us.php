<?php 
/*
Template Name: About us
*/
get_header(); ?>

<section class="whoarewe">
  <div class="container">
    <div class="whoarewe__wrapper">
      <div class="whoarewe__content">
        <?php if (get_field('whoarewe_title')) { ?><h1 class="section-title"><?php the_field('whoarewe_title'); ?></h1><?php } ?>
        <?php if (get_field('whoarewe_content')) { ?><?php the_field('whoarewe_content'); ?><?php } ?>
      </div>
      <!-- Swiper -->
      <?php 
      $images = get_field('whoarewe_slider');
      if ( $images ): ?>
      <div class="swiper whoareweSwiper">
        <div class="swiper-wrapper">
              <?php foreach( $images as $image ): ?>
                <div class="swiper-slide">
                  <img src="<?php echo $image['url']; ?>" alt="image">
                </div>
              <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="searchloc">
  <div class="container">
    <div class="searchloc__wrapper">
      <div class="searchloc__content">
        <?php if (get_field('searchloc_title')) { ?><h2 class="section-title"><?php the_field('searchloc_title'); ?></h2><?php } ?>
        <?php if (get_field('searchloc_content')) { ?><p><?php the_field('searchloc_content'); ?></p><?php } ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-locations-icon.svg" class="searchloc__icon" alt="image">
      </div>
      <div class="searchloc__image" style="background-image: url(<?php the_field('searchloc_map'); ?>);"></div>
      <div class="searchloc__image--mobile" style="background-image: url(<?php the_field('searchloc_map_mobile'); ?>);"></div>
    </div>
  </div>
</section>

<section class="team">
  <div class="container">
    <div class="team__wrapper">
      <div class="heading">
        <?php if (get_field('team_title')) { ?><h2 class="section-title"><?php the_field('team_title'); ?></h2><?php } ?>
      </div>
      <?php if ( have_rows('team_cards') ): ?>
        <div class="team__cards">
          <?php while ( have_rows('team_cards') ) : the_row(); ?>
            <div class="tcard">
            <img src="<?php the_sub_field('team_photo'); ?>" alt="<?php the_sub_field('team_name'); ?> photo">
            <h3><?php the_sub_field('team_name'); ?></h3>
            <p><?php the_sub_field('team_post'); ?></p>
          </div>
          <?php endwhile; ?>
        </div>
      <?php else : endif; ?>
    </div>
  </div>
</section>

<section class="howprocess">
  <div class="container">
    <div class="howprocess__grid">
      <div class="howprocess__heading">
        <h2 class="section-title">Как происходит процесс покупки автомобиля</h2>
      </div>
      <div class="howprocess-item">
        <div class="howprocess-item__content">
          <div class="howprocess-item__title">
            <span>01</span>
            <h3>Выбор автомобиля</h3>
          </div>
          <div class="howprocess-item__text">Вы выбираете автомобиль на сайте, либо, говорите свои пожелания нашему менеджеру</div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/howprocess-01.jpg" class="howprocess-item__image" alt="image">
      </div>
      <div class="howprocess-item">
        <div class="howprocess-item__content">
          <div class="howprocess-item__title">
            <span>02</span>
            <h3>Оценка автомобиля</h3>
          </div>
          <div class="howprocess-item__text">Мы проводим оценку автомобиля в стране отправления для гарантии того, что авто в заводском состоянии. Если выясняются «нюансы», то мы о них сообщаем. Вы получаете видео и фото отчет</div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/howprocess-02.jpg" class="howprocess-item__image" alt="image">
      </div>
      <div class="howprocess-item">
        <div class="howprocess-item__content">
          <div class="howprocess-item__title">
            <span>03</span>
            <h3>Решение о покупки</h3>
          </div>
          <div class="howprocess-item__text">Вы принимаете решение о покупке и мы заключаем договор. В договоре указывается предоплата - от 0%! Также фиксируется состояние автомобиля, конечная неизменная стоимость, сроки поставки</div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/howprocess-03.jpg" class="howprocess-item__image" alt="image">
      </div>
      <div class="howprocess-item">
        <div class="howprocess-item__content">
          <div class="howprocess-item__title">
            <span>04</span>
            <h3>Растоможка</h3>
          </div>
          <div class="howprocess-item__text">Автомобиль приходит в ОАЭ примерно через 45 дней и проходит растоможку</div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/howprocess-04.jpg" class="howprocess-item__image" alt="image">
      </div>
      <div class="howprocess-item">
        <div class="howprocess-item__content">
          <div class="howprocess-item__title">
            <span>05</span>
            <h3>Автомобиль ваш</h3>
          </div>
          <div class="howprocess-item__text">После осмотра автомобиля в RTA и если вы не видите никаких повреждений, вы доплачиваете оставшуюся часть суммы и автомобиль ваш!</div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/howprocess-05.jpg" class="howprocess-item__image" alt="image">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>