<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="box clearfix" id="post-<?php the_ID(); ?>">
	<div class="postim">
		<a href="<?php the_permalink() ?>"><img class="postimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=250&amp;w=250&amp;zc=1" alt=""/></a>
	</div>
		
	<div class="boxright">	
	
	<div class='datebox'>
		<span class='date'><?php the_time('d'); ?></span>
		<span class='month'><?php the_time('M'); ?></span>
	</div>
	
	<div class="postmeta">
		<span>Posted by <?php the_author(); ?> </span> <span><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?></span> 
	</div>
	
	<div class="btitle">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	</div>
	
	<div class="entry">
		<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
		<div class="clear"></div>
	</div>

	</div>
	
</div>

<?php endwhile; ?>

<div class="clear"></div>
<?php getpagenavi(); ?>
<?php else : ?>
		<h1 class="title">Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
  
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>