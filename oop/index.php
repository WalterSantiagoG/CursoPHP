<?php 

/**
* Class Vehicle
*/
class Vehicle 
{
	//public $owner;
	//private $owner = 'Walter'; //Eliminamos esta linea, porque no queremos que sea estática la asignación de esta variable, todos los vehículos que creemos no van hacer propiedad de walter, entonces debemos crear un método set
	//private $owner;
	protected $owner; // protected: será privado, pero accesible a partir de subclases o clases hijas.

	public function __construct($ownerName)
	{
		$this->owner = $ownerName;
		echo 'construct<br>';
	}

	public function move(){
		echo 'moving<br>';
	}

	public function getOwner() {
		return $this->owner;
	}

	public function setOwner($owner) {
		$this->owner = $owner;
	}

}

/**
* Class Vehicle
*/
class Car extends Vehicle {
	public function move(){
		echo 'Car: moving<br>';
	}
}

class Truck extends Vehicle {

	private $type;

	public function __construct($ownerName, $type)
	{
		$this->type = $type;
		//parent::__construct($ownerName);
		$this->owner = $ownerName;
	}

	public function move(){
		echo 'Truck ' . $this->type . ': moving<br>';
	}
}

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