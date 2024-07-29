
<div class="wrapper flex overflow-hidden flex-col lg:flex-row">
	<div class="w-full lg:w-2/3 relative">
		<?php get_template_part( 'template-parts/header-main' ); ?>
		<div class="hero relative lg:pt-[354px] transition-all duration-500 ease-in-out">
			<p class="vertical-note absolute left-8 top-36 hidden invisible lg:block lg:visible"><?php the_field( 'hero_vertical_note' ); ?></p>
			<div class="lg:h-dvh py-12 px-8 flex flex-col justify-start">
				<figure class="w-full flex justify-end">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smile.png' ) );?>" alt="smile" class="object-cover max-w-36 lg:max-w-full">
				</figure>
				<h1 class="font-monumentExtend font-extralight text-light text-[27px] leading-6 md:text-[84px] md:leading-[45px] lg:text-[82px] lg:leading-[76px] uppercase">
					<?php the_field( 'hero_title' ); ?>
				</h1>
			</div>
			<div class="lg:h-dvh pb-12 px-8">
				<div class="flex flex-col justify-between h-full">
					<p class="text-description text-light text-right max-w-3xl self-end"><?php the_field( 'hero_description_1' ); ?></p>
					<p class="text-description text-light max-w-3xl"><?php the_field( 'hero_description_2' ); ?></p>
				</div>
			</div>
		</div><!-- .hero -->
		<div class="fixed-assets__numbers numbers">
			<p class="flex justify-between"><span>0</span><span>1</span></p>
			<p class="flex justify-between"><span>0</span><span>6</span></p>
			<p class="flex justify-between"><span>0</span><span>9</span></p>
		</div>
	</div>

	<aside class="bg-light w-full lg:w-1/3 relative hidden invisible lg:block lg:visible">
		<figure class="h-dvh">
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-img-01.jpg' ) ); ?>" alt="hero img" class="object-cover w-full h-full">
			<?php
			$image01 = get_field( 'hero_image_1' );
			if ( $image01 ) {
				echo wp_get_attachment_image( $image01, 'full', false, array( 'class' => 'object-cover w-full h-full' ) );
			}
			?>
		</figure>
		<figure class="h-dvh">
			<?php
			$image02 = get_field( 'hero_image_2' );
			if ( $image02 ) {
				echo wp_get_attachment_image( $image02, 'full', false, array( 'class' => 'object-cover w-full h-full' ) );
			}
			?>
		</figure>
		<div class="w-full h-full absolute z-10 left-0 right-0 top-0">
			<!--<div class="sticky left-0 top-0 h-dvh w-12 bg-pink-300 flex items-center justify-center">
				<div class="text-slide w-full h-full">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</div>
			</div> -->
			<div class="text-slider">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/mybody-mycanvas-text-slider.png' ) ); ?>" alt="hero img" class="text-slider-img object-cover max-w-full">
			</div>
			<div class="fixed top-0 right-0 bottom-0 flex flex-col items-end justify-between">
				<figure class="p-6 invisible hidden lg:block lg:visible">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe.svg' ) ); ?>" alt="hero img" class="object-cover w-full h-full">
				</figure>
				<nav class="main-nav hidden invisible lg:block lg:visible">
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
