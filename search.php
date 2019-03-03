<?php

get_header();

if (have_posts()) : ?>
	

	<h3>Su busqueda para "<?php echo esc_html( get_search_query( false ) ); ?>", se encuentra en los siguientes contenidos:</h3>

	<?php 
	while (have_posts()) : the_post(); ?>

		<article class="post <?php if ( has_post_thumbnail() ) { ?> has-thumbnail <?php }?>">

			<!-- post-thumbnail -->
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
			</div>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<p class="post-info">
				<?php the_time('d, F, Y'); ?> | por <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
					<?php the_author(); ?></a> | Posted in
					<?php 
					$categories = get_the_category();
					$separator = ", ";
					$output = '';

					if ($categories) {
						foreach ($categories as $category) {
							$output .= '<a href="' . get_category_link($category->term_id) . '">' .  $category->cat_name . '</a>' . $separator;
						}

						echo trim($output, $separator);
					}

					?>
				</p>

				<?php the_excerpt(); ?>


			</article>

		<?php endwhile;

	else : 

		echo '<p>No content found</p>';

	endif;

	get_footer();
	?>