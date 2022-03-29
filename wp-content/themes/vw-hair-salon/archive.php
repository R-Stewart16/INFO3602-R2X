<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VW Hair Salon
 */

get_header(); ?>
<div class="page-banner">
            <div class="page-banner__bg-image" style="color:pink;"></div>
            <div class="page-banner__content container container--narrow">
              <h1 class="page-banner__title">
                  <?php
                    if(is_category()){
                      single_cat_title( '<h1 class="page-title">', '</h1>' );
                    }
                    if(is_author()){
                      echo "Posts by ";the_author();
                    }

                  ?>   
              </h1>  <!-- hollow -->
              <div> 
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/home'); ?>">
            <i class="fa fa-home" aria-hidden="true"></i>Home</a> 
            <span class="metabox__main"><?php the_archive_title(); ?> </span></p>
        </div>
                <div class="page-banner__intro">
                    <p> <?php the_archive_description()?></p>
                </div>
            </div>
</div>
    
    <div class="container">
  <main id="maincontent" role="main" class="middle-align">
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : 
              the_post();
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


