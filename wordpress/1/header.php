<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo wp_get_document_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>

<div class="container-fluid header-404" style="background-image: url(http://www.skinia.pl/wp-content/uploads/2019/04/footer-background.jpg);">
    <div class="row">
        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
		    <?php if ( has_custom_logo() ) : ?>
                <div class="logo site-logo"><?php the_custom_logo(); ?></div>
		    <?php endif; ?>
        </div>
    </div>
</div>
