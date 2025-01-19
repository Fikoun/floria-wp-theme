<?php

/**
 * Title: Products List
 * Slug: tailpress/products-list
 * Categories: tailpress
 */
?>

<!-- ARTICLES -->
<div class="container-section py-16 px-8">
	<h2 class="heading-mid mb-8">Naše jedničky</h2>

	<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-7">
		<?php for ($i = 0; $i < 4; $i++) : ?>
			<div class="group flex flex-col items-center justify-center p-10 px-12 rounded-3xl border border-white overflow-hidden transition-all duration-300 hover:shadow-lg">
				<a href="/produkt" class="flex flex-col items-center justify-center">
					<div class="relative">
						<div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center -z-10">
							<div class="w-5 h-5 bg-gray-200 rounded-full product-gradient group-hover:scale-125 transition-transform duration-300"></div>
						</div>
						<img src="<?= floria_images('product.png') ?>" alt="Product" class="mb-4 z-10 group-hover:scale-105 transition-transform duration-300">
					</div>
					<h4 class="text-center text-sm text-secondary-light font-medium mb-2 transition-colors duration-300">FLORIA PREMIUM</h4>
					<h3 class="text-center text-3xl font-semibold mb-2 group-hover:text-primary-light transition-colors duration-300">krystalické hnojivo</h3>
					<span href="#" class="btn-outline mt-2 opacity-60 hover:opacity-100 hover:text-white transition-all duration-300">koupit na eshopu</span>
				</a>
			</div>
		<?php endfor; ?>
	</div>
</div>