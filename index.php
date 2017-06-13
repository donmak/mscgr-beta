<?php get_header(); ?>
<div class="container mscgr-bumper-top">
<div class="row">
  <div class="col-lg-12 mscgr-bumper-top">
    <p class="lead-text bg-warning">
    MSCGR is a list of the best music gear and instruments for songwriters, musicians, and producers who quickly want to know what to get. Find out <a href="/welcome/">how to use the site</a>, and <a href="/support/">how to support us</a>.
    </p>
  </div>
<div class="row mscgr-bumper-sticky">
    <div class="col-lg-6">
      <?php
      $sticky = get_option( 'sticky_posts' );
      $args = array(
        'posts_per_page' => 1,
        'post__in'  => $sticky,
        'ignore_sticky_posts' => 1
      );
      $query = new WP_Query( $args );
      if ( isset($sticky[0]) ) {
       
        ?>

        <div class="jumbotron mscgr-sticky">
        <a href="<?php the_permalink() ?>" rel="nofollow">
        <?php
          if ( has_post_thumbnail() ) {
          the_post_thumbnail('full', array('class' => 'img-responsive img-rounded'));
           // echo get_the_post_thumbnail( $post_id);
          }
          else {
            echo '<img class="img-responsive img-rounded" src="http://mscgr.com/wordpress/wp-content/themes/mscgr/img/music-gear.png" />';
          }
        ?>          
        </a>
        </div>    <!-- jumbotron mscgr-sticky -->    
        <?php
          }
          ?>
        </div> <!-- col-lg-6 (LEFT) -->
        <div class="col-lg-6"> <!-- right top -->
          <h1 class="mscgr-sticky-title"><strong><a style="color: #000;" href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></h1>
          <h3 class="text-primary mscgr-sticky-winner"><strong><a href="<?php the_permalink() ?>" title="<?php the_field('featured_winner'); ?>" rel="nofollow"><?php the_field('featured_winner'); ?></a></strong></h3>
          <p class="mscgr-sticky-quote"><?php the_field('featured_winner_quote_plain'); ?> </p>
          <div class="mscgr-sticky-button-position"> <a class="btn btn-lg btn-danger buy-button" href="<?php the_permalink() ?>"><span class="glyphicon glyphicon-eye-open"></span> Read The Guide</a></div>
        </div>
      </div> <!-- End Row -->
        <div class="mscgr-social-sites">
          <span class="mscgr-social-facebook"><a href="https://www.facebook.com/mscgr" onClick="ga('send', 'event', { eventCategory: 'social site', eventAction: 'visit', eventLabel: 'facebook'});"><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/social-facebook.png" alt="Follow MSCGR on Facebook"/></a></span>&nbsp;<span class="mscgr-social-twitter"><a href="https://twitter.com/mscgear" onClick="ga('send', 'event', { eventCategory: 'social site', eventAction: 'visit', eventLabel: 'twitter'});"><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/social-twitter.png" alt="Follow MSCGR on Twitter"/></a></span>&nbsp;<span class="mscgr-social-pinterest"><a href="https://www.pinterest.com/mscgr/" onClick="ga('send', 'event', { eventCategory: 'social site', eventAction: 'visit', eventLabel: 'pinterest'});"><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/social-pinterest.png" alt="Follow MSCGR on Pinterest"/></a></span>
        </div>      
