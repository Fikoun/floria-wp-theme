<?php

/**
 * Title: Banner
 * Slug: tailpress/banner
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

	<div class="relative bg-secondary-light rounded-3xl">
		<div class="container mx-auto p-8 px-5 pt-12 md:p-10 md:px-16">
			<div class="grid grid-cols-1 md:grid-cols-2 items-center">
				<div class="order-2 md:order-1 mt-6 md:mt-0 text-center  md:text-left ">
					<h3 class="font-semibold mb-6 text-secondary py-5 md:p-0">Celý sortiment našch produktů<br/>naleznete na našem e–shopu</h3>

					<button class="btn-primary bg-secondary text-white">
						ZOBRAZIT ESHOP
					</button>

				</div>
				<div class="text-center md:text-right order-1 md:order-2">
					<img
						src="<?= floria_images('icons/megazahrady.svg'); ?>"
						alt="Logo - Megazahrady"
						class="inline-block w-64">
				</div>
			</div>
			 <!-- Icons positioned around the banner -->
			 <img src="<?= floria_images('leaf-2.png'); ?>" alt="Leaf 2" class="leaf-1">
			<img src="<?= floria_images('leaf-1.png'); ?>" alt="Leaf 1" class="leaf-2">
			<img src="<?= floria_images('leaf-3.png'); ?>" alt="Leaf 3" class="leaf-3">
		</div>
	</div>

</div>
<!-- /wp:html -->