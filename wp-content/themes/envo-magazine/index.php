<!-- <style media="screen">
	.tag-video {
		/* display: none; */
	}
</style> -->
<?php get_header(); ?>

<?php get_template_part( 'template-parts/template-part', 'head' ); ?>

<?php if ( !is_paged() && is_front_page() ) {
	envo_magazine_home_widgets();
} ?>
<!-- start content container -->
<div class="row">
<?php
videoCarousel();
// videoCarousel2();
 ?>
	<div class="home-articles col-md-<?php envo_magazine_main_content_width_columns(); ?>">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;
      loadMoreButton();
			// the_posts_pagination();
//
// echo do_shortcode('[ajax_load_more]');

// echo do_shortcode('[ajax_load_more container_type="div" post_type="post" button_label="Leggi Ancora"]');

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

	</div>

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
