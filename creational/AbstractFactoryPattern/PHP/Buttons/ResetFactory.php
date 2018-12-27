<?php

namespace GoF\Creational\AbstractFactory\Buttons;

class ResetFactory implements GUIFactory
{
    public function createButton()
    {
        return new ResetButton();
    }
}