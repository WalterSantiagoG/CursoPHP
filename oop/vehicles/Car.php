<?php 

namespace Vehicles;

require_once 'VehicleBase.php';

/**
* Class Vehicle
*/
class Car extends VehicleBase {
	public function move(){
		echo 'Car: moving<br>';
	}
}


?>