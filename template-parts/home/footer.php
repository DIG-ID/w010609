<section class="section-footer xl:h-svh overflow-hidden relative">
	<div class="content flex flex-col justify-between items-center w-full xl:h-svh">
		<div class="image-04 absolute left-02 top-24 w-full h-full flex justify-center z-10">
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
		<div class="flex flex-col items-center mt-20 xl:mt-36 z-20 text-brandname-wrapper">
			<svg xmlns="http://www.w3.org/2000/svg" width="95" height="20" viewBox="0 0 95 20" fill="none" class="icons mb-6 cl:mb-24 invisible max-w-[56px] xl:max-w-[95px]">
				<g clip-path="url(#clip0_2018_36)">
					<path d="M44 19.45V12.66H37.46V6.45H44V0H50.14V6.45H56.67V12.66H50.14V19.45H44Z" fill="#EC302E"/>
					<path d="M81.4499 19.45V12.66H74.9099V6.45H81.4499V0H87.5999V6.45H94.1299V12.66H87.5999V19.45H81.4499Z" fill="#EC302E"/>
					<path d="M6.54 19.45V12.66H0V6.45H6.54V0H12.69V6.45H19.22V12.66H12.69V19.45H6.54Z" fill="#EC302E"/>
				</g>
				<defs>
				<clipPath id="clip0_2018_36">
					<rect width="94.13" height="19.45" fill="white"/>
				</clipPath>
				</defs>
			</svg>
			<h2 class="brandname font-neueMachina font-normal font-outline text-[61px] xl:text-[200px] text-transparent tracking-[5.585px] xl:tracking-[18px] uppercase stroke-light text-center leading-none invisible whitespace-nowrap"><?php esc_html_e( 'W 01 06 09', 'w010609-lp' ); ?></h2>
		</div>

		<div class="flex flex-col justify-center items-center available-text-wrapper">
			<p class="available-text-01 font-neueMachina uppercase text-[41px] xl:text-[200px] text-light text-center leading-none"><?php esc_html_e( 'available', 'w010609-lp' ); ?> <span class="italic"><?php esc_html_e( 'now', 'w010609-lp' ); ?></span></p>
			<p class="available-text-02 font-neueMachina uppercase text-[41px] xl:text-[200px] text-light text-center leading-none z-30"><span class="italic"><?php esc_html_e( 'available', 'w010609-lp' ); ?></span> <?php esc_html_e( 'now', 'w010609-lp' ); ?></p>
			<div class="triangles z-20 rotate-180">
				<span ></span>
			</div>
		</div>
	</div>
</section>
