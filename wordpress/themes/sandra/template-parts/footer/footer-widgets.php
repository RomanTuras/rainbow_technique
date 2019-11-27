<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Skinia
 * @since 1.0.0
 */

if ( is_active_sidebar( 'footer-1' ) ) : ?>

	<footer class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'skinia' ); ?>">
		<?php
		if ( is_active_sidebar( 'footer-1' ) ) {
			?>
					<div class="footer-widget-1">
					<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php
		}
		?>
	</footer>

<?php endif; ?>
