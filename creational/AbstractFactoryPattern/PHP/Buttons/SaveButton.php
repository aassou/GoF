<?php

namespace GoF\Creational\AbstractFactory\Buttons;

/**
 * Class SaveButton
 * @package GoF\Creational\AbstractFactory\Buttons
 */
class SaveButton implements Button
{
    public function render()
    {
        printf("Render Save Button !\n");
    }    
}