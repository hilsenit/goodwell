<?php /* Template Name: Forside */ ?>
<?php get_header(); ?>

<body <?php body_class(); ?>>

  <main class="wrapper container">

    <?php $sale_loop = new WP_Query( 
    array( 
      'post_type' => 'post', 
      'posts_per_page' => 20,
      'meta_query'	=> array(
        array(
          'key'		=> 'status',
          'value'		=> 'salg',
          'compare'	=> 'LIKE'
        )
      )
    )
    ); 
    ?>

    <?php if ( $sale_loop->have_posts() )  : ?>

      <?php 
        $index = 1;
        while ( $sale_loop->have_posts() ) : $sale_loop->the_post();?>
          <?php
          $images = get_field('gallery');
          if( $images && $index == 1 ): ?>
          <div class="hope-car-image">
                <h2 class="image-title"><?php the_title(); ?></h1>
                <a href="<?php the_permalink(); ?>" class="slide-title slide-btn">Læs mere</a>
                <div class="slick-slider">
                  <?php foreach( $images as $image ): ?>
                    <img src="<?php echo $image['url']; ?>">
                  <?php endforeach; ?>
                </div>
            <?php endif; ?>
          </div><!-- hope-car-image -->
        <?php $index++ ?>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>

    <div class="columns slider-nav">
      <?php $img_ind = 0; ?>
      <?php while ( $sale_loop->have_posts() ) : $sale_loop->the_post(); ?>
        <?php if( $img_ind != 0) : ?>
        <a href="<?php the_permalink(); ?>" class="column col-3 col-sm-12 col-md-4 hope-featured-image-wrap slide-thumbs">
          <img src="<?php the_post_thumbnail_url( 'front-thumb' ); ?>">    
          <h4 class="title">
            <?php the_title(); ?>
          </h4>
        </a>
        <?php endif; ?>
      <?php $img_ind++; ?>
      <?php endwhile; ?>
    </div><!-- columns -->

    <?php else : ?>
    <h2 class="text-center">Ingen biler er til salg lige nu </h2>
    <?php endif; ?> 

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


    <div class="columns slider-nav">
      <a href="./udlejning" class="col-12 frontpage-title def-pad-top text-center mt-4">Udlejning</a>

      <?php while ( $rent_loop->have_posts() ) : $rent_loop->the_post(); ?>

      <div class="column col-3 col-sm-12 col-md-4 hope-featured-image-wrap slide-thumbs">

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="hope-featured-image">
          <?php the_post_thumbnail( 'post-image' ); ?>    
          <h4 class="title">
            <?php the_title(); ?>
          </h4>
        </a>

      </div>

      <?php endwhile; ?>
      <?php wp_reset_query(); ?>

    </div><!-- columns -->

    <?php else : ?>
      <h2 class="text-center">Ingen biler kan udlejes lige nu</h2>
    <?php endif; ?>

    <?php if( get_field('race_text') ) : ?>
    <div class="columns race-field">
      <a href="./race" class="col-12 column def-pad-top frontpage-title text-center mt-4">Race</a>
      <div class="column col-12 px-0">
        <img class="img-fit-cover" src="<?php the_field('race_image'); ?>" />
      </div>
      <div class="column col-12 hope-page-text">
        <?php the_field('race_text'); ?>
      </div>
    </div><!-- columns -->
    <?php endif; ?>

    <?php get_footer(); ?>
