<?php
/**
 * The template for displaying all single posts and attachments
 *
 */


get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

    <div class="hope-navigation">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();
      
      ?>

      </div><!-- hope-navigation -->
      <div class="hope-car-image">
        <h1 class="image-title"><?php the_title(); ?></h1>
          <?php
          $images = get_field('gallery');
          if( $images ): ?>
              <div class="slick-slider">
                <?php foreach( $images as $image ): ?>
                  <img src="<?php echo $image['url']; ?>" />
                <?php endforeach; ?>
              </div>
          <?php endif; ?>
      </div>

      <?php 
        $chassis = get_field( 'chassis_nr' );
        $engine = get_field( 'engine_nr' );
        $info = get_field( 'sidebar_info' ); ?>
      <?php $sidebar_on = $chasses || $engine || $info ?> 
      
      <div class="columns single-car">
        <div class="column col-9 hope-car-content">
          <h1 class="car-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <!-- LØB KØRT -->
          <?php if ( get_field('race_runned') ) : ?>
          <div class="columns">
            <div class="col-12 default-padding pb-0">
              <h2 class="h2 blue-text text-center">Løb kørt</h2> </div>
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
          <?php endif; ?><!-- LØB KØRT END -->
        </div>

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
          <div class="hope-car-contact">
            <div class="btn hope-car-sidebar-btn js-toggle-modal">
              <?php echo get_field('status')[0] == 'salg' ? "Vis interesse" : "Lej"; ?>
            </div>
            <div class="modal contact-modal" id="modal-id">
              <a href="#close" class="modal-overlay js-toggle-modal c-pointer" aria-label="Close"></a>
              <div class="modal-container">
                <div class="modal-header">
                  <a href="#close" class="btn btn-clear float-right js-toggle-modal" aria-label="Close"></a>
                  <div class="modal-title"><?php the_title(); ?></div>
                </div>
                <div class="modal-body">
                  <div class="content">
                    <?php echo do_shortcode('[contact-form-7 id="58" title="salg"]'); ?>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div><!-- columns -->

      <?php get_template_part( 'content', get_post_format() ); ?>

      <div class="columns">
        <div class="col-6 default-padding">
          <?php previous_post_link('<div class="hope-nav-title pl-2">%link</div>', '&#171; %title'); ?>
        </div>
        <div class="col-6 default-padding">
          <?php next_post_link('<div class="hope-nav-title text-right pr-2">%link</div>', '%title &#187;'); ?>
        </div>
      </div>

      <?php endwhile; ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_footer(); ?>
