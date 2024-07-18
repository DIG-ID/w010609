<a href="<?php the_field( 'the_collection_link' ); ?>" class="section-the-collection bg-light block overflow-hidden">
	<div class="content-wrapper flex">
		<div class="w-2/3 px-14 py-16">
			<h2 class="btn--vertical text-dark"><?php the_field( 'the_collection_title' ); ?></h2>
			<p class="text-description text-dark max-w-md mt-16 mb-8 translate-x-full"><?php the_field( 'the_collection_description' ); ?></p>
		</div>
		<div class="w-1/3">
			<figure class="h-full overflow-hidden">
				<?php
				$image = get_field( 'the_collection_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'object-cover w-full h-full translate-x-full transition-all duration-700 ease-in-out opacity-0' ) );
				endif;
				?>
			</figure>
		</div>
	</div>
</a>
