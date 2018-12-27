<?php

namespace GoF\Creational\AbstractFactory\Buttons;

class SubmitFactory implements GUIFactory
{
    public function createButton()
    {
        return new SubmitButton();
    }
}