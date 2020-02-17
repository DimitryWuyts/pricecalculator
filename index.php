<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//include header
require  'view/includes/header.php';




//include all your model files here
require 'model/User.php';
//include all your controllers here
require 'controller/HomepageController.php';






//include footer
require  'view/includes/footer.php';
//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

//$controller = new HomepageController();
//
//$controller->render($_GET, $_POST);
