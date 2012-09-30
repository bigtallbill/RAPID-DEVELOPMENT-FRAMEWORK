<?php

// include some resource you might need
include_once '../config/siteConfig.php';

?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <!-- Basic Page Needs
 ================================================== -->
  <meta charset="utf-8" />
  <title><?php echo APP_NAME; ?></title>
  <meta name="description" content="Font Awesome, the iconic font designed for use with Twitter Bootstrap">
  <meta name="author" content="<?php echo APP_AUTHOR; ?>">
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

  <!-- CSS
 ================================================== -->

  <link rel="stylesheet" href="<?php echo APP_FULLPATH; ?>modules/font-awesome/css/site.css">
  <link rel="stylesheet" href="<?php echo APP_FULLPATH; ?>modules/font-awesome/css/prettify.css">
<!--[if IE 7]>
  <link rel="stylesheet" href="assets/css/font-awesome-ie7.css">
<![endif]-->
  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30136587-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body>

<!--for navigation-->
<div id="overview"></div>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <h3><a class="brand" href="#"><i class="icon-flag"></i> Font Awesome</a></h3>
      <ul class="nav">
        <li><a href="#overview">Overview</a></li>
        <li><a href="#new-icons">New Icons</a></li>
        <li><a href="#all-icons">All Icons</a></li>
        <li><a href="#examples">Examples</a></li>
        <li><a href="#integration">Integration</a></li>
        <li><a href="#code">Code</a></li>
        <li><a href="#roadmap">Roadmap</a></li>
      </ul>
      <ul class="nav pull-right">
        <li><a href="mailto:dave@davegandy.com"><i class="icon-envelope"></i> Me</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
<div class="hero-unit">
  <div id="iconCarousel" class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <div class="active item"><div><i class="icon-flag"></i></div></div>
      <div class="item"><div><i class="icon-magic"></i></div></div>
      <div class="item"><div><i class="icon-beaker"></i></div></div>
      <div class="item"><div><i class="icon-briefcase"></i></div></div>
      <div class="item"><div><i class="icon-bullhorn"></i></div></div>
      <div class="item"><div><i class="icon-umbrella"></i></div></div>
      <div class="item"><div><i class="icon-star-empty"></i></div></div>
      <div class="item"><div><i class="icon-envelope"></i></div></div>
      <div class="item"><div><i class="icon-leaf"></i></div></div>
      <div class="item"><div><i class="icon-key"></i></div></div>
      <div class="item"><div><i class="icon-book"></i></div></div>
      <div class="item"><div><i class="icon-tint"></i></div></div>
      <div class="item"><div><i class="icon-edit"></i></div></div>
      <div class="item"><div><i class="icon-search"></i></div></div>
      <div class="item"><div><i class="icon-home"></i></div></div>
      <div class="item"><div><i class="icon-picture"></i></div></div>
      <div class="item"><div><i class="icon-headphones"></i></div></div>
      <div class="item"><div><i class="icon-heart-empty"></i></div></div>
      <div class="item"><div><i class="icon-thumbs-up"></i></div></div>
      <div class="item"><div><i class="icon-flag"></i></div></div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#iconCarousel" data-slide="prev"
        onClick="_gaq.push(['_trackEvent', 'iconCarousel', 'Prev']);">
      <i class="icon-arrow-left"></i></a>
    <a class="carousel-control right" href="#iconCarousel" data-slide="next"
        onClick="_gaq.push(['_trackEvent', 'iconCarousel', 'Next']);">
      <i class="icon-arrow-right"></i></a>
  </div>
  <div class="hero-content">
    <h1>Font Awesome</h1>
    <p>The iconic font designed for use with Twitter Bootstrap</p>
    <div class="actions">
      <a class="btn btn-primary btn-large" href="https://github.com/FortAwesome/Font-Awesome/zipball/master"
          onClick="_gaq.push(['_trackEvent', 'Outbound Link', 'Download on GitHub']);">
        <i class="icon-download"></i>Download Font<br>Awesome v2.0</a>
      <a class="btn btn-large btn-github" href="https://github.com/FortAwesome/Font-Awesome" target="_blank"
          onClick="_gaq.push(['_trackEvent', 'Outbound Link', 'View Project on GitHub']);">
        <i class="icon-github"></i>View Project<br>on GitHub</a>
    </div>
  </div>
</div>

<section id="social-buttons">
  <span class="watch">
    <a class="btn" href="https://github.com/FortAwesome/Font-Awesome" target="_blank"><i class="icon-github"></i> Watch</a>
    <a id="watchers" class="count btn" href="https://github.com/FortAwesome/Font-Awesome">3900+</a>
  </span>
  <span class="fork">
    <a class="btn" href="https://github.com/FortAwesome/Font-Awesome" target="_blank"><i class="icon-github"></i> Fork</a>
    <a id="forks" class="count btn" href="#">200+</a>
  </span>
  <span class="follow">
    <a class="btn" href="http://twitter.com/fortaweso_me/" target="_blank"><i class="icon-twitter"></i> Follow @fortaweso_me</a>
    <span class="arrow-right"></span><span id="followers" class="count btn">1000+</span>
  </span>
