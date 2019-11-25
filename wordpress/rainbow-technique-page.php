<?php
/**
 * Template Name: Rainbow-Technique
 * description: >- Page template without header, sidebar and footer
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Радужная техника</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#fff">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/rainbow-assets/css/main.min.css" />

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>
<!-- Main section -->
	<div id="main-section" class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12">

				<div class="row">

					<div class="col-lg-2 logo-sm-12 logo_container">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/rainbow-assets/img/_src/logo-min.png" alt="">
					</div>

					<div class="col-lg-5 offset-lg-5 col-sm-12 offset-sm-12 main-section-text">
						<?php
						$cat_name = "rainbow-main-screen";
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
			
		</div>

	</div>
	<!-- END Main section -->