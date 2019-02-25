<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>

  <body <?php body_class(); ?>>

      <div class="wrapper container contact-container">
        <div class="columns pt-4">
          <div class="column col-8 col-sm-12 pt-4 contact-form">
              <?php
              if (have_posts()):
                while (have_posts()) : the_post();
                  the_content();
                endwhile;
              endif;
              ?>
          </div>
          <div class="column contact-sidebar col-4 col-sm-12 default-padding red-background">
            <?php if( get_field('contact_image') ) : ?>
              <img class="def-pad-top contact-image" src="<?php the_field('contact_image'); ?>">
            <?php endif; ?>
            <?php if( get_field('contact_tlf') ) : ?>
              <p class="def-pad-top">
                <a href="tel:+4512345678">Tlf. nr.: <?php the_field('contact_tlf'); ?></a>
			  </p>
            <?php endif; ?>
            <?php if( get_field('contact_email') ) : ?>
              <p class="def-pad-top-bot">
                <a href="mailto:<?php the_field('contact_email'); ?>">
                  <?php the_field('contact_email'); ?>
                </a>
              </p>
            <?php endif; ?>
            <?php if( get_field('contact_sidebar') ) : ?>
              <?php the_field('contact_sidebar'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

<?php get_footer(); ?>

