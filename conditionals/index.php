<?php 

$color = 'green';

/*if ($color == 'black') {
	echo 'Color is Black';
}elseif ($color == 'white'){
	echo 'Color is White';
}else{
	echo 'Color...';
}*/

switch ($color) {
	case 'blue':
		echo 'Color is blue';
		break;

	case 'red':
		echo 'Color is red';
		break;
	
	default:
		echo 'Other';
		break;
}

?>