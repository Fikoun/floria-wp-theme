<?php
function register_contact_section_block() {
    wp_register_script(
        'contact-section-block',
        get_template_directory_uri() . '/blocks/contact-section.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/contact-section', array(
        'editor_script' => 'contact-section-block',
        'render_callback' => 'render_contact_section_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => 'Kontakty'
            ),
            'phone' => array(
                'type' => 'string',
                'default' => '+420 777 888 999'
            ),
            'email' => array(
                'type' => 'string',
                'default' => 'info@floria.cz'
            ),
            'address' => array(
                'type' => 'string',
                'default' => "AGRO CS a. s.\nč. p. 265\n552 03 Říkov\nČeská republika"
            ),
            'companyInfo' => array(
                'type' => 'string',
                'default' => "IČO: 64829413\nDIČ: CZ64829413"
            ),
            'mapUrl' => array(
                'type' => 'string',
                'default' => 'https://en.frame.mapy.cz/s/bogemefoto'
            )
        )
    ));

    wp_register_style(
        'contact-section-editor',
        get_template_directory_uri() . '/blocks/contact-section-editor.css'
    );
    wp_enqueue_style('contact-section-editor');
}
add_action('init', 'register_contact_section_block');

function render_contact_section_block($attributes) {
    $title = $attributes['title'];
    $phone = $attributes['phone'];
    $email = $attributes['email'];
    $address = $attributes['address'];
    $company_info = $attributes['companyInfo'];
    $map_url = $attributes['mapUrl'];

    ob_start(); ?>
    <div class="container-section">
        <section class="py-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contact Information -->
                <div class="lg:col-span-1">
                    <h2 class="py-9 pt-5"><?php echo wp_kses_post($title); ?></h2>
                    <div class="font-light uppercase pb-8">
                        <div>
                            <p class="text-primary text-sm pb-2 tracking-[.45em]">Telefon</p>
                            <p class="text-2xl">
                                <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>" 
                                   class="hover:text-primary transition-colors text-3xl">
                                    <?php echo esc_html($phone); ?>
                                </a>
                            </p>
                        </div>
                        <div>
                            <p class="text-primary text-sm pb-2 tracking-[.45em] pt-8">Email</p>
                            <p class="text-2xl">
                                <a href="mailto:<?php echo esc_attr($email); ?>" 
                                   class="hover:text-primary transition-colors text-3xl">
                                    <?php echo esc_html($email); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div>
                        <p class="py-7">
                            <?php echo nl2br(esc_html($address)); ?>
                        </p>
                        <p>
                            <?php echo nl2br(esc_html($company_info)); ?>
                        </p>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="lg:col-span-2 md:pl-7">
                    <iframe class="border-0 rounded-2xl w-full" 
                            src="<?php echo esc_url($map_url); ?>" 
                            width="700" 
                            height="466" 
                            frameborder="0">
                    </iframe>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}