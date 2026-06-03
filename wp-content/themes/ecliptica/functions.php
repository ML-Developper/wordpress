<?php

/**
 *
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */

if ( ! defined( 'ECLIPTICA_THEME_REQUIRED_PHP_VERSION' ) ) {
	define( 'ECLIPTICA_THEME_REQUIRED_PHP_VERSION', '5.6.0' );
}

add_action( 'after_switch_theme', 'ecliptica_check_php_version' );

function ecliptica_check_php_version() {
	// Compare versions.
	if ( version_compare( phpversion(), ECLIPTICA_THEME_REQUIRED_PHP_VERSION, '<' ) ) :
		// Theme not activated info message.
		add_action( 'admin_notices', 'ecliptica_php_version_notice' );

		// Switch back to previous theme.
		switch_theme( get_option( 'theme_switched' ) );

		return false;
	endif;
}

function ecliptica_php_version_notice() {
	?>
    <div class="notice notice-alt colibri-notice notice-error notice-large">
        <h4><?php esc_html_e( 'Ecliptica theme activation failed!', 'ecliptica' ); ?></h4>
        <p>
			<?php printf( esc_html__( 'You need to update your PHP version to use the %s.', 'ecliptica' ),
				' <strong>Ecliptica</strong>' ); ?>
            <br/>
			<?php printf( esc_html__( 'Current php version is: %1$s and the mininum required version is %2$s',
				'ecliptica' ),
				"<strong>" . esc_html(phpversion()) . "</strong>",
				"<strong>" . esc_html(ECLIPTICA_THEME_REQUIRED_PHP_VERSION) . "</strong>" );
			?>

        </p>
    </div>
	<?php
}

if ( version_compare( phpversion(), ECLIPTICA_THEME_REQUIRED_PHP_VERSION, '>=' ) ) {
	require_once get_template_directory() . "/inc/functions.php";
} else {
	add_action( 'admin_notices', 'ecliptica_php_version_notice' );
}

add_filter( 'body_class', function ($classes) {
	$classes[] = 'colibri-theme-' . get_stylesheet();
	return $classes;
});





