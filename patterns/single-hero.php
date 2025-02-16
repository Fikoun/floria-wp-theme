<?php

/**
 * Title: Single hero image
 * Slug: tailpress/single-hero
 * Categories: tailpress
 * 
 * https://developer.wordpress.org/themes/features/block-patterns/
 * 
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<!-- wp:html -->
<div class="hero flex h-screen border-b-2 mb-0">
    <div class="hero-section w-full bg-cover bg-center"
        style="background-image: url('<?= floria_images('/hero-1.png') ?>')">
        <div class="hero-section-overlay"></div>
        <div class="hero-section-content">
            <img src="<?= floria_images('/icons/grass.svg') ?>" class="hero-section-icon" alt="Hero icon">
            <h1 class="hero-section-title">Trávníkový</h1>
        </div>
    </div>

    <!-- Down pointing arrow -->
    <div class="absolute bottom-0 left-0 right-0 text-center animate-bounce hidden lg:block">
        <a class="inline-block p-2 md:p-5 pb-1" href="#floria-content">
            <img class="w-9 md:w-16 animate-bounce" src="<?= floria_images('/icons/down-arrow.svg') ?>" alt="Down arrow">
        </a>
    </div>
</div>
<!-- /wp:html -->