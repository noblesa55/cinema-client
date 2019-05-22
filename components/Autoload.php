<?php
  
  spl_autoload_register(function ($className) {
    $directories = array(
      'components', 
      'controllers',
      'models'
    );
    foreach ($directories AS $dir) {
      if (is_file("./$dir/$className.php")) {
        include_once("./$dir/$className.php");
        break;
      }
    }
  });


?>