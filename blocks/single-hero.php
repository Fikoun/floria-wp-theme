<?php
function register_single_hero_block() {
    wp_register_script(
        'single-hero-block',
        get_template_directory_uri() . '/blocks/single-hero.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/single-hero', array(
        'editor_script' => 'single-hero-block',
        'render_callback' => 'render_single_hero_block',
        'attributes' => array(
            'backgroundImage' => array(
                'type' => 'string',
                'default' => get_template_directory_uri() . '/assets/images/hero-2.png'
            ),
            'icon' => array(
                'type' => 'string',
                'default' => get_template_directory_uri() . '/assets/images/icons/grass.svg'
            ),
            'title' => array(
                'type' => 'string',
                'default' => 'Trávníkový'
            )
        )
    ));

    wp_register_style(
        'single-hero-editor',
        get_template_directory_uri() . '/blocks/single-hero-editor.css'
    );
    wp_enqueue_style('single-hero-editor');
}
add_action('init', 'register_single_hero_block');

function render_single_hero_block($attributes) {
    $background_image = $attributes['backgroundImage'];
    $icon = $attributes['icon'];
    $title = $attributes['title'];

    ob_start(); ?>
    <div class="single-hero flex mb-20 group">
        <div class="hero-section w-full bg-cover bg-center"
            style="background-image: url('<?php echo esc_url($background_image); ?>')">
            
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            <div class="hero-section-content">
                <img src="<?php echo esc_url($icon); ?>" class="hero-section-icon" alt="Hero icon">
                <h1 class="hero-section-title"><?php echo esc_html($title); ?></h1>
            </div>
        </div>

        <!-- Down pointing arrow -->
        <div class="absolute bottom-32 z-50 left-0 right-0 text-center animate-bounce hidden lg:block">
            <a class="inline-block z-50 p-2 md:p-5 pb-1" href="#floria-content">
                <img class="w-9 md:w-16 animate-bounce" 
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/down-arrow.svg"
                     alt="Down arrow">
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}