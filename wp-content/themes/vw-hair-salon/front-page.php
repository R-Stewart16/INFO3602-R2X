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
  <main id="maincontent" role="main" class="middle-align">
    <?php do_action( 'vw_hair_salon_before_slider' ); ?>

    <?php if( get_theme_mod( 'vw_hair_salon_slider_hide_show', false) != '' || get_theme_mod( 'vw_hair_salon_resp_slider_hide_show', false) != '') { ?>
      <section class="slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'vw_hair_salon_slider_speed',4000)) ?>"> 
          <?php $vw_hair_salon_slider_page = array();
            for ( $count = 1; $count <= 4; $count++ ) {
              $mod = intval( get_theme_mod( 'vw_hair_salon_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $vw_hair_salon_slider_page[] = $mod;
              }
            }
            if( !empty($vw_hair_salon_slider_page) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $vw_hair_salon_slider_page,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $i = 1;
          ?>     
          <div class="carousel-inner" role="listbox">
            <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php the_post_thumbnail(); ?>
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <h1 class="wow slideInRight" data-wow-duration="3s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <p class="wow slideInRight" data-wow-duration="3s"><?php $excerpt = get_the_excerpt(); echo esc_html( vw_hair_salon_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_hair_salon_slider_excerpt_number','30')))); ?></p>
                    <?php if( get_theme_mod('vw_hair_salon_slider_button_text','READ MORE') != ''){ ?>
                      <div class="more-btn wow slideInRight" data-wow-duration="3s">              
                        <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_hair_salon_slider_button_text',__('READ MORE','vw-hair-salon')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_hair_salon_slider_button_text',__('READ MORE','vw-hair-salon')));?></span></a>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
              <div class="no-postfound"></div>
            <?php endif;
          endif;?>
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-hair-salon' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-hair-salon' );?></span>
          </a>
        </div>  
        <div class="clearfix"></div>
      </section> 
    <?php }?>

    <?php do_action( 'vw_hair_salon_after_slider' ); ?>

    <?php if( get_theme_mod('vw_hair_salon_section_title') != ''){ ?>
      <section class="need wow zoomInDown delay-1000" data-wow-duration="2s">
        <div class="container">
          <?php if( get_theme_mod( 'vw_hair_salon_section_title','' ) != '') { ?>
            <h2 class="text"><?php echo esc_html( get_theme_mod('vw_hair_salon_section_title','')); ?></h2>
          <?php }?>
          <div class="row">
            <div class="tab-main col-lg-6 col-md-6">
              <ul class="nav tab-nav-need row m-0">
                <?php 
                for ($n=0; $n < 4; $n++) { 
                  $args = array(
                  'post_type' => 'page',
                  'post_status' => 'publish',
                  'page_id' => get_theme_mod( 'vw_hair_salon_tab_pages'.$n)
                  );
                  $new = new WP_Query($args); ?>
                    <?php $j=1;
                      while ( $new->have_posts() ){
                          $new->the_post();  ?>
                          <li class="nav-item col-lg-6 col-md-6 col-6">
                            <a class="nav-link <?php if($n==1){ echo 'active'; } ?>" href="#blog_tab<?php echo esc_attr($n);?>" role="tab" data-toggle="tab">
                              <?php the_post_thumbnail(); ?>
                            </a>
                          </li>
                      <?php $j++;}
                  wp_reset_query(); ?>                
                <?php } ?>
              </ul>
            </div>
            <div class="tab-content blog_content col-lg-6 col-md-6">
              <?php 
                for ($j=0; $j < 4; $j++) {               
                  $args = array(
                  'post_type' => 'page',
                  'post_status' => 'publish',
                  'page_id' => get_theme_mod( 'vw_hair_salon_tab_pages'.$j)
                );
                $new = new WP_Query($args); 
                ?>
                <?php $i=1; while ( $new->have_posts() ){
                    $new->the_post();  ?>
                    <div role="tabpanel" class="tm_tab tab-pane fade <?php if($j==1){ echo 'in active show'; } ?>" id="blog_tab<?php echo esc_attr($j);?>">
                      <div class="blog_outer_box">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                        <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_hair_salon_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_hair_salon_what_you_need_excerpt_number','30')))); ?></p>
                      </div>
                    </div>
                  <?php $i++; }
                wp_reset_query(); ?>
              <?php }?>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </section>
    <?php }?>

    <?php do_action( 'vw_hair_salon_after_What_do_you_need' ); ?>

    <div class="content-vw">
      <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          
        <?php endwhile; // end of the loop. ?>
      </div>
    </div>
    <div>
      <?php
        $LocationQ = new WP_Query(array(
          'posts_per_page' => 2,
          'post_type' => 'testimonial'
        ));
        while($LocationQ ->have_posts()){
          $LocationQ ->the_post();?>
        <a href="<?php the_permalink();?>"> <?php the_post_thumbnail() ;the_title(); the_content()?> </a>
      <?php }?>
    </div>
    
        

  </main>
</div>

<?php get_footer(); ?>

