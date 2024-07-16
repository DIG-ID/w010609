
<div class="wrapper flex ">
	<div class=" w-3/4">
		<?php get_template_part( 'template-parts/header-main' ); ?>
		<div class="hero">
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smile.png' ) );?>" alt="smile">
			<h1 class="font-monumentExtend font-extralight text-light text-[82px] leading-[76px] uppercase">
				<?php _e( 'A true <br>statement of <span class="font-extrabold">empowerment.</span>', 'w010609' ); ?>
			</h1>
			<h1 class="font-monumentExtend font-extralight text-light text-[82px] leading-[76px] uppercase">
				<?php _e( 'A true <br>statement of <span class="font-extrabold">empowerment.</span>', 'w010609' ); ?>
			</h1>
			<h1 class="font-monumentExtend font-extralight text-light text-[82px] leading-[76px] uppercase">
				<?php _e( 'A true <br>statement of <span class="font-extrabold">empowerment.</span>', 'w010609' ); ?>
			</h1>
			<h1 class="font-monumentExtend font-extralight text-light text-[82px] leading-[76px] uppercase">
				<?php _e( 'A true <br>statement of <span class="font-extrabold">empowerment.</span>', 'w010609' ); ?>
			</h1>
			<h1 class="font-monumentExtend font-extralight text-light text-[82px] leading-[76px] uppercase">
				<?php _e( 'A true <br>statement of <span class="font-extrabold">empowerment.</span>', 'w010609' ); ?>
			</h1>
		</div>
	</div>

	<aside class="bg-light w-1/4 relative">
		<div class="img">
			<img src="" alt="">
		</div>
		<div class="w-full h-full">
			<div class=" left-0 top-0 bottom-0 w-12 bg-pink-300 flex items-center justify-center">
				<div class="text-slide">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</div>
			</div>


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
	</aside>

</div>
