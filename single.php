<?php get_header(); ?>
    <div class="container" style="margin-top: 50px;">
      <div class="row marketing" style="margin-bottom: 0px; margin-top: 5px;">

        <div class="col-lg-8">

          <!-- // gets the template part that needs to populate the SINGLE page -->
          <div>
          <a rel="nofollow" href="<?php the_field('featured_winner_link'); ?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'featured image', eventLabel: '<?php echo $post->post_name;?>'});">
          <?php 

            if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>            
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
          </div>
        </div> <!-- col-lg-8 -->
          <div class="col-lg-4 visible-lg" style="padding-right: 0px;">
<a rel="nofollow" href="https://www.amazon.com/dp/B00DBYBNEE?_encoding=UTF8&adid=18Y5955SFWBQNDTE5XP7&camp=0&creative=0&linkCode=ur1&primeCampaignId=prime_assoc_ft&tag=mscgear-20" onClick="ga('send', 'event', { eventCategory: 'ad', eventAction: 'banner', eventLabel: 'amazon prime'});">
<img src="/wordpress/wp-content/uploads/2016/06/is-amazon-prime-worth-it.png" width="300" height="250" alt="Is Amazon Prime membership worth it?" border="0"/></a>

              <h3 class="text-danger"><?php the_field('featured_winner'); ?></h3>
              <h4><?php the_field('featured_winner_desc'); ?></h4>

              <?php

              // ##### get the buy buttons from the Guide Meta Repeater if available
              if( have_rows('all_buy_buttons') ):

                // loop through the buttons
                  while ( have_rows('all_buy_buttons') ) : the_row();

                      // display a sub field value
                      ?>
                <a rel="nofollow noopener noreferrer" target="_blank" href="<?php the_sub_field('affiliate_url');?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_sub_field('affiliate_vendor');?>', eventLabel: '<?php echo $post->post_name;?>'});" class="btn btn-success btn-block btn-md buy-button" role="button">Buy from <?php the_sub_field('affiliate_vendor');?> <span class="badge">$<?php the_sub_field('affiliate_item_price');?></span><?php the_sub_field('affiliate_tracking_url');?></a>
              <?php
                  endwhile;

              else :

                  // no rows found, show failover buy button
                ?>
                <a rel="nofollow noopener noreferrer" target="_blank" href="http://www.amazon.com/?_encoding=UTF8&camp=1789&creative=390957&linkCode=ur2&tag=mscgear-20&linkId=SCVHQKLKKXTULVLF" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'Amazon', eventLabel: '<?php echo $post->post_name;?>'});" class="btn btn-success btn-block btn-md" role="button">Buy from Amazon</a> <img src="https://ir-na.amazon-adsystem.com/e/ir?t=mscgear-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /><br />
                <?php  
              endif;
              // ##### End Buy Buttons
              ?>
              <?php

              // ##### get ALL OTHER BUY buttons (Used stuff: eBay, Reverb.com, one-offs, etc) from the Guide Meta Repeater if available
              if( have_rows('all_other_sellers') ):

                // loop through the buttons
                  while ( have_rows('all_other_sellers') ) : the_row();

                      // display a sub field value
                      ?>
                <a rel="nofollow noopener noreferrer" target="_blank" href="<?php the_sub_field('seller_url');?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_sub_field('seller_vendor');?>', eventLabel: '<?php echo $post->post_name;?>'});" class="btn btn-warning btn-block btn-md buy-button" role="button"><?php the_sub_field('seller_short_desc');?> <?php the_sub_field('seller_vendor');?> <span class="glyphicon glyphicon-fire" aria-hidden="true"></span><?php the_sub_field('affiliate_tracking_url');?></a>
              <?php
                  endwhile;

              else :

                  // no rows found, show failover buy button
                  // do nothing ... for NOW!
              endif;
              // ##### End Buy Buttons
              ?>              
              
              <p class="small" style="margin-top: 5px;"><em>We receive a small kickback from our partners when you click through and purchase the great gear we recommend. <a href="/support/" rel="nofollow">Details</a></em></p>

          </div> <!-- col-lg-4 -->
          </div> <!-- row -->
          <div class="row">
              <div class="col-lg-8">
<!--
<a rel="nofollow" href="<?php the_field('featured_winner_link'); ?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'featured image', eventLabel: '<?php echo $post->post_name;?>'});">
-->
                <h1 style="text-decoration: none;"><strong><?php the_title() ;?></strong></h1>
                <h2 class="text-primary"><strong><?php the_field('featured_winner'); ?></strong></h2>
