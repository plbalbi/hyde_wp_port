<?php
/**
 * Template part for displaying the excerpt of a post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package palbisblog
 */

?>

<div class="post" style="margin-bottom: 10px;">
<?php
    the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    if ( has_readmore_tag($post) ) {
        the_content(post_read_more_button_text());
    } else {
        the_excerpt();
        echo '<a href="' . get_the_permalink() . '" rel="nofollow">' . post_read_more_button_text() . '</a>';
    }?>
</div>	