</section>

<section id="why">
  <div class="row">
    <div class="span4">
      <h3><i class="icon-bullhorn icon-large"></i> Desktop Font + Vectors</h3>
      The full desktop font and a pdf of vectors are now included. Happy designing.
    </div>
    <div class="span4">
      <h3><i class="icon-beaker icon-large"></i> 70 New Icons in v2.0</h3>
      All requested by our active community on the <a href="https://github.com/FortAwesome/Font-Awesome" target="_blank">Font Awesome GitHub project</a>.
    </div>
    <div class="span4">
      <h3><i class="icon-ok icon-large"></i> IE7 Support</h3>
      Font Awesome v2.0 now even supports IE7. If you need it, you have my condolences.
    </div>
  </div>
  <div class="row">
    <div class="span4">
      <h3><i class="icon-flag icon-large"></i> One font, 220 icons</h3>
      In a single collection, Font Awesome is a pictographic language of web-related actions.
    </div>
    <div class="span4">
      <h3><i class="icon-gift icon-large"></i> Free for commercial use</h3>
      The Font Awesome webfont and CSS libraries are completely free for commercial use.
    </div>
    <div class="span4">
      <h3><i class="icon-search icon-large"></i> Screen reader compatible</h3>
      Font Awesome won't trip up screen readers, unlike most icon fonts.
    </div>
  </div>
  <div class="row">
    <div class="span4">
      <h3><i class="icon-thumbs-up icon-large"></i> Made for Twitter Bootstrap</h3>
      Designed from scratch to be fully backwards compatible with <a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap 2.0</a>.
    </div>
    <div class="span4">
      <h3><i class="icon-pencil icon-large"></i> CSS control</h3>
      Easily style icon color, size, shadow, and anything that's possible with CSS.
    </div>
    <div class="span4">
      <h3><i class="icon-resize-full icon-large"></i> Infinite scalability</h3>
      Scalable vector graphics means icons look awesome at any size.
    </div>
  </div>
</section>


<section id="new-icons" class="row">
  <div class="span12">
    <h1>New Icons in 2.0</h1>
    <p>You asked, Font Awesome delivers with 70 shiny new icons in version 2.0. This giant set of new icons was requested on the Font Awesome GitHub project and includes icon parity with Bootstrap 2.0.3.</p>
  </div>

  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-beaker"></i> icon-beaker</li>
      <li><i class="icon-bell"></i> icon-bell</li>
      <li><i class="icon-bolt"></i> icon-bolt</li>
      <li><i class="icon-bookmark-empty"></i> icon-bookmark-empty</li>
      <li><i class="icon-briefcase"></i> icon-briefcase</li>
      <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
      <li><i class="icon-caret-down"></i> icon-caret-down</li>
      <li><i class="icon-caret-left"></i> icon-caret-left</li>
      <li><i class="icon-caret-right"></i> icon-caret-right</li>
      <li><i class="icon-caret-up"></i> icon-caret-up</li>
      <li><i class="icon-certificate"></i> icon-certificate</li>
      <li><i class="icon-check-empty"></i> icon-check-empty</li>
      <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
      <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
      <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
      <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
      <li><i class="icon-cloud"></i> icon-cloud</li>
      <li><i class="icon-columns"></i> icon-columns</li>
    </ul>
  </div>

  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-comment-alt"></i> icon-comment-alt</li>
      <li><i class="icon-comments-alt"></i> icon-comments-alt</li>
      <li><i class="icon-copy"></i> icon-copy</li>
      <li><i class="icon-credit-card"></i> icon-credit-card</li>
      <li><i class="icon-cut"></i> icon-cut</li>
      <li><i class="icon-dashboard"></i> icon-dashboard</li>
      <li><i class="icon-envelope-alt"></i> icon-envelope-alt</li>
      <li><i class="icon-facebook"></i> icon-facebook</li>
      <li><i class="icon-filter"></i> icon-filter</li>
      <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
      <li><i class="icon-github"></i> icon-github</li>
      <li><i class="icon-globe"></i> icon-globe</li>
      <li><i class="icon-google-plus-sign"></i> icon-google-plus-sign</li>
      <li><i class="icon-google-plus"></i> icon-google-plus</li>
      <li><i class="icon-group"></i> icon-group</li>
      <li><i class="icon-hand-down"></i> icon-hand-down</li>
      <li><i class="icon-hand-left"></i> icon-hand-left</li>
      <li><i class="icon-hand-right"></i> icon-hand-right</li>
    </ul>
  </div>

  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-hand-up"></i> icon-hand-up</li>
      <li><i class="icon-hdd"></i> icon-hdd</li>
      <li><i class="icon-legal"></i> icon-legal</li>
      <li><i class="icon-link"></i> icon-link</li>
      <li><i class="icon-linkedin"></i> icon-linkedin</li>
      <li><i class="icon-list-ol"></i> icon-list-ol</li>
      <li><i class="icon-list-ul"></i> icon-list-ul</li>
      <li><i class="icon-magic"></i> icon-magic</li>
      <li><i class="icon-money"></i> icon-money</li>
      <li><i class="icon-paper-clip"></i> icon-paper-clip</li>
      <li><i class="icon-paste"></i> icon-paste</li>
      <li><i class="icon-phone-sign"></i> icon-phone-sign</li>
      <li><i class="icon-phone"></i> icon-phone</li>
      <li><i class="icon-pinterest-sign"></i> icon-pinterest-sign</li>
      <li><i class="icon-pinterest"></i> icon-pinterest</li>
      <li><i class="icon-reorder"></i> icon-reorder</li>
      <li><i class="icon-rss"></i> icon-rss</li>
    </ul>
  </div>

  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-save"></i> icon-save</li>
      <li><i class="icon-sign-blank"></i> icon-sign-blank</li>
      <li><i class="icon-sitemap"></i> icon-sitemap</li>
      <li><i class="icon-sort-down"></i> icon-sort-down</li>
      <li><i class="icon-sort-up"></i> icon-sort-up</li>
      <li><i class="icon-sort"></i> icon-sort</li>
      <li><i class="icon-strikethrough"></i> icon-strikethrough</li>
      <li><i class="icon-table"></i> icon-table</li>
      <li><i class="icon-tasks"></i> icon-tasks</li>
      <li><i class="icon-truck"></i> icon-truck</li>
      <li><i class="icon-twitter"></i> icon-twitter</li>
      <li><i class="icon-umbrella"></i> icon-umbrella</li>
      <li><i class="icon-underline"></i> icon-underline</li>
      <li><i class="icon-undo"></i> icon-undo</li>
      <li><i class="icon-unlock"></i> icon-unlock</li>
      <li><i class="icon-user-md"></i> icon-user-md</li>
      <li><i class="icon-wrench"></i> icon-wrench</li>
    </ul>
  </div>
