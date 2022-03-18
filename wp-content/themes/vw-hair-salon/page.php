<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Hair Salon
 */

get_header(); ?>


<?php do_action( 'vw_hair_salon_page_top' ); ?>

<main id="maincontent" role="main" class="content-vw">
    <div class="container">
        <div class="middle-align">
    		<?php $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_page_layout','One Column');
                if($vw_hair_salon_theme_lay == 'One Column'){ ?>
                
                <div class="hero-slider">
                    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/barbershop-trends.jpg') ?>">
                        <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">Free Transportation</h2>
                            <p class="t-center">All students have free unlimited bus fare.</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/nekash.jpg') ?>">
                        <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                            <p class="t-center">Our dentistry program recommends eating apples.</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="hero-slider__slide" style="background-image:url(<?php echo get_theme_file_uri('images/mullet.jpg') ?>">
                        <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">Free Food</h2>
                            <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- <div class="container container--narrow page-section"> -->
                    <?php while(have_posts()){ 
                        the_post();
                        
                        get_template_part( 'template-parts/content-page'); 
                    } ?>
            <?php }else if($vw_hair_salon_theme_lay == 'Right Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content-page'); 
                        endwhile; ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar">
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </div>
                    </div>
                </div>
            <?php }else if($vw_hair_salon_theme_lay == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar">
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content-page'); 
                        endwhile; ?>
                    </div>
                </div>
            <?php }else {?>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content-page'); 
                        endwhile; ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar">
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="clear"></div>
    </div>
</main>

<?php do_action( 'vw_hair_salon_page_bottom' ); ?>

<?php get_footer(); ?>