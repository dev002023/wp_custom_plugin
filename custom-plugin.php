<?php 

/*

* Plugin Name: My Plugin 
* Description: This is Custom Plugin for Movies Website By GMS
* Version: 1.0.0
* Author: Pawan Kumar
* Author URI: http://localhost/

*/


define('PLUGINS_DIR_PATH',plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());
define("UPLOAD_URL",wp_upload_dir());


// for security 
if(!defined('ABSPATH')){
    header("Location:/wp_test");
    die();
}



function my_plugin_activate(){
	global $wpdb,$table_prefix;
	$my_plugin_user = $table_prefix.'my_plugin_user'; 

	   $query1 = "CREATE TABLE IF NOT EXISTS $my_plugin_user(`id` INT(11) NOT NULL AUTO_INCREMENT , `f_name` VARCHAR(255) NOT NULL , `l_name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `phone` INT NOT NULL , `address` TEXT NOT NULL , `status` INT NOT NULL , `image` VARCHAR(255) NOT NULL , `user_post` VARCHAR(255) NOT NULL , `add_on` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
	   ";
	$wpdb->query($query1);

}
register_activation_hook(__FILE__, 'my_plugin_activate');



function my_plugin_deactivation(){
    global $wpdb,$table_prefix;
	$my_plugin_user = $table_prefix.'my_plugin_user'; 

    $query1 = "TRUNCATE $my_plugin_user";
    $wpdb->query($query1);
}
register_deactivation_hook(__FILE__, 'my_plugin_deactivation');



function my_plugin_menu()
{

 add_menu_page( 'My Plugins', 'My Plugin', 'manage_options', 'dashboard',  'dashboard_page_load');
 add_submenu_page('dashboard', 'Add User', 'Add User', 'manage_options', 'add_user', 'add_user_page_load');
 add_submenu_page('dashboard', 'Manage User', 'Manage User', 'manage_options', 'Manage User', 'user_list_page_load');

}
add_action('admin_menu','my_plugin_menu');

function dashboard_page_load()
{
	include('admin/dashboard.php');
}

function add_user_page_load()
{
	include('admin/add_user.php');
}

function user_list_page_load()
{
	include('admin/list_user.php');
}



