<?php
include_once 'Fruits.php';
include_once 'Edible.php';
abstract class Animal
{
    abstract public function makeSound();
}

class Tiger extends Animal implements Edible
{
    public function makeSound()
    {
        return "The tiger goes roarrrrrrrrrrr";
    }

    public function howToEat()
    {
        return "Eat a tiger?It might eats you instead";
    }
}

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "The cock goes cluck cluck";
    }

    public function howToEat()
    {
        return "Ffs just eat it raw";
    }
}

$tiger = new Tiger();
$chicken = new Chicken();

echo $tiger->makeSound();
echo "<br>";
echo $chicken->makeSound();
echo "<br>";

$orange = new Orange();
$apple = new Apple();

echo $orange->howToEat();
echo "<br>";
echo $apple->howToEat();