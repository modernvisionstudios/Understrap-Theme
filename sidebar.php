<?php
/************************
Sidebar
************************/
?>
<aside>
	<ul>
		<?php wp_list_categories( array(
				'title_li' => '<h3>' . __( 'Poetry', 'textdomain' ) . '</h3>'
		) );
		?>
	</ul>
	<ul>
		<h3>Recent Posts</h3>
		<?php
			$recent_args = array(
		    "posts_per_page" => 5,
		    "orderby"        => "date",
		    "order"          => "DESC"
			);

			$recent_posts = new WP_Query( $recent_args );

			if ( $recent_posts -> have_posts() ) :
		    while ( $recent_posts -> have_posts() ) :

		    $recent_posts -> the_post();
			?>

			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

			<?php

		  endwhile;
			endif;

			?>
	</ul>
</aside>
