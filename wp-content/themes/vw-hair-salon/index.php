<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Hair Salon
 */

get_header(); ?>

<div class="container">
<div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?> );"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title">Our Blog</h1>  <!-- hollow -->
                <div class="page-banner__intro">
                    <p> Keep up with all things R^2X</p>
                </div>
            </div>  
    </div>
  <main id="maincontent" role="main" class="middle-align">
    <?php
      $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_theme_options','Right Sidebar');
      if($vw_hair_salon_theme_lay == 'Left Sidebar'){ ?>
      <div class="row">
        <div class="sidebar col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_hair_salon_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_hair_salon_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php }else if($vw_hair_salon_theme_lay == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_hair_salon_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_hair_salon_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="sidebar col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else if($vw_hair_salon_theme_lay == 'One Column'){ ?>
      <div id="our-services" class="services">
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content',get_post_format()); 
          endwhile;

          else :
            get_template_part( 'no-results' ); 
          endif; 
        ?>
        <?php if( get_theme_mod( 'vw_hair_salon_blog_pagination_hide_show',true) != '') { ?>
          <div class="navigation">
            <?php vw_hair_salon_blog_posts_pagination(); ?>
            <div class="clearfix"></div>
          </div>
        <?php } ?>
      </div>
    <?php }else if($vw_hair_salon_theme_lay == 'Three Columns'){ ?>
      <div class="row">
        <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-6 col-md-6">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_hair_salon_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_hair_salon_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
      </div>
    <?php }else if($vw_hair_salon_theme_lay == 'Four Columns'){ ?> 
      <div class="row">
        <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-3 col-md-3">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_hair_salon_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_hair_salon_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
        <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
      </div>
    <?php }else if($vw_hair_salon_theme_lay == 'Grid Layout'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-9 col-md-9">
          <div class="row">
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/grid-layout' ); 
              endwhile;

              else :
                get_template_part( 'no-results' ); 
              endif; 
            ?>
          </div>
          <?php if( get_theme_mod( 'vw_hair_salon_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_hair_salon_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else {?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">  
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_hair_salon_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_hair_salon_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="sidebar col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
  </main>
</div>

<?php get_footer(); ?>