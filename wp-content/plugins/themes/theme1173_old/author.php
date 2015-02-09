<?php get_header(); ?>
<div class="container_24">
	<div class="grid_24">
		<div id="content" class="prefix_1">
	<div class="indent">
  	<?php
			if(isset($_GET['author_name'])) :
				$curauth = get_userdatabylogin($author_name);
				else :
				$curauth = get_userdata(intval($author));
			endif;
		?>
		<div class="author">
			<h1>About: <?php echo $curauth->display_name; ?></h1>
			<div class="avatar wrapper">
				<!-- Displays the Gravatar based on the author's email address. Visit Gravatar.com for info on Gravatars -->
				<?php if(function_exists('get_avatar')) { echo get_avatar( $curauth->user_email, $size = '180' ); } ?>
				<!-- Displays the author's description from their Wordpress profile -->
				<?php if($curauth->description !="") { ?>
					<?php echo $curauth->description; ?>
				<?php } ?>
			</div>
		</div><!--.author-->
	
		<div id="recent-author-posts">
			<h3>Recent Posts by <?php echo $curauth->display_name; ?></h3>
			<!-- Displays the most recent posts by that author -->
			<ul class="article-list">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php static $count = 0;
					if ($count == "5") // Number of posts to display
									{ break; }
					else { ?>
						<li>
							<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
							<div class="wrapper"><?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
							<div class="post-excerpt">
								<?php the_excerpt(); ?> <!-- the excerpt is loaded to avoid duplicate content -->
							</div><!--.postContent--></div>
							<div class="post-meta">
								<p>
									Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?><br />
									Categories: <?php the_category(', ');?>
									<?php the_tags('<br />Tags: ', ', ', ' '); ?>
								</p>
							</div><!--.postMeta-->
						</li>
				<?php $count++; } ?>
			<?php endwhile; else: ?>
			
					<li>
						No posts by <?php echo $curauth->display_name; ?> yet.
					</li>
			<?php endif; ?>
			</ul>
		</div><!--#recentPosts-->
	
		<div id="recent-author-comments">
			<h3>Recent Comments by <?php echo $curauth->display_name; ?></h3>
				<?php
					$number=5; // number of recent comments to display
					$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and comment_author_email='$curauth->user_email' ORDER BY comment_date_gmt DESC LIMIT $number");
				?>
				<ul>
					<?php
						if ( $comments ) : foreach ( (array) $comments as $comment) :
						echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_date(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
					endforeach; else: ?>
										<p>
											No comments by <?php echo $curauth->display_name; ?> yet.
										</p>
					<?php endif; ?>
							</ul>
		</div><!--#recentAuthorComments-->
    
  </div>
</div><!--#content-->
	</div>
</div>
<?php get_footer(); ?>