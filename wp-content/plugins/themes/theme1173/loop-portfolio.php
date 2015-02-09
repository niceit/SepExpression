<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 */
?>


<div class="container_24"><div class="grid_24"><div class="prefix_1"><?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'theme1173' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'theme1173' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>
<div id="gallery">
  <ul class="portfolio">
    <?php 
      $i=1;
      if ( have_posts() ) while ( have_posts() ) : the_post(); 
      if(($i%3) == 0){ $addclass = "nomargin";	}	
    ?>
    
    
    <?php
      $custom = get_post_custom($post->ID);
      $cf_thumb = $custom["thumb"][0];
      $cf_lightbox = $custom["lightbox"][0];
      
      if($cf_thumb!=""){
        $cf_thumb = "<img src='" . $cf_thumb . "' alt=''  width='290' height='150' />";
      }
    ?>
    <?php $custom = get_post_custom($post->ID);
      							$url = $custom["site-url"][0]; ?>
    
      <li class="<?php echo $addclass; ?>">
      <span class="frame-image-top"></span>
      <?php if($cf_lightbox!=""){ ?>
      <a class="image" href="<?php echo $cf_lightbox;?>" rel="prettyPhoto[mixed]" title="<?php the_title();?>"><?php if($cf_thumb!=""){ echo $cf_thumb; }else{ the_post_thumbnail( 'portfolio-post-thumbnail' );} ?></a>
    <?php }else{ ?>
      <a href="<?php the_permalink() ?>" title="<?php _e('Permanent Link to', 'theme1173');?> <?php the_title_attribute(); ?>" ><?php if($cf_thumb!=""){ echo $cf_thumb; }else{ the_post_thumbnail( 'portfolio-post-thumbnail' );} ?></a>
      <?php } ?>
      <div class="pf-desc wrapper"><span class="fleft">Project name:<br /><?php $title = the_title('','',FALSE); echo substr($title, 0, 40); ?></span>
	 <span class="fright"><a href="<?php the_permalink(); ?>">read more</a></span></div>
      <span class="frame-image-bottom"></span>
      </li>
    
  
    <?php $i++; $addclass = ""; endwhile; ?>
  </ul>
  <div class="clear"></div>
</div>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
<br class="clr" />
<div id="nav-below" class="navigation nav2">
  <div class="nav-previous"><?php next_posts_link( __( '<span class="prev"><span class="meta-nav">&laquo;</span> Prev</span>', 'theme1173' ) ); ?></div>
  <div class="nav-next"><?php previous_posts_link( __( '<span class="prev">Next <span class="meta-nav">&raquo;</span></span>', 'theme1173' ) ); ?></div>
</div><!-- #nav-below -->
<?php endif; ?></div></div></div>
