<?php
function register_content_sections_block() {
    wp_register_script(
        'content-sections-block',
        get_template_directory_uri() . '/blocks/content-sections.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/content-sections', array(
        'editor_script' => 'content-sections-block',
        'render_callback' => 'render_content_sections_block',
        'attributes' => array(
            'mainTitle' => array(
                'type' => 'string',
                'default' => 'PŘÍCHÁZÍ REVOLUCE V PĚSTOVÁNÍ'
            ),
            'sections' => array(
                'type' => 'array',
                'default' => array(
                    array(
                        'title' => 'REVOLUCE VE SLOŽENÍ',
                        'content' => 'S FLORIA PREMIUM garantujeme vynikající výsledky v pěstování...',
                        'image' => '',
                        'imagePosition' => 'left'
                    ),
                    array(
                        'title' => 'Revoluce v designu',
                        'content' => 'FLORIA PREMIUM se pyšní prémiovým vzhledem...',
                        'image' => '',
                        'imagePosition' => 'right'
                    ),
                    array(
                        'title' => 'Revoluce v sortimentu',
                        'content' => 'Floria Premium představuje ucelenou řadu jedinečných výrobků...',
                        'image' => '',
                        'imagePosition' => 'left'
                    )
                )
            ),
            'bottomTitle' => array(
                'type' => 'string',
                'default' => 'S našimi produkty získáte profesionální péči, která promění každý kout vašeho zeleného ráje.'
            ),
            'buttonText' => array(
                'type' => 'string',
                'default' => 'Zobrazit více'
            ),
            'buttonUrl' => array(
                'type' => 'string',
                'default' => ''
            ),
            'showButton' => array(
                'type' => 'boolean',
                'default' => true
            )
        )
    ));

    wp_register_style(
        'content-sections-editor',
        get_template_directory_uri() . '/blocks/content-sections-editor.css'
    );
    wp_enqueue_style('content-sections-editor');
}
add_action('init', 'register_content_sections_block');

function render_content_sections_block($attributes) {
    $main_title = $attributes['mainTitle'];
    $sections = $attributes['sections'];
    $bottom_title = $attributes['bottomTitle'];
    $button_text = $attributes['buttonText'];
    $button_url = $attributes['buttonUrl'];
    $show_button = $attributes['showButton'];

    ob_start(); ?>
    <div class="container-section pt-10">
        <div class="border-2 border-silver p-10 lg:p-20 pb-16 rounded-2xl lg:rounded-4xl">
            
            <h2 class="mb-16 text-center"><?php echo wp_kses_post($main_title); ?></h2>

            <?php foreach ($sections as $section) : ?>
                <div class="flex flex-wrap xl:flex-nowrap justify-center lg:gap-x-20 mb-14">
                    <?php if ($section['imagePosition'] === 'left') : ?>
                        <div class="w-full xl:w-5/12 text-center flex justify-center py-2">
                            <img src="<?php echo esc_url($section['image']); ?>" alt="Section image" class="inline-block">
                        </div>
                    <?php endif; ?>

                    <div class="w-full xl:w-7/12 pr-3 flex flex-wrap align-center py-2">
                        <h3 class="heading-padded"><?php echo wp_kses_post($section['title']); ?></h3>
                        <p class="leading-tight"><?php echo wp_kses_post($section['content']); ?></p>
                    </div>

                    <?php if ($section['imagePosition'] === 'right') : ?>
                        <div class="w-full xl:w-5/12 text-center flex justify-center py-2">
                            <img src="<?php echo esc_url($section['image']); ?>" alt="Section image" class="inline-block">
                        </div>
                    <?php endif; ?>
                </div>
                <div style="margin: 37px auto; max-width: 90%; height: 3px; background: linear-gradient(to right, #222223, silver, #222223);"></div>
            <?php endforeach; ?>

            <div class="text-center mt-24">
                <h2 class="text-3xl text-center max-w-2xl mx-auto mb-14 py-10">
                    <?php echo wp_kses_post($bottom_title); ?>
                </h2>

                <?php if ($show_button) : ?>
                    <a href="<?php echo esc_url($button_url); ?>" class="inline-block btn-primary">
                        <?php echo esc_html($button_text); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}