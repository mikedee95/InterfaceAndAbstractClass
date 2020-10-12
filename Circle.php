<?php
class Circle
{
    public $name;
    public $radius;

    public function __construct($_name,$_radius)
    {
        $this->name = $_name;
        $this->radius = $_radius;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function setRadius($_radius)
    {
        $this->radius = $_radius;
    }
}
