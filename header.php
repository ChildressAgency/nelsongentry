<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]
      <style type="text/css">
      .gradient {
      filter: none;
      }
      </style>
    <![endif]-->
  </head>
  <body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '782245855192882',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <div class="page-wrapper">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" class="img-responsive jp-logo" alt="Jason Pelt - Commonwealth Attorney"  /></a>
            </div>
            <div class="col-sm-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-june-9.png" alt="Vote June 9th" class="img-responsive banner-june-9" />
            </div>
            <div class="col-sm-3 header-social">
              <a href="https://www.facebook.com/JasonPelt" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="Jason Pelt for Commonwealth Attorney on Facebook" /></a>
              <a href="https://twitter.com/jasonpelt" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="Jason Pelt for Commonwealth Attorney on Twitter" /></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KV7WA9ZYBWPEA" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/donate.png" alt="Donate" /></a>
            </div>
          </div>
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <div class="nav-center-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stafford-round.png" alt="" />
              </div>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>              
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav agbold visible-lg-block" style="margin-top:10px;">
                <li><a href="<?php echo site_url('meet-jason'); ?>">MEET JASON</a></li>
                <li><a href="<?php echo site_url('platform'); ?>">PLATFORM</a></li>
                <li><a href="<?php echo site_url('events'); ?>">EVENTS</a></li>
                <li><a href="<?php echo site_url('news'); ?>">NEWS</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right agbold visible-lg-block" style="margin-top:10px;">
                <li style="margin-top:-10px;"><a href="<?php echo site_url('message-to-law-enforcement'); ?>">MESSAGE TO<br />LAW ENFORCEMENT</a></li>
                <li><a href="<?php echo site_url('sign-up'); ?>">SIGN UP</a></li>
                <li><a href="<?php echo site_url('contact'); ?>">CONTACT</a></li>
                <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KV7WA9ZYBWPEA" target="_blank">DONATE</a></li>
              </ul>
              <ul class="nav nav-justified agbold hidden-lg">
                <li><a href="<?php echo site_url('meet-jason'); ?>">MEET JASON</a></li>
                <li><a href="<?php echo site_url('platform'); ?>">PLATFORM</a></li>
                <li><a href="<?php echo site_url('events'); ?>">EVENTS</a></li>
                <li><a href="<?php echo site_url('news'); ?>">NEWS</a></li>
                <li><a href="<?php echo site_url('message-to-law-enforcement'); ?>">MESSAGE TO<br />LAW ENFORCEMENT</a></li>
                <li><a href="<?php echo site_url('sign-up'); ?>">SIGN UP</a></li>
                <li><a href="<?php echo site_url('contact'); ?>">CONTACT</a></li>
                <li><a href="<?php echo site_url('press-kit'); ?>">PRESS KIT</a></li>             
              </ul>
            </div>
          </nav>
        </div>
      </div>