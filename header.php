<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <!--Styles-->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    </head>
<body>
  <div id="wrap">
    <!-- Navbar    ================================================== -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/wordpress/"><?php echo '' . get_bloginfo('name'); ?></a>
    </div><!--navbar-header-->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php wp_nav_menu( array( 
            'theme_location' => 'header-menu',
            'menu' => 'header-menu',
            'container' => false,
            'menu_class' => 'nav navbar-nav navbar-right padding-right',
            ) ); ?>
    </div><!-- /.navbar-collapse -->
  </nav>
<!--end navbar-->

<!-- Subhead      ================================================== -->

<!--end subhead-->

<div class="container">