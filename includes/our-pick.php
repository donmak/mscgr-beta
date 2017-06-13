<div class="item-1 item-full clearfix hidden-xs" itemscope itemtype="http://schema.org/Product">
  <div class="item-full-inner clearfix" itemscope itemtype="http://schema.org/Offer">
    <div class="item-full-left">
      <a class="item-full-thumbnail" href="<?php the_field('featured_winner_link'); ?>" rel="nofollow">
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
    </div> <!-- item-full-left -->
    <div class="item-full-right">
      <div class="item-title">
        <a href="<?php the_field('featured_winner_link'); ?>" itemprop="name url" rel="nofollow">Our pick</a>
      </div>
      <div class="item-make-model">
        <a href="<?php the_field('featured_winner_link'); ?>" rel="nofollow"><?php the_field('featured_winner'); ?></a>
      </div>
      <div class="item-text" itemprop="description">
        <?php echo the_field('featured_winner_quote_plain'); ?>
      </div>
      <div> 
        <a class="btn btn-success btn-block btn-md buy-button" role="button" href="<?php the_field('featured_winner_link'); ?>" rel="nofollow">
          Buy from <?php the_field('featured_winner_vendor'); ?> <span class="badge"><?php the_field('featured_winner_price'); ?></span>
        </a>
      </div>
      <!--
      <div class="item-disclaimer">
        &#42;At the time of publishing, the price was <?php echo the_field('featured_winner_price'); ?>.
      </div>
      -->
    </div> <!-- item-full-right -->
  </div> <!-- item-full-inner -->
</div> <!-- item-1 item-full -->