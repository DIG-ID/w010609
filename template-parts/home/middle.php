<section class="section-middle ">
	<div class="flex justify-center items-start gap-x-44">
		<?php
		$image_02 = get_field( 'image_02', 'options' );
		if ( $image_02 ) :
			?>
			<figure class="image-02 flex flex-col mt-[40%]">
				<figcaption class="mb-4"><p class="font-monumentExtend font-light text-base text-light uppercase"><span class="font-bold">w010609</span><br>available now</p></figcaption>
				<?php echo wp_get_attachment_image( $image_02, 'full', false, array( 'class' => 'w-full max-w-full object-cover h-auto' ) ); ?>
			</figure>
			<?php
		endif;
		$image_03 = get_field( 'image_03', 'options' );
		if ( $image_03 ) :
			?>
			<figure class="image-03 flex justify-end items-end">
				<?php echo wp_get_attachment_image( $image_03, 'full', false, array( 'class' => 'w-full max-w-full object-cover h-auto' ) ); ?>
				<figcaption class="ml-8"><p class="font-neueMachina font-normal text-base text-light uppercase tracking-[1.44px] leading-[normal]"><span class="text-red font-bold">w</span><br>01<br>06<br>09</p></figcaption>
			</figure>
			<?php
		endif;
		?>
	</div>
</section>
