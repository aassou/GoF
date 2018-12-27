<?php

namespace GoF\Creational\AbstractFactory\Buttons;

/**
 * Class SaveFactory
 * @package GoF\Creational\AbstractFactory\Buttons
 */
class SaveFactory implements GUIFactory
{
    /**
     * @return SaveButton
     */
    public function createButton()
    {
        return new SaveButton();
    }
}