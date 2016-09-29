<?php
@session_start();

if (!isset($_SESSION['loggedin']) OR $_SESSION['loggedin'] != 1) {
    header("HTTP/1.1 401 Unauthorized");
    exit;
}

require_once(dirname(__FILE__) . '/../bootstrap/autoload.php');
require_once(dirname(__FILE__) . '/../bootstrap/routes.php');

Router::dispatch();