</section>


<section id="all-icons" class="row">
  <div class="span12">
    <h1>All Icons by Category</h1>
    <!--<p>Inspired by the Glyphicon set that comes with <a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap 2.0</a>, Font Awesome is designed from scratch for a full array of web-related actions.</p>-->
  </div>

  <div class="span12">
    <h3>Web Application Icons</h3>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-adjust"></i> icon-adjust</li>
      <li><i class="icon-asterisk"></i> icon-asterisk</li>
      <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
      <li><i class="icon-bar-chart"></i> icon-bar-chart</li>
      <li><i class="icon-barcode"></i> icon-barcode</li>
      <li><i class="icon-beaker"></i> icon-beaker</li>
      <li><i class="icon-bell"></i> icon-bell</li>
      <li><i class="icon-bolt"></i> icon-bolt</li>
      <li><i class="icon-book"></i> icon-book</li>
      <li><i class="icon-bookmark"></i> icon-bookmark</li>
      <li><i class="icon-bookmark-empty"></i> icon-bookmark-empty</li>
      <li><i class="icon-briefcase"></i> icon-briefcase</li>
      <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
      <li><i class="icon-calendar"></i> icon-calendar</li>
      <li><i class="icon-camera"></i> icon-camera</li>
      <li><i class="icon-camera-retro"></i> icon-camera-retro</li>
      <li><i class="icon-certificate"></i> icon-certificate</li>
      <li><i class="icon-check"></i> icon-check</li>
      <li><i class="icon-check-empty"></i> icon-check-empty</li>
      <li><i class="icon-cloud"></i> icon-cloud</li>
      <li><i class="icon-cog"></i> icon-cog</li>
      <li><i class="icon-cogs"></i> icon-cogs</li>
      <li><i class="icon-comment"></i> icon-comment</li>
      <li><i class="icon-comment-alt"></i> icon-comment-alt</li>
      <li><i class="icon-comments"></i> icon-comments</li>
      <li><i class="icon-comments-alt"></i> icon-comments-alt</li>
      <li><i class="icon-credit-card"></i> icon-credit-card</li>
      <li><i class="icon-dashboard"></i> icon-dashboard</li>
      <li><i class="icon-download"></i> icon-download</li>
      <li><i class="icon-download-alt"></i> icon-download-alt</li>
      <li><i class="icon-edit"></i> icon-edit</li>
      <li><i class="icon-envelope"></i> icon-envelope</li>
      <li><i class="icon-envelope-alt"></i> icon-envelope-alt</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
      <li><i class="icon-external-link"></i> icon-external-link</li>
      <li><i class="icon-eye-close"></i> icon-eye-close</li>
      <li><i class="icon-eye-open"></i> icon-eye-open</li>
      <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
      <li><i class="icon-film"></i> icon-film</li>
      <li><i class="icon-filter"></i> icon-filter</li>
      <li><i class="icon-fire"></i> icon-fire</li>
      <li><i class="icon-flag"></i> icon-flag</li>
      <li><i class="icon-folder-close"></i> icon-folder-close</li>
      <li><i class="icon-folder-open"></i> icon-folder-open</li>
      <li><i class="icon-gift"></i> icon-gift</li>
      <li><i class="icon-glass"></i> icon-glass</li>
      <li><i class="icon-globe"></i> icon-globe</li>
      <li><i class="icon-group"></i> icon-group</li>
      <li><i class="icon-hdd"></i> icon-hdd</li>
      <li><i class="icon-headphones"></i> icon-headphones</li>
      <li><i class="icon-heart"></i> icon-heart</li>
      <li><i class="icon-heart-empty"></i> icon-heart-empty</li>
      <li><i class="icon-home"></i> icon-home</li>
      <li><i class="icon-inbox"></i> icon-inbox</li>
      <li><i class="icon-info-sign"></i> icon-info-sign</li>
      <li><i class="icon-key"></i> icon-key</li>
      <li><i class="icon-leaf"></i> icon-leaf</li>
      <li><i class="icon-legal"></i> icon-legal</li>
      <li><i class="icon-lemon"></i> icon-lemon</li>
      <li><i class="icon-lock"></i> icon-lock</li>
      <li><i class="icon-unlock"></i> icon-unlock</li>
      <li><i class="icon-magic"></i> icon-magic</li>
      <li><i class="icon-magnet"></i> icon-magnet</li>
      <li><i class="icon-map-marker"></i> icon-map-marker</li>
      <li><i class="icon-minus"></i> icon-minus</li>
      <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-money"></i> icon-money</li>
      <li><i class="icon-move"></i> icon-move</li>
      <li><i class="icon-music"></i> icon-music</li>
      <li><i class="icon-off"></i> icon-off</li>
      <li><i class="icon-ok"></i> icon-ok</li>
      <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
      <li><i class="icon-ok-sign"></i> icon-ok-sign</li>
      <li><i class="icon-pencil"></i> icon-pencil</li>
      <li><i class="icon-picture"></i> icon-picture</li>
      <li><i class="icon-plane"></i> icon-plane</li>
      <li><i class="icon-plus"></i> icon-plus</li>
      <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
      <li><i class="icon-print"></i> icon-print</li>
      <li><i class="icon-pushpin"></i> icon-pushpin</li>
      <li><i class="icon-qrcode"></i> icon-qrcode</li>
      <li><i class="icon-question-sign"></i> icon-question-sign</li>
      <li><i class="icon-random"></i> icon-random</li>
      <li><i class="icon-refresh"></i> icon-refresh</li>
      <li><i class="icon-remove"></i> icon-remove</li>
      <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
      <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
      <li><i class="icon-reorder"></i> icon-reorder</li>
      <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
      <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
      <li><i class="icon-retweet"></i> icon-retweet</li>
      <li><i class="icon-road"></i> icon-road</li>
      <li><i class="icon-rss"></i> icon-rss</li>
      <li><i class="icon-screenshot"></i> icon-screenshot</li>
      <li><i class="icon-search"></i> icon-search</li>
      <li><i class="icon-share"></i> icon-share</li>
      <li><i class="icon-share-alt"></i> icon-share-alt</li>
      <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-signal"></i> icon-signal</li>
      <li><i class="icon-signin"></i> icon-signin</li>
      <li><i class="icon-signout"></i> icon-signout</li>
      <li><i class="icon-sitemap"></i> icon-sitemap</li>
      <li><i class="icon-sort"></i> icon-sort</li>
      <li><i class="icon-sort-down"></i> icon-sort-down</li>
      <li><i class="icon-sort-up"></i> icon-sort-up</li>
      <li><i class="icon-star"></i> icon-star</li>
      <li><i class="icon-star-empty"></i> icon-star-empty</li>
      <li><i class="icon-star-half"></i> icon-star-half</li>
      <li><i class="icon-tag"></i> icon-tag</li>
      <li><i class="icon-tags"></i> icon-tags</li>
      <li><i class="icon-tasks"></i> icon-tasks</li>
      <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
      <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
      <li><i class="icon-time"></i> icon-time</li>
      <li><i class="icon-tint"></i> icon-tint</li>
      <li><i class="icon-trash"></i> icon-trash</li>
      <li><i class="icon-trophy"></i> icon-trophy</li>
      <li><i class="icon-truck"></i> icon-truck</li>
      <li><i class="icon-umbrella"></i> icon-umbrella</li>
      <li><i class="icon-upload"></i> icon-upload</li>
      <li><i class="icon-upload-alt"></i> icon-upload-alt</li>
      <li><i class="icon-user"></i> icon-user</li>
      <li><i class="icon-user-md"></i> icon-user-md</li>
      <li><i class="icon-volume-off"></i> icon-volume-off</li>
      <li><i class="icon-volume-down"></i> icon-volume-down</li>
      <li><i class="icon-volume-up"></i> icon-volume-up</li>
      <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
      <li><i class="icon-wrench"></i> icon-wrench</li>
      <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
      <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
    </ul>
  </div>

  <div class="span12">
    <h3>Text Editor Icons</h3>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-file"></i> icon-file</li>
      <li><i class="icon-cut"></i> icon-cut</li>
      <li><i class="icon-copy"></i> icon-copy</li>
      <li><i class="icon-paste"></i> icon-paste</li>
      <li><i class="icon-save"></i> icon-save</li>
      <li><i class="icon-undo"></i> icon-undo</li>
      <li><i class="icon-repeat"></i> icon-repeat</li>
      <li><i class="icon-paper-clip"></i> icon-paper-clip</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-text-height"></i> icon-text-height</li>
      <li><i class="icon-text-width"></i> icon-text-width</li>
      <li><i class="icon-align-left"></i> icon-align-left</li>
      <li><i class="icon-align-center"></i> icon-align-center</li>
      <li><i class="icon-align-right"></i> icon-align-right</li>
      <li><i class="icon-align-justify"></i> icon-align-justify</li>
      <li><i class="icon-indent-left"></i> icon-indent-left</li>
      <li><i class="icon-indent-right"></i> icon-indent-right</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-font"></i> icon-font</li>
      <li><i class="icon-bold"></i> icon-bold</li>
      <li><i class="icon-italic"></i> icon-italic</li>
      <li><i class="icon-strikethrough"></i> icon-strikethrough</li>
      <li><i class="icon-underline"></i> icon-underline</li>
      <li><i class="icon-link"></i> icon-link</li>
      <li><i class="icon-columns"></i> icon-columns</li>
      <li><i class="icon-table"></i> icon-table</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-th-large"></i> icon-th-large</li>
      <li><i class="icon-th"></i> icon-th</li>
      <li><i class="icon-th-list"></i> icon-th-list</li>
      <li><i class="icon-list"></i> icon-list</li>
      <li><i class="icon-list-ol"></i> icon-list-ol</li>
      <li><i class="icon-list-ul"></i> icon-list-ul</li>
      <li><i class="icon-list-alt"></i> icon-list-alt</li>
    </ul>
  </div>

  <div class="span12">
    <h3>Directional Icons</h3>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
      <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
      <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
      <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
      <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
      <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
      <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
      <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
      <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-caret-down"></i> icon-caret-down</li>
      <li><i class="icon-caret-left"></i> icon-caret-left</li>
      <li><i class="icon-caret-right"></i> icon-caret-right</li>
      <li><i class="icon-caret-up"></i> icon-caret-up</li>
      <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-hand-down"></i> icon-hand-down</li>
      <li><i class="icon-hand-left"></i> icon-hand-left</li>
      <li><i class="icon-hand-right"></i> icon-hand-right</li>
      <li><i class="icon-hand-up"></i> icon-hand-up</li>
      <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
    </ul>
  </div>

  <div class="span12">
    <h3>Video Player Icons</h3>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-play-circle"></i> icon-play-circle</li>
      <li><i class="icon-play"></i> icon-play</li>
      <li><i class="icon-pause"></i> icon-pause</li>
      <li><i class="icon-stop"></i> icon-stop</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-step-backward"></i> icon-step-backward</li>
      <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
      <li><i class="icon-backward"></i> icon-backward</li>
      <li><i class="icon-forward"></i> icon-forward</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
      <li><i class="icon-step-forward"></i> icon-step-forward</li>
      <li><i class="icon-eject"></i> icon-eject</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
      <li><i class="icon-resize-full"></i> icon-resize-full</li>
      <li><i class="icon-resize-small"></i> icon-resize-small</li>
    </ul>
  </div>

  <div class="span12">
    <h3>Social Icons</h3>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-phone"></i> icon-phone</li>
      <li><i class="icon-phone-sign"></i> icon-phone-sign</li>
      <li><i class="icon-facebook"></i> icon-facebook</li>
      <li><i class="icon-facebook-sign"></i> icon-facebook-sign</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-twitter"></i> icon-twitter</li>
      <li><i class="icon-twitter-sign"></i> icon-twitter-sign</li>
      <li><i class="icon-github"></i> icon-github</li>
      <li><i class="icon-github-sign"></i> icon-github-sign</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-linkedin"></i> icon-linkedin</li>
      <li><i class="icon-linkedin-sign"></i> icon-linkedin-sign</li>
      <li><i class="icon-pinterest"></i> icon-pinterest</li>
      <li><i class="icon-pinterest-sign"></i> icon-pinterest-sign</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-google-plus"></i> icon-google-plus</li>
      <li><i class="icon-google-plus-sign"></i> icon-google-plus-sign</li>
      <li><i class="icon-sign-blank"></i> icon-sign-blank</li>
    </ul>
  </div>

