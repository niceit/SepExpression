<?php
/**
 * Template Name: Portfolio
 *
 * A custom page template without sidebar.
 *
*/

get_header(); ?>

<div id="full-width">
  <div id="content">
  		<?php include_once (TEMPLATEPATH . '/title.php');?>   
      
      <?php $values = get_post_custom_values("category-include"); $cat=$values[0];  ?>
      <?php global $more;	$more = 0;?>
      <?php $wp_query = new WP_Query(); ?>
      <?php $catinclude = 'portfoliocat='. $cat ;?>
      <?php $wp_query->query("post_type=portfolio" . '&' . $catinclude .' &paged='.$paged.'&showposts=9'); ?>
      <?php get_template_part( 'loop', 'portfolio' );?>
  
  </div><!-- #content -->
</div>
<!-- end #main -->
<?php get_footer(); ?>
