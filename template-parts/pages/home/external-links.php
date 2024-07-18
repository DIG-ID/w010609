<section class="section-external-links bg-light">
	<div class="wrapper flex">
		<div class="w-2/3 pb-36">
			<div class="bg-dark w-full h-64"></div>
			<div class="external-links--links-wrapper px-14 py-16">
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
		<div class="w-1/3 border-l-2 border-l-dark">
			<figure class="w-full h-full flex justify-center items-center">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smile.png' ) ); ?>" alt="smile">
			</figure>
		</div>
	</div>
</section>