<!-- </a> -->
                  <ul class="small list-inline text-uppercase text-muted" style="padding-top: 20px;">
                    <li><span class="glyphicon glyphicon-user"></span> <?php the_author(); ?></li>
                    <li class="last-updated"><span class="glyphicon glyphicon-eye-open"></span>  Last Updated: <?php the_modified_date('F j, Y'); ?> </li>
                    <?php edit_post_link('Edit this entry.', '<li><span class="glyphicon glyphicon-pencil"></span>', '</li>'); ?>
                  </ul>                 
                  <hr />
<?php echo do_shortcode("[sharify]"); ?>
                  <p class="lead"><?php the_field('featured_winner_quote'); ?></p>
<hr />
<!-- ###################### TEST -->
<?php include('includes/inc-our-pick.php'); ?>
<div class="hidden-lg hidden-sm">
  <?php include('includes/inc-item-card.php'); ?>
</div>
<!-- ###################### TEST -->                  
<?php 
the_content(); 
echo do_shortcode("[sharify]"); 
?>
<hr />
<h2 class="text-danger"><span class="glyphicon glyphicon-flag"></span> Tell Me If There's A Deal For This</h2>
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="well">
<form action="//mscgr.us8.list-manage.com/subscribe/post?u=2a2a6d9943313983714101634&amp;id=747c7a70f3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  <p>We'll send you an email when there is an eligible deal, promo code, or special on the gear we recommend.<br />
    <small>FYI: We hate spam! <a href="http://mscgr.com/privacy-policy">Privacy Policy</a></small></p>
<div class="indicates-required"><span class="glyphicon glyphicon-asterisk text-danger"></span> indicates required</div>
<div class="form-group">
  <label for="mce-FNAME">First Name </label><br />
  <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
</div>
<div class="form-group">
  <label for="mce-LNAME">Last Name </label><br />
  <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
</div>
<div class="form-group">
  <label for="mce-EMAIL">Email Address  <span class="glyphicon glyphicon-asterisk text-danger"></span>
</label><br />
  <input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_2a2a6d9943313983714101634_747c7a70f3" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-danger"></div>
    </div>
</form>
</div>
<!--End mc_embed_signup-->
<!-- where the item card was -->
<?php
include('includes/inc-item-card.php');
?>
<?php
include('includes/inc-also-great-small.php');
?>
<!-- end where the item card was -->
                  <div style="padding-bottom: 20px;"><span class="label label-danger">- M</span><a name="sources"></a></div> 
<?php echo do_shortcode("[sharify]"); ?>
     
<?php // get_comments(); ?>
                  <div>

                      <?php

                      // ##### Display the Guide Reference Sources
                      if( have_rows('guide_sources') ):
                        
                        echo "<h3 class='text-danger'>Sources</h3> <ol>";
                        
                        // loop through the rows of data
                          while ( have_rows('guide_sources') ) : the_row(); ?>
                            <li class="small">
                            <strong ><?php the_sub_field('source_author'); ?></strong>, <?php the_sub_field('source_publication'); ?>, <?php the_sub_field('source_pub_date'); ?> <br />
                            <a href="<?php the_sub_field('source_url'); ?>" rel="nofollow"><?php the_sub_field('source_title'); ?></a>
                           <blockquote class="small" style="color: #666;">&ldquo;<?php the_sub_field('source_quote'); ?>&rdquo;</blockquote>
                            </li>
<?php
                          endwhile;
                          echo "</ol>";
                      else :

                          // no rows found

                      endif;

                      ?>
                  </div>
<em>Originally published: <?php the_time('F jS, Y') ?></em>  
                  <hr />
                      <?php comments_template( '', true ); ?>
                      

                      <?php endwhile; else: ?>

                        <p>Sorry, this page does not exist</p>

                      <?php endif; ?>

                </div> <!-- col-lg-8 -->

            <div class="col-lg-4" style="padding-right: 0px;">
<!--
              <div class="panel panel-default" style="margin: 0px; padding: 5px;">
                <div class="panel-body" style="margin: 0px; padding: 5px;">
-->
                <?php get_sidebar(); ?>
<!--
                </div>
              </div>
-->
            </div> <!-- col-lg-4 -->
          </div> <!-- row -->

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>  