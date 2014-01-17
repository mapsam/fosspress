<?php
/*
Template Name: Contributors
*/
?>

<?php get_header(); ?>
<div class="container">
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; // end of the page info loop. ?>
	<!-- populate contributors with child pages -->
	<div id="contributors">
		<?php
		$args = array(
			'child_of'	=> $post->ID
		);
		$pages = get_pages($args);

		foreach ( $pages as $page ) {
			$id = $page->ID;
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-page-thumbnail' );
			$contributor = '<section><div class="contributor-info">';
			if (get_post_meta($id, 'aod_mapURL', true)) {
				$contributor .= '<h1><a href="' . get_post_meta($id, 'aod_mapURL', true) . '" target="_blank">' . get_post_meta($id, 'aod_map', true) . '</a></h1>';
			} else {
				$contributor .= '<h1>' . get_post_meta($id, 'aod_map', true) . '</h1>';
			}
			if (get_post_meta($id, 'aod_authorURL', true)) {
				$contributor .= '<h2><a href="' . get_post_meta($id, 'aod_authorURL', true) . '" target="_blank">' . get_post_meta($id, 'aod_author', true) . '</a></h2></div>';
			} else {
				$contributor .= '<h2>' . get_post_meta($id, 'aod_author', true) . '</h2></div>';
			}
			if (get_post_meta($id, 'aod_extra', true)) {
				$contributor .= '<div class="contributor-map" style="background-image:url(' . $image[0] . ');"></div><div class="contributor-excerpt"><p>' . get_post_meta($id, 'aod_extra', true) . '</p></div></section>';
			} else {
				$contributor .= '<div class="contributor-map" style="background-image:url(' . $image[0] . ');"></div></section>';
			}
			
			echo $contributor;
		}
		?>
	</div>
</div><!-- #container -->


<?php get_footer(); ?>