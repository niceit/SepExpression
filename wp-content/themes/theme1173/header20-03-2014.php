<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} else {
			echo wp_title( ' | ', false, right ); bloginfo( 'name' );
		} ?>
	</title>
	<!--
		Semi dynamic meta keywords and meta description. Google likes meta info that changes for each page.
		While these meta keywords are not ideal and the meta description could be better, they are better than nothing.
	-->
	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 7]>
	   <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	 <![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/grid.css" />
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
  <script type="text/javascript">
  	// initialise plugins
		jQuery(function(){
			// main navigation init
			jQuery('ul.sf-menu').superfish({
				animation:   {opacity:'show', height:'show'}
			});
			
			jQuery('#widget-header #header-banners h3 a').hover(function(){
			  	jQuery(this).stop().animate({ "backgroundPosition":"0 0"}, "fast")
			},function() {  
                 	jQuery(this).stop().animate({ "backgroundPosition":"0 -81px"}, "fast")
               });
			
			jQuery('#center-banners a.block').hover(function(){
			  	jQuery(this).stop().animate({ "backgroundPosition":"0 0"}, "fast")
			},function() {  
                 	jQuery(this).stop().animate({ "backgroundPosition":"0 -141px"}, "fast")
               });
			
			jQuery(".social-networks a").easyTooltip({
				yOffset: 35
			});
			
		});
  </script>
</head>

<body <?php body_class(); ?>>

<div class="tail-top">
<div id="main"><!-- this encompasses the entire Web site -->
	<header>
		<div class="container_24">
			<div class="grid_24"><div class="logo">
      	<?php if( is_front_page() || is_home() ) { ?>
          <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } else { ?>
          <h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>
        <?php } ?>
      </div>
			<nav class="primary">
        <?php wp_nav_menu( array(
					'container'       => 'ul', 
					'menu_class'      => 'sf-menu', 
					'menu_id'         => 'topnav',
					'depth'           => 0,
					'theme_location' => 'header_menu' 
					)); 
				?>
			</nav><!--.primary-->
			<div id="widget-header">
				<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?>
					<!-- Wigitized Header -->
				<?php endif ?>
			</div></div>
		</div><!--.container-->
	</header>
	<div id="top-sidebar-wrap"><div class="container_24 extra-wrap">
		<div class="grid_24">
			<div id="top-sidebar">
				<?php if ( ! dynamic_sidebar( 'Top Sidebar' ) ) : ?>
					<!-- Wigitized Header -->
				<?php endif ?>
			</div>
		</div>
	</div></div>
	<div class="container primary_content_wrap">
  	<div class="wrapper">
    
  <?php
  if(strpos($_SERVER['REQUEST_URI'],'?cat=')===false) 
  {  
 
}
else
{
	
  $string=$_SERVER['REQUEST_URI'];
$aa=strrchr($string,'?cat=');
$id=str_replace('?cat=','',$aa);

if($id=='28')
{
	//echo"id-$id<br>";
 //header('location:http://seoparaemprendedores.ipage.com/?page_id=45');
 echo"<script>window.location='http://seoparaemprendedores.ipage.com/?page_id=45';</script>";

}
  }
?>