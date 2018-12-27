<?php

namespace GoF\Creational\BuilderPattern\Cars;

/**
 * Class CarBuilder
 * @package GoF\Creational\BuilderPattern\Cars
 */
class CarBuilder implements Builder
{
    /**
     * @var Car
     */
    private $car;

    /**
     * CarBuilder constructor.
     */
    public function __construct()
    {
        $this->car = new Car();
    }

    /**
     * @param $wheels
     * @return $this
     */
    public function setWheels($wheels)
    {
        $this->car->setWheels($wheels);
        return $this;
    }

    /**
     * @param $colour
     * @return $this
     */
    public function setColour($colour)
    {
        $this->car->setColour($colour);
        return $this;
    }

    /**
     * @return Car
     */
    public function getResult()
    {
        return $this->car;
    }
}