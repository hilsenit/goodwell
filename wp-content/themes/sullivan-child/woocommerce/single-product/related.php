<?php
/** CHILD THEEEEME - ADDED RACES 
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php if ( get_field('race_runned') ) : ?>

<div class="columns it-race-runned">
  <div class="col-12 default-padding pb-0">
    <h3 class="h2 blue-text text-center">Løb:</h3> 
  </div>
  <div class="col-12 default-padding">
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
  </div>
</div><!-- columns -->


<div class="it-show-interest">
  <button type="submit" class="it-button wpcf7-form-control wpcf7-submit">
      Vis interesse
  </button>
</div>

<?php endif; ?><!-- end get_field race_runned -->

<?php

if ( $related_products ) : ?>

	<section class="related products">

		<h4 class="text-center"><?php esc_html_e( 'Related products', 'woocommerce' ); ?></h2>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;

wp_reset_postdata();
