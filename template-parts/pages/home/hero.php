<section class="section-hero flex overflow-hidden flex-col xl:flex-row">

	<div class="section-hero--right-wrapper w-full xl:w-2/3 relative pt-[160px] md:pt-[271px] xl:pt-[354px] transition-all duration-700 ease-in-out">
		<!--<p class="section-hero--vertical-note absolute left-8 top-36 hidden invisible lg:block lg:visible"><?php the_field( 'hero_vertical_note' ); ?></p>.-->
		<div class="section-hero--fixed-numbers">
			<p class="flex justify-between"><span>0</span><span>1</span></p>
			<p class="flex justify-between"><span>0</span><span>6</span></p>
			<p class="flex justify-between"><span>0</span><span>9</span></p>
		</div>
		<div class="section-hero--content-right">
			<div class="section-hero--content-right__section-01 xl:h-dvh flex flex-col justify-start relative py-6 px-9 xl:px-16">

				<figure class="w-full flex justify-end mb-20">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smile.png' ) ); ?>" alt="smile" class="object-cover max-w-36 xl:max-w-full">
				</figure>
				<h1 class="section-hero--title">
					<?php the_field( 'hero_title' ); ?>
				</h1>
			</div><!-- .hero-content-right--section-01 -->
			<div class="section-hero-image-mobile relative xl:hidden xl:invisible overflow-hidden">
				<figure class="pt-4 pr-3 md:pt-4 md:pr-4 absolute right-0 top-0">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe.svg' ) ); ?>" alt="hero img" class="object-cover w-full h-full max-w-[47px] md:max-w-[90px]">
				</figure>
				<div class="text-slider-mobile">
					<?php get_template_part( 'template-parts/components/text-slider-content' ); ?>
				</div>
				<figure class="h-full">
					<?php
					$image01 = get_field( 'hero_image_1' );
					if ( $image01 ) {
						echo wp_get_attachment_image( $image01, 'full', false, array( 'class' => 'object-cover w-full h-full' ) );
					}
					?>
				</figure>
			</div>
			<div class="section-hero--content-right__section-02 xl:h-dvh py-12 px-9 xl:px-16">
				<div class="flex flex-col justify-between h-full">
					<p class="text-description text-light text-right max-w-[560px] xl:max-w-3xl self-end mb-[400px]"><?php the_field( 'hero_description_1' ); ?></p>
					<p class="text-description text-light max-w-[560px] xlmax-w-[728px]"><?php the_field( 'hero_description_2' ); ?></p>
				</div>
			</div><!-- .hero-content-right--section-02 -->
		</div><!-- .hero-content-right -->

	</div><!-- .hero-content-right-wrapper -->

	<aside class="section-hero--left-wrapper w-full xl:w-1/3 relative hidden invisible xl:block xl:visible bg-light">
		<div class="flex flex-col h-full">
			<figure class="min-h-dvh h-full">
				<?php
				$image01 = get_field( 'hero_image_1' );
				if ( $image01 ) {
					echo wp_get_attachment_image( $image01, 'full', false, array( 'class' => 'object-cover w-full h-full  min-h-dvh' ) );
				}
				?>
			</figure>
			<figure class="min-h-dvh h-full">
				<?php
				$image02 = get_field( 'hero_image_2' );
				if ( $image02 ) {
					echo wp_get_attachment_image( $image02, 'full', false, array( 'class' => 'object-cover w-full h-full  min-h-dvh' ) );
				}
				?>
			</figure>
		</div>

		<div class="w-full h-full absolute z-10 left-0 right-0 top-0">

			<div class="text-slider">
				<?php get_template_part( 'template-parts/components/text-slider-content' ); ?>
			</div>
			<div class="fixed top-0 right-0 bottom-0 flex flex-col items-end justify-between">
				<figure class="p-6 invisible hidden xl:block xl:visible">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe.svg' ) ); ?>" alt="hero img" class="object-cover w-full h-full">
				</figure>
				<nav class="main-nav hidden invisible xl:block xl:visible">
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
	</aside><!-- .hero-content-left-wrapper -->

</section>
