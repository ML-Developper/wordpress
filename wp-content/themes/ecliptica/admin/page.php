<?php


use ColibriWP\Theme\Core\Hooks;
use ColibriWP\Theme\Translations;
use ColibriWP\Theme\View;

$ecliptica_tabs            = View::getData( 'tabs', array() );
$ecliptica_current_tab     = View::getData( 'current_tab', null );
$ecliptica_url             = View::getData( 'page_url', null );
$ecliptica_welcome_message = View::getData( 'welcome_message', null );
$ecliptica_tab_partial     = View::getData( "tabs.{$ecliptica_current_tab}.tab_partial", null );
Hooks::prefixed_do_action( "before_info_page_tab_{$ecliptica_current_tab}" );
$ecliptica_slug        = "colibri-wp-page-info";
$colibri_get_started = array(
    'plugin_installed_and_active' => Translations::escHtml( 'plugin_installed_and_active' ),
    'activate'                    => Translations::escHtml( 'activate' ),
    'activating'                  => __( 'Activating', 'ecliptica' ),
    'install_recommended'         => isset( $_GET['install_recommended'] ) ? $_GET['install_recommended'] : ''
);

wp_localize_script( $ecliptica_slug, 'colibri_get_started', $colibri_get_started );
?>
<div class="ecliptica-admin-page wrap about-wrap full-width-layout mesmerize-page">

    <div class="ecliptica-admin-page--hero">
        <div class="ecliptica-admin-page--hero-intro ecliptica-admin-page-spacing ">
            <div class="ecliptica-admin-page--hero-logo">
                <img src="<?php echo esc_url( ecliptica_theme()->getAssetsManager()->getBaseURL() . "/images/colibriwp-logo.png" ) ?>"
                     alt="logo"/>
            </div>
            <div class="ecliptica-admin-page--hero-text ">
                <?php if ( $ecliptica_welcome_message ): ?>
                    <h1><?php echo esc_html( $ecliptica_welcome_message ); ?></h1>
                <?php endif; ?>
            </div>
        </div>
        <?php if ( count( $ecliptica_tabs ) ): ?>
            <nav class="nav-tab-wrapper wp-clearfix">
                <?php foreach ( $ecliptica_tabs as $ecliptica_tab_id => $ecliptica_tab ) : ?>
                    <a class="nav-tab <?php echo ( $ecliptica_current_tab === $ecliptica_tab_id ) ? 'nav-tab-active' : '' ?>"
                       href="<?php echo esc_url( add_query_arg( array( 'current_tab' => $ecliptica_tab_id ),
                           $ecliptica_url ) ); ?>">
                        <?php echo esc_html( $ecliptica_tab['title'] ); ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        <?php endif; ?>
    </div>
    <?php if ( $ecliptica_tab_partial ): ?>
        <div class="ecliptica-admin-page--body ecliptica-admin-page-spacing">
            <div class="ecliptica-admin-page--content">
                <div class="ecliptica-admin-page--tab">
                    <div class="ecliptica-admin-page--tab-<?php echo esc_attr( $ecliptica_current_tab ); ?>">
                        <?php View::make( $ecliptica_tab_partial,
                            Hooks::prefixed_apply_filters( "info_page_data_tab_{$ecliptica_current_tab}",
                                array() ) ); ?>
                    </div>
                </div>

            </div>
            <div class="ecliptica-admin-page--sidebar">
                <?php View::make( 'admin/sidebar' ) ?>
            </div>
        </div>
    <?php endif; ?>
</div>







