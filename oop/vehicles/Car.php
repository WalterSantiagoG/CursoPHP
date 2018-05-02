<?php 

namespace Vehicles;

require_once 'VehicleBase.php';

/**
* Class Vehicle
*/
class Car extends VehicleBase {
	public function move(){
		echo $this->startEngine() . '<br>';
		echo 'Car: moving<br>';
	}

	public function startEngine(){
		return 'Car: start engine';
	}
}


?>