<?php
declare(strict_types = 1);


class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //this is just example code, you can remove the line below
        // Takes raw data from the request
        $json = file_get_contents('php://customers');

// Converts it into a PHP object

        $data = json_decode($json);

        echo $data->name;
        echo "\n";

        echo $data->id;
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'view/homepage.php';
    }
}