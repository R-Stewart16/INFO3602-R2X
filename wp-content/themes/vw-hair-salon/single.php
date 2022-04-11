<?php
/**
 * The Template for displaying all single posts.
 *
 * @package VW Hair Salon
 */
 
 get_header(); ?>
<div class="container">
  <main id="maincontent" role="main" class="middle-align">
    <?php
      $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_theme_options','Right Sidebar');
       if($vw_hair_salon_theme_lay == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'vw-hair-salon' ),
                'next_text' => __( 'Next page', 'vw-hair-salon' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hair-salon' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    <?php }?>
  </main>
</div>

<?php get_footer(); ?>