<?php 
/*
Template Name: Home
*/

/**
 * 
 * 
 * 
 * 
 */

$brands_list      = [];   
$model_list       = []; 

$args = array(
    'post_type'         => 'post'
);

$the_query = new WP_Query( $args );

if( $the_query->have_posts() ):

  while( $the_query->have_posts() ) : $the_query->the_post();

    if ( get_field('a_brand') ) :

      $brands_list[]    = get_field('a_brand');
      $model_list[]     = get_field('a_model');

    endif; 

  endwhile;

endif;

wp_reset_query();

/**
 * 
 * 
 * 
 */ 

$brands_list = array_unique( $brands_list );
$model_list  = array_unique( $model_list );

/**
 * 
 * 
 * 
 * 
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
  <div class="hero__bg"></div>
</section>

<section class="search-section">
  <div class="container">
    <div class="heading">
      <h3 class="section-title"><?php echo __('Search', 'freshauto'); ?></h3>
      <p><?php echo __('for now', 'freshauto'); ?> <strong><?php the_field('unique_offers', 'options'); ?></strong> <?php echo __('unique offers', 'freshauto'); ?></p>
    </div>

    <form data-url="<?= get_site_url(); ?>" action="<?= get_site_url(); ?>/catalog">
      <input type="hidden" name="webredirect" value="1">
      <div class="form-group">

        <select id="select-marka" name="marka" class="js-select2">

          <option></option>

          <?php foreach ( $brands_list as $brand ) : ?>
            <option value="<?= $brand; ?>"><?= $brand; ?></option>
          <?php endforeach; ?>

        </select>
      </div>

      <div class="form-group">

        <select id="select-model" name="model" class="js-select2">

          <option></option>

          <?php foreach ( $model_list as $model ) : ?>
            <option value="<?= $model; ?>"><?= $model; ?></option>
          <?php endforeach; ?>

        </select>

      </div>

      <div class="form-group form-group--split">
        <input type="number" name="km_age-from" id="km_age-from" placeholder="<?php echo __('Mileage from, km', 'freshauto'); ?>">
        <input type="number" name="km_age-to" id="km_age-to" placeholder="<?php echo __('to', 'freshauto'); ?>">
      </div>

      <div class="form-group form-group--split">
        <input type="number" name="price-from" id="price-from" placeholder="<?php echo __('Price from, ₽', 'freshauto'); ?>">
        <input type="number" name="price-to" id="price-to" placeholder="<?php echo __('to', 'freshauto'); ?>">
      </div>

      <div class="form-group form-group--split">
        <input type="number" name="year-from" id="year-from" placeholder="<?php echo __('A year from', 'freshauto'); ?>">
        <input type="number" name="year-to" id="year-to" placeholder="<?php echo __('to', 'freshauto'); ?>">
      </div>

      <button type="submit"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.16618 1.66663C7.96816 1.66676 6.7876 1.95388 5.72333 2.50395C4.65906 3.05403 3.74205 3.85106 3.04907 4.82831C2.35608 5.80556 1.90729 6.93461 1.74025 8.12093C1.57321 9.30724 1.6928 10.5163 2.08899 11.6469C2.48519 12.7775 3.14646 13.7968 4.01746 14.6194C4.88846 15.4419 5.94383 16.0439 7.09524 16.3748C8.24664 16.7057 9.46058 16.756 10.6354 16.5215C11.8102 16.2869 12.9118 15.7743 13.8478 15.0266L16.9103 18.0891C17.0675 18.2409 17.278 18.3249 17.4965 18.323C17.715 18.3211 17.924 18.2335 18.0785 18.079C18.233 17.9245 18.3207 17.7155 18.3226 17.497C18.3245 17.2785 18.2405 17.068 18.0887 16.9108L15.0262 13.8483C15.9078 12.7448 16.46 11.4149 16.6191 10.0114C16.7782 8.60801 16.5378 7.18818 15.9255 5.91537C15.3132 4.64257 14.3539 3.56852 13.1581 2.81687C11.9623 2.06522 10.5786 1.6665 9.16618 1.66663ZM4.16618 9.16663C4.16618 8.51002 4.29551 7.85984 4.54678 7.25321C4.79806 6.64658 5.16635 6.09539 5.63065 5.63109C6.09494 5.1668 6.64614 4.7985 7.25276 4.54723C7.85939 4.29596 8.50957 4.16663 9.16618 4.16663C9.82279 4.16663 10.473 4.29596 11.0796 4.54723C11.6862 4.7985 12.2374 5.1668 12.7017 5.63109C13.166 6.09539 13.5343 6.64658 13.7856 7.25321C14.0369 7.85984 14.1662 8.51002 14.1662 9.16663C14.1662 10.4927 13.6394 11.7645 12.7017 12.7022C11.764 13.6398 10.4923 14.1666 9.16618 14.1666C7.8401 14.1666 6.56833 13.6398 5.63065 12.7022C4.69297 11.7645 4.16618 10.4927 4.16618 9.16663Z" fill="currentColor"/>
        </svg><span><?php echo __('Search', 'freshauto'); ?></span></button>

    </form>
  </div>
</section>

<section class="latesta">
  <div class="container">
    <div class="heading">
      <h2 class="section-title"><?php echo __('Latest arrivals', 'freshauto'); ?></h2>
    </div>
    <?php $latest_posts = get_field('latest_posts'); if ($latest_posts) { ?>
      <div class="latesta__cards" id="latesta-cards">
        <?php $my_args = ['my_count' => 1]; ?>
        <?php foreach( $latest_posts as $post ): ?>
          <?php get_template_part('template-parts/acard', null, $my_args); ?>
        <?php /* вот здесь нужно обновить переменную на +1 */ endforeach; ?>
      </div>
    <?php } ?>
  </div>
</section>

<?php echo get_template_part('template-section/seo-section'); ?>

<?php get_footer(); ?>