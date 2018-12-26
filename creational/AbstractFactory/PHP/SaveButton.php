<?php

namespace GoF\Creational\AbstractFactory;

class SaveButton implements Button
{
    public function render()
    {
        printf("Render Save Button !\n");
    }    
}