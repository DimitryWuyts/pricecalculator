<?php
//strict typing
declare(strict_types = 1);

// json for customers

     function datacustomers()
{

    $jsonCustomers = file_get_contents('customers.json');
    // Converts it into a PHP object
    $dataCustomers = json_decode($jsonCustomers);
    $fullcustomerList = array();

    foreach ($dataCustomers as $customers) {
        array_push($fullProductList, $customers['name'] = new Customer ($customers['name'], $customers['id'], $customers['group_id']));
    }
    $listarray = array();
    for ($i = 0; $i < count($fullcustomerList); $i++) {
        $list_item = "<option>" . ucfirst(strtolower($fullcustomerList[$i]->getName())) . "</option>";
        array_push($listarray, $list_item);
    }

    return implode('<br>', $listarray);


}

function dataproducts(){

    $jsonProducts = file_get_contents('products.json');
    // Converts it into a PHP object
    $dataProducts = json_decode($jsonProducts);
    $fullproductsList =  array();

    foreach ($dataProducts as $products) {
        array_push($allProducts, $products['name'] = new Products ($products['name'], $products['id'], $products['description'], $products['price']));
    }

    $list_array = array();
    for($i=0; $i< count($fullproductsList); $i++){
        $list_item = "<option>" . ucfirst(strtolower($fullproductsList[$i]->getName())). "</option>";
        array_push($list_array, $list_item );
    }

    return implode('<br>', $list_array);
}

function createGroupObject()
{

    $jsonGroups = file_get_contents('groups.json');
    $dataGroups = json_decode($jsonGroups, true);
    // Converts it into a PHP object
    $fullgroupList = array();

    foreach ($dataGroups as $groups) {
        array_push($fullgroupList, $groups['name'] = new Group ($groups['id'], $groups['name'], $groups['variable_discount'], $groups['group_id']));
    }
    $list_array = array();
    for ($i = 0; $i < count($fullgroupList); $i++) {
        $list_item = "<option>" . ucfirst(strtolower($fullgroupList[$i]->getName())) . "</option>";
        array_push($list_array, $list_item);
    }

    return implode('<br>', $list_array);

}

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        //load the view
        require 'view/homepage.php';
    }
}


