<?php
/*
Template Name: Salud America
*/

get_header(); ?>
<div class="salud-header clear">
	<a href="#" class="logo"><img src="/wp-content/themes/CommonsRetheme/img/SA-logox200.png" class=""></a>
	<h1>Salud America! <br />Advocacy Program</h1>
	<h3>Get involved in reducing latino childhood obesity.</h3>
	<div class="sa-kids-photo"><img src="/wp-content/themes/CommonsRetheme/img/sa-kids-335.png"></div>

</div>
<?php get_sidebar( 'salud-single' ); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="padder">
			<?php if (is_page('sapolicies')) {
				//Do the custom query here, I think
				//echo 'this is that page';
				//First, display the content of the page before making the custom loop.
				$page_content = get_the_content();
				if ( !empty( $page_content ) ) {
					echo '<p class="page-intro">';
					echo $page_content;
					echo '</p>';
				} ?>
				<div class="policy-search">
					<form id="sa-policy-search" class="standard-form" method="get" action="/">
					<h3>Search for Policies</h3>
					<input id="sa-policy-search-text" class="sa-policy-input" type="text" maxlength="150" value="" placeholder="Not a functional search yet." name="sa-policy">
					<input class="sa-policy-search-button" type="submit" value="Search">
					</form>
				</div>
				<?php //Now we make our loop
				wp_reset_postdata();
			  	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$args = array(
					// Change these category SLUGS to suit your use.
					'post_type' => 'sapolicies', 
					'paged' => $paged
				);

				$list_of_policies = new WP_Query( $args ); 

				while ( $list_of_policies->have_posts() ): $list_of_policies->the_post();
					//This template should be the short result
					get_template_part( 'content', 'sa-policy-short' );
					//comments_template( '', true );
				endwhile; // end of the loop.

			} else {

				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page-notitle' );
					comments_template( '', true );
				endwhile; // end of the loop. 

			}?>

		</div><!-- .padder -->
		</div><!-- #content -->
		<div class="salud-footer">	
			<a href="#"><img src="/wp-content/themes/CommonsRetheme/img/salud-video-still.jpg" class=""></a>
			<p>Salud America! is a RWJF-funded national network dedicated to supporting advocacy for the prevention of Latino childhood obesity. The advocacy platform is the online portal for this effort.</p>
		</div>
	</div><!-- #primary -->
<?php get_footer(); ?>