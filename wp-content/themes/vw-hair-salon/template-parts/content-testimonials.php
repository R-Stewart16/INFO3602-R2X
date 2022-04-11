

<!-- THIS HERE IS FOR THE TITLE OF THE POST -->


<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
<!-- </section> -->
<div class="container">
<div class="service-box wow bounceInDown delay-1000" data-wow-duration="2s">
    <?php $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_blog_layout_option','Default');
    if($vw_hair_salon_theme_lay == 'Default'){ ?>
      <div class="row">
        <!-- Creates the thing border line around testimonial-->
        <div class="<?php echo esc_html( $colmd ); ?> pmain-box">
          <div class="post-main-box">
            <div class="box-image">
              <?php 
                if(has_post_thumbnail()) { 
                  the_post_thumbnail(); 
                }
              ?>  
            </div>
           <h2 class="section-title"><a><?php echo the_title();?></a></h2>     
           <?echo the_content();?>
             <!--FROM HERE YOU CAN SEE THE RELATIONSHIP BETWEEN PROFESSORS AND THEIR PROGRAMS  -->
             <?php
          $relatedServices = get_field('related_services');// array of post objects
          
          if($relatedServices){
            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Related Services</h2>';
            echo '<ul class="link-list min-list">';
              foreach($relatedServices as $services){ //for each a post object
            ?>
            <li><a href="<?php echo get_the_permalink($services);?>">
            <?php echo get_the_title($services);?>
            </a>
            </li>
            <?php }
        }
        echo '</ul>'?>
        <!--  -->
          </div>
        </div>
      </div> 
    <?php }?>
  </div>
              </div>
             
<div class="generic-content">
        
         
        </div>
</article>


