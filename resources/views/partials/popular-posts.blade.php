<h2>Popular Posts</h2>
<?php
	// Query Most Popular Posts by
	$query_args = array (
		'post_type' => 'post',
		'posts_per_page' => 5,
		'meta_key' => 'views',
		'orderby' => 'meta_value_num',
		'order' => 'DESC',
		'ignore_sticky_posts' => true
	);

	// The Query
	$the_query = new WP_Query( $query_args );

	// The Loop
	if ( $the_query->have_posts() ) {
		echo '<ul>';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<li>' . get_the_title() . '</li>';
		}
		echo '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
?>