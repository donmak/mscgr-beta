<!-- BEGIN bottom Call-To-Action -->
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-12">
        <h3 style="margin-top: 0px;"><strong><?php the_title() ;?></strong></h3>
        <h4 class="text-primary"><strong><?php the_field('featured_winner'); ?></strong></h4>
        <img src="<?php the_field('featured_winner_image'); ?>" class="img-responsive" alt="<?php the_title() ;?>" />
        <hr />
        <h4 class="text-danger" style="padding: 5px;"><strong>Important Specs</strong></h4>
          <?php

          // check if the tech specs from the Guide Meta Repeater if available
          if( have_rows('featured_winner_specs') ):

              echo "<table class='table table-striped'>";

              // loop through the rows of data
              while ( have_rows('featured_winner_specs') ) : the_row();
              ?>
                <tr>
                <td>
                <strong><?php the_sub_field('spec_name'); ?></strong>
                </td>  
                <td>
                <?php the_sub_field('spec_value'); ?>
                </td>
                </tr><!-- spec row -->
                <?php
                endwhile; ?>
                <tr>
                <td><!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-xs buy-button" data-toggle="modal" data-target="#myModal">
                View Activity Log
                </button> </td>
                  <td>
                    <span class="pull-right"><span class="glyphicon glyphicon-eye-open"></span> 
                      <a rel="nofollow" href="<?php the_field('featured_winner_link'); ?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'specs bottom', eventLabel: '<?php echo $post->post_name;?>'});"  alt="<?php the_field('featured_winner'); ?>">
                      more specs
                      </a>
                    </span>
                  </td>
                </tr> </table>
                <?php
                else :

                // no rows found
                echo "<h6>No Tech Specs Yet</h6>";
            endif;
                // ##### End Tech Specs
                ?>
      </div><!-- col-lg-12 -->              
    </div><!-- row -->
    <div class="row">
      <div class="col-lg-6 col-sm-6">
        <h4 style='margin-top: 0px;'>Synopsis:</h4>
        <p class="small"><?php the_field('featured_winner_quote_plain'); ?></p>
      </div>     
      <div class="col-lg-6 col-sm-6" style="padding-left: 0px;padding-right: 0px;">
        <?php
        // ##### get the buy buttons from the Guide Meta Repeater if available
        if( have_rows('all_buy_buttons') ):
          echo "<h4 class='text-danger' style='padding-left: 15px; margin-top: 0px;'>Where To Buy:</h4>";
          // loop through the buttons
          while ( have_rows('all_buy_buttons') ) : the_row();
          // display a sub field value
          ?>
          <div style="text-align: center; padding: 5px 10px 5px 5px;" class="hidden-xs">
            <a rel="nofollow" href="<?php the_sub_field('affiliate_url');?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_sub_field('affiliate_vendor');?>', eventLabel: '<?php echo $post->post_name;?>'});" class="btn btn-block btn-success btn-md buy-button" role="button">
              Buy from <?php the_sub_field('affiliate_vendor');?> <span class="badge">$<?php the_sub_field('affiliate_item_price'); ?></span>
            </a> 
          </div>
          <div style="text-align: center; padding: 5px 10px 5px 20px;" class="visible-xs-block">
            <a rel="nofollow" href="<?php the_sub_field('affiliate_url');?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_sub_field('affiliate_vendor');?>', eventLabel: '<?php echo $post->post_name;?>'});" class="btn btn-block btn-success btn-md buy-button" role="button">
              Buy from <?php the_sub_field('affiliate_vendor');?> <span class="badge">$<?php the_sub_field('affiliate_item_price');?></span>
            </a>
          </div>  
          <?php
          endwhile;
        else :
          // no rows found
          echo "<h4 class='text-primary' style='margin-top: 0px;'>No Rows Found</h4>";
        endif;
        // ##### End Buy Buttons
        // ##### get ALL OTHER BUY buttons (Used stuff: eBay, Reverb.com, one-offs, etc) from the Guide Meta Repeater if available
        if( have_rows('all_other_sellers') ):

          // loop through the buttons
            while ( have_rows('all_other_sellers') ) : the_row();

                // display a sub field value
                ?>
          <div style="text-align: center; padding: 5px 10px 5px 5px;" class="hidden-xs">
          <a rel="nofollow" target="_blank" href="<?php the_sub_field('seller_url');?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_sub_field('seller_vendor');?>', eventLabel: '<?php echo $post->post_name;?>'});" class="btn btn-warning btn-block btn-md buy-button" role="button"><?php the_sub_field('seller_short_desc');?> <?php the_sub_field('seller_vendor');?> <span class="glyphicon glyphicon-fire" aria-hidden="true"></span><?php the_sub_field('affiliate_tracking_url');?></a>
          </div>
          <div style="text-align: center; padding: 5px 10px 5px 20px;" class="visible-xs-block">
          <a rel="nofollow" target="_blank" href="<?php the_sub_field('seller_url');?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_sub_field('seller_vendor');?>', eventLabel: '<?php echo $post->post_name;?>'});" class="btn btn-warning btn-block btn-md buy-button" role="button"><?php the_sub_field('seller_short_desc');?> <?php the_sub_field('seller_vendor');?> <span class="glyphicon glyphicon-fire" aria-hidden="true"></span><?php the_sub_field('affiliate_tracking_url');?></a>
          </div>

        <?php
            endwhile;

        else :
            // no rows found, show failover buy button
            // do nothing ... for NOW!
          //echo "<h4 class='text-primary' style='margin-top: 0px;'>No Rows Found</h4>";
        endif;
        // ##### End Other Buy Buttons

