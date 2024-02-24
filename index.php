<?php 
/**
 * 
 * 
 * 
 * 
 */

$brands_list      = [];   
$model_list       = []; 

$args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 12
);

$the_query = new WP_Query( $args );

if( $the_query->have_posts() ):

    while( $the_query->have_posts() ) : $the_query->the_post();

        $b =  get_field('a_brand');
        $m =  get_field('a_model');

        if ( get_field('a_brand') ) :

          $brands_list[ ]          = $b;
          $model_list[ $b ][ $m ]  = $m;

        endif; 

    endwhile;

endif;

wp_reset_query();

/**
 * 
 * 
 * 
 */ 

$brands_list     = array_unique( $brands_list );

/**
 * 
 * 
 * 
 */ 

$brand_start     = $_GET['marka'];
$model_start     = $_GET['model'];
$km_age_from     = $_GET['km_age-from'];
$km_age_to       = $_GET['km_age-to'];
$price_from      = $_GET['price-from'];
$price_to        = $_GET['price-to'];
$year_from       = $_GET['year-from'];
$year_to         = $_GET['year-to'];

/**
 * 
 * 
 * 
 * 
 */ 


get_header(); ?>

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
          <form id="global-filter-section" data-url="<?= get_site_url(); ?>">
            <div class="form-group">

              <select id="select-marka" class="js-select2">

                <option></option>

                <option value="default"><?php echo __('Select', 'freshauto'); ?></option>

                <?php foreach ( $brands_list as $brand ) :?>

                <option value="<?= $brand; ?>" <?= $selected; ?>><?= $brand; ?></option>  

                <?php endforeach; ?>

              </select>

            </div>

            <div class="form-group" id="catalog-filter-model">

              <select id="select-model" class="js-select2">

                <option></option>
                <option value="default"><?php echo __('Select', 'freshauto'); ?></option>

                <?php 
                  foreach ( $model_list as $key => $model ) :
                  foreach ( $model as $item ) :  
                  $selected = ( $model_start == $item ) ? 'selected' : ''; 
                ?>

                <option style="display: none; " data-model="<?= $key; ?>" value="<?= $item; ?>" <?= $selected; ?>><?= $item; ?></option>

                <?php 
                  endforeach; 
                  endforeach;
                ?>

              </select>

            </div>

            <div class="form-group form-group--split">
              <input type="number" name="km_age-from" id="km_age-from" placeholder="<?php echo __('Mileage from, km', 'freshauto'); ?>" value="<?= $km_age_from; ?>">
              <input type="number" name="km_age-to" id="km_age-to" placeholder="<?php echo __('to', 'freshauto'); ?>" value="<?= $km_age_to; ?>">
            </div>
            <div class="form-group form-group--split">
              <input type="number" name="price-from" id="price-from" placeholder="<?php echo __('Price from, ₽', 'freshauto'); ?>"  value="<?= $price_from; ?>">
              <input type="number" name="price-to" id="price-to" placeholder="<?php echo __('to', 'freshauto'); ?>" value="<?= $price_to; ?>">
            </div>
            <div class="form-group form-group--split">
              <input type="number" name="year-from" id="year-from" placeholder="<?php echo __('A year from', 'freshauto'); ?>" value="<?= $year_from; ?>">
              <input type="number" name="year-to" id="year-to" placeholder="<?php echo __('to', 'freshauto'); ?>" value="<?= $year_to; ?>">
            </div>
            <button class="button-reset" id="button_reset_form"><?php echo __('Reset', 'freshauto'); ?></button>
          </form>
        </div>
      </div>
      <div class="catalog__right">
        <div class="catalog__right-head">
          <h2 class="section-title"><?php echo __('All models', 'freshauto'); ?></h2>
          <select id="select-orderby" class="js-select2">
            <option></option>
            <option value="orderby1"><?php echo __('Inexpensive first', 'freshauto'); ?></option>
            <option value="orderby2"><?php echo __('Dear ones first', 'freshauto'); ?></option>
            <option value="orderby3"><?php echo __('New ones first', 'freshauto'); ?></option>
            <option value="orderby4"><?php echo __('Old ones first', 'freshauto'); ?></option>
            <option value="orderby5"><?php echo __('Low mileage', 'freshauto'); ?></option>
          </select>
        </div>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => '-1',
          'paged' => $paged,
        );
        $catalog_posts = new WP_Query($args);
        ?>
        <?php if ($catalog_posts->have_posts()): ?>
          <div class="catalog__cards catalog-posts latesta-cards" id="latesta-cards">
            <?php $my_args = ['my_count' => 1]; ?>
            <?php while ($catalog_posts->have_posts()):
              $catalog_posts->the_post(); ?>
              <?php get_template_part('template-parts/acard', null, $my_args); ?>
            <?php /* вот здесь нужно обновить переменную на +1 */ endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="pagination__wrapper">
            <a href="#" class="button-second" id="loadmore-blog">
              <?php echo __('Show more', 'freshauto'); ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template-section/seo-section'); ?>

<script>
document.addEventListener('DOMContentLoaded', function(){
  if (window.innerWidth >= 1025) {
    (function () {
      var a = document.querySelector('#styckiBlock'), b = null, P = 0;  // если ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента. Может быть отрицательным числом
      window.addEventListener('scroll', Ascroll, false);
      document.body.addEventListener('scroll', Ascroll, false);
      function Ascroll() {
        if (b == null) {
          var Sa = getComputedStyle(a, ''), s = '';
          for (var i = 0; i < Sa.length; i++) {
            if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
              s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
            }
          }
          b = document.createElement('div');
          b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
          a.insertBefore(b, a.firstChild);
          var l = a.childNodes.length;
          for (var i = 1; i < l; i++) {
            b.appendChild(a.childNodes[1]);
          }
          a.style.height = b.getBoundingClientRect().height + 'px';
          a.style.padding = '0';
          a.style.border = '0';
        }
        var Ra = a.getBoundingClientRect(),
          R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('.seo-section').getBoundingClientRect().top + 0);  // селектор блока, при достижении верхнего края которого нужно открепить прилипающий элемент;  Math.round() только для IE; если ноль заменить на число, то блок будет прилипать до того, как нижний край элемента дойдёт до футера
        if ((Ra.top - P) <= 0) {
          if ((Ra.top - P) <= R) {
            b.className = 'stop';
            b.style.top = - R + 'px';
          } else {
            b.className = 'sticky';
            b.style.top = P + 'px';
          }
        } else {
          b.className = '';
          b.style.top = '';
        }
        window.addEventListener('resize', function () {
          a.children[0].style.width = getComputedStyle(a, '').width
        }, false);
      }
    })()
  }
})
</script>

<?php get_footer(); ?>