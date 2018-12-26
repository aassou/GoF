<?php

namespace GoF\Creational\AbstractFactory;

class ResetButton implements Button
{
    public function render()
    {
        printf("Render Reset Button !\n");
    }
}