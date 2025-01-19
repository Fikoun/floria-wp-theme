<?php

/**
 * Title: Map with search
 * Slug: tailpress/search-map
 * Categories: tailpress
 */

$locations = [
	[
		'company' => 'Karel Mráz – FLORA CENTRUM',
		'city' => 'České budějovice',
		'address' => 'Masarykovo nám. 215'
	],

	[
		'company' => 'FERENČÍK s.r.o.',
		'city' => 'Borek',
		'address' => 'U Kabelovny 370'
	],
	[
		'company' => 'Ing. Petr Klíma – zahradní',
		'city' => 'České Budějovice',
		'address' => 'Strakonická 1072'
	],
	[
		'company' => 'Baumax ČESKO s.r.o.',
		'city' => 'České Budějovice',
		'address' => 'J. Boreckého 1661/3'
	],
	[
		'company' => 'Uni Hobby',
		'city' => 'České Budějovice',
		'address' => 'Pražská 2540'
	],
	[
		'company' => 'Globus ČR, k. s.',
		'city' => 'České Budějovice',
		'address' => 'České Vrbné 2327'
	],
	[
		'company' => 'Bauhaus',
		'city' => 'České Budějovice 2',
		'address' => 'České Vrbné 2380'
	],
	[
		'company' => 'Josef Janků',
		'city' => 'Dobříš',
		'address' => 'Pražská'
	],
	[
		'company' => 'Květinka „Pro radost"',
		'city' => 'Horšovský Týn',
		'address' => 'J. Littrowa 25'
	],
	[
		'company' => 'M.A.T. – Železářství U Paška',
		'city' => 'Cheb',
		'address' => 'Nám. Krále Jiřího 17'
	],
	[
		'company' => 'OBI market',
		'city' => 'Cheb',
		'address' => 'Vrbenského 2563/4'
	],
	[
		'company' => 'Globus ČR, k. s.',
		'city' => 'Jenišov u Karlových Varů',
		'address' => 'Obchodní 30'
	],
	[
		'company' => 'Karel Mráz – FLORA CENTRUM',
		'city' => 'Karlovy Vary',
		'address' => 'Jáchymovská 147/49'
	],
	[
		'company' => 'Baumax ČESKO s.r.o.',
		'city' => 'Karlovy Vary',
		'address' => 'Dolní Kamenná 1004'
	],
	[
		'company' => 'OBI market',
		'city' => 'Karlovy Vary',
		'address' => 'Chebská 380/81 B'
	],
	[
		'company' => 'OBI market',
		'city' => 'Klatovy',
		'address' => 'Domažlická 15'
	],
	[
		'company' => 'M.A.T. – Železářství',
		'city' => 'Nýrsko',
		'address' => 'Náměstí 126'
	],
	[
		'company' => 'OBI market',
		'city' => 'Písek',
		'address' => 'U Nádraží 2607'
	],
	[
		'company' => 'M.A.T. – Železářství',
		'city' => 'Plzeň',
		'address' => 'Zábělská 41'
	],
	[
		'company' => 'M.A.T. – Železářství',
		'city' => 'Plzeň',
		'address' => 'Lochotínská 24'
	],
	[
		'company' => 'Belanka Plzeň',
		'city' => 'Plzeň',
		'address' => 'Soukenická 5'
	],
	[
		'company' => 'Bauhaus',
		'city' => 'Plzeň',
		'address' => 'Folmavská ul.'
	],
	[
		'company' => 'Hornbach',
		'city' => 'Plzeň',
		'address' => 'U Prazdroje 2750/24'
	],
	[
		'company' => 'WW FLORA',
		'city' => 'Plzeň – Doubravka',
		'address' => 'Chrástecká 23'
	],
	[
		'company' => 'Globus ČR, k. s.',
		'city' => 'Plzeň – Chotíkov',
		'address' => 'Chotíkov 385'
	],
	[
		'company' => 'OBI market',
		'city' => 'Plzeň – Jižní předměstí',
		'address' => 'Sukova 886/21'
	],
	[
		'company' => 'David Ryšánek',
		'city' => 'Prachatice – Prachatice II',
		'address' => 'Mlýnská'
	],
	[
		'company' => 'Drogerie Lucie Šustová',
		'city' => 'Příbram',
		'address' => 'Osvobození 317'
	],
	[
		'company' => 'Drogerie (NC Žďár)',
		'city' => 'Rokycany',
		'address' => 'Masarykovo nám. 215'
	],
	[
		'company' => 'M.A.T. Group, s.r.o.',
		'city' => 'Slaný',
		'address' => 'Soukenická 96'
	],
	[
		'company' => 'M.A.T. -Železářství „OD VÝBĚR"',
		'city' => 'Sokolov',
		'address' => 'Růžové náměstí 1651'
	],
	[
		'company' => 'Eva Zídková',
		'city' => 'Staňkov',
		'address' => 'Plovární 162'
	],
	[
		'company' => 'Jiří Maryška',
		'city' => 'Starý Plzenec',
		'address' => ''
	],
	[
		'company' => 'Baumax ČESKO s.r.o.',
		'city' => 'Tábor',
		'address' => 'Soběslavská ul. 3046'
	],
	[
		'company' => 'VITO CZ spol. s r.o.',
		'city' => 'Tlučná',
		'address' => 'Línská 589'
	],
	[
		'company' => 'Miroslav Les',
		'city' => 'Třemošná',
		'address' => 'Keramická 1'
	],

	// Add more locations as needed
];
?>



