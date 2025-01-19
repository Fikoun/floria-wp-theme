<?php

/**
 * Title: Contact & Map
 * Slug: tailpress/contact-map
 * Categories: tailpress
 * 
 * https://developer.wordpress.org/themes/features/block-patterns/
 * 
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<!-- wp:html -->
<!-- CATEGORIES -->
<div class="container-section">

	<section class="py-10">
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

			<!-- Contact Information -->
			<div class="lg:col-span-1">
				<h2 class="py-9 pt-5">Kontakty</h2>
				<div class="font-light uppercase pb-8">
					<div>
						<p class="text-primary text-sm pb-2 tracking-[.45em]">Telefon</p>
						<p class="text-2xl">
							<a href="tel:+420777888999" class="hover:text-primary transition-colors text-3xl">
								+420 777 888 999
							</a>
						</p>
					</div>
					<div>
						<p class="text-primary text-sm pb-2 tracking-[.45em] pt-8">Email</p>
						<p class="text-2xl">
							<a href="mailto:info@floria.cz" class="hover:text-primary transition-colors text-3xl">
								info@floria.cz
							</a>
						</p>
					</div>
				</div>
				<div>
					<p class="py-7">
						AGRO CS a. s. <br>
						č. p. 265<br>
						552 03 Říkov<br>
						Česká republika
					</p>
					<p>
						IČO: 64829413<br>
						DIČ: CZ64829413
					</p>
				</div>
			</div>

			<!-- Google Maps -->
			<div class="lg:col-span-2 md:pl-7">
				<iframe class="border-0 rounded-2xl w-full" src="https://en.frame.mapy.cz/s/bogemefoto" width="700" height="466" frameborder="0">
				</iframe>
			</div>
		</div>

	</section>

</div>
<!-- /wp:html -->