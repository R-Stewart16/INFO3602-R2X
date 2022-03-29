<?php
  $vw_hair_salon_search_hide_show = get_theme_mod( 'vw_hair_salon_search_hide_show' );
  if ( 'Disable' == $vw_hair_salon_search_hide_show ) {
   $colmd = 'col-lg-9 col-md-9';
  } else { 
   $colmd = 'col-lg-8 col-md-6 col-3';
  } 
?>
<div class="menubar header <?php if( get_theme_mod( 'vw_hair_salon_sticky_header', false) != '' || get_theme_mod( 'vw_hair_salon_stickyheader_hide_show', false) != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="row bg-home">
      <div class="<?php echo esc_html( $colmd ); ?>">
        <?php if(has_nav_menu('primary')){ ?>
          <div class="toggle-nav mobile-menu">
         
            <button onclick="vw_hair_salon_menu_open_nav()" class="responsivetoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-hair-salon'); ?></span></button>
          </div>
        <?php } ?>
        <div id="mySidenav" class="nav sidenav">
          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-hair-salon' ); ?>">
            <ul>
              <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"' ?>>
                    <a href="<?php echo site_url('/home');;?>">Home</a>
              </li>
              <li <?php if(get_post_type() == 'testimonial') echo 'class="current-menu-item"' ?>>
                    <a href="<?php echo get_post_type_archive_link('testimonials');?>">Testimonials</a>
              </li>
              <li <?php if(get_post_type() == 'special')?>>
                    <a href="<?php echo get_post_type_archive_link('specials');?>">Specials</a>
              </li>
              <li <?php if(get_post_type() == 'service')?>>
                    <a href="<?php echo get_post_type_archive_link('services');?>">Our Services</a>
              </li>
              <li <?php if(get_post_type() == 'gallery') ?>>
                    <a href="<?php echo get_post_type_archive_link('gallerys');?>">Gallery</a>
              </li>
              <li <?php if(get_post_type() == 'post')?>>
                    <a href="<?php echo site_url('/blog');?>">Blog</a>
              </li>
              <li <?php if(get_post_type() == 'post')?>>
                    <a href="<?php echo site_url('/legal');?>">Legal</a>
                    </li>
              <li <?php if(get_post_type() == 'post') ?>>
                    <a href="<?php echo site_url('/about-us');?>">About Us</a>
              </li>
          </ul> 

            <?php 
              if(has_nav_menu('primary')){
                wp_nav_menu( array( 
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu clearfix' ,
                  'menu_class' => 'clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) ); 
              }
            ?>
            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_hair_salon_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_res_close_menu_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-hair-salon'); ?></span></a>
          </nav>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6 phone">
        <?php if ( get_theme_mod('vw_hair_salon_phone_no','') != "" ) {?>
          <i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_phone_no_icon','fas fa-phone-volume')); ?>"></i><span><a href="tel:<?php echo esc_attr( get_theme_mod('vw_hair_salon_phone_no','') ); ?>"><?php echo esc_html(get_theme_mod('vw_hair_salon_phone_no',''));?></a></span>
        <?php }?>
      </div>
      <?php if ( 'Disable' != $vw_hair_salon_search_hide_show ) {?>
        <div class="search-box col-lg-1 col-md-2 col-3">
          <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_search_icon','fas fa-search')); ?>"></i></a></span>
        </div>
      <?php } ?>
    </div>
    <div class="serach_outer">
      <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
      <div class="serach_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>