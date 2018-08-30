<?php
/**
 * Created by PhpStorm.
 * User: Skuggan-lokal
 * Date: 2018-08-30
 * Time: 21:25
 */
// Show all errors. Remove for production
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


 class Form {
        // class properties
     const NAME = 'StdForm';
        protected $elements = [];
        protected $name;
        public $valid = false;

     public function getStartTag($attributes = null) {
         if(!$attributes) return '<form>';
         $tag = '<form';
         foreach($attributes as $key => $value) {
             $tag .=" $key\"$value\"";
         }
         $tag .= '>';
         return $tag;
     }

     public function getEndTag() {
         return '</form>';
     }

     public function setName($name = null) {
         if($name) {
             $this->name = $name;
         } else {
             $this->name = self::NAME;
         }
     }
 }