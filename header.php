<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php bloginfo('name'); ?></title>
    <script type='text/javascript' src='http://code.jquery.com/jquery-1.7.1.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="<?php bloginfo( 'template_url' ); ?>/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/bootflat.github.io/bootflat/css/bootflat.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/jack.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body <?php body_class();?>>
</form>
    <div class="row">
      <div class="col-md-3 amo_menu"> 
          <div class="navbar navbar-inverse navbar-static-top amo_navbar">
              <div class="container amo_menu_container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand amo_brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                </div>
                <div id="amo_description">
        <?php bloginfo('description'); ?>
      </div>
                <div style="clear:both;"  class="navbar-collapse collapse">
                  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div class="form-search search-only amo_search">
  <i class="search-icon glyphicon glyphicon-search col-md-3"></i>
  <input class="form-control search-query col-md-3" type="text"  placeholder="Search" name="s" id="s" />
</div>
<div style="clear:both;">
                  <?php wp_nav_menu( array("container" => "nav", "container_class" => "amo_container", 'fallback_cb'     => 'header_menu','echo' => true,'items_wrap' => '<ul class="nav nav-stacked">%3$s</ul>')); ?>
                </div>
                </div>
              </div>
        </div>
        <div class="amo_github">
          <img class="amo_github" src="<?php bloginfo( 'template_url' ); ?>/theme-images/Octocat.jpg">
          <?php get_sidebar(); ?>
        </div>
      </div>
      <div class="col-md-9 amo_content">