<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
	<?php wp_head(); 
	function enqueue_swiper_assets() {
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], null, true);
    wp_add_inline_script('swiper-script', "
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    ");
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');
?>
</head>

<body <?php body_class('bg-dark text-light antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header class="absolute top-0 left-0 right-0 z-50">
			<div class="mx-auto container">
				<nav class="flex justify-between items-center">
					<div class="order-1 flex justify-between items-center py-5 flex-grow">
						<div>
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<img class="w-logo" src="<?= floria_images('floria-premium-logo.svg') ?>"
									alt="<?php bloginfo('name'); ?>" class="h-8">
							</a>
						</div>
					</div>


					<div class="order-2 lg:order-3 px-7 flex items-center justify-end lg:-translate-y-1">
						<div class="pr-3 lg:mr-0">
							<a href="https://www.facebook.com" target="_blank" rel="noopener">
								<img src="<?= floria_images('icons/fb.svg') ?>" alt="facebook" class="w-7 lg:w-5">
							</a>
						</div>
						<div class="relative inline-block text-left translate-y-0.5">
							<select
								class="block w-14 appearance-none bg-transparent btn-link hover:border-0  px-0 py-2 pr-8">
								<option class="bg-dark">EN</option>
								<option class="bg-dark">CZ</option>
								<option class="bg-dark">SK</option>
							</select>
							<div
								class="pointer-events-none absolute inset-y-0 right-4 bottom-1 flex items-center  text-white">
								<svg width="20px" height="20px" viewBox="0 0 20 20" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M17.9188 8.17969H11.6888H6.07877C5.11877 8.17969 4.63877 9.33969 5.31877 10.0197L10.4988 15.1997C11.3288 16.0297 12.6788 16.0297 13.5088 15.1997L15.4788 13.2297L18.6888 10.0197C19.3588 9.33969 18.8788 8.17969 17.9188 8.17969Z"
										fill="#FFFFFF" />
								</svg>
							</div>
						</div>

					</div>

					<div class="order-3 lg:order-2">
						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path
												d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
												id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
						<?php
						wp_nav_menu(
							array(
								'container_id' => 'primary-menu',
								'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block nav-responsive',
								'menu_class' => 'lg:flex lg:-mx-4',
								'theme_location' => 'primary',
								'li_class' => 'btn-link',
								'fallback_cb' => false,
							)
						);
						?>
					</div>

				</nav>
			</div>
		</header>



		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>