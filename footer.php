<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
<footer id="footer-top" class="footer bg-bootweb-flat text-white">
    <?php get_template_part( 'footer-widget' ); ?>
</footer>
	<footer id="colophon" role="contentinfo">
		<div class="container-fluid p-3">
            <div class="site-info row">
                <div class="col-md-6 my-3"><?php printf( __('Copyright &copy; %s','bootweb'), date('Y') ); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <?php printf( __('All content is protected by international and DMCA copyright law.', 'bootweb') ); ?></div><div class="col-md-6 my-3">Theme by <a href="//developer.ngawicloud.bid/wp-themes/bootweb">WP BootWeb</a>. | Developed By <a class="sep" href="//developer.ngawicloud.bid">Ngawi Cloud Developers</a>.</div>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->


                <?php wp_footer(); ?>
</body>
</html>
