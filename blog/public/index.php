<?php 

//Front Controller

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Solo aparece en nuestro Front Controller y no en cada una de las paginas
include_once '../config.php';

$route = $_GET['route'] ?? '/';

switch ($route) {
	case '/':
		require '../index.php';
		break;

	case '/admin':
		require '../admin/index.php';
		break;	

	case '/admin/posts':
		require '../admin/posts.php';
		break;
}