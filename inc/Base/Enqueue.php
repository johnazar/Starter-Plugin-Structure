<?php
/**
 * @package Starter Plugin
 * @version 1.0.0
 */
namespace Inc\Base;
class Enqueue
{
    public function register(){
        //load to admin area css & js
        add_action('admin_enqueue_scripts',array($this,'enqueue'));
        //load front end wp css & js
        add_action('wp_enqueue_scripts',array($this,'enqueue'));
    }

    function enqueue(){
        // enqueue CSS define where the scripts
        wp_enqueue_style('mypluginstyle',PLUGIN_URL.'assets/mystyle.css');
        // enqueue CSS define where the scripts
        wp_enqueue_script('mypluginscript',PLUGIN_URL.'assets/myscript.js');
    }

}
