<?php /* Template Name: Udlejning */ ?>
<?php get_header(); ?>
  <body <?php body_class(); ?>>

    <main class="wrapper container">

      <?php $rent_loop = new WP_Query( 
        array( 
          'post_type' => 'post', 
          'posts_per_page' => 20,
          'meta_query'	=> array(
            array(
            'key'		=> 'status',
            'value'		=> 'udlejning',
            'compare'	=> 'LIKE'
            )
          )
        )
      ); 
      ?>

      <?php if ( $rent_loop->have_posts() )  : ?>

      <div class="columns hope-page-text-wrapper">
        <div class="column col-12 hope-page-text">
            <?php echo get_post_field('post_content', $post->ID); ?>
        </div>
        <div class="col-12"></div>

        <?php while ( $rent_loop->have_posts() ) : $rent_loop->the_post(); ?>

        <div class="column col-3 col-sm-12 col-md-4 hope-featured-image-wrap">

          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="hope-featured-image">
            <?php the_post_thumbnail( 'post-image' ); ?>    
            <h1 class="title">
              <?php the_title(); ?>
            </h1>
          </a>

        </div>

        <?php endwhile; ?>

      </div><!-- columns -->

      <?php else : ?>
      <h2 class="text-center">Ingen biler kan udlejes lige nu</h2>
      <?php endif; ?>

<?php get_footer(); ?>
