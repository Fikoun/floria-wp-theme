<?php

/**
 * Title: month carousel picker
 * Slug: tailpress/month-carousel
 * Categories: tailpress
 * 
 * https://developer.wordpress.org/themes/features/block-patterns/
 * 
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<div class="container-section relative">
    <div class="custom-carousel pt-12 pb-20 overflow-hidden">
        <div class="swiper-container ">
            <?php
            // V shortcode funkci custom_month_carousel_shortcode()
            $months_slugs = [
                'leden',
                'unor',
                'brezen',
                'duben',
                'kveten',
                'cerven',
                'cervenec',
                'srpen',
                'zari',
                'rijen',
                'listopad',
                'prosinec'
            ];

            $months_display = [
                'Leden',
                'Únor',
                'Březen',
                'Duben',
                'Květen',
                'Červen',
                'Červenec',
                'Srpen',
                'Září',
                'Říjen',
                'Listopad',
                'Prosinec'
            ];

            ?>
            <div class="swiper-wrapper z-0">
                <?php foreach ($months_slugs as $index => $month_slug):
                    // Získání kategorie podle slugu
                    $category = get_category_by_slug($month_slug);
                    $category_name = $category ? $category->name : $months_display[$index];
                    $category_description = $category ? $category->description : '';
                    ?>
                    <div class="swiper-slide" data-month="<?php echo $index; ?>">
                        <span class="category-name"><?php echo esc_html($category_name); ?></span>
                        <?php if (!empty($category_description)): ?>
                            <br /><span class="category-description"><?php echo esc_html($category_description); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div class="absolute left-0 right-0 top-0 bottom-0 flex items-center justify-center gap-x-96">
        <div class="swiper-button-prev rounded-ful z-50 "></div>
        <div class="swiper-button-next  z-50"></div>
    </div>
</div>

<div class="container-section relative">
    <div id="article-list" class="grid grid-cols-1 lg:grid-cols-2 gap-10 gap-x-14 mt-8">
        <h3 class="text-center col-span-2">Vyberte měsíc z carouselu pro zobrazení článků.</h3>
    </div>
</div>

<script>
    function pickMonth(el) {
        const articleList = document.getElementById('article-list');
        let month = el + 1;
        
        const data = new FormData();
        data.append('action', 'load_articles');
        data.append('month', month);

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: data,
        })
            .then(response => response.text())
            .then(html => {
                articleList.innerHTML = html;
            })
            .catch(error => console.error('Chyba při načítání článků:', error));
    }

    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.swiper-slide');

        slides.forEach(slide => {
            slide.addEventListener('click',(e) => pickMonth(e.getAttribute('data-month')));
        });
    });
</script>