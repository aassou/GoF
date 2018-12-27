<?php

namespace GoF\Creational\AbstractFactory\Buttons;

class SubmitButton implements Button
{
    public function render()
    {
        printf("Render Submit Button !\n");
    }
}