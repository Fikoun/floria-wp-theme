<?php
/**
 * Title: Grassy globe
 * Slug: tailpress/globe-split
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


	<!-- GLOBE SPLIT -->
	<section id="globe">
		<h2 class="heading-mid mt-28">Pěstování s dotykem luxusu</h2>

		<div class="grid grid-cols-1 lg:grid-cols-2 mt-4">

			<!-- First Column -->
			<div class="hero-section group hero-section flex items-center translate-x-1/4 lg:translate-x-0 group">
				<div class="w-6/12 lg:w-7/12 text-right pr-10 lg:pr-2">
					<img src="<?= floria_images('/icons/grass.svg') ?>"
						class="h-14 w-14 hero-section-icon hero-section-icon-hover" alt="Flower icon">
					<img src="<?= floria_images('/icons/grass-gray.svg') ?>"
						class="h-14 w-14 hero-section-icon hero-section-icon-default" alt="Flower icon">

					<h2 class="my-8 text-3xl lg:text-4xl">
						Pěstitelský program
					</h2>
					<p class="mb-8">
						Elegantní, nadčasová, inovativní,
						pro skvělé výsledky, s minimem stráveného času.
					</p>
					<button class="btn-primary hero-section-button">
						Zobrazit více
					</button>
				</div>

				<div class="w-6/12 lg:w-5/12">
					<img src="<?= floria_images('/globe-left.png') ?>" alt="Flower globe" class="w-full h-auto">
				</div>

				<!-- Vertical Line -->
				<div class="lg:block lg:w-0.5 h-4/6">
					<div class="h-full w-0 bigass-shadow"></div>
				</div>

			</div>


			<!-- Second Column -->
			<div class="hero-section group flex items-center -translate-x-1/4 lg:translate-x-0">
				<div class="w-6/12 lg:w-5/12 -translate-x-1">
					<img src="<?= floria_images('/globe-right.png') ?>" alt="Grass globe"
						class="w-full scale-y-110 h-auto">
				</div>

				<div class="w-6/12 lg:w-7/12 pl-10 lg:pl-2">
					<img src="<?= floria_images('/icons/flower.svg') ?>"
						class="h-14 w-14 hero-section-icon hero-section-icon-hover" alt="Flower icon">
					<img src="<?= floria_images('/icons/flower-gray.svg') ?>"
						class="h-14 w-14 hero-section-icon hero-section-icon-default" alt="Flower icon">

					<h2 class="my-8 text-3xl lg:text-4xl">
						Trávníkový program
					</h2>
					<p class="mb-8">
						Elegantní, nadčasová, inovativní,
						pro skvělé výsledky, s minimem stráveného času.
					</p>
					<button class="btn-primary hero-section-button">
						Zobrazit více
					</button>
				</div>

			</div>
		</div>
	</section>
    
</div>
<!-- /wp:html -->
