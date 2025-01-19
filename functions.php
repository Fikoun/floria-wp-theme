<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );

    /*
     * Add theme support for block template-parts.
    */
    add_theme_support('block-patterns');
    add_theme_support( 'block-template-parts' );
    
	require_once(get_template_directory() . '/shortcodes.php');
}

add_action( 'after_setup_theme', 'tailpress_setup' );


/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );


function enqueue_swiper_scripts() {
    // Zahrnutí stylů SwiperJS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', [], null);

    // Zahrnutí skriptů SwiperJS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], null, true);

    // Zahrnutí vlastního skriptu pro inicializaci SwiperJS
    wp_enqueue_script('custom-swiper-init', get_template_directory_uri() . '/js/swiper-init.js', ['swiper-js'], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');


/**
 * Get the URI for an asset in the theme directory.
 *
 * @param string $path Path to the asset.
 *
 * @return string
 */
function floria_images( $path ) {
	return get_template_directory_uri() . '/assets/images/' . ltrim( $path, '/' );
}

// AJAX handler pro načtení článků podle měsíce
function load_articles_by_month() {
    $month = intval($_POST['month']); // Číslo měsíce z carouselu (1 = Leden, 2 = Únor, ...)
    
    // Převod měsíce na slug
    $months = [
        1 => 'leden',
        2 => 'unor',
        3 => 'brezen',
        4 => 'duben',
        5 => 'kveten',
        6 => 'cerven',
        7 => 'cervenec',
        8 => 'srpen',
        9 => 'zari',
        10 => 'rijen',
        11 => 'listopad',
        12 => 'prosinec'
    ];
    $category_slug = isset($months[$month]) ? $months[$month] : '';

    // Načtení kategorie podle slug
    $category = get_category_by_slug($category_slug);
    $category_name = $category ? $category->name : '';
    $category_description = $category ? $category->description : '';

    // Dotaz na články podle kategorie
    $args = [
        'category_name' => $category_slug, // Slug kategorie
        'posts_per_page' => -1,           // Načíst všechny články
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {

        // Výpis článků

        while ($query->have_posts()) {
            $query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $post_date = get_the_date('d/m/Y');
            $post_title = get_the_title();
            $post_url = get_permalink();
            $excerpt = get_the_excerpt();

            echo '<div class="article-card">';
            echo '<div class="article-image mb-4">';
            echo '<a href="' . esc_url($post_url) . '">';
            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($post_title) . '">';
            echo '</a>';
            echo '<div class="text-sm mt-5">' . esc_html($post_date) . '</div>';
            echo '</div>';
            echo '<h2 class="article-title text-2xl font-bold my-5">';
            echo '<a href="' . esc_url($post_url) . '" class="hover:underline">' . esc_html($post_title) . '</a>';
            echo '</h2>';
            echo '<div class="article-excerpt"><p>' . esc_html($excerpt) . '</p></div>';
            echo '<a href="' . esc_url($post_url) . '" class="btn-line mt-10 inline-block">Zobrazit více</a>';
            echo '</div>';
        }

    } else {
        echo '<p>Žádné články pro tento měsíc nebyly nalezeny.</p>';
    }

    wp_reset_postdata();
    wp_die(); // Ukončení AJAX volání
}
add_action('wp_ajax_load_articles', 'load_articles_by_month');
add_action('wp_ajax_nopriv_load_articles', 'load_articles_by_month');


// Shortcode pro carousel
function custom_month_carousel_shortcode() {
    // HTML carouselu
    ob_start();
    ?>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 gap-x-14 mt-8">
    	<div class="container-section">
	<section>
    <div class="custom-carousel">
        <div class="swiper-container">
        	<?php
// V shortcode funkci custom_month_carousel_shortcode()
$months_slugs = [
    'leden', 'unor', 'brezen', 'duben', 'kveten', 'cerven',
    'cervenec', 'srpen', 'zari', 'rijen', 'listopad', 'prosinec'
];

$months_display = [
    'Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen',
    'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec'
];

echo '<div class="swiper-wrapper">';
foreach ($months_slugs as $index => $month_slug) {
    // Získání kategorie podle slugu
    $category = get_category_by_slug($month_slug);
    $category_name = $category ? $category->name : $months_display[$index];
    $category_description = $category ? $category->description : '';

    echo '<div class="swiper-slide" data-month="' . ($index + 1) . '">';
    echo '<span class="category-name">' . esc_html($category_name) . '</span>';
    if (!empty($category_description)) {
        echo '<br/><span class="category-description">' . esc_html($category_description) . '</span>';
    }
    echo '</div>';
}
echo '</div>';
?>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div id="article-list">
        <p>Vyberte měsíc z carouselu pro zobrazení článků.</p>
    </div>

    </section></div></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.swiper-slide');
            const articleList = document.getElementById('article-list');

            slides.forEach(slide => {
                slide.addEventListener('click', function() {
                    const month = this.getAttribute('data-month');

                    // AJAX požadavek
                    const data = new FormData();
                    data.append('action', 'load_articles');
                    data.append('month', month);

                    fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                        method: 'POST',
                        body: data,
                    })
                    .then(response => response.text())
                    .then(html => {
                        articleList.innerHTML = html;
                    })
                    .catch(error => console.error('Chyba při načítání článků:', error));
                });
            });
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('month_carousel', 'custom_month_carousel_shortcode');
