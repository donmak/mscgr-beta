<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Review">
  <head>
    <title>
    <?php
    // setting the page title
    if (is_home()) {
      echo 'MSCGR - The Best Music Gear Reviews';
    } elseif (is_404()) {
      echo 'MSCGR | 404 Not Found';
    } elseif (is_category()) {
      echo single_cat_title( '', true ) . ' category: ' . strip_tags( category_description() );
      echo ' | MSCGR.COM';
    } elseif (is_search()) {
      echo 'MSCGR <em>'; the_search_query(); '</em> Search Results';
    } elseif ( is_day() || is_month() || is_year() ) {
      echo 'Music gear archives for '; wp_title('');
      echo ' | MSCGR.COM';
    } elseif (is_single()) {
        if(get_field('guide_title_tag'))
          {
            echo the_field('guide_title_tag'); echo ' '; echo date("Y");
          } else {
            echo wp_title(''); echo ' '; echo date("Y");
          }
      //echo the_field('guide_title_tag');
    } else {
      echo wp_title(''); echo ' '; echo date("Y");
    }
    ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="author" content="MSCGR.com">

    <!-- we all need some external validation -->
    <meta name="msvalidate.01" content="FD6159E3B5AE6E07BBF9B82381225A3B" />
    <meta name="p:domain_verify" content="6d41f0fc0e555eff0b96d84539ac564a"/>
    <meta name="fo-verify" content="343f5b30-c2b9-403e-a118-59c63d39392a">
    <!-- end external validation -->

    <!-- begin meta description -->
    <?php 
    // BEGIN META DESCRIPTION 
    if (is_home()) {  ?>
    <meta name="description" content="The best guide (and your last stop) on the web for musical instruments and music gear.">
    <?php } elseif (is_404()) {  ?>
    <meta name="description" content="We didn't find shite!">
    <?php } elseif (is_category()) {  ?>
    <meta name="description" content="<?php single_cat_title( '', true ); ?> category on MSCGR. <?php echo strip_tags( category_description() ); ?>">
    <?php } elseif (is_search()) {  ?>
    <meta name="description" content="<?php the_search_query(); ?> Search Results">
    <?php } elseif (is_page()) {  ?>
    <meta name="description" content="<?php wp_title(''); ?>">  
    <?php } elseif ( is_day() || is_month() || is_year() ) {  ?>
    <meta name="description" content="<?php wp_title(''); ?> Archives">
    <?php } elseif (is_single()) {  
    // June 2015 - this if statement is for the new meta description stuff for BING
    // it can be removed once all the meta descriptions are updated.
    if(get_field('guide_title_tag')) { ?>
    <meta name="description" content="(Updated: <?php the_modified_date('F j, Y'); ?>) <?php the_field('guide_meta_description'); ?> ">
    <?php } else { ?>
    <meta name="description" content="(Updated: <?php the_modified_date('F j, Y'); ?>) <?php the_field('featured_winner_quote_plain'); ?>">
    <?php       } ?>
    <?php } else {  ?>
    <meta name="description" content="(Updated: <?php the_modified_date('F j, Y'); ?>) <?php the_field('featured_winner_quote_plain'); ?>">
    <?php } 
    // END OF META DESCRIPTION //
    
    // BEGIN favicons, fonts, CSS, and canonical -- ?>
    <link rel="icon" href="http://mscgr.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,300,400,600,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link rel="canonical" href="<?php echo get_permalink(); ?>" />

    <?php
    //  BEGIN Twitter Microformat Stuff
    if (is_home()) { ?>
    <meta itemprop="name" content="MSCGR: Music Gear Reviews">
    <meta itemprop="description" content="Our goals is to save people time and energy shopping so they can get on with their lives writing, recording and playing music, using the great music gear we recommend to them.">
    <meta itemprop="image" content="https://lh6.googleusercontent.com/-qQE8tstwxzM/UzRHEVQ2nVI/AAAAAAAAABw/5SBI2GB2PBk/s349-no/mscgr.png">
    <?php }
      elseif ( is_category() ) { ?>
    <meta itemprop="name" content="<?php wp_title(''); ?> category for MSCGR 2015">
    <meta itemprop="description" content="<?php echo single_cat_title( '', true ) . ' category: ' . strip_tags( category_description() ); ?>">
    <meta itemprop="image" content="https://lh6.googleusercontent.com/-qQE8tstwxzM/UzRHEVQ2nVI/AAAAAAAAABw/5SBI2GB2PBk/s349-no/mscgr.png">    
    <?php
        } else { ?>
    <meta itemprop="name" content="<?php wp_title(''); ?>">
    <meta itemprop="description" content="<?php the_field('featured_winner_quote_plain'); ?> <?php wp_title(''); ?>">
    <?php 
    //  END Twitter Microformat Stuff
    //  BEGIN Featured Image Grab
      if (has_post_thumbnail( $post->ID )) { ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <meta itemprop="image" content="<?php echo $image[0]; ?>">
            <?php
            } else { ?>          
    <meta itemprop="image" content="https://lh6.googleusercontent.com/-qQE8tstwxzM/UzRHEVQ2nVI/AAAAAAAAABw/5SBI2GB2PBk/s349-no/mscgr.png">
      <?php } 
    // END Featured Image Grab ?>
    <?php } ?>
<?php wp_head(); ?>
  </head>

  <body>
<?php
/* 
If the user is logged in, don't load Google Analytics
This is because user registration is not handled with Wordpress,
so anyone logged in will be an admin,writer,or editor.
Therefore, DON'T LOAD ANALYTICS
*/

if ( ! is_user_logged_in() ) { ?>
    
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-37431901-4', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');

  </script>
<?php // end analytics trigger

 } ?>

  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand mscgr-brand" href="/" style="color: #fff;">MSCGR</a>
    </div>
        <div id="navbar" class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav">
<li class="small"><a href="/search/" style="color: #ddd; font-family: 'Open Sans', Helvetica, Arial, sans-serif;"><strong><span class="glyphicon glyphicon-search"></span> Search</strong></a></li>
            <li class="small"><a href="/welcome/" style="color: #ddd; font-family: 'Open Sans', Helvetica, Arial, sans-serif;"><strong><span class="glyphicon glyphicon-question-sign"></span> What Is This Site?</strong></a></li>
            <li class="small"><a href="/support/" style="color: #ddd; font-family: 'Open Sans', Helvetica, Arial, sans-serif;"><strong><span class="glyphicon glyphicon-heart"></span> Support MSCGR</strong></a></li>
    </ul>
        </div><!--/.navbar-collapse -->
      </div>
  </nav>