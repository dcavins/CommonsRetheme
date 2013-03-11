<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="site-navigation" class="primary-navigation" role="navigation">
		<!-- <h1 class="brand">Community Commons</h1>
		<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3> -->
		<a href="#" class="menu-toggler button" id="menu-toggler">Menu</a>
		<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<div class="brand"><a href="/" title="Home" >Community Commons</a></div>
			<ul class="nav-container">
			<ul class="links">
				
				<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); 
				$args = array(
					'theme_location' => 'primary',
					'menu'            => '', 
					'container'       => 'false', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class' 	=> 'nav-menu',
					'menu_id'         => 'menu-{menu slug}[-{increment}]',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '%3$s',
					'depth'           => 0,
					'walker'          => ''
					);
				wp_nav_menu( $args );

				?>
			</ul>
			<ul class="secondary">
				<li id="cc-primary-search" class="expanding-search">
					<div class="" tabindex="-1">
					<form id="cc-navbar-search" method="get" action="<?php echo home_url('/'); ?>">
					<input id="cc-navbar-search-text" class="cc-nav-input searchx18" type="text" maxlength="150" value="" name="s">
					<input class="cc-navbar-search-button" type="submit" value="Search">
					</form>
					</div>
				</li>
				
				<?php if (is_user_logged_in()) { //show user info if logged in ?>
					<li class="menupop clear">
					<?php echo bp_core_get_userlink( bp_loggedin_user_id() ); ?>
					<div class="pop-sub-wrapper user-quicklinks">
						<a href="<?php echo bp_loggedin_user_domain(); ?>" title="View my profile" class="avatar"><?php bp_loggedin_user_avatar('width=48&height=48'); ?>
						</a>
						<ul>
							<li>
								<a href="<?php echo bp_loggedin_user_domain() . 'profile'; ?>" title="View my profile"><?php _e( 'View My Profile', 'buddypress' ) ?></a>
							</li>
							<li>
								<a href="<?php echo wp_logout_url( home_url() ); ?>" title="Log out"><?php _e( 'Log Out', 'buddypress' ) ?></a>
							</li>
						</ul>
					</div>
					</li>
        			<?php //bp_loggedin_user_avatar('width=24&height=24');  
        		} else { //show login and register links if not logged in ?>
        		<li>
        			<?php printf( __( '<a href="%s" title="Create an account">Register</a>', 'buddypress' ), site_url( bp_get_signup_slug() . '/' ) ) ?>
        		</li>
        		<li id="login-item" class="clear">
	        		<a class="login-link" href="<?php echo wp_login_url( $_SERVER['REQUEST_URI'] ); ?>" title="Log in"><?php _e( 'Log in', 'buddypress' ) ?></a>
        			<div class="pop-sub-wrapper">
        				<form name="login-form" id="sidebar-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ) ?>" method="post">
							<label><?php _e( 'Username', 'buddypress' ) ?><br />
							<input type="text" name="log" id="sidebar-user-login" class="input" value="<?php if ( isset( $user_login) ) echo esc_attr(stripslashes($user_login)); ?>" tabindex="97" /></label>

							<label><?php _e( 'Password', 'buddypress' ) ?><br />
							<input type="password" name="pwd" id="sidebar-user-pass" class="input" value="" tabindex="98" /></label>

							<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="sidebar-rememberme" value="forever" tabindex="99" /> <?php _e( 'Remember Me', 'buddypress' ) ?></label></p>

							<?php do_action( 'bp_sidebar_login_form' ) ?>
							<input type="submit" name="wp-submit" id="sidebar-wp-submit" value="<?php _e( 'Log In', 'buddypress' ); ?>" tabindex="100" /> &nbsp;&nbsp;&nbsp;&nbsp; <button id="cancel-login">Cancel</button>
							<input type="hidden" name="redirect_to" value="<?php $_SERVER['REQUEST_URI'] ?>" />
							<input type="hidden" name="testcookie" value="1" />
						</form>
        			</div>
        		</li>
        		

        		<?php } ?>
        		
				<?php notifications_counter(); ?>
			</ul>
		</ul><!-- End nav-container -->
			<div class="clear"></div>
		</div>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#menu-toggler').click(function(){
				jQuery(".nav-container").toggleClass('toggled');
		     return false;
			});

			//JS to show login form on hover
			var config = {    
			     over: showLogin, // function = onMouseOver callback (REQUIRED)    
			     timeout: 500, // number = milliseconds delay before onMouseOut    
			     out: function(){} // function = onMouseOut callback (REQUIRED)    
			};

			jQuery("#login-item").hoverIntent( config );

			function showLogin() {
				jQuery("#login-item").addClass('toggled');
				jQuery("#login-item .pop-sub-wrapper").addClass('toggled');
				jQuery("#sidebar-user-login").focus();

			}

			//JS to close login form via cancel button
			jQuery('#cancel-login').click(function(){
				jQuery("#login-item").removeClass('toggled');
				jQuery("#login-item .pop-sub-wrapper").removeClass('toggled');
		     return false;
			});


		});
	</script>


	<!-- <div class="navbar">
	    <div class="navbar-inner">
		    <a class="brand" href="#">Title</a>
		    <ul class="nav">
		    <li class="active"><a href="#">Home</a></li>
		    <li><a href="#">Link</a></li>
		    <li><a href="#">Link</a></li>
		    </ul>
	    </div>
    </div> -->
	</div><!-- #site-navigation -->

	<div id="page" class="hfeed site">

	<!-- <header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header> --><!-- #masthead -->

	<div id="main" class="wrapper">