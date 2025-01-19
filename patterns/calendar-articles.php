<?php


// Exit if accessed directly
defined('ABSPATH') || exit;


$args = array(
	'post_type' => 'post',
	'posts_per_page' => isset($atts['posts']) ? $atts['posts'] : 2,
	'orderby' => 'date',
	'order' => 'DESC'
);

$latest_posts = new WP_Query($args);
?>


<!-- ARTICLES -->
<div class="container-section">
	<section>
		<h2 class="heading-mid pt-36">Na co nezapomenout v říjnu</h2>
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 gap-x-14 mt-8">

			<?php
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
							<div class="text-sm mt-5"><?php echo get_the_date('d/m/Y'); ?></div>
						</div>
						<h2 class="article-title text-2xl font-bold my-5">
							<a href="<?php the_permalink(); ?>" class="hover:underline">
								<?php the_title(); ?>
							</a>
						</h2>

						<div class="article-excerpt">
							<?php the_excerpt(); ?>
						</div><a href="<?php the_permalink(); ?>" class="btn-line mt-10 inline-block">Zobrazit více</a>
					</div>
			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>

		</div>

	</section>
</div>