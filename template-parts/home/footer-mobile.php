<section class="section-footer xl:h-svh overflow-hidden relative min-h-[575px] xl:min-h-[auto]">
	<div class="content flex flex-col justify-between items-center w-full xl:h-svh h-full">
		<div class="image-04 absolute left-02 top-24 w-full h-full flex justify-center z-10">
			<?php
			$image_04 = get_field( 'image_04', 'options' );
			if ( $image_04 ) :
				?>
				<figure>
					<?php echo wp_get_attachment_image( $image_04, 'full', false, array( 'class' => 'w-full max-w-full object-cover h-full xl:h-auto' ) ); ?>
				</figure>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
