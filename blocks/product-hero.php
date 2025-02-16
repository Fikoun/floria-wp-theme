<?php
function register_product_hero_block() {
    wp_register_script(
        'product-hero-block',
        get_template_directory_uri() . '/blocks/product-hero.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/product-hero', array(
        'editor_script' => 'product-hero-block',
        'render_callback' => 'render_product_hero_block',
        'attributes' => array(
            'productTitle' => array(
                'type' => 'string',
                'default' => 'FLORIA Substrát pro jahody „Otoč a sázej"'
            ),
            'productDescription' => array(
                'type' => 'string',
                'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.'
            ),
            'buttonText' => array(
                'type' => 'string',
                'default' => 'koupit na eshopu'
            ),
            'buttonUrl' => array(
                'type' => 'string',
                'default' => '#'
            ),
            'mainImage' => array(
                'type' => 'string',
                'default' => ''
            ),
            'flowerIcon' => array(
                'type' => 'string',
                'default' => ''
            ),
            'galleryImages' => array(
                'type' => 'array',
                'default' => array_fill(0, 6, '')
            )
        )
    ));

    wp_register_style(
        'product-hero-editor',
        get_template_directory_uri() . '/blocks/product-hero-editor.css'
    );
    wp_enqueue_style('product-hero-editor');
}
add_action('init', 'register_product_hero_block');

function render_product_hero_block($attributes) {
    $title = $attributes['productTitle'];
    $description = $attributes['productDescription'];
    $button_text = $attributes['buttonText'];
    $button_url = $attributes['buttonUrl'];
    $main_image = $attributes['mainImage'];
    $flower_icon = $attributes['flowerIcon'];
    $gallery_images = $attributes['galleryImages'];

    ob_start(); ?>
    <section class="relative pb-16 px-8">
        <div class="flex flex-wrap items-stretch -mx-4">
            <div class="w-full lg:w-1/2 px-4 lg:mb-0">
                <div class="relative flex flex-wrap items-center justify-center py-20 mt-24 lg:mt-5">
                    <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">
                        <div class="w-40 h-40 bg-gray-200 rounded-full product-gradient"></div>
                    </div>
                    
                    <div class="absolute top-0 left-0 right-0 text-center">
                        <?php if ($flower_icon) : ?>
                            <img src="<?php echo esc_url($flower_icon); ?>" class="inline lg:hidden w-8" alt="Flower icon">
                        <?php endif; ?>
                        <h2 class="lg:hidden pt-2"><?php echo wp_kses_post($title); ?></h2>
                    </div>

                    <?php if ($main_image) : ?>
                        <img src="<?php echo esc_url($main_image); ?>" alt="Product"
                            class="relative z-10 inline-block max-w-64 lg:max-w-lg pt-14 lg:pt-0">
                    <?php endif; ?>
                </div>

                <div class="flex space-x-4 justify-center">
                    <?php foreach ($gallery_images as $image) : ?>
                        <?php if ($image) : ?>
                            <div class="images-list-item">
                                <img src="<?php echo esc_url($image); ?>" alt="Product view" 
                                     class="w-full h-full object-cover">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="w-full lg:w-1/2 px-4 lg:pt-32">
                <?php if ($flower_icon) : ?>
                    <img src="<?php echo esc_url($flower_icon); ?>" 
                         class="hidden lg:inline-block pb-8 w-8" alt="Flower icon">
                <?php endif; ?>

                <h2 class="hidden lg:block text-gray-900 mb-6"><?php echo wp_kses_post($title); ?></h2>
                <div class="text-lg font-light mb-16"><?php echo wp_kses_post($description); ?></div>
                <a href="<?php echo esc_url($button_url); ?>" class="btn-primary">
                    <?php echo esc_html($button_text); ?>
                </a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}