</section>

<section id="examples">
  <h1>Examples</h1>
  <p>Many examples re-used from the Twitter Bootstrap documentation.</p>
  <div class="row">
    <div class="span4">
      <div class="well">
        <p>Use Font Awesome icons in:</p>
        <ul class="icons">
          <li><i class="icon-ok"></i>Bulleted lists (like this one)</li>
          <li><i class="icon-ok"></i>Buttons</li>
          <li><i class="icon-ok"></i>Button groups</li>
          <li><i class="icon-ok"></i>Navigation</li>
          <li><i class="icon-ok"></i>Prepended form inputs</li>
          <li><i class="icon-ok"></i>And many more with Custom CSS</li>
        </ul>
      </div>
    </div>
    <div class="span4">
      <p>
        <a class="btn" href="#"><i class="icon-refresh"></i> Refresh</a>
        <a class="btn btn-success" href="#"><i class="icon-shopping-cart icon-large"></i> Checkout</a>
        <a class="btn btn-danger" href="#"><i class="icon-trash icon-large"></i> Delete</a>
      </p>
      <p>
        <a class="btn btn-large btn-primary" href="#"><i class="icon-comment"></i> Comment</a>
        <a class="btn btn-small" href="#"><i class="icon-cog"></i> Settings</a>
        <a class="btn btn-small btn-info" href="#"><i class="icon-info-sign"></i> More Info</a>
      </p>
      <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
          <li><a href="#"><i class="icon-book"></i> Library</a></li>
          <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
          <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
        </ul>
      </div>
    </div>
    <div class="span4">
      <div class="btn-toolbar">
        <div class="btn-group">
          <a class="btn" href="#"><i class="icon-align-left"></i></a>
          <a class="btn" href="#"><i class="icon-align-center"></i></a>
          <a class="btn" href="#"><i class="icon-align-right"></i></a>
          <a class="btn" href="#"><i class="icon-align-justify"></i></a>
        </div>
        <div class="btn-group">
          <a class="btn btn-primary" href="#"><i class="icon-user"></i> User</a>
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
            <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="i"></i> Make admin</a></li>
          </ul>
        </div>
      </div>
      <form>
        <div class="control-group">
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-envelope"></i></span>
              <input class="span2" id="inputIcon" type="text" placeholder="Email address">
            </div>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-key"></i></span>
              <input class="span2" id="inputIcon2" type="text" placeholder="Password">
            </div>
          </div>
        </div>
      </form>
      <div>
                    <span class="rating">
                        <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                    </span>
      </div>
    </div>
  </div>
