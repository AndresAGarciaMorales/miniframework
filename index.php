<?php


//Get Route // [0] = controller  [1] Method [2] params

//Get url
$uri = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
//divido en un array la url
$uri = explode('/',$uri);
// Controller
$controller = $uri[0];
//method
$method = $uri[0];
//params
$params = "";

//Route
require_once 'system/core/Route.php';
$url = new Route();

//Autoload
require_once 'system/core/Autoload.php';


/*
 * dejar los archivos requeris en este orden, para evitar el error de "Controller not found"
 * Route
 * Auto load
 * View
 * Controller
 * Home
 * Load
 * Requries
 * Helpers
*/

//Views
require_once 'system/core/View.php';
$view = new Views();

//Controller
require_once 'system/core/Controllers.php';
$control = new Controllers();

//HOME
require_once 'app/controllers/Home.php';
//$home = new Home();

//Load
require_once 'system/core/Load.php';
$load = new Load($controller, $method, $params);

//requires
require_once 'system/core/Config.php';
require_once 'system/core/Conexion.php';


//Helpers  //echo base_url();
require_once 'system/helpers/Helpers.php';





