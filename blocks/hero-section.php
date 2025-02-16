<?php
function register_hero_section_block() {
    wp_register_script(
        'hero-section-block',
        get_template_directory_uri() . '/blocks/hero-section.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/hero-section', array(
        'editor_script' => 'hero-section-block',
        'render_callback' => 'render_hero_section_block',
        'attributes' => array(
            'leftBackgroundImage' => array(
                'type' => 'string',
                'default' => '',
            ),
            'rightBackgroundImage' => array(
                'type' => 'string',
                'default' => '',
            ),
            'leftButtonText' => array(
                'type' => 'string',
                'default' => 'Zobrazit více',
            ),
            'leftButtonUrl' => array(
                'type' => 'string',
                'default' => '',
            ),
            'rightButtonText' => array(
                'type' => 'string',
                'default' => 'Zobrazit více',
            ),
            'rightButtonUrl' => array(
                'type' => 'string',
                'default' => '',
            ),
            'leftTitle' => array(
                'type' => 'string',
                'default' => 'Pěstitelský',
            ),
            'rightTitle' => array(
                'type' => 'string',
                'default' => 'Trávníkový',
            ),
        )
    ));

    wp_register_style(
        'hero-section-editor',
        get_template_directory_uri() . '/blocks/hero-section-editor.css'
    );
    wp_enqueue_style('hero-section-editor');
}
add_action('init', 'register_hero_section_block');

function render_hero_section_block($attributes) {
    $left_bg = $attributes['leftBackgroundImage'];
    $right_bg = $attributes['rightBackgroundImage'];
    $left_btn_text = $attributes['leftButtonText'];
    $left_btn_url = $attributes['leftButtonUrl'];
    $right_btn_text = $attributes['rightButtonText'];
    $right_btn_url = $attributes['rightButtonUrl'];
    $left_title = $attributes['leftTitle'];
    $right_title = $attributes['rightTitle'];

    ob_start(); ?>
    <div class="hero flex flex-wrap h-screen border-b-2 lg:border-none border-gray mb-0">
        <!-- Left -->
        <div class="group hero-section w-full md:w-6/12 bg-cover bg-center pt-10 md:pt-0"
            style="background-image: url('<?php echo esc_url($left_bg); ?>')">
            <div class="hero-section-overlay"></div>
            <div class="hero-section-content scale-75 lg:scale-100">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flower.svg" class="hero-section-icon hero-section-icon-hover" alt="Grass icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flower-gray.svg" class="hero-section-icon hero-section-icon-default" alt="Grass icon">
                <h1 class="hero-section-title"><?php echo wp_kses_post($left_title); ?></h1>
                <a href="<?php echo esc_url($left_btn_url); ?>" class="hero-section-button"><?php echo esc_html($left_btn_text); ?></a>
            </div>
        </div>

        <!-- Right -->
        <div class="group hero-section w-full md:w-6/12 bg-cover bg-center"
            style="background-image: url('<?php echo esc_url($right_bg); ?>')">
            <div class="hero-section-overlay"></div>
            <div class="hero-section-content scale-75 lg:scale-100">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/grass.svg" class="hero-section-icon hero-section-icon-hover" alt="Flower icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/grass-gray.svg" class="hero-section-icon hero-section-icon-default" alt="Flower icon">
                <h1 class="hero-section-title"><?php echo wp_kses_post($right_title); ?></h1>
                <a href="<?php echo esc_url($right_btn_url); ?>" class="hero-section-button"><?php echo esc_html($right_btn_text); ?></a>
            </div>
        </div>

        <!-- Down pointing arrow -->
        <div class="absolute bottom-0 z-50 left-0 right-0 text-center animate-bounce hidden lg:block">
            <a class="inline-block z-50 p-2 md:p-5 pb-1" href="#floria-content">
                <img class="w-9 md:w-16 animate-bounce" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/down-arrow.svg" alt="Down arrow">
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}