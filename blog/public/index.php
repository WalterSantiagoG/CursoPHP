<?php 

//Front Controller

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

//Solo aparece en nuestro Front Controller y no en cada una de las paginas
include_once '../config.php';

$route = $_GET['route'] ?? '/';

/*switch ($route) {
	case '/':
		require '../index.php';
		break;

	case '/admin':
		require '../admin/index.php';
		break;	

	case '/admin/posts':
		require '../admin/posts.php';
		break;
}*/

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();
$router->get('/',function() use ($pdo){
	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
	$query->execute();

	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
	include '../views/index.php';
});

//Despues de la ruta dispatcher: es el objeto que va tomar la ruta que nos esta llegando y va a mandar a llamar el metodo que realmente necesita 
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

//Respuesta dispatcher, REQUEST_METHOD Vamos a recibir el metodo que estamos utilizando sea GET o POST
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;