<?php
/**
 * Template Name: News Page
 *
 * @package Listable
 * @since Listable 1.0
 */

get_header();

global $post;
// lets query some
$query_args = array(
  'order' => 'DESC',
  'orderby' => 'date'
 );
 $post_grid = new WP_Query( $query_args );
 ?>
  <div class="news-bg">
      <div class="img-position">
	       <img class="news-icon" alt="News" src="https://e-koufonisia.com/wp-content/uploads/2017/03/news-05.svg" scale="0">
       </div>
  </div>
  <div class="news-grid news-bg">
    <?php if ( $post_grid->have_posts() ) : ?>
      <div class="grid  grid--widget">
         <?php while ( $post_grid->have_posts() ) : $post_grid->the_post(); ?>


          <a href="<?php the_permalink(); ?>" class="grid__item  grid__item--widget">
            <article class="full_section black_opacity" data-img="<?php echo listable_get_post_image_src( $post->ID, 'full' ); ?>"
                     data-permalink="<?php the_permalink(); ?>">

            <aside class="card__image" style="background-image: url(<?php echo listable_get_post_image_src( $post->ID, 'listable-card-image' ); ?>);">
            </aside>
             <div class="card__content even_odds">
               <h2 class="card_title white_title" itemprop="name">
                 <?php echo wp_trim_words(get_the_title(), 5, NULL); ?>
               </h2>
               <div class="card__tagline" style="color:#fff;">
                 <?php the_excerpt(); ?>
               </div>

             </div><!-- .card__content -->
           </article><!-- .card.card--listing -->
         </a><!-- .grid_item -->
       <?php endwhile; ?>

       </div>
    <?php endif; ?>
  </div>



<?php
get_footer();
