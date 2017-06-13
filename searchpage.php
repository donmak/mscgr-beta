<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
    <div class="container" style="margin-top: 40px;">
      <div class="row marketing" style="margin-bottom: 0px; margin-top: 5px;">

        <div class="col-lg-8">
            <?php if ( have_posts() ) : ?>
 
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->
 
                <?php //shape_content_nav( 'nav-above' ); ?>
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'search' ); ?>
 
                <?php endwhile; ?>
 
                <?php //shape_content_nav( 'nav-below' ); ?>
 
            <?php else : ?>
 
                <?php get_template_part( 'no-results', 'search' ); ?>
 
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