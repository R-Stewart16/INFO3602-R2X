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
<div class="page-banner">
                         <div class="page-banner__bg-image" style="background-image:url(<?php $pageBannerImage=get_field('page_banner_background_image')?>);"></div>
           
                        <div class="page-banner__content container container--narrow">
                            <h1 class="page-banner__title"> <?php the_title(); ?> </h1> 
                            <div class="page-banner__intro">
                            	<?php 
                                    $theParent = wp_get_post_parent_ID(get_the_ID());
                                    if($theParent){ ?>
                                        <div style="text-align:right;">
                                        <p><a href="<?php echo get_permalink($theParent); ?>">
                                        <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?> | </a> 
                                        <span class="metabox__main"><?php echo the_title(); ?></span></p>
                                        </div>
                                    <?php }

                                ?>
                                <p> <?php the_field('page_banner_subtitle'); ?></p>
                                
                            </div>
                        </div>  
                    </div>
    <div class="container">
        <div class="middle-align">
    		<?php $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_page_layout','One Column');
                if($vw_hair_salon_theme_lay == 'One Column'){ ?>
                   
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