</section>

<section id="integration">
  <h1>Integration</h1>
  <p>It's easy to integrate Font Awesome into Twitter Bootstrap, or even use it on its own.</p>
  <div class="row">
    <div class="span3">
      <h3>Bootstrap using LESS</h3>
      <p>Use this method if integrating with Twitter Bootstrap using LESS</p>
    </div>
    <div class="span9">
      <ol>
        <li>Copy the Font Awesome font directory into your project.</li>
        <li>Copy font-awesome.less into your bootstrap/less directory.</li>
        <li>Open bootstrap.less and replace <code>@import "sprites.less";</code> with <code>@import "font-awesome.less";</code></li>
        <li>
          Open your project's font-awesome.less and edit the font url to ensure it points to the right place.
<pre class="prettyprint linenums">
@font-face {
  font-family: 'FontAwesome';
  src: url('../font/fontawesome-webfont.eot');
  src: url('../font/fontawesome-webfont.eot?#iefix') format('embedded-opentype'),
     url('../font/fontawesome-webfont.woff') format('woff'),
     url('../font/fontawesome-webfont.ttf') format('truetype'),
     url('../font/fontawesome-webfont.svg#FontAwesome') format('svg');
  font-weight: normal;
  font-style: normal;
}
</pre>
        </li>
        <li>Re-compile your LESS if using a static compiler. Otherwise, you should be good to go.</li>
        <li>Check out the examples to start using Font Awesome!</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="span3">
      <h3>Bootstrap using CSS</h3>
      <p>Use this method if integrating with Twitter Bootstrap using CSS.</p>
    </div>
    <div class="span9">
      <ol>
        <li>Customize Twitter Bootstrap <a href="http://twitter.github.com/bootstrap/download.html" target="_blank">here</a>. Make sure to uncheck the default "Icons" under "Base CSS."</li>
        <li>Copy the Font Awesome font directory into your project.</li>
        <li>Copy font-awesome.css into your project.</li>
        <li>Open your project's font-awesome.css and edit the font url to ensure it points to the right place (see above example).</li>
        <li>
          In the <code>&lt;head&gt;</code> of your html, reference the location to your font-awesome.css.
