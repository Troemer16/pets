<?php

    //require the autoload file
    require_once ('vendor/autoload.php');

    //create an instance of the base class
    $f3 = Base::instance();

    //Define a default route
    $f3->route('GET /', function() {
        //echo "<h1>Pet Home</h1>";
        $view = new View();
        echo $view ->rendor("views/home.html");
    });

    //Run Fat-Free
    $f3->run();

?>