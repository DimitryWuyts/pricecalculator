<?php
//strict typing
declare(strict_types = 1);
require 'dataloader.php';
//include header
require 'view/includes/header.php';
//include footer
require  'view/includes/footer.php';
//include models
require 'model/User.php';
require 'model/products.php';
require 'model/group.php';
//include controllers
class HomepageController
{

//    public $customers = array();
//    public $products = array();
//
//    public function __construct()
//    {
//    $jsonCustomers = file_get_contents('customers.json');
//    // Converts it into a PHP object
//    $dataCustomers = json_decode($jsonCustomers);
//    $fullcustomerList = array();
//
////    foreach ($dataCustomers as $customers) {
////        array_push($fullProductList, $customers['name'] = new Customer ($customers['name'], $customers['id'], $customers['group_id']));
////    }
////    $listarray = array();
////    for ($i = 0; $i < count($fullcustomerList); $i++) {
////        $list_item = "<option>" . ucfirst(strtolower($fullcustomerList[$i]->getName())) . "</option>";
////        array_push($listarray, $list_item);
////    }
////
////    return implode('<br>', $listarray);
//
//
//}
//
//function dataproducts(){
//
//    $jsonProducts = file_get_contents('products.json');
//    // Converts it into a PHP object
//    $dataProducts = json_decode($jsonProducts);
//    $fullproductsList =  array();
//
//    foreach ($dataProducts as $products) {
//        array_push($allProducts, $products['name'] = new Products ($products['name'], $products['id'], $products['description'], $products['price']));
//    }
//
//    $list_array = array();
//    for($i=0; $i< count($fullproductsList); $i++){
//        $list_item = "<option>" . ucfirst(strtolower($fullproductsList[$i]->getName())). "</option>";
//        array_push($list_array, $list_item );
//    }
//
//    return implode('<br>', $list_array);
//}
//
////function createGroupObject()
////{
//
////    $jsonGroups = file_get_contents('groups.json');
////    $dataGroups = json_decode($jsonGroups, true);
////    // Converts it into a PHP object
////    $fullgroupList = array();
////
////    foreach ($dataGroups as $groups) {
////        array_push($fullgroupList, $groups['name'] = new Group ($groups['id'], $groups['name'], $groups['variable_discount'], $groups['group_id']));
////    }
////    $list_array = array();
////    for ($i = 0; $i < count($fullgroupList); $i++) {
////        $list_item = "<option>" . ucfirst(strtolower($fullgroupList[$i]->getName())) . "</option>";
////        array_push($list_array, $list_item);
////    }
////
////    return implode('<br>', $list_array);
////
////}
//

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $userDataArray = [];
//        $customerDataArray = [];
//        $groupDataArray = [];


        $loader = new dataloader();
        $allGroupData = $loader->fetchData('groups.json');
        $allCustomerData = $loader->fetchData('customers.json');
        $allProductData = $loader->fetchData('products.json');
        foreach ($allCustomerData as $user) {
            array_push($userDataArray, new User($user['name'], $user['id'], $user['group_id']));
        }
        var_dump($userDataArray);
        //load the view
        require 'view/homepage.php';
}}

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
//    echo '<h2>$_SESSION</h2>';
//    var_dump($_SESSION);
}
whatIsHappening();
