<?php get_header(); ?>

<!-- NAV SPLIT IMAGE -->
<div class="hero flex flex-wrap h-screen">
	<!-- Left -->
	<div class="pt-10 w-full md:pt-0 md:w-6/12 bg-cover bg-center relative group transition-all"
		style="background-image: url('<?= floria_images('/hero-1.png') ?>">
		<div class="absolute inset-0 bg-black bg-opacity-60 group-hover:bg-opacity-15 transition-all ">
		</div>
		<div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-8">
			<img src="<?= floria_images('/icons/flower.svg') ?>" class="h-16 w-16 mb-4 text-primary" alt="Flower icon">

			<h2 class="mt-2 mb-7 text-center">Pěstitelský </h2>
			<button class="btn-primary">
				Zobrazit více
			</button>
		</div>
	</div>

	<!-- Right -->
	<div class="w-full md:w-6/12 bg-cover bg-center relative group transition-all duration-300 md:mt-0"
		style="background-image: url('<?= floria_images('/hero-2.png') ?>">
		<div class="absolute inset-0 bg-black bg-opacity-60 group-hover:bg-opacity-40 transition-opacity duration-300">
		</div>
		<div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-8">
			<img src="<?= floria_images('/icons/grass.svg') ?>" class="h-16 w-16 mb-1 text-gray-400" alt="Grass icon">
			<h2 class="mb-4 text-center text-primary">Trávníkový</h2>
		</div>
	</div>

	<!-- Down pointing arrow -->
	<div class="absolute bottom-2 z-50  left-0 right-0 text-center animate-bounce">
		<a class="inline-block z-50 p-5" href="#floria-content">
			<img class="w-20  animate-bounce" src="<?= floria_images('/icons/down-arrow.svg') ?>" alt="Down arrow">
		</a>
	</div>
</div>

