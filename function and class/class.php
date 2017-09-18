<?php

// class Car {
// 	public $fuel = "Disel";
// }

// $car = new Car;
// echo $car->fuel;

// class Home {
// 	public $fuel = "Octane";
// }

// $home = new Car;
// echo $home->fuel;


class Car {
	public $fuel = "Disel";

	function power($action){
		if($action == "on"){

			return "power on > ".$this->aircon();
		} else {
			return "off";	
		}
	}

	private function aircon() {
		return "air con start";
	}

	function hoon(){
		return "hoon start";
	}

	function lamp($action){
		if($action == "on") {
			return "lamp switch on";
		} else {
			return "lamp switch off";
		}
	}

	function brake(){
		return "brake start";
	}
}

$car = new Car;
//echo $car->fuel;
echo $car->power("on");
echo "<br>";
echo $car->lamp("on");

echo $car->brake;
//echo $car->hoon();
?>