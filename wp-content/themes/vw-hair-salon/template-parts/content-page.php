
<?php
/**
 * The template part for displaying page content
 *
 * @package VW Hair Salon
 * @subpackage vw_hair_salon
 * @since VW Hair Salon 1.0
 */
?>


<div class="content-vw">
  <?php if(has_post_thumbnail()) {?>
    <?php the_post_thumbnail(); ?>
    <hr>
  <?php }?>
  
  
  <?php 
      // this returns the pages but doesn't output it. If the pages has a parent or 
      $testArray = get_pages(array(
          'child_of' => get_the_ID()
      ));  
      if($theParent or $testArray){ ?>
      <div class="page-links"> 
          <h2 class="page-links__title">
              <a href="<?php echo get_permalink($theParent); ?>">
                  <?php echo get_the_title($theParent); ?>
              </a>
          </h2>
          <ul>
            <?php
              if($theParent){ // if the current page has a parent
                  $findChildrenOf = $theParent;
              }
              else{ //viewing a parent page
                  $findChildrenOf = get_the_ID();
              }
              wp_list_pages(array(
                  'title_li' => NULL ,
                    'child_of' => $findChildrenOf,   
                    'sort_column' => 'menu_order'  
              ));
            ?> 
          </ul>
      </div>
      <?php } ?>
    
  <div class="entry-content"><?php the_content();?></div>
  <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
         comments_template();
      endif;
  ?>
  <div class="clearfix"></div>
</div>