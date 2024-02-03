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
      <?php if (get_field('process_title')) { ?>
      <div class="howprocess__heading">
        <h2 class="section-title"><?php the_field('process_title'); ?></h2>
      </div>
      <?php } ?>
      <?php if ( have_rows('process_cards') ): $count = 0; ?>
        <?php while ( have_rows('process_cards') ) : the_row(); $count++; ?>
          <div class="howprocess-item">
            <div class="howprocess-item__content">
              <div class="howprocess-item__title">
                <span>0<?php echo $count; ?></span>
                <h3><?php the_sub_field('process_card_title'); ?></h3>
              </div>
              <?php if (get_sub_field('process_card_text')) { ?>
                <div class="howprocess-item__text"><?php the_sub_field('process_card_text'); ?></div>
              <?php } ?>
            </div>
            <img src="<?php the_sub_field('process_card_image') ?>" class="howprocess-item__image" alt="image">
          </div>
        <?php endwhile; ?>
      <?php else : endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>