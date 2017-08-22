<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Elect Nelson Gentry</title>

  <?php wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <nav id="header-nav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg" class="img-responsive" alt="Elect Nelson Gentry Logo" /></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <div class="navbar-form navbar-right">
          <?php echo do_shortcode('[signup-form]'); ?>
          <div class="social">
            <?php if(get_field('facebook', 'option')): ?>
              <a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook-official"></i></a>
            <?php endif; ?>
            <?php if(get_field('twitter', 'option')): ?>
              <a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="clearfix"></div>
        <?php 
          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => '',
            'menu_class' => 'nav navbar-nav navbar-right',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'nelsongentry_fallback_header_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($header_nav_args);
        ?>
      </div>
    </div>
  </nav>
  <?php if(get_field('site_message')): ?>
    <section id="site-message">
      <p><?php the_field('site_message'); ?></p>
    </section>
  <?php endif; ?>
