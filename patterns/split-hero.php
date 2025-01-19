<?php

/**
 * Title: Split Hero
 * Slug: tailpress/split-hero
 * Categories: tailpress
 * 
 * https://developer.wordpress.org/themes/features/block-patterns/
 * 
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<!-- wp:html -->
<div class="hero flex flex-wrap h-screen border-b-2 lg:border-none border-gray mb-0">
	<!-- Left -->
	<div class="group hero-section w-full md:w-6/12 bg-cover bg-center pt-10 md:pt-0"
		style="background-image: url('<?= floria_images('/hero-1.png') ?>')">
		<div class="hero-section-overlay"></div>
		<div class="hero-section-content scale-75 lg:scale-100">
			<img src="<?= floria_images('/icons/grass.svg') ?>" class="hero-section-icon hero-section-icon-hover"
				alt="Grass icon">
			<img src="<?= floria_images('/icons/grass-gray.svg') ?>" class="hero-section-icon hero-section-icon-default"
				alt="Grass icon">

			<h1 class="hero-section-title">Pěstitelský</h1>
			<button class="hero-section-button">Zobrazit více</button>
		</div>
	</div>

	<!-- Right -->
	<div class="group hero-section w-full md:w-6/12 bg-cover bg-center "
		style="background-image: url('<?= floria_images('/hero-2.png') ?>')">
		<div class="hero-section-overlay"></div>
		<div class="hero-section-content scale-75 lg:scale-100">
			<img src="<?= floria_images('/icons/flower.svg') ?>" class="hero-section-icon hero-section-icon-hover"
				alt="Flower icon">
			<img src="<?= floria_images('/icons/flower-gray.svg') ?>"
				class="hero-section-icon hero-section-icon-default" alt="Flower icon">
			<h1 class="hero-section-title">Trávníkový</h1>
			<button class="hero-section-button">Zobrazit více</button>
		</div>
	</div>


	<!-- Down pointing arrow -->
	<div class="absolute bottom-0 z-50  left-0 right-0 text-center animate-bounce hidden lg:block">
		<a class="inline-block z-50 p-2 md:p-5 pb-1" href="#floria-content">
			<img class="w-9 md:w-16  animate-bounce" src="<?= floria_images('/icons/down-arrow.svg') ?>"
				alt="Down arrow">
		</a>
	</div>
</div>
<!-- /wp:html -->