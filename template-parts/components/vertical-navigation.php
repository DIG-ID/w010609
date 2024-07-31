<div class="w-full absolute right-0 top-0 hidden invisible xl:block xl:visible">
	<div class="fixed top-0 right-0 bottom-0 flex flex-col items-end justify-between z-[99]">
		<figure class="p-6 relative z-[99]">
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
</div>
