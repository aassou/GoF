<?php

namespace GoF\Creational\AbstractFactory\Cars;

/**
 * Class MercedesFactory
 * @package GoF\Creational\AbstractFactory\Cars
 */
class MercedesFactory implements CarFactory
{
    /**
     * @return Mercedes
     */
    public function createCar()
    {
        return new Mercedes();
    }
}