<?php get_header(); ?>

<div class="container_24">
	<div class="grid_7"><div class="prefix_1 right-indent"><?php get_sidebar(); ?></div></div>
	<div class="grid_17 top-indent">
		<div id="content">
	<div class="indent">
  	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <article>
          <h1><?php the_title(); ?></h1>
          <?php edit_post_link('<small>Edit this entry</small>','',''); ?>
          <?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
    
          <div id="page-content">
            <?php the_content(); ?>
            <div class="pagination">
              <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
            </div><!--.pagination-->
          </div><!--#pageContent -->
		
		<div class="top-indent1"><?php if ( ! dynamic_sidebar( 'Sidebar Extra' ) ) : ?>
		<!--Wigitized 'Request' for the home page-->
		<?php endif ?></div>
		
        </article>
      </div><!--#post-# .post-->
    <?php endwhile; ?>
  </div>
</div><!--#content-->
	</div>
</div>
<?php get_footer(); ?>
