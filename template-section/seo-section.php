<?php if (get_field('about_title', 'options')) { ?>
<section class="seo-section">
  <div class="container">
    <div class="seo-section__block">
      <h2><?php the_field('about_title', 'options'); ?></h2>
      <?php if (get_field('about_content', 'options')) { the_field('about_content', 'options'); } ?>
    </div>
  </div>
</section>
<?php } ?>