<pre class="prettyprint linenums">
&lt;link rel="stylesheet" href="../css/bootstrap.css"&gt;
&lt;link rel="stylesheet" href="../css/font-awesome.css"&gt;
</pre>
        </li>
        <li>Check out the examples to start using Font Awesome!</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="span3">
      <h3>Not using Bootstrap?</h3>
      <p>Font Awesome works just as well without Twitter Bootstrap.</p>
    </div>
    <div class="span9">
      <ol>
        <li>Copy the Font Awesome font directory into your project.</li>
        <li>Copy font-awesome.less or font-awesome.css into your project.</li>
        <li>Open your project's font-awesome.less or font-awesome.css and edit the font url to ensure it points to the right place (see above example).</li>
        <li>Check out the examples to start using Font Awesome!</li>
      </ol>
    </div>
  </div>
</section>

<section id="code">
<h1>Code</h1>
<div class="row">
  <div class="span3">
    <h3>Inline Icon</h3>
    <p>Place Font Awesome icons just about anywhere with the <code>&lt;i&gt;</code> tag.</p>
  </div>
  <div class="span9">
    <div class="well">
      <div style="font-size: 24px;">
        <i class="icon-camera-retro"></i> icon-camera-retro
      </div>
    </div>
<pre class="prettyprint linenums">
&lt;div style="font-size: 24px;"&gt;
  &lt;i class="icon-camera-retro"&gt;&lt;/i&gt; icon-camera-retro
