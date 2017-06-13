<?php get_header(); ?>
    <div class="container" style="margin-top: 40px;">
      <div class="row marketing" style="margin-bottom: 0px; margin-top: 5px;">

        <div class="col-lg-12">
          <header class="archive-header">
            <h1 class="text-danger"><small>Category:</small><br />
            <strong><?php single_cat_title( '', true ); ?></strong></h1>
            <?php
            // Display optional category description
            if ( category_description() ) : ?>
              <div class="archive-meta">
                <?php echo category_description(); ?>
              </div>
            <?php endif; ?>
          </header>
        </div> <!-- col-lg-12 -->  
      </div> <!-- row marketing -->
          <!-- thumbs -->
          <div class="row">

          <!-- category list -->
          <?php 
          // Check if there are any posts to display
          if ( have_posts() ) : 

            // The Loop
            while ( have_posts() ) : the_post(); ?>
              <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 clearfix" style="padding-right: 0px;">
                  <div class="thumbnail">
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
                      <div class="caption">
                        <h3>
                          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?></a><br />
                      <small>
                        <?php the_field('featured_winner'); ?>
                      </small>
                        </h3>
                        <div class="text-success hidden-xs hidden-sm">
                            <a class="btn btn-md btn-block btn-success buy-button" role="button" href="<?php the_field('featured_winner_link'); ?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_field('featured_winner_vendor'); ?>', eventLabel: '<?php echo single_cat_title( '', true ); ?> - <?php the_field('featured_winner'); ?>'});" rel="nofollow">Buy from <?php the_field('featured_winner_vendor'); ?> for <span class="badge"><?php the_field('featured_winner_price'); ?></span>
                            </a>
                        </div>
                        <div class="text-success visible-xs visible-sm">
                            <a class="btn btn-md btn-block btn-success buy-button" role="button" href="<?php the_field('featured_winner_link'); ?>" onClick="ga('send', 'event', { eventCategory: 'partner site', eventAction: '<?php the_field('featured_winner_vendor'); ?>', eventLabel: '<?php echo single_cat_title( '', true ); ?> - <?php the_field('featured_winner'); ?>'});" rel="nofollow"><?php the_field('featured_winner_vendor'); ?>: <span class="badge"><?php the_field('featured_winner_price'); ?></span>
                            </a>
                        </div>
                      </div> <!-- caption -->
                  </div> <!-- thumbnail -->
              </div> <!-- col-sm-6 col-md-5 col-lg-6 -->
            <?php endwhile; ?>

        <?php 
          else: ?> <!-- if no category items -->
            <div class="col-lg-8">
              <p>Sorry, no posts matched your criteria.</p>
            </div> <!-- col-lg-8 -->

        <?php 
          endif; ?>


        </div> <!-- col-lg-8 -->

        
      </div> <!-- row marketing -->

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>