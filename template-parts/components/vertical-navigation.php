<div class="vertical-navigation-wrapper fixed top-0 right-0 bottom-0 xl:flex xl:flex-col xl:items-end xl:justify-between z-50 hidden invisible xl:visible">
	<figure class="p-6">
		<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe.svg' ) ); ?>" alt="globe icon" class="object-cover w-full h-full">
	</figure>
	<nav class="main-nav">
		<?php
			wp_nav_menu(
				array(
					'menu'            => 'main-menu',
					'menu_id'         => 'main-menu',
					'container'       => false,
					'container_class' => '',
					'theme_location'  => 'main-menu',
					'fallback_cb'     => '__return_false',
				)
			);
		?>
	</nav>
</div>
