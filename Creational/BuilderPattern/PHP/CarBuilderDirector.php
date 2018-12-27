<?php

namespace GoF\Creational\BuilderPattern\Cars;

/**
 * Class CarBuilderDirector
 * @package GoF\Creational\BuilderPattern\Cars
 */
class CarBuilderDirector
{

    /**
     * @var CarBuilder
     */
    private $carBuilder;

    /**
     * CarBuilderDirector constructor.
     * @param CarBuilder $carBuilder
     */
    public function __construct(CarBuilder $carBuilder)
    {
        $this->carBuilder = $carBuilder;
    }

    /**
     * @return $this
     */
    public function build()
    {
        $this->carBuilder->setColour('Red');
        $this->carBuilder->setWheels(4);

        return $this;
    }

    /**
     * @return Car
     */
    public function getCar()
    {
        return $this->carBuilder->getResult();
    }
}