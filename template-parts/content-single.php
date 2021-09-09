<?php
/**
 * Template part for displaying results in search pages
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
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php travel_dreams_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

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
		<?php travel_dreams_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

