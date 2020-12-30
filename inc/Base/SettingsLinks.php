<?php
/**
 * @package Starter Plugin
 * @version 1.0.0
 */
namespace Inc\Base;
class SettingsLinks
{
    protected $plugin;
    public function __construct(){
        $this->plugin = PLUGIN_NAME;
    }
    public function register(){
        //add a link into plugin to our plugin's page
        //add_filter('plugin_action_link_NAME-OF-PLUGIN')
        add_filter("plugin_action_links_$this->plugin",array($this,'starter_settings_link'));
    }
        //
        function starter_settings_link($links){
            $links[] = '<a href="'. esc_url( get_admin_url(null, 'admin.php?page=starter_plugin') ) .'">Settings</a>';
            $links[] = '<a href="http://johnazar.com" target="_blank">Plugins by John Azar</a>';
            return $links;
            
        }
 }