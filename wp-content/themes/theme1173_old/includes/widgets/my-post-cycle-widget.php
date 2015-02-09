<?php
// =============================== My Post Cycle widget ======================================
class MY_CycleWidget extends WP_Widget {
    /** constructor */
    function MY_CycleWidget() {
        parent::WP_Widget(false, $name = 'My - Post Cycle');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
				$limit = apply_filters('widget_title', $instance['limit']);
				$category = apply_filters('widget_category', $instance['category']);
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
						
						<?php if($category=="testi"){?>
							<div class="boxslideshow">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("post_type=" . $category);?>
								
								<?php while (have_posts()) : the_post(); ?>	
								
									<?php 
									$custom = get_post_custom($post->ID);
									$testiname = $custom["testimonial-name"][0];
									$testicompany = $custom["testimonial-company"][0];
									?>
								
								<div class="cycle">

								<?php if($limittext=="" || $limittext==0){ ?>
									<blockquote class="quote">
										<?php the_excerpt(); ?>
                  </blockquote>
									 <div class="name-testi">
									 <span class="user"><?php echo $testiname; ?></span>
									 <?php echo $testicompany; ?>
									 </div>
								<?php }else{ ?>
									<blockquote class="quote">
										<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext);?>
                  </blockquote>
									 <div class="name-testi">
									 <span class="user"><?php echo $testiname; ?></span>
									 <?php echo $testicompany; ?></div>
								<?php } ?>
								</div>
								<?php endwhile; ?>
								<?php wp_reset_query();?>
							</div>
							<!-- end of boxslideshow -->
						
						
						<?php } elseif($category=="banners-1"){?>
							
              
								<div id="header-banners">
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=4&post_type=" . $category); $post_counter = 0; ?>
								<?php while (have_posts()) : the_post(); $post_counter++ ?>	
									<?php if($limittext=="" || $limittext==0){ ?>
                  						<h3 class="style-<?php echo $post_counter; ?>"><a href="<?php the_permalink(); ?>" class="style-<?php echo $post_counter; ?>"><span><?php the_title(); ?></span></a></h3>
									<?php }else{ ?>
									<h3 class="style-<?php echo $post_counter; ?>"><a href="<?php the_permalink(); ?>" class="style-<?php echo $post_counter; ?>"><span><?php the_title(); ?></span></a></h3>
									<?php } ?>
								<?php endwhile; ?>
                <?php wp_reset_query(); ?>
			 </div>
			 
			 
			 <?php } elseif($category=="banners-2"){?>
							
              
								<div id="center-banners">
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=3&post_type=" . $category); ?>
								<?php while (have_posts()) : the_post(); ?>
									<?php if($limittext=="" || $limittext==0){ ?>	
                  						<a href="<?php the_permalink(); ?>" class="block"><div class="inside"><h3><?php the_title(); ?></h3><?php the_excerpt(); ?></div></a>
									<?php }else{ ?>
									<a href="<?php the_permalink(); ?>" class="block"><div class="inside"><h3><?php the_title(); ?></h3><?php the_excerpt(); ?></div></a>
									<?php } ?>
								<?php endwhile; ?>
                <?php wp_reset_query(); ?>
			 </div>
			 
			 <?php } elseif($category=="banners-3"){?>
							
              
								<div id="right-banners">
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=5&post_type=" . $category); $post_counter = 0; ?>
								<ul>
								<?php while (have_posts()) : the_post(); $post_counter++ ?>	
									<?php $custom = get_post_custom($post->ID);
								     $fL = $custom["first-letter"][0]; ?>	
									<?php if($limittext=="" || $limittext==0){ ?>
                  						<li class="block block-<?php echo $post_counter; ?>"><strong><?php echo $fL; ?></strong><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
									<?php }else{ ?>
									<li class="block block-<?php echo $post_counter; ?>"><strong><?php echo $fL; ?></strong><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
									<?php } ?>
								<?php endwhile; ?>
								</ul>
                <?php wp_reset_query(); ?>
			 </div>
			 
			  <?php } elseif($category=="portfolio"){?>
			 
			 <div class="folio">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=1&post_type=" . $category); ?>
								<?php while (have_posts()) : the_post(); ?>
								<?php $custom = get_post_custom($post->ID);
      							$url = $custom["site-url"][0]; ?>	
								<div class="cycle">
									<?php if($limittext=="" || $limittext==0){ ?>
									<div class="featured-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                  <h4>Project name:<br />
<?php the_title(); ?></h4>
									<?php the_excerpt(); ?>
									<a href="<?php echo $url; ?>"><b>visit website</b></a>
									<div class="clear"></div>
									<div class="bottom-links"><a href="<?php bloginfo('url'); ?>/?page_id=8">view more projects</a><a href="<?php the_permalink(); ?>">read more</a></div>
									
									<?php }else{ ?>
									<div class="featured-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                  <h4>Project name:<br />
<?php the_title(); ?></h4>
									<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); ?>
									<a href="<?php echo $url; ?>"><b>visit website</b></a>
									<div class="clear"></div>
									<div class="bottom-links"><a href="<?php bloginfo('url'); ?>/?page_id=8">view more projects</a><a href="<?php the_permalink(); ?>">read more</a></div>
									<?php } ?>
								</div>
								<?php endwhile; ?>
								<?php wp_reset_query();?>
							</div>
			 
            
            
						<?php } else { ?>
						
							<div class="boxslideshow">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=3&post_type=" . $category);?>
								<ul class="article-list">
								<?php while (have_posts()) : the_post(); ?>	
								<li class="cycle">
									<?php if($limittext=="" || $limittext==0){ ?>
									<div class="featured-thumbnail"><a href="<?php the_permalink(); ?>"><span class="small-thumbnail"><?php the_post_thumbnail(); ?></span></a></div>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
									<?php }else{ ?>
									<div class="featured-thumbnail"><a href="<?php the_permalink(); ?>"><span class="small-thumbnail"><?php the_post_thumbnail(); ?></span></a></div>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); ?>
									<?php } ?>
								</li>
								<?php endwhile; ?>
								</ul>
								<?php wp_reset_query();?>
							</div>
							<!-- end of boxslideshow -->
							<?php }?>
              <?php echo $after_widget; ?>
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
			$title = esc_attr($instance['title']);
			$limit = esc_attr($instance['limit']);
			$category = esc_attr($instance['category']);
    ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'theme1173'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit Text:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Post Type:', 'theme1173'); ?><br />

      <select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" style="width:150px;" > 
      <option value="portfolio" <?php echo ($category === 'portfolio' ? ' selected="selected"' : ''); ?> >Portfolio</option>
	 <option value="banners-1" <?php echo ($category === 'banners-1' ? ' selected="selected"' : ''); ?> >Top Banners</option>
	 <option value="banners-2" <?php echo ($category === 'banners-2' ? ' selected="selected"' : ''); ?> >Center Banners</option>
	 <option value="banners-3" <?php echo ($category === 'banners-3' ? ' selected="selected"' : ''); ?> >Right Banners</option>
      <option value="" <?php echo ($category === '' ? ' selected="selected"' : ''); ?>>Blog</option>
      </select>
      </label></p>
      <?php 
    }

} // class Cycle Widget


?>