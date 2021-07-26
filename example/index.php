<?php

// echo '<pre>';
// var_dump(php_ini_loaded_file());
// var_dump(php_ini_scanned_files());
// Verify xdebug config success
// xdebug_info();

require_once __DIR__.'/Person.php';

$person = new Person('Brian', 30);

echo "Person name is: ".$person->getName();