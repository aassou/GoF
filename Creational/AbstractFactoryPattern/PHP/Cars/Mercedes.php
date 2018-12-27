<?php

namespace GoF\Creational\AbstractFactory\Cars;

/**
 * Class Mercedes
 * @package GoF\Creational\AbstractFactory\Cars
 */
class Mercedes implements Car
{
    public function startEngine()
    {
        printf("Mercedes Engine Start!\n");
    }
}