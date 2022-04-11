
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
    

    <div class="content-vw">
      
        <?php while ( have_posts() ) :
           the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>

        <section class="testimonialBlock">
            <h2> <a href="<?php echo get_post_type_archive_link('testimonials'); ?>" class="btn btn--large btn--blue">View All Testimonials</a>
    </h2>
            <?php 
                $args = array( 'post_type' => 'testimonials' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
              ?> 
            <div class="column">	
              <div class="card">
                <div class="container-frontpage">
                <h3><?php the_title(); ?></h3>
                
                <?php the_content(); ?>
                <div style="text-align:right"> 
                            <?php the_title();?>
                            <?php the_date();?>
                            <?php the_time();?>
                          </div>
              </div>
              </div>
              <?php endwhile; ?>
            </div>
        </section>
    </div>
    
    
        

  </main>
</div>

<?php get_footer(); ?>