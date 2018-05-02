<?php 

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

/*use Vehicles\Car;
use Vehicles\Truck;*/
use Vehicles\{Car, Truck, ToyCar};

try{
	echo 'Class ToyCar<br>';
	$toyCar = new ToyCar('Walter');
	//$toyCar->move();
} catch (Exception $e) {
	echo 'This is a toy<br><br>';
	//log...
}finally {
	echo 'finally<br><br>';
}

echo 'Class Car<br>';
$car = new Car('Walter');
$car->move();
//echo 'Owner car: ' . $car->getOwner() . '<br>';
echo 'GPS Pos: ' . $car->getPos();


echo '<br>Class truck 1<br>';
$truck1 = new Truck('Max', 'Pickup');
$truck1->move();
/*$car->setOwner('Walter');
$car2->setOwner('Max');*/

//Podemos acceder de esta forma cuando la variable es publica
//$car->owner = 'Alex';

//Para obtener nuestra variable privada, debemos realizar el get del atributo
//echo 'Owner truck: ' . $truck->getOwner();

echo '<br>Class truck 2<br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();

echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';;

//$v1 = new \Vehicles\VehicleBase('Alex');
//$v1->move(); 

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';

?>