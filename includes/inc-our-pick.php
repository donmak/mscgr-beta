<div class="item-1 item-full clearfix hidden-xs hidden-sm hidden-md" itemscope itemtype="http://schema.org/Product">
  <div class="item-full-inner clearfix" itemscope itemtype="http://schema.org/Offer">
    <div class="item-full-left" style="overflow: hidden;">
      <a class="item-full-thumbnail" href="<?php the_field('featured_winner_link'); ?>" rel="nofollow">
          <img src="<?php the_field('featured_winner_image'); ?>" class="img-responsive" alt="<?php echo the_field('featured_winner'); ?> <? echo date('Y'); ?>" />
      </a>
    </div> <!-- item-full-left -->
    <div class="item-full-right">
      <div class="item-title">
        <a href="<?php the_field('featured_winner_link'); ?>" itemprop="name url" rel="nofollow">Our pick</a>
      </div>
      <div class="item-make-model">
        <a href="<?php the_field('featured_winner_link'); ?>" rel="nofollow" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_field('featured_winner_vendor'); ?>', eventLabel: '<?php echo $post->post_name;?>'});"><?php the_field('featured_winner'); ?></a>
      </div>
      <div class="item-text" itemprop="description">
        <?php echo the_field('featured_winner_quote_plain'); ?>
      </div>
      <div> 

<?php 
// SINGLE VALUE GRAB TEST: BEGIN
    if( have_rows('all_buy_buttons') ):

        while( have_rows('all_buy_buttons') ): the_row(); 

            // vars
            $affiliate_item_price = get_sub_field('affiliate_item_price');
            $affiliate_main_link = get_sub_field('affiliate_main_link');
            $affiliate_vendor = get_sub_field('affiliate_vendor'); 
            $affiliate_url = get_sub_field('affiliate_url');
            ?>

          
            <?php if( $affiliate_main_link ): ?>
                <a class="btn btn-success btn-block btn-md buy-button" role="button" href="<?php echo $affiliate_url; ?>" rel="nofollow" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php echo $affiliate_vendor; ?>', eventLabel: '<?php echo $post->post_name;?>'});">
                  Buy from <?php echo $affiliate_vendor; ?>: <span class="badge"><?php echo '$' . $affiliate_item_price; ?></span>
                </a>                 
            <?php else: ?>
                <!--
                <a class="btn btn-success btn-block btn-md buy-button" role="button" href="<?php the_field('featured_winner_link'); ?>" rel="nofollow" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php echo $affiliate_vendor; ?>', eventLabel: '<?php echo $post->post_name;?>'});">
                  Buy from <?php echo the_field('featured_winner_vendor'); ?> <span class="badge"><?php echo the_field('featured_winner_price'); ?></span>
                </a>
                -->
            <?php endif;

        endwhile;

    endif; 
// SINGLE VALUE GRAB TEST: END
?>
      </div>
      <!--
      <div class="item-disclaimer">
        &#42;At the time of publishing, the price was <?php echo the_field('featured_winner_price'); ?>.
      </div>
      -->
    </div> <!-- item-full-right -->
  </div> <!-- item-full-inner -->
</div> <!-- item-1 item-full -->