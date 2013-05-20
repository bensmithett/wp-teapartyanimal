<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package teapartyanimal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->

  <?php wp_head(); ?>

  <!--[if (gt IE 8) | (IEMobile)]><!-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/application.css?v=0" />
  <!--<![endif]-->

  <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/oldie.css?v=0" />
  <![endif]-->

  <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('description');
    }
    ?>" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

  <div class="header">
    <div class="grid">
      TPA Logo

      <nav role="navigation">
        <!--<h1 class="menu-toggle"><?php _e( 'Menu', 'teapartyanimal' ); ?></h1>-->
        <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'teapartyanimal' ); ?>"><?php _e( 'Skip to content', 'teapartyanimal' ); ?></a></div>

        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav>
    </div>
  </div>

  <div class="grid" id="content" role="main">
    <div class="masthead" role="banner">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </div>

