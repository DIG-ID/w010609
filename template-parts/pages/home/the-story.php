<section class="section-the-story bg-light block overflow-hidden">
	<a href="<?php the_field( 'the_story_link' ); ?>" >
		<div class="content-wrapper flex">
			<div class="w-1/3 flex flex-col justify-between">
				<figure class="h-full overflow-hidden">
					<?php
					$image = get_field( 'the_story_image' );
					if ( $image ) :
						echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'object-cover w-full h-full translate-x-full transition-all duration-700 ease-in-out opacity-0' ) );
					endif;
					?>
				</figure>
				<div class="bg-dark text-light px-14 pt-16">
					<p class="font-monumentExtend font-extralight text-4xl uppercase">A true <br>statement of <span class="font-extrabold">emporwerment.</span></p>
				</div>
			</div>
			<div class="w-2/3 bg-red text-light px-14 py-16">
				<h2 class="btn--vertical text-dark"><?php the_field( 'the_story_title' ); ?><span class="btn--arrow"></span></h2>
				<p class="text-description text-dark max-w-xl translate-x-full"><?php the_field( 'the_story_description' ); ?></p>
			</div>
		</div>
	</a>
</section>
