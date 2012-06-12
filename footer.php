<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php if(!is_page('home')){ ?>
	</div><!-- #main -->
</div><!-- #page -->
<?php } ?>
</div>
<div id="site-generator">
	<?php do_action( 'twentyeleven_credits' ); ?>
	<!--<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>-->
	centro de arte savassi | av. do contorno, 6399, savassi | (31) 2513-0799
</div>

<?php wp_footer(); ?>

</body>
</html>