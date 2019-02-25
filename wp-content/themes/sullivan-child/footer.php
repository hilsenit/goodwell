			<footer id="site-footer" class="bg-black">
      <ul class="social-properties">
      <?php if( get_field('facebook_link', 'option') || get_field('instagram_link', 'option') || get_field('twitter_link', 'option') ) : ?>
        <?php if( get_field('instagram_link', 'option') ) : ?>
        <li> 
          <a rel="external" href="<?php the_field('instagram_link', 'option') ?>" target="_blank">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve" preserveAspectRatio="xMidYMin meet">
              <path d="M19.6,5h-9.2C7.4,5,5,7.4,5,10.4v9.2c0,3,2.4,5.4,5.4,5.4h9.2c3,0,5.4-2.4,5.4-5.4v-9.2C25,7.4,22.6,5,19.6,5z M23.4,19.6 c0,2.1-1.7,3.8-3.8,3.8h-9.2c-2.1,0-3.8-1.7-3.8-3.8v-9.2c0-2.1,1.7-3.8,3.8-3.8h9.2c2.1,0,3.8,1.7,3.8,3.8V19.6z M19.5,14.3 c-0.1-1-0.6-1.8-1.3-2.5c-0.7-0.7-1.6-1.1-2.5-1.3c-0.4-0.1-0.9-0.1-1.3,0c-1.2,0.2-2.2,0.8-2.9,1.8c-0.7,1-1,2.1-0.8,3.3 c0.2,1.2,0.8,2.2,1.8,2.9c0.8,0.6,1.7,0.9,2.7,0.9c0.2,0,0.4,0,0.7,0c1.2-0.2,2.2-0.8,2.9-1.8C19.4,16.7,19.7,15.5,19.5,14.3z M15.5,17.8c-0.8,0.1-1.5-0.1-2.1-0.5c-0.6-0.5-1-1.1-1.1-1.9c-0.1-0.8,0.1-1.5,0.5-2.1c0.5-0.6,1.1-1,1.9-1.1c0.1,0,0.3,0,0.4,0 c0.1,0,0.3,0,0.4,0c1.3,0.2,2.2,1.2,2.4,2.4C18.1,16.1,17,17.6,15.5,17.8z M20.6,9.4c-0.2-0.2-0.4-0.2-0.6-0.2s-0.4,0.1-0.6,0.2 c-0.2,0.2-0.2,0.4-0.2,0.6s0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.4,0.2-0.6 C20.9,9.7,20.8,9.5,20.6,9.4z"></path>
            </svg>
          </a>
        </li>
        <?php endif; ?>
        <?php if( get_field('facebook_link', 'option') ) : ?>
        <li>
          <a rel="external" href="<?php the_field('facebook_link', 'option') ?>" target="_blank">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve" preserveAspectRatio="xMidYMin meet">
              <path d="M20.5,4l-2.9,0c-3.2,0-5.3,2.1-5.3,5.4v2.5H9.5c-0.2,0-0.4,0.2-0.4,0.4V16c0,0.2,0.2,0.4,0.4,0.4h2.9v9.1 c0,0.2,0.2,0.4,0.4,0.4h3.7c0.2,0,0.4-0.2,0.4-0.4v-9.1h3.4c0.2,0,0.4-0.2,0.4-0.4l0-3.6c0-0.1,0-0.2-0.1-0.3s-0.2-0.1-0.3-0.1H17 V9.8c0-1,0.2-1.5,1.6-1.5l1.9,0c0.2,0,0.4-0.2,0.4-0.4V4.5C20.9,4.2,20.7,4,20.5,4z"></path>
            </svg>
          </a>
        </li>
        <?php endif; ?>
        <?php if( get_field('twitter_link', 'option') ) : ?>
        <li>
          <a rel="external" href="<?php the_field('twitter_link', 'option') ?>" target="_blank">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve" preserveAspectRatio="xMidYMin meet">
              <path d="M25,8.8c-0.7,0.3-1.5,0.5-2.4,0.6c0.8-0.5,1.5-1.3,1.8-2.3c-0.8,0.5-1.7,0.8-2.6,1c-0.7-0.8-1.8-1.3-3-1.3 c-2.3,0-4.1,1.8-4.1,4.1c0,0.3,0,0.6,0.1,0.9c-3.4-0.2-6.4-1.8-8.5-4.3C6,8.2,5.8,8.9,5.8,9.7c0,1.4,0.7,2.7,1.8,3.4 c-0.7,0-1.3-0.2-1.9-0.5v0.1c0,2,1.4,3.6,3.3,4c-0.3,0.1-0.7,0.1-1.1,0.1c-0.3,0-0.5,0-0.8-0.1c0.5,1.6,2,2.8,3.8,2.8 c-1.4,1.1-3.2,1.8-5.1,1.8c-0.3,0-0.7,0-1-0.1c1.8,1.2,4,1.8,6.3,1.8c7.5,0,11.7-6.3,11.7-11.7l0-0.5C23.8,10.3,24.5,9.6,25,8.8z"></path>
            </svg>
          </a>
        </li>
        <?php endif; ?>
        <?php endif; ?><!-- || -->
        
      </ul>

				<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>

					<div class="section-inner footer-widgets">

						<div class="widgets-wrapper">

							<?php

							for ( $i = 1; $i <= 4; $i++ ) :

								if ( is_active_sidebar( 'footer-' . $i ) ) :

									if ( $i === 2 ) echo '<div class="secondary-widgets">'; ?>

									<div class="column column-<?php echo absint( $i ); ?>">

										<div class="widgets">

											<?php dynamic_sidebar( 'footer-' . $i ); ?>

										</div><!-- .widgets -->

									</div><!-- .column-<?php echo absint( $i ); ?> -->

									<?php

								endif;

							endfor;

							// If the secondary widgets div has been opened, close it
							if ( $i > 1 ) {
								echo '</div><!-- .secondary-widgets -->';
							}

							?>

						</div><!-- .widgets-wrapper -->

					</div><!-- .footer-widgets -->

				<?php endif; ?>

				<div class="section-inner credits">

					<p>
						<center>&copy; <?php echo date_i18n( __( 'Y', 'sullivan' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-name"><?php wp_kses_post( bloginfo( 'name' ) ); ?></a></center>
					</p>

					<?php if ( has_nav_menu( 'social' ) ) : ?>

						<ul class="social-menu social-icons">

							<?php
							wp_nav_menu( array(
								'theme_location'	=> 'social',
								'container'			=> '',
								'container_class'	=> 'menu-social',
								'items_wrap'		=> '%3$s',
								'menu_id'			=> 'menu-social-items',
								'menu_class'		=> 'menu-items',
								'depth'				=> 1,
								'link_before'		=> '<span>',
								'link_after'		=> '</span>',
								'fallback_cb'		=> '',
							) );
							?>

						</ul><!-- .social-menu -->

					<?php endif; ?>

				</div><!-- .section-inner.credits -->

			</footer><!-- .footer -->

		</div><!-- .body-inner -->
		
		<?php wp_footer(); ?>

	</body>
</html>
