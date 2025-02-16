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
	function enqueue_swiper_assets()
	{
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
			<div class="mx-auto px-2 pt-4 pl-3 container-fluid xl:p-0 xl:container">
				<nav class="flex justify-between items-center">
					<div class="order-1 flex justify-between items-center py-5 flex-grow">
						<div>
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<img class="w-logo" src="<?= floria_images('floria-premium-logo.svg') ?>"
									alt="<?php bloginfo('name'); ?>" class="h-8">
							</a>
						</div>
					</div>


					<div class="order-2 lg:order-3 pl-7 flex items-center justify-end lg:-translate-y-1">
						<div class="pr-1 lg:mr-1">
							<a href="https://www.facebook.com" target="_blank" rel="noopener">
								<img src="<?= floria_images('icons/fb.svg') ?>" alt="facebook" class="w-7 lg:w-5">
							</a>
						</div>

						<div class="pr-3 lg:mr-0">
							<a class="flex items-center" href="#" target="_blank">
								<svg class="w-7 lg:w-5" height="100%"
									style="fill:#fff; fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
									version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve"
									xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/"
									xmlns:xlink="http://www.w3.org/1999/xlink">
									<path
										d="M256,0c141.29,0 256,114.71 256,256c0,141.29 -114.71,256 -256,256c-141.29,0 -256,-114.71 -256,-256c0,-141.29 114.71,-256 256,-256Zm0,96c-43.453,0 -48.902,0.184 -65.968,0.963c-17.03,0.777 -28.661,3.482 -38.839,7.437c-10.521,4.089 -19.444,9.56 -28.339,18.455c-8.895,8.895 -14.366,17.818 -18.455,28.339c-3.955,10.177 -6.659,21.808 -7.437,38.838c-0.778,17.066 -0.962,22.515 -0.962,65.968c0,43.453 0.184,48.902 0.962,65.968c0.778,17.03 3.482,28.661 7.437,38.838c4.089,10.521 9.56,19.444 18.455,28.34c8.895,8.895 17.818,14.366 28.339,18.455c10.178,3.954 21.809,6.659 38.839,7.436c17.066,0.779 22.515,0.963 65.968,0.963c43.453,0 48.902,-0.184 65.968,-0.963c17.03,-0.777 28.661,-3.482 38.838,-7.436c10.521,-4.089 19.444,-9.56 28.34,-18.455c8.895,-8.896 14.366,-17.819 18.455,-28.34c3.954,-10.177 6.659,-21.808 7.436,-38.838c0.779,-17.066 0.963,-22.515 0.963,-65.968c0,-43.453 -0.184,-48.902 -0.963,-65.968c-0.777,-17.03 -3.482,-28.661 -7.436,-38.838c-4.089,-10.521 -9.56,-19.444 -18.455,-28.339c-8.896,-8.895 -17.819,-14.366 -28.34,-18.455c-10.177,-3.955 -21.808,-6.66 -38.838,-7.437c-17.066,-0.779 -22.515,-0.963 -65.968,-0.963Zm0,28.829c42.722,0 47.782,0.163 64.654,0.933c15.6,0.712 24.071,3.318 29.709,5.509c7.469,2.902 12.799,6.37 18.397,11.969c5.6,5.598 9.067,10.929 11.969,18.397c2.191,5.638 4.798,14.109 5.509,29.709c0.77,16.872 0.933,21.932 0.933,64.654c0,42.722 -0.163,47.782 -0.933,64.654c-0.711,15.6 -3.318,24.071 -5.509,29.709c-2.902,7.469 -6.369,12.799 -11.969,18.397c-5.598,5.6 -10.928,9.067 -18.397,11.969c-5.638,2.191 -14.109,4.798 -29.709,5.509c-16.869,0.77 -21.929,0.933 -64.654,0.933c-42.725,0 -47.784,-0.163 -64.654,-0.933c-15.6,-0.711 -24.071,-3.318 -29.709,-5.509c-7.469,-2.902 -12.799,-6.369 -18.398,-11.969c-5.599,-5.598 -9.066,-10.928 -11.968,-18.397c-2.191,-5.638 -4.798,-14.109 -5.51,-29.709c-0.77,-16.872 -0.932,-21.932 -0.932,-64.654c0,-42.722 0.162,-47.782 0.932,-64.654c0.712,-15.6 3.319,-24.071 5.51,-29.709c2.902,-7.468 6.369,-12.799 11.968,-18.397c5.599,-5.599 10.929,-9.067 18.398,-11.969c5.638,-2.191 14.109,-4.797 29.709,-5.509c16.872,-0.77 21.932,-0.933 64.654,-0.933Zm0,49.009c-45.377,0 -82.162,36.785 -82.162,82.162c0,45.377 36.785,82.162 82.162,82.162c45.377,0 82.162,-36.785 82.162,-82.162c0,-45.377 -36.785,-82.162 -82.162,-82.162Zm0,135.495c-29.455,0 -53.333,-23.878 -53.333,-53.333c0,-29.455 23.878,-53.333 53.333,-53.333c29.455,0 53.333,23.878 53.333,53.333c0,29.455 -23.878,53.333 -53.333,53.333Zm104.609,-138.741c0,10.604 -8.597,19.199 -19.201,19.199c-10.603,0 -19.199,-8.595 -19.199,-19.199c0,-10.604 8.596,-19.2 19.199,-19.2c10.604,0 19.201,8.596 19.201,19.2Z" />
								</svg>
							</a>
						</div>

						<div class="relative inline-block text-left translate-y-0.5">
							<select
								class="block w-14 appearance-none font-semibold hover:text-primary-light bg-transparent btn-link hover:border-0  px-0 py-2 pr-8">
								<option class="bg-dark">CZ</option>
								<option class="bg-dark">SK</option>
								<option class="bg-dark">EN</option>
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
								'li_class' => 'btn-link relative group', // Added 'relative group'
								'fallback_cb' => false,
								'walker' => new Floria_Menu_Walker(), // Custom walker for submenu
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