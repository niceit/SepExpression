<?php get_header(); ?>




<div class="container_24">

	
    
	<div class="grid_24 top-indent">
		<div id="content">
	<div class="indent">
  	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      
      <h1 align="center"><?php the_title(); ?></h1>
      
        <div class="gridview">
        <article>
        
        <div class="gridfirstrow">
        <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '13' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo '<div class="griddescription">' . the_content() . '</div>';
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>
          
  <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '14' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo the_content();
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>
                
        <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '15' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo the_content();
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>             
       
        <div style="clear:both;"></div>
        
        </div>
        
        
        
        <div class="gridfirstrow">
        <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '16' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo '<div class="griddescription">' . the_content() . '</div>';
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>
          
  <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '17' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo the_content();
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>
                
        <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '18' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo the_content();
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>             
       
        <div style="clear:both;"></div>
        
        <!--end gridfirstrow--></div>
        
        
        
        <div class="gridfirstrow">
        <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '19' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo '<div class="griddescription">' . the_content() . '</div>';
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>
          
  <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '20' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo the_content();
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>
                
        <div class="gridcolumn">     
         <?php $cwwp_query = new WP_Query( 
	array( 
		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'cat'               => '21' 
	) 
);

if ( $cwwp_query->have_posts() ) :
	while ( $cwwp_query->have_posts() ) :
		$cwwp_query->the_post();
		echo the_post_thumbnail();		
		echo '<div class="gridheading">' . get_the_title() . '</div>';		
		echo the_content();
		endwhile; 
		endif; 
		wp_reset_postdata(); ?>
        </div>             
       
        <div style="clear:both;"></div>
        
        <!--end gridfirstrow--></div>
        
        
          
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
        </div> 
               
        <?php echo do_shortcode('[ahm-pricing-table id=109]'); ?>
        
        
      </div><!--#post-# .post-->
    <?php endwhile; ?>
  </div>
</div><!--#content-->
	</div>
</div>





<?php get_footer(); ?>
