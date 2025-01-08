<section class="section-external-links bg-light md:pt-6 md:pb-24 xl:pt-0 xl:pb-0">
	<div class="wrapper flex flex-col md:flex-row">
		<div class="w-full md:w-3/4 xl:w-2/3 pb-40 md:pb-36 order-2 md:order-1">
			<div class="hidden invisible xl:visible xl:block bg-dark w-full h-64"></div>
			<div class="external-links--links-wrapper px-4 pt-6 md:pt-0 md:px-8 xl:px-14 xl:py-16">
				<?php
				if ( have_rows( 'external_links' ) ) :
					while ( have_rows( 'external_links' ) ) :
						the_row();
						$ext_link = get_sub_field( 'link' );
						if ( $ext_link ) :
							$link_url    = $ext_link['url'];
							$link_title  = $ext_link['title'];
							$link_target = $ext_link['target'] ? $ext_link['target'] : '_self';
							?>
							<a class="btn--horizontal" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php
						endif;
					endwhile;
				endif;
				?>
			</div>
		</div>
		<div class="w-full md:w-1/4 xl:w-1/3 xl:border-l-2 xl:border-l-dark border-b-2 border-b-dark md:border-b-0 order-1 md:order-2">
			<figure class="w-full h-full flex flex-col justify-start xl:justify-center items-center py-16 md:py-0">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smile.png' ) ); ?>" alt="smile">
			</figure>
		</div>
	</div>
</section>
