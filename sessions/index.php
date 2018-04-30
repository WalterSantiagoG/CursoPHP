<?php 

//Cuando utilizamos session_start() damos acceso a algo que llamamos variables super globales 
session_start();

$_SESSION['count'] = 0;

echo '<p>Session</p>';

?>