<?php get_header(); ?>
	<?php do_action( 'before_main_content' ); ?>
		<?php get_template_part( 'template-parts/home/hero' ); ?>
		<?php get_template_part( 'template-parts/home/middle' ); ?>
		<?php get_template_part( 'template-parts/home/footer' ); ?>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer(); ?>