<?php

namespace GoF\Creational\AbstractFactory;

class SaveFactory implements GUIFactory
{
    public function createButton()
    {
        return new SaveButton();
    }
}