<?php

if (!defined('WP_UNINSTALL_PLUGIN'))
    exit();

function uptolike_delete_plugin() {

    delete_option('uptolike_options');
    delete_option('widget_uptolikewidget');
}

uptolike_delete_plugin();

?>

