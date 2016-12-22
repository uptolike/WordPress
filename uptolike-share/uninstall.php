<?php

if (!defined('WP_UNINSTALL_PLUGIN')) exit();

function uptolike_delete_plugin() {
    $delete = get_option('uptolike_options');
    $delete['uptolike_email'] = '';
    $delete['id_number'] = '';
    update_option('uptolike_options', $delete);
}

uptolike_delete_plugin();

?>

