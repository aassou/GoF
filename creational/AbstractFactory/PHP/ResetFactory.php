<?php

namespace GoF\Creational\AbstractFactory;

class ResetFactory implements GUIFactory
{
    public function createButton()
    {
        return new ResetButton();
    }
}