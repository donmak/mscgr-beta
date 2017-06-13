<?php if (is_single()) { ?>
<div class="visible-lg">
  <?php // SECTION: IMPORTANT SPECS ?>
  <h4 class="text-success" style="margin: 0px;"><strong>Important Specs</strong></h4>
  <?php

  // check if the tech specs from the Guide Meta Repeater if available
  if( have_rows('featured_winner_specs') ):

    echo "<table class='table table-striped'>";

        // loop through the rows of data
          while ( have_rows('featured_winner_specs') ) : the_row();
      ?>
      <tr>
      <td>
              <strong class="small"><?php the_sub_field('spec_name'); ?></strong>
      </td>  
      <td>
              <span class="small"><?php the_sub_field('spec_value'); ?></span>
      </td>
      </tr><!-- spec row -->
      <?php
          endwhile; ?>
      <tr>
      <td><!-- Button trigger modal -->
<!--
        <button type="button" class="btn btn-danger btn-xs buy-button" data-toggle="modal" data-target="#myModal">
          View Activity Log
        </button> 
-->
      </td>
      <td style="padding-left: 40px; padding-right: 5px;">
        <span class="glyphicon glyphicon-eye-open"></span> <a href="<?php the_field('featured_winner_link');?>" class="text-success" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'specs top', eventLabel: '<?php echo $post->post_name;?>'});">more specs</a>
      </td>
      </tr> 
    </table>
  <?php
  else :
      // no rows found
      echo "<h6>No Tech Specs Yet</h6>";
  endif;
  // ##### End Tech Specs
  ?>
  </div> <!-- visible-lg -->
  <?php } ?>
  <hr />
  <?php // END SECTION: IMPORTANT SPECS ?>  

  <?php // SECTION: ACTIVITY LOG 
    // echo "<h4 class='text-success'><strong>Activity Log</strong></h4>";
    // echo "<h6>No Activity Log yet ...</h6>";
        // END SECTION: ACTIVITY LOG ?>
  
  <?php // SECTION: LATEST DEALS 
    // echo "<h4 class='text-success'><strong>Current Deals</strong></h4>";
    // echo "<h6>No deals yet ...</h6>";
        // END SECTION: LATEST DEALS ?>  

<hr />
<?php // hardwired categories ?>
<div class="hidden-xs hidden-sm">
<h4 class="text-danger"><strong><span class="glyphicon glyphicon-music"></span> Music Gear Categories</strong></h4>
<?php
include('includes/categories-standard.php');
?>
</div>
<?php if (is_single()) { ?>
  <?php // SECTION: ALSO RECOMMENDED ?>
  <?php

  // Also Recommended Boxes: check if the repeater field has rows of data
  if( have_rows('runners_up') ): ?>

    <?php
    include('includes/inc-also-great.php');
    ?>

<?php
  else :

        // no rows found, show quote: ?>
        <p class="small"><em>
        “It’s not so much the equipment as how you use it. I’ve heard people with really cheap studios do great recordings.” —Frank Gambale</em>
        </p>

  <?php
  endif;
  ?>

<hr />

<?php } else { ?>

              <p class="small">
                <span class="label label-danger">MSCGR</span> (just pronounced, "Music Gear") is home to dozens and dozens of hours of music gear research distilled down to easy-to-read guides and reviews. You might want to take a look at <a href="/welcome/">how to use the site</a>, as well as <a href="/support/">how you can help support us</a>.</p>
              <p class="small">
                The goal of <span class="label label-danger">MSCGR</span> is simple: Save people time and energy shopping so they can get on with their lives writing, recording and playing music, using the great gear we recommend to them.
              </p>
<?php } ?>

<h4 class="text-danger"><strong><span class="glyphicon glyphicon-envelope"></span> Follow MSCGR</strong></h4> 
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//mscgr.us8.list-manage.com/subscribe/post?u=2a2a6d9943313983714101634&amp;id=2598996545" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  
<div class="mc-field-group">
  <p class="small">We send one email at the end of each week, never more than that. Also, we hate spammers and will treat your email with utmost respect.</p>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_2a2a6d9943313983714101634_2598996545" tabindex="-1" value=""></div>
    <div class="clear" style="margin-top: 20px;"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-sm btn-danger buy-button"></div>
    </div>
</form>
</div>
<hr />
<?php dynamic_sidebar( 'home_right_1' ); ?>
<?php dynamic_sidebar( 'home_right_2' ); ?>
<!--End mc_embed_signup-->
<hr />
<h4 class="text-danger"><strong><span class="glyphicon glyphicon-bullhorn"></span> Talk To Us</strong></h4>                  
  <p class="small">
    Did we miss a recommendation? Is there something you'd like to see us review? Typos? Mistakes? If so, <a href="mailto: notify@mscgr.com">drop us a line</a>.
  </p>