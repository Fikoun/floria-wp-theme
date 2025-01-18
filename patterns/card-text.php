<?php
/**
 * Title: Bordered texts and images
 * Slug: tailpress/card-texts
 * Categories: tailpress
 * 
 * https://developer.wordpress.org/themes/features/block-patterns/
 * 
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<!-- wp:html -->
<div class="container-section">
    <!-- CARD OF TEXTS -->
    <div class="border border-dark-accent p-10 lg:p-20 pb-16 rounded-2xl lg:rounded-4xl">
        <!-- SECTION -->
        <h2 class="mb-16 text-center">FLORIA PREMIUM</h2>

        <div class="flex flex-wrap xl:flex-nowrap justify-center lg:gap-x-20 mb-14">
            <div class="w-full xl:w-5/12 text-center flex justify-center py-2">
                <img src="<?= floria_images('/violets.png') ?>" alt="Image 1" class="inline-block">
            </div>

            <div class="w-full xl:w-7/12 pr-3 flex flex-wrap align-center py-2">
                <h3 class="heading-padded">Přidaná hodnota</h3>
                <p class="leading-tight">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
                    suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
                    ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
                    suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
                    ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
                </p>
            </div>
        </div>

        <div class="flex flex-wrap xl:flex-nowrap justify-center gap-x-20 mb-14">
            <div class="w-full xl:w-7/12 pr-3 flex flex-wrap items-center py-2">
                <h3 class="heading-padded">Přidaná hodnota</h3>
                <p class="leading-tight ">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
                    suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
                    ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
                    suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
                    ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
                </p>
            </div>

            <div class="w-full xl:w-5/12 text-center flex justify-center py-2">
                <img src="<?= floria_images('/grassy.png') ?>" alt="Image 1" class="inline-block">
            </div>
        </div>


        <!-- SECTION -->
        <h2 class="text-3xl text-center max-w-2xl mx-auto mb-14 py-10">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et
        </h2>

        <div class="flex flex-wrap xl:flex-nowrap justify-center gap-x-20 mb-14">
            <div class="w-full xl:w-5/12 text-center flex justify-center py-2">
                <img src="<?= floria_images('/violets.png') ?>" alt="Image 1" class="inline-block">
            </div>

            <div class="w-full xl:w-7/12 pr-3 flex flex-wrap items-center py-2">
                <h3 class="heading-padded">Přidaná hodnota</h3>
                <p class="leading-snug">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
                    suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
                    ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
                    suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
                    ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
                </p>
            </div>
        </div>

        <div class="text-center mt-24">
            <button class="inline-block btn-primary">
                Zobrazit více
            </button>
        </div>

    </div>
</div>
<!-- /wp:html -->