<!-- BEGIN GUIDE LIST -->
<style>
.update-notify {
    font-weight:  normal;
    font-size: .8em;
}
</style>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 20px;">
          <ul class="list-unstyled homelist">
                <a href="/category/reviews/computers">
            <h3 class="text-danger category-headers-home">Computer Gear For Audio Production</h3>
            </a>
              <?php

              query_posts('cat=11'); // Computer gear

              if (have_posts()) :
                while (have_posts()) :
                the_post(); ?>
                <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet"><?php the_title(); ?> <span class="text-danger update-notify"></a> <?php update_checker( get_the_modified_date( $d ) ); ?></li>
                <ul>
                <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
                </ul>
                <?php 
                endwhile;
              endif;
            ?>
          </ul>
          <ul class="list-unstyled homelist">
            <a href="/category/reviews/guitars/">
            <h3 class="text-danger category-headers-home">Guitar &amp; Bass</h3>
            </a>
            <?php

              query_posts('cat=8'); // Guitars and Basses

              if (have_posts()) :
                while (have_posts()) :
                the_post(); ?>
                <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet" title="<?php the_title(); ?>"><?php the_title(); ?></a> <?php update_checker( get_the_modified_date( $d ) ); ?></li>
                <ul>
                <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
                </ul>
                <?php 
                endwhile;
              endif;
            ?>
          </ul>
          <ul class="list-unstyled homelist">
            <a href="/category/reviews/amps-effects/">
            <h3 class="text-danger category-headers-home">Amps &amp; Effects</h3>
            </a>
            <?php

              query_posts('cat=9'); // Amps & Effects

              if (have_posts()) :
                while (have_posts()) :
                the_post(); ?>
                <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet" title="<?php the_title(); ?>"><?php the_title(); ?></a> <?php update_checker( get_the_modified_date( $d ) ); ?></li>
                <ul>
                <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
                </ul>
                <?php 
                endwhile;
              endif;
            ?>
          </ul>
          <ul class="list-unstyled homelist">
            <a href="/category/reviews/drums-percussion/">
            <h3 class="text-danger category-headers-home">Drums &amp; Percussion</h3>
            </a>
            <?php

              query_posts('cat=7'); // Drums & Percussion

              if (have_posts()) :
                while (have_posts()) :
                the_post(); ?>
                <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet" title="<?php the_title(); ?>"><?php the_title(); ?></a> <?php update_checker( get_the_modified_date( $d ) ); ?></li>
                <ul>
                <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
                </ul>
                <?php 
                endwhile;
              endif;
            ?>
          </ul>
          <ul class="list-unstyled homelist">
            <a href="/category/reviews/keys-pianos/">
            <h3 class="text-danger category-headers-home">Piano &amp; Keys</h3>
            </a>
            <?php

              query_posts('cat=10'); // Live Sound

              if (have_posts()) :
                while (have_posts()) :
                the_post(); ?>
                <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet" title="<?php the_title(); ?>"><?php the_title(); ?></a> <?php update_checker( get_the_modified_date( $d ) ); ?></li>
                <ul>
                <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
                </ul>
                <?php 
                endwhile;
              endif;
            ?>
          </ul>                    
          <ul class="list-unstyled homelist">
            <a href="/category/reviews/live-sound/">
            <h3 class="text-danger category-headers-home">Live Sound</h3>
            </a>
            <?php

              query_posts('cat=4'); // Live Sound

              if (have_posts()) :
                while (have_posts()) :
                the_post(); ?>
                <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet" title="<?php the_title(); ?>"><?php the_title(); ?></a> <?php update_checker( get_the_modified_date( $d ) ); ?></li>
                <ul>
                <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
                </ul>
                <?php 
                endwhile;
              endif;
            ?>
          </ul>          
          <ul class="list-unstyled homelist">
            <a href="/category/reviews/recording/">
            <h3 class="text-danger category-headers-home">Recording</h3>
            </a>
            <?php

              query_posts('cat=6'); // Recording Gear
              //query_posts( array( 'category_slug' => 'recording', 'posts_per_page' => -1 ) );

              if (have_posts()) :
                while (have_posts()) :
                the_post(); ?>
                <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet" title="<?php the_title(); ?>"><?php the_title(); ?></a> <?php update_checker( get_the_modified_date( $d ) ); ?></li>
                <ul>
                <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
                </ul>
                <?php 
                endwhile;
              endif;
            ?>
          </ul>      
          <ul class="list-unstyled homelist">
            <a href="/category/reviews/extras/">
            <h3 class="text-danger category-headers-home">Music Gear Extras</h3>
            </a>
            <?php

              query_posts('cat=13'); // Everything else

              if (have_posts()) :
                while (have_posts()) :
                the_post(); 
                $when_modified = get_the_modified_date( $d );
                //echo get_the_modified_date( $d );
                ?>
                <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet" title="<?php the_title(); ?>"><?php the_title(); ?></a> <?php update_checker( get_the_modified_date( $d ) ); ?></li>
                <ul>
                <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
                </ul>
                <?php 
                endwhile;
              endif;
            ?>
          </ul>
            <h3 class="text-danger">About Our Site</h3>
               <ul class="list-unstyled homelist">
               <li class="homelist"><a href="/welcome/" class="first-bullet">Welcome to MSCGR!</a></li>
                <ul>
                <li><a href="/welcome/" rel="nofollow">We're doing something a little different.</a></li>                </ul>
               <li class="homelist"><a href="/support/" class="first-bullet">Here's how you can support us.</a></li>
                <ul>
                <li><a href="/support/" rel="nofollow">It's super easy and doesn't cost you anything.</a></li>
                </ul>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
          <div class="panel panel-default">
            <div class="panel-body homelist">
                  <p class="small">
                    Thanks for stopping by! 
                  </p>
                  <p class="small">
                    <span class="label label-danger">MSCGR</span> (just pronounced, "Music Gear") is home to dozens and dozens of hours of music gear research distilled down to easy-to-read guides and reviews. You might want to take a look at <a href="welcome">how to use the site</a>, as well as <a href="/support/">how you can help support us</a>.</p>
                  <p class="small">
                    The goal of <span class="label label-danger">MSCGR</span> is simple: Save people time and energy shopping so they can get on with their lives writing, recording and playing music, using the great gear we recommend to them.
                  </p>
                  <hr />
                  <?php // hardwired categories ?>
<div class="visible-lg visible-xl">
                  <h4 class="text-danger"><strong>Music Gear Categories</strong></h4>
<?php include('includes/inc-categories-standard.php'); ?>                    
</div>
            </div> <!-- panel-body -->
          </div> <!-- panel panel-default -->
        </div> <!-- col-lg-6 (sidebar stuff -->
</div>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>    