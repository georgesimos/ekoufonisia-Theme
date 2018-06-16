<?php
$id = get_option( 'id_setting', '11366' );
$post_info = get_post( $id );
$title = get_the_title( $id );
$content = $post_info->post_content;
$excerpt = wp_trim_words ( $content, 50, NULL );
$post_link = esc_url( get_permalink( $id ) );
$bg_image = get_the_post_thumbnail( $id,'full' );
?>
<div class="hotel-logo">
  <h2 class="screen-reader-text"><?php esc_html_e( 'Koufonisia Hotels', 'listable-child-theme' ) ?> </h2>
  <div class="align-icon">
    <?php
     if (get_bloginfo('language') == "el" ) { ?>
    <img class="hotel-icon" alt="Koufonisia Listings Discover something nice" src="https://e-koufonisia.com/wp-content/uploads/2017/05/ANAKALYPSTE.png" scale="0" >
   <?php } else { ?>
      <img class="hotel-icon" alt="Koufonisia Listings Discover something nice" src="https://e-koufonisia.com/wp-content/uploads/2017/05/Discover-1.png" scale="0" >
  <?php } ?>
  </div>
</div>
<section id="hotel-section">
  <div class="featured-hotel">
    <div class="half">
      <div class="featured-hotel-img">
           <?php echo $bg_image ?>
      </div>
    </div>
      <div class="half">
        <div class="pad10">
          <h2><?php echo $title ?> </h2>
          <span class="gs_sep_line"></span>
          <div class="featured-hotel-content">
            <p><?php echo $excerpt ?></p>
          </div>
          <div class="featured-hotel-button">
            <button><a href="<?php echo $post_link ?>"><?php esc_html_e( 'Start Now', 'listable-child-theme' ) ?></a></button>
          </div>
        </div>
      </div>
  </div>
</section>
