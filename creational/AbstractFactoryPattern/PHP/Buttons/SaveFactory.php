<?php

namespace GoF\Creational\AbstractFactory\Buttons;

class SaveFactory implements GUIFactory
{
    public function createButton()
    {
        return new SaveButton();
    }
}