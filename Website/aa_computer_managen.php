<?php

if (!isset($_GET['mode'])) {
    include_once(dirname(__FILE__).'/zzserver.php');
}
require_once(dirname(__FILE__).'/classes/ComputerManager.php');

new ComputerManager();

?>