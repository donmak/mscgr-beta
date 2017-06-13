<?php 
/*
Template Name: Static Home
*/
get_header(); 
?>
<div class="container" style="padding-top: 40px;">
<!-- ABOVE THE FOLD: BEGIN -->
<div class="row">
  <!-- MAIN COLUMN LEFT: BEGIN -->
  <div class="col-lg-8">
    <h2>col-lg-8</h2>
    <div class="row">
      <div class="col-lg-12">
        <h2>col-lg-12</h2>
        <p>Sticky Post Goes Here</p>
      </div>
    </div>
  </div>
  <!-- MAIN COLUMN LEFT: /END -->
  <!-- MAIN COLUMN RIGHT: BEGIN -->
  <div class="col-lg-4">
    <h2>col-lg-4</h2>
  </div>
  <!-- MAIN COLUMN RIGHT: /END -->
</div>
<!-- ABOVE THE FOLD: /END -->
          <?php 

            if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>  
  
<h1 class="text-danger"><?php the_title(); ?></h1>
<?php the_content(); ?> 

<?php endwhile; else: ?>

  <p>Sorry, this page does not exist</p>

<?php endif; ?>

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>      