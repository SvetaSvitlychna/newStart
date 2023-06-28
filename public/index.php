<?php
//include_once __DIR__.("/../functions.php");


//dd($_SERVER['REQUEST_URI']);

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$routes =[
    '/' => 'homePage.php',
//     '/about'=>'Controllers/about.php',
//    '/edit' =>'Controllers/edit.php',
//    '/show'=>'Controllers/show.php'
];


$route = $_SERVER['REQUEST_URI'];
if(array_key_exists($route, $routes)){
//    dd($routes[$route]);
    include __DIR__."/../".$routes[$route]; exit;
}else{
    echo(404);
}