&lt;/div&gt;
</pre>
    <div class="alert alert-info"><i class="icon-info-sign"></i> Icon classes are echoed via CSS :before.</div>
    <p>Increase the icon size by using the <code>icon-large</code> class. This increases the size by 33% relative to the font-size of the container.</p>
    <div class="well">
      <div style="font-size: 24px;">
        <i class="icon-camera-retro icon-large"></i> icon-camera-retro
      </div>
    </div>
<pre class="prettyprint linenums">
&lt;div style="font-size: 24px;"&gt;
  &lt;i class="icon-camera-retro icon-large"&gt;&lt;/i&gt; icon-camera-retro
&lt;/div&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span3">
    <h3>Buttons</h3>
    <p>
    <p>
      <a class="btn" href="#">
        <i class="icon-refresh"></i> Refresh</a>
      <a class="btn btn-success" href="#">
        <i class="icon-shopping-cart icon-large"></i> Checkout</a>
    </p>
    <p>
      <a class="btn btn-large btn-primary" href="#">
        <i class="icon-comment"></i> Comment</a>
      <a class="btn btn-danger" href="#">
        <i class="icon-trash icon-large"></i> Delete</a>
    </p>
    <p>
      <a class="btn btn-small" href="#">
        <i class="icon-cog"></i> Settings</a>
      <a class="btn btn-small btn-info" href="#">
        <i class="icon-info-sign"></i> More Info</a>
    </p>
    </p>
  </div>
  <div class="span9">
    <p>Font Awesome icons work great in buttons.</p>
<pre class="prettyprint linenums">
&lt;a class="btn" href="#"&gt;
  &lt;i class="icon-refresh"&gt;&lt;/i&gt; Refresh&lt;/a&gt;
&lt;a class="btn btn-success" href="#"&gt;
  &lt;i class="icon-shopping-cart icon-large"&gt;&lt;/i&gt; Checkout&lt;/a&gt;
&lt;a class="btn btn-large btn-primary" href="#"&gt;
  &lt;i class="icon-comment"&gt;&lt;/i&gt; Comment&lt;/a&gt;
&lt;a class="btn btn-danger" href="#"&gt;
  &lt;i class="icon-trash icon-large"&gt;&lt;/i&gt; Delete&lt;/a&gt;
&lt;a class="btn btn-small" href="#"&gt;
  &lt;i class="icon-cog"&gt;&lt;/i&gt; Settings&lt;/a&gt;
&lt;a class="btn btn-small btn-info" href="#"&gt;
  &lt;i class="icon-info-sign"&gt;&lt;/i&gt; More Info&lt;/a&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span3">
    <h3>Button groups</h3>
    <p>
    <div class="btn-group">
      <a class="btn" href="#"><i class="icon-align-left"></i></a>
      <a class="btn" href="#"><i class="icon-align-center"></i></a>
      <a class="btn" href="#"><i class="icon-align-right"></i></a>
      <a class="btn" href="#"><i class="icon-align-justify"></i></a>
    </div>
    </p>
  </div>
  <div class="span9">
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn" href="#"&gt;&lt;i class="icon-align-left"&gt;&lt;/i&gt;&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;&lt;i class="icon-align-center"&gt;&lt;/i&gt;&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;&lt;i class="icon-align-right"&gt;&lt;/i&gt;&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;&lt;i class="icon-align-justify"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/div&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span3">
    <h3>Button dropdowns</h3>
    <p>
    <div class="btn-group">
      <a class="btn btn-primary" href="#"><i class="icon-user"></i> User</a>
      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="icon-caret-down"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
        <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
        <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="i"></i> Make admin</a></li>
      </ul>
    </div>
  </div>
  </p>
  <div class="span9">
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
    &lt;a class="btn btn-primary" href="#"&gt;&lt;i class="icon-user"&gt;&lt;/i&gt; User&lt;/a&gt;
    &lt;a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"&gt;&lt;span class="icon-caret-down"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-pencil"&gt;&lt;/i&gt; Edit&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-trash"&gt;&lt;/i&gt; Delete&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-ban-circle"&gt;&lt;/i&gt; Ban&lt;/a&gt;&lt;/li&gt;
        &lt;li class="divider"&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="i"&gt;&lt;/i&gt; Make admin&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
</pre>
    <div class="alert alert-info"><i class="icon-info-sign"></i> Don't forget to add the appropriate JavaScript to enable button dropdowns.</div>
  </div>
</div>
<div class="row">
  <div class="span3">
    <h3>Lists</h3>
    <p>
    <ul class="icons">
      <li><i class="icon-ok"></i> Lists</li>
      <li><i class="icon-ok"></i> Buttons</li>
      <li><i class="icon-ok"></i> Button groups</li>
      <li><i class="icon-ok"></i> Navigation</li>
      <li><i class="icon-ok"></i> Prepended form inputs</li>
    </ul>
    </p>
  </div>
  <div class="span9">
    <p>Easily replace individual bullets.</p>
