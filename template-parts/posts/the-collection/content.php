<article id="post-<?php the_ID(); ?>" <?php post_class( 'wrapper flex' ); ?>>
    <div class="w-2/3">
        <?php get_template_part('template-parts/header-small'); ?>
        <div class="collection__list bg-red py-14 h-full flex flex-row justify-center">
            <?php 
            $slider = get_field('image_gallery');
            if( $slider ): ?>
                <div class="swiper swiper-thumbnails">
                    <div class="swiper-wrapper">
                    <?php foreach( $slider as $slider_id_t ): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($slider_id_t['url']); ?>" class="rounded-[15px]" alt="<?php echo esc_attr($slider_id_t['alt']); ?>" width="120" height="120">
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper swiper-collection">
                    <div class="swiper-wrapper">
                        <?php foreach( $slider as $slider_id ): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($slider_id['url']); ?>" class="rounded-[30px]" alt="<?php echo esc_attr($slider_id['alt']); ?>" width="912" height="872" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <aside class="bg-[#D9D9D9] w-1/3">
        <div class="pt-4 pb-11 pl-8 pr-6 border-b-2 border-red">
            <p class="font-neueMachina uppercase text-red text-[22px] leading-[26px] mb-16"><?php echo esc_html( 'It\'s not just about clothes.' ); ?><br><?php echo esc_html( 'It\'s a vibe, a movement.' ); ?></p>
            <h1 class="font-neueMachina uppercase text-[70px] text-red leading-none font-extrabold"><?php echo esc_html( 'The' ); ?><br><?php echo esc_html( 'Collection' ); ?></h1>
        </div>
        <div class="py-11 pl-8 pr-20">
            <div class="dynamic-title-container">
                <h2 class="font-monumentExtend font-bold text-[22px] leading-[30px] text-dark uppercase"><?php the_title(); ?></h2>
                <h2 class="font-monumentExtend font-light text-[22px] leading-[30px] text-dark uppercase"><?php echo get_field('type'); ?></h2>
                <div class="description-overview font-neueMachina text-[18px] font-normal leading-[30px] text-dark mt-8"><?php echo get_field( 'description' ); ?></div>
                <div class="features-list font-neueMachina text-[18px] font-normal leading-[30px] text-dark mt-9"><?php echo get_field( 'features_list' ); ?></div>
                <!-- Display Colors -->
                <?php if ($colors = get_the_terms(get_the_ID(), 'color')): ?>
                    <div class="colors-list font-neueMachina text-[18px] font-normal leading-[30px] text-dark mt-4">
                        <div class="flex space-x-2">
                            <span class="font-neueMachina text-[18px] leading-[30px] font-extrabold uppercase text-dark">Colors:</span>
                            <?php foreach ($colors as $color): ?>
                                <div class="w-[60px] h-[26px] rounded-full border border-dark <?php echo esc_attr('bg-' . strtolower($color->name)); ?>" title="<?php echo esc_attr($color->name); ?>"></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- Display Sizes -->
                <?php if ($sizes = get_the_terms(get_the_ID(), 'size')): ?>
                    <div class="sizes-list font-neueMachina text-[18px] font-normal leading-[30px] text-dark mt-4">
                        <span class="font-neueMachina text-[18px] leading-[30px] font-extrabold uppercase text-dark">Sizes:</span>
                        <?php foreach ($sizes as $size): ?>
                            <span><?php echo esc_html($size->name); ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <!-- Display Materials -->
                <?php if ($materials = get_the_terms(get_the_ID(), 'material')): ?>
                    <div class="materials-list font-neueMachina text-[18px] font-normal leading-[30px] text-dark mt-4">
                        <span class="font-neueMachina text-[18px] leading-[30px] font-extrabold uppercase text-dark">Material:</span>
                        <?php foreach ($materials as $material): ?>
                            <span><?php echo esc_html($material->name); ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="materials-list font-neueMachina text-[18px] font-normal leading-[30px] text-dark mt-4">
                    <span class="font-neueMachina text-[18px] leading-[30px] font-extrabold uppercase text-dark">Care:</span>
                    <span><?php echo get_field( 'care' ); ?></span>
                </div>
                <p class=" font-neueMachina text-red text-[36px] leading-none font-extrabold uppercase mt-8"><?php echo get_field( 'price' ); ?></p>
            </div>  
        </div>

        <div class="w-full h-full absolute z-10 left-0 right-0 top-0 hidden">
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
</article>
