<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
</head>

<body <?php echo body_class(); ?>>

<!-------- header --------->
<header class="header" id="header">
  <?php if ( have_rows('marquee', 'options') ): ?>
  <div class="marquee">
    <div class="items-wrap">
      <div aria-hidden="true" class="items">
        <?php while ( have_rows('marquee', 'options') ) : the_row(); ?>
          <div class="item">
            <span class="one"><?php echo __('Offer of the day:', 'freshauto'); ?></span>
            <?php if (get_sub_field('marquee_auto', 'options')) { ?><a href="<?php the_sub_field('marquee_auto_link', 'options'); ?>" class="two"><?php the_sub_field('marquee_auto', 'options'); ?></a><?php } ?>
            <?php if (get_sub_field('marquee_info', 'options')) { ?><span class="three"><?php the_sub_field('marquee_info', 'options'); ?></span><?php } ?>
          </div>
        <?php endwhile; ?>
      </div>
      <div aria-hidden="true" class="items">
        <?php while ( have_rows('marquee', 'options') ) : the_row(); ?>
          <div class="item">
            <span class="one"><?php echo __('Offer of the day:', 'freshauto'); ?></span>
            <?php if (get_sub_field('marquee_auto', 'options')) { ?><a href="<?php the_sub_field('marquee_auto_link', 'options'); ?>" class="two"><?php the_sub_field('marquee_auto', 'options'); ?></a><?php } ?>
            <?php if (get_sub_field('marquee_info', 'options')) { ?><span class="three"><?php the_sub_field('marquee_info', 'options'); ?></span><?php } ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <?php else : endif; ?>

  <div class="container">
    <div class="header__container">
      <a href="<?php echo get_home_url(); ?>" class="logo">
        <svg width="78" height="44" viewBox="0 0 78 44" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_2019_12)">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.73522 22.0001C5.73522 30.7566 12.8338 37.8551 21.5903 37.8551C30.3468 37.8551 37.4453 30.7566 37.4453 22.0001C37.4453 13.2436 30.3468 6.14501 21.5903 6.14501C12.8338 6.14501 5.73522 13.2436 5.73522 22.0001ZM21.5903 0.859985C9.91493 0.859985 0.450195 10.3247 0.450195 22.0001C0.450195 33.6754 9.91493 43.1401 21.5903 43.1401C33.2656 43.1401 42.7304 33.6754 42.7304 22.0001C42.7304 10.3247 33.2656 0.859985 21.5903 0.859985ZM30.0457 31.5131H25.7605V23.8459H17.4187V31.5131H13.1336V12.4871H17.4187V20.0407H25.7605V12.4871H30.0457V31.5131ZM76.487 3.85999C77.4806 3.85999 77.9252 5.10653 77.156 5.73536L71.6166 10.2634C71.1446 10.6492 70.5538 10.86 69.9442 10.86H46.8023C46.11 8.31337 44.5595 6.08395 42.413 4.54867L41.4502 3.85999H76.487ZM70.1654 20.7342C70.9329 20.1046 70.4877 18.86 69.495 18.86H48.4502C49.1455 21.1415 49.1455 23.5785 48.4502 25.86H62.9717C63.5828 25.86 64.1751 25.6481 64.6476 25.2605L70.1654 20.7342ZM59.1519 32.86C60.1801 32.86 60.603 34.1794 59.7662 34.7771L54.7393 38.3678C54.2911 38.6879 53.7541 38.86 53.2034 38.86H41.4502L42.0945 38.3998C44.0812 36.9807 45.6677 35.0724 46.7002 32.86H59.1519Z" fill="currentColor"/>
          </g>
          <defs>
          <clipPath id="clip0_2019_12">
          <rect width="78" height="44" fill="white"/>
          </clipPath>
          </defs>
        </svg>          
      </a>
      <nav class="header__nav" id="burger-menu">
        <div class="header__nav-head">
          <a href="<?php echo get_home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo"></a>
          <button type="button" id="burger-close">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.98937 16.0104C3.40358 15.4246 3.40358 14.4749 3.98937 13.8891L13.8889 3.98961C14.4747 3.40383 15.4244 3.40383 16.0102 3.98961C16.596 4.5754 16.596 5.52515 16.0102 6.11093L6.11069 16.0104C5.5249 16.5962 4.57516 16.5962 3.98937 16.0104Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0097 16.0104C16.5954 15.4246 16.5954 14.4749 16.0097 13.8891L6.11016 3.98961C5.52437 3.40383 4.57462 3.40383 3.98884 3.98961C3.40305 4.5754 3.40305 5.52515 3.98884 6.11093L13.8883 16.0104C14.4741 16.5962 15.4239 16.5962 16.0097 16.0104Z" fill="currentColor"/>
            </svg>
          </button>
        </div>
        <?php
          wp_nav_menu([
            'theme_location' => 'header',
            'container' => '',
            'menu_class' => 'header__menu',
            'menu_id' => false,
            'echo' => true,
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          ]);
        ?>
        <div class="header__bar">
          <a href="tel:+971526289747" class="phone">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H5.153C5.38971 2.00011 5.6187 2.08418 5.79924 2.23726C5.97979 2.39034 6.10018 2.6025 6.139 2.836L6.879 7.271C6.91436 7.48222 6.88097 7.69921 6.78376 7.89003C6.68655 8.08085 6.53065 8.23543 6.339 8.331L4.791 9.104C5.34611 10.4797 6.17283 11.7293 7.22178 12.7782C8.27072 13.8272 9.52035 14.6539 10.896 15.209L11.67 13.661C11.7655 13.4695 11.9199 13.3138 12.1106 13.2166C12.3012 13.1194 12.5179 13.0859 12.729 13.121L17.164 13.861C17.3975 13.8998 17.6097 14.0202 17.7627 14.2008C17.9158 14.3813 17.9999 14.6103 18 14.847V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H15C7.82 18 2 12.18 2 5V3Z" fill="currentColor"/>
            </svg>
            <span>+971 52 628 97 47</span>
          </a>
          <?php
          wp_nav_menu([
            'theme_location' => 'lang',
            'container' => '',
            'menu_class' => 'langs',
            'menu_id' => false,
            'echo' => true,
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          ]);
          ?>
        </div>
      </nav>
      <button type="button" id="burger-open">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 5C1.5 4.17157 2.17157 3.5 3 3.5H17C17.8284 3.5 18.5 4.17157 18.5 5C18.5 5.82843 17.8284 6.5 17 6.5H3C2.17157 6.5 1.5 5.82843 1.5 5Z" fill="currentColor"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 10C1.5 9.17157 2.17157 8.5 3 8.5H17C17.8284 8.5 18.5 9.17157 18.5 10C18.5 10.8284 17.8284 11.5 17 11.5H3C2.17157 11.5 1.5 10.8284 1.5 10Z" fill="currentColor"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 15C1.5 14.1716 2.17157 13.5 3 13.5H17C17.8284 13.5 18.5 14.1716 18.5 15C18.5 15.8284 17.8284 16.5 17 16.5H3C2.17157 16.5 1.5 15.8284 1.5 15Z" fill="currentColor"/>
        </svg>
      </button>
    </div>
  </div>
</header>

<main>