<?php 
/*
 *	Made by MeganPie :: https://meganpie.github.io
 *  Based off the Web Server Stats Module, created by Samerton.
 *
 *  Module init file
 */
// Ensure module has been installed
$module_installed = $cache->retrieve('module_example_module');
if(!$module_installed){

	// Hasn't been installed	
  
} else {

	// Installed
  
}

// Custom language
$ss_language = new Language('modules/Server_Statistics/language');

// Define URLs which belong to this module
$pages->add('Example Module', '/admin/example', 'pages/example.php');

// Add link to admin sidebar
if(!isset($admin_sidebar)) $admin_sidebar = array();
$admin_sidebar['example'] = array(
	'title' => $ss_language->get('language', 'example_module_title'),
	'url' => URL::build('/admin/example')
);
