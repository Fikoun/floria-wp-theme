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