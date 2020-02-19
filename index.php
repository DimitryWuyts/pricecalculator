<?php
//enable strict typing
declare(strict_types=1);
//enable errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require 'controller/HomepageController.php';

session_start();
if (!isset($_SESSION)) {
    $controller::$products[] = $_SESSION['products'];
    $controller::$customers[] = $_SESSION['customers'];
}


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
$controller->render($_GET, $_POST);