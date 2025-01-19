<?php get_header(); ?>


<!-- NAV SPLIT IMAGE -->
<div class="hero flex flex-wrap h-screen border-b-2 lg:border-none border-gray mb-10">
	<!-- Left -->
	<div class="group hero-section w-full md:w-6/12 bg-cover bg-center pt-10 md:pt-0"
		style="background-image: url('<?= floria_images('/hero-1.png') ?>')">
		<div class="hero-section-overlay"></div>
		<div class="hero-section-content">
			<img src="<?= floria_images('/icons/flower.svg') ?>" class="hero-section-icon hero-section-icon-hover"
				alt="Flower icon">
			<img src="<?= floria_images('/icons/flower-gray.svg') ?>"
				class="hero-section-icon hero-section-icon-default" alt="Flower icon">
			<h1 class="hero-section-title">Pěstitelský</h1>
			<button class="hero-section-button">Zobrazit více</button>
		</div>
	</div>

	<!-- Right -->
	<div class="group hero-section w-full md:w-6/12 bg-cover bg-center "
		style="background-image: url('<?= floria_images('/hero-2.png') ?>')">
		<div class="hero-section-overlay"></div>
		<div class="hero-section-content">
			<img src="<?= floria_images('/icons/grass.svg') ?>" class="hero-section-icon hero-section-icon-hover"
				alt="Grass icon">
			<img src="<?= floria_images('/icons/grass-gray.svg') ?>" class="hero-section-icon hero-section-icon-default"
				alt="Grass icon">
			<h1 class="hero-section-title">Trávníkový</h1>
			<button class="hero-section-button">Zobrazit více</button>
		</div>
	</div>


	<!-- Down pointing arrow -->
	<div class="absolute bottom-0 z-50  left-0 right-0 text-center animate-bounce">
		<a class="inline-block z-50 p-2 md:p-5 pb-1" href="#floria-content">
			<img class="w-9 md:w-16  animate-bounce" src="<?= floria_images('/icons/down-arrow.svg') ?>"
				alt="Down arrow">
		</a>
	</div>
</div>

<div class="container mx-auto my-8 mt-5" id="floria-content">

	<!-- ROW OF ICONS -->
	<div class="grid-4">
		<div class="icon-card">
			<img src="<?= floria_images('/icons/flower.svg') ?>" alt="Icon 1">
			<h3 class="icon-title">V tomhle jsme nejlepší</h3>
		</div>
		<div class="icon-card">
			<img src="<?= floria_images('/icons/flower.svg') ?>" alt="Icon 2">
			<h3 class="icon-title">V tomhle jsme nejlepší</h3>
		</div>
		<div class="icon-card">
			<img src="<?= floria_images('/icons/flower.svg') ?>" alt="Icon 3">
			<h3 class="icon-title">V tomhle jsme nejlepší</h3>
		</div>
		<div class="icon-card">
			<img src="<?= floria_images('/icons/flower.svg') ?>" alt="Icon 4">
			<h3 class="icon-title">V tomhle jsme nejlepší</h3>
		</div>
	</div>


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


	<!-- CATEGORIES -->
	<section>
		<h2 class="heading-mid pt-36">Pěstitelský program</h2>

		<div class="flex flex-wrap justify-center gap-5 mt-12">
			<a href="#" class="bg-primary mini-card">
				<h3 class="uppercase  text-center">SUBSTRÁTY</h3>
			</a>
			<a href="#" class="bg-primary mini-card">
				<h3 class="uppercase text-center">KAPALNÁ HNOJIVA</h3>
			</a>
			<a href="#" class="bg-primary mini-card">
				<h3 class="uppercase text-2xl text-center">PEVNÁ HNOJIVA</h3>
			</a>
			<a href="#" class="bg-primary mini-card">
				<h3 class="uppercase text-2xl text-center">DEKORAČNÍ MATERIÁL</h3>
			</a>
		</div>
	</section>

	<section>
		<h2 class="heading-mid pt-36">TRÁVNIKOVÝ program</h2>

		<div class="flex gap-5 flex-wrap justify-center mt-12">
			<a href="#" class="bg-secondary mini-card">
				<h3 class="uppercase text-2xl text-center">TRÁVNÍKOVÁ
					HNOJIVA</h3>
			</a>
			<a href="#" class="bg-secondary mini-card">
				<h3 class="uppercase text-2xl text-center">
					PÉČE O TRÁVNÍK
				</h3>
			</a>
			<a href="#" class="bg-secondary mini-card">
				<h3 class="uppercase text-2xl text-center">TRAVNÍ SMĚSI</h3>
			</a>
		</div>
	</section>


	<!-- ARTICLES LIST -->
	<section>
		<h2 class="heading-mid pt-36">Na co nezapomenout v říjnu</h2>

		<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 gap-x-14 mt-8">
			<!-- Article 1 -->
			<div class="article-card">
				<div class="article-image mb-4">
					<a href="#">
						<img src="<?= floria_images('/violets.png') ?>" alt="Article 1" class="w-full max-h-80">
					</a>
					<div class="text-sm mt-5">12/9/2023</div>
				</div>
				<h2 class="article-title text-2xl font-bold my-5">
					<a href="#" class="hover:underline">
						Aby mráz okrasným dřevinám neuškodil
					</a>
				</h2>
				<div class="article-excerpt">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
						suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
						ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.</p>
				</div>
				<a href="#" class="btn-line mt-10 inline-block">
					Zobrazit více
				</a>
			</div>

			<!-- Article 2 -->
			<div class="article-card">
				<div class="article-image mb-4">
					<a href="#">
						<img src="<?= floria_images('/violets.png') ?>" alt="Article 2" class="w-full h-auto max-h-80">
					</a>
					<div class="text-sm mt-5">12/9/2023</div>
				</div>
				<h2 class="article-title text-2xl font-bold my-5">
					<a href="#" class="hover:underline">
						Aby mráz okrasným dřevinám neuškodil
					</a>
				</h2>
				<div class="article-excerpt">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
						suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
						ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.</p>
				</div>
				<a href="#" class="btn-line mt-10 inline-block">
					Zobrazit více
				</a>
			</div>
		</div>


		<div class="text-center mt-24">
			<button class="inline-block btn-primary">
				Všechny novinky
			</button>
		</div>
	</section>

	<div class="container-section">

		<div class="bg-secondary-light rounded-lg">
			<div class="container mx-auto px-4 py-8">
				<div class="grid grid-cols-3 items-center">
					<div class="col-span-1">
						<h2 class="text-2xl font-bold mb-4">Your Heading Here</h2>
						<p class="mb-4">Your compelling text goes here. Make it engaging and informative.</p>
						<button class="btn-primary bg-secondary text-white px-6 py-2 rounded hover:bg-primary-dark transition-colors">
							Call to Action
						</button>
					</div>
					<div class="col-span-2 flex justify-end">
						<img src="<?php echo get_template_directory_uri(); ?>/icons/megazahrady.svg" alt="Logo" class="max-w-xs">
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<?php if (have_posts()): ?>
		<?php
		while (have_posts()):
			the_post();
		?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>



<?php
get_footer();
