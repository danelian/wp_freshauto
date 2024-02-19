<?php 
/*
Template Name: Default Page
*/
get_header(); ?>

<section class="default-section">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
</section>

<?php get_footer(); ?>

<style>
.default-section {
  padding-top: 60px;
  padding-bottom: 60px;
}
.default-section h1 {
  font-size: 40px;
  margin-top: 0;
  margin-bottom: 28px;
}
@media screen and (max-width: 991px) {
  .default-section {
    padding-top: 40px;
    padding-bottom: 40px;
  }
  .default-section h1 {
    font-size: 24px;
    margin-bottom: 20px;
  }
}
</style>