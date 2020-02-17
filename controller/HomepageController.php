<?php
//strict typing
declare(strict_types = 1);
// json for customers
        $jsonCustomers = file_get_contents('customers.json');
        // Converts it into a PHP object
        $dataCustomers = json_decode($jsonCustomers);

// json for products
        $jsonProducts = file_get_contents('products.json');
        // Converts it into a PHP object
        $dataProducts = json_decode($jsonProducts);

// json for groups
        $jsonGroups = file_get_contents('groups.json');
        // Converts it into a PHP object
        $dataGroups = json_decode($jsonGroups);


        //load the view
        require 'view/homepage.php';

