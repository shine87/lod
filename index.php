<?php get_header(); ?>

	<div id="main-content">
		<div id="content">
			<div id="boxes">

<?php
if( have_posts() ) {
	while( have_posts() ) {
		the_post();
?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'singlebox' ); ?>>
					<div class="isinglebox">
<?php if( has_post_thumbnail() ) { ?>
						<figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'boxthumb' ); ?></a></figure>
<?php } else { ?>
						<figure><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/noimage.png'; ?>" alt="noimage"></a></figure>
<?php } ?>
						<div class="entry-meta">
							<h1 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h1>
							<span class="entry-date">
								<?php the_time( 'd F Y' ); ?>
							</span>
						</div>
					</div>
				</article>
<?php
	}
} else {
?>
				<div id="no-post">
					<p>Nothing published yet.</p>
				</div>
<?php
}
?>

			</div>
			<nav class="nav-below nav-num" id="page-nav-below">
				<?php echo paginate_links(array('mid_size' => 10)); ?>
			</nav>
		</div>
		<?php get_sidebar(); ?>
	</div><!-- #main-content -->

<?php get_footer(); ?>