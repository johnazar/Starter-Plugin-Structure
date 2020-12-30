<?php

/**
 * @package Starter Plugin
 * @version 1.0.0
 */
/*
Plugin Name: Starter Plugin
Plugin URI: http://johnazar.com/plugin
Description: This is just a plugin, for testing.
Author: John Starter
Version: 1.0.0
Author URI: http://johnazar.com/
License: MIT
Text Domain: starter-plugin
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright 2005-2015 Automattic, Inc.
*/

defined('ABSPATH') or die('unauthorized access');

/* if(! function_exists('add_action')){
    die();
} */

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}
define ('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_NAME', plugin_basename(__FILE__));



register_activation_hook(__FILE__,array('Inc\Base\Activate','activate'));

register_deactivation_hook(__FILE__,array('Inc\Base\Deactivate','deactivate'));



if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}
