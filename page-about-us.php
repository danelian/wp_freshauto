<?php get_header(); ?>

<section class="whoarewe">
  <div class="container">
    <div class="whoarewe__wrapper">
      <div class="whoarewe__content">
        <h1 class="section-title">Кто мы?</h1>
        <p>HonestCar.AE – это автомобильный маркетплейс нового поколения в ОАЭ. Наша цель – сделать процесс покупки и заказа автомобиля максимально честным, выгодным и приятным. Как мы этого достигаем?</p>
        <p>Мы специализируемся на машинах заводского состояния – исключительно безаварийные, с низким оригинальным пробегом и преимущественно от официальных дилеров. Мы никогда не торгуемся и это плюс: вы знаете честную стоимость автомобиля без «накруток» рассчитанных на беспечного покупателя. На все поставляемые автомобили может быть дополнительно оформлена гарантия</p>
        <p>При этом цены на наши автомобили на уровне или ниже рыночных</p>
      </div>
      <!-- Swiper -->
      <div class="swiper whoareweSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whoarewe-slider-image.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whoarewe-slider-image.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whoarewe-slider-image.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whoarewe-slider-image.jpg" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whoarewe-slider-image.jpg" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<section class="searchloc">
  <div class="container">
    <div class="searchloc__wrapper">
      <div class="searchloc__content">
        <h2 class="section-title">Места поиска</h2>
        <p>Мы достигаем своих результатов за счет прямых поставок из ключевых стран с низкими ценами на премиум автомобили - Корея, Канада, Китай, Польша</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-locations-icon.svg" class="searchloc__icon" alt="image">
      </div>
      <div class="searchloc__image" style="background-image: url('..<?php echo get_template_directory_uri(); ?>/assets/img/search-locations-map.svg');"></div>
      <div class="searchloc__image--mobile" style="background-image: url('..<?php echo get_template_directory_uri(); ?>/assets/img/search-locations-map--mobile.svg');"></div>
    </div>
  </div>
</section>
<section class="team">
  <div class="container">
    <div class="team__wrapper">
      <div class="heading">
        <h2 class="section-title">Наша команда</h2>
      </div>
      <div class="team__cards">
        <div class="tcard">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-01.jpg" alt="">
          <h3>Имя Фамилия</h3>
          <p>Должность</p>
        </div>
        <div class="tcard">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-02.jpg" alt="">
          <h3>Имя Фамилия</h3>
          <p>Должность</p>
        </div>
        <div class="tcard">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-03.jpg" alt="">
          <h3>Имя Фамилия</h3>
          <p>Должность</p>
        </div>
        <div class="tcard">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-04.jpg" alt="">
          <h3>Имя Фамилия</h3>
          <p>Должность</p>
        </div>
      </div>
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