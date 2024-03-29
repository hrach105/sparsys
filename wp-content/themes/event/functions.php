<?php
/**
 * event-organization functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package event-organization
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function event_organization_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on event-organization, use a find and replace
		* to change 'event-organization' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'event-organization', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'event-organization' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'event_organization_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'event_organization_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function event_organization_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'event_organization_content_width', 640 );
}
add_action( 'after_setup_theme', 'event_organization_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function event_organization_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'event-organization' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'event-organization' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'event_organization_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function event_organization_scripts() {
	wp_enqueue_style( 'event-organization-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'event-organization-style', 'rtl', 'replace' );

	wp_enqueue_script( 'event-organization-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'event_organization_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function my_theme_enqueue_styles() {
    // Register the stylesheet
    wp_register_style( 'style', get_template_directory_uri() . '/assets/css/armmage-style.css', array(), '1.0', 'all' );

    // Enqueue the stylesheet
    wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_scripts() {
    wp_enqueue_script('jquery');

    wp_register_script('custom-script-js', get_template_directory_uri() . '/assets/js/armmage-script.js', array('jquery'), '1.0', true);
    wp_enqueue_script('custom-script-js');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');



if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme Options',
        'menu_title'	=> 'Theme options',
        'menu_slug' 	=> 'Theme-options',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}


add_action( 'init', 'register_post_types' );

function register_post_types(){

    register_post_type( 'slides', [
        'label'  => null,
        'labels' => [
            'name'               => 'sliders', // основное название для типа записи
            'singular_name'      => 'slider', // название для одной записи этого типа
            'add_new'            => 'Добавить ____', // для добавления новой записи
            'add_new_item'       => 'Добавление ____', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование ____', // для редактирования типа записи
            'new_item'           => 'Новое ____', // текст новой записи
            'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
            'search_items'       => 'Искать ____', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Slider1', // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

}







add_action( 'init', 'register_post_types2' );

function register_post_types2(){

    register_post_type( 'slides2', [
        'label'  => null,
        'labels' => [
            'name'               => 'sliders2', // основное название для типа записи
            'singular_name'      => 'slider', // название для одной записи этого типа
            'add_new'            => 'Добавить ', // для добавления новой записи
            'add_new_item'       => 'Добавление ', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование ', // для редактирования типа записи
            'new_item'           => 'Новое ', // текст новой записи
            'view_item'          => 'Смотреть ', // для просмотра записи этого типа.
            'search_items'       => 'Искать ', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Slider2', // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

}

add_action( 'init', 'register_post_types3' );

function register_post_types3(){

    register_post_type( 'slides3', [
        'label'  => null,
        'labels' => [
            'name'               => 'sliders', // основное название для типа записи
            'singular_name'      => 'slider', // название для одной записи этого типа
            'add_new'            => 'Добавить ', // для добавления новой записи
            'add_new_item'       => 'Добавление ', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование ', // для редактирования типа записи
            'new_item'           => 'Новое ', // текст новой записи
            'view_item'          => 'Смотреть ', // для просмотра записи этого типа.
            'search_items'       => 'Искать ', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Slider3', // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

}

