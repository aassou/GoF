<?php

namespace GoF\Creational\AbstractFactory\Cars;

/**
 * Class TeslaFactory
 * @package GoF\Creational\AbstractFactory\Cars
 */
class TeslaFactory implements CarFactory
{
    /**
     * @return Tesla
     */
    public function createCar()
    {
        return new Tesla();
    }
}