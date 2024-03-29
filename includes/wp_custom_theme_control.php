<?php
/* --------------------------------------------------------------
WP CUSTOMIZE SECTION - CUSTOM SETTINGS
-------------------------------------------------------------- */

add_action( 'customize_register', 'bisara_customize_register' );

function bisara_customize_register( $wp_customize ) {

    /* SOCIAL SETTINGS */
    $wp_customize->add_section('bsr_social_settings', array(
        'title'    => __('Redes Sociales', 'bisara'),
        'description' => __('Agregue aqui las redes sociales de la página, serán usadas globalmente', 'bisara'),
        'priority' => 175,
    ));

    $wp_customize->add_setting('bsr_social_settings[facebook]', array(
        'default'           => '',
        'sanitize_callback' => 'bisara_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control( 'facebook', array(
        'type' => 'url',
        'section' => 'bsr_social_settings',
        'settings' => 'bsr_social_settings[facebook]',
        'label' => __( 'Facebook', 'bisara' ),
    ));

    $wp_customize->add_setting('bsr_social_settings[twitter]', array(
        'default'           => '',
        'sanitize_callback' => 'bisara_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control( 'twitter', array(
        'type' => 'url',
        'section' => 'bsr_social_settings',
        'settings' => 'bsr_social_settings[twitter]',
        'label' => __( 'Twitter', 'bisara' ),
    ));

    $wp_customize->add_setting('bsr_social_settings[instagram]', array(
        'default'           => '',
        'sanitize_callback' => 'bisara_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'instagram', array(
        'type' => 'url',
        'section' => 'bsr_social_settings',
        'settings' => 'bsr_social_settings[instagram]',
        'label' => __( 'Instagram', 'bisara' ),
    ));

    $wp_customize->add_setting('bsr_social_settings[linkedin]', array(
        'default'           => '',
        'sanitize_callback' => 'bisara_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control( 'linkedin', array(
        'type' => 'url',
        'section' => 'bsr_social_settings',
        'settings' => 'bsr_social_settings[linkedin]',
        'label' => __( 'LinkedIn', 'bisara' ),
    ));

    $wp_customize->add_setting('bsr_social_settings[youtube]', array(
        'default'           => '',
        'sanitize_callback' => 'bisara_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'youtube', array(
        'type' => 'url',
        'section' => 'bsr_social_settings',
        'settings' => 'bsr_social_settings[youtube]',
        'label' => __( 'YouTube', 'bisara' ),
    ) );

    $wp_customize->add_setting('bsr_social_settings[email]', array(
        'default'           => '',
        'sanitize_callback' => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'email', array(
        'type' => 'email',
        'section' => 'bsr_social_settings',
        'settings' => 'bsr_social_settings[email]',
        'label' => __( 'Correo Electrónico', 'bisara' ),
    ) );

    

    /* COOKIES SETTINGS */
    $wp_customize->add_section('bsr_cookie_settings', array(
        'title'    => __('Cookies', 'bisara'),
        'description' => __('Opciones de Cookies', 'bisara'),
        'priority' => 176,
    ));

    $wp_customize->add_setting('bsr_cookie_settings[cookie_text]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'cookie_text', array(
        'type' => 'textarea',
        'label'    => __('Cookie consent', 'bisara'),
        'description' => __( 'Texto del Cookie consent.' ),
        'section'  => 'bsr_cookie_settings',
        'settings' => 'bsr_cookie_settings[cookie_text]'
    ));

    $wp_customize->add_setting('bsr_cookie_settings[cookie_link]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'cookie_link', array(
        'type'     => 'dropdown-pages',
        'section' => 'bsr_cookie_settings',
        'settings' => 'bsr_cookie_settings[cookie_link]',
        'label' => __( 'Link de Cookies', 'bisara' ),
    ) );

}

function bisara_sanitize_url( $url ) {
    return esc_url_raw( $url );
}

/* --------------------------------------------------------------
CUSTOM CONTROL PANEL
-------------------------------------------------------------- */
/*
function register_bisara_settings() {
    register_setting( 'bisara-settings-group', 'monday_start' );
    register_setting( 'bisara-settings-group', 'monday_end' );
    register_setting( 'bisara-settings-group', 'monday_all' );
}

add_action('admin_menu', 'bisara_custom_panel_control');

function bisara_custom_panel_control() {
    add_menu_page(
        __( 'Panel de Control', 'bisara' ),
        __( 'Panel de Control','bisara' ),
        'manage_options',
        'bisara-control-panel',
        'bisara_control_panel_callback',
        'dashicons-admin-generic',
        120
    );
    add_action( 'admin_init', 'register_bisara_settings' );
}

function bisara_control_panel_callback() {
    ob_start();
?>
<div class="bisara-admin-header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="bisara" />
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
</div>
<form method="post" action="options.php" class="bisara-admin-content-container">
    <?php settings_fields( 'bisara-settings-group' ); ?>
    <?php do_settings_sections( 'bisara-settings-group' ); ?>
    <div class="bisara-admin-content-item">
        <table class="form-table">
            <tr valign="center">
                <th scope="row"><?php _e('Monday', 'bisara'); ?></th>
                <td>
                    <label for="monday_start">Starting Hour: <input type="time" name="monday_start" value="<?php echo esc_attr( get_option('monday_start') ); ?>"></label>
                    <label for="monday_end">Ending Hour: <input type="time" name="monday_end" value="<?php echo esc_attr( get_option('monday_end') ); ?>"></label>
                    <label for="monday_all">All Day: <input type="checkbox" name="monday_all" value="1" <?php checked( get_option('monday_all'), 1 ); ?>></label>
                </td>
            </tr>
        </table>
    </div>
    <div class="bisara-admin-content-submit">
        <?php submit_button(); ?>
    </div>
</form>
<?php
    $content = ob_get_clean();
    echo $content;
}
*/
