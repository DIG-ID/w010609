
<div class="wrapper flex overflow-hidden">
	<div class=" w-3/4">
		<?php get_template_part( 'template-parts/header-main' ); ?>
		<div class="hero h-full relative ">
			<p class="vertical-note"><?php the_field( 'hero_vertical_note' ); ?></p>
			<div class=" py-12 px-8">
				<figure class="w-full flex justify-end">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smile.png' ) );?>" alt="smile">
				</figure>
				<h1 class="font-monumentExtend font-extralight text-light text-[82px] leading-[76px] uppercase mb-80">
					<?php the_field( 'hero_title' ); ?>
				</h1>
				<div class="flex flex-col justify-between h-full">
					<p class="text-description text-light text-right max-w-3xl self-end"><?php the_field( 'hero_description_1' ); ?></p>
					<p class="text-description text-light max-w-3xl"><?php the_field( 'hero_description_2' ); ?></p>
				</div>

			</div>

		</div>
	</div>

	<aside class="bg-emerald-400 w-1/4 relative">
		<figure class="h-dvh">
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-img-01.jpg' ) ); ?>" alt="hero img" class="object-cover w-full h-full">
		</figure>
		<figure class="h-dvh">
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-img-01.jpg' ) ); ?>" alt="hero img" class="object-cover w-full h-full">
		</figure>
		<div class="w-full h-full absolute z-10 left-0 right-0 top-0">
			<!--<div class="sticky left-0 top-0 h-dvh w-12 bg-pink-300 flex items-center justify-center">
				<div class="text-slide w-full h-full">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</div>
			</div> -->
			<div class="sticky left-0 top-0 h-24 w-full bg-pink-300 flex items-center justify-center rotate-90">

					Lorem ipsum dolor sit amet consectetur adipisicing elit.

			</div>
			<div class="fixed right-0 bottom-0 w-56 h-svh flex items-center justify-center">
				<nav class="nav">
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
	</aside>

</div>
