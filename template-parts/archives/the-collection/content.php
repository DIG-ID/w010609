<section id="the-collection" class="wrapper flex bg-[#D9D9D9]">
	<div class="w-full md:w-1/3 xl:w-2/3 hidden md:block bg-red pt-[69px] md:pt-[80px]">
		<div class="collection__list bg-red pb-14 pt-64 xl:py-14 px-7 xl:px-14">
		<?php
		$args = array(
			'post_type'      => 'the-collection',
			'order'          => 'ASC',
			'posts_per_page' => -1,
		);
		$the_query = new WP_Query($args);

		if ($the_query->have_posts()) :
			$total_posts = $the_query->post_count;
			$current_post = 0;
			$title_id = 1;
		?>
			<div class="collection__list grid grid-cols-1 xl:grid-cols-2">
				<?php
				while ($the_query->have_posts()) : $the_query->the_post();
					$current_post++;
					if ($current_post == $total_posts) :
				?>
					<div class="collection__item hidden xl:flex flex-col justify-center items-center custom-element">
						<div class="grid grid-cols-1 md:grid-cols-5 h-full relative">
							<div class="col-span-2 md:col-start-1">
								<img class="w-[180px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/smile.png" alt="smile icon" title="Smile Icon">
							</div>
							<div class="col-span-2 md:col-start-4">
								<p class="font-monumentExtend text-[36px] leading-[46px] absolute bottom-[245px] right-[-30%] uppercase rotate-[270deg]"><span>A true</span><br><span>statement of</span><br><span class=" font-black">Empowerment</span></p>
							</div>
						</div>
					</div>
				<?php
					$title_id++;
					endif;

					// Get the gallery field
					$gallery = get_field('overview_images');
					// Check if the gallery field has images
					if ($gallery && count($gallery) > 1):
						// Get the first and second images in the gallery
						$first_image = $gallery[0];
						$second_image = $gallery[1];
				?>
					<div class="collection__item flex flex-col justify-start xl:justify-center h-auto md:h-[550px] xl:h-auto items-center xl:mb-24 xl:px-5 2xl:px-0">
						<a href="<?php the_permalink(); ?>" class="image-swap-container relative">
							<img src="<?php echo esc_url($first_image['url']); ?>" alt="<?php echo esc_attr($first_image['alt']); ?>" class="w-full h-auto rounded-[30px] first-image halfFade">
							<img src="<?php echo esc_url($second_image['url']); ?>" alt="<?php echo esc_attr($second_image['alt']); ?>" class="w-full h-auto rounded-[30px] second-image hidden halfFade">
							<p class="plusInfo absolute hidden bottom-[4.5rem] left-1/2 -translate-x-1/2 font-neueMachina text-red text-[18px] font-extrabold uppercase"><?php echo esc_html( '+ info >' ) ?></p>
						</a>
					</div>
				<?php
					$title_id++; 
					endif;
				endwhile;
				?>
				<?php
				// Add the custom element again if the total number of posts is less than 2
				if ($total_posts < 2) :
				?>
					<div class="collection__item hidden xl:flex flex-col justify-center items-center custom-element" data-title-id="<?php echo $title_id; ?>">
						<div class="grid grid-cols-1 md:grid-cols-5 h-full relative">
							<div class="col-span-2 md:col-start-1">
								<img class="w-[180px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/smile.png" alt="smile icon" title="Smile Icon">
							</div>
							<div class="col-span-2 md:col-start-4">
								<p class="font-monumentExtend text-[36px] leading-[46px] absolute bottom-[245px] right-[-30%] uppercase rotate-[270deg]"><span>A true</span><br><span>statement of</span><br><span class=" font-black">Empowerment</span></p>
							</div>
						</div>
					</div>
				<?php
				$title_id++; 
				endif;
				?>
			</div>
		<?php
		else:
			// No posts found
			echo '<p>No posts found in the collection.</p>';
		endif;

		// Restore original Post Data
		wp_reset_postdata();
		?>
		</div>
	</div>
	<aside class="bg-[#D9D9D9] w-full md:w-2/3 xl:w-1/3 relative xl:fixed right-0 top-0 h-full pt-[69px] md:pt-[80px]">
		<div class="pt-16 xl:pt-4 pb-11 px-4 md:pl-8 md:pr-6 border-b-2 border-red">
			<p class="font-neueMachina uppercase text-red text-[22px] leading-[26px] mb-16 md:hidden md:invisible"><?php echo esc_html( 'It\'s not just about clothes.' ); ?><br><?php echo esc_html( 'It\'s a vibe, a movement.' ); ?></p>
			<h1 class="font-neueMachina uppercase text-[27px] xl:text-[70px] text-red leading-[30px] xl:leading-none font-extrabold"><?php echo esc_html( 'The' ); ?><br><?php echo esc_html( 'Collection' ); ?></h1>
		</div>
		<div class="py-0 md:py-11 px-0 md:pl-8 md:pr-20">
			<?php
			$info_query = new WP_Query(
				array(
					'post_type'      => 'the-collection',
					'order'          => 'ASC',
					'posts_per_page' => -1,
				)
			);
			if ( $info_query->have_posts() ) :
				$title_id = 1; // Reset counter for titles
				while ( $info_query->have_posts() ) :
					$info_query->the_post();
					$gallery = get_field('overview_images');
					// Check if the gallery field has images
					if ($gallery && count($gallery) > 1):
						// Get the first and second images in the gallery
						$first_image = $gallery[0];
					?>
					
						<a href="<?php the_permalink(); ?>" class="relative block md:hidden bg-red px-5 py-5 mb-5">
							<img src="<?php echo esc_url($first_image['url']); ?>" alt="<?php echo esc_attr($first_image['alt']); ?>" class="w-full h-auto rounded-[30px] first-image transition-opacity duration-500 ease-in-out">
							<p class="plusInfo absolute bottom-[4.5rem] left-1/2 -translate-x-1/2 font-neueMachina text-red text-[18px] font-extrabold uppercase"><?php echo esc_html( '+ info >' ) ?></p>
						</a>
						<?php endif; ?>
						<div class="dynamic-title-container h-auto md:h-[550px] xl:h-auto mx-5 md:mx-0 mb-5 md:mb-0 xl:mb-0 hidden fade-in" data-title-id="<?php echo $title_id; ?>">
							<h2 class="font-monumentExtend font-bold text-[16px] xl:text-[22px] leading-[20px] xl:leading-[30px] text-dark uppercase"><?php the_title(); ?></h2>
							<h2 class="font-monumentExtend font-light text-[16px] xl:text-[22px] leading-[20px] xl:leading-[30px] text-dark uppercase"><?php echo get_field('type'); ?></h2>
							<div class="features-list font-neueMachina text-[12px] xl:text-[18px] font-normal leading-[23px] xl:leading-[30px] text-dark mt-9"><?php echo get_field( 'features_list' ); ?></div>
							<div class="description-overview font-neueMachina text-[18px] font-normal leading-[23px] xl:leading-[30px] text-dark mt-8"><?php echo get_field( 'description' ); ?></div>
							<?php if ($colors = get_the_terms(get_the_ID(), 'color')): ?>
								<div class="colors-list font-neueMachina text-[18px] font-normal leading-[30px] text-dark mt-4">
									<div class="flex space-x-2">
										<span class="font-neueMachina text-[12px] xl:text-[18px] leading-[20px] xl:leading-[30px] font-extrabold uppercase text-dark">Colors:</span>
										<?php foreach ($colors as $color): ?>
											<div class="w-[60px] h-[26px] rounded-full border border-dark <?php echo esc_attr('bg-' . strtolower($color->name)); ?>" title="<?php echo esc_attr($color->name); ?>"></div>
										<?php endforeach; ?>
									</div>
								</div>
							<?php endif; ?>
							<p class=" font-neueMachina text-red text-[16px] xl:text-[36px] leading-[23px] xl:leading-none font-extrabold uppercase mt-8"><?php echo get_field( 'price' ); ?></p>
						</div>
					<?php
					$title_id++; // Increment title ID

				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>


		<div class="w-full h-full absolute z-10 left-0 right-0 top-0 hidden invisible xl:block xl:visible">
			<div class="fixed top-0 right-0 bottom-0 flex flex-col items-end justify-between">
				<figure class="p-6">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe.svg' ) ); ?>" alt="hero img" class="object-cover w-full h-full">
				</figure>
				<nav class="main-nav">
					<?php
						wp_nav_menu(
							array(
								'menu'            => 'main-menu',
								'menu_id'         => 'main-menu',
								'container'       => false,
								'container_class' => '',
								'theme_location'  => 'main-menu',
								'fallback_cb'     => '__return_false',
							)
						);
					?>
				</nav>
			</div>
		</div>
	</aside>
</section>