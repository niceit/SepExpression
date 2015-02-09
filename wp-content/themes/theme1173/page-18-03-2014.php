<?php get_header(); ?>

<div class="container_24">
<div class="grid_24 top-indent">
		<div id="content">
	<div class="indent">
  	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      
      <?php if(is_page(45)) {?>
      
      <?php }else{ ?>
      <h3><?php the_title(); ?></h3>
      <article>
      <?php } ?>
      
      
      <div class="topPara">
      <?php if(is_page(45)) {?>
       <?php query_posts( 'cat=23' );?>   
       <?php while(have_posts()) : the_post() ?>  
       <div class="InnerPageheading">
          <?php the_title() ; ?>
          </div>        
          <?php the_content() ; ?>
       
       <?php endwhile; wp_reset_query(); ?>
      </div>
       <?php } ?>

    
      <div class="gridview">
      <?php if(is_page(45)) {?>
      
       
       <?php query_posts( 'cat=22' );?>   
       <?php while(have_posts()) : the_post() ?>
       
       <div class="gridcolumn"> 
       <?php if(has_post_thumbnail()){ ?>
       <?php the_post_thumbnail(); ?>
       <?php } ?>
       <div class="gridheading">
          <?php the_title() ; ?>
          </div>
          <div class="griddescription">
          <?php the_content() ; ?>
          </div>
          </div>
       
       <?php endwhile; wp_reset_query(); ?>
      </div>
       <?php } ?>
       
       
      </article>
      <br />
      <br />
         <div class="gridheading"> Planes de Consultoría </div>
       <?php if(is_page(45)) {?>
       <?php echo do_shortcode('[ahm-pricing-table id=109]'); ?>        
       <?php } ?>
        
        <br />
        <br />
        
         <?php the_content(); ?>
        
     
      </div><!--#post-# .post-->
    <?php endwhile; ?>
  </div>
</div><!--#content-->
	</div>
    
    
    
</div>





<?php get_footer(); ?>
