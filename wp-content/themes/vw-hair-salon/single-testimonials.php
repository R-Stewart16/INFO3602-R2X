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
            while ( have_posts() ) :
               the_post();?>
                <?php 
                  $vw_hair_salon_archive_year  = get_the_time('Y'); 
                  $vw_hair_salon_archive_month = get_the_time('m'); 
                  $vw_hair_salon_archive_day   = get_the_time('d'); 
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
                    <div class="single-post">
                        <h1><?php the_title();?></h1>
                        <div class="content-vw">
                            <?php if( get_theme_mod( 'vw_hair_salon_toggle_postdate',true) != '' || get_theme_mod( 'vw_hair_salon_toggle_author',true) != '' || get_theme_mod( 'vw_hair_salon_toggle_comments',true) != '' || get_theme_mod( 'vw_hair_salon_toggle_time',true) != '') { ?>
                                <div class="metabox">
                                    <?php if(get_theme_mod('vw_hair_salon_toggle_postdate',true)==1){ ?>
                                        <span class="entry-date"><i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $vw_hair_salon_archive_year, $vw_hair_salon_archive_month, $vw_hair_salon_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                                    <?php } ?>

                                    <?php if(get_theme_mod('vw_hair_salon_toggle_author',true)==1){ ?>
                                        <span class="entry-author"><span><?php echo esc_html(get_theme_mod('vw_hair_salon_meta_field_separator'));?></span><i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
                                    <?php } ?>


                                    <?php if(get_theme_mod('vw_hair_salon_toggle_time',true)==1){ ?>
                                      <span class="entry-time"><span><?php echo esc_html(get_theme_mod('vw_hair_salon_meta_field_separator'));?></span><i class="fas fa-clock"></i><?php echo esc_html( get_the_time() ); ?></span>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                      
                            <div class="entry-content">
                                <?php the_content(); ?>
                                <?php if(get_theme_mod('vw_hair_salon_toggle_tags',true)==1){ ?>
                                    <div class="tags"><?php the_tags(); ?></div>  
                                <?php } ?>  
                            </div> 
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                            comments_template();

                            if ( is_singular( 'attachment' ) ) {
                                // Parent post navigation.
                                the_post_navigation( array(
                                    'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-hair-salon' ),
                                ) );
                            } elseif ( is_singular( 'post' ) ) {
                                // Previous/next post navigation.
                                the_post_navigation( array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' .esc_html(get_theme_mod('vw_hair_salon_single_blog_next_navigation_text','NEXT')) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Next post:', 'vw-hair-salon' ) . '</span> ' .
                                        '<span class="post-title">%title</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' .esc_html(get_theme_mod('vw_hair_salon_single_blog_prev_navigation_text','PREVIOUS')) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-hair-salon' ) . '</span> ' .
                                        '<span class="post-title">%title</span>',
                                ) );
                            }
                        ?>
                    </div>
                    
                         
                          
                          </div>
                    <div class="row">
                    <div class="column">	
                        <?php 
                          $relatedServices = get_field('related_services');// array of post objects
                          if($relatedServices){
                              echo '<h2 class="headline headline--medium">Related Services</h2>';
                              foreach($relatedServices as $service){ //for each a post object
                              ?>
                              
                    
                      <div class="card">
                        <div class="container-frontpage">
                              <h3><a href="<?php echo get_the_permalink($service);?>">
                                          <?php echo get_the_post_thumbnail($service);?>
                                          <?php echo get_the_title($service);?>
                                  </a> </h3>
                                  </div>
                          </div>
                          
                          
                              <?php }

                                  }
                          ?>
                          </div>
                          </div>
                         
                      
                </article>
                
            <?php endwhile;?>
            <?php else :
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
   
      
    <?php } ?>
    
  </main>
</div>

<?php get_footer(); ?>