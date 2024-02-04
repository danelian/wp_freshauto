<?php get_header(); ?>

<div class="container">
  <article class="article">
    <div class="article-top">
      <h1><?php the_title(); ?></h1>
      <?php the_excerpt(); ?>
    </div>
    <div class="image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
    <?php the_content(); ?>
  </article>
</div>

<?php get_footer(); ?>