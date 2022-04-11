<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VW Hair Salon
 */
?>

<div class="title-box">
    <div class="container">
        <h2 class="entry-title"><?php echo esc_html(get_theme_mod('vw_hair_salon_no_results_page_title',__('Nothing Found','vw-hair-salon')));?></h2>
    </div>
</div>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'vw-hair-salon' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php echo esc_html(get_theme_mod('vw_hair_salon_no_results_page_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','vw-hair-salon')));?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-hair-salon' ); ?></p><br />
	<div class="read-moresec">
		<a href="<?php echo esc_url(home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Back to Home Page', 'vw-hair-salon' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page','vw-hair-salon' );?></span></a>
	</div>
<?php endif; ?>