<?php get_header(); ?>

<div class="h-28"></div>


<?php if (have_posts()) : ?>
	<?php
	while (have_posts()) :
		the_post();
	?>
		<h1 class="entry-title text-4xl text-center max-w-2xl mx-auto mt-5"><?php the_title(); ?></h1>
		<hr class="border-t-2 opacity-40 mt-8">
		<div class="container-section mt-0">

			<?php get_template_part('template-parts/content', 'single'); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
			//comments_template();
			endif;
			?>

		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>