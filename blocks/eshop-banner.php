<?php
function register_eshop_banner_block() {
    wp_register_script(
        'eshop-banner-block',
        get_template_directory_uri() . '/blocks/eshop-banner.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/eshop-banner', array(
        'editor_script' => 'eshop-banner-block',
        'render_callback' => 'render_eshop_banner_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => 'Celý sortiment našch produktů<br/>naleznete na našem e–shopu'
            ),
            'buttonText' => array(
                'type' => 'string',
                'default' => 'ZOBRAZIT ESHOP'
            ),
            'buttonUrl' => array(
                'type' => 'string',
                'default' => '#'
            ),
            'logoImage' => array(
                'type' => 'string',
                'default' => ''
            )
        )
    ));

    wp_register_style(
        'eshop-banner-editor',
        get_template_directory_uri() . '/blocks/eshop-banner-editor.css'
    );
    wp_enqueue_style('eshop-banner-editor');
}
add_action('init', 'register_eshop_banner_block');

function render_eshop_banner_block($attributes) {
    $title = $attributes['title'];
    $button_text = $attributes['buttonText'];
    $button_url = $attributes['buttonUrl'];
    $logo_image = $attributes['logoImage'];
    $theme_directory = get_template_directory_uri();

    ob_start(); ?>
    <div class="container-section">
        <div class="relative bg-secondary-light rounded-3xl">
            <div class="container mx-auto p-8 px-5 md:p-10 pt-12 md:px-16">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                    <div class="order-2 md:order-1 mt-6 md:mt-0 text-center md:text-left">
                        <h3 class="font-semibold mb-6 text-secondary py-5 md:p-0">
                            <?php echo wp_kses_post($title); ?>
                        </h3>

                        <a href="<?php echo esc_url($button_url); ?>" class="btn-primary bg-secondary text-white">
                            <?php echo esc_html($button_text); ?>
                        </a>
                    </div>
                    <div class="text-center md:text-right order-1 md:order-2">
                        <?php if ($logo_image) : ?>
                            <img src="<?php echo esc_url($logo_image); ?>"
                                alt="Logo - Megazahrady"
                                class="inline-block w-64">
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Statické listy -->
                <img src="<?php echo $theme_directory; ?>/assets/images/leaf-2.png" alt="Leaf 2" class="leaf-1">
                <img src="<?php echo $theme_directory; ?>/assets/images/leaf-1.png" alt="Leaf 1" class="leaf-2">
                <img src="<?php echo $theme_directory; ?>/assets/images/leaf-3.png" alt="Leaf 3" class="leaf-3">
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}