<a href="<?php the_permalink(); ?>" class="scard">
  <img src="<?php the_post_thumbnail_url('medium'); ?>" class="scard__image" alt="<?php the_title(); ?>">
  <h2 class="scard__title"><?php the_title(); ?></h2>
  <?php the_excerpt(); ?>
</a>