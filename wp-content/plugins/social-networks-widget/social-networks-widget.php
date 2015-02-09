<?php
/*
Plugin Name: Social Networks Widget
Description: Adds a widget which lets you link to social media presences
Author: Frankie Roberto
Author URI: http://www.frankieroberto.com
Version: 0.2
*/

class SocialNetworksWidget extends WP_Widget {

	function SocialNetworksWidget() {
		$widget_ops = array('classname' => 'social_networks_widget', 'description' => __('Link to your social networks.'));
		$this->WP_Widget('social_networks', __('Social Networks'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$title_link = strip_tags($instance['title_link']);		
    if (!empty( $title_link) ) { $title_page = get_post($title_link); }
		
		$networks['Twitter'] = $instance['twitter'];
		$networks['Facebook'] = $instance['facebook'];
		$networks['LinkedIn'] = $instance['linkedin'];
		$networks['Flickr'] = $instance['flickr'];
		$networks['google'] = $instance['google'];

		$display = $instance['display'];
		

		echo $before_widget;
		echo $before_title;
		if (!empty( $title_link) ) { echo "<a href=\"" . get_permalink($title_page->ID) . "\">"; } 
		  if (empty( $title) ) { echo $title_page->post_title;}
		  else { echo($title); }
		if (!empty( $title_link) ) { echo "</a>"; } 
		echo $after_title;
		?>
		
			<ul class="social-networks">
				
					<?php foreach(array("Twitter", "Facebook", "Flickr", "google", "LinkedIn") as $network) : ?>
			    <?php if (!empty($networks[$network])) : ?><li><a rel="external" href="<?= $networks[$network] ?>"><?php if (($display == "both") or ($display =="icons")) { ?><img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2014/05/<?php echo strtolower($network);?>.png" alt=""><?php } if (($display == "labels") or ($display == "both")) {?> <?php echo $network; ?><?php } ?></a></li><?php endif; ?>
					<?php endforeach; ?>
			      
      </ul>
      
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['title_link'] = $new_instance['title_link'];
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['flickr'] = $new_instance['flickr'];
		$instance['google'] = $new_instance['google'];

		$instance['display'] = $new_instance['display'];

		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '', 'title_link' => '' ) );
		$title = strip_tags($instance['title']);
		$title_link = strip_tags($instance['title_link']);		
		$twitter = $instance['twitter'];		
		$facebook = $instance['facebook'];		
		$linkedin = $instance['linkedin'];		
		$flickr = $instance['flickr'];		
		$google= $instance['google'];		

		$display = $instance['display'];		


		$text = format_to_edit($instance['text']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

    <p><label for="<?php echo $this->get_field_id('title_link'); ?>"><?php _e('Title link'); ?></label>     
    <?php wp_dropdown_pages(array('selected' => $title_link, 'name' => $this->get_field_name('title_link'), 'show_option_none' => __('None'), 'sort_column'=> 'menu_order, post_title'));?>
    </p>

		<p><label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" /></p>
    
		<p><label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e('Flickr URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo esc_attr($flickr); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('google+ URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>" /></p>


		<p>Display:</p>
		<label for="<?php echo $this->get_field_id('icons'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="icons" id="<?php echo $this->get_field_id('icons'); ?>" <?php checked($display, "icons"); ?>></input>  Icons</label>
		<label for="<?php echo $this->get_field_id('labels'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="labels" id="<?php echo $this->get_field_id('labels'); ?>" <?php checked($display, "labels"); ?>></input> Labels</label>
		<label for="<?php echo $this->get_field_id('both'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="both" id="<?php echo $this->get_field_id('both'); ?>" <?php checked($display, "both"); ?></input> Both</label>

    
<?php
	}
}

add_action('widgets_init', create_function('', 'return register_widget("SocialNetworksWidget");'));


?>