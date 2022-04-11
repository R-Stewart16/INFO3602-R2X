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
  <main role="main" class="middle-align" >
     
      <div>
        <div>
        <p  style="line-height: 0.7; color:red; text-align:left; font-size: 20px;"><span style="font-weight:bold;">OUR CUSTOMERS</span> ARE TALKING,</p>
          <p style="line-height: 0.7; color:black;  font-weight:bold; text-align:left;font-size: 30px; "> LETS READ THEIR TESTIMONIALS</p>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();?>

              <article class="testimonial-article" id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
                <div class="service-box wow bounceInDown delay-1000" data-wow-duration="2s">
                  <?php $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_blog_layout_option','Default');?>
                  
                  <?php if($vw_hair_salon_theme_lay == 'Center'){ ?>
                    <div class="new-text">
                      <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2> 
                      <?php if( get_theme_mod( 'vw_hair_salon_toggle_postdate',true) != '' || get_theme_mod( 'vw_hair_salon_toggle_author',true) != '' || get_theme_mod( 'vw_hair_salon_toggle_comments',true) != '' || get_theme_mod( 'vw_hair_salon_toggle_time',true) != '') { ?>
                        <div >
                          
                          <i class="fa fa-quote-right" aria-hidden="true"></i>

                        </div>
                      <?php } ?>
                      
                      <div class="new-text">
                        <div class="entry-content">
                          <p>
                              <?php the_content(); ?>
                          </p>
                          <div style="text-align:right"> 
                            <?php the_title();?>
                            <?php the_date();?>
                            <?php the_time();?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }else if($vw_hair_salon_theme_lay == 'Left'){ ?>
                  
                  <?php } ?>
                </div>
              </article>
              <?php 


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
  </main>
</div>

<?php get_footer(); ?>