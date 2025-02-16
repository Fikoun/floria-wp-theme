<?php
function register_icon_grid_block() {
    wp_register_script(
        'icon-grid-block',
        get_template_directory_uri() . '/blocks/icon-grid.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/icon-grid', array(
        'editor_script' => 'icon-grid-block',
        'render_callback' => 'render_icon_grid_block',
        'attributes' => array(
            'icons' => array(
                'type' => 'array',
                'default' => array(
                    array(
                        'image' => '',
                        'title' => 'Luxusní provedení'
                    ),
                    array(
                        'image' => '',
                        'title' => 'Jedinečné složení'
                    ),
                    array(
                        'image' => '',
                        'title' => 'Ucelený sortiment'
                    ),
                    array(
                        'image' => '',
                        'title' => 'Pěstování bez námahy'
                    )
                )
            )
        )
    ));

    wp_register_style(
        'icon-grid-editor',
        get_template_directory_uri() . '/blocks/icon-grid-editor.css'
    );
    wp_enqueue_style('icon-grid-editor');
}
add_action('init', 'register_icon_grid_block');

function render_icon_grid_block($attributes) {
    $icons = $attributes['icons'];

    ob_start(); ?>
    <div class="container-section" id="floria-content">
        <div class="grid-4">
            <?php foreach ($icons as $icon) : ?>
                <div class="icon-card">
                    <img src="<?php echo esc_url($icon['image']); ?>" alt="Icon">
                    <h3 class="icon-title"><?php echo wp_kses_post($icon['title']); ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}