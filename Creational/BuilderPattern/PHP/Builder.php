<?php

namespace GoF\Creational\BuilderPattern\Cars;

interface Builder
{
    public function setWheels($wheels);
    public function setColour($colour);
    public function getResult();
}