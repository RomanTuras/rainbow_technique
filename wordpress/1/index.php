
<?php get_template_part( 'template-parts/header/skinia', 'header' ); ?>

<main role="main">
    <div class="circle">
        <div id="circle"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
    </div>

    <div class="row">
        <div class="welcome col-12">
			<?php
			$cat_name = "welcome";
			$term = get_term_by('name', $cat_name, 'category');
			$category_id = $term->term_id;
			?>
			<?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </div>

    <div id="about-us" class="container about-us">
		<?php
		$cat_name = "about-us";
		$term = get_term_by('name', $cat_name, 'category');
		$category_id = $term->term_id;
		?>
        <div class="row">
			<?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>

                <div class="col-xl-4">
					<?php the_post_thumbnail('full'); ?>
					<?php the_content(); ?>
                </div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

        </div>
    </div>

    <div id="gallery" class="container gallery">
		<?php
		$cat_name = "gallery";
		$term = get_term_by('name', $cat_name, 'category');
		$category_id = $term->term_id;
		?>
		<?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
    </div>

    <div id="pastor" class="container pastor">
		<?php
		$cat_name = "pastor";
		$term = get_term_by('name', $cat_name, 'category');
		$category_id = $term->term_id;
		?>
        <div class="row">
			<?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>

                <div class="col-xl-12">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="col-xl-6">
                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <!--	            --><?php //the_post_thumbnail('full'); ?>

                </div>
                <div class="col-xl-6">
					<?php the_content(); ?>
                </div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </div>


    <div id="form" class="container-fluid my-form" style="background: url(http://www.skinia.pl/wp-content/uploads/2019/04/form-background.jpg); background-size: cover;">
        <div class="row">

	        <?php
	        $cat_name = "form";
	        $term = get_term_by('name', $cat_name, 'category');
	        $category_id = $term->term_id;
	        ?>
		        <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
		        <?php endwhile; ?>
		        <?php wp_reset_postdata(); ?>
            <div class="col-xl-12">
                <h2>Мы с радостью ответим на все Ваши вопросы</h2>
            </div>

            <div role="form" class="wpcf7" id="wpcf7-f6-p62-o1" lang="ru-RU" dir="ltr" style="width: 100%">
                <div class="screen-reader-response"></div>
                <form action="/#wpcf7-f6-p62-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="6">
                        <input type="hidden" name="_wpcf7_version" value="5.1.1">
                        <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-p62-o1">
                        <input type="hidden" name="_wpcf7_container_post" value="62">
                        <input type="hidden" name="g-recaptcha-response" value="">
                    </div>

                    <div class="row">
                        <div class="left-form col-xl-6">
                            <div class="form-group">
                                <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" id="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Имя"></span></p>
                                <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" id="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="email"></span></p>
                            </div>
                        </div>
                        <div class="right-form col-xl-6">
                            <div class="form-group">
                                <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Вопрос"></textarea></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="submit-btn row">
                        <div class="col-xl-12">
                            <p><input type="submit" value="Задать вопрос" class="btn btn-default wpcf7-form-control wpcf7-submit"></p>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>



    <div id="contacts" class="container-fluid contacts">
		<?php
		$cat_name = "contacts";
		$term = get_term_by('name', $cat_name, 'category');
		$category_id = $term->term_id;
		?>
        <div class="row">
			<?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>

                <div class="shedule col-xl-6" style="display: table;">
                    <div class="container" style="display:table-cell;vertical-align:middle;">
						<?php the_content(); ?>
                    </div>
                </div>
                <div class="map col-xl-6 hidden-md hidden-sm hidden-xs" style="background-image: url(http://www.skinia.pl/wp-content/uploads/2019/04/skinia-map_cr-min.jpg);"></div>
                <div class="map col-12 hidden-lg hidden-xl" >
                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Варшава, ул.Выборна, 20">
                </div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </div>


</main>

<?php get_footer(); ?>
