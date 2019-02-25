<?php
/**
 * CHILD THEME
 * MY SINGLE PRODUCT - RATING
 * ADDED CHASSER NR AND RACE TABEL
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( 'no' === get_option( 'woocommerce_enable_review_rating' ) ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ( $rating_count > 0 ) : ?>

	<div class="woocommerce-product-rating">
		<?php
		echo wc_get_rating_html( $average, $rating_count );

		/* Translators: %s = the number of reviews */
		if ( comments_open() ) : ?>
			<a href="#reviews" class="woocommerce-review-link" rel="nofollow"><?php printf( _nx( '%s review', '%s reviews', $review_count, 'Translators: %s = the number of reviews', 'sullivan' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?></a>
		<?php endif ?>
	</div>

      <?php 
        $chassis = get_field( 'chassis_nr' );
        $engine = get_field( 'engine_nr' );
        $info = get_field( 'sidebar_info' ); ?>
      <?php $sidebar_on = $chasses || $engine || $info ?> 
      
          <h1 class="car-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <!-- LØB KØRT -->
          <?php if ( get_field('race_runned') ) : ?>
              <h2>Løb kørt</h2>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Bane</th>
                    <th>Tid</th>
                    <th>Dato</th>
                    <th>Kører</th>
                    <th>Note</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if( have_rows('loeb') ):
                  while ( have_rows('loeb') ) : the_row();
                  ?>
                  <tr>
                    <td><?php the_sub_field('bane'); ?></td>
                    <td><?php the_sub_field('tid'); ?></td>
                    <td><?php the_sub_field('dato'); ?></td>
                    <td><?php the_sub_field('korer'); ?></td>
                    <td><?php the_sub_field('note'); ?></td>
                  </tr>
                  <?php 
                  endwhile;
                  endif; 
                  ?>
                </tbody>
              </table>
          <?php endif; ?><!-- LØB KØRT END -->

        <div class="column col-3 pr-0">
          <?php if($sidebar_on) : ?>
          <div class="hope-car-sidebar">
            <?php if($chassis) : ?>
            <div class="hope-car-sidebar-extra white-text">Chassis no: <?php echo $chassis ?></div> 
            <?php endif; ?>
            <?php if($engine) : ?>
            <div class="hope-car-sidebar-extra white-text">Engine no: <?php echo $engine ?></div> 
            <?php endif; ?>
            <?php if($info): echo $info; endif; ?>
          </div>
          <?php endif; ?><!-- sidebar_on -->

<?php endif; ?>
