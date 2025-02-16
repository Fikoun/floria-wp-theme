</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer class="bg-dark-background text-white mt-20 w-full">

	<div class="container mx-auto">
		<div class="flex items-center py-12">
			<div class="flex-grow">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="<?= floria_images('/icons/footer-logo.svg') ?>" alt="<?php bloginfo('name'); ?>"
						class="h-10">
				</a>
			</div>

			<h3 class="text-right text-secondary opacity-60">Rosteme s vámi. jsme agro.</h3>
		</div>

		<section class="logos-slider">
			<div id="floria-logos-slider">
				<?php echo get_partners_slider_html(); ?>
			</div>
			<div id="floria-logos-dots" class="slider-nav"></div>
		</section>

		<hr class="border-t-2 opacity-10 my-16">

		<section class="container mx-auto pb-16">
			<div class="flex flex-wrap justify-between">
				<!-- Left Column - Logo & Contact -->
				<div class="w-full md:w-1/3 mb-8 md:mb-0">
					<img src="<?= floria_images('floria-logo.svg') ?>" alt="Logo" class="w-logo mb-10">
					<div class="space-y-4 font-thin uppercase">
						<div>
							<p class="text-primary text-sm pb-2 tracking-[.45em] ">Telefon</p>
							<p class="text-2xl">
								<a href="tel:+420777888999" class="hover:text-primary transition-colors text-3xl">
									+420 777 888 999
								</a>
							</p>
						</div>
						<div>
							<p class="text-primary text-sm pb-2 tracking-[.45em] pt-8">Email</p>
							<p class="text-2xl">
								<a href="mailto:info@floria.cz" class="hover:text-primary transition-colors  text-3xl">
									info@floria.cz
								</a>
							</p>
						</div>
					</div>
				</div>

				<!-- Right Column - Navigation -->
				<div class="w-full md:w-2/3 flex flex-wrap lg:flex-nowrap justify-center lg:justify-end lg:space-x-8 space-y-8 lg:space-y-0 pt-14 md:pt-0">
					<div class="w-full md:w-auto">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'footer_menu_1',
							'container' => false,
							'menu_class' => 'space-y-2 uppercase md:pl-14 leading-8',
							'items_wrap' => '<ul class="%2$s">%3$s</ul>',
							'link_before' => '<span class="hover:text-primary transition-colors">',
							'link_after' => '</span>'
						));
						?>
					</div>

					<div class="w-1/2 md:w-auto mt-0">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'footer_menu_2',
							'container' => false,
							'menu_class' => 'space-y-2 uppercase md:pl-14 leading-8',
							'items_wrap' => '<ul class="%2$s">%3$s</ul>',
							'link_before' => '<span class="hover:text-primary transition-colors">',
							'link_after' => '</span>'
						));
						?>
					</div>

					<div class="w-1/2 md:w-auto mt-0">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'footer_menu_3',
							'container' => false,
							'menu_class' => 'space-y-2 uppercase pl-14 leading-8',
							'items_wrap' => '<ul class="%2$s">%3$s</ul>',
							'link_before' => '<span class="hover:text-primary transition-colors">',
							'link_after' => '</span>'
						));
						?>
					</div>
				</div>
			</div>
			<div class="flex justify-end items-center mt-16 gap-x-5" style="color: #999695;">
				<a class="flex gap-x-3 items-center" href="https://www.facebook.com/AGROCSas/" target="_blank">
					<svg width="28" height="25" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill="#999695 " d="M18.197 9.05512C18.197 4.05399 14.1678 0 9.19815 0C4.22627 0.00112486 0.197021 4.05399 0.197021 9.05624C0.197021 13.5748 3.48836 17.3206 7.78982 18V11.6727H5.50636V9.05624H7.79207V7.05962C7.79207 4.79078 9.13628 3.53768 11.1914 3.53768C12.1768 3.53768 13.206 3.71429 13.206 3.71429V5.94151H12.071C10.9541 5.94151 10.6053 6.64005 10.6053 7.35658V9.05512H13.1003L12.7021 11.6715H10.6042V17.9989C14.9057 17.3195 18.197 13.5737 18.197 9.05512Z" fill="white" />
					</svg>
					<span class="btn-link m-0 p-0 text-sm tracking-widest">
						#FLORIA
					</span>
				</a>
				<a class="flex gap-x-3 items-center"  href="#" target="_blank" class="inline-flex items-center ml-4">
					<svg class="w-7" height="100%" style="fill:#999695; fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
						<path d="M256,0c141.29,0 256,114.71 256,256c0,141.29 -114.71,256 -256,256c-141.29,0 -256,-114.71 -256,-256c0,-141.29 114.71,-256 256,-256Zm0,96c-43.453,0 -48.902,0.184 -65.968,0.963c-17.03,0.777 -28.661,3.482 -38.839,7.437c-10.521,4.089 -19.444,9.56 -28.339,18.455c-8.895,8.895 -14.366,17.818 -18.455,28.339c-3.955,10.177 -6.659,21.808 -7.437,38.838c-0.778,17.066 -0.962,22.515 -0.962,65.968c0,43.453 0.184,48.902 0.962,65.968c0.778,17.03 3.482,28.661 7.437,38.838c4.089,10.521 9.56,19.444 18.455,28.34c8.895,8.895 17.818,14.366 28.339,18.455c10.178,3.954 21.809,6.659 38.839,7.436c17.066,0.779 22.515,0.963 65.968,0.963c43.453,0 48.902,-0.184 65.968,-0.963c17.03,-0.777 28.661,-3.482 38.838,-7.436c10.521,-4.089 19.444,-9.56 28.34,-18.455c8.895,-8.896 14.366,-17.819 18.455,-28.34c3.954,-10.177 6.659,-21.808 7.436,-38.838c0.779,-17.066 0.963,-22.515 0.963,-65.968c0,-43.453 -0.184,-48.902 -0.963,-65.968c-0.777,-17.03 -3.482,-28.661 -7.436,-38.838c-4.089,-10.521 -9.56,-19.444 -18.455,-28.339c-8.896,-8.895 -17.819,-14.366 -28.34,-18.455c-10.177,-3.955 -21.808,-6.66 -38.838,-7.437c-17.066,-0.779 -22.515,-0.963 -65.968,-0.963Zm0,28.829c42.722,0 47.782,0.163 64.654,0.933c15.6,0.712 24.071,3.318 29.709,5.509c7.469,2.902 12.799,6.37 18.397,11.969c5.6,5.598 9.067,10.929 11.969,18.397c2.191,5.638 4.798,14.109 5.509,29.709c0.77,16.872 0.933,21.932 0.933,64.654c0,42.722 -0.163,47.782 -0.933,64.654c-0.711,15.6 -3.318,24.071 -5.509,29.709c-2.902,7.469 -6.369,12.799 -11.969,18.397c-5.598,5.6 -10.928,9.067 -18.397,11.969c-5.638,2.191 -14.109,4.798 -29.709,5.509c-16.869,0.77 -21.929,0.933 -64.654,0.933c-42.725,0 -47.784,-0.163 -64.654,-0.933c-15.6,-0.711 -24.071,-3.318 -29.709,-5.509c-7.469,-2.902 -12.799,-6.369 -18.398,-11.969c-5.599,-5.598 -9.066,-10.928 -11.968,-18.397c-2.191,-5.638 -4.798,-14.109 -5.51,-29.709c-0.77,-16.872 -0.932,-21.932 -0.932,-64.654c0,-42.722 0.162,-47.782 0.932,-64.654c0.712,-15.6 3.319,-24.071 5.51,-29.709c2.902,-7.468 6.369,-12.799 11.968,-18.397c5.599,-5.599 10.929,-9.067 18.398,-11.969c5.638,-2.191 14.109,-4.797 29.709,-5.509c16.872,-0.77 21.932,-0.933 64.654,-0.933Zm0,49.009c-45.377,0 -82.162,36.785 -82.162,82.162c0,45.377 36.785,82.162 82.162,82.162c45.377,0 82.162,-36.785 82.162,-82.162c0,-45.377 -36.785,-82.162 -82.162,-82.162Zm0,135.495c-29.455,0 -53.333,-23.878 -53.333,-53.333c0,-29.455 23.878,-53.333 53.333,-53.333c29.455,0 53.333,23.878 53.333,53.333c0,29.455 -23.878,53.333 -53.333,53.333Zm104.609,-138.741c0,10.604 -8.597,19.199 -19.201,19.199c-10.603,0 -19.199,-8.595 -19.199,-19.199c0,-10.604 8.596,-19.2 19.199,-19.2c10.604,0 19.201,8.596 19.201,19.2Z" />
					</svg>
					<span class="btn-link m-0 p-0 text-sm tracking-widest">
						#FLORIA
					</span>
				</a>
			</div>
		</section>

	</div>


	<div style="background-image: url('<?= floria_images('/icons/stroke-logo.svg') ?>')"
		class="repeat-stroke-logo mt-9">
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>