<pre class="prettyprint linenums">
&lt;ul class="icons"&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Lists&lt;/li&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Buttons&lt;/li&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Button groups&lt;/li&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Navigation&lt;/li&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Prepended form inputs&lt;/li&gt;
&lt;/ul&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span3">
    <h3>Navigation</h3>
    <div class="well" style="padding: 8px 0;">
      <ul class="nav nav-list">
        <li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
        <li><a href="#"><i class="icon-book"></i> Library</a></li>
        <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
        <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
      </ul>
    </div>
  </div>
  <div class="span9">
    <p>Use Font Awesome icons in navigation to provide helpful visual cues.</p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;&lt;i class="icon-home"&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-book"&gt;&lt;/i&gt; Library&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-pencil"&gt;&lt;/i&gt; Applications&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-cogs"&gt;&lt;/i&gt; Settings&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span3">
    <h3>Prepended form inputs</h3>
    <p>
    <form>
      <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope"></i></span>
        <input class="span2" type="text" placeholder="Email address">
      </div>
      <div class="input-prepend">
        <span class="add-on"><i class="icon-key"></i></span>
        <input class="span2" type="password" placeholder="Password">
      </div>
    </form>
    </p>
  </div>
  <div class="span9">
<pre class="prettyprint linenums">
&lt;form&gt;
  &lt;div class="input-prepend"&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-envelope"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;input class="span2" type="text" placeholder="Email address"&gt;
  &lt;/div&gt;
  &lt;div class="input-prepend"&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-key"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;input class="span2" type="password" placeholder="Password"&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span3">
    <h3>Custom CSS</h3>
    <p>Anything you can do with CSS font effects, you can do with Font Awesome.</p>
  </div>
  <div class="span9">
    <p>Star Ratings (inspired by <a href="http://css-tricks.com/star-ratings/" target="_blank">CSS Tricks</a>)</p>
    <div class="well">
                    <span class="rating">
                        <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                    </span>
    </div>
  </div>
</div>
</section>

<section id="roadmap">
  <h1>Roadmap</h1>
  <p>Here's the plan for future updates.</p>
  <ul class="icons">
    <li><i class="icon-plus"></i> Font sub-setting. Keep your font file sizes small by only using the icons you need.</li>
    <li><i class="icon-plus"></i> Better hinting for smaller font sizes.</li>
    <li><i class="icon-plus"></i> More icons. Have any requests? <a href="https://github.com/FortAwesome/Font-Awesome/issues" target="_blank">Open an issue</a> in the Font Awesome GitHub project.</li>
    <li><i class="icon-plus"></i> More complete Twitter Bootstrap compatibility.</li>
    <li><i class="icon-plus"></i> Tricks and tips for super-awesome creative CSS methods, like the star example above.</li>
  </ul>
</section>

<footer>
  <div class="row">
    <div class="span4">
      <h2>Contact</h2>
      <ul class="icons">
        <li><i class="icon-envelope"></i> Email: <a href="mailto:dave@davegandy.com">Dave Gandy</a></li>
        <li><i class="icon-twitter"></i> Twitter: <a href="http://twitter.com/fortaweso_me/" target="_blank">@FortAweso_me</a></li>
        <li><i class="icon-wrench"></i> Work: Lead Product Designer @ <a href="http://kyruus.com" target="_blank">Kyruus</a></li>
      </ul>
    </div>
    <div class="span8">
      <h2>License</h2>
      The Font Awesome webfont, CSS, and LESS files are licensed under
      <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.
      A mention of <code>Font Awesome - http://fortawesome.github.com/Font-Awesome</code> in human-readable source code
      is considered acceptable attribution (most common on the web). If human readable source code is not available to
      the end user, a mention in an 'About' or 'Credits' screen is considered acceptable (most common in desktop or
      mobile software).
    </div>
  </div>
  <div>
    <h2>Special Thanks</h2>
    Special thanks to <a href="http://twitter.com/robmadole/" target="_blank">@robmadole</a> and
    <a href="http://twitter.com/supercodepoet/" target="_blank">@supercodepoet</a> for icon design
    review, advice, and some backbone.js help.
  </div>
</footer>


</div>

<script type="text/template" id="modal-template">
  <div class="modal hide fade in">
    <div class="modal-header">
      <a class="close" data-dismiss="modal"><i class="icon-remove"></i></a>
      <h3><%= iconName %></h3>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="span3 icon6">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            340px
          </div>
        </div>
        <div class="span3 icon5">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            180px
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span2 icon4">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            100px
          </div>
        </div>
        <div class="span2 icon3">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            50px
          </div>
        </div>
        <div class="span1 icon2">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            20px
          </div>
        </div>
        <div class="span1 icon1">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            12 px
          </div>
        </div>
      </div>
    </div>
  </div>
</script>

<script src="assets/js/jquery-1.7.1.min.js"></script>
<script src="assets/js/underscore.min.js"></script>
<script src="assets/js/backbone.min.js"></script>
<script src="assets/js/prettify.min.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-transition.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-alert.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-modal.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-dropdown.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-scrollspy.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-tab.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-tooltip.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-popover.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-button.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-collapse.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-carousel.js"></script>
<script src="assets/js/tw-bs-201/bootstrap-typeahead.js"></script>
<script src="assets/js/index/index.js"></script>

</body>
</html>
