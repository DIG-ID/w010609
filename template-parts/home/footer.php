<section class="section-footer xl:h-svh overflow-hidden relative min-h-[575px] xl:min-h-[auto] mt-48 xl:mt-0">
	<div class="content flex flex-col justify-between items-center w-full xl:h-svh h-full">
		<div class="image-04 absolute left-02 top-24 w-full h-full flex justify-center z-10 xl:invisible">
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
		<div class="text-brandname-wrapper hidden invisible xl:flex xl:visible xl:flex-col xl:items-center mt-20 xl:mt-36 z-20 ">
			<svg xmlns="http://www.w3.org/2000/svg" width="95" height="20" viewBox="0 0 95 20" fill="none" class="icons z-20">
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
			<h2 class="brandname"><?php esc_html_e( 'W 01 06 09', 'w010609-lp' ); ?></h2>
		</div>

		<div class="available-text-wrapper hidden invisible xl:visible xl:flex xl:flex-col xl:justify-center xl:items-center">
			<p class="available-text available-text--01"><?php esc_html_e( 'available', 'w010609-lp' ); ?> <span class="italic"><?php esc_html_e( 'now', 'w010609-lp' ); ?></span></p>
			<p class="available-text available-text--02"><span class="italic"><?php esc_html_e( 'available', 'w010609-lp' ); ?></span> <?php esc_html_e( 'now', 'w010609-lp' ); ?></p>
			<div class="triangles z-20 rotate-180">
				<span ></span>
			</div>
		</div>
	</div>
</section>
