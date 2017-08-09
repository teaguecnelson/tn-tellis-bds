<h2>Recent Posts</h2>
<ul>
<?php
	$args = array(
    'numberposts' => 5,
    'offset' => 0,
    'category' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">'. $recent["post_title"] .'</a>'. $recent["the_excerpt()"] .'</li> ';
	}
	wp_reset_query();
?>
</ul>