if( get_field('non_us_az_affiliates') )
{ ?>
<div class="list-group" style="margin-left: 5px; margin-right: 10px;">
<a class="list-group-item" rel="nofollow" href="http://www.amazon.ca/gp/product/<?php echo get_field('featured_winner_asin'); ?>/?tag=mscgr02-20" 
onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'amazon_ca', eventLabel: '<?php echo $post->post_name;?>'});"
><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/flag/ca.png" alt="Amazon Canada" style="margin-bottom: 5px;"/> Prices for Amazon Canada</a>
<a class="list-group-item" rel="nofollow" href="http://www.amazon.co.uk/gp/product/<?php echo get_field('featured_winner_asin'); ?>/?tag=m01825-21" 
onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'amazon_co_uk', eventLabel: '<?php echo $post->post_name;?>'});"
><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/flag/gb.png" alt="Amazon UK" style="margin-bottom: 5px;"/> Prices for Amazon UK</a>
<a class="list-group-item" rel="nofollow" href="http://www.amazon.de/gp/product/<?php echo get_field('featured_winner_asin'); ?>/?tag=m084c-21" 
onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'amazon_de', eventLabel: '<?php echo $post->post_name;?>'});"
><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/flag/de.png" alt="Amazon Germany" style="margin-bottom: 5px;"/> Prices for Amazon Germany</a>
<a class="list-group-item" rel="nofollow" href="http://www.amazon.es/gp/product/<?php echo get_field('featured_winner_asin'); ?>/?tag=m01825-21" 
onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'amazon_es', eventLabel: '<?php echo $post->post_name;?>'});"
><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/flag/es.png" alt="Amazon Spain" style="margin-bottom: 5px;"/> Prices for Amazon Spain</a>
<a class="list-group-item" rel="nofollow" href="http://www.amazon.fr/gp/product/<?php echo get_field('featured_winner_asin'); ?>/?tag=m0873-21" 
onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'amazon_fr', eventLabel: '<?php echo $post->post_name;?>'});"
><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/flag/fr.png" alt="Amazon France" style="margin-bottom: 5px;"/> Prices for Amazon France</a>
<a class="list-group-item" rel="nofollow" href="http://www.amazon.it/gp/product/<?php echo get_field('featured_winner_asin'); ?>/?tag=m0887-21" 
onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'amazon_it', eventLabel: '<?php echo $post->post_name;?>'});"
><img src="http://mscgr.com/wordpress/wp-content/themes/mscgr-beta/img/flag/it.png" alt="Amazon Italy" style="margin-bottom: 5px;"/> Prices for Amazon Italy</a>
</div>
<?php
}
else
{
    echo "&nbsp;";
}
        ?>

      </div>    <!-- col-lg-6 col-sm-6 -->
    </div> <!-- row -->
  </div> <!-- Panel Body -->   
</div> <!-- Panel -->
<!-- END bottom Call-To-Action -->          