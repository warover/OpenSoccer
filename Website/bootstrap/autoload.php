<?php

require_once(dirname(__FILE__) . '/../utils/database.php');
//require_once dirname(__DIR__) . '/Logger/Log.php';

spl_autoload_register("autoloadController");
spl_autoload_register("autoloadRouter");
spl_autoload_register("autoloadHelpers");

function autoloadController($className) {
    $filename = dirname(__FILE__) . "/../controller/" . $className . ".php";
    if (is_readable($filename)) {
        require_once $filename;
    }
}

function autoloadRouter($className) {
    $filename = dirname(__FILE__) . "/../Router/" . $className . ".php";
    if (is_readable($filename)) {
        require_once $filename;
    }
}

function autoloadHelpers($className) {
    $filename = dirname(__FILE__) . "/../Helpers/" . $className . ".php";
    if (is_readable($filename)) {
        require_once $filename;
    }
}
