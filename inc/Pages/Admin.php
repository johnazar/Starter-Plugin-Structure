<?php

namespace Inc\Pages;
class Admin
{   

    public function register(){
        // add action to admin menu on loading will run a function
        add_action('admin_menu', array($this,'add_admin_pages'));
        
    }
    //
    function add_admin_pages(){
        //run a built-in function to add item to menu
        add_menu_page('Starter Plugin','Starter','manage_options','starter_plugin',array($this,'starter_index'),'dashicons-tide',110);

    }
    //
    function starter_index(){
        require_once PLUGIN_PATH.'templates/admin.php';
    }



}