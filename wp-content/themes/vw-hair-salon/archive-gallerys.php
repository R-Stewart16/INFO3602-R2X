<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VW Hair Salon
 */

get_header(); ?>

<div class="container">
  <main id="maincontent" role="main" class="middle-align">
     
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <p  style="line-height: 0.7; color:red; text-align:left; font-size: 20px;"><span style="font-weight:bold;">TAKE A LOOK</span>,</p>
          <p style="line-height: 0.7; color:black;  font-weight:bold; text-align:left;font-size: 30px; ">THROUGH OUR GALLERIES</p>
          
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content');
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
    
    <div class="clearfix"></div>
  </main>
</div>

<?php get_footer(); ?>