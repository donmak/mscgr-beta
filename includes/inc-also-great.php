    <?php
        while ( have_rows('runners_up') ) : the_row(); ?>
        <div class="hidden-md hidden-sm hidden-xs">
            <h4 class="text-success" style="margin-top: 10px;">
              <strong>
                <span class="glyphicon glyphicon-thumbs-up"></span> <?php the_sub_field('runner_up_context'); ?>
              </strong>
            </h4>
            <a href="<?php the_sub_field('runner_up_url'); ?>"  onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_sub_field('runner_up_vendor'); ?>', eventLabel: '<?php echo $post->post_name;?>'});">
              <img style="margin-left: auto; margin-right: auto;" class="img-responsive" title="<?php the_sub_field('runner_up_name'); ?>" src="<?php the_sub_field('runner_up_image'); ?>" alt="<?php the_sub_field('runner_up_name'); ?>" />
            </a>
            
            <h5 class="text-info">
              <a href="<?php the_sub_field('runner_up_url'); ?>"  onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_sub_field('runner_up_vendor'); ?>', eventLabel: '<?php echo $post->post_name;?>'});">
                <strong>
                  <span class="glyphicon glyphicon-bookmark"></span> <?php the_sub_field('runner_up_name'); ?>
                </strong>
              </a>
            </h5>
            <p class="small"><?php the_sub_field('runner_up_description'); ?></p>
            <div class="hidden-xs">
              <a class="btn btn-success btn-block btn-md buy-button" role="button" href="<?php the_sub_field('runner_up_url'); ?>" onclick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'Amazon', eventLabel: '<?php the_sub_field('runner_up_name'); ?>'});">Buy from <?php the_sub_field('runner_up_vendor'); ?> <span class="badge">$<?php the_sub_field('runner_up_price'); ?></span>
              </a>
            </div>
            <div class="visible-xs">
              <a class="btn btn-success btn-block btn-md buy-button" role="button" href="<?php the_sub_field('runner_up_url'); ?>" onclick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'Amazon', eventLabel: '<?php the_sub_field('runner_up_name'); ?>'});"><?php the_sub_field('runner_up_vendor'); ?>
                :<span class="badge">$<?php the_sub_field('runner_up_price'); ?></span>
              </a>
            </div>
            <?php the_sub_field('runner_up_tracking_url'); ?>
        </div>
          <?php
        endwhile;
        ?>