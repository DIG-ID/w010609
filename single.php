<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'relative overflow-hidden flex flex-col md:flex-row xl:flex-row h-dvh' ); ?>>
			<div class="page-single-content-wrapper bg-light w-full min-h-svh md:w-1/3 xl:w-2/3 pt-[69px] md:pt-[80px] py-32 px-8 xl:px-16 pb-16 order-2 md:order-1">
				<h1 class="font-neueMachina uppercase text-[27px] xl:text-[62px] 2xl:text-[70px] text-red leading-none font-extrabold mt-32 block"><?php the_title(); ?></h1>
				<div class="page-single-content">
					<?php the_content(); ?> 
				</div>
			</div>
			<aside class="w-full md:w-2/3 xl:w-1/3 min-h-svh relative right-0 top-0 bg-light z-[1] order-1 md:order-2 pt-[69px] md:pt-[80px]">
				<div class="pt-4 pb-11 pl-8 pr-6 border-b-2 border-red">
					<p class="font-neueMachina uppercase text-red text-[22px] leading-[26px] mb-16 md:hidden md:invisible"><?php echo esc_html( 'It\'s not just about clothes.' ); ?><br><?php echo esc_html( 'It\'s a vibe, a movement.' ); ?></p>
				</div>
				<div class="w-full h-full absolute  left-0 right-0 top-0 hidden invisible xl:block xl:visible">
					<div class="fixed top-0 right-0 bottom-0 flex flex-col items-end justify-between z-[99]">
						<figure class="p-6 relative z-[99]">
							<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe.svg' ) ); ?>" alt="hero img" class="object-cover w-full h-full">
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
			</aside>
		</article>
		<?php
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
