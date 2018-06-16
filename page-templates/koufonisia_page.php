<?php
/**
 * Template Name: Koufonisia Page
 *
 * @package ekoufonisia
 * @since ekoufonisia 1.0
 */

get_header();

global $post;
$the_random_hero = listable_get_random_hero_object();
$thumbnail = wp_get_attachment_url( $the_random_hero->ID );
 ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				// we'll return a random attachment from image and videos background lists, if one is present
        ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header has-image">

						<div class="entry-featured" style="background-image: url('<?php echo $thumbnail ?>') ">

						</div>

						<div class="header-content">
							<div class="page-title koufonisia-image-title koufonisia-img-width">
                <h1 class="screen-reader-text"> <?php the_title(); ?> </h1>
              </div>
              <a href="#" class="button-video full-video-trigger"><?php esc_html_e('Video', 'listable-child-theme' ); ?></a>

							<div class="entry-subtitle">
								<?php if ( $post->post_excerpt ) {
									the_excerpt();
								} ?>
							</div>


              <div class="menu-scroll-down" >
              <a  href="#entry-section-content" >
                <img src="https://e-koufonisia.com/wp-content/uploads/2017/05/ARROWX2.png" alt="Arrow">
                  <span class="screen-reader-text">
                    <?php _e( 'Scroll down to content', 'listable-child-theme'); ?>
                  </span>
                </a>
            </div>
              </div>


					</header>



						<div id="entry-section-content" class="entry-content">
							<?php get_template_part( 'content-templates/koufonisia_section' ); ?>

						</div>


				</article><!-- #post-## -->

			<?php
     endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->

	</div><!-- #primary -->

<?php
get_footer();
