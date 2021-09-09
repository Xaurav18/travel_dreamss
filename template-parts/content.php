<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Dreams
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php 
            if (has_post_thumbnail()) {
                echo '<div class="small-thumbnail">';
                echo the_post_thumbnail( 'small-thumb' );
                echo '</div>';
            }
        ?>
        <div class="entry-wrapper">
	<header class="entry-header">
                
                <?php echo get_the_category_list(' \\ ' , 'multiple'); ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php travel_dreams_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'travel-dreams' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travel-dreams' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer keep-reading">
            <?php echo '<a href="' . esc_url( get_permalink() ) . '" title="' . __('Read more', 'travel-dreams') . get_the_title() . '" rel="bookmark">Read more</a>'; ?>
	</footer><!--.entry-footer--> 
        </div> <!-- .entry-wrapper -->
</article><!-- #post-## -->
