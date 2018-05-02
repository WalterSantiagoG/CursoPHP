<?php 

/**
* Class Car
*/
class Car 
{
	//public $owner;
	//private $owner = 'Walter'; //Eliminamos esta linea, porque no queremos que sea estática la asignación de esta variable, todos los vehículos que creemos no van hacer propiedad de walter, entonces debemos crear un método set
	private $owner;

	public function __construct($ownerName)
	{
		$this->owner = $ownerName;
		echo 'construct<br>';
	}

	public function __destruct()
	{
		echo 'destruct<br>';
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

echo 'Class Car<br>';

$car = new Car('Walter');
$car2 = new Car('Max');

$car->move();
/*$car->setOwner('Walter');
$car2->setOwner('Max');*/

//Podemos acceder de esta forma cuando la variable es publica
//$car->owner = 'Alex';

//Para obtener nuestra variable privada, debemos realizar el get del atributo
echo 'Owner car: ' . $car->getOwner() . '<br>';
echo 'Owner car2: ' . $car2->getOwner();

?>