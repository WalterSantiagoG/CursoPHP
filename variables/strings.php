<?php 

$intVar = 5;

$stringVar = "Hello ". $intVar;
echo $stringVar;

/*

Usando echo imprimimos el texto. Vamos a ver la diferencia entre comillas dobles (“) y comillas simples (‘).

Cuando ustedes usan comillas simples (‘) todo el texto que ustedes escriben aparecerá tal cual del lado del cliente.

Cuando se usan comillas dobles (“) PHP tratará de expandir las variables, es decir, traer valor de una variable y ponerlo en la cadena. Php tratará de evaluar la cadena para ver si existen caracteres de escape o variables.
$intVar = 5;

Y si luego incluímos la variable dentro del $stringVar, nos imprime todo el texto completo:

$intVar = 5;

$stringVar = ‘Hello $intVar’;
Echo $stringVar;

Nos imprime:

Hello $intVar

Si usamos comillas dobles, php va a sacar la variable y va a imprimir el valor de la variable.

$intVar = 5;

$stringVar = “Hello $intVar”;
echo $stringVar;

Nos imprime:

Hello 5
*/

?>