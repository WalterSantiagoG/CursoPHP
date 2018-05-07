<?php 

//Front Controller

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

session_start();

$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://'. $_SERVER['HTTP_HOST'] . $baseDir;
//var_dump($baseUrl); //String(38) "http://localhost/CursoPHP/blog/public/"
define('BASE_URL', $baseUrl);

//Añadimos nuestro archivo .env como variables de entorno
$dotenv = new \Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->controller('/auth', App\Controllers\AuthController::class);
$router->controller('/admin', App\Controllers\Admin\IndexController::class);

$router->controller('/admin/posts', App\Controllers\Admin\PostController::class);
$router->controller('/admin/users', App\Controllers\Admin\UserController::class);

$router->controller('/', App\Controllers\IndexController::class);

//Despues de la ruta dispatcher: es el objeto que va tomar la ruta que nos esta llegando y va a mandar a llamar el metodo que realmente necesita 
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

//Respuesta dispatcher, REQUEST_METHOD Vamos a recibir el metodo que estamos utilizando sea GET o POST
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;