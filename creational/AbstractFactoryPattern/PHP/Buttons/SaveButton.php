<?php

namespace GoF\Creational\AbstractFactory\Buttons;

class SaveButton implements Button
{
    public function render()
    {
        printf("Render Save Button !\n");
    }    
}