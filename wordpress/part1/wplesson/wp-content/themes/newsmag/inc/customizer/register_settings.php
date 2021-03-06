<?php
class Newsmag_Customizer_Helper {

	/**
	 * The basic constructor of the helper
	 * It changes the default panels of the customizer
	 *
	 * Newsmag_Customizer_Helper constructor.
	 */
	public function __construct( $controls ) {
		wp_enqueue_style( 'epsilon-style', get_template_directory_uri() . '/inc/customizer/epsilon-framework/assets/css/style.css' );
		/**
		 * Custom controls
		 */
		$path = get_template_directory() . '/inc/customizer/epsilon-framework';

		foreach ( $controls as $control ) {
			if ( file_exists( $path . '/control-epsilon-' . $control . '.php' ) ) {
				require_once $path . '/control-epsilon-' . $control . '.php';
			}
		}

		$this->change_default_panels();
	}


	/**
	 * Loads the settings for the panels
	 */
	public function add_theme_options() {
		$path  = get_template_directory() . '/inc/customizer/settings';
		$dirs  = glob( $path . '/*', GLOB_ONLYDIR );
		$files = array( 'panels', 'sections', 'settings', 'controls' );
		foreach ( $dirs as $dir ) {
			$dirname = basename( $dir );

			foreach ( $files as $file ) {
				if ( file_exists( get_template_directory() . '/inc/customizer/settings/' . $dirname . '/' . $file . '.php' ) ) {
					include_once get_template_directory() . '/inc/customizer/settings/' . $dirname . '/' . $file . '.php';
				}
			}
		}
	}

	/**
	 * Runs on initialization, changes the default panels to the Theme options
	 */
	public function change_default_panels() {
		global $wp_customize;

		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
		$wp_customize->get_setting( 'custom_logo' )->transport     = 'refresh';
		$wp_customize->get_section( 'header_image' )->panel        = 'newsmag_panel_blog';
		$wp_customize->get_section( 'header_image' )->priority     = 4;
		$wp_customize->get_section( 'header_image' )->title        = __( 'Blog Archive Header Image', 'newsmag' );
		$wp_customize->get_section( 'background_image' )->panel    = 'newsmag_panel_general';

		if ( ! newsmag_on_iis() ) {

			// Change panel for Site Title & Tagline Section
			$wp_customize->get_section( 'title_tagline' )->panel = 'newsmag_panel_general';

			// Change panel for Static Front Page
			$wp_customize->get_section( 'static_front_page' )->panel = 'newsmag_panel_general';

			// Change priority for Site Title
			$wp_customize->get_control( 'custom_logo' )->priority    = 0;
			$wp_customize->get_control( 'custom_logo' )->description = esc_html__( 'The image logo, if set, will override the text logo. You can not have both at the same time. A tagline can be displayed under the text logo.', 'newsmag' );

			$wp_customize->get_control( 'blogname' )->priority = 2;

			// Change priority for Site Tagline
			$wp_customize->get_control( 'blogdescription' )->priority = 17;
		}

		// Abort if selective refresh is not available.
		if ( ! isset( $wp_customize->selective_refresh ) ) {
			return;
		}

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title',
			'render_callback' => function () {
				bloginfo( 'name' );
			},
		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => function () {
				bloginfo( 'description' );
			},
		) );
	}

	/**
	 * Simple function to add <br /> tags at new lines
	 *
	 * @param $input
	 *
	 * @return string
	 */
	public static function newsmag_sanitize_textarea_nl2br( $input ) {
		return nl2br( $input );
	}

	/**
	 * Simple function to validate choices from radio buttons
	 *
	 * @param $input
	 *
	 * @return string
	 */
	public static function newsmag_sanitize_radio_buttons( $input, $setting ) {

		global $wp_customize;

		$control = $wp_customize->get_control( $setting->id );
		if ( array_key_exists( $input, $control->choices ) ) {
			return $input;
		}

		return $setting->default;

	}

	/**
	 * @param $input
	 *
	 * @return string
	 */
	public static function newsmag_sanitize_number( $input ) {
		return force_balance_tags( $input );
	}

	/**
	 * @param $url
	 *
	 * @return string
	 */
	public static function newsmag_sanitize_file_url( $url ) {

		$output = '';

		$filetype = wp_check_filetype( $url );
		if ( $filetype["ext"] ) {
			$output = esc_url( $url );
		}

		return $output;
	}

	/**
	 * @param $color
	 *
	 * @return null|string
	 */
	public static function newsmag_sanitize_hex_color( $color ) {
		if ( '' === $color ) {
			return '';
		}

		// 3 or 6 hex digits, or the empty string.
		if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
			return $color;
		}

		return NULL;
	}

	/**
	 * @param $value
	 *
	 * @return int
	 */
	public static function newsmag_sanitize_checkbox( $value ) {
		if ( $value == 1 ) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @param $value
	 *
	 * @return string
	 */
	public static function newsmag_sanitize_allowed_html( $value ) {

		return wp_kses(
			$value,
			array(
				'a'      => array(
					'href'  => array(),
					'title' => array()
				),
				'img'    => array(
					'alt'   => array(),
					'title' => array(),
					'src'   => array(),
					'class' => array(),
					'id'    => array()
				),
				'br'     => array(),
				'em'     => array(),
				'strong' => array(),
			)
		);

	}

	/**
	 * @param $values
	 *
	 * @return array
	 */
	public static function newsmag_sanitize_multiple_checkbox( $values ) {

		$multi_values = ! is_array( $values ) ? explode( ',', $values ) : $values;

		return ! empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
	}
}
