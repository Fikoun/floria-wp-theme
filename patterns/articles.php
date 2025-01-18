<?php

/**
 * Title: Articles
 * Slug: tailpress/articles
 * Categories: tailpress
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

function floria_get_latest_posts()
{
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 6,
		'orderby' => 'date',
		'order' => 'DESC'
	);

	return new WP_Query($args);
}
?>


<!-- ARTICLES -->
<div class="container-section">
	<section>
		<h2 class="heading-mid pt-36">Na co nezapomenout v říjnu</h2>

		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'DESC'
		);

		$latest_posts = new WP_Query($args);

		if ($latest_posts->have_posts()) :
			while ($latest_posts->have_posts()) : $latest_posts->the_post();
		?>
				<div class="article-card">
					<div class="article-image mb-4">
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large', array('class' => 'w-full max-h-80')); ?>
							<?php endif; ?>
						</a>
						<div class="text-smmt-5"><?php echo get_the_date('d/m/Y'); ?></div>
					</div>
					<h2 class="article-title text-2xl font-bold my-5">
						<a href="<?php the_permalink(); ?>" class="hover:underline">
							<?php the_title(); ?>
						</a>
					</h2>
					<div class="article-excerpt">
						<?php the_excerpt(); ?>
					</div>
					<a href="<?php the_permalink(); ?>" class="btn-line mt-10 inline-block">
						Zobrazit více
					</a>
				</div>
		<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</section>
</div>