<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Dreams
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
        <?php 
            if (has_post_thumbnail()) {
                echo '<div class="large-thumbnail clear">';
                echo the_post_thumbnail( 'large-thumb' );
                echo '</div>';
            }
        ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travel-dreams' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'travel-dreams' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
