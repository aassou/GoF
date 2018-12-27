<?php

namespace GoF\Creational\BuilderPattern\Cars;

/**
 * Class Car
 * @package GoF\Creational\BuilderPattern\Cars
 */
class Car
{
    /**
     * @var int
     */
    private $wheels;

    /**
     * @var string
     */
    private $colour;

    /**
     * @return int
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param int $wheels
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }

    /**
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

}