<?php
/**
 * Displays header skinia
 *
 * @package WordPress
 * @subpackage Skinia
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php echo wp_get_document_title(); ?>"/>
    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
	<?php wp_head(); ?>
</head>
<body style="background-image: url(<?php echo get_background_image(); ?>)">

<header class="main-head">
    <img src="<?php if ( get_header_image() ) : header_image(); endif; ?>" class="head-img" alt="skinia">
    <div class="top-line">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
	                <?php if ( has_custom_logo() ) : ?>
                        <div class="logo site-logo"><?php the_custom_logo(); ?></div>
	                <?php endif; ?>
                </div>

                <div class="wrap-mnu col-xl-11 col-lg-9 col-md-9 col-sm-6 col-xs-6 col-6">
	                <?php if ( has_nav_menu( 'main-menu' ) ) : ?>
                        <nav id="site-navigation" class="main-navigation hidden-sm hidden-xs" aria-label="<?php esc_attr_e( 'Top Menu', 'skinia' ); ?>">
			                <?php
			                wp_nav_menu(
				                array(
					                'theme_location' => 'main-menu',
					                'menu_class'     => 'main-menu',
					                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				                )
			                );
			                ?>
                        </nav><!-- #site-navigation -->
	                <?php endif; ?>
                        <div class="toggle-mnu hidden-md hidden-xl hidden-lg">
                            <div class="responsive-menu">
	                            <?php
	                            wp_nav_menu(
		                            array(
			                            'theme_location' => 'main-menu',
			                            'menu_class'     => 'main-menu',
			                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		                            )
	                            );
	                            ?>
                            </div>
                            <div class="line top"></div>
                            <div class="line center"></div>
                            <div class="line bottom"></div>
                        </div>
                </div>
            </div>

            <?php if ( is_active_sidebar( 'header-1' ) ) : ?>
            <div class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'skinia' ); ?>">
                <?php
                    if ( is_active_sidebar( 'header-1' ) ) {
                        ?>
                            <div class="header-widget-1">
                                <?php dynamic_sidebar( 'header-1' ); ?>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <?php endif; ?>

            <div class="row">
                <div class="main-title col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                    <h1>Русскоязычная Христианская </br>Церковь <strong>«СКИНИЯ» </strong></br>в Варшаве</h1>
<!--	                --><?php //$blog_info = get_bloginfo( 'name' ); ?>
<!--	                --><?php //if ( ! empty( $blog_info ) ) : ?>
<!--                        <h1 class="site-title">--><?php //bloginfo( 'name' ); ?><!--</h1>-->
<!--	                --><?php //endif; ?>
                </div>
            </div>

        </div>
    </div>
</header

