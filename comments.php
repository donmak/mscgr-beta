<?php
/* 
Template Name: Comments 

If the user is logged in, don't load DISQUS because it causes 
memory errors and I don't have time to figure it out right now
*/

if ( ! is_user_logged_in() ) { ?>

  <?php if (comments_open()) : ?>

  <?php comments_template(); ?> 
  <?php endif; // comments_open ?>




<?php // end DISQUS is_admin trigger

 } ?>