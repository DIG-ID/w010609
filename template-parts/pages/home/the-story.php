<section class="section-the-story bg-light block overflow-hidden w-full sm:w-1/2 xl:w-full">
	<a href="<?php the_field( 'the_story_link' ); ?>" >
		<div class="section-the-story--content flex flex-col xl:flex-row">
			<div class="w-full xl:w-1/3 xl:flex xl:flex-col xl:justify-between order-2 xl:order-1">
				<figure class="h-full overflow-hidden">
					<?php
					$image = get_field( 'the_story_image' );
					if ( $image ) :
						echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'object-cover w-full h-full xl:translate-x-full transition-all duration-700 ease-in-out xl:opacity-0' ) );
					endif;
					?>
				</figure>
				<div class="bg-dark text-light px-14 pt-16 pb-12 hidden invisible xl:block xl:visible">
					<p class="font-monumentExtend font-extralight text-[27px] xl:text-4xl uppercase">A true <br>statement of <span class="font-extrabold">emporwerment.</span></p>
				</div>
			</div>
			<div class="w-full xl:w-2/3 bg-red text-dark px-4 py-6 xl:px-14 xl:py-16 order-1 xl:order-2">
				<div class="flex flex-col h-80 xl:h-full justify-between">
					<div>
						<h2 class="btn--vertical text-dark xl:mb-32"><?php the_field( 'the_story_title' ); ?></h2>
					</div>
					<p class="text-description text-dark max-w-52 xl:max-w-xl self-end"><?php the_field( 'the_story_description' ); ?></p>
				</div>

			</div>
		</div>
	</a>
</section>
