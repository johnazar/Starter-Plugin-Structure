<?php
/**
 * @package starter-plugin
 */


namespace Inc;

 final class Init
 {
     /**
      * Store all class inside an array
      *
      * @return array Full list of classes
      */
     public static function get_services(){
         return [
             Pages\Admin::class,
             Base\Enqueue::class,
             Base\SettingsLinks::class
         ];
     }
     /**
      * Initialize the class
      *
      * @param [class] $class class from the services array
      * @return class instance new instance of the class
      */
     private static function instantiate($class){
         $service = new $class();
         return $service;

     }
     /**
      * Loop through the classes, initialize them, and call the register() if exists
      *
      * @return 
      */
     public static function  register_services(){
         foreach (self::get_services() as $class){
             $service = self::instantiate($class);
             if(method_exists($service,'register')){
                 $service->register();
             }

         }
     }
 }
/* 
use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Pages\Admin;


// check if we have class then init object and run funcs
if(!class_exists('AzarPlugin')){
    
class AzarPlugin
{
    public $plugin;

    function __construct(){
        $this->plugin= plugin_basename(__FILE__);
        
    }
    //THIS FUNC IS CALLED AT INIT
    function register(){
        //load to admin area css & js
        add_action('admin_enqueue_scripts',array($this,'enqueue'));
        //load front end wp css & js
        add_action('wp_enqueue_scripts',array($this,'enqueue'));

        // Plugin page PP 01
        // add action to admin menu on loading will run a function
        add_action('admin_menu', array($this,'add_admin_pages'));

        // PP 02
        //add a link into plugin to our plugin's page
        //add_filter('plugin_action_link_NAME-OF-PLUGIN')
        add_filter("plugin_action_links_$this->plugin" ,array($this,'starter_settings_link'));
        //run a function to generate custom post type CPT 01
        $this->create_post_type();
        
    }
    function activate(){
        Activate::activate();
    }
    function deactivate(){
        Deactivate::deactivate();
    }

    //CPT 03 
    function custom_post_type(){
        //here we register a CPT
        register_post_type('book', ['public'=>true,'label'=>'Books','menu_icon'=>'dashicons-book']);
    }

    //CPT 02
    protected function create_post_type(){
        //start at init a function
        add_action('init',array($this,'custom_post_type'));
    }

    //PP 03
    function add_admin_pages(){
        //run a built-in function to add item to menu
        add_menu_page('Starter Plugin','Starter','manage_options','starter_plugin',array($this,'starter_index'),'dashicons-tide',110);

    }
    //PP 03
    function starter_settings_link($links){
        $links[] = '<a href="'. esc_url( get_admin_url(null, 'admin.php?page=starter_plugin') ) .'">Settings</a>';
        $links[] = '<a href="http://johnazar.com" target="_blank">Plugins by John Starter</a>';
        return $links;
        
    }
    //PP 04
    function starter_index(){
        require_once plugin_dir_path(__FILE__).'templates/admin.php';
    }



    function enqueue(){
        // enqueue CSS define where the scripts
        wp_enqueue_style('mypluginstyle',plugins_url('assets/mystyle.css',__FILE__));
        // enqueue CSS define where the scripts
        wp_enqueue_script('mypluginscript',plugins_url('assets/myscript.js',__FILE__));
    }

    
}

// init obj of class
$azarPlugin = new AzarPlugin();
// run main func
$azarPlugin->register();

// activation
//plugin activation
register_activation_hook(__FILE__,array('Inc\Activate','activate'));

// deactivation
//plugin deactivation
register_deactivation_hook(__FILE__,array($azarPlugin,'deactivate'));

//plugin uninstall (we need to make unistall a static method)
//register_uninstall_hook(__FILE__, array($azarPlugin,'uninstall'));

}
 */