<?php

/**
 * Title: Articles
 * Slug: tailpress/articles
 * Categories: tailpress
 */

// Exit if accessed directly
defined('ABSPATH') || exit;
$months_cs = array(
	'January' => 'Leden',
	'February' => 'Únor',
	'March' => 'Březen',
	'April' => 'Duben',
	'May' => 'Květen',
	'June' => 'Červen',
	'July' => 'Červenec',
	'August' => 'Srpen',
	'September' => 'Září',
	'October' => 'Říjen',
	'November' => 'Listopad',
	'December' => 'Prosinec'
);
?>


<!-- ARTICLES -->
<div class="container-section">
	<section>
		<h2 class="heading-mid pt-36">Na co nezapomenout v říjnu</h2>
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 gap-x-14 mt-8">

			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 2,
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
							<div class="text-sm mt-5">
								<a href="/floria-radi" class="px-4 py-1 rounded-full bg-primary text-white">
									<?= $months_cs[date('F', strtotime(get_the_date()))]; ?>
								</a>
							</div>
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