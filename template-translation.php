<?php
/*
Template Name: Translation
*/
?>

<?php get_header(); ?>
<div class="container">
	<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the page info loop. ?>

		<!-- creating menu section -->
		<ul id="language-menu">
		<?php
		$args = array(
			'child_of'	=> $post->ID
		);
		$pages = get_pages($args);

		foreach ( $pages as $page ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-page-thumbnail' );
			$php_menu_item = '<li id="menu-' . $page->post_title . '">' . $page->post_title . '</li>';
			echo $php_menu_item;	
		} ?>
		</ul>

		<!-- creating content sections -->
		<div id="translation-content">
		<?php
		$args = array(
			'child_of'	=> $post->ID
		);
		$pages = get_pages($args);

		foreach ( $pages as $page ) {
			$php_content_item = '<div class="language" id="' . $page->post_title . '">' . apply_filters('the_content', $page->post_content) . '</div>';
			echo $php_content_item;	
		} ?>
		</div>

	</div>

<?php get_sidebar(); ?>
</div><!-- #container -->


<?php get_footer(); ?>