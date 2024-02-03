<?php get_header(); ?>

<div class="error-section">
  <div class="container">
    <span class="subtitle">404</span>
    <h1 class="title"><?php echo __('This page', 'freshauto'); ?><br><?php echo __('does not exist', 'freshauto'); ?></h1>
    <a href="<?php echo get_home_url(); ?>" class="button-blur"><?php echo __('To main', 'trophy') ?></a>
  </div>
</div>

<?php get_footer(); ?>