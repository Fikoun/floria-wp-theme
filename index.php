<?php get_header(); ?>


<div class="hero flex flex-wrap h-[800px]">
	<!-- Left -->
	<div class="pt-10 w-full md:pt-0 md:w-6/12 bg-cover bg-center relative group transition-all"
		style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-1.png');">
		<div class="absolute inset-0 bg-black bg-opacity-60 group-hover:bg-opacity-15 transition-all ">
		</div>
		<div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-8">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flower.svg"
				class="h-16 w-16 mb-4 text-primary" alt="Flower icon">

			<h2 class="mb-4 text-center">Pěstitelský </h2>
			<button class="btn-primary">
				Zobrazit více
			</button>
		</div>
	</div>

	<!-- Right -->
	<div class="w-full md:w-6/12 bg-cover bg-center relative group transition-all duration-300 md:mt-0"
		style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-2.png');">
		<div class="absolute inset-0 bg-black bg-opacity-60 group-hover:bg-opacity-40 transition-opacity duration-300">
		</div>
		<div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-8">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/grass.svg"
				class="h-16 w-16 mb-1 text-gray-400" alt="Grass icon">
			<h2 class="mb-4 text-center text-primary">Trávníkový</h2>
		</div>
	</div>
</div>



<div class="container mx-auto my-8">


	<div class="border border-dark-accent p-20 rounded-lg">
		<h1 class="uppercase text-4xl font-extrabold mb-10 text-center">FLORIA PREMIUM</h1>

		<div class="flex mb-4">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/violets.png" alt="Image 1"
				class="customSMALL mr-4">

			<div class="customBIG p-6 flex flex-wrap items-center">
				<h3 class="uppercase text-4xl font-extrabold mb-4">Přidaná hodnota</h3>
				<p class="leading-relaxed text-lg">
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
		<div class="flex mb-4">
			<div class="customBIG p-6 flex flex-wrap items-center">
				<h3 class="uppercase text-4xl font-extrabold mb-4">Přidaná hodnota</h3>
				<p class="leading-relaxed text-lg">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
					suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
					ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
					<br><br>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis sapien nunc, commodo et, interdum
					suscipit, sollicitudin et, dolor. Integer imperdiet lectus quis justo. Vestibulum erat nulla,
					ullamcorper nec, rutrum non, nonummy ac, erat. Etiam quis quam.
				</p>
			</div>

			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/grassy.png" alt="Image 2"
				class="customSMALL">
		</div>
		<h2 class="text-2xl text-center max-w-lg font-bold mb-4 mx-auto py-10">Lorem ipsum dolor sit amet, consectetuer
			adipiscing elit. Duis sapien nunc, commodo et</h2>
		<div class="flex mb-4">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/violets.png" alt="Image 1"
				class="customSMALL mr-4">
			<div class="customBIG p-6 flex flex-wrap items-center">
				<h3 class="uppercase text-4xl font-extrabold mb-4">Přidaná hodnota</h3>
				<p class="leading-relaxed text-lg ">
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

	</div>

	<h2 class="text-3xl text-center max-w-lg font-bold mt-24 mx-auto py-5 uppercase">Pěstitelský program</h2>

	<div class="flex justify-between mt-12">
		<div class="bg-primary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
			<h3 class="uppercase text-2xl font-extrabold text-center">SUBSTRÁTY</h3>
		</div>
		<div class="bg-primary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
			<h3 class="uppercase text-2xl font-extrabold text-center">KAPALNÁ HNOJIVA</h3>
		</div>
		<div class="bg-primary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
			<h3 class="uppercase text-2xl font-extrabold text-center">PEVNÁ HNOJIVA</h3>
		</div>
		<div class="bg-primary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
			<h3 class="uppercase text-2xl font-extrabold text-center">DEKORAČNÍ MATERIÁL</h3>
		</div>
	</div>

	<h2 class="text-3xl text-center max-w-lg font-bold mt-24  mx-auto py-5 uppercase">TRÁVNIKOVÝ program</h2>

	<div class="flex justify-between mt-12">
		<div class="bg-secondary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
			<h3 class="uppercase text-2xl font-extrabold text-center">SUBSTRÁTY</h3>
		</div>
		<div class="bg-secondary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
			<h3 class="uppercase text-2xl font-extrabold text-center">KAPALNÁ HNOJIVA</h3>
		</div>
		<div class="bg-secondary px-7 py-9 rounded-2xl flex-1 mx-4 flex items-center justify-center">
			<h3 class="uppercase text-2xl font-extrabold text-center">PEVNÁ HNOJIVA</h3>
		</div>
	</div>

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
