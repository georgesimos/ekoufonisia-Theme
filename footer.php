<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Listable
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
		<div id="footer-sidebar" class="footer-widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area' ); ?>
		</div><!-- #primary-sidebar -->
				<?php endif; ?>
		<div class="footer-text-area">
			<div class="site-info">

				<?php
				$args = array(
					'theme_location'  => 'footer_menu',
					'container'       => '',
					'container_class' => '',
					'menu_class'      => 'footer-menu',
					'depth'           => 1,
					'fallback_cb'     => null,
				);
				wp_nav_menu( $args );
				?>
			</div><!-- .site-info -->
		</div>
    <div class="copyright">
			<div class="developGrecce">
				<?php
				$footer_copyright = listable_get_option('footer_copyright');
				if ( $footer_copyright ) : ?>
					<div class="site-copyright-area" style="padding-bottom:50px;">
						<?php echo $footer_copyright; ?>
					</div>
				<?php endif; ?>
			</div>
      <div class="footer_container">

        <div class="up">
          <a id="scroll-to-top" href="#content" title="Scroll to Top" >
            <div class="backtotop">
              <div class="backtotop-morph">

              </div>
            </div>
          </a>
        </div>

      </div>

		</div>
	</footer><!-- #colophon -->
	<!-- backtotop -->

</div><!-- #page -->

<div class="hide">
	<div class="arrow-icon-svg"><?php get_template_part( 'assets/svg/carousel-arrow-svg' ); ?></div>
	<div class="cluster-icon-svg"><?php get_template_part( 'assets/svg/map-pin-cluster-svg' ); ?></div>
	<div class="selected-icon-svg"><?php get_template_part( 'assets/svg/map-pin-selected-svg' ); ?></div>
	<div class="empty-icon-svg"><?php get_template_part( 'assets/svg/map-pin-empty-svg' ); ?></div>
	<div class="card-pin-svg"><?php get_template_part( 'assets/svg/pin-simple-svg' ); ?></div>
</div>

<!-- video pop up -->
<div class="full-video-popup-wrapper" style="display: none; visibility: inherit; opacity: 1; transform: translate3d(0px, 0px, 0px);">
    <a class="close-full-video" href="#">
        <i class="icon">&#10006;</i>
    </a>
    <div class="full-video-popup">
        <div class="full-video-container">

						<iframe class="full-video"  frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
