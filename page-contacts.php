<?php 
/*
Template Name: Contacts
*/
get_header(); ?>

<section class="contacts-section">
  <div class="container">
    <div class="contacts-section__container">
      <div class="contacts-section__left">
        <div class="heading">
          <h1 class="page-title"><?php the_title(); ?></h1>
          <p><?php echo __('Write to our operator and we will be happy to give advice!', 'freshauto'); ?></p>
        </div>
        <div class="contacts__list">
          <?php $phone = get_field('phone', 'options');
          if ( $phone ): 
            $phone_url = $phone['url'];
            $phone_title = $phone['title'];
            $phone_target = $phone['target'] ? $phone['target'] : '_self';
            ?>
            <div class="contacts-item">
              <div class="contacts-item__subtitle"><?php echo __('For communication', 'freshauto') ?></div>
              <a href="<?php echo esc_url($phone_url); ?>" target="<?php echo esc_attr($phone_target); ?>"><?php echo esc_html($phone_title); ?></a>
            </div>
          <?php endif; ?>

          <?php $email = get_field('email', 'options');
          if ( $email ): 
            $email_url = $email['url'];
            $email_title = $email['title'];
            $email_target = $email['target'] ? $email['target'] : '_self';
            ?>
            <div class="contacts-item">
              <div class="contacts-item__subtitle"><?php echo __('Email', 'freshauto') ?></div>
              <a href="<?php echo esc_url($email_url); ?>" target="<?php echo esc_attr($email_target); ?>"><?php echo esc_html($email_title); ?></a>
            </div>
          <?php endif; ?>

          <?php $address = get_field('address', 'options');
          if ( $address ): ?>
            <div class="contacts-item">
              <div class="contacts-item__subtitle"><?php echo __('Address', 'freshauto'); ?></div>
              <p><?php echo $address; ?></p>
            </div>
          <?php endif; ?>

          <div class="contacts-item">
            <div class="contacts-item__subtitle"></div>
            <div class="socials">
              <?php $youtube = get_field('youtube_link', 'options');
              if ( $youtube ): 
                $youtube_url = $youtube['url'];
                $youtube_title = $youtube['title'];
                $youtube_target = $youtube['target'] ? $youtube['target'] : '_self';
                ?>
                <a href="<?php echo esc_url($youtube_url); ?>" target="<?php echo esc_attr($youtube_target); ?>">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10 15.6516L15.19 12.6516L10 9.65161V15.6516ZM21.56 7.82161C21.69 8.29161 21.78 8.92161 21.84 9.72161C21.91 10.5216 21.94 11.2116 21.94 11.8116L22 12.6516C22 14.8416 21.84 16.4516 21.56 17.4816C21.31 18.3816 20.73 18.9616 19.83 19.2116C19.36 19.3416 18.5 19.4316 17.18 19.4916C15.88 19.5616 14.69 19.5916 13.59 19.5916L12 19.6516C7.81 19.6516 5.2 19.4916 4.17 19.2116C3.27 18.9616 2.69 18.3816 2.44 17.4816C2.31 17.0116 2.22 16.3816 2.16 15.5816C2.09 14.7816 2.06 14.0916 2.06 13.4916L2 12.6516C2 10.4616 2.16 8.85161 2.44 7.82161C2.69 6.92161 3.27 6.34161 4.17 6.09161C4.64 5.96161 5.5 5.87161 6.82 5.81161C8.12 5.74161 9.31 5.71161 10.41 5.71161L12 5.65161C16.19 5.65161 18.8 5.81161 19.83 6.09161C20.73 6.34161 21.31 6.92161 21.56 7.82161Z"
                      fill="currentColor" />
                  </svg>
                </a>
              <?php endif; ?>

              <?php $instagram = get_field('instagram_link', 'options');
              if ( $instagram ): 
                $instagram_url = $instagram['url'];
                $instagram_title = $instagram['title'];
                $instagram_target = $instagram['target'] ? $instagram['target'] : '_self';
                ?>
                <a href="<?php echo esc_url($instagram_url); ?>" target="<?php echo esc_attr($instagram_target); ?>">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.0286 2C14.1536 2.003 14.7246 2.009 15.2176 2.023L15.4116 2.03C15.6356 2.038 15.8566 2.048 16.1236 2.06C17.1876 2.11 17.9136 2.278 18.5506 2.525C19.2106 2.779 19.7666 3.123 20.3226 3.678C20.8311 4.1779 21.2245 4.78259 21.4756 5.45C21.7226 6.087 21.8906 6.813 21.9406 7.878C21.9526 8.144 21.9626 8.365 21.9706 8.59L21.9766 8.784C21.9916 9.276 21.9976 9.847 21.9996 10.972L22.0006 11.718V13.028C22.003 13.7574 21.9954 14.4868 21.9776 15.216L21.9716 15.41C21.9636 15.635 21.9536 15.856 21.9416 16.122C21.8916 17.187 21.7216 17.912 21.4756 18.55C21.2253 19.2178 20.8317 19.8226 20.3226 20.322C19.8225 20.8303 19.2179 21.2238 18.5506 21.475C17.9136 21.722 17.1876 21.89 16.1236 21.94C15.8863 21.9512 15.649 21.9612 15.4116 21.97L15.2176 21.976C14.7246 21.99 14.1536 21.997 13.0286 21.999L12.2826 22H10.9736C10.2438 22.0025 9.5141 21.9949 8.78458 21.977L8.59058 21.971C8.35319 21.962 8.11585 21.9517 7.87858 21.94C6.81458 21.89 6.08858 21.722 5.45058 21.475C4.78325 21.2244 4.17879 20.8308 3.67958 20.322C3.17062 19.8223 2.7768 19.2176 2.52558 18.55C2.27858 17.913 2.11058 17.187 2.06058 16.122C2.04944 15.8847 2.03944 15.6474 2.03058 15.41L2.02558 15.216C2.00715 14.4868 1.99881 13.7574 2.00058 13.028V10.972C1.99779 10.2426 2.00512 9.5132 2.02258 8.784L2.02958 8.59C2.03758 8.365 2.04758 8.144 2.05958 7.878C2.10958 6.813 2.27758 6.088 2.52458 5.45C2.77569 4.7819 3.1703 4.17702 3.68058 3.678C4.17967 3.16947 4.78372 2.77599 5.45058 2.525C6.08858 2.278 6.81358 2.11 7.87858 2.06C8.14458 2.048 8.36658 2.038 8.59058 2.03L8.78458 2.024C9.51377 2.00623 10.2432 1.99857 10.9726 2.001L13.0286 2ZM12.0006 7C10.6745 7 9.40273 7.52678 8.46504 8.46447C7.52736 9.40215 7.00058 10.6739 7.00058 12C7.00058 13.3261 7.52736 14.5979 8.46504 15.5355C9.40273 16.4732 10.6745 17 12.0006 17C13.3267 17 14.5984 16.4732 15.5361 15.5355C16.4738 14.5979 17.0006 13.3261 17.0006 12C17.0006 10.6739 16.4738 9.40215 15.5361 8.46447C14.5984 7.52678 13.3267 7 12.0006 7ZM12.0006 9C12.3945 8.99993 12.7847 9.07747 13.1487 9.22817C13.5127 9.37887 13.8434 9.5998 14.122 9.87833C14.4007 10.1569 14.6217 10.4875 14.7725 10.8515C14.9233 11.2154 15.001 11.6055 15.0011 11.9995C15.0011 12.3935 14.9236 12.7836 14.7729 13.1476C14.6222 13.5116 14.4013 13.8423 14.1228 14.121C13.8442 14.3996 13.5135 14.6206 13.1496 14.7714C12.7856 14.9223 12.3955 14.9999 12.0016 15C11.2059 15 10.4429 14.6839 9.88026 14.1213C9.31765 13.5587 9.00158 12.7956 9.00158 12C9.00158 11.2044 9.31765 10.4413 9.88026 9.87868C10.4429 9.31607 11.2059 9 12.0016 9M17.2516 5.5C16.9201 5.5 16.6021 5.6317 16.3677 5.86612C16.1333 6.10054 16.0016 6.41848 16.0016 6.75C16.0016 7.08152 16.1333 7.39946 16.3677 7.63388C16.6021 7.8683 16.9201 8 17.2516 8C17.5831 8 17.901 7.8683 18.1355 7.63388C18.3699 7.39946 18.5016 7.08152 18.5016 6.75C18.5016 6.41848 18.3699 6.10054 18.1355 5.86612C17.901 5.6317 17.5831 5.5 17.2516 5.5Z"
                      fill="currentColor" />
                  </svg>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="map"></div>
      </div>
      <div class="contacts-section__form">
        <h2><?php echo __('Write to our operator', 'freshauto'); ?></h2>
        <?php
        if (defined('ICL_LANGUAGE_CODE')) {
            $current_language = ICL_LANGUAGE_CODE;
            
            if ($current_language == 'en') {
                echo do_shortcode('[contact-form-7 id="402e66d" title="Contact form"]');
            } elseif ($current_language == 'ru') {
                echo do_shortcode('[contact-form-7 id="1e3e846" title="Форма обратной связи"]');
            }
        } else {
            // Если плагин WPML не активирован, выводим форму по умолчанию
            echo do_shortcode('[contact-form-7 id="402e66d" title="Contact form"]');
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>