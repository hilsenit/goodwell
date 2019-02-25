<?php get_header(); ?>

  <body <?php body_class(); ?>>

      <div class="wrapper container contact-container">
        <div class="columns pt-4">
          <div class="column col-8 col-sm-12 pt-4 default-padding">
              <?php
              if (have_posts()):
                while (have_posts()) : the_post();
                  the_content();
                endwhile;
              endif;
              ?>
          </div>
          <div class="column col-4 col-sm-12 default-padding red-background">
            <?php the_field('contact_sidebar'); ?>
          </div>
        </div>
      </div>

<?php get_footer(); ?>

