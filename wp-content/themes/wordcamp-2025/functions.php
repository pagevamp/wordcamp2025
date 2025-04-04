<?php

/**
 * wordcamp2025 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordcamp2025
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wordcamp2025_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wordcamp2025, use a find and replace
		* to change 'wordcamp2025' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('wordcamp2025', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'wordcamp2025'),
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
			'wordcamp2025_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'wordcamp2025_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordcamp2025_content_width()
{
	$GLOBALS['content_width'] = apply_filters('wordcamp2025_content_width', 640);
}
add_action('after_setup_theme', 'wordcamp2025_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordcamp2025_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'wordcamp2025'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'wordcamp2025'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'wordcamp2025_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wordcamp2025_scripts()
{
	wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '5.3.2', true);
	wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/js/header.js', array(), '5.3.2', true);
	wp_enqueue_script('m-service-list-js', get_template_directory_uri() . '/assets/js/m-service-list.js', array(), '5.3.2', true);
	wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array(), '5.3.2', true);

	wp_enqueue_style('wordcamp2025-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('wordcamp2025-style', 'rtl', 'replace');

	wp_enqueue_script('wordcamp2025-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wordcamp2025_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Timezone html and script.
 */
function display_dynamic_timezones()
{
	ob_start();
?>
	<div class="site-footer__destination">
		<div class="site-footer__destination-title">
			<span>Kathmandu</span><span class="timezone" id="Asia/Kathmandu"></span>
		</div>
		<div class="site-footer__destination-title">
			<span>Milan</span><span class="timezone" id="Europe/Rome"></span>
		</div>
		<div class="site-footer__destination-title">
			<span>Belfast</span><span class="timezone" id="Europe/London"></span>
		</div>
		<div class="site-footer__destination-title">
			<span>New York</span><span class="timezone" id="America/New_York"></span>
		</div>
	</div>

	<script>
		function updateTime() {
			document.querySelectorAll('.timezone').forEach(element => {
				const timeZone = element.id;
				const timeString = new Intl.DateTimeFormat('en-US', {
					timeZone,
					hour: '2-digit',
					minute: '2-digit',
					hour12: false
				}).format(new Date());
				element.textContent = timeString;
			});
		}

		setInterval(updateTime, 1000);
		updateTime();
	</script>
<?php
	return ob_get_clean();
}
add_shortcode('timezones', 'display_dynamic_timezones');