<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php 
 wp_enqueue_script('jquery');
 wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');
 wp_enqueue_script('flexslider', get_stylesheet_directory_uri() .'/js/jquery.flexslider-min.js');
 wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js');
 wp_enqueue_script('pngfix', get_stylesheet_directory_uri() .'/js/DD_belatedPNG.js');
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">  <!-- wrapper begin -->

<div id="slide">
<?php if ( is_front_page() ) { ?>
<div class="flexslider">
	<div class="overlays"></div>
	<ul class="slides">
	<?php 
		$slide = get_option('sosa_slide_cat');
		$count = get_option('sosa_slide_count');
		$slide_query = new WP_Query( 'category_name='.$slide.'&posts_per_page='.$count.'' );
		while ( $slide_query->have_posts() ) : $slide_query->the_post();
	?>	
	<li>
	<img class="slidimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=600&amp;w=1280&amp;zc=1" alt=""/>
	<div class="flex-caption">
	<h2><?php the_title(); ?></h2>
	<span>	<?php wpe_excerpt('wpe_excerptlength_slide', ''); ?></span>
	</div>
	</li>
	<?php endwhile; ?>
	</ul>
	
</div>
<?php } ?>
</div>

<div id="masthead"><!-- masthead begin -->
	<div id="head">
		<div id="top"> 
			<div id="blogname">	
				<h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
			</div>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</div>
		<div id="botmenu">
			<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
		</div>
	</div><!--end masthead-->
</div>

<div id="casing">