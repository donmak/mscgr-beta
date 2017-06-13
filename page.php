<?php get_header(); ?>
    <div class="container" style="margin-top: 40px;">
      <div class="row marketing" style="margin-bottom: 0px; margin-top: 5px;">

        <div class="col-lg-8">

          <?php 

            if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>            
          
            <h1 class="text-danger"><?php the_title() ;?></h1>

<ul class="small list-inline text-uppercase text-muted" style="padding-top: 20px;">
<li><span class="glyphicon glyphicon-calendar"></span>  Last Updated: <?php the_modified_date('F j, Y'); ?></li>
<li><?php edit_post_link('Edit this entry.', '<small>', '</small>'); ?></li>
</ul>
<hr />
            <?php the_content(); ?>

<div class="pull-right" style="padding-bottom: 20px;"><span class="label label-danger">- M</span></div>
<p>&nbsp;</p>
<hr />
    <?php comments_template( '', true ); ?>
          <?php endwhile; else: ?>

            <p>Sorry, this page does not exist</p>

          <?php endif; ?>

        </div>

        <div class="col-lg-4" style="padding-right: 0px;">

          <div class="panel panel-default">
            <div class="panel-body">

                 <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
      </div>

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>