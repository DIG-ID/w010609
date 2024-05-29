<section class="section-footer h-svh">
	<div class="flex justify-center">
		<?php
		$image_04 = get_field( 'image_04', 'options' );
		if ( $image_04 ) :
			?>
			<figure>
				<?php echo wp_get_attachment_image( $image_04, 'full' ); ?>
			</figure>
			<?php
		endif;
		?>
	</div>
</section>
