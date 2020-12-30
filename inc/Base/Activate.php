<?php
/**
 * @package Starter Plugin
 * @version 1.0.0
 */
namespace Inc\Base;

 class Activate
 {
     public static function activate(){
         flush_rewrite_rules();
     }
 }