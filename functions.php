<?php 

require_once(__DIR__ . '/includes/wp_svg.php');
require_once(__DIR__ . '/includes/wp_breadcrumbs.php');

/**
 * ДОБАВЛЕНИЕ ВОЗМОЖНОСТЕЙ
 */
if (!function_exists('freshauto_setup')) {
  function freshauto_setup() {
    load_theme_textdomain( 'freshauto', get_template_directory() . '/languages' );
    // Добавляем динамический <title>
    add_theme_support('title-tag');
    // Добавление html5
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption',
      'script',
      'style',
    ));
    // Добавление миниатюр для постов
    add_theme_support('post-thumbnails', array('post', 'articles'));
  }
  add_action('after_setup_theme', 'freshauto_setup');
}


/**
 * ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ
 */
function freshauto_scripts() {
  // STYLES
  // Main style
  wp_enqueue_style('main', get_template_directory_uri());
  // Select2
  wp_enqueue_style('select2', get_template_directory_uri() . '/assets/css/select2.min.css');
  // Swiper
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
  // App style
  wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/style.min.css');

  // SCRIPTS
  // Jquery
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true);
  wp_enqueue_script('jquery');
  // Select2
  wp_enqueue_script('select2', get_template_directory_uri() . '/assets/js/select2.min.js', array('jquery'), null, true);
  // Swiper
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
  // App js
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery', 'select2', 'swiper'), null, true);
}
add_action('wp_enqueue_scripts', 'freshauto_scripts');


/**
 * ОТКЛЮЧАЕМ СОЗДАНИЕ МИНИАТЮР ФАЙЛОВ ДЛЯ УКАЗАННЫХ РАЗМЕРОВ
 */
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'1536x1536',
		'2048x2048',
	] );
}

add_action( 'pre_get_posts', 'true_event_posts_per_page' );
function true_event_posts_per_page( $query ) {
 
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'articles' ) ) {
		$query->set( 'posts_per_page', 9 );
	}
}


/**
  * Регистрирация областей меню
  */
  function freshauto_menus()
  {
    $locations = array(
      'header' => 'Header Menu',
      'lang' => 'Lang Menu'
    );
    register_nav_menus($locations);
  }
  add_action('init', 'freshauto_menus');


/**
 * РЕГИСТРАЦИЯ POST TYPES
 */
add_action( 'init', 'register_post_types' );
function register_post_types(){

	register_post_type( 'Articles', [
		'label'  => null,
		'labels' => [
			'name'               => 'Статьи', // основное название для типа записи
			'singular_name'      => 'Статья', // название для одной записи этого типа
			'add_new'            => 'Добавить статью', // для добавления новой записи
			'add_new_item'       => 'Добавление статьи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование статью', // для редактирования типа записи
			'new_item'           => 'Новая статья', // текст новой записи
			'view_item'          => 'Смотреть статью', // для просмотра записи этого типа.
			'search_items'       => 'Искать статьи', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Статьи', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail'), // 'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [''],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

/**
 * SHOW MORE FOR BLOG
 */
function blog_scripts() {
  wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true );

  $script_data_array = array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'security' => wp_create_nonce( 'load_more_posts' ),
  );
  wp_localize_script( 'custom-script', 'blog', $script_data_array );

  wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $args = array(
        'post_type' => 'articles',
        'post_status' => 'publish',
        'posts_per_page' => '9',
        'paged' => $_POST['page'],
    );
    $blog_posts = new WP_Query( $args );
    ?>
 
    <?php if ( $blog_posts->have_posts() ) : ?>
        <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
          <?php get_template_part('template-parts/scard'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <?php
    wp_die();
}


function catalog_scripts() {
  wp_register_script( 'custom-catalog-script', get_template_directory_uri() . '/assets/js/custom-catalog.js', array('jquery'), false, true );

  $script_data_array = array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'security' => wp_create_nonce( 'load_more_posts' ),
  );
  wp_localize_script( 'custom-catalog-script', 'catalog', $script_data_array );

  wp_enqueue_script( 'custom-catalog-script' );
}
add_action( 'wp_enqueue_scripts', 'catalog_scripts' );

add_action('wp_ajax_load_posts_by_ajax', 'catalog_load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'catalog_load_posts_by_ajax_callback');

function catalog_load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '12',
        'paged' => $_POST['page'],
    );
    $catalog_posts = new WP_Query( $args );
    ?>
 
    <?php if ( $catalog_posts->have_posts() ) : ?>
        <?php while ( $catalog_posts->have_posts() ) : $catalog_posts->the_post(); ?>
          <?php get_template_part('template-parts/acard'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <?php
    wp_die();
}


//

function search_posts() {
  $a_brand = $_POST['a_brand'];
  // $price = $_POST['price'];
  
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'meta_query' => array(
      'relation' => 'AND',
      array(
        'key' => 'a_brand',
        'value' => $a_brand,
        'compare' => '=',
      ),
      // array(
      //   'key' => 'price',
      //   'value' => $price,
      //   'compare' => '<=',
      //   'type' => 'NUMERIC',
      // ),
    ),
  );
  
  $query = new WP_Query($args);
  
  // Обработка результатов и возврат JSON
  $results = array();
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      $results[] = array(
        'title' => get_the_title(),
        'permalink' => get_permalink(),
        // Другие поля поста, которые вам нужны
      );
    }
  }
  
  wp_reset_postdata();
  
  wp_send_json($results);
}
add_action('wp_ajax_search_posts', 'search_posts');
add_action('wp_ajax_nopriv_search_posts', 'search_posts');

///////////////////////////////



@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );

?>