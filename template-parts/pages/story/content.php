<section class="section-the-story flex flex-col md:flex-row">
	<div class="w-full md:w-1/3 xl:w-2/3 px-8 xl:px-16 pb-16 order-2 md:order-1 navigation-bumper">
		<div class="flex md:flex-col xl:flex-row mb-16 xl:mb-52">
			<div class="section-the-story--content mt-10 xl:mt-20 w-full xl:pr-12 order-2 xl:order-1">
				<?php the_content(); ?>
				<svg width="49" height="31" viewBox="0 0 49 31" fill="none" xmlns="http://www.w3.org/2000/svg" class="max-w-full object-cover inline-block">
					<path d="M27.1617 30.9767C21.9475 30.9767 16.7333 31.0363 11.5306 30.9648C4.62431 30.8814 0.158268 24.5405 0.0431641 14.743C-0.00287761 11.1912 -0.0374089 7.62738 0.0776954 4.08744C0.1928 0.297193 1.81577 -1.02582 4.17541 0.833548C9.48171 5.04096 12.1176 10.1423 19.9217 13.8372C21.8554 14.7549 22.6036 18.0208 23.7201 20.3569C25.6769 24.4809 29.2911 26.4117 32.5486 24.7431C34.6895 23.6465 35.806 21.4296 35.9327 18.2472C36.0017 16.4713 35.7025 14.5881 36.0363 12.9433C36.0708 12.7883 36.1053 12.6334 36.1514 12.4903C36.7384 10.4641 39.6505 10.6429 39.9613 12.7406C39.9613 12.7526 39.9613 12.7645 39.9613 12.7883C40.2951 15.2913 40.0879 17.9612 40.0534 20.5595C40.0189 23.0863 40.7095 24.9099 42.5627 24.8742C43.7367 24.755 44.4734 23.8849 44.7381 20.5714C44.9683 17.7824 44.6461 14.8145 44.9453 12.0017C44.9453 11.8944 44.9683 11.799 45.0029 11.7037C45.4748 9.78472 48.2028 9.72513 48.7438 11.6202C48.7898 11.7633 48.8128 11.9182 48.8243 12.0732C49.0661 16.1495 49.0315 20.2735 48.8819 24.3617C48.7323 28.5214 46.8445 30.8695 43.6677 30.929C38.1657 31.0244 32.6637 30.9529 27.1617 30.9529V30.9767Z" fill="#E6E6E6"/>
				</svg>

			</div>
			<figure class="mt-10 order-1 xl:order-2 max-w-[90px] xl:max-w-full self-end xl:self-start hidden invisible md:visible md:block">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smile.png' ) ); ?>" alt="smile" class="object-cover w-full max-w-full">
			</figure>
		</div>

		<section class="section-about-the-project hidden invisible xl:block xl:visible mb-32">
			<h2 class="font-neueMachina font-normal text-red text-[22px] leading-[29px] uppercase mb-9">About the project</h2>
			<p class="font-neueMachina font-normal text-light text-[18px] leading-[29px] max-w-[728px]"><?php the_field( 'about_the_project_description' ); ?></p>
		</section>

		<?php
		if ( have_rows( 'videos_video' ) ) :
			?><section class="section-videos mb-32 hidden invisible xl:block xl:visible"><?php
			while ( have_rows( 'videos_video' ) ) :
				the_row();
				?>
				<div class="video-wrapper mb-28">
					<h2 class="font-neueMachina font-normal text-red text-base xl:text-[22px] leading-[29px] uppercase mb-9"><?php the_sub_field( 'title' ); ?></h2>
					<div class="embed-container">
						<?php
						$vfile = get_sub_field( 'video' );
						if ( $vfile ) :
							echo $vfile;
						endif;
						?>
					</div>
				</div>
				<?php
			endwhile;
			?></section><?php
		endif;
		?>

	</div>

	<aside class="w-full md:w-2/3 xl:w-1/3 relative xl:fixed right-0 top-0 h-full bg-light order-1 md:order-2 navigation-bumper">

		<div class="pt-4 pb-11 pl-8 pr-6 border-b-2 border-red">
			<p class="font-neueMachina uppercase text-red text-[22px] leading-[26px] mb-16 md:hidden md:invisible"><?php echo esc_html( 'It\'s not just about clothes.' ); ?><br><?php echo esc_html( 'It\'s a vibe, a movement.' ); ?></p>
			<h1 class="font-neueMachina uppercase text-[27px] xl:text-[62px] 2xl:text-[70px] text-red leading-none font-extrabold"><?php echo esc_html( 'The' ); ?><br><?php echo esc_html( 'Story' ); ?></h1>
		</div>
		<div class="py-11 pl-8 pr-20">
			<h2 class="font-neueMachina font-extrabold text-base tracking-[8.96px] xl:text-[22px] text-red leading-[29px] xl:tracking-[12.32px] uppercase mb-8">The creators :</h2>
			<?php
			if ( have_rows( 'the_creators_creators_list' ) ) :
				?><ul class="creatores-list"><?php
				while ( have_rows( 'the_creators_creators_list' ) ) :
					the_row();
					// Load sub field value.
					$creator_img = get_sub_field( 'image' );
					?>
					<li class="flex flex-col md:flex-row items-start gap-x-9 mb-8">
						<?php
						if ( $creator_img ) :
							echo wp_get_attachment_image( $creator_img, 'full', false, array( 'class' => 'object-cover max-w-full h-auto grayscale mb-6 md:mb-0' ) );
						endif;
						?>
						<div class="creators-content max-w-[322px]">
							<h3 class="font-monumentExtend font-black text-dark text-[22px] leading-[30px] uppercase mb-2"><?php the_sub_field( 'name' ); ?></h3>
							<p class="font-neueMachina font-normal text-dark text-sm leading-[22px]"><?php the_sub_field( 'description' ); ?></p>
						</div>
					</li>
					<?php
				endwhile;
				?></ul><?php
			endif;
			?>
		</div>
		<?php get_template_part( 'template-parts/components/vertical-navigation' ); ?>
	</aside>

</section>

<div class="w-full xl:hidden xl:invisible mb-32 px-8 xl:px-16">
	<section class="section-about-the-project  mb-32">
		<h2 class="font-neueMachina font-normal text-red text-base xl:text-[22px] leading-[29px] uppercase mb-9">About the project</h2>
		<p class="font-neueMachina font-normal text-light text-[18px] leading-[29px]"><?php the_field( 'about_the_project_description' ); ?></p>
	</section>

	<?php
	if ( have_rows( 'videos_video' ) ) :
		?><section class="section-videos mb-32 "><?php
		while ( have_rows( 'videos_video' ) ) :
			the_row();
			?>
			<div class="video-wrapper mb-28">
				<h2 class="font-neueMachina font-normal text-red text-base xl:text-[22px] leading-[29px] uppercase mb-9"><?php the_sub_field( 'title' ); ?></h2>
				<div class="embed-container">
					<?php
					$vfile = get_sub_field( 'video' );
					if ( $vfile ) :
						echo $vfile;
					endif;
					?>
				</div>
			</div>
			<?php
		endwhile;
		?></section><?php
	endif;
	?>
</div>
