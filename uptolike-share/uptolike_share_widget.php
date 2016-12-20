<?php
/**
 * Plugin Name: UpToLike Social Share Buttons
 * Plugin URI: https://uptolike.com/
 * Description: Uptolike Social Share Buttons - social bookmarking widget with sharing statistics.
 * Version: 1.5.5
 * Requires at least: 4.1
 * Tested up to: 4.7
 * Author: Uptolike Team
 * Author URI: https://uptolike.com/
 *
 * @package UpToLike
 * @category Statistic
 * @author UptolikeTeam
 */

include 'widget_options.php';

add_filter('plugin_action_links', 'my_plugin_action_links', 10, 2);

function my_plugin_action_links($links, $file) {
    if (false === strpos($file, basename(__FILE__))) return $links;
    $links[] = '<a href="' . add_query_arg(array('page' => 'uptolike_settings'), admin_url('plugins.php')) . '">' . __('Settings') . '</a>';
    return $links;
}

add_filter('plugin_row_meta', 'my_plugin_description_links', 10, 4);

function my_plugin_description_links($links, $file) {
    if (false === strpos($file, basename(__FILE__))) return $links;
    $links[] = '<a href="' . add_query_arg(array('page' => 'uptolike_settings'), admin_url('plugins.php')) . '">' . __('Settings') . '</a>';
    return $links;
}