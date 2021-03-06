<!-- start content container -->
<style media="screen">
.tag-video .news-thumb img {
	display: none !important;
}

.credits-box {
  position: relative;
  right: 16px !important;
}

</style>
<div class="row pa">
	<article class="page-article col-md-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div <?php post_class(); ?>>
					<?php envo_magazine_thumb_img( 'envo-magazine-single', '', false, true ); ?>
					<div class="container-div">
					<?php the_title( '<h1 class="single-title">', '</h1>' ); ?>

					<time class="posted-on published" datetime="<?php the_time( 'Y-m-d' ); ?>"></time>
					<!-- <?php envo_magazine_widget_date_comments(); ?> -->
					<?php envo_magazine_author_meta(); ?>
					<div class="single-content">
						<div class="single-entry-summary">
							<!-- <?php do_action( 'envo_magazine_before_content' ); ?> -->
							<?php the_content(); ?>
							<!-- <?php do_action( 'envo_magazine_after_content' ); ?> -->
						</div><!-- .single-entry-summary -->
					</div>
						<?php wp_link_pages(); ?>
						<!-- <?php envo_magazine_entry_footer('cats'); ?> -->
                        <?php envo_magazine_entry_footer('tags'); ?>
					</div>
					<!-- <?php envo_magazine_prev_next_links(); ?> -->
					<?php get_footer(); ?>
					<?php
					// $authordesc = get_the_author_meta( 'description' );
					if ( !empty( $authordesc ) ) {
						?>
						<div class="single-footer row">
							<div class="col-md-4">
								<?php get_template_part( 'template-parts/template-part', 'postauthor' ); ?>
							</div>
							<div class="col-md-8">
								<?php comments_template(); ?>
							</div>
						</div>
					<?php } else { ?>
						<div class="single-footer">
							<?php comments_template(); ?>
						</div>
					<?php } ?>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</article>
	<?php get_sidebar( 'right' ); ?>
</div>
<!-- end content container -->
