<?php
/**
 * The template part for displaying grid layout
 *
 * @package VW Hair Salon
 * @subpackage vw-hair-salon
 * @since VW Hair Salon 1.0
 */
?>
<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box wow bounceInDown delay-1000" data-wow-duration="2s">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail() && get_theme_mod( 'vw_hair_salon_featured_image_hide_show',true) != '') { 
		              the_post_thumbnail(); 
		            }
	          	?>  
	        </div>
	        <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>  
	        <div class="new-text">
	          	<div class="entry-content">
	          		<p>
		              <?php $excerpt = get_the_excerpt(); echo esc_html( vw_hair_salon_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_hair_salon_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('vw_hair_salon_excerpt_suffix','') ); ?>
		            </p>
	          	</div>
	        </div>
	        <?php if( get_theme_mod('vw_hair_salon_button_text','Read More') != ''){ ?>
		        <div class="content-bttn">
	                <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_hair_salon_button_text',__('Read More','vw-hair-salon')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_hair_salon_button_text',__('Read More','vw-hair-salon')));?></span></a>
	            </div>
		    <?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>