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
<?php get_footer(); ?>
