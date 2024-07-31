<section class="section-the-collection bg-light block overflow-hidden w-full sm:w-1/2 xl:w-full">
	<a href="<?php the_field( 'the_collection_link' ); ?>" >
		<div class="section-the-collection--content flex flex-col xl:flex-row">
			<div class="w-full xl:w-2/3 xl:px-14 xl:py-16 px-4 py-6">
				<div class="flex flex-col h-80 xl:h-full justify-between">
					<div>
						<h2 class="btn--vertical text-dark"><?php the_field( 'the_collection_title' ); ?></h2>
					</div>
					<p class="text-description text-dark max-w-52 xl:max-w-md xl:mb-8 self-end"><?php the_field( 'the_collection_description' ); ?></p>
				</div>
			</div>
			<div class="w-full xl:w-1/3">
				<figure class="h-full overflow-hidden">
					<?php
					$image = get_field( 'the_collection_image' );
					if ( $image ) :
						echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'object-cover w-full h-full xl:translate-x-full transition-all duration-700 ease-in-out xl:opacity-0' ) );
					endif;
					?>
				</figure>
			</div>
		</div>
	</a>
</section>
