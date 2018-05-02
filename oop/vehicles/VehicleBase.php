<?php 

namespace Vehicles;

/**
* Class Vehicle
*/
class VehicleBase 
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

?>