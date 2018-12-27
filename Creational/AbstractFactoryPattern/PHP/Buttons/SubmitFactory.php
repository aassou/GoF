<?php

namespace GoF\Creational\AbstractFactory\Buttons;

/**
 * Class SubmitFactory
 * @package GoF\Creational\AbstractFactory\Buttons
 */
class SubmitFactory implements GUIFactory
{
    /**
     * @return SubmitButton
     */
    public function createButton()
    {
        return new SubmitButton();
    }
}