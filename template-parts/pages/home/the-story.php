<section class="section-the-story bg-light block overflow-hidden w-1/2 lg:w-full">
	<a href="<?php the_field( 'the_story_link' ); ?>" >
		<div class="content-wrapper flex flex-col lg:flex-row">
			<div class="w-full lg:w-1/3 flex flex-col justify-between order-2 lg:order-1">
				<figure class="h-full overflow-hidden">
					<?php
					$image = get_field( 'the_story_image' );
					if ( $image ) :
						echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'object-cover w-full h-full lg:translate-x-full transition-all duration-700 ease-in-out lg:opacity-0' ) );
					endif;
					?>
				</figure>
				<div class="bg-dark text-light px-14 pt-16 hidden invisible lg:block lg:visible">
					<p class="font-monumentExtend font-extralight text-[27px] lg:text-4xl uppercase">A true <br>statement of <span class="font-extrabold">emporwerment.</span></p>
				</div>
			</div>
			<div class="w-full lg:w-2/3 bg-red text-light lg:px-14 lg:py-16 order-1 lg:order-2 px-4 py-6 h-80 lg:h-auto flex flex-col justify-between lg:block">
				<h2 class="btn--vertical text-dark "><?php the_field( 'the_story_title' ); ?></h2>
				<p class="text-description text-dark max-w-52 lg:max-w-xl lg:translate-x-full self-end"><?php the_field( 'the_story_description' ); ?></p>
			</div>
		</div>
	</a>
</section>
</div>
<div class="bg-dark text-light px-14 pt-16 lg:hidden lg:invisible block visible">
	<p class="font-monumentExtend font-extralight text-[27px] lg:text-4xl uppercase">A true <br>statement of <span class="font-extrabold">emporwerment.</span></p>
</div>