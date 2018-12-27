<?php

namespace GoF\Creational\AbstractFactory;

class SubmitButton implements Button
{
    public function render()
    {
        printf("Render Submit Button !\n");
    }
}