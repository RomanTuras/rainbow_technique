<?php
/**
 * Template Name: rainbow-technique-page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<!-- Main section -->
<div id="main-section" class="container lazy-background">

    <div class="row">

        <div class="col-lg-12 col-md-12">

            <div class="row">

                <div class="col-lg-2 logo-sm-12 logo_container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/_src/logo-min.png" alt="">
                </div>

                <div class="col-lg-5 offset-lg-5 col-sm-12 offset-sm-12 main-section-text">
                    <?php
                    $cat_name = "rainbow-main-section";
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

<!-- You-can section -->
<section id="you-can">

    <div class="container text-center">
        <?php
        $cat_name = "rainbow-you-can";
        $term = get_term_by('name', $cat_name, 'category');
        $category_id = $term->term_id;
        ?>
        <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    
</section>
<!-- END You-can section -->

<!-- Secret section -->
<section id="secret-section" class="container lazy-background">

    <div class="row">
        <?php
        $cat_name = "rainbow-secret";
        $term = get_term_by('name', $cat_name, 'category');
        $category_id = $term->term_id;
        ?>
        <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    
</section>
<!-- END Secret section -->

<!-- What awaits section -->
<section id="what-awaits-section" class="container lazy-background">
        <?php
        $cat_name = "rainbow-what-awaits";
        $term = get_term_by('name', $cat_name, 'category');
        $category_id = $term->term_id;
        ?>
        <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>    
</section>
<!-- END What awaits section -->

<!-- Some section -->
<section id="some-section" class="container lazy-background">
        <?php
        $cat_name = "rainbow-some-section";
        $term = get_term_by('name', $cat_name, 'category');
        $category_id = $term->term_id;
        ?>
        <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?> 
</section>
<!-- END Some section -->

<!-- Why me section -->
<section id="why-me-section" class="container lazy-background">
    <?php
    $cat_name = "rainbow-why-me";
    $term = get_term_by('name', $cat_name, 'category');
    $category_id = $term->term_id;
    ?>
    <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?> 
</section>
<!-- END Why me section -->

<!-- About me section -->
<section id="about-me" class="container">
    <?php
    $cat_name = "rainbow-about-me";
    $term = get_term_by('name', $cat_name, 'category');
    $category_id = $term->term_id;
    ?>
    <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?> 
</section>
<!-- END About me section -->

<!-- Reviews Section -->
<section id="reviews-section" class="container">
    <?php
    $cat_name = "rainbow-reviews";
    $term = get_term_by('name', $cat_name, 'category');
    $category_id = $term->term_id;
    ?>
    <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?> 
</section>
<!-- END Reviews Section -->

<!-- Options Section -->
<section id="options-section" class="container">
    <?php
    $cat_name = "rainbow-options";
    $term = get_term_by('name', $cat_name, 'category');
    $category_id = $term->term_id;
    ?>
    <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?> 
</section>
<!-- END Options Section -->

<!-- Goal Section -->
<section id="goal-section" class="container lazy-background">
    <?php
    $cat_name = "rainbow-goal";
    $term = get_term_by('name', $cat_name, 'category');
    $category_id = $term->term_id;
    ?>
    <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>    
</section>
<!-- END Goal Section -->

<!-- Do you want Section -->
<section id="do-you-want-section" class="container">
    <img src="img/@placeholder/screen-10-1-img-mob.jpg" data-src="img/@1x/screen-10-1-img-mob.jpg" data-srcset="img/@2x/screen-10-1-img-mob.jpg 2x, img/@1x/screen-10-1-img-mob.jpg 1x" class="lazy media-main-bg" alt="">

    <?php
    $cat_name = "rainbow-do-you-want";
    $term = get_term_by('name', $cat_name, 'category');
    $category_id = $term->term_id;
    ?>
    <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?> 
</section>
<!-- END Do you want Section -->

<!-- FAQ Section -->
<section id="faq-section" class="container">
    <?php
    $cat_name = "rainbow-faq";
    $term = get_term_by('name', $cat_name, 'category');
    $category_id = $term->term_id;
    ?>
    <?php query_posts('cat='.$category_id); while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?> 

</section>
<!-- END FAQ Section -->

<script src="//code-ya.jivosite.com/widget.js" data-jv-id="KwR6tNmETU" async></script>

<!-- http://rainbow.a-naumova.com/wp-content/themes/sandra/assets/ -->
<?php get_footer(); ?>
