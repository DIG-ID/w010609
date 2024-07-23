<section id="the-collection" class="wrapper flex">
    <div class="w-3/4">
        <?php get_template_part('template-parts/header-small'); ?>
        <div class="collection__list bg-red py-14">
        <?php
        // The query arguments
        $args = array(
            'post_type'      => 'the-collection',
            'order'          => 'ASC',
            'posts_per_page' => -1,
        );

        // The Query
        $the_query = new WP_Query($args);

        // Check if the query returns any posts
        if ($the_query->have_posts()) :
            $total_posts = $the_query->post_count;
            $current_post = 0;
        ?>
            <div class="collection__list grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php
                // Loop through the posts
                while ($the_query->have_posts()) : $the_query->the_post();
                    $current_post++;
                    // Insert custom element at the penultimate position
                    if ($current_post == $total_posts) :
                ?>
                    <div class="collection__item flex flex-col justify-center items-center custom-element">
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
                    endif;

                    // Get the gallery field
                    $gallery = get_field('overview_images');
                    // Check if the gallery field has images
                    if ($gallery && count($gallery) > 1):
                        // Get the first and second images in the gallery
                        $first_image = $gallery[0];
                        $second_image = $gallery[1];
                ?>
                    <div class="collection__item flex flex-col justify-center items-center mb-24">
                        <a href="<?php the_permalink(); ?>" class="image-swap-container">
                            <img src="<?php echo esc_url($first_image['url']); ?>" alt="<?php echo esc_attr($first_image['alt']); ?>" class="w-full h-auto rounded-[30px] first-image transition-opacity duration-500 ease-in-out">
                            <img src="<?php echo esc_url($second_image['url']); ?>" alt="<?php echo esc_attr($second_image['alt']); ?>" class="w-full h-auto rounded-[30px] second-image hidden transition-opacity duration-500 ease-in-out">
                        </a>
                    </div>
                <?php
                    endif; // End if $gallery
                endwhile;
                ?>
                <?php
                // Add the custom element again if the total number of posts is less than 2
                if ($total_posts < 2) :
                ?>
                    <div class="collection__item flex flex-col justify-center items-center custom-element">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/smile.png" alt="" title="">
                        <p>This is a custom element inserted as the penultimate item.2</p>
                    </div>
                <?php
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
    <aside class="bg-white w-1/4 relative">
    <div class="w-full h-full absolute z-10 left-0 right-0 top-0">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageSwapContainers = document.querySelectorAll('.image-swap-container');

        imageSwapContainers.forEach(container => {
            const firstImage = container.querySelector('.first-image');
            const secondImage = container.querySelector('.second-image');

            container.addEventListener('mouseenter', () => {
                firstImage.classList.add('hidden');
                secondImage.classList.remove('hidden');
            });

            container.addEventListener('mouseleave', () => {
                firstImage.classList.remove('hidden');
                secondImage.classList.add('hidden');
            });
        });
    });
</script>