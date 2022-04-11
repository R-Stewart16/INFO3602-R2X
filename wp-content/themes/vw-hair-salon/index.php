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
<div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?> );"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title">Our Blog</h1>  <!-- hollow -->
                <div class="page-banner__intro">
                <p> <?php the_field('page_banner_subtitle'); ?></p>
                </div>
            </div>  
    </div>
<div class="container">

    <div class="clearfix"></div>
  <main id="maincontent" role="main" class="middle-align">
    
      
    
      <div class="row">
      <div id="our-services">
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
              
            </div>
          <?php } ?>
        </div>
      </div>
  </main>
</div>

<?php get_footer(); ?>