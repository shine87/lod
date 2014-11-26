<?php get_header(); ?>

	<div id="main-content">
		<div id="content">
			<div id="single-content">
				<?php
				while( have_posts() ) {
					the_post();
					?>
					<article id="single-post" <?php post_class(); ?>>
						<h2 id="post-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h2>
						<div id="post-content">
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