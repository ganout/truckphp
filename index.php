<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
var_dump(Car::ALLOWED_ENERGIES);

$foodTruck = new Truck("red", 3, 40, "fuel");

echo $foodTruck->isFull() . "<br>";
$foodTruck->setLoading(40);
echo  $foodTruck->isFull() . "<br>";
echo $foodTruck->forward() . "<br>";
echo $foodTruck->brake();