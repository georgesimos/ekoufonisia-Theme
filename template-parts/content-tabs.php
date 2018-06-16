
<a href="<?php the_job_permalink(); ?>" class="grid__item  grid__item--widget">
	<article class="gs-opacity" data-latitude="<?php echo get_post_meta( $post->ID, 'geolocation_lat', true ); ?>"
					 data-longitude="<?php echo get_post_meta( $post->ID, 'geolocation_long', true ); ?>"
					 data-img="<?php echo listable_get_post_image_src( $post->ID, 'full' ); ?>"
					 data-permalink="<?php the_job_permalink(); ?>">

	<aside class="card__image" style="background-image: url(<?php echo listable_get_post_image_src( $post->ID, 'listable-card-image' ); ?>);">
	</aside>
	 <div class="card__content">
		 <h2 class="card_title" itemprop="name">
			 <?php echo get_the_title(); ?>
		 </h2>
		 <div class="card__tagline">
			 <?php the_excerpt(); ?>
		 </div>

	 </div><!-- .card__content -->
 </article><!-- .card.card--listing -->
</a><!-- .grid_item -->
