<?php 

//Front Controller

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

//Solo aparece en nuestro Front Controller y no en cada una de las paginas
include_once '../config.php';

$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://'. $_SERVER['HTTP_HOST'] . $baseDir;
//var_dump($baseUrl); //String(38) "http://localhost/CursoPHP/blog/public/"
define('BASE_URL', $baseUrl);

$route = $_GET['route'] ?? '/';

//la función ob_star(); lo que hace es enviar las vistas al buffer y la función ob_get_clean(); lo que hace es que muestra los datos del buffer y los limpia.
function render($fileName, $params = []) {
	ob_start();
	extract($params);
	include $fileName;

	return ob_get_clean();
}

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();
$router->get('/',function() use ($pdo){
	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
	$query->execute();

	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
	return render('../views/index.php', ['blogPosts' => $blogPosts]);
});

//Despues de la ruta dispatcher: es el objeto que va tomar la ruta que nos esta llegando y va a mandar a llamar el metodo que realmente necesita 
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

//Respuesta dispatcher, REQUEST_METHOD Vamos a recibir el metodo que estamos utilizando sea GET o POST
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;