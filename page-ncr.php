<?php

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<!-- NCR Authors on the Commons -->
			<div id="tool-group-authors" class="tool-group accent-blue">
				<header class="entry-header clear">
					<h1 class="entry-title">NCR Authors on the Commons</h1>
					<div id="tool-group-header-videos" class="tool-group-header clear">
						<img src="http://www.communitycommons.org/wp-content/uploads/2014/02/NCR-Liberty-bell-576x288.jpg" class="attachment-full" alt="Photo of the Liberty Bell">
						<p class="tool-group-description">Connect with movement leaders.</p>
					</div>
				</header>
		  	    <div class="content-row">
					<div class="tool-group-tool third-block authors">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://www.communitycommons.org/2014/01/national-civic-review/" title="Welcome from Monte Roulier">Welcome by Monte Roulier</a></h3>
						</header>
					</div>
					<div class="tool-group-tool third-block guest-voices">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://www.communitycommons.org/ncr-guest-voices/" title="Guest Voices">Guest Voices</a></h3>
						</header>
					</div>
					<div class="tool-group-tool third-block feature-stories">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://www.communitycommons.org/ncr-features-stories/" title="Featured Stories">Feature Stories</a></h3>
						</header>
					</div>			
				</div><!-- End .content-row -->
		    </div> <!-- .tool-group -->
		    <!-- NCR Special Issue Part 1 -->
			<div id="tool-group-ncr-special-issue" class="tool-group accent-red">
				<header class="entry-header clear">
					<h1 class="entry-title">NCR Special Issue Part 1</h1>
					<div id="tool-group-header-videos" class="tool-group-header clear">
						<img src="http://www.communitycommons.org/wp-content/uploads/2014/02/NCR-tyler-576x323.jpg" class="attachment-full" alt="Photo of Tyler Norris">
						<p class="tool-group-description">Explore NCR’s Special Issue</p>
					</div>
				</header>
		  	    <div class="content-row">
					<div class="tool-group-tool third-block authors">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://onlinelibrary.wiley.com/doi/10.1002/ncr.21142/full" title="Introduction by Tyler Norris">Introduction by Tyler Norris</a></h3>
						</header>
					</div>
					<div class="tool-group-tool third-block guest-voices">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://www.communitycommons.org/ncr-table-of-contents-with-synopses/" title="Table of Contents">Table of Contents</a></h3>
						</header>
					</div>
					<div class="tool-group-tool third-block feature-stories">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://onlinelibrary.wiley.com/doi/10.1002/ncr.v102.4/issuetoc" title="Link to the National Civic Review's site">National Civic Review Online Publication</a></h3>
						</header>
					</div>			
				</div><!-- End .content-row -->
			</div>
			<!-- NCL: All American City Award -->
			<div id="tool-group-aac-award" class="tool-group accent-green">
				<header class="entry-header clear">
					<h1 class="entry-title">NCR: All-America City Award</h1>
					<div id="tool-group-header-aac" class="tool-group-header clear">
						<img src="http://www.communitycommons.org/wp-content/uploads/2014/02/NCR-AAC-logo-576x219.jpg" class="attachment-full" alt="National Civic Review All-America City logo">
						<p class="tool-group-description">Become an All-America City.</p>
					</div>
				</header>
		  	    <div class="content-row">
					<div class="tool-group-tool third-block authors">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://www.ncl.org/index.php?option=com_content&view=article&id=102&Itemid=179" title="Background Information">Background Information</a></h3>
						</header>
					</div>
					<div class="tool-group-tool third-block aac-2014">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://www.ncl.org/index.php?option=com_content&view=article&id=186&Itemid=226" title="All-America cities 2014">All-America Cities 2014</a></h3>
						</header>
					</div>
					<div class="tool-group-tool third-block aac-application">
						<header class="entry-header clear">
							<h3 class="entry-title"><a href="http://www.ncl.org/index.php?option=com_jforms&view=form&id=2&Itemid=196" title="All-America City Application">Application</a></h3>
						</header>
					</div>			
				</div><!-- End .content-row -->
		    </div> <!-- .tool-group -->
 		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>