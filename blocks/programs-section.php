<?php
function register_programs_section_block()
{
    wp_register_script(
        'programs-section-block',
        get_template_directory_uri() . '/blocks/programs-section.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/programs-section', array(
        'editor_script' => 'programs-section-block',
        'render_callback' => 'render_programs_section_block',
        'attributes' => array(
            'showPestitel' => array(
                'type' => 'boolean',
                'default' => true
            ),
            'showTravnikovy' => array(
                'type' => 'boolean',
                'default' => true
            ),
            'pestitelIcon' => array(
                'type' => 'string',
                'default' => ''
            ),
            'travnikovyIcon' => array(
                'type' => 'string',
                'default' => ''
            ),
            'pestitelTitle' => array(
                'type' => 'string',
                'default' => 'Pěstitelský program'
            ),
            'travnikovyTitle' => array(
                'type' => 'string',
                'default' => 'Trávníkový program'
            ),
            'pestitelButtons' => array(
                'type' => 'array',
                'default' => array(
                    array(
                        'text' => 'SUBSTRÁTY',
                        'url' => '#',
                        'id' => '1'
                    ),
                    array(
                        'text' => 'KAPALNÁ HNOJIVA',
                        'url' => '#',
                        'id' => '2'
                    ),
                    array(
                        'text' => 'PEVNÁ HNOJIVA',
                        'url' => '#',
                        'id' => '3'
                    ),
                    array(
                        'text' => 'DEKORAČNÍ MATERIÁL',
                        'url' => '#',
                        'id' => '4'
                    )
                )
            ),
            'travnikovyButtons' => array(
                'type' => 'array',
                'default' => array(
                    array(
                        'text' => 'TRÁVNÍKOVÁ HNOJIVA',
                        'url' => '#',
                        'id' => '1'
                    ),
                    array(
                        'text' => 'PÉČE O TRÁVNÍK',
                        'url' => '#',
                        'id' => '2'
                    ),
                    array(
                        'text' => 'TRAVNÍ SMĚSI',
                        'url' => '#',
                        'id' => '3'
                    )
                )
            )
        )
    ));

    wp_register_style(
        'programs-section-editor',
        get_template_directory_uri() . '/blocks/programs-section-editor.css'
    );
    wp_enqueue_style('programs-section-editor');
}
add_action('init', 'register_programs_section_block');

function render_programs_section_block($attributes)
{
    $show_pestitel = $attributes['showPestitel'];
    $show_travnikovy = $attributes['showTravnikovy'];
    $pestitel_title = $attributes['pestitelTitle'];
    $travnikovy_title = $attributes['travnikovyTitle'];
    $pestitel_buttons = $attributes['pestitelButtons'];
    $travnikovy_buttons = $attributes['travnikovyButtons'];
    $pestitel_icon = $attributes['pestitelIcon'];
    $travnikovy_icon = $attributes['travnikovyIcon'];

    ob_start(); ?>
    <div class="globe-side-effect overflow-hidden ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/globe-left.png" alt="Flower globe"
            class="left-globe">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/globe-right.png" alt="Flower globe"
            class="right-globe">

        <div class="container-section z-50">
            <?php if ($show_pestitel): ?>
                <section>
                    <div class="flex justify-center -mb-12">
                        <img src="<?= floria_images('flower-dim.png') ?>" alt="Text Silver" class="w-36">
                    </div>
                    <h2 class="heading-mid pt-0">Pěstitelský program</h2>
                    <?php if (!empty($pestitel_icon)): ?>
                        <div class="text-center my-4">
                            <img src="<?php echo esc_url($pestitel_icon); ?>" alt="Icon" class="inline-block w-44">
                        </div>
                    <?php endif; ?>
                    <div class="flex flex-wrap justify-center gap-6 mt-12 leading-normal">
                        <?php foreach ($pestitel_buttons as $button): ?>
                            <a href="<?php echo esc_url($button['url']); ?>" class=" mini-card">
                                <h4 class="uppercase text-center"><?php echo esc_html($button['text']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endif; ?>

            <?php if ($show_travnikovy): ?>
                <section class="py-20">
                    <div class="flex justify-center -mb-8">
                        <img src="<?= floria_images('grass-dim.png') ?>" alt="Text Silver" class="w-44">
                    </div>
                    <h2 class="heading-mid pt-0">Trávníkový program</h2>
                    <?php if (!empty($travnikovy_icon)): ?>
                        <div class="text-center my-4">
                            <img src="<?php echo esc_url($travnikovy_icon); ?>" alt="Icon" class="inline-block w-44">
                        </div>
                    <?php endif; ?>
                    <div class="flex flex-wrap justify-center gap-6 mt-12">
                        <?php foreach ($travnikovy_buttons as $button): ?>
                            <a href="<?php echo esc_url($button['url']); ?>" class=" mini-card">
                                <h4 class="uppercase text-center"><?php echo esc_html($button['text']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}