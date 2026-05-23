<?php
/**
 * Plugin Name: Deadweight
 * Plugin URI: https://github.com/yourusername/deadweight
 * Description: AI-powered audit of your money and time commitments
 * Version: 0.1.0
 * Author: Kanav Nagpal
 */

if (!defined('ABSPATH')) {
    exit;
}

define('DEADWEIGHT_VERSION', '0.1.0');
define('DEADWEIGHT_PATH', plugin_dir_path(__FILE__));
define('DEADWEIGHT_URL', plugin_dir_url(__FILE__));

function deadweight_register_pages() {
    add_shortcode('deadweight_onboarding', 'deadweight_render_onboarding');
    add_shortcode('deadweight_dashboard', 'deadweight_render_dashboard');
    add_shortcode('deadweight_audit', 'deadweight_render_audit');
}
add_action('init', 'deadweight_register_pages');

function deadweight_render_onboarding() {
    ob_start();
    include DEADWEIGHT_PATH . 'templates/onboarding.php';
    return ob_get_clean();
}

function deadweight_render_dashboard() {
    ob_start();
    include DEADWEIGHT_PATH . 'templates/dashboard.php';
    return ob_get_clean();
}

function deadweight_render_audit() {
    ob_start();
    include DEADWEIGHT_PATH . 'templates/audit.php';
    return ob_get_clean();
}