<?php 

/*function hello($name){
	echo 'Hello ' . $name;
	echo '<br>';
}

hello('Walter');
hello('Santiago');*/

$x = 100;

function sum($a, $b){
	$x = $a + $b;
	return $x;
}

/*$c = sum(1, 2);
var_dump($c);

$c = sum(11, 22);
var_dump($c);*/

$c = sum(5, 6);
var_dump($c); //11
var_dump($x); //100

?>