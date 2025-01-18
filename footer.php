</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer class="bg-dark-background text-white mt-20 w-full">

	<div class="container mx-auto">
		<div class="flex items-center py-12">
			<div class="flex-grow">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="<?= floria_images('/icons/footer-logo.svg') ?>" alt="<?php bloginfo('name'); ?>"
						class="h-10">
				</a>
			</div>

			<h3 class="text-right text-secondary opacity-60">Rosteme s vámi. jsme agro.</h3>
		</div>

		<section class="logos-slider">
			<div id="floria-logos-slider">
				<div class="placeholder-card p-6 rounded-lg shadow-lg">
					<img src="<?= floria_images('/icons/logos.svg') ?>" alt="Placeholder Image 1"
						class="w-full  h-12  rounded-lg mb-4">
				</div>
				<div class="placeholder-card p-6 rounded-lg shadow-lg">
					<img src="<?= floria_images('/icons/logos.svg') ?>" alt="Placeholder Image 2"
						class="w-full h-12 rounded-lg mb-4">
				</div>
				<div class="placeholder-card p-6 rounded-lg shadow-lg">
					<img src="<?= floria_images('/icons/logos.svg') ?>" alt="Placeholder Image 3"
						class="w-full  h-12  rounded-lg mb-4">
				</div>
				<div class="placeholder-card p-6 rounded-lg shadow-lg">
					<img src="<?= floria_images('/icons/logos.svg') ?>" alt="Placeholder Image 1"
						class="w-full  h-12  rounded-lg mb-4">
				</div>
				<div class="placeholder-card p-6 rounded-lg shadow-lg">
					<img src="<?= floria_images('/icons/logos.svg') ?>" alt="Placeholder Image 2"
						class="w-full h-12 rounded-lg mb-4">
				</div>
				<div class="placeholder-card p-6 rounded-lg shadow-lg">
					<img src="<?= floria_images('/icons/logos.svg') ?>" alt="Placeholder Image 3"
						class="w-full  h-12  rounded-lg mb-4">
				</div>
				<div class="placeholder-card p-6 rounded-lg shadow-lg">
					<img src="<?= floria_images('/icons/logos.svg') ?>" alt="Placeholder Image 3"
						class="w-full  h-12  rounded-lg mb-4">
				</div>

			</div>
			<div id="floria-logos-dots" class="slider-nav">

			</div>
		</section>

		<hr class="border-t-2 opacity-10 my-16">

		<section class="container mx-auto pb-16">
			<div class="flex flex-wrap justify-between">
				<!-- Left Column - Logo & Contact -->
				<div class="w-full md:w-1/3 mb-8 md:mb-0">
					<img src="<?= floria_images('floria-logo.svg') ?>" alt="Logo" class="w-logo mb-10">
					<div class="space-y-4 font-thin uppercase">
						<div>
							<p class="text-primary text-sm pb-2 tracking-[.45em] ">Telefon</p>
							<p class="text-2xl">
								<a href="tel:+420777888999" class="hover:text-primary transition-colors text-3xl">
									+420 777 888 999
								</a>
							</p>
						</div>
						<div>
							<p class="text-primary text-sm pb-2 tracking-[.45em] pt-8">Email</p>
							<p class="text-2xl">
								<a href="mailto:info@floria.cz" class="hover:text-primary transition-colors  text-3xl">
									info@floria.cz
								</a>
							</p>
						</div>
					</div>
				</div>

				<!-- Right Column - Navigation -->
				<div class="w-full md:w-2/3 flex flex-wrap lg:flex-nowrap  justify-center lg:justify-end lg:space-x-8 space-y-8 pt-14 md:pt-0">
					<div class="w-full md:w-auto">
						<ul class="space-y-2 uppercase md:pl-14 leading-8">
							<li><a href="#" class="hover:text-primary transition-colors">Úvod</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">Floria premium</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">Floria radí</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">Produkty</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">Prodejní místa</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">Kontakty</a></li>
						</ul>
					</div>

					<div class="w-1/2 md:w-auto">
						<ul class="space-y-2 uppercase md:pl-14 leading-8">
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
						</ul>
					</div>

					<div class="w-1/2 md:w-auto">
						<ul class="space-y-2 uppercase pl-14 leading-8">
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
							<li><a href="#" class="hover:text-primary transition-colors">KATEGORIE</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="flex justify-end mt-16">
				<img src="<?= floria_images('fb.png') ?>" alt="facebook">
			</div>
		</section>

	</div>


	<div style="background-image: url('<?= floria_images('/icons/stroke-logo.svg') ?>')"
		class="repeat-stroke-logo mt-9">
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>