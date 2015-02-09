<?php get_header(); ?>
<div class="container_24">
	<div class="grid_24">
		<div id="content" class="search prefix_1">
	<div class="indent">
    <h1><?php the_search_query(); ?></h1>
     <ul class="article-list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <li><span class="fright" style="text-align:right; padding-bottom:20px;">Posted by <?php the_author_posts_link() ?> on <?php the_time('F j, Y'); ?><br />
<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span><h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <div class="wrapper"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?></a> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
		      <div class="post-content">
		         <?php the_excerpt();?>
	           </div></div>
	 </li>
  
    <?php endwhile; else: ?>
      <li class="no-results">
        <h2>No Results</h2>
        <p>Please feel free try again!</p>
        <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
      </li><!--noResults-->
    <?php endif; ?>
  </ul>
    <nav class="oldernewer" style="margin-top:20px;">
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
    </nav><!--.oldernewer-->
  </div>
</div><!-- #content -->
	</div>
</div>
<?php get_footer(); ?>
