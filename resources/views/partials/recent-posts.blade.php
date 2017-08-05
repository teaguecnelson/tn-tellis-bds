<h2>Recent Posts</h2>
<ul>
<?php
	$args = array( 'numberposts' => '10' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">'. $recent["post_title"] .'</a>'. $recent["post_excerpt"] .'</li> ';
	}
	wp_reset_query();
?>
</ul>