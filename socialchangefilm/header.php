<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package socialChangeFilm
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
<!--Custom Imported font to look as close to Gotham Rounded as possible-->
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- Script for sticky header -->
<script>
    jQuery(document).ready(function() {
        jQuery(".main-navigation").sticky({
            topSpacing: 0,
            getWidthFrom: '.site-branding'
        });
    });
    </script>
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <script>
    window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
    </script>

    <script>
  $('#site-navigation').on('sticky-start', function() { console.log("Started"); });
  $('#site-navigation').on('sticky-end', function() { console.log("Ended"); });
</script>
    
    
    
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'socialchangefilm' ); ?></a>

	<header id="masthead" class="site-header" role="fbanner">
		<div class="site-branding">
            <img src="http://localhost/wordpress/wp-content/uploads/2015/02/CISCFF_Logo.jpg"/>            

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<span class="mainNavSpan"><button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'socialchangefilm' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </span> 
		</nav><!-- #site-navigation -->
        <div class="powerButton">
            <a href="#" class="smoothScroll">
                <img src="http://localhost/wordpress/wp-content/uploads/2015/02/CISCFF_Img_-1.png" />
            </a>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
