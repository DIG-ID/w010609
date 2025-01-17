<article id="post-<?php the_ID(); ?>" <?php post_class( 'wrapper flex flex-col md:flex-row' ); ?>>
	<div class="w-full md:w-1/3 xl:w-2/3 navigation-bumper">

		<div class="bg-[#D9D9D9] pt-4 pb-6 md:pb-11 px-5 md:pl-8 md:pr-6 border-b-2 border-red block md:hidden">
			<p class="font-neueMachina uppercase text-red text-base xl:text-[22px] xl:leading-[26px] mb-5 md:mb-16 md:invisible md:hidden"><?php echo esc_html( 'It\'s not just about clothes.' ); ?><br><?php echo esc_html( 'It\'s a vibe, a movement.' ); ?></p>
			<div class="flex justify-between items-center">
				<h1 class="font-neueMachina uppercase text-[27px] xl:text-[62px] 2xl:text-[70px] text-red leading-none font-extrabold"><?php echo esc_html( 'The' ); ?><br><?php echo esc_html( 'Collection' ); ?></h1>
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe.svg' ) ); ?>" alt="globe icon" class="object-cover w-full h-full max-w-[49px] xl:hidden xl:invisible">
			</div>
		</div>

		<div class="collection__list bg-red py-6 md:py-14 px-5 md:px-9 h-full flex flex-col xl:flex-row justify-start xl:justify-center">
				<?php 
				$slider = get_field('image_gallery');
				if( $slider ): ?>
						<div class="swiper swiper-thumbnails !flex order-2 xl:order-1">
								<div class="swiper-wrapper">
								<?php foreach( $slider as $slider_id_t ): ?>
										<div class="swiper-slide">
												<img src="<?php echo esc_url($slider_id_t['url']); ?>" class="rounded-[10px] xl:rounded-[15px]" alt="<?php echo esc_attr($slider_id_t['alt']); ?>" />
										</div>
								<?php endforeach; ?>
								</div>
						</div>
						<div class="swiper swiper-collection order-1 xl:order-2 relative">
								<div class="swiper-wrapper">
										<?php foreach( $slider as $slider_id ): ?>
												<div class="swiper-slide">
														<img src="<?php echo esc_url($slider_id['url']); ?>" class="rounded-[30px]" alt="<?php echo esc_attr($slider_id['alt']); ?>"  />
										</div>
										<?php endforeach; ?>
								</div>
								<!-- Add Navigation -->
								<div class="swiper-button-next">&gt;</div>
								<div class="swiper-button-prev">&lt;</div>
						</div>
				<?php endif; ?>
		</div>

	</div>
	<aside class="bg-[#D9D9D9] w-full md:w-2/3 xl:w-1/3 pt-[24px] md:pt-[80px] overflow-hidden">

		<div class="pt-4 pb-11 pl-8 pr-6 border-b-2 border-red hidden md:block">
			<p class="font-neueMachina uppercase text-red text-[22px] leading-[26px] mb-16 md:invisible md:hidden"><?php echo esc_html( 'It\'s not just about clothes.' ); ?><br><?php echo esc_html( 'It\'s a vibe, a movement.' ); ?></p>
			<div class="flex justify-between items-center">
				<h1 class="font-neueMachina uppercase text-[27px] xl:text-[62px] 2xl:text-[70px] text-red leading-none font-extrabold"><?php echo esc_html( 'The' ); ?><br><?php echo esc_html( 'Collection' ); ?></h1>
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe.svg' ) ); ?>" alt="globe icon" class="object-cover w-full h-full max-w-[49px] xl:hidden xl:invisible">
			</div>
		</div>

		<div class="py-7 xl:py-11 pl-5 md:pl-8 pr-20">
			<div class="dynamic-title-container">
				<h2 class="font-monumentExtend font-bold text-base xl:text-[22px] leading-[30px] text-dark uppercase"><?php the_title(); ?></h2>
				<h2 class="font-monumentExtend font-light text-base xl:text-[22px] leading-[30px] text-dark uppercase"><?php echo get_field( 'type' ); ?></h2>
				<div class="description-overview font-neueMachina text-xs xl:text-[18px] font-normal leading-6 xl:leading-[30px] text-dark mt-8"><?php echo wpautop( get_field( 'description' ) ); ?></div>
				<div class="features-list font-neueMachina text-xs xl:text-[18px] font-normal leading-[30px] text-dark mt-9"><?php echo get_field( 'features_list' ); ?></div>
				<!-- Display Colors -->
				<?php if ( $colors = get_the_terms( get_the_ID(), 'color' ) ) : ?>
					<div class="colors-list font-neueMachina text-[18px] font-normal leading-[30px] text-dark mt-4">
						<div class="flex space-x-2">
							<span class="font-neueMachina text-xs xl:text-[18px] xç:leading-[30px] font-extrabold uppercase text-dark">Colors:</span>
							<?php foreach ($colors as $color): ?>
								<div class="w-[60px] h-[26px] rounded-full border border-dark <?php echo esc_attr('bg-' . strtolower($color->name)); ?>" title="<?php echo esc_attr($color->name); ?>"></div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
				<!-- Display Sizes -->
				<?php if ( $sizes = get_the_terms( get_the_ID(), 'size' ) ) : ?>
					<div class="sizes-list font-neueMachina text-xs xl:text-[18px] font-normal leading-[30px] text-dark mt-4">
						<span class="font-neueMachina text-xs xl:text-[18px] xl:leading-[30px] font-extrabold uppercase text-dark">Sizes:</span>
						<?php foreach ($sizes as $size): ?>
							<span><?php echo esc_html( $size->name ); ?></span>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<!-- Display Materials -->
				<?php if ( $materials = get_the_terms( get_the_ID(), 'material' ) ) : ?>
					<div class="materials-list font-neueMachina text-xs xl:text-[18px] font-normal leading-[30px] text-dark mt-4">
						<span class="font-neueMachina text-xs xl:text-[18px] xl:leading-[30px] font-extrabold uppercase text-dark">Material:</span>
						<?php
							$material_names = array_map( function( $material ) {
								return esc_html( $material->name );
							}, $materials );
							echo implode( ', ', $material_names );
						?>
					</div>
				<?php endif; ?>
				<div class="materials-list font-neueMachina text-xs xl:text-[18px] font-normal !leading-[34px] xl:leading-[30px] text-dark mt-4">
						<span class="font-neueMachina text-xs xl:text-[18px] xl:leading-[30px] font-extrabold uppercase text-dark">Care:</span>
						<span><?php echo get_field( 'care' ); ?></span>
				</div>
				<p class="font-neueMachina text-red text-base xl:text-[36px] leading-none font-extrabold uppercase mb-2 mt-8"><?php echo get_field( 'price' ); ?></p>
				<a href="<?php echo get_field( 'isa_url' ); ?>" target="_blank" class=" font-neueMachina text-[18px] leading-[30px] font-extrabold uppercase transition-all duration-300 ease-in-out hover:text-red"><?php echo esc_html( 'ISA bodywear Shop >>' ) ?></a>
			</div>
		</div>

		<div class="py-5 px-5 md:pl-8 md:pr-8 xl:pr-[30%] border-t-2 border-red flex justify-between">
			<?php
			$previous_post = get_previous_post();
			$next_post = get_next_post();
			if ($previous_post) {
					?>
					<a href="<?php echo get_permalink($previous_post); ?>" class="btn--postNav rotate-180"></a>
			<?php
			}

			if ($next_post) {
					?>
					<a href="<?php echo get_permalink($next_post); ?>" class="btn--postNav"></a>
			<?php
			}
				?>
		</div>

		<?php get_template_part( 'template-parts/components/vertical-navigation' ); ?>

	</aside>
</article>

