<?php

//Require autoload file
require_once('vendor/autoload.php');

//Create an insurance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function (){

    echo '<h1>Git Lab</h1>';
});

//Run fat fre
$f3->run();

?>