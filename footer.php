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
                
            
            <?php if(get_theme_mod('footer_text') != '') : ?>
                <div class="footer-desc">
                    <?php echo nl2br(get_theme_mod('footer_text')); ?>
                </div>
            <?php else : ?>
                <div class="footer-desc">Redy Theme <em>by</em> <a href="https://jumpthemes.com/">Jump Themes</a></div>
            <?php endif; ?>
            <!-- Custom Footer-->
                
			
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
