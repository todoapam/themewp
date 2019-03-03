<?php

get_header();

if (have_posts()) : ?>
	

	<h3>Su busqueda para "<?php echo esc_html( get_search_query( false ) ); ?>", se encuentra en los siguientes contenidos:</h3>

	<?php 
	while (have_posts()) : the_post();

		get_template_part('content', get_post_format());

		endwhile;

		else : 

		echo '<p>No content found</p>';

		endif;

	get_footer();
	?>