<?php
function register_article_grid_block() {
    wp_register_script(
        'article-grid-block',
        get_template_directory_uri() . '/blocks/article-grid.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components')
    );

    register_block_type('custom/article-grid', array(
        'editor_script' => 'article-grid-block',
        'render_callback' => 'render_article_grid_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => 'Na co nezapomenout v %mesic%'
            ),
            'postsPerPage' => array(
                'type' => 'number',
                'default' => 2
            ),
            'columns' => array(
                'type' => 'number',
                'default' => 2
            )
        )
    ));

    wp_register_style(
        'article-grid-editor',
        get_template_directory_uri() . '/blocks/article-grid-editor.css'
    );
    wp_enqueue_style('article-grid-editor');
}
add_action('init', 'register_article_grid_block');

function render_article_grid_block($attributes) {
    // Měsíce v prvním pádu
    $months_cs = array(
        'January' => 'Leden',
        'February' => 'Únor',
        'March' => 'Březen',
        'April' => 'Duben',
        'May' => 'Květen',
        'June' => 'Červen',
        'July' => 'Červenec',
        'August' => 'Srpen',
        'September' => 'Září',
        'October' => 'Říjen',
        'November' => 'Listopad',
        'December' => 'Prosinec'
    );

    // Měsíce v druhém pádu
    $months_cs_second_case = array(
        'January' => 'Lednu',
        'February' => 'Únoru',
        'March' => 'Březnu',
        'April' => 'Dubnu',
        'May' => 'Květnu',
        'June' => 'Červnu',
        'July' => 'Červenci',
        'August' => 'Srpnu',
        'September' => 'Září',
        'October' => 'Říjnu',
        'November' => 'Listopadu',
        'December' => 'Prosinci'
    );

    $current_month = $months_cs[date('F')]; // Pro zobrazení měsíce v záhlaví článku
    $current_month_second_case = $months_cs_second_case[date('F')]; // Pro použití v nadpisu
    $title = str_replace('%mesic%', $current_month_second_case, $attributes['title']);
    $posts_per_page = $attributes['postsPerPage'];
    $columns = $attributes['columns'];
    ob_start(); ?>

    <div class="container-section">
        <section>
            <h2 class="heading-mid pt-20"><?php echo esc_html($title); ?></h2>
            <div class="grid grid-cols-1 lg:grid-cols-<?php echo esc_attr($columns); ?> gap-10 gap-x-14 mt-8">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $posts_per_page,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'monthnum' => date('n')
                );

                $latest_posts = new WP_Query($args);

                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post();
                    ?>
                        <div class="article-card">
                            <div class="article-image mb-4">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array('class' => 'w-full max-h-80')); ?>
                                    <?php endif; ?>
                                </a>

                                <div class="text-sm mt-5">
                                    <a href="/floria-radi" class="px-4 py-1 rounded-full bg-primary text-white">
                                        <?php echo esc_html($months_cs[date('F', strtotime(get_the_date()))]); ?>
                                    </a>
                                </div>
                            </div>
                            <h2 class="article-title text-2xl font-bold my-5">
                                <a href="<?php the_permalink(); ?>" class="hover:underline">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="article-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-line mt-10 inline-block">Zobrazit více</a>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}