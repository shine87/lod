<?php get_header(); ?>

	<div id="main-content">
		<div id="content">
			<div id="boxes">
				<h2 class="searchtitle">Search Results for: &#8216;<?php echo get_search_query(); ?>&#8217;</h2>
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
									<figure><a><img src="<?php echo get_stylesheet_directory_uri() . '/images/noimage.png'; ?>" alt="noimage"></a></figure>
								<?php } ?>
								<div class="entry-meta">
							<span class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</span>
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
						<p>No posts matched your query.</p>
					</div>
				<?php
				}
				?>

			</div>
			<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if( $total_pages > 1 ) { ?>
				<nav id="page-nav-below" class="nav-below">
					<div id="page-nav-next" class="next-page"><?php previous_posts_link( '<span class="meta-nav">&larr;</span> Newer posts' ); ?></div>
					<div id="page-nav-prev" class="prev-page"><?php next_posts_link( 'Older posts <span class="meta-nav">&rarr;</span>' ); ?></div>
				</nav>
			<?php } ?>
		</div>
		<?php get_sidebar(); ?>
	</div><!-- #main-content -->

<?php get_footer(); ?>