<div class="container mx-auto my-8" id="floria-content">

	<!-- ROW OF ICONS -->
	<div class="grid-4">
		<div class="icon-card">
			<img src="<?= floria_images('/icons/flower-gray.svg') ?>" alt="Icon 1">
			<h3 class="icon-title">V tomhle jsme nejlepší</h3>
		</div>
		<div class="icon-card">
			<img src="<?= floria_images('/icons/flower-gray.svg') ?>" alt="Icon 2">
			<h3 class="icon-title">V tomhle jsme nejlepší</h3>
		</div>
		<div class="icon-card">
			<img src="<?= floria_images('/icons/flower-gray.svg') ?>" alt="Icon 3">
			<h3 class="icon-title">V tomhle jsme nejlepší</h3>
		</div>
		<div class="icon-card">
			<img src="<?= floria_images('/icons/flower-gray.svg') ?>" alt="Icon 4">
			<h3 class="icon-title">V tomhle jsme nejlepší</h3>
		</div>
	</div>


	<!-- CARD OF TEXTS -->
	<div class="border border-dark-accent p-20 rounded-4xl ">
		<!-- SECTION -->
		<h1 class="uppercase text-4xl mb-16 text-center">FLORIA PREMIUM</h1>

		<div class="flex flex-wrap xl:flex-nowrap justify-center gap-x-20 mb-4">
			<div class="w-full xl:w-5/12 text-center">
				<img src="<?= floria_images('/violets.png') ?>" alt="Image 1" class="inline-block w-full max-h-80">
			</div>

			<div class="w-10/12 xl:w-7/12 py-6 pr-3 flex flex-wrap items-center">
				<h3 class="heading-padded">Přidaná hodnota</h3>
				<p class="leading-tight text-lg">
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

		<div class="flex flex-wrap xl:flex-nowrap justify-center gap-x-20 mb-4">
			<div class="w-10/12 xl:w-7/12 py-6 pr-3 flex flex-wrap items-center">
				<h3 class="heading-padded">Přidaná hodnota</h3>
				<p class="leading-tight text-lg">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
					suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
					ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
					<br><br>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
					suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
					ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
				</p>
			</div>

			<div class="w-full xl:w-5/12 text-center">
				<img src="<?= floria_images('/grassy.png') ?>" alt="Image 1" class="inline-block w-full max-h-80">
			</div>
		</div>


		<!-- SECTION -->
		<h2 class="text-3xl text-center max-w-2xl mb-4 mx-auto py-16">
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et
		</h2>

		<div class="flex flex-wrap xl:flex-nowrap justify-center gap-x-20 mb-4">
			<div class="w-full xl:w-5/12 text-center">
				<img src="<?= floria_images('/violets.png') ?>" alt="Image 1" class="inline-block w-full max-h-80">
			</div>

			<div class="w-10/12 xl:w-7/12 py-6 pr-3 flex flex-wrap items-center">
				<h3 class="heading-padded">Přidaná hodnota</h3>
				<p class="leading-tight text-lg">
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

		<div class="text-center">
			<button class="inline-block btn-primary">
				Zobrazit více
			</button>
		</div>

	</div>


	<!-- CATEGORIES -->
	<section>
		<h2 class="text-3xl text-center max-w-lg mt-24 mx-auto py-5 uppercase">Pěstitelský program</h2>

		<div class="flex justify-between mt-12">
			<div class="bg-primary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
				<h3 class="uppercase text-2xl text-center">SUBSTRÁTY</h3>
			</div>
			<div class="bg-primary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
				<h3 class="uppercase text-2xl text-center">KAPALNÁ HNOJIVA</h3>
			</div>
			<div class="bg-primary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
				<h3 class="uppercase text-2xl text-center">PEVNÁ HNOJIVA</h3>
			</div>
			<div class="bg-primary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
				<h3 class="uppercase text-2xl text-center">DEKORAČNÍ MATERIÁL</h3>
			</div>
		</div>
	</section>

	<section>
		<h2 class="text-3xl text-center max-w-lg mt-24  mx-auto py-5 uppercase">TRÁVNIKOVÝ program</h2>

		<div class="flex justify-between mt-12">
			<div class="bg-secondary px-7 py-9 rounded-3xl flex-1 mx-4 flex items-center justify-center">
				<h3 class="uppercase text-2xl text-center">SUBSTRÁTY</h3>
			</div>
			<div class="bg-secondary px-7 py-9 rounded-3xl flex-1 mx-4 flex items-center justify-center">
				<h3 class="uppercase text-2xl text-center">KAPALNÁ HNOJIVA</h3>
			</div>
			<div class="bg-secondary px-7 py-9 rounded-3xl flex-1 mx-4 flex items-center justify-center">
				<h3 class="uppercase text-2xl text-center">PEVNÁ HNOJIVA</h3>
			</div>
		</div>
	</section>


	<!-- GLOBE SPLIT -->
	<section id="globe">
		<h2 class="text-3xl text-center max-w-lg mt-24  mx-auto py-5 uppercase">pěstování s dotykem luxusu</h2>

		<div class="grid grid-cols-1 lg:grid-cols-2  mt-16">
			<!-- First Column -->
			<div class="flex flex-col lg:flex-row items-center">
				<div class="lg:w-1/2 p-4">
					<h3 class="text-2xl mb-4">First Column Text</h3>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sapien nunc, commodo
						et, interdum suscipit, sollicitudin et, dolor.</p>
					<button class="btn-primary">Read More</button>
				</div>
				<div class="lg:w-1/2 p-4">
					<img src="<?= floria_images('/globe-left.png') ?>" alt="Flower globe" class="w-full h-auto">
				</div>
			</div>

			<!-- Second Column -->
			<div class="flex flex-col lg:flex-row items-center">
				<div class="lg:w-1/2 p-4">
					<img src="<?= floria_images('/grass-globe.png') ?>" alt="Grass globe" class="w-full h-auto">
				</div>
				<div class="lg:w-1/2 p-4">
					<h3 class="text-2xl mb-4">Second Column Text</h3>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sapien nunc, commodo
						et, interdum suscipit, sollicitudin et, dolor.</p>
					<button class="btn-primary">Read More</button>
				</div>

			</div>
		</div>
	</section>


	<!-- <?php if (have_posts()): ?>
		<?php
		while (have_posts()):
			the_post();
			?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; ?>

	<?php endif; ?> -->

</div>

<?php
get_footer();
