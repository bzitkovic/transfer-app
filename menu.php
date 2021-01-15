<?php
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    $server = $_SERVER["PHP_SELF"];
    include_once '../header.php';


?>