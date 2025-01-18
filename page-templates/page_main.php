<?php

/**
 * Template Name: Top padding
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */

get_header(); ?>


<div class="h-28"></div>


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
				<div class="text-smmt-5">12/9/2023</div>
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
				<div class="text-sm text-gray-500 mt-5">12/9/2023</div>
			</div>
			<h2 class="article-title text-2xl font-bold my-5">
				<a href="#" class="hover:underline">
					Aby mráz okrasným dřevinám neuškodil
				</a>
			</h2>
			<div class="article-excerpt text-gray-700">
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
