<?php

require_once get_template_directory() . '/blocks/hero-section.php';
require_once get_template_directory() . '/blocks/icon-grid.php';
require_once get_template_directory() . '/blocks/content-sections.php';
require_once get_template_directory() . '/blocks/globe-sections.php';
require_once get_template_directory() . '/blocks/article-grid.php';
require_once get_template_directory() . '/blocks/contact-section.php';
require_once get_template_directory() . '/blocks/eshop-banner.php';
require_once get_template_directory() . '/blocks/products-list.php';
require_once get_template_directory() . '/blocks/content-sections-wysiwyg.php';
require_once get_template_directory() . '/blocks/product-hero.php';
require_once get_template_directory() . '/blocks/programs-section.php';
require_once get_template_directory() . '/blocks/single-hero.php';


/**
 * Theme setup.
 */
function tailpress_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
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

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('responsive-embeds');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');

    /*
     * Add theme support for block template-parts.
    */
    add_theme_support('block-patterns');
    add_theme_support('block-template-parts');

    require_once(get_template_directory() . '/shortcodes.php');
    require_once(get_template_directory() . '/Floria_Menu_Walker.php');

}

add_action('after_setup_theme', 'tailpress_setup');


/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
    $theme = wp_get_theme();
    wp_enqueue_script('jquery');
    wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
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
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
    if (isset($args->submenu_class)) {
        $classes[] = $args->submenu_class;
    }

    if (isset($args->{"submenu_class_$depth"})) {
        $classes[] = $args->{"submenu_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);


function enqueue_swiper_scripts()
{
    // Zahrnutí stylů SwiperJSs
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
function floria_images($path)
{
    return get_template_directory_uri() . '/assets/images/' . ltrim($path, '/');
}


// AJAX handler pro načtení článků podle měsíce
function load_articles_by_month()
{
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
        while ($query->have_posts()) {
            $query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $post_date = get_the_date('d/m/Y');
            $post_title = get_the_title();
            $post_url = get_permalink();
            $excerpt = get_the_excerpt();
?>
            <div class="article-card">
                <div class="article-image mb-4">
                    <a class="block w-full" href="<?= esc_url($post_url) ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('class' => 'w-full max-h-80')); ?>
                        <?php endif; ?>
                    </a>
                    <div class="text-sm mt-5"><?= esc_html($post_date) ?></div>
                </div>
                <h2 class="article-title text-2xl font-bold my-5">
                    <a href="<?= esc_url($post_url) ?>" class="hover:underline"><?= esc_html($post_title) ?></a>
                </h2>
                <div class="article-excerpt">
                    <p><?= esc_html($excerpt) ?></p>
                </div>
                <a href="<?= esc_url($post_url) ?>" class="btn-line mt-10 inline-block">Zobrazit více</a>
            </div>
        <?php
        }
    } else {
        ?>
         <h3 class="text-center w-full">Vyberte měsíc z carouselu pro zobrazení článků.</h3>
<?php
    }

    wp_reset_postdata();
    wp_die(); // Ukončení AJAX volání
}
add_action('wp_ajax_load_articles', 'load_articles_by_month');
add_action('wp_ajax_nopriv_load_articles', 'load_articles_by_month');








// Vytvoření vlastní taxonomie pro kategorie stránek
function create_page_categories() {
    $labels = array(
        'name'              => 'Kategorie stránek',
        'singular_name'     => 'Kategorie stránky',
        'search_items'      => 'Hledat kategorie',
        'all_items'        => 'Všechny kategorie',
        'parent_item'      => 'Nadřazená kategorie',
        'parent_item_colon' => 'Nadřazená kategorie:',
        'edit_item'        => 'Upravit kategorii',
        'update_item'      => 'Aktualizovat kategorii',
        'add_new_item'     => 'Přidat novou kategorii',
        'new_item_name'    => 'Název nové kategorie',
        'menu_name'        => 'Kategorie stránek'
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'          => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'    => false,
        'show_in_rest'     => true,
        'rewrite'          => array('slug' => 'page-category'),
        'show_in_quick_edit' => true
    );

    register_taxonomy('page_category', 'page', $args);
}
add_action('init', 'create_page_categories');

// Přidání filtru kategorií do seznamu stránek
function add_page_category_filter() {
    global $typenow;
    if ($typenow === 'page') {
        $taxonomy = 'page_category';
        $selected = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        
        $dropdown_args = array(
            'taxonomy'          => $taxonomy,
            'name'             => $taxonomy,
            'show_option_all'  => 'Všechny kategorie stránek',
            'show_count'       => true,
            'hierarchical'     => true,
            'selected'         => $selected,
            'value_field'      => 'slug'
        );
        
        wp_dropdown_categories($dropdown_args);
    }
}
add_action('restrict_manage_posts', 'add_page_category_filter');

// Úprava query pro filtrování stránek
function filter_pages_by_page_category($query) {
    global $pagenow, $typenow;

    if (!is_admin()) {
        return;
    }

    if ($pagenow !== 'edit.php' || $typenow !== 'page') {
        return;
    }

    if (!isset($_GET['page_category']) || empty($_GET['page_category'])) {
        return;
    }

    $query_vars = &$query->query_vars;
    
    $term = get_term_by('slug', $_GET['page_category'], 'page_category');
    if ($term) {
        $query_vars['page_category'] = $term->slug;
    }
}
add_action('pre_get_posts', 'filter_pages_by_page_category');

// Přidání počtu kategorií do menu administrace
function add_page_categories_count_to_menu() {
    global $submenu;
    
    if (isset($submenu['edit.php?post_type=page'])) {
        $taxonomy = 'page_category';
        $term_count = wp_count_terms($taxonomy, array('hide_empty' => false));
        
        foreach ($submenu['edit.php?post_type=page'] as $key => $menu_item) {
            if (isset($menu_item[2]) && $menu_item[2] === 'edit-tags.php?taxonomy=' . $taxonomy . '&post_type=page') {
                $submenu['edit.php?post_type=page'][$key][0] .= ' <span class="awaiting-mod">' . $term_count . '</span>';
                break;
            }
        }
    }
}
add_action('admin_menu', 'add_page_categories_count_to_menu');

// Přidání podpory pro filtrování podle URL parametru
function convert_page_category_id_to_term_in_query($query) {
    global $pagenow;
    
    if ($pagenow === 'edit.php' && isset($_GET['page_category']) && is_numeric($_GET['page_category'])) {
        $term = get_term($_GET['page_category'], 'page_category');
        if ($term && !is_wp_error($term)) {
            wp_redirect(add_query_arg('page_category', $term->slug));
            exit;
        }
    }
}
add_action('parse_query', 'convert_page_category_id_to_term_in_query');

// Přidat do functions.php
function register_footer_menus() {
    register_nav_menus(array(
        'footer_menu_1' => 'Footer Menu 1',
        'footer_menu_2' => 'Footer Menu 2',
        'footer_menu_3' => 'Footer Menu 3'
    ));
}
add_action('init', 'register_footer_menus');

// Přidat do functions.php
function add_menu_link_class($atts, $item, $args) {
    $atts['class'] = 'hover:text-primary transition-colors';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);

function add_menu_li_class($classes, $item, $args) {
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_li_class', 10, 3);

// Přidat do functions.php
function register_partners_post_type() {
    $labels = array(
        'name'                  => 'Partneři',
        'singular_name'         => 'Partner',
        'menu_name'            => 'Partneři',
        'add_new'              => 'Přidat partnera',
        'add_new_item'         => 'Přidat nového partnera',
        'edit_item'            => 'Upravit partnera',
        'new_item'             => 'Nový partner',
        'view_item'            => 'Zobrazit partnera',
        'search_items'         => 'Hledat partnery',
        'not_found'            => 'Žádní partneři nenalezeni',
        'not_found_in_trash'   => 'V koši nejsou žádní partneři'
    );

    $args = array(
        'labels'               => $labels,
        'public'               => true,
        'publicly_queryable'   => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'query_var'            => true,
        'rewrite'              => array('slug' => 'partners'),
        'capability_type'      => 'post',
        'has_archive'          => false,
        'hierarchical'         => false,
        'menu_position'        => 5,
        'menu_icon'            => 'dashicons-groups',
        'supports'             => array('title', 'page-attributes')
    );

    register_post_type('partner', $args);
}
add_action('init', 'register_partners_post_type');

// Přidání meta boxu pro URL a logo
function add_partner_meta_boxes() {
    add_meta_box(
        'partner_details',
        'Detaily partnera',
        'render_partner_meta_box',
        'partner',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_partner_meta_boxes');

// Načtení media uploaderu
function enqueue_partner_admin_scripts() {
    global $post_type;
    if ('partner' === $post_type) {
        wp_enqueue_media();
        
        // Inline skript pro práci s médii
        add_action('admin_footer', function() {
            ?>
            <script>
            jQuery(document).ready(function($) {
                var mediaUploader;
                
                $('#upload_logo_button').on('click', function(e) {
                    e.preventDefault();
                    
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    
                    mediaUploader = wp.media({
                        title: 'Vybrat logo',
                        button: {
                            text: 'Použít toto logo'
                        },
                        multiple: false
                    });

                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#partner_logo').val(attachment.url);
                        $('#partner_logo_preview').attr('src', attachment.url).show();
                        $('#remove_logo_button').show();
                    });
                    
                    mediaUploader.open();
                });

                $('#remove_logo_button').on('click', function() {
                    $('#partner_logo').val('');
                    $('#partner_logo_preview').attr('src', '').hide();
                    $(this).hide();
                });
            });
            </script>
            <?php
        });
    }
}
add_action('admin_enqueue_scripts', 'enqueue_partner_admin_scripts');

// Vykreslení meta boxu
function render_partner_meta_box($post) {
    $partner_url = get_post_meta($post->ID, '_partner_url', true);
    $partner_logo = get_post_meta($post->ID, '_partner_logo', true);
    $new_tab = get_post_meta($post->ID, '_partner_new_tab', true);
    wp_nonce_field('partner_meta_box', 'partner_meta_box_nonce');
    ?>
    <div class="partner-meta-box">
        <p>
            <label for="partner_url"><strong>URL partnera:</strong></label><br>
            <input type="text" id="partner_url" name="partner_url" value="<?php echo esc_url($partner_url); ?>" style="width: 100%;">
        </p>
        <p>
            <label for="partner_new_tab">
                <input type="checkbox" id="partner_new_tab" name="partner_new_tab" <?php checked($new_tab, 'yes'); ?>>
                Otevřít v novém okně
            </label>
        </p>
        <p>
            <label><strong>Logo partnera:</strong></label><br>
            <input type="hidden" id="partner_logo" name="partner_logo" value="<?php echo esc_attr($partner_logo); ?>">
            <div style="margin: 10px 0;">
                <img id="partner_logo_preview" src="<?php echo esc_url($partner_logo); ?>" style="max-width: 200px; <?php echo empty($partner_logo) ? 'display: none;' : ''; ?>">
            </div>
            <button type="button" class="button" id="upload_logo_button">Nahrát logo</button>
            <button type="button" class="button" id="remove_logo_button" <?php echo empty($partner_logo) ? 'style="display: none;"' : ''; ?>>Odstranit logo</button>
        </p>
    </div>
    <?php
}

// Uložení meta dat
function save_partner_meta($post_id) {
    if (!isset($_POST['partner_meta_box_nonce']) ||
        !wp_verify_nonce($_POST['partner_meta_box_nonce'], 'partner_meta_box') ||
        defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['partner_url'])) {
        update_post_meta($post_id, '_partner_url', esc_url_raw($_POST['partner_url']));
    }
    
    if (isset($_POST['partner_logo'])) {
        update_post_meta($post_id, '_partner_logo', esc_url_raw($_POST['partner_logo']));
    }

    $new_tab = isset($_POST['partner_new_tab']) ? 'yes' : 'no';
    update_post_meta($post_id, '_partner_new_tab', $new_tab);
}
add_action('save_post_partner', 'save_partner_meta');

// Funkce pro vykreslení partnerů v slideru
function get_partners_slider_html() {
    $partners = get_posts(array(
        'post_type' => 'partner',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ));

    $output = '';
    foreach ($partners as $partner) {
        $partner_url = get_post_meta($partner->ID, '_partner_url', true);
        $partner_logo = get_post_meta($partner->ID, '_partner_logo', true);
        $new_tab = get_post_meta($partner->ID, '_partner_new_tab', true);
        $target = $new_tab === 'yes' ? ' target="_blank" rel="noopener noreferrer"' : '';

        $output .= '<div class="placeholder-card p-6 rounded-lg shadow-lg">';
        if ($partner_url && $partner_logo) {
            $output .= '<a href="' . esc_url($partner_url) . '"' . $target . '>';
        }
        if ($partner_logo) {
            $output .= '<img src="' . esc_url($partner_logo) . '" alt="' . esc_attr($partner->post_title) . '" class="w-full h-12 rounded-lg mb-4">';
        }
        if ($partner_url && $partner_logo) {
            $output .= '</a>';
        }
        $output .= '</div>';
    }

    return $output;
}