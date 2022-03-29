<?php if( get_theme_mod( 'vw_hair_salon_topbar_hide_show', true) != '' || get_theme_mod( 'vw_hair_salon_resp_topbar_hide_show', true) != '') { ?>
  <div class="extra-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 email">
          <?php if ( get_theme_mod('vw_hair_salon_email_address','barbersalon@gmail.com') != "" ) {?>
            <i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_email_icon','fas fa-envelope')) ;?>"></i><span><a href="mailto:<?php echo esc_attr(get_theme_mod('vw_hair_salon_email_address',''));?>"><?php echo esc_html(get_theme_mod('vw_hair_salon_email_address',''));?></a></span>
          <?php }?>
          
        </div>
        <div class="col-lg-6 col-md-6 booking-btn">
        <div class="site-header_util">
          <a href="<?php echo esc_url(site_url('/wp-login.php')); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="<?php echo esc_url(site_url('/wp-signup.php')); ?>" class="btn btn--small btn--dark-orange float-left push-left">Sign Up</a>
        </div>
          <?php if ( get_theme_mod('vw_hair_salon_booking','BOOK Appointments now') != "" ) {?>
            <a href="<?php echo esc_html( get_theme_mod('vw_hair_salon_booking','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_booking_appointment_icon','fas fa-calendar-alt')); ?>"></i><?php echo esc_html( get_theme_mod('vw_hair_salon_booking_text','') ); ?></a>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
<?php }?>
<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="logo col-lg-3 col-md-3 align-self-center">
        <?php if ( has_custom_logo() ) : ?>
          <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>
        <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <?php if ( is_front_page() && is_home() ) : ?>
              <?php if( get_theme_mod('vw_hair_salon_logo_title_hide_show',true) != ''){ ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php } ?>
            <?php else : ?>
              <?php if( get_theme_mod('vw_hair_salon_logo_title_hide_show',true) != ''){ ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php } ?>
            <?php endif; ?>
          <?php endif; ?>
          <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
          ?>
          <?php if( get_theme_mod('vw_hair_salon_tagline_hide_show',true) != ''){ ?>
            <p class="site-description">
              <?php echo esc_html($description); ?>
            </p>
          <?php } ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-3 col-md-3 topbar-content align-self-center">
        <div class="row">
          <?php if ( get_theme_mod('vw_hair_salon_location_text','') != "" ) {?>
            <div class="col-lg-2 col-md-4 col-3 p-0">
              <i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_location_icon','fas fa-map-marker-alt')); ?>"></i>
            </div>
            <div class="col-lg-10 col-md-8 col-9 contents">
              <?php if ( get_theme_mod('vw_hair_salon_location_text','') != "" ) {?>
                <p class="bold-font"><?php echo esc_html( get_theme_mod('vw_hair_salon_location_text','') ); ?></p>
              <?php }?>
              <?php if ( get_theme_mod('vw_hair_salon_address','') != "" ) {?>
                <p><?php echo esc_html( get_theme_mod('vw_hair_salon_address','') ); ?></p>
              <?php }?>
            </div>
          <?php }?>
        </div>
      </div>          
      <div class="col-lg-3 col-md-3 tpbr-content align-self-center">
        <div class="row">
          <?php if ( get_theme_mod('vw_hair_salon_day','10') != "" ) {?>
            <div class="col-lg-2 col-md-4 col-3 p-0">
              <i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_timing_icon','far fa-clock')); ?>"></i>
            </div>
            <div class="col-lg-10 col-md-8 col-9 contents">
              <?php if ( get_theme_mod('vw_hair_salon_day','') != "" ) {?>
                <p class="bold-font"><?php echo esc_html( get_theme_mod('vw_hair_salon_day','')); ?></p>
              <?php }?>
              <?php if ( get_theme_mod('vw_hair_salon_time','10') != "" ) {?>
                <p><?php echo esc_html( get_theme_mod('vw_hair_salon_time','')); ?></p>
              <?php }?>
            </div>
          <?php }?>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 align-self-center">
        <div class="socialbox">
          <?php dynamic_sidebar('social-icon') ?>
        </div>
      </div> 
    </div>
  </div>
</div>