<?php

require_once 'config/main.php';

/**
 * Will be registered as the __autoload() function
 * @param type $class Class name to attempt to load
 */
function autoload($class) {
    // if file does not exist in system folder
    // then check in libs folder
    if (file_exists('system/' . $class . ".php")) {
        require_once 'system/' . $class . ".php";
    } else {
        require_once "lib/" . $class . ".php";
    }
    
}

spl_autoload_register('autoload');

$app = new Bootstrap();


var_dump($_SERVER);

?>
