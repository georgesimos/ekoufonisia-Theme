<?php
/**
 * displaying the WP Job Manager listing on featured-tabs
 *
 * @package Listable
 */
global $post;
// lets query some
$query_food_args = array(
  'posts_per_page' => 4 ,
  'post_type'   => 'job_listing',
  'post_status' => 'publish',
  'post__in' => array(  ),
  'tax_query' => array(
    'relation' => 'AND',
              array(
                'taxonomy' => 'job_listing_category',
                'field'    => 'slug',
                'terms'    => 'food',
              ),
  ),
 );
$query_beach_args = array(
  'posts_per_page' => 4 ,
  'post_type'   => 'job_listing',
  'post_status' => 'publish',
  'post__in' => array(  ),
  'tax_query' => array(
    'relation' => 'AND',
              array(
                'taxonomy' => 'job_listing_category',
                'field'    => 'slug',
                'terms'    => 'beaches',
              ),
  ),
 );
$query_accomodation_args =  array(
  'posts_per_page' => 4 ,
  'post_type'   => 'job_listing',
  'post_status' => 'publish',
  'post__in' => array(  ),
  'tax_query' => array(
    'relation' => 'AND',
              array(
                'taxonomy' => 'job_listing_category',
                'field'    => 'slug',
                'terms'    => 'accommodation',
              ),
  ),
 );
$listings_beach = new WP_Query( $query_beach_args );
$listings_accomodation = new WP_Query( $query_accomodation_args );
$listings_food = new WP_Query( $query_food_args );
?>
<section id="featured-tabs">
  <div class="filter-tabs">
      <ul class="tabs">
        <li class="tab-link current" data-tab="tab-1">
          <img src="https://e-koufonisia.com/wp-content/uploads/2017/04/icons-07.svg" alt="Beaches" style="width:55px;">
          <span><?php esc_html_e( 'Beaches', 'listable-child-theme' ) ?></span>
        </li>
        <li class="tab-link" data-tab="tab-2">
          <img src="https://e-koufonisia.com/wp-content/uploads/2017/04/icons-09.svg" alt="Accommodation" style="width:55px;">
          <span><?php esc_html_e( 'Accommodation', 'listable-child-theme' ) ?></span>
        </li>
        <li class="tab-link" data-tab="tab-3">
          <img src="https://e-koufonisia.com/wp-content/uploads/2017/04/icons-08.svg" alt="Restaurants" style="width:55px;">
          <span><?php esc_html_e( 'Restaurants', 'listable-child-theme' ) ?></span>
        </li>
     </ul>
     <div id="tab-1" class="tab-content current">
       <?php if ( $listings_beach->have_posts() ) : ?>
         <div class="grid  grid--widget">
            <?php while ( $listings_beach->have_posts() ) : $listings_beach->the_post(); ?>

              <?php get_template_part( 'template-parts/content-tabs' ); ?>

            <?php endwhile; ?>

          </div>
       <?php endif; ?>
    </div>
    <div id="tab-2" class="tab-content">
      <?php if ( $listings_accomodation->have_posts() ) : ?>
        <div class="grid  grid--widget">
           <?php while ( $listings_accomodation->have_posts() ) : $listings_accomodation->the_post(); ?>
             <?php get_template_part( 'template-parts/content-tabs' ); ?>
         <?php endwhile; ?>

         </div>
      <?php endif; ?>
    </div>
    <div id="tab-3" class="tab-content">
      <?php if ( $listings_food->have_posts() ) : ?>
        <div class="grid  grid--widget">
           <?php while ( $listings_food->have_posts() ) : $listings_food->the_post(); ?>
             <?php get_template_part( 'template-parts/content-tabs' ); ?>
         <?php endwhile; ?>

         </div>
      <?php endif; ?>
    </div>
  </div>

</section>
