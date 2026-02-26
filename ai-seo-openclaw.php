<?php
/**
 * Plugin Name: AI SEO with OpenClaw on WP
 * Plugin URI:  https://github.com/Believingkt/AI-SEO-with-OpenClaw-on-WP
 * Description: AI-powered SEO automation integrated with OpenClaw for WordPress. Automates keyword research, meta tag generation, and content optimization using AI.
 * Version:     1.0.0
 * Author:      Kenneth Kuo
 * Author URI:  https://github.com/Believingkt
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: ai-seo-openclaw
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'AI_SEO_OPENCLAW_VERSION', '1.0.0' );
define( 'AI_SEO_OPENCLAW_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'AI_SEO_OPENCLAW_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Plugin activation hook.
 */
function ai_seo_openclaw_activate() {
    // Activation logic here
}
register_activation_hook( __FILE__, 'ai_seo_openclaw_activate' );

/**
 * Plugin deactivation hook.
 */
function ai_seo_openclaw_deactivate() {
    // Deactivation logic here
}
register_deactivation_hook( __FILE__, 'ai_seo_openclaw_deactivate' );

/**
 * Add admin menu page.
 */
function ai_seo_openclaw_admin_menu() {
    add_menu_page(
        'AI SEO OpenClaw',
        'AI SEO OpenClaw',
        'manage_options',
        'ai-seo-openclaw',
        'ai_seo_openclaw_admin_page',
        'dashicons-search',
        80
    );
}
add_action( 'admin_menu', 'ai_seo_openclaw_admin_menu' );

/**
 * Admin page content.
 */
function ai_seo_openclaw_admin_page() {
    ?>
    <div class="wrap">
        <h1>AI SEO with OpenClaw</h1>
        <p>Welcome to AI SEO with OpenClaw — your AI-powered SEO automation tool for WordPress.</p>
        <p>Version: <?php echo esc_html( AI_SEO_OPENCLAW_VERSION ); ?></p>
        <hr>
        <h2>Getting Started</h2>
        <p>This plugin integrates OpenClaw AI capabilities to help you:</p>
        <ul>
            <li>Automate keyword research</li>
            <li>Generate optimized meta tags</li>
            <li>Analyze and improve content for SEO</li>
            <li>Monitor search performance</li>
        </ul>
    </div>
    <?php
}
