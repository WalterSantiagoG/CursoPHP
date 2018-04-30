<?php 

$v1 = 10;
$v2 = 10;

//$result = $v1 == $v2;
//$result = $v1 === $v2;
//$result = $v1 != $v2;

/*
Esta operacion puede mostrar 3 resultados:
 0 Si los numeros son iguales
-1 Si el primer elemento es menor
 1 Si el primer elemento es mayor
*/
$result = $v1 <=> $v2;
var_dump($result);

?>