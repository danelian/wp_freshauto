<?php get_header(); ?>

<div class="catalog">
  <div class="container">
    <div class="heading">
      <h1 class="page-title"><?php echo __('Catalog', 'freshauto'); ?></h1>
    </div>
    <div class="catalog__container">
      <div class="catalog__left" id="styckiBlock">
        <div class="catalog__left-head">
          <h2 class="section-title"><?php echo __('Filter', 'freshauto'); ?></h2>
        </div>
        <div class="catalog__left-content">
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
            <button class="button-reset"><?php echo __('Reset', 'freshauto'); ?></button>
          </form>
        </div>
      </div>
      <div class="catalog__right">
        <div class="catalog__right-head">
          <h2 class="section-title"><?php echo __('All models', 'freshauto'); ?></h2>
          <select id="select-orderby" class="js-select2">
            <option></option>
            <option value="orderby1">Сначала недорогие</option>
            <option value="orderby2">Сначала дорогие</option>
            <option value="orderby3">Сначала новые</option>
            <option value="orderby4">Сначала старые</option>
            <option value="orderby5">Маленький пробег</option>
          </select>
        </div>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => '12',
          'paged' => $paged,
        );
        $catalog_posts = new WP_Query($args);
        ?>
        <?php if ($catalog_posts->have_posts()): ?>
          <div class="catalog__cards catalog-posts">
            <?php while ($catalog_posts->have_posts()):
              $catalog_posts->the_post(); ?>
              <?php get_template_part('template-parts/acard'); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="pagination__wrapper">
            <div class="button-second" id="loadmore-catalog">
              <?php echo __('Show more', 'freshauto'); ?>
            </div>
            <nav class="navigation pagination" aria-label="Записи">
              <?php echo paginate_links(
                array(
                  'total' => $catalog_posts->max_num_pages,
                  'current' => $paged,
                  'prev_text' => '<svg width="5" height="7" viewBox="0 0 5 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.84033 0.109523C5.05323 0.255201 5.05323 0.491392 4.84033 0.63707L1.25 3.09378C1.0371 3.23946 1.0371 3.47565 1.25 3.62133L4.84032 6.07804C5.05322 6.22372 5.05322 6.45991 4.84032 6.60559C4.62743 6.75126 4.28225 6.75126 4.06935 6.60559L0.479023 4.14887C-0.159674 3.71184 -0.159675 3.00327 0.479023 2.56623L4.06935 0.109523C4.28225 -0.0361548 4.62743 -0.0361548 4.84033 0.109523Z" fill="#1C1C1C" fill-opacity="0.2" /><path fill-rule="evenodd" clip-rule="evenodd" d="M4.84033 0.109523C5.05323 0.255201 5.05323 0.491392 4.84033 0.63707L1.25 3.09378C1.0371 3.23946 1.0371 3.47565 1.25 3.62133L4.84032 6.07804C5.05322 6.22372 5.05322 6.45991 4.84032 6.60559C4.62743 6.75126 4.28225 6.75126 4.06935 6.60559L0.479023 4.14887C-0.159674 3.71184 -0.159675 3.00327 0.479023 2.56623L4.06935 0.109523C4.28225 -0.0361548 4.62743 -0.0361548 4.84033 0.109523Z" fill="white" /></svg>',
                  'next_text' => '<svg width="5" height="7" viewBox="0 0 5 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.159674 0.109523C-0.053226 0.255201 -0.0532259 0.491392 0.159674 0.63707L3.75 3.09378C3.9629 3.23946 3.9629 3.47565 3.75 3.62133L0.159675 6.07804C-0.0532243 6.22372 -0.0532242 6.45991 0.159675 6.60559C0.372575 6.75126 0.717753 6.75126 0.930652 6.60559L4.52098 4.14887C5.15967 3.71184 5.15968 3.00327 4.52098 2.56623L0.93065 0.109523C0.717751 -0.0361553 0.372573 -0.0361552 0.159674 0.109523Z" fill="#1C1C1C" fill-opacity="0.2" /><path fill-rule="evenodd" clip-rule="evenodd" d="M0.159674 0.109523C-0.053226 0.255201 -0.0532259 0.491392 0.159674 0.63707L3.75 3.09378C3.9629 3.23946 3.9629 3.47565 3.75 3.62133L0.159675 6.07804C-0.0532243 6.22372 -0.0532242 6.45991 0.159675 6.60559C0.372575 6.75126 0.717753 6.75126 0.930652 6.60559L4.52098 4.14887C5.15967 3.71184 5.15968 3.00327 4.52098 2.56623L0.93065 0.109523C0.717751 -0.0361553 0.372573 -0.0361552 0.159674 0.109523Z" fill="white" /></svg>'
                ));
              ?>
            </nav>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template-section/seo-section'); ?>

<?php get_footer(); ?>