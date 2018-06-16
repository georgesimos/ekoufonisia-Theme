<?php

global $post;
// lets query some
$query_args = array(
  'posts_per_page' => 4 ,
  'order' => 'DESC',
  'orderby' => 'date'
 );
 $post_grid = new WP_Query( $query_args );
 ?>
<section id="news_section">
  <div class="news-bg">
      <div class="img-position">
        <?php if (get_bloginfo('language') == "el") { ?>
          <img class="news-icon" alt="News" src="https://e-koufonisia.com/wp-content/uploads/2017/05/nea-1.png" scale="0">
      <<?php } else { ?>
	       <img class="news-icon" alt="News" src="https://e-koufonisia.com/wp-content/uploads/2017/05/blog-1.png" scale="0">
         <?php } ?>
       </div>
  </div>
  <div class="news-grid great_heigth">
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
               <div class="card__tagline" style="color:white;">
                 <?php the_excerpt(); ?>
               </div>

             </div><!-- .card__content -->
           </article><!-- .card.card--listing -->
         </a><!-- .grid_item -->
       <?php endwhile; ?>

       </div>
    <?php endif;
  echo do_shortcode('[ajax_load_more id="9138548116" css_classes="news_ajax" post_type="post" sticky_posts="true" posts_per_page="4" offset="4" pause="true" scroll="false" transition_container="false" button_label="Load More"]');
  ?>
  <hr class="news_divider">
  </div>
</section>
