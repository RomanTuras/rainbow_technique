<?php get_header(); ?>

	<div class="content-main">

		<div class="container">
			<div id="page-404">
				<?php
                    $cat_name = "404";
                    $term = get_term_by('name', $cat_name, 'category');
                    $category_id = $term->term_id;
				?>
                <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
			</div>
		</div>


	</div>