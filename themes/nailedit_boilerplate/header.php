<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  
    <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
      <head profile="http://gmpg.org/xfn/11">
      <meta charset="utf-8" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php wp_title('&mdash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        
        <!-- Add CSS Files Here -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />

        <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/styles.ie.css" />
        <![endif]-->
        
        <!--[if lt IE 9]>
          <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
          <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <![endif]-->
         
     
     <!-- Add Wordpress RSS Here -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    
  
    <?php wp_head(); ?>

    <!-- Edit Plugin Style's // Overwrite -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wpuf-styles.css" type="text/css" />


    <!-- Add Java Script Files Here -->
    
    <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
    
    <!-- Add Wordpress Pnig Here -->
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
       
  
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/ico/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-114x114.png">
        
      
  
    </head>
  
<body <?php body_class(); ?>>
  
<div class="row"> 

  <div class="large-12 columns">

    <div class="header-container bg-darkblue hide-for-small hide-for-medium">

      <div class="logo">

        <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>

      </div>

    </div>

  </div>

</div>
  
<div class="row"> 

  <div class="large-12 columns">
    
    <nav class="top-bar hide-for-small hide-for-medium" data-topbar="">

      <section class="top-bar-section">

          <?php wp_nav_menu( array( 'theme_location' => 'headertop-menu' ) ); ?> 

      </section>

    </nav>

  </div> 

  </div> 

  <!-- Nav -->

  <div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar hide-for-large-up">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Foundation</h1>
      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
     <?php wp_nav_menu( array( 'theme_location' => 'headertop-menu' ) ); ?>  
    </aside>

    <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Users</label></li>
        <li><a href="#">Hari Seldon</a></li>
        ...
      </ul>
    </aside>

    <section class="main-section">
      <!-- content goes here -->
    </section>

  <a class="exit-off-canvas"></a>

<section>