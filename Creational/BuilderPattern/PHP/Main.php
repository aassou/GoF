<?php

namespace GoF\Creational\BuilderPattern\Cars;

$carBuilder = new CarBuilder();
$carBuilderDirector = new CarBuilderDirector($carBuilder);
$car = $carBuilderDirector->build()->getCar();
$car->getWheels();