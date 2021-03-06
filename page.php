<?php get_header(); ?>

	<div id="main-content">
		<div id="content">
			<div id="single-content">
				<?php
				while( have_posts() ) {
					the_post();
					?>
					<article id="single-entry" <?php post_class(); ?>>
						<h2 id="entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h2>
						<div id="entry-content">
							<?php the_content(); ?>
						</div>
					</article>
				<?php
				}
				?>
			</div>
			<div class="clear"></div>
			<?php comments_template( ); ?>
		</div>
		<?php get_sidebar(); ?>
	</div><!-- #main-content -->

<?php get_footer(); ?>