<?php
/**
 * Template Name: Blog
 *
 *
*/
get_header(); ?>
<div class="container_24">
	<div class="grid_19">
		<div id="content" class="right-indent prefix_1">
  	   <h1><?php the_title(); ?></h1>
		   <?php query_posts('post_type=post&paged='.$paged); ?>
		   <ul class="article-list">
		   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		   <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>><span class="fright" style="text-align:right; padding-bottom:20px;">Posted by <?php the_author_posts_link() ?> on <?php the_time('F j, Y'); ?><br />
<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
		      <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				      <div class="wrapper"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?></a> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
		      <div class="post-content">
		         <?php the_excerpt();?>
	           </div></div>
	        </li>
		   
	        <?php endwhile; else: ?>
		   
		   
		   <li class="no-results">
		      <p><strong>There has been an error.</strong></p>
             <p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
             <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
	        </li>
		   <!--noResults-->
	        <?php endif; ?>
		   </ul>
		   
	        <nav class="oldernewer">
	           <div class="older">
	              <p>
	                 <?php next_posts_link('&laquo; Older Entries') ?>
                   </p>
           </div><!--.older-->
	           <div class="newer">
	              <p>
	                 <?php previous_posts_link('Newer Entries &raquo;') ?>
                   </p>
           </div><!--.older-->
               </nav>
		   <!--.oldernewer-->
		   <?php wp_reset_query(); ?>
	           </div><!--#content-->
	</div>
	<div class="grid_5"><?php get_sidebar(); ?></div>
</div>
<?php get_footer(); ?>
