<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Hair Salon
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-vw">
	<div class="container">
        <div class="page-content">
        	<h1><?php echo esc_html(get_theme_mod('vw_hair_salon_404_page_title',__('404 Not Found','vw-hair-salon')));?></h1>	
			<p class="text-404"><?php echo esc_html(get_theme_mod('vw_hair_salon_404_page_content',__('Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.','vw-hair-salon')));?></p>
			<?php if( get_theme_mod('vw_hair_salon_404_page_button_text','Return to the home page') != ''){ ?>
				<div class="read-moresec">
	        		<a href="<?php echo esc_url(home_url()); ?>" class="button hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_hair_salon_404_page_button_text',__('Return to the home page','vw-hair-salon')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_hair_salon_404_page_button_text',__('Return to the home page','vw-hair-salon')));?></span></a>
				</div>
			<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>