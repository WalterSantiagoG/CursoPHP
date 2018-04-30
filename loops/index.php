<?php 

/*for ($i=0; $i <= 10; $i++) { 
	echo $i . '<br>';
}*/

/*$i=1;
while ( $i <= 10) {
	echo $i . '<br>';
	$i++;
}*/

/*$i=1;
do {
	echo $i . '<br>';
	$i++;
} while ( $i <= 10);*/

$names = ['Alex', 'Elizabeth', 'Mary'];
foreach ($names as $key => $name) {
	echo $key . ' - ' .  $name . '<br>';
	echo $name . '<br>';
}

/*

echo $key . ' - ' .  $name . '<br>';

Imprimiendo con llaves
0 - Alex
1 - Elizabeth
2 - Mary

echo $name . '<br>';

Imprimiendo sin llaves
Alex
Elizabeth
Mary

*/

?>