<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

global $wpdb,$table_prefix;
$my_plugin_user = $table_prefix.'my_plugin_user'; 


$q = "DROP TABLE $my_plugin_user";
$wpdb->query($q);