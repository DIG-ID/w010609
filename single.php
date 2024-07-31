<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'relative overflow-hidden flex flex-col md:flex-row xl:flex-row h-dvh' ); ?>>
			<div class="page-single-content-wrapper bg-light w-full min-h-svh md:w-1/3 xl:w-2/3 py-32 px-8 xl:px-16 pb-16 order-2 md:order-1 navigation-bumper">
				<h1 class="font-neueMachina uppercase text-[27px] xl:text-[62px] 2xl:text-[70px] text-red leading-none font-extrabold mt-32 block"><?php the_title(); ?></h1>
				<div class="page-single-content">
					<?php the_content(); ?> 
				</div>
			</div>
			<aside class="w-full md:w-2/3 xl:w-1/3 min-h-svh relative right-0 top-0 bg-light z-[1] order-1 md:order-2 navigation-bumper">
				<div class="pt-4 pb-11 pl-8 pr-6 border-b-2 border-red">
					<p class="font-neueMachina uppercase text-red text-[22px] leading-[26px] mb-16 md:hidden md:invisible"><?php echo esc_html( 'It\'s not just about clothes.' ); ?><br><?php echo esc_html( 'It\'s a vibe, a movement.' ); ?></p>
				</div>
				<?php get_template_part( 'template-parts/components/vertical-navigation' ); ?>
			</aside>
		</article>
		<?php
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
