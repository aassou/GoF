<?php

namespace GoF\Creational\AbstractFactory\Cars;

/**
 * Class Tesla
 * @package GoF\Creational\AbstractFactory\Cars
 */
class Tesla implements Car
{
    public function startEngine()
    {
        printf("Tesla Engine Start!\n");
    }
}