<div class="container-section mt-0">
	<h2 class="mb-12">Prodejní místa</h2>


	<div class="grid grid-cols-1 md:grid-cols-12 gap-4">
		<div class="md:col-span-4">
			<div class="border rounded-3xl bg-transparent border-gray p-4 py-2 relative focus-within:border-white transition-all">
				<a href="#">
					<img src="<?php echo floria_images('icons/search.svg'); ?>" alt="Search" class="absolute left-6 top-1/2 transform -translate-y-1/2 w-5 h-5 opacity-75">
				</a>

				<input type="text"
					id="location-search"
					placeholder="Vyhledat ..."
					class="w-full border-none bg-transparent text-white p-3 pl-14 focus:outline-none">
			</div>

			<div id="locations-container" class="space-y-4 bg-transparent mt-6 overflow-y-scroll h-[500px] pr-3">
				<?php
				foreach ($locations as $location): ?>
					<div class="group p-6 py-4 border rounded-3xl border-gray hover:border-white transition-all">
						<p class="text-sm font-light"><?php echo esc_html($location['company']); ?></p>
						<p class="text-lg font-semibold my-1"><?php echo esc_html($location['city']); ?></p>
						<p class="text-sm font-light flex items-center">
							<svg class="w-3 mr-2 group-hover:text-primary" width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.6 0.474121C2.504 0.474121 0 2.97812 0 6.07412C0 10.2741 5.6 16.4741 5.6 16.4741C5.6 16.4741 11.2 10.2741 11.2 6.07412C11.2 2.97812 8.696 0.474121 5.6 0.474121ZM5.6 8.07412C5.06957 8.07412 4.56086 7.86341 4.18579 7.48833C3.81071 7.11326 3.6 6.60455 3.6 6.07412C3.6 5.54369 3.81071 5.03498 4.18579 4.65991C4.56086 4.28483 5.06957 4.07412 5.6 4.07412C6.13043 4.07412 6.63914 4.28483 7.01421 4.65991C7.38929 5.03498 7.6 5.54369 7.6 6.07412C7.6 6.60455 7.38929 7.11326 7.01421 7.48833C6.63914 7.86341 6.13043 8.07412 5.6 8.07412Z"
									fill="currentColor" />
							</svg>
							<?php echo esc_html($location['address']); ?>
						</p>
					</div>
				<?php endforeach; ?>

				<div id="no-results" class="hidden text-center">
					<h4 class="my-2 text-primary">Zde ještě neprodáváme!</h4>
					<p>Vyplňte <a class="text-xs font-semibold underline" href="/kontakty">kontaktní formulář</a> a my se o to postaráme</p>
				</div>
			</div>
		</div>
		<div class="md:col-span-8">
			<iframe class="w-full h-full rounded-3xl border-0" src="https://en.frame.mapy.cz/s/bogemefoto" frameborder="0">
			</iframe>

		</div>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const searchInput = document.getElementById('location-search');
		const locationsContainer = document.getElementById('locations-container');
		const noResults = document.getElementById('no-results');

		searchInput.addEventListener('input', function(e) {
			const searchTerm = e.target.value.toLowerCase();
			const locations = locationsContainer.getElementsByClassName('group');
			let hasMatches = false;
			
			Array.from(locations).forEach(location => {
				const company = location.querySelector('p:nth-child(1)').textContent.toLowerCase();
				const city = location.querySelector('p:nth-child(2)').textContent.toLowerCase();
				const address = location.querySelector('p:nth-child(3)').textContent.toLowerCase();

				const matches = company.includes(searchTerm) ||
					city.includes(searchTerm) ||
					address.includes(searchTerm);

				location.style.display = matches ? 'block' : 'none';
				if (matches) hasMatches = true;
			});

			noResults.style.display = hasMatches ? 'none' : 'block';
		});
	});
</script>