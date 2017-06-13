<div class="row visible-sm visible-xs visible-md">
    <?php
        while ( have_rows('runners_up') ) : the_row(); ?>
          <div class="col-sm-6 col-xs-6 col-md-4 clearfix">
            <div class="thumbnail">
              <img src="<?php the_sub_field('runner_up_image'); ?>" alt="<?php the_sub_field('runner_up_name'); ?>">
              <div class="caption">
                <h3><?php the_sub_field('runner_up_context'); ?></h3>
                <h4><?php the_sub_field('runner_up_name'); ?></h4>
                <p><small><?php the_sub_field('runner_up_description'); ?></small></p>
                <div class="hidden-xs">
                    <a class="btn btn-success btn-block btn-md buy-button" role="button" href="<?php the_sub_field('runner_up_url'); ?>" onclick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'Amazon', eventLabel: '<?php the_sub_field('runner_up_name'); ?>'});">Buy from <?php the_sub_field('runner_up_vendor'); ?> <span class="badge">$<?php the_sub_field('runner_up_price'); ?></span></a>
                    <?php the_sub_field('runner_up_tracking_url'); ?>
                </div>
                <div class="visible-xs">
                    <a class="btn btn-success btn-block btn-md buy-button" role="button" href="<?php the_sub_field('runner_up_url'); ?>" onclick="ga('send', 'event', { eventCategory: 'partner site', eventAction: 'Amazon', eventLabel: '<?php the_sub_field('runner_up_name'); ?>'});"><?php the_sub_field('runner_up_vendor'); ?>: <span class="badge">$<?php the_sub_field('runner_up_price'); ?></span></a>
                    <?php the_sub_field('runner_up_tracking_url'); ?>
                </div>
              </div>
            </div>
          </div>
    <?php
        endwhile;
    ?>          
</div>