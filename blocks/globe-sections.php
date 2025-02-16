<?php
function register_globe_sections_block() {
    wp_register_script(
        'globe-sections-block',
        get_template_directory_uri() . '/blocks/globe-sections.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/globe-sections', array(
        'editor_script' => 'globe-sections-block',
        'render_callback' => 'render_globe_sections_block',
        'attributes' => array(
            'mainTitle' => array(
                'type' => 'string',
                'default' => 'Dotek luxusu pro Vaši zahradu'
            ),
            'leftSection' => array(
                'type' => 'object',
                'default' => array(
                    'title' => 'Pěstitelský program',
                    'content' => 'Jedinečné substráty, hnojiva a dekorační materiály pro KRÁLOVNY ZAHRAD.',
                    'buttonText' => 'Zobrazit více',
                    'buttonUrl' => '/pestitelsky-program',
                    'globeImage' => '',
                    'iconHover' => '',
                    'iconDefault' => ''
                )
            ),
            'rightSection' => array(
                'type' => 'object',
                'default' => array(
                    'title' => 'Trávníkový program',
                    'content' => 'Komplexní péče o trávník po celý rok, vč. unikátních výrobků pro robotické sekání, vše PRO KRÁLE TRÁVNÍKŮ.',
                    'buttonText' => 'Zobrazit více',
                    'buttonUrl' => '/travnikovy-program',
                    'globeImage' => '',
                    'iconHover' => '',
                    'iconDefault' => ''
                )
            )
        )
    ));

    wp_register_style(
        'globe-sections-editor',
        get_template_directory_uri() . '/blocks/globe-sections-editor.css'
    );
    wp_enqueue_style('globe-sections-editor');
}
add_action('init', 'register_globe_sections_block');

function render_globe_sections_block($attributes) {
    $main_title = $attributes['mainTitle'];
    $left = $attributes['leftSection'];
    $right = $attributes['rightSection'];

    ob_start(); ?>
    <div class="overflow-hidden">
        <section class="container-section pb-5">
            <h1 class="heading-mid my-20"><?php echo wp_kses_post($main_title); ?></h1>

            <div class="grid grid-cols-1 lg:grid-cols-2 space-y-10 lg:space-y-0 mt-4">
                <!-- Left Column -->
                <div class="hero-section group hero-section flex items-center translate-x-1/4 lg:translate-x-0 group">
                    <div class="w-6/12 lg:w-7/12 text-left lg:text-right pr-10 lg:pr-2">
                        <img src="<?php echo esc_url($left['iconHover']); ?>"
                            class="h-14 w-14 hero-section-icon hero-section-icon-hover" alt="Icon">
                        <img src="<?php echo esc_url($left['iconDefault']); ?>"
                            class="h-14 w-14 hero-section-icon hero-section-icon-default" alt="Icon">

                        <h2 class="my-8 text-3xl lg:text-4xl text-silver">
                            <?php echo wp_kses_post($left['title']); ?>
                        </h2>
                        <p class="mb-8">
                            <?php echo wp_kses_post($left['content']); ?>
                        </p>
                        <a href="<?php echo esc_url($left['buttonUrl']); ?>" class="btn-primary hero-section-button">
                            <?php echo esc_html($left['buttonText']); ?>
                        </a>
                    </div>

                    <div class="w-6/12 lg:w-5/12">
                        <img src="<?php echo esc_url($left['globeImage']); ?>" alt="Globe" class="w-full h-auto">
                    </div>

                    <div class="lg:block lg:w-0.5 h-4/6">
                        <div class="h-full w-0 bigass-shadow"></div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="hero-section group flex items-center -translate-x-1/4 lg:translate-x-0">
                    <div class="w-6/12 lg:w-5/12 -translate-x-1">
                        <img src="<?php echo esc_url($right['globeImage']); ?>" alt="Globe"
                            class="w-full scale-y-110 h-auto">
                    </div>

                    <div class="w-6/12 lg:w-7/12 pl-10 lg:pl-2">
                        <img src="<?php echo esc_url($right['iconHover']); ?>"
                            class="h-14 w-14 hero-section-icon hero-section-icon-hover" alt="Icon">
                        <img src="<?php echo esc_url($right['iconDefault']); ?>"
                            class="h-14 w-14 hero-section-icon hero-section-icon-default" alt="Icon">

                        <h2 class="my-8 text-3xl lg:text-4xl text-silver">
                            <?php echo wp_kses_post($right['title']); ?>
                        </h2>
                        <p class="mb-8">
                            <?php echo wp_kses_post($right['content']); ?>
                        </p>
                        <a href="<?php echo esc_url($right['buttonUrl']); ?>" class="btn-primary hero-section-button">
                            <?php echo esc_html($right['buttonText']); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}