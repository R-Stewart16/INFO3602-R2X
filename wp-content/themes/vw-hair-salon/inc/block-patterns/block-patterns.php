<?php
/**
 * VW Hair Salon: Block Patterns
 *
 * @package VW Hair Salon
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-hair-salon',
		array( 'label' => __( 'VW Hair Salon', 'vw-hair-salon' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-hair-salon/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-hair-salon' ),
			'categories' => array( 'vw-hair-salon' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":9183,\"customGradient\":\"linear-gradient(175deg,rgb(255,255,255) 44%,rgba(59,59,59,0) 58%)\",\"align\":\"full\",\"className\":\"main-banner\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim has-background-gradient main-banner\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png)\"><span aria-hidden=\"true\" class=\"wp-block-cover__gradient-background\" style=\"background:linear-gradient(175deg,rgb(255,255,255) 44%,rgba(59,59,59,0) 58%)\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"full\",\"className\":\"mx-5 px-lg-5\"} -->\n<div class=\"wp-block-columns alignfull mx-5 px-lg-5\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"66.66%\",\"className\":\"ps-lg-2\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center ps-lg-2\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":1,\"className\":\"mb-3\",\"style\":{\"color\":{\"text\":\"#191b27\"},\"typography\":{\"fontSize\":30}}} -->\n<h1 class=\"has-text-align-left mb-3 has-text-color\" style=\"color:#191b27;font-size:30px\">Lorem ipsum is the simple dummy text of printing</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"className\":\"text-left mb-2\",\"fontSize\":\"small\",\"style\":{\"color\":{\"text\":\"#191b27\"}}} -->\n<p class=\"text-left mb-2 has-text-color has-small-font-size\" style=\"color:#191b27\">Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been industrys standard.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"left\"} -->\n<div class=\"wp-block-buttons alignleft\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#9cdb8a\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background no-border-radius\" style=\"background-color:#9cdb8a\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-hair-salon/what-you-need-section',
		array(
			'title'      => __( 'What You Need Section', 'vw-hair-salon' ),
			'categories' => array( 'vw-hair-salon' ),
			'content'    => "<!-- wp:cover {\"overlayColor\":\"white\",\"align\":\"wide\",\"className\":\"what-you-need-section m-0\"} -->\n<div class=\"wp-block-cover alignwide has-white-background-color has-background-dim what-you-need-section m-0\"><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"className\":\"mt-3 mb-5\",\"style\":{\"color\":{\"text\":\"#9cdb8a\"},\"typography\":{\"fontSize\":35}}} -->\n<h2 class=\"has-text-align-center mt-3 mb-5 has-text-color\" style=\"color:#9cdb8a;font-size:35px\">Lorem Ipsum is simply</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"m-0 px-lg-3\"} -->\n<div class=\"wp-block-columns alignwide m-0 px-lg-3\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":9200,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/article-image-1.png\" alt=\"\" class=\"wp-image-9200\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":9202,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/article-image-2.png\" alt=\"\" class=\"wp-image-9202\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":9204,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/article-image-3.png\" alt=\"\" class=\"wp-image-9204\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":9205,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/article-image-4.png\" alt=\"\" class=\"wp-image-9205\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"className\":\"mb-3\",\"style\":{\"color\":{\"text\":\"#333333\"},\"typography\":{\"fontSize\":30}}} -->\n<h3 class=\"has-text-align-left mb-3 has-text-color\" style=\"color:#333333;font-size:30px\">Lorem Ipsum is simply</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"text-left\",\"textColor\":\"black\",\"style\":{\"typography\":{\"fontSize\":15}}} -->\n<p class=\"has-text-align-left text-left has-black-color has-text-color\" style=\"font-size:15px\">Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industry standard. Lorem Ipsum has been the industrys standard.&nbsp;&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"text-left\",\"textColor\":\"black\",\"style\":{\"typography\":{\"fontSize\":15}}} -->\n<p class=\"has-text-align-left text-left has-black-color has-text-color\" style=\"font-size:15px\">Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard.&nbsp;&nbsp;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);
}