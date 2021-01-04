<?php

spl_autoload_register("classLoad");
function classLoad($class) {
include __DIR__ . '/classes/' . $class . '.php';
}

require_once('Routes.php');



?>