<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redy
 */

?>

	</div><!-- #content -->
<hr>
	<footer id="colophon" class="site-footer container-fluid">
		<div class="site-info">
            <p class="small">
                
                
                <div class="footer-desc"><?php echo nl2br(get_theme_mod('footer_text')); ?></div>
                
                
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'redy' ) ); ?>"><?php printf( esc_html__( '%s', 'redy' ), 'WordPress' ); ?></a>
                
			<span class="sep"> | </span>
                
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'redy' ), 'Redy', '<a href="https://jumpthemes.com/">Jump Themes</a>' ); ?>
                </p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!--[if lt IE 9]>
    <script defer src="<?php echo get_template_directory_uri() ?>/js/core/html5shiv.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri() ?>/js/core/respond.min.js"></script>
    <![endif]-->
    <script defer src="<?php echo get_template_directory_uri() ?>/js/jquery-1.12.4.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>


</body>
</html>
