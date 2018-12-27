<?php

namespace GoF\Creational\AbstractFactory\Buttons;

class ResetButton implements Button
{
    public function render()
    {
        printf("Render Reset Button !\n");
    }
}