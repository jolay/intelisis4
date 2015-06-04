<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/intelisis/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/intelisis/foundation.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/intelisis/style.css" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
    <div class="x-container-border">
        <section id="top-bar" class="row">
            <p class="small-12 column"><i class="fi-marker"></i>Corporativo, Paseo de la Reforma #2654, Cd. de México <i class="fi-telephone"></i>(55) 5081 1212</p>
        </section>
    </div>
    <div class="x-container-border">
        <section id="branding" class="row">
            <div id="site-title" class="small-12 medium-4 column">
                <?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><img src="<?php echo get_site_url(); ?>/wp-content/themes/intelisis/images/intelisis.png"/></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
            <nav id="menu" role="navigation" class="small-12 medium-8 column">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
               
            </nav>
        </section>
        <div class="row row-small-vertical-space">
            <div class="small-12 column breadcrumb">
                <?php if (is_front_page()) : ?>
                <?php ?>
                <?php else : ?>
                <?php if (function_exists('seomix_content_breadcrumb')) seomix_content_breadcrumb(); ?>
                <?php endif;?>
            </div>
        </div>
    </div>
</header>
<div id="container">