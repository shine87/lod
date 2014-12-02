<?php get_header(); ?>

	<div id="main-content">
		<div id="content">
			<div id="single-content">
				<?php
				while( have_posts() ) {
					the_post();
				?>
				<article id="single-post" <?php post_class(); ?>>
					<?php the_title('<h2 id="entry-title">','</h2>'); ?>
					<div id="entry-content">
						<div id="entry-img-feature">
							<?php
							if ( has_post_thumbnail()) {
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
								echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
								the_post_thumbnail( 'medium' );
								echo '</a>'; }
							?>
						</div>
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="page-link"><span>Pages: </span>', 'after'=>'</div>')); ?>
					</div>
					<?php tandc(); ?>
					<footer id="entry-footer">
						<div>Category: <span id="categories"><?php echo get_the_category_list( ', '); ?></span></div>
						<div>Tags: <span id="tags"><?php echo get_the_tag_list( '',', ','' ); ?></span></div>
					</footer>
				</article>
				<?php
				}
				?>
			</div>
			<div class="clear"></div>
			<nav id="page-nav-below" class="nav-below">
				<div id="post-nav-next" class="next-page"><?php next_post_link( '&laquo; %link' ); ?></div>
				<div id="post-nav-prev" class="prev-page"><?php previous_post_link( '%link &raquo;' ); ?></div>
			</nav>
			<?php comments_template( ); ?>
		</div>
		<?php get_sidebar(); ?>
	</div><!-- #main-content -->

<?php get_footer(); ?>