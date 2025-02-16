<?php
function register_products_list_block() {
    wp_register_script(
        'products-list-block',
        get_template_directory_uri() . '/blocks/products-list.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/products-list', array(
        'editor_script' => 'products-list-block',
        'render_callback' => 'render_products_list_block',
        'attributes' => array(
            'mainTitle' => array(
                'type' => 'string',
                'default' => 'Naše jedničky'
            ),
            'products' => array(
                'type' => 'array',
                'default' => array(
                    array(
                        'subtitle' => 'FLORIA PREMIUM',
                        'title' => 'krystalické hnojivo',
                        'image' => '',
                        'url' => '/produkt',
                        'buttonText' => 'koupit na eshopu'
                    ),
                    array(
                        'subtitle' => 'FLORIA PREMIUM',
                        'title' => 'krystalické hnojivo',
                        'image' => '',
                        'url' => '/produkt',
                        'buttonText' => 'koupit na eshopu'
                    ),
                    array(
                        'subtitle' => 'FLORIA PREMIUM',
                        'title' => 'krystalické hnojivo',
                        'image' => '',
                        'url' => '/produkt',
                        'buttonText' => 'koupit na eshopu'
                    ),
                    array(
                        'subtitle' => 'FLORIA PREMIUM',
                        'title' => 'krystalické hnojivo',
                        'image' => '',
                        'url' => '/produkt',
                        'buttonText' => 'koupit na eshopu'
                    )
                )
            )
        )
    ));

    wp_register_style(
        'products-list-editor',
        get_template_directory_uri() . '/blocks/products-list-editor.css'
    );
    wp_enqueue_style('products-list-editor');
}
add_action('init', 'register_products_list_block');

function render_products_list_block($attributes) {
    $main_title = $attributes['mainTitle'];
    $products = $attributes['products'];

    ob_start(); ?>
    <div class="container-section py-16 px-8">
        <h2 class="heading-mid mb-8"><?php echo esc_html($main_title); ?></h2>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-7">
            <?php foreach ($products as $product) : ?>
                <div class="group flex flex-col items-center justify-center p-10 px-12 rounded-3xl border border-white overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <a href="<?php echo esc_url($product['url']); ?>" class="flex flex-col items-center justify-center">
                        <div class="relative">
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center -z-10">
                                <div class="w-5 h-5 bg-gray-200 rounded-full product-gradient group-hover:scale-125 transition-transform duration-300"></div>
                            </div>
                            <img src="<?php echo esc_url($product['image']); ?>" 
                                 alt="<?php echo esc_attr($product['title']); ?>" 
                                 class="mb-4 z-10 group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h4 class="text-center text-sm text-secondary-light font-medium mb-2 transition-colors duration-300">
                            <?php echo esc_html($product['subtitle']); ?>
                        </h4>
                        <h3 class="text-center text-3xl font-semibold mb-2 group-hover:text-primary-light transition-colors duration-300">
                            <?php echo esc_html($product['title']); ?>
                        </h3>
                        <span class="btn-outline mt-2 opacity-60 hover:opacity-100 hover:text-white transition-all duration-300">
                            <?php echo esc_html($product['buttonText']); ?>
                        </span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}