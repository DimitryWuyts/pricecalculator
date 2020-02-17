<?php
declare(strict_types = 1);


        $json = file_get_contents('customers.json');

        // Converts it into a PHP object
        $data = json_decode($json);

        var_dump($data);


        //load the view
        require 'view/homepage.php';


