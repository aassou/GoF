<?php

namespace GoF\Creational\AbstractFactory\Buttons;

$submitFactory = new SubmitFactory();
$resetFactory = new ResetFactory();
$saveFactory = new SaveFactory();

$button = $submitFactory->createButton();
$button->render();

$button = $resetFactory->createButton();
$button->render();

$button = $saveFactory->createButton();
$button->render();



