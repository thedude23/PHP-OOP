<?php

// spl_autoload_register('myAutoLoader');

// function myAutoLoader($className) {
//   $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//   if (strpos($url, 'includes') !== false) {
//     $path = '../appClasses/classes/';
//   }
//   else {
//     $path = 'appClasses/classes/';
//   }

//   $extension = '.php';
//   $fullPath = $path . $className . $extension;

  
//   // For errors
//   if (!file_exists($fullPath)) {
//     return false;
//   }
  
//   include_once $fullPath;
// }


// spl_autoload_register(function($className) {
//   include_once str_replace("\\", "/", $className) . ".php";
// });


spl_autoload_register(function($className) { 
  require_once dirname( __FILE__ ) . '/' . str_replace('\\', '/', $className) . '.php';
  // echo '!!! Autoload class: ' . $className . ' !!!';
});