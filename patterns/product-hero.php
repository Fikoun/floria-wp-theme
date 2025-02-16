<?php

/**
 * Title: Product hero
 * Slug: tailpress/product-hero
 * Categories: tailpress
 * 
 * https://developer.wordpress.org/themes/features/block-patterns/
 * 
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<!-- wp:html -->
<section class="relative pb-16 px-8">
	<div class="flex flex-wrap items-stretch -mx-4">

		<div class="w-full lg:w-1/2 px-4 lg:mb-0">
			<div class="relative flex flex-wrap items-center justify-center py-20 mt-24 lg:mt-5 ">
				<div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">
					<div class="w-40 h-40 bg-gray-200 rounded-full product-gradient"></div>
				</div>
				
				<div class="absolute top-0 left-0 right-0 text-center">
					<img src="<?= floria_images('/icons/flower.svg') ?>" class="inline lg:hidden w-8"
						alt="Flower icon">
					<h2 class="lg:hidden pt-2">NÁZEV PRODUKTU <br> dvouřádkový</h2>
				</div>

				<img src="<?= floria_images('product.png') ?>" alt="Product"
					class="relative z-10 inline-block max-w-64 lg:max-w-lg pt-14 lg:pt-0">

			</div>

			<div class="flex space-x-4 justify-center">
				<div class="images-list-item">
					<img src="<?= floria_images('violets.png') ?>" alt="Product view 1" class="w-full h-full object-cover">
				</div>
				<div class="images-list-item">
					<img src="<?= floria_images('violets.png') ?>" alt="Product view 2" class="w-full h-full object-cover">
				</div>
				<div class="images-list-item">
					<img src="<?= floria_images('violets.png') ?>" alt="Product view 3" class="w-full h-full object-cover">
				</div>
				<div class="images-list-item">
					<img src="<?= floria_images('violets.png') ?>" alt="Product view 4" class="w-full h-full object-cover">
				</div>
				<div class="images-list-item">
					<img src="<?= floria_images('violets.png') ?>" alt="Product view 3" class="w-full h-full object-cover">
				</div>
				<div class="images-list-item">
					<img src="<?= floria_images('violets.png') ?>" alt="Product view 4" class="w-full h-full object-cover">
				</div>
			</div>
		</div>
		<div class="w-full lg:w-1/2 px-4 lg:pt-32">
			<img src="<?= floria_images('/icons/flower.svg') ?>" class="hidden lg:inline-block pb-8 w-8"
				alt="Flower icon">

			<h2 class="hidden lg:block text-gray-900 mb-6">NÁZEV PRODUKTU <br> dvouřádkový</h2>
			<p class="text-lg font-light mb-16">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.</p>
			<a href="#" class="btn-primary">koupit na eshopu</a>
		</div>
	</div>
</section>
<!-- /wp:html -->