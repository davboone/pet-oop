<?php

//start session
session_start();

//This is my controller for the diner project

//Turn on error-reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require necessary files
require_once ('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Define default route
$f3->route('GET /', function(){

    echo '<h1>Hello, pets!</h1>';

    //Instantiate a pet object
    $pet1 = new Pet();

    //Invoke the eat method
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();
});

//Run Fat-Free
$f3->run();