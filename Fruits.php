<?php
include_once 'Edible.php';

abstract class Fruit implements Edible{
}

class Apple extends Fruit{
    public function howToEat()
    {
        return "Eat an apple? Put it in your mouth and bite then swallow";
    }
}

class Orange extends Fruit{
    public function howToEat()
    {
        return "Eat an orange? Peel the skin then eat like a-normal-person";
    }
}