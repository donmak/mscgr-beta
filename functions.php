<?php
if ( ! function_exists( 'mscgr_setup' ) ) :

/**
 * MSCGR setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since MSCGR 1.0
 */

function mscgr_setup() {

    // Add RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
    ) );
}
endif; // mscgr_setup

add_action( 'after_setup_theme', 'mscgr_setup' );

add_filter( 'wp_title', 'trim_wp_title' );
function trim_wp_title( $title ) {
    return trim($title);
}

function mscgr_widgets_init() {
    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Home right sidebar 2',
        'id' => 'home_right_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );    
}
add_action( 'widgets_init', 'mscgr_widgets_init' );

// related post customizations for JetPack
function jetpackme_related_posts_headline( $headline ) {
$headline = sprintf(
            '<h3 class="text-danger">%s</h3>',
            esc_html( 'Some Other Guides You Might Like' )
            );
return $headline;
}
add_filter( 'jetpack_relatedposts_filter_headline', 'jetpackme_related_posts_headline' );

// if guide was updated in the last 30 days
// put updated notification
function update_checker( $last_modified ) {
    $today = date("Y-m-d H:i:s"); 
    $is_thirty = date("Y-m-d H:i:s", strtotime("-30 days", strtotime($today)));
    $last_updated    =   date('Y-m-d H:i:s', strtotime($last_modified));

    if (($last_updated > $is_thirty) && ($last_updated < $today))
{
  echo "<small><span class='label label-danger'>Updated!</span></small>";
}
else
{               
     
    }
}
/*
function homepage_guide_list($categoryid, category_title) {
$categorynum = "cat=" . $categoryid;

?>

<ul class="list-unstyled homelist">
    <a href="/category/reviews/recording">
        <h3 class="text-danger category-headers-home">Computer Gear For Audio Production</h3>
        </a>
<?php
    query_posts($categorynum); // Computer gear

    if (have_posts()) :
        while (have_posts()) :
        the_post(); 
?>
    <li class="homelist"><a href="<?php the_permalink() ?>" class="first-bullet"><?php the_title(); ?> <span class="text-danger update-notify"></a> <?php update_checker( get_the_modified_date( $d ) ); ?></span></li>
        <ul>
            <li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_field('featured_winner'); ?>"><?php the_field('featured_winner'); ?></a></li>
        </ul>
<?php 
        endwhile;
    endif;
?>
</ul>
<?php
}
*/

?>