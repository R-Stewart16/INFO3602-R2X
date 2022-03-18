

<!-- THIS HERE IS FOR THE TITLE OF THE POST -->

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <!-- <div class="service-box wow bounceInDown delay-1000" data-wow-duration="2s"> -->
    <?php $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_blog_layout_option','Default');
    if($vw_hair_salon_theme_lay == 'Default'){ ?>
      <div class="row">
       <!-- recent post and recent comment sidebar -->
        <div class="<?php echo esc_html( $colmd ); ?> pmain-box">
        <!--  -->
          <div class="post-main-box">
            <div class="box-image">
              <?php 
                if(has_post_thumbnail() && get_theme_mod( 'vw_hair_salon_featured_image_hide_show',true) != '') { 
                  the_post_thumbnail(); 
                }
              ?>  
            </div>
           <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>     
            
            <?php if( get_theme_mod('vw_hair_salon_button_text','Click Here For More Details!') != ''){ ?>
              <div class="content-bttn">
                <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_hair_salon_button_text',__('Click Here For More Details!','vw-hair-salon')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_hair_salon_button_text',__('Click Here For More Details!','vw-hair-salon')));?></span></a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div> 
    <?php }?>
  <!-- </div> -->
</article>
