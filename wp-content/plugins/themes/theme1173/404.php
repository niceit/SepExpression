<?php get_header(); ?>
<div class="container_24">
	<div class="grid_24">
		<div id="content" class="prefix_1">
	<div id="error404" class="post">
		<h1>Error 404 Not Found</h1>
		<div class="postContent">
			<p>Oops. Fail. The page cannot be found.</p>
			<p>Please check your URL or use the search form below.</p>
			<?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
		</div><!--.post-content-->
	</div><!--#error404 .post-->
</div><!--#content-->
	</div>
</div>
<?php get_footer(); ?>