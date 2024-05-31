<section class="section-hero h-svh overflow-hidden">
	<div class="fixed-assets">
		<div class="fixed-assets__text flex w-full justify-between items-start mx-auto px-16 fixed left-0 top-20 prevent-select z-10">
			<div class="fixed-assets__left invisible">
				<p class="font-monumentExtend font-light text-base text-light uppercase"><span class="font-bold">ISA</span><br>bodywear</p>
			</div>
			<div class="fixed-assets__right invisible">
				<p class="font-monumentExtend font-light text-base text-light uppercase text-end"><span class="font-bold">w010609</span><br> available now</p>
			</div>
		</div>
		<div class="fixed-assets__numbers font-neueMachina text-lg text-light tracking-[1.62px] fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-svh py-32 px-12 flex flex-col justify-around prevent-select z-10 invisible">
			<p class="flex justify-between"><span>0</span><span>1</span></p>
			<p class="flex justify-between"><span>0</span><span>6</span></p>
			<p class="flex justify-between"><span>0</span><span>9</span></p>
		</div>
		<div class="btn-cta-wrapper fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50 invisible">
			<a href="https://www.isabodywear.ch/kollektionen/spezial/w010609/" target="_blank" class="btn-cta">
				<span class="btn-cta__ripple"><span></span></span>
				<span class="btn-cta__title">
					<span class="btn-cta__title-in">
						<?php esc_html_e( 'See the collection', 'w010609-lp' ); ?>
						<span class="btn-cta__title-sec">
							<?php esc_html_e( 'visit the shop', 'w010609-lp' ); ?>
						</span>
					</span>
				</span>
			</a>
		</div>
	</div><!-- fixed assets -->

	<div class="content flex flex-col justify-between items-center w-full h-svh">
		<div class="hero-image absolute left-02 top-24 w-full h-full flex justify-center z-10">
			<?php
			$image_01 = get_field( 'image_01', 'options' );
			if ( $image_01 ) :
				?>
				<figure>
					<?php echo wp_get_attachment_image( $image_01, 'full', false, array( 'class' => 'w-full max-w-full object-cover h-auto' ) ); ?>
				</figure>
				<?php
			endif;
			?>
		</div>
		<div class="flex flex-col items-center mt-36 z-20 text-brandname-wrapper">
			<svg xmlns="http://www.w3.org/2000/svg" width="95" height="20" viewBox="0 0 95 20" fill="none" class="icons mb-24 invisible">
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
			<h1 class="brandname font-neueMachina font-normal font-outline text-[200px] text-transparent tracking-[18px] uppercase stroke-light text-center leading-none invisible"><?php esc_html_e( 'W 01 06 09', 'w010609-lp' ); ?></h1>
		</div>

		<div class="flex flex-col justify-center items-center available-text-wrapper">
			<p class="available-text-01 font-neueMachina uppercase text-[200px] text-light text-center leading-none invisible"><?php esc_html_e( 'available', 'w010609-lp' ); ?> <span class="italic"><?php esc_html_e( 'now', 'w010609-lp' ); ?></span></p>
			<p class="available-text-02 font-neueMachina uppercase text-[200px] text-light text-center leading-none z-30 invisible"><span class="italic"><?php esc_html_e( 'available', 'w010609-lp' ); ?></span> <?php esc_html_e( 'now', 'w010609-lp' ); ?></p>
			<div class="triangles z-20 invisible">
				<span ></span>
			</div>
		</div>
	</div>


</section>
