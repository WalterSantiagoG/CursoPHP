<?php 

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

/*use Vehicles\Car;
use Vehicles\Truck;*/
use Vehicles\{Car, Truck};

echo 'Class Car<br>';

$car = new Car('Walter');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br>';

echo '<br>Class truck<br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();
/*$car->setOwner('Walter');
$car2->setOwner('Max');*/

//Podemos acceder de esta forma cuando la variable es publica
//$car->owner = 'Alex';

//Para obtener nuestra variable privada, debemos realizar el get del atributo
echo 'Owner truck: ' . $truck->getOwner();

?>