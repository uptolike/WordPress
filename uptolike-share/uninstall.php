<?php

if (!defined('WP_UNINSTALL_PLUGIN')) exit();

function uptolike_delete_plugin() {
    $delete = get_option('my_option_name');
    $delete['uptolike_email'] = '';
    $delete['id_number'] = '';
    update_option('my_option_name', $delete);
}

uptolike_delete_plugin();

?>

