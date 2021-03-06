<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Hair Salon
 */
?>

<footer role="contentinfo">
    <div class="copyright-wrapper footer">
        <div class="container">
            <?php
                $count = 0;
                
                if ( is_active_sidebar( 'footer-1' ) ) {
                    $count++;
                }
                if ( is_active_sidebar( 'footer-2' ) ) {
                    $count++;
                }
                if ( is_active_sidebar( 'footer-3' ) ) {
                    $count++;
                }
                if ( is_active_sidebar( 'footer-4' ) ) {
                    $count++;
                }
                // $count == 0 none
                if ( $count == 1 ) {
                    $colmd = 'col-md-12 col-sm-12';
                } elseif ( $count == 2 ) {
                    $colmd = 'col-md-6 col-sm-6';
                } elseif ( $count == 3 ) {
                    $colmd = 'col-md-4 col-sm-4';
                } else {
                    $colmd = 'col-md-3 col-sm-3';
                }
            ?>
             <div class="row">
                <div class="<?php if ( !is_active_sidebar( 'footer-1' ) ){ echo "footer_hide"; }else{ echo "$colmd"; } ?> col-xs-12 footer-block">
                  <?php dynamic_sidebar('footer-1'); ?>
                </div>
                <div class="<?php if ( is_active_sidebar( 'footer-2' ) ){ echo "$colmd"; }else{ echo "footer_hide"; } ?> col-xs-12 footer-block">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
                <div class="<?php if ( is_active_sidebar( 'footer-3' ) ){ echo "$colmd"; }else{ echo "footer_hide"; } ?> col-xs-12 col-xs-12 footer-block">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div>
                <div class="<?php if ( !is_active_sidebar( 'footer-4' ) ){ echo "footer_hide"; }else{ echo "$colmd"; } ?> col-xs-12 footer-block">
                    <?php dynamic_sidebar('footer-4'); ?>
                </div>
            </div>
        </div>
    </div>

    <div id="" class="footer-2">
        <div class="container">
          	<div class="copyright text-center">
                <p><?php vw_hair_salon_credit(); ?> <?php echo esc_html(get_theme_mod('vw_hair_salon_footer_text',__('By VWThemes','vw-hair-salon'))); ?></p>
                <?php if( get_theme_mod( 'vw_hair_salon_hide_show_scroll',true) != '' || get_theme_mod( 'vw_hair_salon_resp_scroll_top_hide_show',true) != '') { ?>
                    <?php $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_scroll_top_alignment','Right');
                    if($vw_hair_salon_theme_lay == 'Left'){ ?>
                        <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_scroll_top_icon','fas fa-angle-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'vw-hair-salon' ); ?></span></a>
                    <?php }else if($vw_hair_salon_theme_lay == 'Center'){ ?>
                        <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_scroll_top_icon','fas fa-angle-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'vw-hair-salon' ); ?></span></a>
                    <?php }else{ ?>
                        <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('vw_hair_salon_scroll_top_icon','fas fa-angle-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'vw-hair-salon' ); ?></span></a>
                    <?php }?>
                <?php }?>
          	</div>
        </div>
      	<div class="clear"></div>
    </div>
</footer>
<!-- LIVE SEARCH -->
<div class="search-overlay">
  <div class="search-overlay__top">
  <div class="container">
    <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
    <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
    <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
  </div>  
</div>
<!--this here is the result page -->
<div class="container">
  <div id="search-overlay__results">

  </div>

</div>
<!-- end -->
</div>

<?php wp_footer(); ?>
</body>
</html>