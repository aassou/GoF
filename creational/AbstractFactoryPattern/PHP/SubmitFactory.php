<?php

namespace GoF\Creational\AbstractFactory;

class SubmitFactory implements GUIFactory
{
    public function createButton()
    {
        return new SubmitButton();
    }
}