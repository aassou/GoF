<?php

namespace GoF\Creational\AbstractFactory\Buttons;

/**
 * Class ResetFactory
 * @package GoF\Creational\AbstractFactory\Buttons
 */
class ResetFactory implements GUIFactory
{
    /**
     * @return ResetButton
     */
    public function createButton()
    {
        return new ResetButton();
    }
}