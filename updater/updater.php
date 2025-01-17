<?php

if (!defined('ABSPATH')) exit;

/**
 * License manager module
 */
function evcf7_updater_utility() {
    $prefix = 'EVCF7_';
    $settings = [
        'prefix' => $prefix,
        'get_base' => EVCF7_PLUGIN_BASENAME,
        'get_slug' => EVCF7_PLUGIN_DIR,
        'get_version' => EVCF7_BUILD,
        'get_api' => 'https://download.geekcodelab.com/',
        'license_update_class' => $prefix . 'Update_Checker'
    ];

    return $settings;
}

function evcf7_updater_activate() {

    // Refresh transients
    delete_site_transient('update_plugins');
    delete_transient('evcf7_plugin_updates');
    delete_transient('evcf7_plugin_auto_updates');
}

require_once(EVCF7_PLUGIN_DIR_PATH . 'updater/class-update-checker.php');