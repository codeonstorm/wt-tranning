<?php 

function dashboard_autoloader($class) { 
    $files = glob(__DIR__ . '/../classes/*.php');  
  
    foreach ($files as $file) {
      $class_file = basename($file, '.php');
      if ($class_file === $class) {
        include $file;
        break;
      }
    }
  }

spl_autoload_register('dashboard_autoloader');
  
  