<?php

namespace GoF\Creational\AbstractFactory\Cars;

$teslaFactory = new TeslaFactory();
$mercedesFactory = new MercedesFactory();

//create Tesla
$car = $teslaFactory->createCar();
$car->startEngine();

//create Mercedes
$car = $mercedesFactory->createCar();
$car->startEngine();