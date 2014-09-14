<!DOCTYPE html>
<html lang="en">
  <head>
    <script type='text/javascript' src='http://code.jquery.com/jquery-1.7.1.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

   <script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){

$(function(){
    $('#select').click(function(){
        $('ul').show(); 


    });
    $('.page_item a').click(function(e){
         $('#select').text($(this).text());
         $('ul').hide(); 
        $(this).addClass('current');
        e.preventDefault();
    })
})
});//]]> 
</script>
    <!-- Bootstrap -->
    <link href="wp-content/themes/amoratis-wordpress-theme/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="wp-content/themes/amoratis-wordpress-theme/bootflat.github.io/bootflat/css/bootflat.css" rel="stylesheet">
    <link href="wp-content/themes/amoratis-wordpress-theme/jack.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1><?php //bloginfo('name'); ?></h1>

    description <?php bloginfo('description'); ?>
    url <?php bloginfo('url'); ?>
    <div class="row">
      <div class="col-md-3 amo_menu">
        <?php wp_nav_menu( array("container" => "nav", "container_class" => "amo_container", 'fallback_cb'     => 'header_menu','echo' => true,'items_wrap' => '<ul class="nav nav-pills nav-stacked">%3$s</ul>')); ?>
      </div>
      <div class="col-md-9">
          <?php 
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
              //
              // Post Content here ?>
              <div class="entry">
              <?php the_content(); ?>
            </div> <?php
              //
            } // end while
          } // end if
          ?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="wp-content/themes/amoratis-wordpress-theme/bootstrap/dist/js/bootstrap.js"></script>
    <script src="wp-content/themes/amoratis-wordpress-theme/bootflat.github.io/bootflat/js/icheck.min.js"></script>
    <script src="wp-content/themes/amoratis-wordpress-theme/bootflat.github.io/bootflat/js/jquery.fs.selecter.min.js"></script>
    <script src="wp-content/themes/amoratis-wordpress-theme/bootflat.github.io/bootflat/js/jquery.fs.stepper.min.js"></script>
    
  </body>
</html>
