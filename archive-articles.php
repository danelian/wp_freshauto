<?php 
/*
Template Name: Articles
*/
get_header(); ?>

<section class="archive-articles">
  <div class="container">
    <div class="heading">
      <h1 class="page-title"><?php echo __('Articles', 'freshauto'); ?></h1>
      <p><?php echo __('Here you can find our news and offers', 'freshauto'); ?></p>
    </div>

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'articles',
      'post_status' => 'publish',
      'posts_per_page' => '9',
      'paged' => $paged,
    );
    $blog_posts = new WP_Query($args);
    ?>
    <?php if ($blog_posts->have_posts()): ?>
      <div class="archive-articles__cards blog-posts">
        <?php while ($blog_posts->have_posts()):
          $blog_posts->the_post(); ?>
          <?php get_template_part('template-parts/scard'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="pagination__wrapper">
        <div class="button-second loadmore" id="loadmore-blog">
          <?php echo __('Show more', 'freshauto'); ?>
        </div>
        <nav class="navigation pagination" aria-label="Записи">
          <?php echo paginate_links(
            array(
              'total' => $blog_posts->max_num_pages,
              'current' => $paged,
              'prev_text' => '<svg width="5" height="7" viewBox="0 0 5 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.84033 0.109523C5.05323 0.255201 5.05323 0.491392 4.84033 0.63707L1.25 3.09378C1.0371 3.23946 1.0371 3.47565 1.25 3.62133L4.84032 6.07804C5.05322 6.22372 5.05322 6.45991 4.84032 6.60559C4.62743 6.75126 4.28225 6.75126 4.06935 6.60559L0.479023 4.14887C-0.159674 3.71184 -0.159675 3.00327 0.479023 2.56623L4.06935 0.109523C4.28225 -0.0361548 4.62743 -0.0361548 4.84033 0.109523Z" fill="#1C1C1C" fill-opacity="0.2" /><path fill-rule="evenodd" clip-rule="evenodd" d="M4.84033 0.109523C5.05323 0.255201 5.05323 0.491392 4.84033 0.63707L1.25 3.09378C1.0371 3.23946 1.0371 3.47565 1.25 3.62133L4.84032 6.07804C5.05322 6.22372 5.05322 6.45991 4.84032 6.60559C4.62743 6.75126 4.28225 6.75126 4.06935 6.60559L0.479023 4.14887C-0.159674 3.71184 -0.159675 3.00327 0.479023 2.56623L4.06935 0.109523C4.28225 -0.0361548 4.62743 -0.0361548 4.84033 0.109523Z" fill="white" /></svg>',
              'next_text' => '<svg width="5" height="7" viewBox="0 0 5 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.159674 0.109523C-0.053226 0.255201 -0.0532259 0.491392 0.159674 0.63707L3.75 3.09378C3.9629 3.23946 3.9629 3.47565 3.75 3.62133L0.159675 6.07804C-0.0532243 6.22372 -0.0532242 6.45991 0.159675 6.60559C0.372575 6.75126 0.717753 6.75126 0.930652 6.60559L4.52098 4.14887C5.15967 3.71184 5.15968 3.00327 4.52098 2.56623L0.93065 0.109523C0.717751 -0.0361553 0.372573 -0.0361552 0.159674 0.109523Z" fill="#1C1C1C" fill-opacity="0.2" /><path fill-rule="evenodd" clip-rule="evenodd" d="M0.159674 0.109523C-0.053226 0.255201 -0.0532259 0.491392 0.159674 0.63707L3.75 3.09378C3.9629 3.23946 3.9629 3.47565 3.75 3.62133L0.159675 6.07804C-0.0532243 6.22372 -0.0532242 6.45991 0.159675 6.60559C0.372575 6.75126 0.717753 6.75126 0.930652 6.60559L4.52098 4.14887C5.15967 3.71184 5.15968 3.00327 4.52098 2.56623L0.93065 0.109523C0.717751 -0.0361553 0.372573 -0.0361552 0.159674 0.109523Z" fill="white" /></svg>'
            ));
          ?>
        </nav>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>