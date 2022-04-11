<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class VW_Hair_Salon_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'vw-hair-salon' ),
				'family'      => esc_html__( 'Font Family', 'vw-hair-salon' ),
				'size'        => esc_html__( 'Font Size',   'vw-hair-salon' ),
				'weight'      => esc_html__( 'Font Weight', 'vw-hair-salon' ),
				'style'       => esc_html__( 'Font Style',  'vw-hair-salon' ),
				'line_height' => esc_html__( 'Line Height', 'vw-hair-salon' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'vw-hair-salon' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'vw-hair-salon-ctypo-customize-controls' );
		wp_enqueue_style(  'vw-hair-salon-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'vw-hair-salon' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-hair-salon' ),
        'Acme' => __( 'Acme', 'vw-hair-salon' ),
        'Anton' => __( 'Anton', 'vw-hair-salon' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-hair-salon' ),
        'Arimo' => __( 'Arimo', 'vw-hair-salon' ),
        'Arsenal' => __( 'Arsenal', 'vw-hair-salon' ),
        'Arvo' => __( 'Arvo', 'vw-hair-salon' ),
        'Alegreya' => __( 'Alegreya', 'vw-hair-salon' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-hair-salon' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-hair-salon' ),
        'Bangers' => __( 'Bangers', 'vw-hair-salon' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-hair-salon' ),
        'Bad Script' => __( 'Bad Script', 'vw-hair-salon' ),
        'Bitter' => __( 'Bitter', 'vw-hair-salon' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-hair-salon' ),
        'BenchNine' => __( 'BenchNine', 'vw-hair-salon' ),
        'Cabin' => __( 'Cabin', 'vw-hair-salon' ),
        'Cardo' => __( 'Cardo', 'vw-hair-salon' ),
        'Courgette' => __( 'Courgette', 'vw-hair-salon' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-hair-salon' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-hair-salon' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-hair-salon' ),
        'Cuprum' => __( 'Cuprum', 'vw-hair-salon' ),
        'Cookie' => __( 'Cookie', 'vw-hair-salon' ),
        'Chewy' => __( 'Chewy', 'vw-hair-salon' ),
        'Days One' => __( 'Days One', 'vw-hair-salon' ),
        'Dosis' => __( 'Dosis', 'vw-hair-salon' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-hair-salon' ),
        'Economica' => __( 'Economica', 'vw-hair-salon' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-hair-salon' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-hair-salon' ),
        'Francois One' => __( 'Francois One', 'vw-hair-salon' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-hair-salon' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-hair-salon' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-hair-salon' ),
        'Handlee' => __( 'Handlee', 'vw-hair-salon' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-hair-salon' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-hair-salon' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-hair-salon' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-hair-salon' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-hair-salon' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-hair-salon' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-hair-salon' ),
        'Kanit' => __( 'Kanit', 'vw-hair-salon' ),
        'Lobster' => __( 'Lobster', 'vw-hair-salon' ),
        'Lato' => __( 'Lato', 'vw-hair-salon' ),
        'Lora' => __( 'Lora', 'vw-hair-salon' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-hair-salon' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-hair-salon' ),
        'Merriweather' => __( 'Merriweather', 'vw-hair-salon' ),
        'Monda' => __( 'Monda', 'vw-hair-salon' ),
        'Montserrat' => __( 'Montserrat', 'vw-hair-salon' ),
        'Muli' => __( 'Muli', 'vw-hair-salon' ),
        'Marck Script' => __( 'Marck Script', 'vw-hair-salon' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-hair-salon' ),
        'Open Sans' => __( 'Open Sans', 'vw-hair-salon' ),
        'Overpass' => __( 'Overpass', 'vw-hair-salon' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-hair-salon' ),
        'Oxygen' => __( 'Oxygen', 'vw-hair-salon' ),
        'Orbitron' => __( 'Orbitron', 'vw-hair-salon' ),
        'Patua One' => __( 'Patua One', 'vw-hair-salon' ),
        'Pacifico' => __( 'Pacifico', 'vw-hair-salon' ),
        'Padauk' => __( 'Padauk', 'vw-hair-salon' ),
        'Playball' => __( 'Playball', 'vw-hair-salon' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-hair-salon' ),
        'PT Sans' => __( 'PT Sans', 'vw-hair-salon' ),
        'Philosopher' => __( 'Philosopher', 'vw-hair-salon' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-hair-salon' ),
        'Poiret One' => __( 'Poiret One', 'vw-hair-salon' ),
        'Quicksand' => __( 'Quicksand', 'vw-hair-salon' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-hair-salon' ),
        'Raleway' => __( 'Raleway', 'vw-hair-salon' ),
        'Rubik' => __( 'Rubik', 'vw-hair-salon' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-hair-salon' ),
        'Russo One' => __( 'Russo One', 'vw-hair-salon' ),
        'Righteous' => __( 'Righteous', 'vw-hair-salon' ),
        'Slabo' => __( 'Slabo', 'vw-hair-salon' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-hair-salon' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-hair-salon'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-hair-salon' ),
        'Sacramento' => __( 'Sacramento', 'vw-hair-salon' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-hair-salon' ),
        'Tangerine' => __( 'Tangerine', 'vw-hair-salon' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-hair-salon' ),
        'VT323' => __( 'VT323', 'vw-hair-salon' ),
        'Varela Round' => __( 'Varela Round', 'vw-hair-salon' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-hair-salon' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-hair-salon' ),
        'Volkhov' => __( 'Volkhov', 'vw-hair-salon' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-hair-salon' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'vw-hair-salon' ),
			'100' => esc_html__( 'Thin',       'vw-hair-salon' ),
			'300' => esc_html__( 'Light',      'vw-hair-salon' ),
			'400' => esc_html__( 'Normal',     'vw-hair-salon' ),
			'500' => esc_html__( 'Medium',     'vw-hair-salon' ),
			'700' => esc_html__( 'Bold',       'vw-hair-salon' ),
			'900' => esc_html__( 'Ultra Bold', 'vw-hair-salon' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'normal'  => esc_html__( 'Normal', 'vw-hair-salon' ),
			'italic'  => esc_html__( 'Italic', 'vw-hair-salon' ),
			'oblique' => esc_html__( 'Oblique', 'vw-hair-salon' )
		);
	}
}
