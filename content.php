<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
// If the post has no thumbnail, we need to do a few things differently.
$has_thumbnail = has_post_thumbnail() ? true : false;
$is_search = is_search();
$is_category = is_category();
// is_home() is true on the blog page, but not on the home page with a static home page.
// is_front_page() is true on the static home page.
$is_blog = is_home();
$is_sticky = is_sticky();
$is_first_post = ( $wp_query->current_post == 0 && ! is_paged() ) ? true : false ;

// Set post class
$post_class = 'clear';
if ( ! $has_thumbnail ) {
	$post_class .= ' no-thumbnail';
}
if ( $is_sticky ) {
	$post_class .= ' sticky';
}
if ( $is_first_post ) {
	$post_class .= ' first-article';
} else {
	$post_class .= ' compact';
}
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>
		<?php //if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<!-- <div class="featured-post">
			<?php // _e( 'Featured post', 'twentytwelve' ); ?>
		</div> -->
		<?php //endif; ?>
		<header class="entry-header<?php if ( $is_first_post ) { echo " clear"; } ?>">
			<?php if ( is_single() ) : ?>
				<?php if ( $has_thumbnail ) {
					the_post_thumbnail( 'feature-large' );
					} ?>
				<h1 class="entry-title <?php if ( ! $has_thumbnail ) echo 'no-thumbnail'; ?>"><?php the_title(); ?></h1>
			<?php else : ?>
				<?php if ( $has_thumbnail && ! $is_search ) :
					$thumbnail_size = $is_first_post ? 'feature-large' : 'feature-front-sub';
					// if ( $is_first_post ) {
					// 	$thumbnail_size = 'feature-large';
					// }
					?>
				   	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				   	<?php the_post_thumbnail( $thumbnail_size ); ?>
				   	</a>
			   	<?php endif; ?>
		   	<?php
			//Don't add the category flag if we're in a category or on the search results
			if ( ! $is_category && ! $is_search ) {
				echo '<p class="category-links">' . get_the_category_list( __( '&#8203;', 'twentytwelve' ) ) . '</p>';
			}
			?>
			<h1 class="entry-title <?php if ( ! $has_thumbnail ) echo 'no-thumbnail'; ?>">
				<?php // If this is the search results, flag the post type
				if ( $is_search ) {
					cc_post_type_flag();
				}
				?><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
			<?php //if ( comments_open() ) : ?>
				<!-- <div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div> --><!-- .comments-link -->
			<?php //endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( $is_search || $is_category || $is_blog ) : // Display excerpts for search and category top story. ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Read more', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
		<?php
		// if ( function_exists('bp_share_favorite_post_button') ) {
		// 		bp_share_favorite_post_button( $post->ID );
		// 	}
		if ( is_single() ) :
			if ( function_exists('cc_add_comment_button') ) {
						cc_add_comment_button();
				}
			if ( function_exists('love_it_button') ) {
					love_it_button();
				}
			if ( function_exists('bp_share_post_button') ) {
					bp_share_post_button();
				}
		endif; // is single()
		// if ( is_single() ) :
				?>
			<footer class="entry-meta">
				<?php twentytwelve_entry_meta(); ?>
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
				<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
					<div class="author-info">
						<div class="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 68 ) ); ?>
						</div><!-- .author-avatar -->
						<div class="author-description">
							<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
							<p><?php the_author_meta( 'description' ); ?></p>
							<div class="author-link">
								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
								</a>
							</div><!-- .author-link	-->
						</div><!-- .author-description -->
					</div><!-- .author-info -->
				<?php endif; ?>
			</footer><!-- .entry-meta -->
		<?php //endif; // is_single ?>
	</article><!-- #post -->