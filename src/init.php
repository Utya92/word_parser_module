<?php
require_once 'vendor/autoload.php';

//custom autoloader
spl_autoload_register(function ($class) {
    require 'src\\' . $class . ".php";
});

//custom debug function
function debug($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
