Wordpress theme for [Foss4gPDX](http://2014.foss4g.org).

Main `WP_Query()` we use is below:

```PHP

<?php
$query = new WP_Query( array('category_name' => 'category-slug', 'posts_per_page' => 5 ));
if ( $query->have_posts() ) : ?>

	  <!-- the loop -->
	  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
	    	<h1><?php the_title(); ?></h1>
	  <?php endwhile; ?>
	  <!-- end of the loop -->

	  <?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
```