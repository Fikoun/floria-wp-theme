<?php
function register_content_sections_wysiwyg_block() {
    wp_register_script(
        'content-sections-wysiwyg-block',
        get_template_directory_uri() . '/blocks/content-sections-wysiwyg.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/content-sections-wysiwyg', array(
        'editor_script' => 'content-sections-wysiwyg-block',
        'render_callback' => 'render_content_sections_wysiwyg_block',
        'attributes' => array(
            'mainHeadline' => array(
                'type' => 'string',
                'default' => 'HEADLINE'
            ),
            'section1Content' => array(
                'type' => 'string',
                'default' => ''
            ),
            'middleText' => array(
                'type' => 'string',
                'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et'
            ),
            'section2Headline' => array(
                'type' => 'string',
                'default' => 'HEADLINE'
            ),
            'section2Content' => array(
                'type' => 'string',
                'default' => ''
            ),
            'section3Headline' => array(
                'type' => 'string',
                'default' => 'HEADLINE'
            ),
            'section3Content' => array(
                'type' => 'string',
                'default' => ''
            )
        )
    ));

    wp_register_style(
        'content-sections-wysiwyg-editor',
        get_template_directory_uri() . '/blocks/content-sections-wysiwyg-editor.css'
    );
    wp_enqueue_style('content-sections-wysiwyg-editor');
}
add_action('init', 'register_content_sections_wysiwyg_block');

function render_content_sections_wysiwyg_block($attributes) {
    ob_start(); ?>
    <div class="container-section">
        <div class="border border-dark-accent p-10 lg:p-20 pb-16 rounded-2xl lg:rounded-4xl">
            <!-- Section 1 -->
            <h2 class="mb-16 text-center"><?php echo wp_kses_post($attributes['mainHeadline']); ?></h2>
            <div class="flex flex-wrap xl:flex-nowrap justify-center lg:gap-x-20 mb-14">
                <div class="w-full xl:w-full pr-3 flex flex-wrap align-center py-2">
                    <div class="leading-tight">
                        <?php echo wp_kses_post($attributes['section1Content']); ?>
                    </div>
                </div>
            </div>

            <!-- Middle Text -->
            <h3 class="text-primary text-center max-w-2xl mx-auto mb-14 py-10">
                <?php echo wp_kses_post($attributes['middleText']); ?>
            </h3>

            <!-- Section 2 -->
            <h3 class="mb-16 text-center"><?php echo wp_kses_post($attributes['section2Headline']); ?></h3>
            <div class="flex flex-wrap xl:flex-nowrap justify-center lg:gap-x-20 mb-14">
                <div class="w-full xl:w-full pr-3 flex flex-wrap align-center py-2">
                    <div class="leading-tight">
                        <?php echo wp_kses_post($attributes['section2Content']); ?>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <h3 class="mb-16 text-center"><?php echo wp_kses_post($attributes['section3Headline']); ?></h3>
            <div class="flex flex-wrap xl:flex-nowrap justify-center lg:gap-x-20 mb-14">
                <div class="w-full xl:w-full pr-3 flex flex-wrap align-center py-2">
                    <div class="leading-tight">
                        <?php echo wp_kses_post($attributes['section3Content']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}