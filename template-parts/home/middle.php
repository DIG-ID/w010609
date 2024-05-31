<section class="section-middle xl:py-20">
	<div class="flex flex-col xl:flex-row justify-center items-start xl:gap-x-44 w-full">
		<?php
		$image_02 = get_field( 'image_02', 'options' );
		if ( $image_02 ) :
			?>
			<figure class="image-02 flex flex-col mt-24 xl:mt-[30%] order-2 xl:order-1 px-12 xl:px-0 w-full xl:w-auto">
				<figcaption class="mb-4"><p class="font-neueMachina font-normal text-[8px] xl:text-base text-light uppercase tracking-[0.72px] xl:tracking-[1.44px] leading-[normal]"><span class="font-bold">w010609</span><br>available now</p></figcaption>
				<?php echo wp_get_attachment_image( $image_02, 'full', false, array( 'class' => 'w-full max-w-full object-cover h-auto' ) ); ?>
			</figure>
			<?php
		endif;
		$image_03 = get_field( 'image_03', 'options' );
		if ( $image_03 ) :
			?>
			<figure class="image-03 flex xl:justify-end items-end order-1 xl:order-2 px-12 xl:px-0 w-full xl:w-auto">
				<?php echo wp_get_attachment_image( $image_03, 'full', false, array( 'class' => 'w-full max-w-full object-cover h-auto' ) ); ?>
				<figcaption class="ml-1 xl:ml-8"><p class="font-neueMachina font-normal text-[8px] xl:text-base text-light uppercase tracking-[0.72px] xl:tracking-[1.44px] leading-[normal]"><span class="text-red font-bold">w</span><br>01<br>06<br>09</p></figcaption>
			</figure>
			<?php
		endif;
		?>
	</div>
</section>
