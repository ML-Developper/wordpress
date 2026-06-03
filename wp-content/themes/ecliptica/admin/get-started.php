<?php

use ColibriWP\Theme\PluginsManager;
use ColibriWP\Theme\Translations;

$ecliptica_is_builder_installed = apply_filters( 'ecliptica_page_builder/installed', false );

wp_enqueue_script( 'updates' );

function ecliptica_get_setting_link( $setting ) {
    return esc_attr( ecliptica_theme()->getCustomizer()->getSettingQuickLink( $setting ) );
}

?>

<div class="ecliptica-get-started__container ecliptica-admin-panel">
    <div class="ecliptica-get-started__section">
        <h2 class="col-title ecliptica-get-started__section-title">
            <span class="ecliptica-get-started__section-title__icon dashicons dashicons-admin-plugins"></span>
            <?php Translations::escHtmlE( 'get_started_section_1_title' ); ?>
        </h2>
        <div class="ecliptica-get-started__content">


            <?php foreach ( ecliptica_theme()->getPluginsManager()->getPluginData() as $ecliptica_recommended_plugin_slug => $ecliptica_recommended_plugin_data ): ?>
                <?php
                $ecliptica_plugin_state = ecliptica_theme()->getPluginsManager()->getPluginState( $ecliptica_recommended_plugin_slug );
                $ecliptica_notice_type  = $ecliptica_plugin_state === PluginsManager::ACTIVE_PLUGIN ? 'blue' : '';
                if ( isset( $ecliptica_recommended_plugin_data['internal'] ) && $ecliptica_recommended_plugin_data['internal'] ) {
                    continue;
                }
                ?>
                <div 
				
					class="ecliptica-notice <?php echo esc_attr( $ecliptica_notice_type ); ?> plugin-card-<?php echo $ecliptica_recommended_plugin_slug;?>">
                    <div class="ecliptica-notice__header">
                        <h3 class="ecliptica-notice__title"><?php echo esc_html( ecliptica_theme()->getPluginsManager()->getPluginData( "{$ecliptica_recommended_plugin_slug}.name" ) ); ?></h3>
                        <div class="ecliptica-notice__action">
                            <?php if ( $ecliptica_plugin_state === PluginsManager::ACTIVE_PLUGIN ): ?>
                                <p class="ecliptica-notice__action__active"><?php Translations::escHtmlE( 'plugin_installed_and_active' ); ?> </p>
                            <?php else: ?>
                                <?php if ( $ecliptica_plugin_state === PluginsManager::INSTALLED_PLUGIN ): ?>
                                    <a class="button button-large colibri-plugin activate-now" 
										data-slug="<?php echo $ecliptica_recommended_plugin_slug;?>"
                                       href="<?php echo esc_url( ecliptica_theme()->getPluginsManager()->getActivationLink( $ecliptica_recommended_plugin_slug ) ); ?>">
                                        <?php Translations::escHtmlE( 'activate' ); ?>
                                    </a>
                                <?php else: ?>
                                    <a class="button button-large colibri-plugin install-now"
									   data-slug="<?php echo $ecliptica_recommended_plugin_slug;?>"
                                       href="<?php echo esc_url( ecliptica_theme()->getPluginsManager()->getInstallLink( $ecliptica_recommended_plugin_slug ) ); ?>">
                                        <?php Translations::escHtmlE( 'install' ); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="ecliptica-notice__description"><?php echo esc_html( ecliptica_theme()->getPluginsManager()->getPluginData( "{$ecliptica_recommended_plugin_slug}.description" ) ); ?></p>


                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="ecliptica-get-started__section">
        <h2 class="ecliptica-get-started__section-title">
            <span class="ecliptica-get-started__section-title__icon dashicons dashicons-admin-appearance"></span>
            <?php Translations::escHtmlE( 'get_started_section_2_title' ); ?>
        </h2>
        <div class="ecliptica-get-started__content">
            <div class="ecliptica-customizer-option__container">
                <div class="ecliptica-customizer-option">
                    <span class="ecliptica-customizer-option__icon dashicons dashicons-format-image"></span>
                    <a class="ecliptica-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( ecliptica_get_setting_link( 'logo' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_set_logo' ); ?>
                    </a>
                </div>
                <div class="ecliptica-customizer-option">
                    <span class="ecliptica-customizer-option__icon dashicons dashicons-format-image"></span>
                    <a class="ecliptica-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( ecliptica_get_setting_link( 'hero_background' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_hero_image' ); ?>
                    </a>
                </div>
                <div class="ecliptica-customizer-option">
                    <span class="ecliptica-customizer-option__icon dashicons dashicons-menu-alt3"></span>
                    <a class="ecliptica-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( ecliptica_get_setting_link( 'navigation' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_customize_navigation' ); ?>
                    </a>
                </div>
                <div class="ecliptica-customizer-option">
                    <span class="ecliptica-customizer-option__icon dashicons dashicons-layout"></span>
                    <a class="ecliptica-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( ecliptica_get_setting_link( 'hero_layout' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_customize_hero' ); ?>
                    </a>
                </div>
                <div class="ecliptica-customizer-option">
                    <span class="ecliptica-customizer-option__icon dashicons dashicons-admin-appearance"></span>
                    <a class="ecliptica-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( ecliptica_get_setting_link( 'footer' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_customize_footer' ); ?>
                    </a>
                </div>
                <?php if ( $ecliptica_is_builder_installed ): ?>
                    <div class="ecliptica-customizer-option">
                        <span class="ecliptica-customizer-option__icon dashicons dashicons-art"></span>
                        <a class="ecliptica-customizer-option__label"
                           target="_blank"
                           href="<?php echo esc_url( ecliptica_get_setting_link( 'color_scheme' ) ); ?>">
                            <?php Translations::escHtmlE( 'get_started_change_color_settings' ); ?>
                        </a>
                    </div>
                    <div class="ecliptica-customizer-option">
                        <span class="ecliptica-customizer-option__icon dashicons dashicons-editor-textcolor"></span>
                        <a class="ecliptica-customizer-option__label"
                           target="_blank"
                           href="<?php echo esc_url( ecliptica_get_setting_link( 'general_typography' ) ); ?>">
                            <?php Translations::escHtmlE( 'get_started_customize_fonts' ); ?>
                        </a>
                    </div>

                <?php endif; ?>
                <div class="ecliptica-customizer-option">
                    <span class="ecliptica-customizer-option__icon dashicons dashicons-menu-alt3"></span>
                    <a class="ecliptica-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( ecliptica_get_setting_link( 'menu' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_set_menu_links' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php



wp_print_request_filesystem_credentials_modal();
wp_print_admin_notice_templates();





