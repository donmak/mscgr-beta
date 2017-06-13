<!-- BEGIN bottom Call-To-Action -->
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-12">
        <h3 style="margin-top: 0px;"><strong><?php the_title() ;?></strong></h3>
        <h4 class="text-primary"><strong><?php the_field('featured_winner'); ?></strong></h4>
          <?php
          if ( has_post_thumbnail() ) {
          the_post_thumbnail('full', array('class' => 'img-responsive img-rounded'));
          // echo get_the_post_thumbnail( $post_id);
          }
          else {
          echo '<img class="img-responsive img-rounded" src="http://mscgr.com/wordpress/wp-content/themes/mscgr/img/music-gear.png" />';
          }
          ?>
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
                  <a rel="nofollow" href="<?php the_field('featured_winner_link'); ?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'specs bottom', eventLabel: '<?php echo $post->post_name;?>'});">
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
              Buy from <?php the_sub_field('affiliate_vendor');?> <span class="badge">$<?php the_sub_field('affiliate_item_price');?></span>
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
        ?>
      </div>    <!-- col-lg-6 col-sm-6 -->
    </div> <!-- row -->
  </div> <!-- Panel Body -->   
</div> <!-- Panel -->
<!-- END bottom Call-To-Action -->          

