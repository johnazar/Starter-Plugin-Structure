<?php
/**
 * @package Starter Plugin
 * @version 1.0.0
 */
namespace Inc\Base;

 class Deactivate
 {
     public static function deactivate(){
         flush_rewrite_rules();
     }
 }