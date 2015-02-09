<?php 
/**
 * Template Name: Home
 *
 *
*/
get_header(); ?>
<div class="container_24">
	<div class="grid_7">
		<div class="prefix_1 right-indent">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<div class="grid_12">
		<div class="suffix_1">
			<?php if ( ! dynamic_sidebar( 'Request' ) ) : ?>
			<!--Wigitized 'Request' for the home page-->
			<?php endif ?>
			<?php query_posts( 'post_type=custom'); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(''); ?>
			<?php endwhile; ?>
			<?php else : ?>
			<!-- You can add Error Text here -->
			<?php endif; ?>
			<div class="latestwork"><?php if ( ! dynamic_sidebar( 'Sidebar Center Content' ) ) : ?>
			<!--Wigitized 'Content' for the home page-->
			<?php endif ?></div>
		</div>
	</div>
	<div class="grid_5 sidebar-right">
		<?php if ( ! dynamic_sidebar( 'Sidebar Extra' ) ) : ?>
		<!--Wigitized 'Request' for the home page-->
		<?php endif ?>
	</div>
</div>
<?
//mc4wp_form();
?>

<?php get_footer(); ?>
