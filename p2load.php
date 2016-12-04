<?php

function my_autoloader($class) {
    include 'p2/' . $class . '.php';
}

spl_autoload_register('my_autoloader');
?>